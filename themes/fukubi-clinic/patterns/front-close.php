<?php
/**
 * Title: Home: booking close
 * Slug: fukubi-clinic/front-close
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Wash panel with the booking heading, address, phone and two buttons at the left, the full week card at the right.
 */
?>
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--white fc-sec--panel","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--white fc-sec--panel"><!-- wp:group {"className":"fc-panel fc-close","layout":{"type":"default"}} -->
<div class="wp-block-group fc-panel fc-close"><!-- wp:columns {"className":"fc-closecols","style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
<div class="wp-block-columns fc-closecols"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"className":"fc-h2"} -->
<h2 class="wp-block-heading fc-h2"><?php echo esc_html( fc_t( 'cl_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'cl_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"fc-btns fc-btns--pair"} -->
<div class="wp-block-buttons fc-btns fc-btns--pair"><!-- wp:button {"className":"fc-btn fc-btn--point"} -->
<div class="wp-block-button fc-btn fc-btn--point"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( fc_t( 'cl_btn' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"fc-btn"} -->
<div class="wp-block-button fc-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( fc_t( 'cl_dir_url' ) ); ?>"><?php echo esc_html( fc_t( 'cl_dir' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><?php echo fc_week_card( 'wide' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
