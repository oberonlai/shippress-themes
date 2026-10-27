<?php
/**
 * Title: Home: dock band and stories
 * Slug: niuke-scan/front-stories
 * Categories: niuke-scan
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the dock with a small caption, then three customer stories with rounded photographs.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"stories","align":"full","className":"nk-sec nk-stories","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull nk-sec nk-stories"><!-- wp:group {"className":"nk-dock sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group nk-dock sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dock-wide.webp' ) ); ?>" alt="<?php echo esc_attr( 'Wide view of three open warehouse loading doors with pallets and workers in daylight.' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"nk-dock__cap"} -->
<p class="nk-dock__cap"><?php echo wp_kses_post( niuke_scan_t( 'k20431475' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"nk-wrap nk-stories__body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-stories__body"><!-- wp:paragraph {"className":"nk-tag"} -->
<p class="nk-tag"><?php echo wp_kses_post( niuke_scan_t( 'kde6bb23f' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo wp_kses_post( niuke_scan_t( 'ka74165d8' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"nk-stories__cols sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nk-stories__cols sp-stagger"><!-- wp:group {"className":"nk-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nk-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nk-story__photo"} -->
<figure class="wp-block-image size-full nk-story__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/story-bikes.webp' ) ); ?>" alt="<?php echo esc_attr( 'Warehouse worker scanning a carton of bicycle wheel rims in a parts depot storage aisle.' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"nk-story__q"} -->
<p class="nk-story__q"><?php echo wp_kses_post( niuke_scan_t( 'k57a140bc' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"nk-story__who"} -->
<p class="nk-story__who"><strong><?php echo wp_kses_post( niuke_scan_t( 'kd62dc1bb' ) ); ?></strong><br><?php echo wp_kses_post( niuke_scan_t( 'k71d449bd' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"nk-story__facts"} -->
<p class="nk-story__facts"><?php echo wp_kses_post( niuke_scan_t( 'k3aa10536' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"nk-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nk-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nk-story__photo"} -->
<figure class="wp-block-image size-full nk-story__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/story-tea.webp' ) ); ?>" alt="<?php echo esc_attr( 'Worker scanning a brown carton beside jute sacks and spice tins on a warehouse pallet.' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"nk-story__q"} -->
<p class="nk-story__q"><?php echo wp_kses_post( niuke_scan_t( 'kd26a9e7c' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"nk-story__who"} -->
<p class="nk-story__who"><strong><?php echo wp_kses_post( niuke_scan_t( 'k7d33466b' ) ); ?></strong><br><?php echo wp_kses_post( niuke_scan_t( 'kdc6b617b' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"nk-story__facts"} -->
<p class="nk-story__facts"><?php echo wp_kses_post( niuke_scan_t( 'kce5ef9f4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"nk-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nk-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nk-story__photo"} -->
<figure class="wp-block-image size-full nk-story__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/story-lamps.webp' ) ); ?>" alt="<?php echo esc_attr( 'Operations staff scanning a long flat carton among wrapped lamp shades on metal shelving.' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"nk-story__q"} -->
<p class="nk-story__q"><?php echo wp_kses_post( niuke_scan_t( 'k30b3c84a' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"nk-story__who"} -->
<p class="nk-story__who"><strong><?php echo wp_kses_post( niuke_scan_t( 'k556d4a10' ) ); ?></strong><br><?php echo wp_kses_post( niuke_scan_t( 'kaf49c4f0' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"nk-story__facts"} -->
<p class="nk-story__facts"><?php echo wp_kses_post( niuke_scan_t( 'kb528fc8d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"nk-stories__foot","layout":{"type":"default"}} -->
<div class="wp-block-group nk-stories__foot"><!-- wp:paragraph {"className":"nk-stories__more"} -->
<p class="nk-stories__more"><a href="/stories/"><?php echo wp_kses_post( niuke_scan_t( 'kc4e2ad72' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"nk-stories__cta"} -->
<div class="wp-block-buttons nk-stories__cta"><!-- wp:button {"className":"nk-pill"} -->
<div class="wp-block-button nk-pill"><a class="wp-block-button__link wp-element-button" href="/waitlist/"><?php echo wp_kses_post( niuke_scan_t( 'k198e1969' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
