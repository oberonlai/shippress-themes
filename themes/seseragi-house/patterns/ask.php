<?php
/**
 * Title: Ask: the one way
 * Slug: seseragi-house/ask
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: The single way to ask about dates on a mist band: one button to the ask page, the contact facts and the four hours of the house.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"ask","className":"sese-sec sese-ask","layout":{"type":"default"}} -->
<section id="ask" class="wp-block-group sese-sec sese-ask">
<!-- wp:group {"className":"sese-ask__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sese-ask__grid">
<!-- wp:group {"className":"sese-ask__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-ask__text sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'ask_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'ask_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sese-btn-wrap"} -->
<div class="wp-block-buttons sese-btn-wrap"><!-- wp:button {"className":"sese-btn"} -->
<div class="wp-block-button sese-btn"><a class="wp-block-button__link wp-element-button" href="/ask/"><?php echo esc_html( seseragi_house_t( 'ask_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"sese-ask__facts"} -->
<p class="sese-ask__facts"><?php echo esc_html( seseragi_house_t( 'ask_facts' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-hrs sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-hrs sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sese-eyebrow"} -->
<p class="sese-eyebrow"><?php echo esc_html( seseragi_house_t( 'hrs_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l1' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v1' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l2' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l3' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v3' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l4' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v4' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
