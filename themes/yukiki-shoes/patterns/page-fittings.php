<?php
/**
 * Title: Page: fittings
 * Slug: yukiki-shoes/page-fittings
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact-sheet header (4 x 2), the five-step fitting timeline, what to bring and the booking form slot with mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ys-hero ys-hero--s","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ys-hero ys-hero--s">
<!-- wp:group {"className":"ys-hero__split ys-hero__split--s","layout":{"type":"default"}} -->
<div class="wp-block-group ys-hero__split ys-hero__split--s">
<!-- wp:html -->
<div class="ys-hero__photo"><div class="ys-sheet ys-sheet--8 sp-stagger"><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="<?php echo esc_attr( yukiki_shoes_t( 'alt_h1' ) ); ?>" style="object-position:15% 50%;--z:1;transform-origin:50% 50%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:50% 50%;--z:1.7;transform-origin:50% 60%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:60% 50%;--z:2.6;transform-origin:55% 78%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:52% 50%;--z:3.8;transform-origin:50% 90%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:30% 62%;--z:1.3;transform-origin:30% 62%" loading="lazy" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:72% 40%;--z:1.5;transform-origin:72% 40%" loading="lazy" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:45% 68%;--z:2.2;transform-origin:45% 68%" loading="lazy" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:85% 50%;--z:1.2;transform-origin:85% 50%" loading="lazy" decoding="async"/></figure></div></div>
<!-- /wp:html -->
<!-- wp:group {"className":"ys-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group ys-hero__text">
<!-- wp:paragraph {"className":"ys-label"} -->
<p class="ys-label"><?php echo esc_html( yukiki_shoes_t( 'fi_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"ys-h1"} -->
<h1 class="wp-block-heading ys-h1"><?php echo esc_html( yukiki_shoes_t( 'fi_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-lead"} -->
<p class="ys-lead"><?php echo esc_html( yukiki_shoes_t( 'fi_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"ys-btns"} -->
<div class="wp-block-buttons ys-btns"><!-- wp:button {"className":"ys-btn"} -->
<div class="wp-block-button ys-btn"><a class="wp-block-button__link wp-element-button" href="#book"><?php echo esc_html( yukiki_shoes_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ys-sec ys-sec--white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ys-sec ys-sec--white">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:group {"className":"ys-head2","layout":{"type":"default"}} -->
<div class="wp-block-group ys-head2">
<!-- wp:heading {"level":2,"className":"ys-h2"} -->
<h2 class="wp-block-heading ys-h2"><?php echo esc_html( yukiki_shoes_t( 'fi_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-sub"} -->
<p class="ys-sub"><?php echo esc_html( yukiki_shoes_t( 'fi_s1_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ol class="ys-steps sp-stagger"><li class="sp-reveal sp-reveal--up"><span class="ys-step__dot"></span><span class="ys-step__time"><?php echo esc_html( yukiki_shoes_t( 'stm0' ) ); ?></span><h3><?php echo esc_html( yukiki_shoes_t( 'st0_n' ) ); ?></h3><p><?php echo esc_html( yukiki_shoes_t( 'sd0' ) ); ?></p></li><li class="sp-reveal sp-reveal--up"><span class="ys-step__dot"></span><span class="ys-step__time"><?php echo esc_html( yukiki_shoes_t( 'stm1' ) ); ?></span><h3><?php echo esc_html( yukiki_shoes_t( 'st1_n' ) ); ?></h3><p><?php echo esc_html( yukiki_shoes_t( 'sd1' ) ); ?></p></li><li class="sp-reveal sp-reveal--up"><span class="ys-step__dot"></span><span class="ys-step__time"><?php echo esc_html( yukiki_shoes_t( 'stm2' ) ); ?></span><h3><?php echo esc_html( yukiki_shoes_t( 'st2_n' ) ); ?></h3><p><?php echo esc_html( yukiki_shoes_t( 'sd2' ) ); ?></p></li><li class="sp-reveal sp-reveal--up"><span class="ys-step__dot"></span><span class="ys-step__time"><?php echo esc_html( yukiki_shoes_t( 'stm3' ) ); ?></span><h3><?php echo esc_html( yukiki_shoes_t( 'st3_n' ) ); ?></h3><p><?php echo esc_html( yukiki_shoes_t( 'sd3' ) ); ?></p></li><li class="sp-reveal sp-reveal--up"><span class="ys-step__dot"></span><span class="ys-step__time"><?php echo esc_html( yukiki_shoes_t( 'stm4' ) ); ?></span><h3><?php echo esc_html( yukiki_shoes_t( 'st4_n' ) ); ?></h3><p><?php echo esc_html( yukiki_shoes_t( 'sd4' ) ); ?></p></li></ol>
<!-- /wp:html -->
<!-- wp:group {"className":"ys-after","layout":{"type":"default"}} -->
<div class="wp-block-group ys-after">
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'fi_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'fi_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'fi_s1_p3' ) ); ?></p>
<!-- /wp:paragraph -->
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
<!-- wp:group {"className":"ys-split2","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split2">
<!-- wp:group {"className":"ys-split2__t","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split2__t">
<!-- wp:heading {"level":2,"className":"ys-h2 ys-h2--l"} -->
<h2 class="wp-block-heading ys-h2 ys-h2--l"><?php echo esc_html( yukiki_shoes_t( 'fi_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'fi_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'fi_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-split2__i","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split2__i">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ys-split2__img sp-reveal"} -->
<figure class="wp-block-image size-full ys-split2__img sp-reveal"><img src="<?php echo yukiki_shoes_img( 'f3.webp' ); ?>" alt="<?php echo esc_attr( yukiki_shoes_t( 'alt_f3' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"book","align":"full","className":"ys-sec ys-sec--white","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull ys-sec ys-sec--white">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:group {"className":"ys-split","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split">
<!-- wp:group {"className":"ys-split__l","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split__l">
<!-- wp:heading {"level":2,"className":"ys-h2 ys-h2--l"} -->
<h2 class="wp-block-heading ys-h2 ys-h2--l"><?php echo esc_html( yukiki_shoes_t( 'fi_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-split__r","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split__r">
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'fi_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'fi_s3_p2' ) ); ?></p>
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
