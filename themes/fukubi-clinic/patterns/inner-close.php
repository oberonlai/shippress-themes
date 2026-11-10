<?php
/**
 * Title: Inner page: booking close
 * Slug: fukubi-clinic/inner-close
 * Categories: fukubi-clinic
 * Keywords: clinic, booking, call to action
 * Viewport Width: 1440
 * Description: Rounded wash strip that closes an inner page: a short booking line, the phone number and a booking button.
 */
?>
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--white fc-sec--panel","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--white fc-sec--panel"><!-- wp:group {"className":"fc-panel fc-iclose","layout":{"type":"default"}} -->
<div class="wp-block-group fc-panel fc-iclose"><!-- wp:group {"className":"fc-iclose__txt","layout":{"type":"default"}} -->
<div class="wp-block-group fc-iclose__txt"><!-- wp:heading {"className":"fc-h2"} -->
<h2 class="wp-block-heading fc-h2"><?php echo esc_html( fc_t( 'cl_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'ic_p' ) ); ?> <a href="tel:+16045550148"><?php echo esc_html( fc_t( 'phone' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:buttons {"className":"fc-btns"} -->
<div class="wp-block-buttons fc-btns"><!-- wp:button {"className":"fc-btn fc-btn--point"} -->
<div class="wp-block-button fc-btn fc-btn--point"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( fc_t( 'cl_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
