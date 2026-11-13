<?php
/**
 * Title: Home: on site curtain
 * Slug: akiha-college/front-curtain
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Description: T3: pale panels pass over one full-bleed photograph that moves slower than the panels; a white serif line sits in the slit between them.
 */
?>
<!-- wp:cover {"url":"<?php echo akiha_college_img( 'f1.webp' ); ?>","dimRatio":0,"minHeight":160,"minHeightUnit":"vh","isDark":false,"align":"full","className":"ak-curtain sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light ak-curtain sp-parallax" style="min-height:160vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo akiha_college_a( 'alt_f1' ); ?>" src="<?php echo akiha_college_img( 'f1.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ak-curtain__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-curtain__col"><!-- wp:group {"className":"ak-panel ak-panel--a","layout":{"type":"default"}} -->
<div class="wp-block-group ak-panel ak-panel--a"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akiha_college_t( 'lbl_site' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ak-panel__h"} -->
<h2 class="wp-block-heading ak-panel__h"><?php echo esc_html( akiha_college_t( 'site_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-panel__p"} -->
<p class="ak-panel__p"><?php echo esc_html( akiha_college_t( 'site_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-slit","layout":{"type":"default"}} -->
<div class="wp-block-group ak-slit"><!-- wp:paragraph {"className":"ak-slit__line"} -->
<p class="ak-slit__line"><?php echo esc_html( akiha_college_t( 'slit' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-panel ak-panel--b","layout":{"type":"default"}} -->
<div class="wp-block-group ak-panel ak-panel--b"><!-- wp:group {"className":"ak-cards","layout":{"type":"default"}} -->
<div class="wp-block-group ak-cards"><!-- wp:group {"className":"ak-card","layout":{"type":"default"}} -->
<div class="wp-block-group ak-card"><!-- wp:heading {"level":3,"className":"ak-card__t"} -->
<h3 class="wp-block-heading ak-card__t"><?php echo esc_html( akiha_college_t( 'card1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-card__d"} -->
<p class="ak-card__d"><?php echo esc_html( akiha_college_t( 'card1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-card","layout":{"type":"default"}} -->
<div class="wp-block-group ak-card"><!-- wp:heading {"level":3,"className":"ak-card__t"} -->
<h3 class="wp-block-heading ak-card__t"><?php echo esc_html( akiha_college_t( 'card2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-card__d"} -->
<p class="ak-card__d"><?php echo esc_html( akiha_college_t( 'card2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-card","layout":{"type":"default"}} -->
<div class="wp-block-group ak-card"><!-- wp:heading {"level":3,"className":"ak-card__t"} -->
<h3 class="wp-block-heading ak-card__t"><?php echo esc_html( akiha_college_t( 'card3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-card__d"} -->
<p class="ak-card__d"><?php echo esc_html( akiha_college_t( 'card3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->