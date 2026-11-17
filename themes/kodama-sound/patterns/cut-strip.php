<?php
/**
 * Title: Inner: send-a-cut strip
 * Slug: kodama-sound/cut-strip
 * Categories: kodama-sound
 * Viewport Width: 1440
 * Description: Compact dark strip with the send-a-cut tab rendered inline.
 */
?>
<!-- wp:group {"tagName":"section","className":"kd-sec kd-sec--strip kd-strip kd-d","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-sec--strip kd-strip kd-d"><!-- wp:group {"className":"kd-col kd-col--c","layout":{"type":"default"}} -->
<div class="wp-block-group kd-col kd-col--c"><!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--s"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--s"><?php echo esc_html( kodama_sound_t( 'cs_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-tx"} -->
<p class="kd-tx"><?php echo esc_html( kodama_sound_t( 'cs_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="kd-tab kd-tab--inline" href="/send-a-cut/"><span class="kd-tab__t"><strong><?php echo esc_html( kodama_sound_t( 'sc_cta' ) ); ?></strong><span><?php echo esc_html( kodama_sound_t( 'sc_mail' ) ); ?></span></span><svg class="kd-arr" width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="14" cy="14" r="12.5"/><path d="M8.5 14h11M15.5 9.5 20 14l-4.5 4.5"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
