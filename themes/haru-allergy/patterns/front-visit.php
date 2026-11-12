<?php
/**
 * Title: Home: review and visit
 * Slug: haru-allergy/front-visit
 * Categories: haru-allergy
 * Keywords: visit, hours, book
 * Viewport Width: 1440
 * Description: A heading, a paragraph about the 12-week review, the clinic details and a booking button beside a tall photo flush to the right viewport edge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ha-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ha-visit"><!-- wp:group {"className":"ha-visit__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ha-visit__text sp-stagger"><!-- wp:heading {"className":"ha-visit__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ha-visit__h sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'vi_h' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'vi_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-visit__info sp-reveal sp-reveal--up"} -->
<p class="ha-visit__info sp-reveal sp-reveal--up"><strong>Haru Allergy</strong><br><?php echo esc_html( haru_allergy_t( 'vi_addr' ) ); ?><br><?php echo esc_html( haru_allergy_t( 'vi_contact' ) ); ?><br><?php echo esc_html( haru_allergy_t( 'vi_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ha-visit__btns sp-reveal sp-reveal--up"} -->
<div class="wp-block-buttons ha-visit__btns sp-reveal sp-reveal--up"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( haru_allergy_t( 'vi_cta' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-fill ha-link-btn"} -->
<div class="wp-block-button is-style-fill ha-link-btn"><a class="wp-block-button__link wp-element-button" href="/fees/"><?php echo esc_html( haru_allergy_t( 'vi_fees' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-visit__photo"} -->
<figure class="wp-block-image size-full ha-visit__photo"><img src="<?php echo haru_allergy_img( 'p16-reception' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p16' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
