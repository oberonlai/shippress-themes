<?php
/**
 * Title: Home: three cards
 * Slug: kisha-rail/front-cards
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: Three tab cells docked under the window that grow into three white cards with corner-bracket titles.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-cards","layout":{"type":"default"},"anchor":"start"} -->
<section id="start" class="wp-block-group kr-cards">
<!-- wp:group {"className":"kr-cards__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cards__grid">
<!-- wp:group {"className":"kr-card kr-card--1","layout":{"type":"default"}} -->
<div class="wp-block-group kr-card kr-card--1">
<!-- wp:paragraph {"className":"kr-tab"} -->
<p class="kr-tab"><a href="#day"><?php echo esc_html( kisha_rail_t( 'tab_day' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-card__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-card__body sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"kr-bracket"} -->
<h3 class="wp-block-heading kr-bracket"><?php echo esc_html( kisha_rail_t( 'card1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-card__p"} -->
<p class="kr-card__p"><?php echo esc_html( kisha_rail_t( 'card1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-more"} -->
<p class="kr-more"><a href="#day"><?php echo esc_html( kisha_rail_t( 'card1_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-card kr-card--2","layout":{"type":"default"}} -->
<div class="wp-block-group kr-card kr-card--2">
<!-- wp:paragraph {"className":"kr-tab"} -->
<p class="kr-tab"><a href="#carry"><?php echo esc_html( kisha_rail_t( 'tab_carry' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-card__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-card__body sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"kr-bracket"} -->
<h3 class="wp-block-heading kr-bracket"><?php echo esc_html( kisha_rail_t( 'card2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-card__p"} -->
<p class="kr-card__p"><?php echo esc_html( kisha_rail_t( 'card2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-more"} -->
<p class="kr-more"><a href="#carry"><?php echo esc_html( kisha_rail_t( 'card2_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-card kr-card--3","layout":{"type":"default"}} -->
<div class="wp-block-group kr-card kr-card--3">
<!-- wp:paragraph {"className":"kr-tab"} -->
<p class="kr-tab"><a href="/brochure/"><?php echo esc_html( kisha_rail_t( 'tab_brochure' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-card__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-card__body sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"kr-bracket"} -->
<h3 class="wp-block-heading kr-bracket"><?php echo esc_html( kisha_rail_t( 'card3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-card__p"} -->
<p class="kr-card__p"><?php echo esc_html( kisha_rail_t( 'card3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-more"} -->
<p class="kr-more"><a href="/brochure/"><?php echo esc_html( kisha_rail_t( 'card3_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
