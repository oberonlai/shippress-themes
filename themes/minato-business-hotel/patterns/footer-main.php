<?php
/**
 * Title: Footer: school name, letter, links, school details and the base line
 * Slug: minato-business-hotel/footer-main
 * Categories: minato-business-hotel
 * Keywords: header
 * Viewport Width: 1440
 * Inserter: no
 * Description: The deep slate footer: the school name and line, the newsletter note, the page links, the synced school details and the legal line.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"mb-foot","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull mb-foot"><!-- wp:group {"align":"wide","className":"mb-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-foot__grid"><!-- wp:group {"className":"mb-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group mb-foot__brand"><!-- wp:paragraph {"className":"mb-foot__mark"} -->
<p class="mb-foot__mark"><?php echo wp_kses_post( minato_business_hotel_t( 'footer_main_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-foot__line"} -->
<p class="mb-foot__line"><?php echo wp_kses_post( minato_business_hotel_t( 'footer_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-foot__letter"} -->
<p class="mb-foot__letter"><?php echo wp_kses_post( minato_business_hotel_t( 'footer_main_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group mb-foot__links"><!-- wp:paragraph {"className":"mb-foot__kicker"} -->
<p class="mb-foot__kicker"><?php echo wp_kses_post( minato_business_hotel_t( 'footer_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-foot__list"} -->
<p class="mb-foot__list"><?php echo wp_kses_post( minato_business_hotel_t( 'footer_main_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-foot__school","layout":{"type":"default"}} -->
<div class="wp-block-group mb-foot__school"><!-- wp:pattern {"slug":"minato-business-hotel/office"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"mb-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-foot__base"><!-- wp:paragraph {"className":"mb-foot__legal"} -->
<p class="mb-foot__legal"><?php echo wp_kses_post( minato_business_hotel_t( 'footer_main_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-foot__legal"} -->
<p class="mb-foot__legal"><?php echo wp_kses_post( minato_business_hotel_t( 'footer_main_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
