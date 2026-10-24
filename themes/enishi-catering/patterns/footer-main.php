<?php
/**
 * Title: Footer
 * Slug: enishi-catering/footer-main
 * Categories: enishi-catering
 * Description: Dark footer with the wordmark, address, hours and the menu.
 * Viewport Width: 1440
 */
$t = 'enishi_catering_t';
?>
<!-- wp:group {"align":"full","className":"enc-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull enc-foot"><!-- wp:group {"className":"enc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group enc-wrap"><!-- wp:group {"className":"enc-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group enc-foot__grid"><!-- wp:group {"className":"enc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group enc-foot__c"><!-- wp:paragraph {"className":"enc-foot__mark"} -->
<p class="enc-foot__mark"><?php echo esc_html( $t( 'logo' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-foot__p"} -->
<p class="enc-foot__p"><?php echo esc_html( $t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"enc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group enc-foot__c"><!-- wp:paragraph {"className":"enc-foot__l"} -->
<p class="enc-foot__l"><?php echo esc_html( $t( 'foot_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-foot__p"} -->
<p class="enc-foot__p"><?php echo wp_kses( $t( 'foot_addr' ), array( 'br' => array() ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"enc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group enc-foot__c"><!-- wp:paragraph {"className":"enc-foot__l"} -->
<p class="enc-foot__l"><?php echo esc_html( $t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-foot__p"} -->
<p class="enc-foot__p"><?php echo wp_kses( $t( 'foot_hours_t' ), array( 'br' => array() ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"enc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group enc-foot__c"><!-- wp:paragraph {"className":"enc-foot__l"} -->
<p class="enc-foot__l"><?php echo esc_html( $t( 'foot_pages' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","className":"enc-foot__nav","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"enc-foot__legal"} -->
<p class="enc-foot__legal"><?php echo esc_html( $t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
