<?php
/**
 * Title: Page: Tubs and set-aside
 * Slug: himuro-gelato/page-tubs
 * Categories: himuro-gelato
 * Keywords: page-tubs
 * Viewport Width: 1440
 * Description: Inner page: Tubs and set-aside. Three tub panels, the price list and the reservation form slot.
 */
?>
<!-- wp:group {"className":"hg-head","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-head"><!-- wp:cover {"url":"<?php echo himuro_gelato_img( 'h03' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.4},"minHeight":62,"minHeightUnit":"vh","className":"hg-head__stage sp-parallax"} -->
<div class="wp-block-cover hg-head__stage sp-parallax" style="min-height:62vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_h03' ) ); ?>" src="<?php echo himuro_gelato_img( 'h03' ); ?>" style="object-position:50% 40%" data-object-fit="cover" data-object-position="50% 40%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"hg-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group hg-head__in"><!-- wp:heading {"level":1,"className":"hg-head__title"} -->
<h1 class="wp-block-heading hg-head__title"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_t' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-viewer hg-sec hg-fl-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-viewer hg-sec hg-fl-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:paragraph {"className":"hg-label"} -->
<p class="hg-label"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-lede sp-reveal sp-reveal--up"} -->
<p class="hg-lede sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-prose__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hg-prose__body sp-stagger"><!-- wp:heading {"level":2,"className":"hg-prose__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hg-prose__h sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-fl__list hg-fl__list--solo","layout":{"type":"default"}} -->
<div class="wp-block-group hg-fl__list hg-fl__list--solo"><!-- wp:group {"className":"hg-pan hg-pan--tub","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan hg-pan--tub"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-pan__img hg-main sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full hg-pan__img hg-main sp-reveal sp-reveal--mask"><img src="<?php echo himuro_gelato_img( 'v1' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_v1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-pan__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan__txt"><!-- wp:paragraph {"className":"hg-pan__no"} -->
<p class="hg-pan__no">1 — 3</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hg-viewer__name"} -->
<h3 class="wp-block-heading hg-viewer__name"><?php echo esc_html( himuro_gelato_t( 'pl_n4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-viewer__sub"} -->
<p class="hg-viewer__sub"><?php echo esc_html( himuro_gelato_t( 'pl_d4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-viewer__price"} -->
<p class="hg-viewer__price"><?php echo esc_html( himuro_gelato_t( 'pl_p4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec"><!-- wp:paragraph {"className":"hg-spec__text"} -->
<p class="hg-spec__text"><?php echo esc_html( himuro_gelato_t( 'pg_tb_s1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec__cells"><!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'pg_tb_c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'pg_tb_keep' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hg-btn"} -->
<div class="wp-block-button hg-btn"><a class="wp-block-button__link wp-element-button" href="#reserve"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-pan hg-pan--tub","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan hg-pan--tub"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-pan__img hg-main sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full hg-pan__img hg-main sp-reveal sp-reveal--mask"><img src="<?php echo himuro_gelato_img( 'b2' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_b2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-pan__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan__txt"><!-- wp:paragraph {"className":"hg-pan__no"} -->
<p class="hg-pan__no">2 — 3</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hg-viewer__name"} -->
<h3 class="wp-block-heading hg-viewer__name"><?php echo esc_html( himuro_gelato_t( 'pl_n5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-viewer__sub"} -->
<p class="hg-viewer__sub"><?php echo esc_html( himuro_gelato_t( 'pl_d5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-viewer__price"} -->
<p class="hg-viewer__price"><?php echo esc_html( himuro_gelato_t( 'pl_p5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec"><!-- wp:paragraph {"className":"hg-spec__text"} -->
<p class="hg-spec__text"><?php echo esc_html( himuro_gelato_t( 'pg_tb_s2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec__cells"><!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'pg_tb_c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'pg_tb_keep' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hg-btn"} -->
<div class="wp-block-button hg-btn"><a class="wp-block-button__link wp-element-button" href="#reserve"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-pan hg-pan--tub","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan hg-pan--tub"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-pan__img hg-main sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full hg-pan__img hg-main sp-reveal sp-reveal--mask"><img src="<?php echo himuro_gelato_img( 'p04' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-pan__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-pan__txt"><!-- wp:paragraph {"className":"hg-pan__no"} -->
<p class="hg-pan__no">3 — 3</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hg-viewer__name"} -->
<h3 class="wp-block-heading hg-viewer__name"><?php echo esc_html( himuro_gelato_t( 'pl_n6' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-viewer__sub"} -->
<p class="hg-viewer__sub"><?php echo esc_html( himuro_gelato_t( 'pl_d6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-viewer__price"} -->
<p class="hg-viewer__price"><?php echo esc_html( himuro_gelato_t( 'pl_p6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec"><!-- wp:paragraph {"className":"hg-spec__text"} -->
<p class="hg-spec__text"><?php echo esc_html( himuro_gelato_t( 'pg_tb_s3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec__cells"><!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'pg_tb_c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'pg_tb_keep3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hg-btn"} -->
<div class="wp-block-button hg-btn"><a class="wp-block-button__link wp-element-button" href="#reserve"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-prices hg-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-prices hg-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:paragraph {"className":"hg-label"} -->
<p class="hg-label"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_label2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-prose__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hg-prose__body sp-stagger"><!-- wp:heading {"level":2,"className":"hg-prose__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hg-prose__h sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"hasFixedLayout":true,"className":"hg-pl"} -->
<figure class="wp-block-table hg-pl"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( himuro_gelato_t( 'pl_h1' ) ); ?></th><th><?php echo esc_html( himuro_gelato_t( 'pl_h2' ) ); ?></th><th class="hg-pl__p"><?php echo esc_html( himuro_gelato_t( 'pl_h3' ) ); ?></th></tr></thead><tbody><tr><td class="hg-pl__n"><?php echo esc_html( himuro_gelato_t( 'pl_n1' ) ); ?></td><td class="hg-pl__d"><?php echo esc_html( himuro_gelato_t( 'pl_d1' ) ); ?></td><td class="hg-pl__p"><?php echo esc_html( himuro_gelato_t( 'pl_p1' ) ); ?></td></tr><tr><td class="hg-pl__n"><?php echo esc_html( himuro_gelato_t( 'pl_n2' ) ); ?></td><td class="hg-pl__d"><?php echo esc_html( himuro_gelato_t( 'pl_d2' ) ); ?></td><td class="hg-pl__p"><?php echo esc_html( himuro_gelato_t( 'pl_p2' ) ); ?></td></tr><tr><td class="hg-pl__n"><?php echo esc_html( himuro_gelato_t( 'pl_n3' ) ); ?></td><td class="hg-pl__d"><?php echo esc_html( himuro_gelato_t( 'pl_d3' ) ); ?></td><td class="hg-pl__p"><?php echo esc_html( himuro_gelato_t( 'pl_p3' ) ); ?></td></tr><tr><td class="hg-pl__n"><?php echo esc_html( himuro_gelato_t( 'pl_n4' ) ); ?></td><td class="hg-pl__d"><?php echo esc_html( himuro_gelato_t( 'pl_d4' ) ); ?></td><td class="hg-pl__p"><?php echo esc_html( himuro_gelato_t( 'pl_p4' ) ); ?></td></tr><tr><td class="hg-pl__n"><?php echo esc_html( himuro_gelato_t( 'pl_n5' ) ); ?></td><td class="hg-pl__d"><?php echo esc_html( himuro_gelato_t( 'pl_d5' ) ); ?></td><td class="hg-pl__p"><?php echo esc_html( himuro_gelato_t( 'pl_p5' ) ); ?></td></tr><tr><td class="hg-pl__n"><?php echo esc_html( himuro_gelato_t( 'pl_n6' ) ); ?></td><td class="hg-pl__d"><?php echo esc_html( himuro_gelato_t( 'pl_d6' ) ); ?></td><td class="hg-pl__p"><?php echo esc_html( himuro_gelato_t( 'pl_p6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-prose hg-sec hg-prose--tail","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-prose hg-sec hg-prose--tail"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:group {"anchor":"reserve","className":"hg-reserve","layout":{"type":"default"}} -->
<div id="reserve" class="wp-block-group hg-reserve"><!-- wp:group {"className":"hg-prose__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hg-prose__body sp-stagger"><!-- wp:heading {"level":2,"className":"hg-prose__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hg-prose__h sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_h3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-form hg-prose__body","layout":{"type":"default"}} -->
<div class="wp-block-group hg-form hg-prose__body">
<?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hg-btn"} -->
<div class="wp-block-button hg-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@himurogelato.example?subject=<?php echo rawurlencode( himuro_gelato_t( 'tb_subject' ) ); ?>"><?php echo esc_html( himuro_gelato_t( 'tb_mail' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$hg_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $hg_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-prose__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hg-prose__body sp-stagger"><!-- wp:heading {"level":2,"className":"hg-prose__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hg-prose__h sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_h4' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_p4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></section>
<!-- /wp:group -->
