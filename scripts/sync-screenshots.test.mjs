// node --test scripts/sync-screenshots.test.mjs — offline, in temp dirs.
import { test } from "node:test";
import assert from "node:assert/strict";
import { existsSync, mkdirSync, mkdtempSync, readdirSync, readFileSync, rmSync, writeFileSync } from "node:fs";
import { tmpdir } from "node:os";
import { join } from "node:path";
import { gallerySection, insertAfterThemes, shotPages, stripAll, stripScreenshots, sync, upsertSection } from "./sync-screenshots.mjs";

const ROOT_README = "# shippress-themes\n\nIntro.\n\n## Themes\n\n| Theme | For |\n|---|---|\n| [A](themes/a) | a |\n\n## Install a theme\n\nSteps.\n";
const quiet = { log: () => {}, warn: () => {} };

/** A themes repo with themes a, b, c, d (d has no README) and an app screenshots root for a, b, d (none for c). */
function fixture() {
  const tmp = mkdtempSync(join(tmpdir(), "sync-shots-"));
  const root = join(tmp, "repo"), from = join(tmp, "app-themes");
  for (const [slug, name] of [["a", "Alpha Ya"], ["b", "Beta & Co"], ["c", "Gamma"], ["d", "Delta"]]) {
    const dir = join(root, "themes", slug);
    mkdirSync(dir, { recursive: true });
    writeFileSync(join(dir, "style.css"), `/*\nTheme Name: ${name}\nVersion: 1.0.0\n*/\n`);
    writeFileSync(join(dir, "theme-meta.json"), JSON.stringify({ slug, pages: ["home", "about", "news"] }));
    if (slug !== "d") writeFileSync(join(dir, "README.md"), `# ${name}\n\nDesign notes.\n`);
  }
  writeFileSync(join(root, "README.md"), ROOT_README);
  for (const slug of ["a", "b", "d"]) {
    const dir = join(from, slug, "screenshots");
    mkdirSync(dir, { recursive: true });
    for (const page of ["home", "about", "news", "rooms"]) for (const v of ["desktop", "mobile"]) writeFileSync(join(dir, `${page}-${v}.webp`), `${slug}-${page}-${v}`);
    writeFileSync(join(dir, "notes.txt"), "not a screenshot");
  }
  return { tmp, root, from };
}

/** Every file under dir with its contents. */
const snapshot = (dir) => Object.fromEntries(readdirSync(dir, { recursive: true, withFileTypes: true }).filter((e) => e.isFile())
  .map((e) => join(e.parentPath ?? e.path, e.name)).sort().map((f) => [f, readFileSync(f, "utf8")]));

test("copies every *.webp, replaces the old screenshots dir, skips a theme without screenshots", () => {
  const { tmp, root, from } = fixture();
  try {
    const stale = join(root, "themes", "a", "screenshots");
    mkdirSync(stale, { recursive: true });
    writeFileSync(join(stale, "old-desktop.webp"), "stale");
    const warnings = [];
    const synced = sync({ root, from, log: () => {}, warn: (m) => warnings.push(m) });
    assert.deepEqual(synced, ["a", "b", "d"]);
    assert.deepEqual(readdirSync(stale), ["about-desktop.webp", "about-mobile.webp", "home-desktop.webp", "home-mobile.webp", "news-desktop.webp", "news-mobile.webp", "rooms-desktop.webp", "rooms-mobile.webp"]);
    assert.equal(readFileSync(join(stale, "home-mobile.webp"), "utf8"), "a-home-mobile");
    assert.ok(!existsSync(join(root, "themes", "c", "screenshots")));
    assert.match(warnings.join("\n"), /c: no screenshots/);
    assert.equal(readFileSync(join(root, "themes", "c", "README.md"), "utf8"), "# Gamma\n\nDesign notes.\n", "a skipped theme's README is left alone");
  } finally { rmSync(tmp, { recursive: true, force: true }); }
});

test("only the given slugs are synced", () => {
  const { tmp, root, from } = fixture();
  try {
    assert.deepEqual(sync({ root, from, slugs: ["b"], ...quiet }), ["b"]);
    assert.ok(existsSync(join(root, "themes", "b", "screenshots", "home-desktop.webp")));
    assert.ok(!existsSync(join(root, "themes", "a", "screenshots")));
  } finally { rmSync(tmp, { recursive: true, force: true }); }
});

test("theme README: screenshots section appended between markers, missing README created, idempotent", () => {
  const { tmp, root, from } = fixture();
  try {
    sync({ root, from, ...quiet });
    const a = readFileSync(join(root, "themes", "a", "README.md"), "utf8");
    assert.ok(a.startsWith("# Alpha Ya\n\nDesign notes.\n\n<!-- screenshots:start -->\n## Screenshots\n"));
    assert.ok(a.endsWith("<!-- screenshots:end -->\n"));
    assert.match(a, /<img src="screenshots\/home-desktop\.webp" width="640"/);
    assert.match(a, /<img src="screenshots\/home-mobile\.webp" width="200"/);
    // theme-meta.json page order first, then other pages by name; home is not repeated in the list
    assert.match(a, /- About: \[desktop\]\(screenshots\/about-desktop\.webp\) · \[mobile\]\(screenshots\/about-mobile\.webp\)\n- News: .*\n- Rooms: .*\n<!-- screenshots:end -->/);
    assert.doesNotMatch(a, /- Home:/);
    assert.ok(readFileSync(join(root, "themes", "d", "README.md"), "utf8").startsWith("# Delta\n\n<!-- screenshots:start -->"));
    assert.match(readFileSync(join(root, "themes", "b", "README.md"), "utf8"), /alt="Beta &amp; Co home page on desktop"/);

    const before = snapshot(root);
    sync({ root, from, ...quiet });
    assert.deepEqual(snapshot(root), before, "running twice changes nothing");

    // fewer pages next time: the section is replaced in place, not appended again
    rmSync(join(from, "a", "screenshots", "rooms-desktop.webp")); rmSync(join(from, "a", "screenshots", "rooms-mobile.webp"));
    sync({ root, from, slugs: ["a"], ...quiet });
    const a2 = readFileSync(join(root, "themes", "a", "README.md"), "utf8");
    assert.equal(a2.split("<!-- screenshots:start -->").length, 2);
    assert.doesNotMatch(a2, /Rooms/);
  } finally { rmSync(tmp, { recursive: true, force: true }); }
});

