// node --test scripts/demo-import-wp.test.mjs
// Runs the shared demo importer and the theme fixes on real, throwaway WordPress sites (SQLite, WP-CLI, no web server).
// Needs php (with pdo_sqlite) and a folder with wp.zip (wordpress/…), sqlite.zip (sqlite-database-integration/…) and
// wp-cli.phar, given as WP_RUNTIME=/path/to/runtime. Skipped when either is missing (e.g. in CI).
import { test } from "node:test";
import assert from "node:assert/strict";
import { execFileSync } from "node:child_process";
import { existsSync, mkdtempSync, readFileSync, rmSync, symlinkSync, writeFileSync } from "node:fs";
import { tmpdir } from "node:os";
import { join } from "node:path";
import { fileURLToPath } from "node:url";

const RUNTIME = process.env.WP_RUNTIME ?? "";
const THEMES = fileURLToPath(new URL("../themes/", import.meta.url));
const hasPhp = (() => { try { execFileSync("php", ["-r", "exit(extension_loaded('pdo_sqlite') ? 0 : 1);"]); return true; } catch { return false; } })();
const ready = hasPhp && ["wp.zip", "sqlite.zip", "wp-cli.phar"].every((f) => RUNTIME && existsSync(join(RUNTIME, f)));
const skip = ready ? false : "set WP_RUNTIME to a folder with wp.zip, sqlite.zip and wp-cli.phar (and install php with pdo_sqlite)";

const sites = [];
function site(...themes) {
  const root = mkdtempSync(join(tmpdir(), "shippress-wp-"));
  sites.push(root);
  execFileSync("unzip", ["-q", join(RUNTIME, "wp.zip"), "-d", root]);
  const path = join(root, "wordpress"), plugins = join(path, "wp-content/plugins");
  execFileSync("unzip", ["-q", join(RUNTIME, "sqlite.zip"), "-d", plugins]);
  const impl = join(plugins, "sqlite-database-integration");
  writeFileSync(join(path, "wp-content/db.php"), readFileSync(join(impl, "db.copy"), "utf8").replaceAll("{SQLITE_IMPLEMENTATION_FOLDER_PATH}", impl).replaceAll("{SQLITE_PLUGIN}", "sqlite-database-integration/load.php"));
  for (const t of themes) symlinkSync(join(THEMES, t), join(path, "wp-content/themes", t));
  const wp = (...args) => execFileSync("php", ["-d", "memory_limit=512M", join(RUNTIME, "wp-cli.phar"), `--path=${path}`, ...args], { encoding: "utf8", stdio: ["ignore", "pipe", "pipe"] }).trim();
  wp("config", "create", "--dbname=wp", "--dbuser=wp", "--dbpass=wp", "--skip-check");
  wp("core", "install", "--url=http://localhost:8080", "--title=WordPress", "--admin_user=admin", "--admin_password=admin", "--admin_email=admin@example.com", "--skip-email");
  const php = (code) => wp("eval", code);
  return { wp, php, json: (code) => JSON.parse(php(code)) };
}
test.after(() => { for (const s of sites) rmSync(s, { recursive: true, force: true }); });

const HELLO = `$p = get_post( 1 ); echo wp_json_encode( array( 'status' => $p->post_status, 'title' => $p->post_title ) );`;
const PAGES = `echo wp_json_encode( array_count_values( wp_list_pluck( get_posts( array( 'post_type' => 'page', 'post_status' => 'any', 'numberposts' => -1 ) ), 'post_title' ) ) );`;
const LAST = `echo wp_json_encode( get_option( 'shippress_demo_last' ) );`;

test("fresh site: activation + a WP-CLI re-run trash the untouched Hello world! once and create no doubles", { skip }, () => {
  const s = site("hikari-musubi");
  // A plans pattern left from 1.0.0 and never edited (CSS badge, no badge paragraph): the update gives it the badge.
  const legacy = readFileSync(join(THEMES, "hikari-musubi/inc/info/legacy/plans-1.0.0.html"), "utf8");
  writeFileSync(join(sites.at(-1), "legacy.html"), legacy);
  s.php(`wp_insert_post( wp_slash( array( 'post_type' => 'wp_block', 'post_status' => 'publish', 'post_title' => 'Plans', 'post_content' => file_get_contents( '${join(sites.at(-1), "legacy.html")}' ), 'meta_input' => array( '_hikari_musubi_info' => 'plans' ) ) ) );`);
  s.wp("theme", "activate", "hikari-musubi");
  const first = JSON.parse(s.wp("shippress", "demo-import", "--format=json")); // after_switch_theme runs on this load too
  assert.equal(s.json(HELLO).status, "trash");
  assert.deepEqual(first.trashed.map((t) => t.id), [1]);
  const pages = s.json(PAGES);
  const second = JSON.parse(s.wp("shippress", "demo-import", "--format=json"));
  assert.equal(second.created, 0);
  assert.deepEqual(second.trashed, []);
  assert.deepEqual(s.json(PAGES), pages);
  assert.ok(Object.values(pages).every((n) => n === 1), JSON.stringify(pages));
  assert.equal(s.json(HELLO).status, "trash");
  // Restored from the trash and published again by the user: a later run leaves it alone.
  s.wp("post", "update", "1", "--post_status=publish");
  s.wp("shippress", "demo-import", "--format=json");
  assert.equal(s.json(HELLO).status, "publish");

  // The "Most chosen" badge is text in the synced plans pattern (one pattern, upgraded in place, editable).
  const plans = s.json(`echo wp_json_encode( array_map( function ( $p ) { return $p->post_content; }, get_posts( array( 'post_type' => 'wp_block', 'meta_key' => '_hikari_musubi_info', 'meta_value' => 'plans', 'numberposts' => -1, 'post_status' => 'any' ) ) ) );`);
  assert.equal(plans.length, 1);
  assert.match(plans[0], /<p class="hm-plan__badge">Most chosen<\/p>/);
  assert.match(s.php(`echo do_blocks( get_post( get_option( 'page_on_front' ) )->post_content );`), /<p class="hm-plan__badge[^"]*">Most chosen<\/p>/);
  assert.doesNotMatch(readFileSync(join(THEMES, "hikari-musubi/style.css"), "utf8"), /Most chosen/);
});

