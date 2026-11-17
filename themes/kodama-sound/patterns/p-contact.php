<?php
/**
 * Title: Page: Contact
 * Slug: kodama-sound/p-contact
 * Categories: kodama-sound
 * Viewport Width: 1440
 * Description: Contact page: studio facts and the shared contact form slot (mailto fallback).
 */
?>
<?php
ob_start();
?>
<a class="wp-element-button kd-mailbtn" href="mailto:hello@kodama-sound.example?subject=<?php echo rawurlencode( kodama_sound_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( kodama_sound_t( 'contact_email' ) ); ?></a>
<p class="kd-fb-hint"><?php echo esc_html( kodama_sound_t( 'forms_contact_hint' ) ); ?></p>
<?php
$fallback = ob_get_clean();
?>
<!-- wp:group {"tagName":"section","className":"kd-whead kd-d","layout":{"type":"default"}} -->
<section class="wp-block-group kd-whead kd-d"><!-- wp:paragraph {"className":"kd-label"} -->
<p class="kd-label"><?php echo esc_html( kodama_sound_t( 'ct_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kd-h1 kd-h1--page"} -->
<h1 class="wp-block-heading kd-h1 kd-h1--page"><?php echo esc_html( kodama_sound_t( 'ct_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-lede3"} -->
<p class="kd-lede3"><?php echo esc_html( kodama_sound_t( 'ct_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<svg class="kd-strand kd-strand--head" width="320" height="40" viewBox="0 0 320 40" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" aria-hidden="true" focusable="false"><path pathLength="1" d="M0 22C5 21 21 14 32 14C43 15 53 21 67 24C82 26 109 28 119 29C129 29 124 28 126 27C129 26 131 24 132 22C133 20 134 18 134 16C134 14 133 12 132 11C131 10 129 9 128 9C127 9 125 10 124 11C123 12 122 14 122 16C122 18 123 20 124 22C125 24 127 26 130 27C132 28 131 29 137 29C144 28 155 24 170 24C184 25 213 29 223 30C233 30 227 29 229 28C231 27 232 26 233 24C234 23 235 21 235 20C235 18 234 17 233 16C233 15 231 14 230 14C229 14 228 15 227 16C227 17 226 18 226 20C226 21 226 23 227 24C228 26 230 27 232 28C233 29 231 32 238 30C244 28 260 18 272 16C284 14 302 17 310 18C318 19 318 20 320 21"/><circle cx="4" cy="22" r="3" fill="currentColor" stroke="none"/><circle cx="316" cy="21" r="3" fill="currentColor" stroke="none"/></svg>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kd-sec kd-sec--form kd-p","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-sec--form kd-p"><!-- wp:group {"className":"kd-wide kd-let kd-let--contact","layout":{"type":"default"}} -->
<div class="wp-block-group kd-wide kd-let kd-let--contact"><!-- wp:group {"className":"kd-let__l","layout":{"type":"default"}} -->
<div class="wp-block-group kd-let__l"><!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--s"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--s"><?php echo esc_html( kodama_sound_t( 'ct_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kd-sheet","layout":{"type":"default"}} -->
<div class="wp-block-group kd-sheet"><!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'ct_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-v"} -->
<p class="kd-v"><?php echo esc_html( kodama_sound_t( 'ct_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'ct_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-v"} -->
<p class="kd-v"><?php echo esc_html( kodama_sound_t( 'ct_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'ct_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-v"} -->
<p class="kd-v"><?php echo esc_html( kodama_sound_t( 'ct_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'ct_k4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-v"} -->
<p class="kd-v"><?php echo esc_html( kodama_sound_t( 'ct_v4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'ct_k5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-v"} -->
<p class="kd-v"><?php echo esc_html( kodama_sound_t( 'ct_v5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'ct_k6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-v"} -->
<p class="kd-v"><?php echo esc_html( kodama_sound_t( 'ct_v6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-let__r","layout":{"type":"default"}} -->
<div class="wp-block-group kd-let__r"><!-- wp:group {"className":"kd-formpanel kd-formpanel--t","layout":{"type":"default"}} -->
<div class="wp-block-group kd-formpanel kd-formpanel--t"><?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kd-sec kd-sec--rows kd-p kd-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-sec--rows kd-p kd-sec--tight"><!-- wp:group {"className":"kd-col kd-col--c","layout":{"type":"default"}} -->
<div class="wp-block-group kd-col kd-col--c"><!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--s"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--s"><?php echo esc_html( kodama_sound_t( 'ct_v_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-tx"} -->
<p class="kd-tx"><?php echo esc_html( kodama_sound_t( 'ct_v_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tx"} -->
<p class="kd-tx"><?php echo esc_html( kodama_sound_t( 'ct_v_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kodama-sound/cut-strip"} /-->
