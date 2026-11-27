<?php
/**
 * Title: Home: visit and hours
 * Slug: yukiki-shoes/front-visit
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: Hours list and address paragraph beside a 1.5:1 shopfront photograph.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"visit","align":"full","className":"ys-sec ys-sec--white","layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group alignfull ys-sec ys-sec--white">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:group {"className":"ys-head2","layout":{"type":"default"}} -->
<div class="wp-block-group ys-head2">
<!-- wp:heading {"level":2,"className":"ys-h2"} -->
<h2 class="wp-block-heading ys-h2"><?php echo esc_html( yukiki_shoes_t( 'vi_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-sub"} -->
<p class="ys-sub"><?php echo esc_html( yukiki_shoes_t( 'vi_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-visit","layout":{"type":"default"}} -->
<div class="wp-block-group ys-visit">
<!-- wp:group {"className":"ys-visit__l","layout":{"type":"default"}} -->
<div class="wp-block-group ys-visit__l">
<!-- wp:html -->
<ul class="ys-hours"><li><span><?php echo esc_html( yukiki_shoes_t( 'hr0_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr0_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr1_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr1_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr2_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr2_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr3_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr3_t' ) ); ?></span></li><li><span><?php echo esc_html( yukiki_shoes_t( 'hr4_d' ) ); ?></span><span class="ys-hours__v"><?php echo esc_html( yukiki_shoes_t( 'hr4_t' ) ); ?></span></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'vi_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-contact"} -->
<p class="ys-contact"><a href="mailto:hello@yukikishoes.example"><?php echo esc_html( yukiki_shoes_t( 'ft_mail' ) ); ?></a><br><a href="tel:+00215550148"><?php echo esc_html( yukiki_shoes_t( 'ft_phone' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-visit__r","layout":{"type":"default"}} -->
<div class="wp-block-group ys-visit__r">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ys-visit__img sp-reveal"} -->
<figure class="wp-block-image size-full ys-visit__img sp-reveal"><img src="<?php echo yukiki_shoes_img( 'v1.webp' ); ?>" alt="<?php echo esc_attr( yukiki_shoes_t( 'alt_v1' ) ); ?>" loading="lazy" decoding="async"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->