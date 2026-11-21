<?php
/**
 * Title: Footer
 * Slug: kirinuki-studio/footer-main
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: Dark footer with the studio name, address, hours, email, phone and the open dates, privacy and terms links.
 */
?>
<!-- wp:group {"tagName":"div","className":"kr-foot","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot"><!-- wp:group {"className":"kr-wrap kr-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group kr-wrap kr-foot__in"><!-- wp:group {"className":"kr-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot__brand"><!-- wp:paragraph {"className":"kr-foot__mark"} -->
<p class="kr-foot__mark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'foot_name' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__p"} -->
<p class="kr-foot__p"><?php echo esc_html( kirinuki_studio_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot__col"><!-- wp:paragraph {"className":"kr-foot__label"} -->
<p class="kr-foot__label"><?php echo esc_html( kirinuki_studio_t( 'foot_hours_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__p"} -->
<p class="kr-foot__p"><?php echo esc_html( kirinuki_studio_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__p"} -->
<p class="kr-foot__p"><?php echo esc_html( kirinuki_studio_t( 'foot_hours2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot__col"><!-- wp:paragraph {"className":"kr-foot__label"} -->
<p class="kr-foot__label"><?php echo esc_html( kirinuki_studio_t( 'foot_reach_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__p"} -->
<p class="kr-foot__p"><a href="mailto:hello@kirinuki-studio.example">hello@kirinuki-studio.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__p"} -->
<p class="kr-foot__p"><?php echo esc_html( kirinuki_studio_t( 'foot_phone' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot__col"><!-- wp:paragraph {"className":"kr-foot__label"} -->
<p class="kr-foot__label"><?php echo esc_html( kirinuki_studio_t( 'foot_more_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__p"} -->
<p class="kr-foot__p"><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'foot_nl' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__p"} -->
<p class="kr-foot__p"><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'foot_priv' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__p"} -->
<p class="kr-foot__p"><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'foot_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-wrap kr-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group kr-wrap kr-foot__base"><!-- wp:paragraph {"className":"kr-foot__copy"} -->
<p class="kr-foot__copy"><?php echo esc_html( kirinuki_studio_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
