<?php
/**
 * Title: Home: contact-sheet hero
 * Slug: yukiki-shoes/front-hero
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: Split hero: a 4 x 3 contact sheet of abutting tiles on the left, the headline beside it on white, and a five-tick timeline foot.
 */
?>
<!-- wp:group {"align":"full","className":"ys-notice","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ys-notice">
<!-- wp:paragraph {"className":"ys-notice__t"} -->
<p class="ys-notice__t"><?php echo esc_html( yukiki_shoes_t( 'notice' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"hero","align":"full","className":"ys-hero","layout":{"type":"default"}} -->
<section id="hero" class="wp-block-group alignfull ys-hero">
<!-- wp:group {"className":"ys-hero__split","layout":{"type":"default"}} -->
<div class="wp-block-group ys-hero__split">
<!-- wp:html -->
<div class="ys-hero__photo"><div class="ys-sheet sp-stagger"><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="<?php echo esc_attr( yukiki_shoes_t( 'alt_h1' ) ); ?>" style="object-position:15% 50%;--z:1;transform-origin:50% 50%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:50% 50%;--z:1.7;transform-origin:50% 60%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:60% 50%;--z:2.6;transform-origin:55% 78%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:52% 50%;--z:3.8;transform-origin:50% 90%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h2.webp' ); ?>" alt="<?php echo esc_attr( yukiki_shoes_t( 'alt_h2' ) ); ?>" style="object-position:20% 50%;--z:1;transform-origin:50% 50%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h2.webp' ); ?>" alt="" style="object-position:70% 50%;--z:1.8;transform-origin:70% 40%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h2.webp' ); ?>" alt="" style="object-position:30% 50%;--z:2.4;transform-origin:30% 70%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h2.webp' ); ?>" alt="" style="object-position:80% 50%;--z:3;transform-origin:80% 80%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h3.webp' ); ?>" alt="<?php echo esc_attr( yukiki_shoes_t( 'alt_h3' ) ); ?>" style="object-position:30% 50%;--z:1;transform-origin:50% 50%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h3.webp' ); ?>" alt="" style="object-position:60% 50%;--z:1.6;transform-origin:40% 70%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h3.webp' ); ?>" alt="" style="object-position:90% 50%;--z:1.8;transform-origin:90% 30%" loading="eager" decoding="async"/></figure><figure class="ys-tile sp-reveal"><img src="<?php echo yukiki_shoes_img( 'h1.webp' ); ?>" alt="" style="object-position:90% 50%;--z:1;transform-origin:50% 50%" loading="eager" decoding="async"/></figure></div><div class="ys-peek" aria-hidden="true"><img src="<?php echo yukiki_shoes_img( 'n1.webp' ); ?>" alt="" loading="eager" decoding="async"/></div></div>
<!-- /wp:html -->
<!-- wp:group {"className":"ys-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group ys-hero__text">
<!-- wp:paragraph {"className":"ys-label"} -->
<p class="ys-label"><?php echo esc_html( yukiki_shoes_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"ys-h1"} -->
<h1 class="wp-block-heading ys-h1"><?php echo esc_html( yukiki_shoes_t( 'hero_h1a' ) ); ?><br><?php echo esc_html( yukiki_shoes_t( 'hero_h1b' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-lead"} -->
<p class="ys-lead"><?php echo esc_html( yukiki_shoes_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"ys-btns"} -->
<div class="wp-block-buttons ys-btns"><!-- wp:button {"className":"ys-btn"} -->
<div class="wp-block-button ys-btn"><a class="wp-block-button__link wp-element-button" href="/fittings/"><?php echo esc_html( yukiki_shoes_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"ys-addr"} -->
<p class="ys-addr"><?php echo esc_html( yukiki_shoes_t( 'hero_addr' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-timeline","layout":{"type":"default"}} -->
<div class="wp-block-group ys-timeline">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:html -->
<p class="ys-tl__cap"><em><?php echo esc_html( yukiki_shoes_t( 'cap_1' ) ); ?></em><em><?php echo esc_html( yukiki_shoes_t( 'cap_2' ) ); ?></em></p><ol class="ys-tl" aria-label="<?php echo esc_attr( yukiki_shoes_t( 'hero_label' ) ); ?>"><li class="is-active"><span class="ys-tl__dot"></span><span class="ys-tl__t"><?php echo esc_html( yukiki_shoes_t( 'st0_t' ) ); ?></span></li><li><span class="ys-tl__dot"></span><span class="ys-tl__t"><?php echo esc_html( yukiki_shoes_t( 'st1_t' ) ); ?></span></li><li><span class="ys-tl__dot"></span><span class="ys-tl__t"><?php echo esc_html( yukiki_shoes_t( 'st2_t' ) ); ?></span></li><li><span class="ys-tl__dot"></span><span class="ys-tl__t"><?php echo esc_html( yukiki_shoes_t( 'st3_t' ) ); ?></span></li><li><span class="ys-tl__dot"></span><span class="ys-tl__t"><?php echo esc_html( yukiki_shoes_t( 'st4_t' ) ); ?></span></li></ol>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->