<?php
/**
 * Title: Footer
 * Slug: kotoba-language/footer-main
 * Categories: kotoba-language
 * Description: Address, hours, menu and legal line.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"footer","className":"kl-foot","align":"full","layout":{"type":"default"}} -->
<footer class="wp-block-group alignfull kl-foot"><!-- wp:group {"className":"kl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap"><!-- wp:group {"className":"kl-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kl-foot__grid"><!-- wp:group {"className":"kl-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group kl-foot__c"><!-- wp:paragraph {"className":"kl-mark"} -->
<p class="kl-mark"><a href="/">Kotoba</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-foot__p"} -->
<p class="kl-foot__p"><?php echo esc_html( kotoba_language_t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group kl-foot__c"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'foot_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-foot__p"} -->
<p class="kl-foot__p">Scheepmakerspassage 14<br>3011 VH Rotterdam, Netherlands<br><?php echo wp_kses_post( kotoba_language_t( 'foot_phone' ) ); ?><br>hello@kotobalanguage.example</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group kl-foot__c"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-foot__p"} -->
<p class="kl-foot__p"><?php echo wp_kses_post( kotoba_language_t( 'foot_hours_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","className":"kl-foot__nav","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kl-foot__legal"} -->
<p class="kl-foot__legal"><?php echo esc_html( kotoba_language_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->