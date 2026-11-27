<?php
/**
 * Title: Page: visit
 * Slug: yukiki-shoes/page-visit
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: Parallax shelf photograph header, the week line (Tuesday to Sunday ticks), hours, address, transit and access.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ys-sec ys-sec--bleed","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ys-sec ys-sec--bleed">
<!-- wp:cover {"url":"<?php echo yukiki_shoes_img( 'p1.webp' ); ?>","dimRatio":0,"minHeight":440,"minHeightUnit":"px","focalPoint":{"x":0.5,"y":0.6},"contentPosition":"center center","isDark":false,"className":"ys-shelf ys-vcover sp-parallax","style":{"color":{}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light ys-shelf ys-vcover sp-parallax" style="min-height:440px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( yukiki_shoes_t( 'alt_p1' ) ); ?>" src="<?php echo yukiki_shoes_img( 'p1.webp' ); ?>" style="object-position:50% 60%" data-object-fit="cover" data-object-position="50% 60%"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"ys-shelf__box ys-vbox","layout":{"type":"default"}} -->
<div class="wp-block-group ys-shelf__box ys-vbox">
<!-- wp:html -->
<nav class="ys-crumb ys-crumb--light" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( yukiki_shoes_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( yukiki_shoes_t( 'vi_h1' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"ys-phead__h ys-phead__h--light"} -->
<h1 class="wp-block-heading ys-phead__h ys-phead__h--light"><?php echo esc_html( yukiki_shoes_t( 'vi_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-vlead"} -->
<p class="ys-vlead"><?php echo esc_html( yukiki_shoes_t( 'vi_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ys-sec ys-sec--white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ys-sec ys-sec--white">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:group {"className":"ys-head2","layout":{"type":"default"}} -->
<div class="wp-block-group ys-head2">
<!-- wp:heading {"level":2,"className":"ys-h2"} -->
<h2 class="wp-block-heading ys-h2"><?php echo esc_html( yukiki_shoes_t( 'vw_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-sub"} -->
<p class="ys-sub"><?php echo esc_html( yukiki_shoes_t( 'vw_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ol class="ys-tl ys-tl--week" aria-label="<?php echo esc_attr( yukiki_shoes_t( 'vw_h' ) ); ?>"><li class="is-active"><span class="ys-tl__dot"></span><span class="ys-tl__t"><b><?php echo esc_html( yukiki_shoes_t( 'vw0_d' ) ); ?></b> <span><?php echo esc_html( yukiki_shoes_t( 'vw0_t' ) ); ?></span></span></li><li><span class="ys-tl__dot"></span><span class="ys-tl__t"><b><?php echo esc_html( yukiki_shoes_t( 'vw1_d' ) ); ?></b> <span><?php echo esc_html( yukiki_shoes_t( 'vw1_t' ) ); ?></span></span></li><li><span class="ys-tl__dot"></span><span class="ys-tl__t"><b><?php echo esc_html( yukiki_shoes_t( 'vw2_d' ) ); ?></b> <span><?php echo esc_html( yukiki_shoes_t( 'vw2_t' ) ); ?></span></span></li><li><span class="ys-tl__dot"></span><span class="ys-tl__t"><b><?php echo esc_html( yukiki_shoes_t( 'vw3_d' ) ); ?></b> <span><?php echo esc_html( yukiki_shoes_t( 'vw3_t' ) ); ?></span></span></li><li><span class="ys-tl__dot"></span><span class="ys-tl__t"><b><?php echo esc_html( yukiki_shoes_t( 'vw4_d' ) ); ?></b> <span><?php echo esc_html( yukiki_shoes_t( 'vw4_t' ) ); ?></span></span></li><li><span class="ys-tl__dot"></span><span class="ys-tl__t"><b><?php echo esc_html( yukiki_shoes_t( 'vw5_d' ) ); ?></b> <span><?php echo esc_html( yukiki_shoes_t( 'vw5_t' ) ); ?></span></span></li></ol>
<!-- /wp:html -->
<!-- wp:group {"className":"ys-split","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split">
<!-- wp:group {"className":"ys-split__l","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split__l">
<!-- wp:heading {"level":2,"className":"ys-h2 ys-h2--l"} -->
<h2 class="wp-block-heading ys-h2 ys-h2--l"><?php echo esc_html( yukiki_shoes_t( 'vi_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<ul class="ys-hours"><li><span><?php echo esc_html( yukiki_shoes_t( 'hr0_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr0_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr1_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr1_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr2_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr2_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr3_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr3_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr4_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr4_t' ) ); ?></span></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-split__r","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split__r">
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'vi_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'vi_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'vi_s1_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ys-sec ys-sec--band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ys-sec ys-sec--band">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:group {"className":"ys-split2 ys-split2--flip","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split2 ys-split2--flip">
<!-- wp:group {"className":"ys-split2__i","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split2__i">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ys-split2__img sp-reveal"} -->
<figure class="wp-block-image size-full ys-split2__img sp-reveal"><img src="<?php echo yukiki_shoes_img( 'v1.webp' ); ?>" alt="<?php echo esc_attr( yukiki_shoes_t( 'alt_v1' ) ); ?>" loading="lazy" decoding="async"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-split2__t","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split2__t">
<!-- wp:heading {"level":2,"className":"ys-h2 ys-h2--l"} -->
<h2 class="wp-block-heading ys-h2 ys-h2--l"><?php echo esc_html( yukiki_shoes_t( 'vi_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'vi_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'vi_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'vi_s2_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
