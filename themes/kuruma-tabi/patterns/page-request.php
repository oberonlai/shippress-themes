<?php
/**
 * Title: Page: request an itinerary
 * Slug: kuruma-tabi/page-request
 * Categories: kuruma-tabi
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact page: split head with a mail tab and a reply-hours bar, the contact slot with a mail link fallback and the deposit and hours notes.
 */
?>
<!-- wp:group {"tagName":"main","className":"kt-main","layout":{"type":"default"}} -->
<main class="wp-block-group kt-main"><!-- wp:group {"tagName":"section","align":"full","className":"kt-hero kt-hero--page kt-hero--foot","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-hero kt-hero--page kt-hero--foot"><!-- wp:group {"className":"kt-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__text"><!-- wp:heading {"level":1,"className":"kt-h1"} -->
<h1 class="wp-block-heading kt-h1"><span class="kt-w" style="--i:0"><?php echo esc_html( kuruma_tabi_t( 'rq2_h1' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-lede"} -->
<p class="kt-lede"><?php echo esc_html( kuruma_tabi_t( 'rq2_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'viewpoint-binoculars.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__tab","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__tab"><!-- wp:paragraph {"className":"kt-tab"} -->
<p class="kt-tab"><a href="mailto:plan@kurumatabi.example?subject=<?php echo rawurlencode( kuruma_tabi_t( 'mail_subject' ) ); ?>"><?php echo esc_html( kuruma_tabi_t( 'rq2_tab' ) ); ?> <span aria-hidden="true">→</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__bar","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__bar"><!-- wp:group {"className":"kt-bar","layout":{"type":"default"}} -->
<div class="wp-block-group kt-bar"><!-- wp:paragraph {"className":"kt-bar__label"} -->
<p class="kt-bar__label"><?php echo esc_html( kuruma_tabi_t( 'rq2_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kt-stops"><li class="kt-stop" style="--i:0"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'rq2_t1' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'rq2_p1' ) ); ?></span></li><li class="kt-stop" style="--i:1"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'rq2_t2' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'rq2_p2' ) ); ?></span></li><li class="kt-stop" style="--i:2"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'rq2_t3' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'rq2_p3' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-wrap--narrow-s","layout":{"type":"default"},"anchor":"request"} -->
<section id="request" class="wp-block-group alignfull kt-sec kt-wrap--narrow-s"><!-- wp:group {"className":"kt-wrap kt-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap kt-wrap--narrow"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'rq2_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'rq2_sub2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"kt-h3 kt-h3--s"} -->
<h3 class="wp-block-heading kt-h3 kt-h3--s"><?php echo esc_html( kuruma_tabi_t( 'rq2_1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-p kt-p--w"} -->
<p class="kt-p kt-p--w"><?php echo esc_html( kuruma_tabi_t( 'rq2_1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kt-form","layout":{"type":"default"}} -->
<div class="wp-block-group kt-form"><?php
ob_start(); ?>
<!-- wp:html -->
<p class="kt-mailto"><a class="wp-element-button kt-btn" href="mailto:plan@kurumatabi.example?subject=<?php echo rawurlencode( kuruma_tabi_t( 'mail_subject' ) ); ?>"><?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?></a></p>
<!-- /wp:html -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--pb","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-sec kt-sec--pb"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-two","layout":{"type":"default"}} -->
<div class="wp-block-group kt-two"><!-- wp:group {"className":"kt-story","layout":{"type":"default"}} -->
<div class="wp-block-group kt-story"><!-- wp:heading {"level":3,"className":"kt-h3 kt-h3--s"} -->
<h3 class="wp-block-heading kt-h3 kt-h3--s"><?php echo esc_html( kuruma_tabi_t( 'rq2_2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-story__q"} -->
<p class="kt-story__q"><?php echo esc_html( kuruma_tabi_t( 'rq2_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-story","layout":{"type":"default"}} -->
<div class="wp-block-group kt-story"><!-- wp:heading {"level":3,"className":"kt-h3 kt-h3--s"} -->
<h3 class="wp-block-heading kt-h3 kt-h3--s"><?php echo esc_html( kuruma_tabi_t( 'rq2_3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-story__q"} -->
<p class="kt-story__q"><?php echo esc_html( kuruma_tabi_t( 'rq2_3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
