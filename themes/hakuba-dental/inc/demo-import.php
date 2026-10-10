<?php
/**
 * ShipPress demo import: turns a freshly activated theme into a ready-to-use website.
 *
 * Shared component. Every ShipPress theme ships an identical copy as inc/demo-import.php (canonical copy:
 * shared/inc/demo-import.php in https://github.com/oberonlai/shippress-themes) and loads it from functions.php:
 *
 *     require_once get_template_directory() . '/inc/demo-import.php';
 *
 * Everything theme-specific comes from the theme's demo-content.json: site title/tagline, pages (block markup;
 * <!-- wp:pattern {"slug":"..."} /--> references are expanded into the pattern's real blocks so the copy is
 * editable in the page editor), categories, tags, posts, navigation and the catalogue screen URLs.
 *
 * What it does, once, on `after_switch_theme` (or from the "Import demo content" button / `wp shippress demo-import`):
 * - imports the raster copies of the theme's illustrations (assets/images/demo/*.jpg|png) into the Media Library;
 * - creates the pages, terms, posts (with featured images) and a navigation menu (wp_navigation post; the header's
 *   navigation block has no links of its own, so WordPress shows this menu);
 * - sets Reading (static front page + posts page) when the site has no real front page yet, pretty permalinks
 *   when they are still "Plain", and the site title/tagline only while they are WordPress defaults.
 * It never deletes anything and never changes what the user wrote. Every item it creates is tagged with the
 * `_shippress_demo` post meta ("<theme>:<kind>:<key>", saved together with the post) and fingerprinted with
 * `_shippress_demo_hash` (sha256 of its title + "\n" + content exactly as stored), so a later run can tell whether
 * the user has edited it since. Items that already exist (also in the trash) are skipped, so running it again only
 * adds what is missing. Before creating a page or post it also looks for one with the same slug (or, for pages, the
 * same title) in any status but the trash:
 * - an empty, untagged one (e.g. the blank "Home" a host or `wp post create` made as a front page) is filled in
 *   and tagged instead of getting a second "Home" next to it;
 * - the user's own (untagged) page or post is used as it is, never changed;
 * - another ShipPress theme's demo item (the user switched themes):
 *   - unedited (fingerprint still matches): gets this theme's title, copy and template in place (same post ID and
 *     slug, so menus, links and the front page stay valid), after a revision of the old version is saved (it can
 *     be restored from the editor's Revisions panel), and is re-tagged for this theme;
 *   - edited (or imported before fingerprints existed, so nobody can tell): left exactly as it is and reported in
 *     `keptEdited`. The "Use <Theme>'s text" button in wp-admin (or `wp shippress demo-use-text <id>`) swaps
 *     one of them on request, again after saving a revision.
 * The navigation menu follows the same rule (an unedited ShipPress menu is swapped, an edited one is kept and no
 * second menu is added). Demo pages and posts of the previous theme that this theme does not have are moved to
 * Draft when unedited (never deleted: an architecture "Projects" page should not stay online on a café site, and
 * switching back publishes them again); edited ones stay published and are reported. The front page, a page an
 * edited menu still links to and the posts page (unless this theme brings one) are never drafted.
 * The result {replaced, keptEdited, added, drafted} is printed by WP-CLI and kept in the `shippress_demo_last`
 * option for the wp-admin notice. Existing terms with the same slug are reused as they are. One import runs at a
 * time per site (a lock row in wp_options), so activation, the button, WP-CLI and a page load racing each other
 * cannot create doubles.
 *
 * @package shippress
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'ShipPress_Demo_Import' ) ) {

	/**
	 * Thrown when another import holds the lock for too long.
	 */
	class ShipPress_Demo_Import_Busy extends RuntimeException {
	}

	/**
	 * Demo-content importer for ShipPress themes.
	 */
	final class ShipPress_Demo_Import {

		const VERSION  = 3;
		const META     = '_shippress_demo';
		const HASH     = '_shippress_demo_hash';    // Fingerprint (sha256 of title + "\n" + content) when the import wrote it; 'pending' while a run fills it.
		const DRAFTED  = '_shippress_demo_drafted'; // Set when a theme switch moved this unedited demo item to Draft (switching back publishes it again).
		const LAST     = 'shippress_demo_last';     // Result of the latest import on this site (any ShipPress theme), for the admin notice.
		const LOCK     = 'shippress_demo_import_lock';
		const LOCK_TTL = 600; // A lock older than this (seconds) is from a crashed run and is taken over.
		const ACTION   = 'shippress_demo_import';
		const USE_TEXT = 'shippress_demo_use_text';
		const DISMISS  = 'shippress_demo_dismiss';
		const STATUSES = array( 'publish', 'draft', 'pending', 'private', 'future', 'inherit', 'trash' );

		/** Site titles / taglines WordPress (or its installer) uses when nobody has set one. */
		const DEFAULT_TITLES   = array( '', 'WordPress', 'My WordPress Website', 'My WordPress Site', 'My Blog' );
		const DEFAULT_TAGLINES = array( '', 'Just another WordPress site' );

		/** Items created by earlier runs in this request (the activation hook fires on the same load as a WP-CLI command). */
		private static $created_before = 0;

		/** Result lists of earlier runs in this request (same reason), merged into what WP-CLI reports. */
		private static $earlier = array();

		/** Page templates of the theme being imported (see allow_templates()). */
		private static $demo_templates = array();

		/**
		 * Hooks: automatic import on activation, admin fallback button, "Use <Theme>'s text" buttons, WP-CLI commands.
		 */
		public static function boot() {
			add_action( 'after_switch_theme', array( __CLASS__, 'on_switch' ) );
			add_action( 'admin_notices', array( __CLASS__, 'admin_notice' ) );
			add_action( 'admin_post_' . self::ACTION, array( __CLASS__, 'handle_button' ) );
			add_action( 'admin_post_' . self::USE_TEXT, array( __CLASS__, 'handle_use_text' ) );
			add_action( 'admin_post_' . self::DISMISS, array( __CLASS__, 'handle_dismiss' ) );
			if ( defined( 'WP_CLI' ) && WP_CLI ) {
				WP_CLI::add_command( 'shippress demo-import', array( __CLASS__, 'cli' ) );
				WP_CLI::add_command( 'shippress demo-use-text', array( __CLASS__, 'cli_use_text' ) );
			}
		}

		/** Theme name from style.css (for messages). */
		public static function name() {
			$theme = wp_get_theme( self::slug() );
			return $theme->exists() ? (string) $theme->get( 'Name' ) : self::slug();
		}

		/** Theme folder this copy lives in (…/themes/<slug>). */
		public static function theme_dir() {
			return dirname( __DIR__ );
		}

		/** Theme slug (folder name). */
		public static function slug() {
			return basename( self::theme_dir() );
		}

		/** Option holding this theme's import state. */
		public static function option_name() {
			return 'shippress_demo_' . str_replace( '-', '_', self::slug() );
		}

		/** Import state: array( 'version', 'imported' (timestamp), 'counts', 'error' ). */
		public static function state() {
			$s = get_option( self::option_name() );
			return is_array( $s ) ? $s : array();
		}

		/**
		 * after_switch_theme: import once, and again when another ShipPress theme imported since (switching back gives
		 * the unedited pages this theme's copy again). Other activations do nothing (the button / WP-CLI fill in what
		 * is missing).
		 */
		public static function on_switch() {
			if ( get_stylesheet() !== self::slug() && get_template() !== self::slug() ) {
				return;
			}
			$state = self::state();
			$last  = get_option( self::LAST );
			if ( ! empty( $state['imported'] ) && ( empty( $last['theme'] ) || self::slug() === $last['theme'] ) ) {
				return;
			}
			try {
				self::run( false, 0 ); // Another run already holds the lock: it does the work, so this one just stops.
			} catch ( ShipPress_Demo_Import_Busy $e ) {
				return;
			} catch ( Throwable $e ) {
				update_option( self::option_name(), array( 'version' => self::VERSION, 'error' => $e->getMessage() ), false );
			}
		}

		/**
		 * Runs the import and records the result.
		 *
		 * @param bool $force_reading Also point Reading at the demo Home/News pages when the site already has a front page.
		 * @param int  $wait          Seconds to wait for a run that is already going (then this one finds everything done).
		 * @return array Counts of created and skipped items plus the result lists (see import()).
		 * @throws ShipPress_Demo_Import_Busy When another import still holds the lock after $wait seconds.
		 */
		public static function run( $force_reading = false, $wait = 120 ) {
			$demo = self::load();
			if ( ! self::lock( $wait ) ) {
				throw new ShipPress_Demo_Import_Busy( 'Another demo import is still running on this site. Try again in a minute.' );
			}
			try {
				$counts = self::import( $demo, $force_reading );
				self::$created_before += $counts['created'];
				foreach ( array( 'replaced', 'added', 'drafted' ) as $list ) {
					self::$earlier[ $list ] = self::merge_items( isset( self::$earlier[ $list ] ) ? self::$earlier[ $list ] : array(), $counts[ $list ] );
				}
				$numbers = array( 'created' => $counts['created'], 'skipped' => $counts['skipped'] );
				update_option( self::option_name(), array( 'version' => self::VERSION, 'imported' => time(), 'counts' => $numbers ), false );
				// A re-run of the same theme keeps what the earlier runs swapped, so the notice still says what happened.
				$prev   = get_option( self::LAST );
				$again  = is_array( $prev ) && isset( $prev['theme'] ) && self::slug() === $prev['theme'];
				$record = array( 'theme' => self::slug(), 'name' => self::name(), 'time' => time(), 'keptEdited' => $counts['keptEdited'] );
				foreach ( array( 'replaced', 'added', 'drafted' ) as $list ) {
					$record[ $list ] = self::merge_items( $again && isset( $prev[ $list ] ) ? $prev[ $list ] : array(), $counts[ $list ] );
				}
				// Dismissed stays dismissed until the list of kept pages changes.
				$record['dismissed'] = $again && ! empty( $prev['dismissed'] ) && wp_list_pluck( isset( $prev['keptEdited'] ) ? (array) $prev['keptEdited'] : array(), 'id' ) === wp_list_pluck( $counts['keptEdited'], 'id' );
				update_option( self::LAST, $record, false );
			} finally {
				self::unlock();
			}
			return $counts;
		}

		/**
		 * Takes the site-wide import lock: a plain INSERT of a unique wp_options row, which only one request can win
		 * (add_option() would not do: it upserts). A lock left by a crashed run expires after LOCK_TTL seconds.
		 *
		 * @param int $wait Seconds to keep trying.
		 * @return bool Whether this request now holds the lock.
		 */
		public static function lock( $wait ) {
			global $wpdb;
			$deadline = time() + max( 0, (int) $wait );
			while ( true ) {
				$quiet = $wpdb->suppress_errors( true );
				$won   = $wpdb->query( $wpdb->prepare( "INSERT INTO {$wpdb->options} (option_name, option_value, autoload) VALUES (%s, %s, 'off')", self::LOCK, (string) time() ) ); // phpcs:ignore WordPress.DB.DirectDatabaseQuery
				$wpdb->suppress_errors( $quiet );
				wp_cache_delete( self::LOCK, 'options' );
				wp_cache_delete( 'notoptions', 'options' );
				if ( $won ) {
					return true;
				}
				$since = $wpdb->get_var( $wpdb->prepare( "SELECT option_value FROM {$wpdb->options} WHERE option_name = %s", self::LOCK ) ); // phpcs:ignore WordPress.DB.DirectDatabaseQuery
				if ( null !== $since && time() - (int) $since > self::LOCK_TTL ) {
					$wpdb->query( $wpdb->prepare( "DELETE FROM {$wpdb->options} WHERE option_name = %s AND option_value = %s", self::LOCK, $since ) ); // phpcs:ignore WordPress.DB.DirectDatabaseQuery
					continue;
				}
				if ( time() >= $deadline ) {
					return false;
				}
				sleep( 1 );
			}
		}

		/** Releases the import lock. */
		public static function unlock() {
			global $wpdb;
			$wpdb->delete( $wpdb->options, array( 'option_name' => self::LOCK ) ); // phpcs:ignore WordPress.DB.DirectDatabaseQuery
			wp_cache_delete( self::LOCK, 'options' );
		}

		/** Parsed demo-content.json. */
		public static function load() {
			$file = self::theme_dir() . '/demo-content.json';
			$demo = is_readable( $file ) ? json_decode( (string) file_get_contents( $file ), true ) : null; // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
			if ( ! is_array( $demo ) || empty( $demo['pages'] ) ) {
				throw new RuntimeException( 'demo-content.json is missing or invalid.' );
			}
			return $demo;
		}

		/** Post id already imported under this key (any status, trash included), or 0. */
		public static function find( $kind, $key, $post_type ) {
			$ids = get_posts(
				array(
					'post_type'        => $post_type,
					'post_status'      => self::STATUSES,
					'meta_key'         => self::META, // phpcs:ignore WordPress.DB.SlowDBQuery.slow_query_meta_key
					'meta_value'       => self::slug() . ':' . $kind . ':' . $key, // phpcs:ignore WordPress.DB.SlowDBQuery.slow_query_meta_value
					'numberposts'      => 1,
					'fields'           => 'ids',
					'suppress_filters' => true,
				)
			);
			return $ids ? (int) $ids[0] : 0;
		}

		/**
		 * What to do with one demo page/post, as array( id, how ):
		 * - 'own'    this theme imported it before (any status, trash included): leave it;
		 * - 'adopt'  an empty, untagged page/post with the same slug (pages: or title), e.g. a blank "Home" made by a
		 *            host or `wp post create`: fill it in instead of adding a second one next to it;
		 * - 'swap'   another ShipPress theme's demo item with that slug or title that nobody edited since it was
		 *            imported: give it this theme's version in place (same ID and slug);
		 * - 'edited' another ShipPress theme's demo item that was edited since (or can't be checked): keep it as it is;
		 * - 'keep'   the user's own page/post with that slug or title: use it as it is, change nothing;
		 * - 'new'    nothing there yet (id 0): create it.
		 */
		public static function claim( $kind, $slug, $post_type, $title = '' ) {
			$id = self::find( $kind, $slug, $post_type );
			if ( $id ) {
				return array( $id, 'own' );
			}
			$live  = array_values( array_diff( self::STATUSES, array( 'trash', 'inherit' ) ) );
			$query = array( 'post_type' => $post_type, 'post_status' => $live, 'numberposts' => 1, 'fields' => 'ids', 'orderby' => 'ID', 'order' => 'ASC', 'suppress_filters' => true );
			$ids   = get_posts( $query + array( 'name' => $slug ) );
			if ( ! $ids && '' !== $title && 'page' === $post_type ) {
				$ids = get_posts( $query + array( 'title' => $title ) );
			}
			if ( ! $ids ) {
				return array( 0, 'new' );
			}
			$id  = (int) $ids[0];
			$tag = self::tag( $id );
			if ( $tag ) {
				if ( self::slug() === $tag[0] || $kind !== $tag[1] ) {
					return array( $id, 'keep' );
				}
				return array( $id, 'unedited' === self::edit_state( $id ) ? 'swap' : 'edited' );
			}
			return array( $id, '' === trim( (string) get_post_field( 'post_content', $id ) ) ? 'adopt' : 'keep' );
		}

		/** The `_shippress_demo` tag of a post as array( theme, kind, key ), or null for anything ShipPress did not import. */
		public static function tag( $id ) {
			$parts = explode( ':', (string) get_post_meta( $id, self::META, true ), 3 );
			return 3 === count( $parts ) && '' !== $parts[0] ? $parts : null;
		}

		/** sha256 of the item's title + "\n" + content exactly as stored (read from the table, no filters or cache). */
		public static function fingerprint( $id ) {
			global $wpdb;
			$row = $wpdb->get_row( $wpdb->prepare( "SELECT post_title, post_content FROM {$wpdb->posts} WHERE ID = %d", $id ) ); // phpcs:ignore WordPress.DB.DirectDatabaseQuery
			return $row ? hash( 'sha256', $row->post_title . "\n" . $row->post_content ) : '';
		}

		/** Records the fingerprint of what the import just wrote. */
		private static function stamp( $id ) {
			update_post_meta( $id, self::HASH, self::fingerprint( $id ) );
		}

		/**
		 * 'unedited' (the fingerprint still matches what the import wrote, or a run stopped before recording it),
		 * 'edited', or 'unknown' (imported before fingerprints existed: treated like edited, so it is never overwritten).
		 */
		public static function edit_state( $id ) {
			$hash = (string) get_post_meta( $id, self::HASH, true );
			if ( '' === $hash ) {
				return 'unknown';
			}
			return 'pending' === $hash || hash_equals( $hash, self::fingerprint( $id ) ) ? 'unedited' : 'edited';
		}

		/**
		 * theme_page_templates while importing: WordPress re-validates a page's stored template on every update, so the
		 * previous theme's template (e.g. "page-projects" on a page being drafted) and this theme's demo templates must
		 * count as valid, or updating the page fails with "Invalid page template".
		 */
		public static function allow_templates( $templates, $theme = null, $post = null ) {
			$allowed = array();
			foreach ( self::$demo_templates as $t ) {
				$allowed[ $t ] = $t;
			}
			if ( $post instanceof WP_Post ) {
				$t = (string) get_post_meta( $post->ID, '_wp_page_template', true );
				if ( '' !== $t && 'default' !== $t ) {
					$allowed[ $t ] = $t;
				}
			}
			return (array) $templates + $allowed;
		}

		/** Starts / ends a run that writes pages (kses off, templates allowed). */
		private static function begin( array $demo ) {
			kses_remove_filters();
			self::$demo_templates = array();
			foreach ( $demo['pages'] as $p ) {
				if ( ! empty( $p['template'] ) ) {
					self::$demo_templates[] = $p['template'];
				}
			}
			add_filter( 'theme_page_templates', array( __CLASS__, 'allow_templates' ), 10, 3 );
		}

		/** See begin(). */
		private static function end() {
			remove_filter( 'theme_page_templates', array( __CLASS__, 'allow_templates' ), 10 );
			kses_init();
		}

		/** Saves the current version as a revision before the import replaces it (restorable from the editor). */
		private static function keep_revision( $id ) {
			if ( wp_revisions_enabled( get_post( $id ) ) ) {
				wp_save_post_revision( $id );
			}
		}

		/** One entry of a result list. */
		private static function item( $id, $kind, array $extra = array() ) {
			return array( 'id' => (int) $id, 'title' => (string) get_post_field( 'post_title', $id ), 'kind' => $kind ) + $extra;
		}

		/** $a + the entries of $b whose id is not in $a yet (later entries win). */
		private static function merge_items( array $a, array $b ) {
			$out = array();
			foreach ( array_merge( $a, $b ) as $entry ) {
				$out[ (int) $entry['id'] ] = $entry;
			}
			return array_values( $out );
		}

		/**
		 * Creates a demo page/post, or fills in / swaps the one claim() found. The tag is saved with the post itself
		 * (meta_input), so a run that stops halfway never leaves an untagged demo item behind to be doubled later; the
		 * fingerprint is 'pending' until the content is written (a later run fills it in then).
		 */
		private static function save( array $postarr, $kind, $key, array $meta = array() ) {
			$postarr['meta_input'] = array( self::META => self::slug() . ':' . $kind . ':' . $key, self::HASH => 'pending' ) + $meta;
			$id = empty( $postarr['ID'] ) ? wp_insert_post( $postarr, true ) : wp_update_post( $postarr, true );
			if ( is_wp_error( $id ) ) {
				throw new RuntimeException( $id->get_error_message() );
			}
			delete_post_meta( $id, self::DRAFTED );
			return (int) $id;
		}

		/** Writes the final content of an item save() prepared and records its fingerprint. */
		private static function finish( $id, $content ) {
			$r = wp_update_post( array( 'ID' => $id, 'post_content' => wp_slash( $content ) ), true );
			if ( is_wp_error( $r ) ) {
				throw new RuntimeException( $r->get_error_message() );
			}
			self::stamp( $id );
		}

		/** First administrator: owner of what an import without a logged-in user (WP-CLI, activation by code) creates. */
		public static function default_author() {
			$admins = get_users( array( 'role' => 'administrator', 'orderby' => 'ID', 'order' => 'ASC', 'number' => 1, 'fields' => 'ID' ) );
			return $admins ? (int) $admins[0] : 0;
		}

		/**
		 * The import itself.
		 *
		 * @param array $demo          Parsed demo-content.json.
		 * @param bool  $force_reading See run().
		 * @return array Counts ('created', 'skipped') and the result lists: 'replaced' (another theme's unedited demo
		 *               items that now have this theme's version), 'keptEdited' (demo items left as they are because they
		 *               were edited), 'added' (created, filled in or published again) and 'drafted'.
		 */
		public static function import( array $demo, $force_reading = false ) {
			require_once ABSPATH . 'wp-admin/includes/file.php';
			require_once ABSPATH . 'wp-admin/includes/media.php';
			require_once ABSPATH . 'wp-admin/includes/image.php';
			require_once ABSPATH . 'wp-admin/includes/misc.php';

			$counts = array( 'created' => 0, 'skipped' => 0 );
			$result = array( 'replaced' => array(), 'keptEdited' => array(), 'added' => array(), 'drafted' => array() );
			// Owner of the new content: whoever runs the import, else the first administrator (WP-CLI, activation by code).
			$author = get_current_user_id();
			if ( ! $author ) {
				$author = self::default_author();
			}
			$bump   = function ( $created ) use ( &$counts ) {
				++$counts[ $created ? 'created' : 'skipped' ];
			};
			// The content comes from the theme's own files (forms, inline styles), so it is stored as written.
			self::begin( $demo );
			// Pretty permalinks (only while still "Plain"), first, so every link below gets its final URL.
			if ( '' === (string) get_option( 'permalink_structure' ) ) {
				global $wp_rewrite;
				$wp_rewrite->set_permalink_structure( '/%postname%/' );
				// Taxonomies and post types only register their URL rules while permalinks are pretty (or in wp-admin).
				foreach ( get_taxonomies( array(), 'objects' ) as $taxonomy ) {
					$taxonomy->add_rewrite_rules();
				}
				foreach ( get_post_types( array(), 'objects' ) as $post_type ) {
					$post_type->add_rewrite_rules();
				}
			}

			try {
				// 1. Media: raster copies of the illustrations, keyed by the SVG they stand for.
				$media = array();
				foreach ( glob( self::theme_dir() . '/assets/images/demo/*' ) ?: array() as $file ) {
					if ( ! preg_match( '/\.(jpe?g|png|webp)$/i', $file ) ) {
						continue;
					}
					$name = pathinfo( $file, PATHINFO_FILENAME );
					$id   = self::find( 'media', $name, 'attachment' );
					$bump( ! $id );
					if ( ! $id ) {
						$tmp = wp_tempnam( basename( $file ) );
						copy( $file, $tmp );
						// Tag and owner are saved with the attachment itself (see save()).
						$attachment = array( 'meta_input' => array( self::META => self::slug() . ':media:' . $name ) ) + ( $author ? array( 'post_author' => $author ) : array() );
						$id         = media_handle_sideload( array( 'name' => basename( $file ), 'tmp_name' => $tmp ), 0, ucwords( str_replace( '-', ' ', $name ) ), $attachment );
						if ( is_wp_error( $id ) ) {
							wp_delete_file( $tmp );
							throw new RuntimeException( 'Could not import ' . basename( $file ) . ': ' . $id->get_error_message() );
						}
					}
					$media[ $name ] = (int) $id;
				}

				// 2. Terms (reuse any term that already has the slug; never change it).
				$terms = array( 'category' => array(), 'post_tag' => array() );
				foreach ( array( 'categories' => 'category', 'tags' => 'post_tag' ) as $key => $tax ) {
					foreach ( isset( $demo[ $key ] ) ? $demo[ $key ] : array() as $t ) {
						$found = get_term_by( 'slug', $t['slug'], $tax );
						$bump( ! $found );
						if ( $found ) {
							$terms[ $tax ][ $t['slug'] ] = (int) $found->term_id;
							continue;
						}
						$r = wp_insert_term( $t['name'], $tax, array( 'slug' => $t['slug'], 'description' => isset( $t['description'] ) ? $t['description'] : '' ) );
						if ( is_wp_error( $r ) ) {
							throw new RuntimeException( $r->get_error_message() );
						}
						$terms[ $tax ][ $t['slug'] ] = (int) $r['term_id'];
					}
				}

				// 3. Pages, created empty first so links between them can point at their real URLs.
				$pages = array();
				$fresh = array();
				foreach ( $demo['pages'] as $p ) {
					list( $id, $how ) = self::claim( 'page', $p['slug'], 'page', $p['title'] );
					$parent = ( isset( $p['parent'] ) && isset( $pages[ $p['parent'] ] ) ) ? $pages[ $p['parent'] ] : 0;
					if ( 'own' === $how ) {
						self::revisit( $id, 'page', $p['slug'], $result, $fresh );
					} elseif ( 'edited' === $how ) {
						$result['keptEdited'][] = self::kept( $id, 'page', $p['slug'], true );
					}
					$write = in_array( $how, array( 'new', 'adopt', 'swap' ), true );
					$bump( $write );
					if ( $write ) {
						$page = array(
							'post_type'   => 'page',
							'post_title'  => $p['title'],
							'post_parent' => $parent,
							'menu_order'  => count( $pages ),
						);
						if ( 'new' === $how ) {
							$page += array( 'post_author' => $author, 'post_name' => $p['slug'], 'post_status' => 'publish' );
						} else {
							$page['ID'] = $id;
							if ( ! (int) get_post_field( 'post_author', $id ) ) {
								$page['post_author'] = $author;
							}
							// Swapped pages keep their status (a page the user unpublished stays so) unless a switch drafted it.
							if ( 'adopt' === $how || get_post_meta( $id, self::DRAFTED, true ) ) {
								$page['post_status'] = 'publish';
							}
						}
						$from = 'swap' === $how ? self::tag( $id )[0] : '';
						if ( $from ) {
							self::keep_revision( $id );
						}
						// A swapped page drops the old theme's template when this theme has none for it.
						if ( ! empty( $p['template'] ) || 'swap' === $how ) {
							$page['page_template'] = empty( $p['template'] ) ? 'default' : $p['template'];
						}
						$id = self::save( $page, 'page', $p['slug'] );
						$fresh[ $p['slug'] ] = true;
						$result[ $from ? 'replaced' : 'added' ][] = self::item( $id, 'page', $from ? array( 'key' => $p['slug'], 'from' => $from ) : array() );
					}
					$pages[ $p['slug'] ] = (int) $id;
				}

				// 4. Posts.
				$posts = array();
				$seen  = array_values( $pages );
				foreach ( isset( $demo['posts'] ) ? $demo['posts'] : array() as $p ) {
					list( $id, $how ) = self::claim( 'post', $p['slug'], 'post' );
					$seen[] = (int) $id;
					if ( 'own' === $how ) {
						$refill = array();
						self::revisit( $id, 'post', $p['slug'], $result, $refill );
						if ( $refill ) {
							$posts[ $p['slug'] ] = array( (int) $id, $p );
						}
					} elseif ( 'edited' === $how ) {
						$result['keptEdited'][] = self::kept( $id, 'post', $p['slug'], true );
					}
					$write = in_array( $how, array( 'new', 'adopt', 'swap' ), true );
					$bump( $write );
					if ( $write ) {
						$post = array(
							'post_type'    => 'post',
							'post_title'   => $p['title'],
							'post_date'    => $p['date'] . ' 09:00:00',
							'post_excerpt' => $p['excerpt'],
						);
						if ( 'new' === $how ) {
							$post += array( 'post_author' => $author, 'post_name' => $p['slug'], 'post_status' => 'publish' );
						} else {
							$post['ID'] = $id;
							if ( ! (int) get_post_field( 'post_author', $id ) ) {
								$post['post_author'] = $author;
							}
							if ( 'adopt' === $how || get_post_meta( $id, self::DRAFTED, true ) ) {
								$post['post_status'] = 'publish';
							}
						}
						$from = 'swap' === $how ? self::tag( $id )[0] : '';
						if ( $from ) {
							self::keep_revision( $id );
						}
						$id = self::save( $post, 'post', $p['slug'] );
						$result[ $from ? 'replaced' : 'added' ][] = self::item( $id, 'post', $from ? array( 'key' => $p['slug'], 'from' => $from ) : array() );
						$posts[ $p['slug'] ] = array( (int) $id, $p );
					}
				}
				foreach ( $posts as $item ) {
					list( $id, $p ) = $item;
					$cats = array();
					foreach ( isset( $p['categories'] ) ? $p['categories'] : array() as $s ) {
						if ( isset( $terms['category'][ $s ] ) ) {
							$cats[] = $terms['category'][ $s ];
						}
					}
					$tags = array();
					foreach ( isset( $p['tags'] ) ? $p['tags'] : array() as $s ) {
						if ( isset( $terms['post_tag'][ $s ] ) ) {
							$tags[] = $terms['post_tag'][ $s ];
						}
					}
					wp_set_post_terms( $id, $cats, 'category' );
					wp_set_post_terms( $id, $tags, 'post_tag' );
					$img = isset( $p['image'] ) ? pathinfo( $p['image'], PATHINFO_FILENAME ) : '';
					if ( $img && isset( $media[ $img ] ) ) {
						set_post_thumbnail( $id, $media[ $img ] );
					} elseif ( has_post_thumbnail( $id ) ) {
						delete_post_thumbnail( $id );
					}
				}

				// 5. Content, now that every URL is known. Only for items written in this run; each gets its fingerprint.
				$links = self::link_map( $demo, $pages, $terms );
				foreach ( $demo['pages'] as $p ) {
					if ( isset( $fresh[ $p['slug'] ] ) ) {
						self::finish( $pages[ $p['slug'] ], self::page_markup( $p, $media, $links ) );
					}
				}
				foreach ( $posts as $item ) {
					list( $id, $p ) = $item;
					self::finish( $id, self::post_markup( $p, $media, $links ) );
				}

				// 6. Navigation menu (the header's navigation block falls back to the newest menu). One ShipPress menu per
				// site: an unedited one from another theme gets this theme's links, an edited one is kept (no second menu).
				$kept_menus = array();
				if ( ! empty( $demo['navigation']['items'] ) ) {
					$nav = array(
						'post_type'    => 'wp_navigation',
						'post_title'   => isset( $demo['navigation']['title'] ) ? $demo['navigation']['title'] : 'Main menu',
						'post_content' => wp_slash( self::navigation_markup( $demo['navigation']['items'], $pages, $terms ) ),
					);
					$id  = self::find( 'navigation', 'primary', 'wp_navigation' );
					$how = $id ? ( 'pending' === get_post_meta( $id, self::HASH, true ) ? 'refill' : 'own' ) : 'new';
					if ( ! $id ) {
						$id = self::other_menu();
						if ( $id ) {
							$how = 'unedited' === self::edit_state( $id ) ? 'swap' : 'edited';
						}
					}
					$bump( 'own' !== $how && 'edited' !== $how );
					if ( 'edited' === $how ) {
						$kept_menus[]           = (string) get_post_field( 'post_content', $id );
						$result['keptEdited'][] = self::kept( $id, 'navigation', 'primary', true );
					} elseif ( 'own' !== $how ) {
						$from = 'swap' === $how ? self::tag( $id )[0] : '';
						if ( $from ) {
							self::keep_revision( $id );
						}
						$nav += $id ? array( 'ID' => $id, 'post_status' => 'publish' ) : array( 'post_author' => $author, 'post_status' => 'publish' );
						$id   = self::save( $nav, 'navigation', 'primary' );
						self::stamp( $id );
						if ( $from ) {
							$result['replaced'][] = self::item( $id, 'navigation', array( 'key' => 'primary', 'from' => $from ) );
						} elseif ( 'new' === $how ) {
							$result['added'][] = self::item( $id, 'navigation' );
						}
					}
				}

				// 6b. The previous theme's demo pages/posts this theme has no counterpart for.
				self::leftovers( $demo, $seen, $kept_menus, $result );

				// 7. Settings that only change while they are still unset / defaults.
				self::settings( $demo, $pages, $force_reading );
			} finally {
				self::end();
			}
			return $counts + $result;
		}

		/**
		 * An item this theme imported before: fill in the content when a run stopped before writing it, and publish it
		 * again when a switch to another theme drafted it and nobody edited it since (switching back).
		 */
		private static function revisit( $id, $kind, $key, array &$result, array &$fresh ) {
			if ( 'pending' === get_post_meta( $id, self::HASH, true ) ) {
				$fresh[ $key ] = true;
			} elseif ( get_post_meta( $id, self::DRAFTED, true ) && 'draft' === get_post_status( $id ) && 'unedited' === self::edit_state( $id ) ) {
				$r = wp_update_post( array( 'ID' => $id, 'post_status' => 'publish' ), true );
				if ( is_wp_error( $r ) ) {
					throw new RuntimeException( $r->get_error_message() );
				}
				delete_post_meta( $id, self::DRAFTED );
				$result['added'][] = self::item( $id, $kind );
			}
		}

		/** A keptEdited entry. $replaceable: this theme has its own version of it ("Use <Theme>'s text"). */
		private static function kept( $id, $kind, $key, $replaceable ) {
			$tag = self::tag( $id );
			return self::item( $id, $kind, array( 'key' => $replaceable ? $key : '', 'theme' => $tag ? $tag[0] : '', 'reason' => self::edit_state( $id ), 'replaceable' => (bool) $replaceable ) );
		}

		/** Newest published ShipPress menu of another theme, or 0. */
		private static function other_menu() {
			$ids = get_posts(
				array(
					'post_type'        => 'wp_navigation',
					'post_status'      => 'publish',
					'meta_key'         => self::META, // phpcs:ignore WordPress.DB.SlowDBQuery.slow_query_meta_key
					'meta_value'       => ':navigation:primary', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_query_meta_value
					'meta_compare'     => 'LIKE', // WordPress wraps the value in %…%.
					'orderby'          => 'date',
					'order'            => 'DESC',
					'numberposts'      => 1,
					'fields'           => 'ids',
					'suppress_filters' => true,
				)
			);
			return $ids ? (int) $ids[0] : 0;
		}

		/**
		 * Published demo pages/posts of other ShipPress themes that this theme did not match: unedited ones go to Draft
		 * (tagged, so switching back publishes them again), edited ones stay and are reported. Never drafted: the front
		 * page, the posts page unless this theme brings its own, and pages an edited menu still links to.
		 */
		private static function leftovers( array $demo, array $seen, array $kept_menus, array &$result ) {
			$has_blog = false;
			foreach ( $demo['pages'] as $p ) {
				$has_blog = $has_blog || ( isset( $p['role'] ) && 'posts' === $p['role'] );
			}
			$ids = get_posts(
				array(
					'post_type'        => array( 'page', 'post' ),
					'post_status'      => 'publish',
					'meta_key'         => self::META, // phpcs:ignore WordPress.DB.SlowDBQuery.slow_query_meta_key
					'numberposts'      => -1,
					'fields'           => 'ids',
					'orderby'          => 'ID',
					'order'            => 'ASC',
					'suppress_filters' => true,
				)
			);
			foreach ( $ids as $id ) {
				$tag = self::tag( $id );
				if ( ! $tag || self::slug() === $tag[0] || in_array( (int) $id, $seen, true ) || ! in_array( $tag[1], array( 'page', 'post' ), true ) ) {
					continue;
				}
				$state = self::edit_state( $id );
				if ( 'edited' === $state ) {
					$result['keptEdited'][] = self::kept( $id, $tag[1], '', false );
					continue;
				}
				$linked = false;
				foreach ( $kept_menus as $menu ) {
					$linked = $linked || preg_match( '/"id":' . (int) $id . '[,}]/', $menu );
				}
				if ( 'unedited' !== $state || $linked || (int) get_option( 'page_on_front' ) === (int) $id || ( ! $has_blog && (int) get_option( 'page_for_posts' ) === (int) $id ) ) {
					continue;
				}
				$r = wp_update_post( array( 'ID' => $id, 'post_status' => 'draft' ), true );
				if ( is_wp_error( $r ) ) {
					throw new RuntimeException( $r->get_error_message() );
				}
				update_post_meta( $id, self::DRAFTED, 1 );
				$result['drafted'][] = self::item( $id, $tag[1], array( 'from' => $tag[0] ) );
			}
		}

		/** Final markup of a demo page. */
		private static function page_markup( array $p, array $media, array $links ) {
			return empty( $p['content'] ) ? '' : self::content( $p['content'], $media, $links );
		}

		/** Final markup of a demo post (its excerpt as a paragraph when it has no content of its own). */
		private static function post_markup( array $p, array $media, array $links ) {
			$body = isset( $p['content'] ) ? $p['content'] : "<!-- wp:paragraph -->\n<p>" . esc_html( $p['excerpt'] ) . "</p>\n<!-- /wp:paragraph -->";
			return self::content( $body, $media, $links );
		}

		/** Reading, permalinks, title and tagline. */
		private static function settings( array $demo, array $pages, $force_reading ) {
			$front = 0;
			$blog  = 0;
			foreach ( $demo['pages'] as $p ) {
				if ( isset( $p['role'] ) && 'front' === $p['role'] ) {
					$front = $pages[ $p['slug'] ];
				}
				if ( isset( $p['role'] ) && 'posts' === $p['role'] ) {
					$blog = $pages[ $p['slug'] ];
				}
			}
			$current = (int) get_option( 'page_on_front' );
			$has_front = 'page' === get_option( 'show_on_front' ) && $current && $current !== $front
				&& get_post_status( $current ) === 'publish' && '' !== trim( (string) get_post_field( 'post_content', $current ) );
			if ( $front && ( $force_reading || ! $has_front ) && get_post_status( $front ) === 'publish' ) {
				update_option( 'show_on_front', 'page' );
				update_option( 'page_on_front', $front );
			}
			$current_blog = (int) get_option( 'page_for_posts' );
			if ( $blog && ( $force_reading || ! $current_blog || get_post_status( $current_blog ) !== 'publish' ) && get_post_status( $blog ) === 'publish' ) {
				update_option( 'page_for_posts', $blog );
			}
			flush_rewrite_rules();
			if ( ! empty( $demo['site']['title'] ) && in_array( trim( (string) get_option( 'blogname' ) ), self::DEFAULT_TITLES, true ) ) {
				update_option( 'blogname', $demo['site']['title'] );
			}
			if ( isset( $demo['site']['tagline'] ) && in_array( trim( (string) get_option( 'blogdescription' ) ), self::DEFAULT_TAGLINES, true ) ) {
				update_option( 'blogdescription', $demo['site']['tagline'] );
			}
		}

		/** Site-relative paths used in the theme's markup ("/about/") → real URLs on this site. */
		private static function link_map( array $demo, array $pages, array $terms ) {
			$map = array();
			foreach ( $demo['pages'] as $p ) {
				$path = '/' . ( isset( $p['parent'] ) ? $p['parent'] . '/' : '' ) . $p['slug'] . '/';
				$map[ $path ] = ( isset( $p['role'] ) && 'front' === $p['role'] ) ? home_url( '/' ) : get_permalink( $pages[ $p['slug'] ] );
			}
			foreach ( array( 'category' => 'category', 'post_tag' => 'tag' ) as $tax => $base ) {
				foreach ( $terms[ $tax ] as $slug => $id ) {
					$link = get_term_link( $id, $tax );
					if ( ! is_wp_error( $link ) ) {
						$map[ '/' . $base . '/' . $slug . '/' ] = $link;
					}
				}
			}
			foreach ( isset( $demo['posts'] ) ? $demo['posts'] : array() as $p ) {
				list( $id ) = self::claim( 'post', $p['slug'], 'post' );
				if ( $id ) {
					$map[ '/' . $p['slug'] . '/' ] = get_permalink( $id );
				}
			}
			foreach ( isset( $demo['links'] ) ? $demo['links'] : array() as $from => $to ) {
				if ( isset( $map[ $to ] ) ) {
					$map[ $from ] = $map[ $to ];
				}
			}
			return $map;
		}

		/**
		 * Page/post markup ready to store: patterns expanded, illustrations swapped for Media Library images,
		 * site-relative links pointed at the real URLs.
		 */
		public static function content( $markup, array $media, array $links ) {
			$html = self::expand_patterns( (string) $markup );
			$uri  = get_theme_file_uri( 'assets/images/' );
			$html = str_replace( '{{theme}}/assets/images/', $uri, $html );
			$html = preg_replace_callback(
				'#' . preg_quote( $uri, '#' ) . '([a-z0-9-]+)\.svg#i',
				function ( $m ) use ( $media ) {
					return isset( $media[ $m[1] ] ) ? (string) wp_get_attachment_url( $media[ $m[1] ] ) : $m[0];
				},
				$html
			);
			return preg_replace_callback(
				'#(href="|"url":")(/[a-z0-9/_-]*)(["\#?])#i',
				function ( $m ) use ( $links ) {
					$path = '/' === substr( $m[2], -1 ) ? $m[2] : $m[2] . '/';
					if ( isset( $links[ $path ] ) ) {
						return $m[1] . $links[ $path ] . $m[3];
					}
					return $m[1] . home_url( $m[2] ) . $m[3];
				},
				$html
			);
		}

		/** Replaces <!-- wp:pattern {"slug":"x"} /--> with that pattern file's blocks (recursively). */
		public static function expand_patterns( $markup, $depth = 0 ) {
			if ( $depth > 5 ) {
				return $markup;
			}
			$files = self::pattern_files();
			return preg_replace_callback(
				'#<!--\s+wp:pattern\s+(\{.*?\})\s+/-->#s',
				function ( $m ) use ( $files, $depth ) {
					$attrs = json_decode( $m[1], true );
					$slug  = is_array( $attrs ) && isset( $attrs['slug'] ) ? $attrs['slug'] : '';
					if ( ! isset( $files[ $slug ] ) ) {
						return $m[0];
					}
					ob_start();
					include $files[ $slug ];
					return trim( self::expand_patterns( (string) ob_get_clean(), $depth + 1 ) );
				},
				$markup
			);
		}

		/** Pattern slug → file, from the "Slug:" header of patterns/*.php. */
		private static function pattern_files() {
			static $files = null;
			if ( null === $files ) {
				$files = array();
				foreach ( glob( self::theme_dir() . '/patterns/*.php' ) ?: array() as $file ) {
					$data = get_file_data( $file, array( 'slug' => 'Slug' ) );
					if ( $data['slug'] ) {
						$files[ $data['slug'] ] = $file;
					}
				}
			}
			return $files;
		}

		/** Inner blocks of the wp_navigation post. */
		private static function navigation_markup( array $items, array $pages, array $terms ) {
			$out = array();
			foreach ( $items as $item ) {
				$attrs = array( 'label' => $item['label'] );
				if ( isset( $item['page'] ) && isset( $pages[ $item['page'] ] ) ) {
					$attrs += array( 'type' => 'page', 'id' => $pages[ $item['page'] ], 'url' => get_permalink( $pages[ $item['page'] ] ), 'kind' => 'post-type' );
				} elseif ( isset( $item['category'] ) && isset( $terms['category'][ $item['category'] ] ) ) {
					$id     = $terms['category'][ $item['category'] ];
					$attrs += array( 'type' => 'category', 'id' => $id, 'url' => get_term_link( $id, 'category' ), 'kind' => 'taxonomy' );
				} elseif ( isset( $item['url'] ) ) {
					$attrs += array( 'url' => 0 === strpos( $item['url'], '/' ) ? home_url( $item['url'] ) : $item['url'], 'kind' => 'custom' );
				} else {
					continue;
				}
				$out[] = '<!-- wp:navigation-link ' . wp_json_encode( $attrs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . ' /-->';
			}
			return implode( "\n", $out );
		}

		/**
		 * Replaces one demo item (a page/post/menu kept because it was edited, or one of this theme's own) with this
		 * theme's version, on request: a revision of the current version is saved first, the post ID and slug stay.
		 *
		 * @param int $id Post ID.
		 * @return array The item ('id', 'title', 'kind').
		 * @throws RuntimeException When it is not a ShipPress demo item this theme has a version of.
		 */
		public static function use_text( $id ) {
			$id   = (int) $id;
			$demo = self::load();
			$post = get_post( $id );
			if ( ! $post || ! self::tag( $id ) || ! in_array( $post->post_type, array( 'page', 'post', 'wp_navigation' ), true ) ) {
				throw new RuntimeException( 'That is not a page, post or menu the theme set up.' );
			}
			if ( ! self::lock( 30 ) ) {
				throw new ShipPress_Demo_Import_Busy( 'Another demo import is still running on this site. Try again in a minute.' );
			}
			self::begin( $demo );
			try {
				// What the import would use right now: this theme's media, terms and pages (looked up, nothing created).
				$media = array();
				foreach ( glob( self::theme_dir() . '/assets/images/demo/*' ) ?: array() as $file ) {
					$name = pathinfo( $file, PATHINFO_FILENAME );
					$mid  = self::find( 'media', $name, 'attachment' );
					if ( $mid ) {
						$media[ $name ] = $mid;
					}
				}
				$terms = array( 'category' => array(), 'post_tag' => array() );
				foreach ( array( 'categories' => 'category', 'tags' => 'post_tag' ) as $key => $tax ) {
					foreach ( isset( $demo[ $key ] ) ? $demo[ $key ] : array() as $t ) {
						$found = get_term_by( 'slug', $t['slug'], $tax );
						if ( $found ) {
							$terms[ $tax ][ $t['slug'] ] = (int) $found->term_id;
						}
					}
				}
				$pages = array();
				$match = null;
				foreach ( $demo['pages'] as $p ) {
					list( $pid ) = self::claim( 'page', $p['slug'], 'page', $p['title'] );
					$pages[ $p['slug'] ] = (int) $pid;
					if ( 'page' === $post->post_type && $pid === $id ) {
						$match = $p;
					}
				}
				foreach ( isset( $demo['posts'] ) ? $demo['posts'] : array() as $p ) {
					list( $pid ) = self::claim( 'post', $p['slug'], 'post' );
					if ( 'post' === $post->post_type && (int) $pid === $id ) {
						$match = $p;
					}
				}
				if ( 'wp_navigation' === $post->post_type && ! empty( $demo['navigation']['items'] ) ) {
					$match = $demo['navigation'];
				}
				if ( ! $match ) {
					throw new RuntimeException( sprintf( '%s has no page like this one, so there is no text to use.', self::name() ) );
				}
				$links = self::link_map( $demo, $pages, $terms );
				self::keep_revision( $id );
				if ( 'wp_navigation' === $post->post_type ) {
					$id = self::save( array( 'ID' => $id, 'post_title' => isset( $match['title'] ) ? $match['title'] : 'Main menu', 'post_content' => wp_slash( self::navigation_markup( $match['items'], $pages, $terms ) ) ), 'navigation', 'primary' );
					self::stamp( $id );
				} elseif ( 'page' === $post->post_type ) {
					self::save( array( 'ID' => $id, 'post_title' => $match['title'], 'page_template' => empty( $match['template'] ) ? 'default' : $match['template'] ), 'page', $match['slug'] );
					self::finish( $id, self::page_markup( $match, $media, $links ) );
				} else {
					self::save( array( 'ID' => $id, 'post_title' => $match['title'], 'post_excerpt' => $match['excerpt'] ), 'post', $match['slug'] );
					self::finish( $id, self::post_markup( $match, $media, $links ) );
				}
				// It no longer counts as kept in the notice.
				$last = get_option( self::LAST );
				if ( is_array( $last ) && isset( $last['keptEdited'] ) ) {
					$last['keptEdited'] = array_values(
						array_filter(
							$last['keptEdited'],
							function ( $entry ) use ( $id ) {
								return (int) $entry['id'] !== $id;
							}
						)
					);
					$last['replaced'] = self::merge_items( isset( $last['replaced'] ) ? $last['replaced'] : array(), array( self::item( $id, $post->post_type === 'wp_navigation' ? 'navigation' : $post->post_type ) ) );
					update_option( self::LAST, $last, false );
				}
			} finally {
				self::end();
				self::unlock();
			}
			return self::item( $id, 'wp_navigation' === $post->post_type ? 'navigation' : $post->post_type );
		}

		/**
		 * One plain sentence about a theme switch, e.g. "About and Contact kept your own text; the other pages now use
		 * Kenchiku Grid's design and sample text." Empty when nothing was kept or replaced.
		 *
		 * @param array  $result Result of import() / the `shippress_demo_last` option.
		 * @param string $name   Theme name.
		 */
		public static function summary( array $result, $name ) {
			$kept = wp_list_pluck( isset( $result['keptEdited'] ) ? $result['keptEdited'] : array(), 'title' );
			if ( ! $kept ) {
				return empty( $result['replaced'] ) ? '' : sprintf( 'Your pages now use %s\'s design and sample text.', $name );
			}
			$kept = array_map(
				function ( $title ) {
					return '' === trim( $title ) ? '(no title)' : $title;
				},
				$kept
			);
			if ( count( $kept ) > 4 ) {
				$kept = array_merge( array_slice( $kept, 0, 3 ), array( sprintf( '%d other pages', count( $kept ) - 3 ) ) );
			}
			$list = 1 === count( $kept ) ? $kept[0] : implode( ', ', array_slice( $kept, 0, -1 ) ) . ' and ' . end( $kept );
			return sprintf( '%1$s kept your own text; the other pages now use %2$s\'s design and sample text.', $list, $name );
		}

		/**
		 * Fallback in wp-admin: a notice with an "Import demo content" button while nothing has been imported
		 * (or the automatic import failed), and a one-time result message. After a switch from another ShipPress
		 * theme: which pages kept the user's own text, each with a "Use <Theme>'s text" button.
		 */
		public static function admin_notice() {
			if ( ! current_user_can( 'edit_theme_options' ) || ! current_user_can( 'publish_pages' ) ) {
				return;
			}
			$result = get_transient( self::ACTION . '_result' );
			if ( $result ) {
				delete_transient( self::ACTION . '_result' );
				$ok = 'ok' === $result['status'];
				printf(
					'<div class="notice notice-%1$s is-dismissible"><p>%2$s</p></div>',
					$ok ? 'success' : 'error',
					esc_html( $ok ? ( isset( $result['message'] ) ? $result['message'] : __( 'Demo content imported. Your pages are under Pages: open one and edit the text.', 'default' ) ) : $result['message'] )
				);
			}
			self::kept_notice();
			$state = self::state();
			if ( ! empty( $state['imported'] ) || get_stylesheet() !== self::slug() ) {
				return;
			}
			$theme = wp_get_theme();
			echo '<div class="notice notice-info"><p>';
			echo esc_html( sprintf( /* translators: %s: theme name */ __( '%s can set up its pages, sample posts, images and menu for you, so you only need to change the text. Nothing you already have is changed.', 'default' ), $theme->get( 'Name' ) ) );
			if ( ! empty( $state['error'] ) ) {
				echo ' ' . esc_html( sprintf( /* translators: %s: error */ __( 'The automatic setup did not finish: %s', 'default' ), $state['error'] ) );
			}
			echo '</p><form method="post" action="' . esc_url( admin_url( 'admin-post.php' ) ) . '"><p>';
			echo '<input type="hidden" name="action" value="' . esc_attr( self::ACTION ) . '">';
			wp_nonce_field( self::ACTION );
			submit_button( __( 'Import demo content', 'default' ), 'primary', 'submit', false );
			echo '</p></form></div>';
		}

		/** The "kept your own text" notice after a switch (only while this theme is active and the list is not dismissed). */
		private static function kept_notice() {
			$last = get_option( self::LAST );
			if ( ! is_array( $last ) || empty( $last['keptEdited'] ) || ! empty( $last['dismissed'] ) || get_stylesheet() !== self::slug() || self::slug() !== $last['theme'] ) {
				return;
			}
			$name = self::name();
			$post = esc_url( admin_url( 'admin-post.php' ) );
			echo '<div class="notice notice-info shippress-kept"><p>' . esc_html( self::summary( $last, $name ) ) . '</p><ul>';
			foreach ( $last['keptEdited'] as $entry ) {
				$id = (int) $entry['id'];
				if ( ! get_post( $id ) ) {
					continue;
				}
				echo '<li><a href="' . esc_url( (string) get_edit_post_link( $id ) ) . '">' . esc_html( '' === trim( $entry['title'] ) ? __( '(no title)', 'default' ) : $entry['title'] ) . '</a>';
				if ( ! empty( $entry['replaceable'] ) && current_user_can( 'edit_post', $id ) ) {
					echo ' <form method="post" action="' . $post . '" style="display:inline">'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above.
					echo '<input type="hidden" name="action" value="' . esc_attr( self::USE_TEXT ) . '"><input type="hidden" name="post" value="' . esc_attr( (string) $id ) . '">';
					wp_nonce_field( self::USE_TEXT . '_' . $id, '_wpnonce', true );
					/* translators: %s: theme name */
					submit_button( sprintf( __( 'Use %s\'s text', 'default' ), $name ), 'secondary small', 'submit', false, array( 'aria-label' => sprintf( '%s: %s', $entry['title'], sprintf( __( 'Use %s\'s text', 'default' ), $name ) ) ) );
					echo '</form>';
				}
				echo '</li>';
			}
			echo '</ul><p class="description">' . esc_html__( 'Your current text is saved as a revision first, so you can get it back from the page editor (Revisions).', 'default' ) . '</p>';
			echo '<form method="post" action="' . $post . '"><p>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above.
			echo '<input type="hidden" name="action" value="' . esc_attr( self::DISMISS ) . '">';
			wp_nonce_field( self::DISMISS );
			submit_button( __( 'Keep my text and hide this', 'default' ), 'link', 'submit', false );
			echo '</p></form></div>';
		}

		/** admin-post.php handler for "Use <Theme>'s text" (nonce + capability checked). */
		public static function handle_use_text() {
			$id = isset( $_POST['post'] ) ? absint( wp_unslash( $_POST['post'] ) ) : 0; // phpcs:ignore WordPress.Security.NonceVerification.Missing -- checked right below.
			if ( ! $id || ! current_user_can( 'edit_theme_options' ) || ! current_user_can( 'edit_post', $id ) ) {
				wp_die( esc_html__( 'Sorry, you are not allowed to do that.', 'default' ), 403 );
			}
			check_admin_referer( self::USE_TEXT . '_' . $id );
			try {
				$item = self::use_text( $id );
				/* translators: 1: page title, 2: theme name */
				set_transient( self::ACTION . '_result', array( 'status' => 'ok', 'message' => sprintf( __( '%1$s now uses %2$s\'s text. Your previous text is saved under Revisions in the editor.', 'default' ), $item['title'], self::name() ) ), 300 );
			} catch ( Throwable $e ) {
				set_transient( self::ACTION . '_result', array( 'status' => 'error', 'message' => $e->getMessage() ), 300 );
			}
			wp_safe_redirect( wp_get_referer() ? wp_get_referer() : admin_url( 'edit.php?post_type=page' ) );
			exit;
		}

		/** admin-post.php handler for "Keep my text and hide this". */
		public static function handle_dismiss() {
			if ( ! current_user_can( 'edit_theme_options' ) ) {
				wp_die( esc_html__( 'Sorry, you are not allowed to do that.', 'default' ), 403 );
			}
			check_admin_referer( self::DISMISS );
			$last = get_option( self::LAST );
			if ( is_array( $last ) ) {
				$last['dismissed'] = true;
				update_option( self::LAST, $last, false );
			}
			wp_safe_redirect( wp_get_referer() ? wp_get_referer() : admin_url() );
			exit;
		}

		/** admin-post.php handler for the button (nonce + capability checked). */
		public static function handle_button() {
			if ( ! current_user_can( 'edit_theme_options' ) || ! current_user_can( 'publish_pages' ) ) {
				wp_die( esc_html__( 'Sorry, you are not allowed to do that.', 'default' ), 403 );
			}
			check_admin_referer( self::ACTION );
			try {
				self::run();
				set_transient( self::ACTION . '_result', array( 'status' => 'ok' ), 300 );
			} catch ( ShipPress_Demo_Import_Busy $e ) {
				set_transient( self::ACTION . '_result', array( 'status' => 'error', 'message' => $e->getMessage() ), 300 );
			} catch ( Throwable $e ) {
				update_option( self::option_name(), array( 'version' => self::VERSION, 'error' => $e->getMessage() ), false );
				set_transient( self::ACTION . '_result', array( 'status' => 'error', 'message' => $e->getMessage() ), 300 );
			}
			wp_safe_redirect( admin_url( 'edit.php?post_type=page' ) );
			exit;
		}

		/**
		 * Imports the active theme's demo content (pages, posts, images, menu). Safe to run again: only missing items are
		 * added. After a switch from another ShipPress theme, its unedited demo pages, posts and menu get this theme's
		 * version (a revision of the old one is saved first) and edited ones are kept and listed under keptEdited.
		 *
		 * Prints one JSON line {theme, name, created, skipped, replaced, keptEdited, added, drafted, summary}, then a
		 * success line (only the JSON with --format=json).
		 *
		 * ## OPTIONS
		 *
		 * [--reading]
		 * : Also make the demo Home and News pages the front page and posts page, even if the site already has a front page.
		 *
		 * [--format=<format>]
		 * : json = print only the JSON result.
		 *
		 * ## EXAMPLES
		 *
		 *     wp shippress demo-import
		 *     wp shippress demo-import --reading --format=json
		 *
		 * @param array $args       Positional args.
		 * @param array $assoc_args Flags.
		 */
		public static function cli( $args, $assoc_args ) {
			try {
				$before = self::$created_before;
				$counts = self::run( ! empty( $assoc_args['reading'] ) );
				// What activation did moments ago on this same load counts as done by this command too.
				$counts['created'] += $before;
				$counts['skipped']  = max( 0, $counts['skipped'] - $before );
				foreach ( array( 'replaced', 'added', 'drafted' ) as $list ) {
					$counts[ $list ] = self::$earlier[ $list ];
				}
			} catch ( Throwable $e ) {
				WP_CLI::error( $e->getMessage() );
				return;
			}
			$out = array( 'theme' => self::slug(), 'name' => self::name() ) + $counts + array( 'summary' => self::summary( $counts, self::name() ) );
			WP_CLI::line( wp_json_encode( $out, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) );
			if ( ! isset( $assoc_args['format'] ) || 'json' !== $assoc_args['format'] ) {
				WP_CLI::success( sprintf( 'Demo content ready: %d created, %d already there.', $counts['created'], $counts['skipped'] ) );
			}
		}

		/**
		 * Gives one page, post or menu the active theme's demo text (e.g. one listed under keptEdited after a theme
		 * switch). The current version is saved as a revision first; the ID and slug stay the same.
		 *
		 * Prints one JSON line {id, title, kind, theme, name}.
		 *
		 * ## OPTIONS
		 *
		 * <id>
		 * : Post ID of the page, post or menu.
		 *
		 * [--format=<format>]
		 * : json = print only the JSON result.
		 *
		 * ## EXAMPLES
		 *
		 *     wp shippress demo-use-text 12
		 *
		 * @param array $args       Positional args.
		 * @param array $assoc_args Flags.
		 */
		public static function cli_use_text( $args, $assoc_args ) {
			$id = isset( $args[0] ) ? absint( $args[0] ) : 0;
			if ( ! $id ) {
				WP_CLI::error( 'Give the post ID of a page, post or menu.' );
				return;
			}
			try {
				$item = self::use_text( $id );
			} catch ( Throwable $e ) {
				WP_CLI::error( $e->getMessage() );
				return;
			}
			WP_CLI::line( wp_json_encode( $item + array( 'theme' => self::slug(), 'name' => self::name() ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) );
			if ( ! isset( $assoc_args['format'] ) || 'json' !== $assoc_args['format'] ) {
				WP_CLI::success( sprintf( '%1$s now uses %2$s\'s text (the previous version is saved as a revision).', $item['title'], self::name() ) );
			}
		}
	}

	ShipPress_Demo_Import::boot();
}
