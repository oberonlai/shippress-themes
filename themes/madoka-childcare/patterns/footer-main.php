<?php
/**
 * Title: Footer
 * Slug: madoka-childcare/footer-main
 * Categories: madoka-childcare
 * Description: Light card footer with a torn top edge: address, hours, the rooms and the menu.
 * Viewport Width: 1440
 */
$t = 'madoka_childcare_t';
?>
<!-- wp:group {"tagName":"div","className":"mc-foot mc-torn-top","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mc-foot mc-torn-top"><!-- wp:group {"className":"mc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mc-wrap"><!-- wp:group {"className":"mc-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mc-foot__grid"><!-- wp:group {"className":"mc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group mc-foot__c"><!-- wp:paragraph {"className":"mc-foot__mark"} -->
<p class="mc-foot__mark"><span><?php echo esc_html( $t( 'logo_a' ) ); ?></span> <span><?php echo esc_html( $t( 'logo_b' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-foot__p"} -->
<p class="mc-foot__p"><?php echo esc_html( $t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group mc-foot__c"><!-- wp:paragraph {"className":"mc-foot__l"} -->
<p class="mc-foot__l"><?php echo esc_html( $t( 'foot_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-foot__p"} -->
<p class="mc-foot__p"><?php echo wp_kses( $t( 'foot_addr' ), array( 'br' => array() ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group mc-foot__c"><!-- wp:paragraph {"className":"mc-foot__l"} -->
<p class="mc-foot__l"><?php echo esc_html( $t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-foot__p"} -->
<p class="mc-foot__p"><?php echo wp_kses( $t( 'foot_hours_t' ), array( 'br' => array() ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group mc-foot__c"><!-- wp:paragraph {"className":"mc-foot__l"} -->
<p class="mc-foot__l"><?php echo esc_html( $t( 'foot_rooms' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-foot__p"} -->
<p class="mc-foot__p"><?php echo wp_kses( $t( 'foot_rooms_t' ), array( 'br' => array() ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","className":"mc-foot__nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:paragraph {"className":"mc-foot__legal"} -->
<p class="mc-foot__legal"><?php echo esc_html( $t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
