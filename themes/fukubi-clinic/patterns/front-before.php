<?php
/**
 * Title: Home: approach
 * Slug: fukubi-clinic/front-before
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Text with two paragraphs and a button pair beside a 4:5 photograph with a static halo disc behind its lower-left corner.
 */
?>
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--white","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--white"><!-- wp:columns {"className":"fc-in fc-before","style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
<div class="wp-block-columns fc-in fc-before"><!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><?php echo fc_label( fc_t( 'bef_label' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- wp:heading {"className":"fc-h2"} -->
<h2 class="wp-block-heading fc-h2"><?php echo esc_html( fc_t( 'bef_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'bef_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'bef_p2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"fc-btns fc-btns--pair"} -->
<div class="wp-block-buttons fc-btns fc-btns--pair"><!-- wp:button {"className":"fc-btn fc-btn--line"} -->
<div class="wp-block-button fc-btn fc-btn--line"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( fc_t( 'bef_btn1' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"fc-btn fc-btn--line"} -->
<div class="wp-block-button fc-btn fc-btn--line"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/team/' ) ); ?>"><?php echo esc_html( fc_t( 'bef_btn2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --><!-- wp:column {"width":"42%","className":"fc-before__ph"} -->
<div class="wp-block-column fc-before__ph" style="flex-basis:42%"><!-- wp:html -->
<div class="fc-halo-s" aria-hidden="true"></div>
<!-- /wp:html --><?php echo fc_img( 'p06-listening.webp', fc_t( 'alt_p06' ), 'fc-ph fc-ph--45' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
