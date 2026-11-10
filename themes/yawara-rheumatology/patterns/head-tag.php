<?php
/**
 * Title: Page head: tag
 * Slug: yawara-rheumatology/head-tag
 * Categories: yawara-rheumatology
 * Inserter: no
 * Description: Short half-and-half page head for tag archives.
 */
?>
<!-- wp:group {"align":"full","className":"yw-ph"} -->
<div class="wp-block-group alignfull yw-ph"><!-- wp:group {"className":"yw-ph__strip"} -->
<div class="wp-block-group yw-ph__strip"><!-- wp:group {"className":"yw-cell yw-cell--wide2"} -->
<div class="wp-block-group yw-cell yw-cell--wide2"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yw-cell__img"} -->
<figure class="wp-block-image size-full yw-cell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p14-entrance.webp' ) ); ?>" alt="<?php echo esc_attr( yawara_rheumatology_t( 'alt_head_entrance' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-cell yw-cell--sq"} -->
<div class="wp-block-group yw-cell yw-cell--sq"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yw-cell__img"} -->
<figure class="wp-block-image size-full yw-cell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-hands.webp' ) ); ?>" alt="<?php echo esc_attr( yawara_rheumatology_t( 'alt_head_hands' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yw-tab"} -->
<div class="wp-block-group yw-tab"><!-- wp:paragraph {"className":"yw-tab__t"} -->
<p class="yw-tab__t"><?php echo esc_html( yawara_rheumatology_t( 'tag_tab_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-tab__s"} -->
<p class="yw-tab__s"><?php echo esc_html( yawara_rheumatology_t( 'tag_tab_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-ph__white yw-split"} -->
<div class="wp-block-group yw-ph__white yw-split"><!-- wp:group {"className":"yw-split__l"} -->
<div class="wp-block-group yw-split__l"><!-- wp:paragraph {"className":"yw-crumb"} -->
<p class="yw-crumb"><a href="/"><?php echo esc_html( yawara_rheumatology_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( yawara_rheumatology_t( 'crumb_journal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-split__r"} -->
<div class="wp-block-group yw-split__r"><!-- wp:query-title {"type":"archive","level":1} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
