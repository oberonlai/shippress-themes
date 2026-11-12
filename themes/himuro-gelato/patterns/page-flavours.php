<?php
/**
 * Title: Page: Flavours
 * Slug: himuro-gelato/page-flavours
 * Categories: himuro-gelato
 * Keywords: page-flavours
 * Viewport Width: 1440
 * Description: Inner page: Flavours. Six pinned-viewer panels with index, spec box and sweetness meter.
 */
?>
<!-- wp:group {"className":"hg-head","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-head"><!-- wp:cover {"url":"<?php echo himuro_gelato_img( 'h01' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.35},"minHeight":62,"minHeightUnit":"vh","className":"hg-head__stage sp-parallax"} -->
<div class="wp-block-cover hg-head__stage sp-parallax" style="min-height:62vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_h01' ) ); ?>" src="<?php echo himuro_gelato_img( 'h01' ); ?>" style="object-position:50% 35%" data-object-fit="cover" data-object-position="50% 35%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"hg-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group hg-head__in"><!-- wp:heading {"level":1,"className":"hg-head__title"} -->
<h1 class="wp-block-heading hg-head__title"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_t' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-viewer hg-sec hg-fl-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-viewer hg-sec hg-fl-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:paragraph {"className":"hg-label"} -->
<p class="hg-label"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-lede sp-reveal sp-reveal--up"} -->
<p class="hg-lede sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-fl","layout":{"type":"default"}} -->
<div class="wp-block-group hg-fl"><!-- wp:group {"className":"hg-idx hg-fl__idx","layout":{"type":"default"}} -->
<div class="wp-block-group hg-idx hg-fl__idx"><!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><a href="#fl-1"><?php echo esc_html( himuro_gelato_t( 'fl_1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><a href="#fl-2"><?php echo esc_html( himuro_gelato_t( 'fl_2' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><a href="#fl-3"><?php echo esc_html( himuro_gelato_t( 'fl_3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><a href="#fl-4"><?php echo esc_html( himuro_gelato_t( 'fl_4' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><a href="#fl-5"><?php echo esc_html( himuro_gelato_t( 'fl_5' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><a href="#fl-6"><?php echo esc_html( himuro_gelato_t( 'fl_6' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-fl__list","layout":{"type":"default"}} -->
<div class="wp-block-group hg-fl__list"><!-- wp:group {"anchor":"fl-1","className":"hg-pan","layout":{"type":"default"}} -->
<div id="fl-1" class="wp-block-group hg-pan"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-pan__img hg-main sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full hg-pan__img hg-main sp-reveal sp-reveal--mask"><img src="<?php echo himuro_gelato_img( 'v3' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_v3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-pan__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan__txt"><!-- wp:paragraph {"className":"hg-pan__no"} -->
<p class="hg-pan__no">1 — 6</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hg-viewer__name"} -->
<h2 class="wp-block-heading hg-viewer__name"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-pan__body"} -->
<p class="hg-pan__body"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec"><!-- wp:paragraph {"className":"hg-spec__text"} -->
<p class="hg-spec__text"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_a1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec__cells"><!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_sweet' ) ); ?><br><span class="hg-meter"><span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_low' ) ); ?></span> <span class="hg-dots" aria-hidden="true">●●●○○</span> <span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_high' ) ); ?></span></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_texture' ) ); ?> · <?php echo esc_html( himuro_gelato_t( 'pg_fl_tex1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"fl-2","className":"hg-pan","layout":{"type":"default"}} -->
<div id="fl-2" class="wp-block-group hg-pan"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-pan__img hg-main sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full hg-pan__img hg-main sp-reveal sp-reveal--mask"><img src="<?php echo himuro_gelato_img( 'h02' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_h02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-pan__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan__txt"><!-- wp:paragraph {"className":"hg-pan__no"} -->
<p class="hg-pan__no">2 — 6</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hg-viewer__name"} -->
<h2 class="wp-block-heading hg-viewer__name"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-pan__body"} -->
<p class="hg-pan__body"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec"><!-- wp:paragraph {"className":"hg-spec__text"} -->
<p class="hg-spec__text"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_a2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec__cells"><!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_sweet' ) ); ?><br><span class="hg-meter"><span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_low' ) ); ?></span> <span class="hg-dots" aria-hidden="true">●●○○○</span> <span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_high' ) ); ?></span></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_texture' ) ); ?> · <?php echo esc_html( himuro_gelato_t( 'pg_fl_tex2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"fl-3","className":"hg-pan","layout":{"type":"default"}} -->
<div id="fl-3" class="wp-block-group hg-pan"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-pan__img hg-main sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full hg-pan__img hg-main sp-reveal sp-reveal--mask"><img src="<?php echo himuro_gelato_img( 'g1' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_g1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-pan__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan__txt"><!-- wp:paragraph {"className":"hg-pan__no"} -->
<p class="hg-pan__no">3 — 6</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hg-viewer__name"} -->
<h2 class="wp-block-heading hg-viewer__name"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_h3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-pan__body"} -->
<p class="hg-pan__body"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec"><!-- wp:paragraph {"className":"hg-spec__text"} -->
<p class="hg-spec__text"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_a3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec__cells"><!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_sweet' ) ); ?><br><span class="hg-meter"><span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_low' ) ); ?></span> <span class="hg-dots" aria-hidden="true">●●○○○</span> <span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_high' ) ); ?></span></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_texture' ) ); ?> · <?php echo esc_html( himuro_gelato_t( 'pg_fl_tex3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"fl-4","className":"hg-pan","layout":{"type":"default"}} -->
<div id="fl-4" class="wp-block-group hg-pan"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-pan__img hg-main sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full hg-pan__img hg-main sp-reveal sp-reveal--mask"><img src="<?php echo himuro_gelato_img( 'g2' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_g2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-pan__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan__txt"><!-- wp:paragraph {"className":"hg-pan__no"} -->
<p class="hg-pan__no">4 — 6</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hg-viewer__name"} -->
<h2 class="wp-block-heading hg-viewer__name"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_h4' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-pan__body"} -->
<p class="hg-pan__body"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_p4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec"><!-- wp:paragraph {"className":"hg-spec__text"} -->
<p class="hg-spec__text"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_a4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec__cells"><!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_sweet' ) ); ?><br><span class="hg-meter"><span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_low' ) ); ?></span> <span class="hg-dots" aria-hidden="true">●●●●○</span> <span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_high' ) ); ?></span></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_texture' ) ); ?> · <?php echo esc_html( himuro_gelato_t( 'pg_fl_tex4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"fl-5","className":"hg-pan","layout":{"type":"default"}} -->
<div id="fl-5" class="wp-block-group hg-pan"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-pan__img hg-main sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full hg-pan__img hg-main sp-reveal sp-reveal--mask"><img src="<?php echo himuro_gelato_img( 'v2' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_v2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-pan__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan__txt"><!-- wp:paragraph {"className":"hg-pan__no"} -->
<p class="hg-pan__no">5 — 6</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hg-viewer__name"} -->
<h2 class="wp-block-heading hg-viewer__name"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_h5' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-pan__body"} -->
<p class="hg-pan__body"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_p5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec"><!-- wp:paragraph {"className":"hg-spec__text"} -->
<p class="hg-spec__text"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_a5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec__cells"><!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_sweet' ) ); ?><br><span class="hg-meter"><span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_low' ) ); ?></span> <span class="hg-dots" aria-hidden="true">●●○○○</span> <span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_high' ) ); ?></span></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_texture' ) ); ?> · <?php echo esc_html( himuro_gelato_t( 'pg_fl_tex5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"fl-6","className":"hg-pan","layout":{"type":"default"}} -->
<div id="fl-6" class="wp-block-group hg-pan"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-pan__img hg-main sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full hg-pan__img hg-main sp-reveal sp-reveal--mask"><img src="<?php echo himuro_gelato_img( 'h03' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_h03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-pan__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan__txt"><!-- wp:paragraph {"className":"hg-pan__no"} -->
<p class="hg-pan__no">6 — 6</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hg-viewer__name"} -->
<h2 class="wp-block-heading hg-viewer__name"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_h6' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-pan__body"} -->
<p class="hg-pan__body"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_p6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec"><!-- wp:paragraph {"className":"hg-spec__text"} -->
<p class="hg-spec__text"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_a6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec__cells"><!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_sweet' ) ); ?><br><span class="hg-meter"><span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_low' ) ); ?></span> <span class="hg-dots" aria-hidden="true">●●○○○</span> <span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_high' ) ); ?></span></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_texture' ) ); ?> · <?php echo esc_html( himuro_gelato_t( 'pg_fl_tex6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-prose hg-sec hg-prose--tail","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-prose hg-sec hg-prose--tail"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:group {"className":"hg-prose__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hg-prose__body sp-stagger"><!-- wp:heading {"level":2,"className":"hg-prose__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hg-prose__h sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_h7' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_flavours_p7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></section>
<!-- /wp:group -->
