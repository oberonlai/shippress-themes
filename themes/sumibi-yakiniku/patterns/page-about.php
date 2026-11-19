<?php
/**
 * Title: Page: Our Story
 * Slug: sumibi-yakiniku/page-about
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: Our Story inner page: opener band, white strip with an offset portrait and a docked year plate, the story text and a link to People.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-open","layout":{"type":"default"}} -->
<section class="wp-block-group sy-open"><!-- wp:paragraph {"className":"sy-label sy-label--l"} -->
<p class="sy-label sy-label--l"><?php echo esc_html( sumibi_yakiniku_t( 'ab_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo sumibi_yakiniku_img( 'p17-grill-counter.webp' ); ?>","dimRatio":50,"overlayColor":"charcoal","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"contentPosition":"center left","className":"sy-band sy-band--page sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left sy-band sy-band--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sumibi_yakiniku_a( 'alt_p17' ); ?>" src="<?php echo sumibi_yakiniku_img( 'p17-grill-counter.webp' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"className":"sy-open__h","level":1} -->
<h1 class="wp-block-heading sy-open__h"><?php echo esc_html( sumibi_yakiniku_t( 'ab_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-open__k"} -->
<p class="sy-open__k"><?php echo esc_html( sumibi_yakiniku_t( 'ab_kicker' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-story sy-story--page","layout":{"type":"default"}} -->
<section class="wp-block-group sy-story sy-story--page"><!-- wp:html -->
<div class="sy-strip" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"sy-story__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sy-story__grid"><!-- wp:group {"className":"sy-story__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-story__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sy-lede"} -->
<p class="sy-lede"><?php echo esc_html( sumibi_yakiniku_t( 'ab_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'ab_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'ab_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-story__side","layout":{"type":"default"}} -->
<div class="wp-block-group sy-story__side"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-portrait sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full sy-portrait sp-reveal sp-reveal--wipe"><img src="<?php echo sumibi_yakiniku_img( 'p06-butcher-hands.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--groups","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--groups"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'ab_plate_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'plate_opened' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-pg__in sy-pg__in--after sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__in sy-pg__in--after sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'ab_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'ab_b2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-more"} -->
<p class="sy-more"><a href="<?php echo esc_url( home_url( '/people/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'more_people' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
