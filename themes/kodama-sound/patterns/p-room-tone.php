<?php
/**
 * Title: Page: Room Tone
 * Slug: kodama-sound/p-room-tone
 * Categories: kodama-sound
 * Viewport Width: 1440
 * Description: Room Tone newsletter page on the dark ground: window head without a photo, the newsletter form slot and three past issues.
 */
?>
<!-- wp:group {"className":"kd-rtpage kd-d","layout":{"type":"default"}} -->
<div class="wp-block-group kd-rtpage kd-d"><!-- wp:group {"tagName":"section","className":"kd-whead kd-whead--rt","layout":{"type":"default"}} -->
<section class="wp-block-group kd-whead kd-whead--rt"><!-- wp:paragraph {"className":"kd-label"} -->
<p class="kd-label"><?php echo esc_html( kodama_sound_t( 'rt_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kd-h1 kd-h1--page"} -->
<h1 class="wp-block-heading kd-h1 kd-h1--page"><?php echo esc_html( kodama_sound_t( 'rt_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-lede3"} -->
<p class="kd-lede3"><?php echo esc_html( kodama_sound_t( 'rt_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<svg class="kd-strand kd-strand--head" width="320" height="40" viewBox="0 0 320 40" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" aria-hidden="true" focusable="false"><path pathLength="1" d="M0 22C5 21 21 14 32 14C43 15 53 21 67 24C82 26 109 28 119 29C129 29 124 28 126 27C129 26 131 24 132 22C133 20 134 18 134 16C134 14 133 12 132 11C131 10 129 9 128 9C127 9 125 10 124 11C123 12 122 14 122 16C122 18 123 20 124 22C125 24 127 26 130 27C132 28 131 29 137 29C144 28 155 24 170 24C184 25 213 29 223 30C233 30 227 29 229 28C231 27 232 26 233 24C234 23 235 21 235 20C235 18 234 17 233 16C233 15 231 14 230 14C229 14 228 15 227 16C227 17 226 18 226 20C226 21 226 23 227 24C228 26 230 27 232 28C233 29 231 32 238 30C244 28 260 18 272 16C284 14 302 17 310 18C318 19 318 20 320 21"/><circle cx="4" cy="22" r="3" fill="currentColor" stroke="none"/><circle cx="316" cy="21" r="3" fill="currentColor" stroke="none"/></svg>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kd-sec kd-sec--form kd-d","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-sec--form kd-d"><!-- wp:group {"className":"kd-col kd-col--c","layout":{"type":"default"}} -->
<div class="wp-block-group kd-col kd-col--c"><!-- wp:paragraph {"className":"kd-tx"} -->
<p class="kd-tx"><?php echo esc_html( kodama_sound_t( 'rt_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tx"} -->
<p class="kd-tx"><?php echo esc_html( kodama_sound_t( 'rt_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kd-formpanel kd-formpanel--d","layout":{"type":"default"}} -->
<div class="wp-block-group kd-formpanel kd-formpanel--d"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@kodama-sound.example',
	'label'   => kodama_sound_t( 'forms_email' ),
	'submit'  => kodama_sound_t( 'forms_subscribe' ),
	'notice'  => kodama_sound_t( 'forms_mail_notice' ),
	'subject' => kodama_sound_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kd-sec kd-sec--rows kd-d","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-sec--rows kd-d"><!-- wp:group {"className":"kd-col1000","layout":{"type":"default"}} -->
<div class="wp-block-group kd-col1000"><!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--s"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--s"><?php echo esc_html( kodama_sound_t( 'rt_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kd-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kd-rows"><!-- wp:group {"className":"kd-trow kd-trow--2","layout":{"type":"default"}} -->
<div class="wp-block-group kd-trow kd-trow--2"><!-- wp:paragraph {"className":"kd-tc kd-tc1"} -->
<p class="kd-tc kd-tc1"><?php echo esc_html( kodama_sound_t( 'rt_i_1_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tc kd-tc2"} -->
<p class="kd-tc kd-tc2"><?php echo esc_html( kodama_sound_t( 'rt_i_1_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-trow kd-trow--2","layout":{"type":"default"}} -->
<div class="wp-block-group kd-trow kd-trow--2"><!-- wp:paragraph {"className":"kd-tc kd-tc1"} -->
<p class="kd-tc kd-tc1"><?php echo esc_html( kodama_sound_t( 'rt_i_2_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tc kd-tc2"} -->
<p class="kd-tc kd-tc2"><?php echo esc_html( kodama_sound_t( 'rt_i_2_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-trow kd-trow--2","layout":{"type":"default"}} -->
<div class="wp-block-group kd-trow kd-trow--2"><!-- wp:paragraph {"className":"kd-tc kd-tc1"} -->
<p class="kd-tc kd-tc1"><?php echo esc_html( kodama_sound_t( 'rt_i_3_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tc kd-tc2"} -->
<p class="kd-tc kd-tc2"><?php echo esc_html( kodama_sound_t( 'rt_i_3_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kd-tx kd-tx--gap"} -->
<p class="kd-tx kd-tx--gap"><?php echo esc_html( kodama_sound_t( 'rt_priv' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group -->
