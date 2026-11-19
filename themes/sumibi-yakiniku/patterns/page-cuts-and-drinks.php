<?php
/**
 * Title: Page: Cuts and Drinks
 * Slug: sumibi-yakiniku/page-cuts-and-drinks
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: Cuts & Drinks inner page: opener band, tab strip, the cuts list and the drinks pairing with an inset photograph.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-open","layout":{"type":"default"}} -->
<section class="wp-block-group sy-open"><!-- wp:paragraph {"className":"sy-label sy-label--l"} -->
<p class="sy-label sy-label--l"><?php echo esc_html( sumibi_yakiniku_t( 'cu_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo sumibi_yakiniku_img( 'p15-drinks-counter.webp' ); ?>","dimRatio":50,"overlayColor":"charcoal","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.6},"contentPosition":"center left","className":"sy-band sy-band--page sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left sy-band sy-band--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sumibi_yakiniku_a( 'alt_p15' ); ?>" src="<?php echo sumibi_yakiniku_img( 'p15-drinks-counter.webp' ); ?>" style="object-position:50% 60%" data-object-fit="cover" data-object-position="50% 60%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"className":"sy-open__h","level":1} -->
<h1 class="wp-block-heading sy-open__h"><?php echo esc_html( sumibi_yakiniku_t( 'cu_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-open__k"} -->
<p class="sy-open__k"><?php echo esc_html( sumibi_yakiniku_t( 'cu_kicker' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","className":"sy-tabs","layout":{"type":"default"}} -->
<nav class="wp-block-group sy-tabs" aria-label="<?php echo sumibi_yakiniku_a( 'tabs_label' ); ?>"><!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_courses' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab sy-tab--on"} -->
<p class="sy-tab sy-tab--on"><a href="<?php echo esc_url( home_url( '/cuts-and-drinks/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_cuts' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/groups/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_groups' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_reserve' ) ); ?></a></p>
<!-- /wp:paragraph --></nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg"><!-- wp:paragraph {"className":"sy-lede"} -->
<p class="sy-lede"><?php echo esc_html( sumibi_yakiniku_t( 'cu_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-pg__in sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__in sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'cu_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'cu_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"sy-pg__sub","level":3} -->
<h3 class="wp-block-heading sy-pg__sub"><?php echo esc_html( sumibi_yakiniku_t( 'cuts_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sy-cuts","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cuts"><!-- wp:group {"className":"sy-cut","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cut"><!-- wp:heading {"className":"sy-cut__n","level":3} -->
<h3 class="wp-block-heading sy-cut__n"><?php echo esc_html( sumibi_yakiniku_t( 'cut1_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-cut__c"} -->
<p class="sy-cut__c"><?php echo esc_html( sumibi_yakiniku_t( 'cut1_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-cut","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cut"><!-- wp:heading {"className":"sy-cut__n","level":3} -->
<h3 class="wp-block-heading sy-cut__n"><?php echo esc_html( sumibi_yakiniku_t( 'cut2_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-cut__c"} -->
<p class="sy-cut__c"><?php echo esc_html( sumibi_yakiniku_t( 'cut2_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-cut","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cut"><!-- wp:heading {"className":"sy-cut__n","level":3} -->
<h3 class="wp-block-heading sy-cut__n"><?php echo esc_html( sumibi_yakiniku_t( 'cut3_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-cut__c"} -->
<p class="sy-cut__c"><?php echo esc_html( sumibi_yakiniku_t( 'cut3_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-cut","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cut"><!-- wp:heading {"className":"sy-cut__n","level":3} -->
<h3 class="wp-block-heading sy-cut__n"><?php echo esc_html( sumibi_yakiniku_t( 'cut4_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-cut__c"} -->
<p class="sy-cut__c"><?php echo esc_html( sumibi_yakiniku_t( 'cut4_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-cut","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cut"><!-- wp:heading {"className":"sy-cut__n","level":3} -->
<h3 class="wp-block-heading sy-cut__n"><?php echo esc_html( sumibi_yakiniku_t( 'cut5_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-cut__c"} -->
<p class="sy-cut__c"><?php echo esc_html( sumibi_yakiniku_t( 'cut5_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-cut","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cut"><!-- wp:heading {"className":"sy-cut__n","level":3} -->
<h3 class="wp-block-heading sy-cut__n"><?php echo esc_html( sumibi_yakiniku_t( 'cut6_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-cut__c"} -->
<p class="sy-cut__c"><?php echo esc_html( sumibi_yakiniku_t( 'cut6_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-cut","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cut"><!-- wp:heading {"className":"sy-cut__n","level":3} -->
<h3 class="wp-block-heading sy-cut__n"><?php echo esc_html( sumibi_yakiniku_t( 'cut7_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-cut__c"} -->
<p class="sy-cut__c"><?php echo esc_html( sumibi_yakiniku_t( 'cut7_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-cut","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cut"><!-- wp:heading {"className":"sy-cut__n","level":3} -->
<h3 class="wp-block-heading sy-cut__n"><?php echo esc_html( sumibi_yakiniku_t( 'cut8_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-cut__c"} -->
<p class="sy-cut__c"><?php echo esc_html( sumibi_yakiniku_t( 'cut8_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg sy-pg--white","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg sy-pg--white"><!-- wp:group {"className":"sy-split","layout":{"type":"default"}} -->
<div class="wp-block-group sy-split"><!-- wp:group {"className":"sy-split__t sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-split__t sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'cu_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'cu_b2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-rows","layout":{"type":"default"}} -->
<div class="wp-block-group sy-rows"><!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'dr1_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'dr1_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'dr2_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'dr2_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'dr3_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'dr3_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-split__m","layout":{"type":"default"}} -->
<div class="wp-block-group sy-split__m"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-inset"} -->
<figure class="wp-block-image size-full sy-inset"><img src="<?php echo sumibi_yakiniku_img( 'p14-hearth-room.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