test("stripScreenshots / --strip give back the README exactly as it was before syncing (release zips stay the same)", () => {
  const { tmp, root, from } = fixture();
  try {
    const before = readFileSync(join(root, "themes", "a", "README.md"), "utf8");
    sync({ root, from, ...quiet });
    assert.equal(stripScreenshots(readFileSync(join(root, "themes", "a", "README.md"), "utf8")), before);
    stripAll(root);
    assert.equal(readFileSync(join(root, "themes", "a", "README.md"), "utf8"), before);
    assert.equal(readFileSync(join(root, "themes", "c", "README.md"), "utf8"), "# Gamma\n\nDesign notes.\n");
    assert.equal(stripScreenshots("no section\n"), "no section\n");
  } finally { rmSync(tmp, { recursive: true, force: true }); }
});

test("root README: gallery inserted after the Themes table, 3 per row, idempotent", () => {
  const { tmp, root, from } = fixture();
  try {
    sync({ root, from, ...quiet });
    const md = readFileSync(join(root, "README.md"), "utf8");
    const [themes, gallery, install] = ["## Themes", "<!-- gallery:start -->\n## Gallery", "## Install a theme"].map((s) => md.indexOf(s));
    assert.ok(themes < gallery && gallery < install, md);
    assert.match(md, /<!-- gallery:end -->\n\n## Install a theme/);
    assert.ok(md.includes("| [A](themes/a) | a |\n\n<!-- gallery:start -->"));
    // a, b, d have a home screenshot (c has none): one row of three
    assert.equal(md.split("<tr>").length - 1, 1);
    assert.match(md, /<a href="themes\/a"><img src="themes\/a\/screenshots\/home-desktop\.webp" width="260" alt="Alpha Ya"><\/a><br><a href="themes\/a">Alpha Ya<\/a>/);
    assert.ok(md.indexOf("themes/a\"") < md.indexOf("themes/b\"") && md.indexOf("themes/b\"") < md.indexOf("themes/d\""));
    assert.doesNotMatch(md, /themes\/c/);

    const before = snapshot(root);
    sync({ root, from, ...quiet });
    assert.deepEqual(snapshot(root), before, "running twice changes nothing");
  } finally { rmSync(tmp, { recursive: true, force: true }); }
});

test("gallerySection rows, insertAfterThemes fallback, upsertSection replaces in place", () => {
  const g = gallerySection(["a", "b", "c", "d"].map((slug) => ({ slug, name: slug.toUpperCase() })));
  assert.equal(g.split("<tr>").length - 1, 2);
  assert.equal(g.split("<td").length - 1, 4);
  assert.equal(insertAfterThemes("# X\n", "B"), "# X\n\nB\n");
  const once = upsertSection("# X\n", ["<!-- s -->", "<!-- e -->"], "one");
  assert.equal(once, "# X\n\n<!-- s -->\none\n<!-- e -->\n");
  assert.equal(upsertSection(once, ["<!-- s -->", "<!-- e -->"], "two"), "# X\n\n<!-- s -->\ntwo\n<!-- e -->\n");
  assert.deepEqual(shotPages(["z-desktop.webp", "home-mobile.webp", "about-desktop.webp", "x.png"], ["home", "about"]), ["home", "about", "z"]);
});

test("per-language screenshots (<lang>/ folders) are copied and linked; other folders are ignored", () => {
  const tmp = mkdtempSync(join(tmpdir(), "sync-shots-lang-"));
  try {
    const root = join(tmp, "repo"), from = join(tmp, "app");
    mkdirSync(join(root, "themes/a"), { recursive: true });
    writeFileSync(join(root, "README.md"), ROOT_README);
    for (const d of ["", "ja", "fr", "xx"]) {
      mkdirSync(join(from, "a/screenshots", d), { recursive: true });
      writeFileSync(join(from, "a/screenshots", d, "home-desktop.webp"), "w" + d);
    }
    sync({ root, from, slugs: ["a"], ...quiet });
    assert.equal(readFileSync(join(root, "themes/a/screenshots/ja/home-desktop.webp"), "utf8"), "wja");
    assert.equal(readFileSync(join(root, "themes/a/screenshots/fr/home-desktop.webp"), "utf8"), "wfr");
    assert.equal(existsSync(join(root, "themes/a/screenshots/xx")), false);
    assert.match(readFileSync(join(root, "themes/a/README.md"), "utf8"), /Other languages \(home page\): \[ja\]\(screenshots\/ja\/home-desktop\.webp\) · \[fr\]/);
  } finally { rmSync(tmp, { recursive: true, force: true }); }
});