test("Hello world! stays when it was touched: edited text, a real comment, a draft, a new title", { skip }, () => {
  const s = site("komugi-pan");
  s.wp("theme", "activate", "komugi-pan");
  s.wp("shippress", "demo-import", "--format=json");
  // Each case: put post 1 back to the installer's state, change one thing, ask the importer.
  const reset = `global $wpdb; $wpdb->delete( $wpdb->comments, array( 'comment_post_ID' => 1, 'comment_author_email' => 'reader@example.com' ) ); $wpdb->update( $wpdb->posts, array( 'post_status' => 'publish', 'post_title' => 'Hello world!', 'post_name' => 'hello-world', 'post_content' => "<!-- wp:paragraph -->\\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\\n<!-- /wp:paragraph -->", 'post_modified_gmt' => '2026-01-01 00:00:00', 'post_date_gmt' => '2026-01-01 00:00:00' ), array( 'ID' => 1 ) ); delete_post_meta( 1, '_wp_trash_meta_status' ); delete_post_meta( 1, '_shippress_demo_hello' ); clean_post_cache( 1 );`;
  const after = (change) => s.json(`${reset} ${change} clean_post_cache( 1 ); ShipPress_Demo_Import::trash_hello_world(); ${HELLO}`).status;
  assert.equal(after(""), "trash", "untouched");
  assert.equal(after(`$wpdb->update( $wpdb->posts, array( 'post_modified_gmt' => '2026-02-01 00:00:00' ), array( 'ID' => 1 ) );`), "trash", "saved again but the text is still WordPress's");
  assert.equal(after(`$wpdb->update( $wpdb->posts, array( 'post_content' => '<!-- wp:paragraph --><p>Our first post.</p><!-- /wp:paragraph -->', 'post_modified_gmt' => '2026-02-01 00:00:00' ), array( 'ID' => 1 ) );`), "publish", "edited text");
  assert.equal(after(`wp_insert_comment( array( 'comment_post_ID' => 1, 'comment_author' => 'Reader', 'comment_author_email' => 'reader@example.com', 'comment_content' => 'Hello!', 'comment_approved' => 1 ) );`), "publish", "a real comment");
  assert.equal(after(`$wpdb->update( $wpdb->posts, array( 'post_status' => 'draft' ), array( 'ID' => 1 ) );`), "draft", "draft");
  assert.equal(after(`$wpdb->update( $wpdb->posts, array( 'post_title' => 'Welcome' ), array( 'ID' => 1 ) );`), "publish", "new title");
  assert.equal(after(`update_post_meta( 1, '_shippress_demo', 'other-theme:post:hello' );`), "publish", "a ShipPress demo post");
  s.php(`delete_post_meta( 1, '_shippress_demo' );`);
  assert.equal(after(`update_post_meta( 1, '_shippress_demo_hello', 1 );`), "publish", "trashed once before, then restored");

  // The bake board's chip words are in the synced pattern; an edited 1.0.0 board is never rewritten.
  const board = s.php(`echo get_post( Komugi_Pan_Info::id( 'bake-board' ) )->post_content;`);
  assert.match(board, /kp-board__key--out">Out</);
  const edited = readFileSync(join(THEMES, "komugi-pan/inc/info/legacy/bake-board-1.0.0.html"), "utf8").replace("Daily bake board", "Our bake board");
  writeFileSync(join(sites.at(-1), "edited.html"), edited);
  const id = s.php(`echo wp_insert_post( wp_slash( array( 'post_type' => 'wp_block', 'post_status' => 'publish', 'post_title' => 'Old board', 'post_content' => file_get_contents( '${join(sites.at(-1), "edited.html")}' ) ) ) );`);
  s.php(`Komugi_Pan_Info::upgrade( 'bake-board', ${id} );`);
  assert.equal(s.php(`echo get_post( ${id} )->post_content;`), edited.trim());
});

test("table labels on phones come from the table's own header row", { skip }, () => {
  const s = site("sakura-juku", "beni-kappo");
  s.wp("theme", "activate", "sakura-juku");
  s.wp("shippress", "demo-import", "--format=json");
  const timetable = s.php(`echo do_blocks( get_post( Sakura_Juku_Info::id( 'timetable' ) )->post_content );`);
  assert.match(timetable, /<td data-label="Level">Seed<\/td>/);
  assert.match(timetable, /<td data-label="Day">Monday<\/td>/);
  s.wp("theme", "activate", "beni-kappo");
  const table = `<!-- wp:table {"className":"is-style-sake"} -->\n<figure class="wp-block-table is-style-sake"><table><thead><tr><th>Sake</th><th>Style</th><th>Per glass</th><th>Bottle &amp; more</th></tr></thead><tbody><tr><td>A</td><td>B</td><td>¥1</td><td>¥2</td></tr></tbody></table></figure>\n<!-- /wp:table -->`;
  writeFileSync(join(sites.at(-1), "table.html"), table);
  const html = s.php(`echo do_blocks( file_get_contents( '${join(sites.at(-1), "table.html")}' ) );`);
  assert.match(html, /<td data-label="Per glass">¥1<\/td><td data-label="Bottle &amp; more">¥2<\/td>/);
});
