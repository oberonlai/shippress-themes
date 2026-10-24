<?php
/**
 * Title: Footer
 * Slug: neiro-music/footer-main
 * Categories: neiro-music
 * Description: Wordmark, address, hours, study and menu.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"footer","className":"nm-foot","align":"full","layout":{"type":"default"}} -->
<footer class="wp-block-group alignfull nm-foot"><!-- wp:group {"className":"nm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap"><!-- wp:group {"className":"nm-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nm-foot__grid"><!-- wp:group {"className":"nm-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group nm-foot__c"><!-- wp:paragraph {"className":"nm-foot__p"} -->
<p class="nm-foot__p"><?php echo esc_html( neiro_music_t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group nm-foot__c"><!-- wp:paragraph {"className":"nm-label"} -->
<p class="nm-label"><?php echo esc_html( neiro_music_t( 'foot_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-foot__p"} -->
<p class="nm-foot__p"><?php echo wp_kses_post( neiro_music_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group nm-foot__c"><!-- wp:paragraph {"className":"nm-label"} -->
<p class="nm-label"><?php echo esc_html( neiro_music_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-foot__p"} -->
<p class="nm-foot__p"><?php echo wp_kses_post( neiro_music_t( 'foot_hours_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group nm-foot__c"><!-- wp:paragraph {"className":"nm-label"} -->
<p class="nm-label"><?php echo esc_html( neiro_music_t( 'foot_study' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-foot__p"} -->
<p class="nm-foot__p"><?php echo wp_kses_post( neiro_music_t( 'foot_study_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","className":"nm-foot__nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:paragraph {"className":"nm-foot__word","ariaHidden":true} -->
<p class="nm-foot__word" aria-hidden="true"><?php echo esc_html( neiro_music_t( 'foot_word' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-foot__legal"} -->
<p class="nm-foot__legal"><?php echo esc_html( neiro_music_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
