<?php
/**
 * Title: Page: Guest stories
 * Slug: nagare-workation/page-stories
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Plain page head and three long white cards, each with a photograph, a stay label and a short account.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-phead nw-phead--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-phead nw-phead--plain"><!-- wp:group {"className":"nw-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group nw-phead__text"><!-- wp:paragraph {"className":"nw-label nw-phead__label"} -->
<p class="nw-label nw-phead__label"><?php echo esc_html( nagare_workation_t( 'nav_stories' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"nw-phead__h"} -->
<h1 class="wp-block-heading nw-phead__h"><?php echo esc_html( nagare_workation_t( 'sty_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-phead__lede"} -->
<p class="nw-phead__lede"><?php echo esc_html( nagare_workation_t( 'sty_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-stories sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nw-stories sp-stagger"><!-- wp:group {"anchor":"four-weeks","className":"nw-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="four-weeks" class="wp-block-group nw-story sp-reveal sp-reveal--up"><!-- wp:group {"className":"nw-story__img","layout":{"type":"default"}} -->
<div class="wp-block-group nw-story__img"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p17-coffee-pour.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-story__txt","layout":{"type":"default"}} -->
<div class="wp-block-group nw-story__txt"><!-- wp:paragraph {"className":"nw-card__meta"} -->
<p class="nw-card__meta"><?php echo esc_html( nagare_workation_t( 'st1_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nw-card__t nw-story__t"} -->
<h2 class="wp-block-heading nw-card__t nw-story__t"><?php echo esc_html( nagare_workation_t( 'sty_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-card__p"} -->
<p class="nw-card__p"><?php echo esc_html( nagare_workation_t( 'sty_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-card__more"} -->
<p class="nw-card__more"><a href="<?php echo esc_url( home_url( '/four-weeks-to-finish-a-release/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'st_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"two-translators","className":"nw-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="two-translators" class="wp-block-group nw-story sp-reveal sp-reveal--up"><!-- wp:group {"className":"nw-story__img","layout":{"type":"default"}} -->
<div class="wp-block-group nw-story__img"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p12-supplies-shelf.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-story__txt","layout":{"type":"default"}} -->
<div class="wp-block-group nw-story__txt"><!-- wp:paragraph {"className":"nw-card__meta"} -->
<p class="nw-card__meta"><?php echo esc_html( nagare_workation_t( 'st2_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nw-card__t nw-story__t"} -->
<h2 class="wp-block-heading nw-card__t nw-story__t"><?php echo esc_html( nagare_workation_t( 'sty_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-card__p"} -->
<p class="nw-card__p"><?php echo esc_html( nagare_workation_t( 'sty_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"first-chapter","className":"nw-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="first-chapter" class="wp-block-group nw-story sp-reveal sp-reveal--up"><!-- wp:group {"className":"nw-story__img","layout":{"type":"default"}} -->
<div class="wp-block-group nw-story__img"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p07-call-booth.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-story__txt","layout":{"type":"default"}} -->
<div class="wp-block-group nw-story__txt"><!-- wp:paragraph {"className":"nw-card__meta"} -->
<p class="nw-card__meta"><?php echo esc_html( nagare_workation_t( 'st3_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nw-card__t nw-story__t"} -->
<h2 class="wp-block-heading nw-card__t nw-story__t"><?php echo esc_html( nagare_workation_t( 'sty_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-card__p"} -->
<p class="nw-card__p"><?php echo esc_html( nagare_workation_t( 'sty_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--band nw-ctaband","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--band nw-ctaband"><!-- wp:group {"className":"nw-wrap nw-ctaband__in","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap nw-ctaband__in"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'cta_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"nw-btns"} -->
<div class="wp-block-buttons nw-btns"><!-- wp:button {"className":"nw-pill nw-pill--fill"} -->
<div class="wp-block-button nw-pill nw-pill--fill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'bk_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
