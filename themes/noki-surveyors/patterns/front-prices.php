<?php
/**
 * Title: Home: prices
 * Slug: noki-surveyors/front-prices
 * Categories: noki-surveyors
 * Viewport Width: 1440
 * Description: Full-width price table of six surveys with the four-line request flow and the repeated call to action.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"price","align":"full","className":"nk-sec nk-sec--prices","layout":{"type":"default"}} -->
<section id="price" class="wp-block-group alignfull nk-sec nk-sec--prices">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'pr_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<table class="nk-price"><thead><tr><th scope="col"><?php echo esc_html( noki_surveyors_t( 'pt_h1' ) ); ?></th><th scope="col"><?php echo esc_html( noki_surveyors_t( 'pt_h2' ) ); ?></th><th scope="col"><?php echo esc_html( noki_surveyors_t( 'pt_h3' ) ); ?></th><th scope="col"><?php echo esc_html( noki_surveyors_t( 'pt_h4' ) ); ?></th></tr></thead><tbody><tr id="price-1"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr1_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr1_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr1_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr1_d' ) ); ?></td></tr><tr id="price-2"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr2_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr2_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr2_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr2_d' ) ); ?></td></tr><tr id="price-3"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr3_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr3_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr3_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr3_d' ) ); ?></td></tr><tr id="price-4"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr4_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr4_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr4_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr4_d' ) ); ?></td></tr><tr id="price-5"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr5_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr5_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr5_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr5_d' ) ); ?></td></tr><tr id="price-6"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr6_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr6_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr6_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr6_d' ) ); ?></td></tr></tbody></table>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"nk-note"} -->
<p class="nk-note"><?php echo esc_html( noki_surveyors_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"nk-flow","layout":{"type":"default"}} -->
<div class="wp-block-group nk-flow">
<!-- wp:html -->
<ol class="nk-steps"><li><span>01</span><?php echo esc_html( noki_surveyors_t( 'fl1' ) ); ?></li><li><span>02</span><?php echo esc_html( noki_surveyors_t( 'fl2' ) ); ?></li><li><span>03</span><?php echo esc_html( noki_surveyors_t( 'fl3' ) ); ?></li><li><span>04</span><?php echo esc_html( noki_surveyors_t( 'fl4' ) ); ?></li></ol>
<!-- /wp:html -->
<!-- wp:group {"className":"nk-flow__cta","layout":{"type":"default"}} -->
<div class="wp-block-group nk-flow__cta">
<!-- wp:heading {"level":3,"className":"nk-flow__t"} -->
<h3 class="wp-block-heading nk-flow__t"><?php echo esc_html( noki_surveyors_t( 'flow_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-flow__p"} -->
<p class="nk-flow__p"><?php echo esc_html( noki_surveyors_t( 'flow_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"nk-btns"} -->
<div class="wp-block-buttons nk-btns">
<!-- wp:button {"className":"nk-btn"} -->
<div class="wp-block-button nk-btn"><a class="wp-block-button__link wp-element-button" href="/request/"><?php echo esc_html( noki_surveyors_t( 'btn_request' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
