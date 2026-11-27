<?php
/**
 * Title: Home: open an account
 * Slug: hakuji-laboratory/front-account
 * Categories: hakuji-laboratory
 * Viewport Width: 1440
 * Description: White sheet with a 40px top radius: photo with a top-right radius, the closing headline, the one repeated button and a slab strip.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"account","align":"full","className":"hk-sheet hk-sheet--t hk-account","layout":{"type":"default"}} -->
<section id="account" class="wp-block-group alignfull hk-sheet hk-sheet--t hk-account">
<!-- wp:group {"className":"hk-inner hk-account__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner hk-account__grid">
<!-- wp:group {"className":"hk-account__photo","layout":{"type":"default"}} -->
<div class="wp-block-group hk-account__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-account__img"} -->
<figure class="wp-block-image size-full hk-account__img"><img src="<?php echo hakuji_laboratory_img( 'img-13.webp' ); ?>" alt="<?php echo hakuji_laboratory_a( 'alt_close' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-account__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-account__text sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"hk-account__h"} -->
<h2 class="wp-block-heading hk-account__h"><?php echo esc_html( hakuji_laboratory_t( 'close_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-body"} -->
<p class="hk-body"><?php echo esc_html( hakuji_laboratory_t( 'close_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hk-account__row","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hk-account__row">
<!-- wp:buttons {"className":"hk-btn hk-cta"} -->
<div class="wp-block-buttons hk-btn hk-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( hakuji_laboratory_t( 'btn_open' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"hk-account__mail"} -->
<p class="hk-account__mail"><?php echo esc_html( hakuji_laboratory_t( 'close_mail_pre' ) ); ?> <a href="mailto:<?php echo esc_html( hakuji_laboratory_t( 'email' ) ); ?>"><?php echo esc_html( hakuji_laboratory_t( 'email' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-strip","layout":{"type":"default"}} -->
<div class="wp-block-group hk-strip">
<!-- wp:paragraph {"className":"hk-strip__t"} -->
<p class="hk-strip__t"><?php echo esc_html( hakuji_laboratory_t( 'close_strip' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
