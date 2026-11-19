<?php
/**
 * Title: Page: Visit
 * Slug: sumibi-yakiniku/page-visit
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: Visit inner page: opener band, address and hours as stacked rows beside an inset photograph with a docked doors-open plate, arrival and access.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-open","layout":{"type":"default"}} -->
<section class="wp-block-group sy-open"><!-- wp:paragraph {"className":"sy-label sy-label--l"} -->
<p class="sy-label sy-label--l"><?php echo esc_html( sumibi_yakiniku_t( 'vi_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo sumibi_yakiniku_img( 'p16-street-entrance.webp' ); ?>","dimRatio":50,"overlayColor":"charcoal","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.6},"contentPosition":"center left","className":"sy-band sy-band--page sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left sy-band sy-band--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sumibi_yakiniku_a( 'alt_p16' ); ?>" src="<?php echo sumibi_yakiniku_img( 'p16-street-entrance.webp' ); ?>" style="object-position:50% 60%" data-object-fit="cover" data-object-position="50% 60%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"className":"sy-open__h","level":1} -->
<h1 class="wp-block-heading sy-open__h"><?php echo esc_html( sumibi_yakiniku_t( 'vi_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-open__k"} -->
<p class="sy-open__k"><?php echo esc_html( sumibi_yakiniku_t( 'vi_kicker' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg"><!-- wp:paragraph {"className":"sy-lede"} -->
<p class="sy-lede"><?php echo esc_html( sumibi_yakiniku_t( 'vi_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-split","layout":{"type":"default"}} -->
<div class="wp-block-group sy-split"><!-- wp:group {"className":"sy-split__t sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-split__t sp-reveal sp-reveal--up"><!-- wp:group {"className":"sy-rows","layout":{"type":"default"}} -->
<div class="wp-block-group sy-rows"><!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_address' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'foot_address' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_phone' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'rv_phone' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_email' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'rv_email' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_open' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'rv_open' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_closed' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'rv_closed' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_coals' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'rv_coals' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_last' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'rv_last' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'rv_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-split__m sy-split__m--ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-split__m sy-split__m--ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-inset"} -->
<figure class="wp-block-image size-full sy-inset"><img src="<?php echo sumibi_yakiniku_img( 'p05-room-five.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--groups","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--groups"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'vi_plate_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'plate_doors' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg sy-pg--white","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg sy-pg--white"><!-- wp:group {"className":"sy-cols2","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cols2"><!-- wp:group {"className":"sy-pg__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__col sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h3"} -->
<h2 class="wp-block-heading sy-h3"><?php echo esc_html( sumibi_yakiniku_t( 'vi_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'vi_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-pg__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__col sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h3"} -->
<h2 class="wp-block-heading sy-h3"><?php echo esc_html( sumibi_yakiniku_t( 'vi_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'vi_b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
