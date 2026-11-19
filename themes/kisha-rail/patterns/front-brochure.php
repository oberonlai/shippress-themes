<?php
/**
 * Title: Home: request a brochure
 * Slug: kisha-rail/front-brochure
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: The one way to ask: a white card with a photograph, the brochure facts and a wide pill on a dark grained strip.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-bro","layout":{"type":"default"},"anchor":"brochure"} -->
<section id="brochure" class="wp-block-group kr-bro">
<!-- wp:group {"className":"kr-bro__card","layout":{"type":"default"}} -->
<div class="wp-block-group kr-bro__card">
<!-- wp:group {"className":"kr-bro__ph","layout":{"type":"default"}} -->
<div class="wp-block-group kr-bro__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-ph kr-ph--32"} -->
<figure class="wp-block-image size-full kr-ph kr-ph--32"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13-brochure-hands.webp' ) ); ?>" alt="<?php echo esc_attr( kisha_rail_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-bro__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-bro__text">
<!-- wp:group {"className":"kr-head-grp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-head-grp sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 'bro_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kr-bracket"} -->
<h3 class="wp-block-heading kr-bracket"><?php echo esc_html( kisha_rail_t( 'bro_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'bro_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-facts","layout":{"type":"default"}} -->
<div class="wp-block-group kr-facts">
<!-- wp:paragraph {"className":"kr-facts__i"} -->
<p class="kr-facts__i"><?php echo esc_html( kisha_rail_t( 'bro_f1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-facts__i"} -->
<p class="kr-facts__i"><?php echo esc_html( kisha_rail_t( 'bro_f2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-facts__i"} -->
<p class="kr-facts__i"><?php echo esc_html( kisha_rail_t( 'bro_f3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-bro__strip kr-grain","layout":{"type":"default"},"backgroundColor":"dark"} -->
<div class="wp-block-group kr-bro__strip kr-grain has-dark-background-color has-background">
<!-- wp:buttons {"className":"kr-pill-wrap","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons kr-pill-wrap"><!-- wp:button {"className":"kr-pill"} -->
<div class="wp-block-button kr-pill"><a class="wp-block-button__link wp-element-button" href="/brochure/"><?php echo esc_html( kisha_rail_t( 'bro_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
