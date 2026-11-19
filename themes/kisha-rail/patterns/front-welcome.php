<?php
/**
 * Title: Home: welcome
 * Slug: kisha-rail/front-welcome
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: Since 2009: the story in three paragraphs beside a tall photograph with a small transit label.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-welcome","layout":{"type":"default"},"anchor":"about"} -->
<section id="about" class="wp-block-group kr-welcome">
<!-- wp:group {"className":"kr-welcome__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kr-welcome__grid">
<!-- wp:group {"className":"kr-welcome__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-welcome__text">
<!-- wp:group {"className":"kr-head-grp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-head-grp sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 'wel_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kr-h2"} -->
<h2 class="wp-block-heading kr-h2"><?php echo esc_html( kisha_rail_t( 'wel_h2' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-prose sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prose sp-stagger">
<!-- wp:paragraph {"className":"kr-p sp-reveal sp-reveal--up"} -->
<p class="kr-p sp-reveal sp-reveal--up"><?php echo esc_html( kisha_rail_t( 'wel_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-p sp-reveal sp-reveal--up"} -->
<p class="kr-p sp-reveal sp-reveal--up"><?php echo esc_html( kisha_rail_t( 'wel_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-p sp-reveal sp-reveal--up"} -->
<p class="kr-p sp-reveal sp-reveal--up"><?php echo esc_html( kisha_rail_t( 'wel_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kr-more"} -->
<p class="kr-more"><a href="/about/"><?php echo esc_html( kisha_rail_t( 'wel_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-welcome__side sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-welcome__side sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-transit"} -->
<p class="kr-transit"><?php echo esc_html( kisha_rail_t( 'wel_transit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-ph kr-ph--45"} -->
<figure class="wp-block-image size-full kr-ph kr-ph--45"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03-day-sheet.webp' ) ); ?>" alt="<?php echo esc_attr( kisha_rail_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
