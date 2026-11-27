<?php
/**
 * Title: Page: contact
 * Slug: yukiki-shoes/page-contact
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: Header, the write-to-us text with the dynamic contact form slot (mailto button fallback), hours, phone and the shopfront photograph.
 */
?>
<!-- wp:group {"className":"ys-phead","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ys-phead">
<!-- wp:html -->
<nav class="ys-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( yukiki_shoes_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( yukiki_shoes_t( 'ct_h1' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"ys-phead__h"} -->
<h1 class="wp-block-heading ys-phead__h"><?php echo esc_html( yukiki_shoes_t( 'ct_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-phead__lead"} -->
<p class="ys-phead__lead"><?php echo esc_html( yukiki_shoes_t( 'ct_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"write","align":"full","className":"ys-sec ys-sec--white","layout":{"type":"default"}} -->
<section id="write" class="wp-block-group alignfull ys-sec ys-sec--white">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:group {"className":"ys-split","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split">
<!-- wp:group {"className":"ys-split__l","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split__l">
<!-- wp:heading {"level":2,"className":"ys-h2 ys-h2--l"} -->
<h2 class="wp-block-heading ys-h2 ys-h2--l"><?php echo esc_html( yukiki_shoes_t( 'ct_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-split__r","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split__r">
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'ct_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'ct_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'ct_s1_p3' ) ); ?></p>
<!-- /wp:paragraph -->
<?php
ob_start(); ?>
<div class="wp-block-buttons ys-btns"><div class="wp-block-button ys-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@yukikishoes.example?subject=<?php echo rawurlencode( yukiki_shoes_t( 'contact_subject' ) ); ?>"><?php echo esc_html( yukiki_shoes_t( 'contact_email' ) ); ?></a></div></div>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
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
<figure class="wp-block-image size-full ys-split2__img sp-reveal"><img src="<?php echo yukiki_shoes_img( 'v1.webp' ); ?>" alt="<?php echo esc_attr( yukiki_shoes_t( 'alt_v1' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-split2__t","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split2__t">
<!-- wp:heading {"level":2,"className":"ys-h2 ys-h2--l"} -->
<h2 class="wp-block-heading ys-h2 ys-h2--l"><?php echo esc_html( yukiki_shoes_t( 'ct_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<ul class="ys-hours"><li><span><?php echo esc_html( yukiki_shoes_t( 'hr0_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr0_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr1_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr1_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr2_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr2_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr3_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr3_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr4_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr4_t' ) ); ?></span></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'ct_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'ct_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'ct_s2_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
