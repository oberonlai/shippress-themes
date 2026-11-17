<?php
/**
 * Title: Page: Send a cut
 * Slug: kodama-sound/p-send-a-cut
 * Categories: kodama-sound
 * Viewport Width: 1440
 * Description: Send a cut page: window head, brief sheet, the shared contact form slot (mailto fallback) and what happens next.
 */
?>
<?php
ob_start();
?>
<a class="wp-element-button kd-mailbtn" href="mailto:cuts@kodama-sound.example?subject=<?php echo rawurlencode( kodama_sound_t( 'forms_cut_subject' ) ); ?>"><?php echo esc_html( kodama_sound_t( 'forms_cut_button' ) ); ?></a>
<p class="kd-fb-hint"><?php echo esc_html( kodama_sound_t( 'forms_cut_hint' ) ); ?></p>
<?php
$fallback = ob_get_clean();
?>
<!-- wp:group {"tagName":"section","className":"kd-whead kd-d","layout":{"type":"default"}} -->
<section class="wp-block-group kd-whead kd-d"><!-- wp:paragraph {"className":"kd-label"} -->
<p class="kd-label"><?php echo esc_html( kodama_sound_t( 'sa_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kd-h1 kd-h1--page"} -->
<h1 class="wp-block-heading kd-h1 kd-h1--page"><?php echo esc_html( kodama_sound_t( 'sa_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-lede3"} -->
<p class="kd-lede3"><?php echo esc_html( kodama_sound_t( 'sa_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kd-frame kd-frame--w","layout":{"type":"default"}} -->
<div class="wp-block-group kd-frame kd-frame--w"><!-- wp:group {"className":"kd-window sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kd-window sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/send-a-cut-drive.webp' ) ); ?>" alt="<?php echo esc_attr( kodama_sound_t( 'alt_p17' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<svg class="kd-wtrace" width="320" height="40" viewBox="0 0 320 40" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" aria-hidden="true" focusable="false"><path vector-effect="non-scaling-stroke" pathLength="1" d="M0 22C5 21 21 14 32 14C43 15 53 21 67 24C82 26 109 28 119 29C129 29 124 28 126 27C129 26 131 24 132 22C133 20 134 18 134 16C134 14 133 12 132 11C131 10 129 9 128 9C127 9 125 10 124 11C123 12 122 14 122 16C122 18 123 20 124 22C125 24 127 26 130 27C132 28 131 29 137 29C144 28 155 24 170 24C184 25 213 29 223 30C233 30 227 29 229 28C231 27 232 26 233 24C234 23 235 21 235 20C235 18 234 17 233 16C233 15 231 14 230 14C229 14 228 15 227 16C227 17 226 18 226 20C226 21 226 23 227 24C228 26 230 27 232 28C233 29 231 32 238 30C244 28 260 18 272 16C284 14 302 17 310 18C318 19 318 20 320 21"/><circle cx="4" cy="22" r="3" fill="currentColor" stroke="none"/><circle cx="316" cy="21" r="3" fill="currentColor" stroke="none"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kd-sec kd-sec--rows kd-p","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-sec--rows kd-p"><!-- wp:group {"className":"kd-col1000","layout":{"type":"default"}} -->
<div class="wp-block-group kd-col1000"><!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--s"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--s"><?php echo esc_html( kodama_sound_t( 'sa_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-tx"} -->
<p class="kd-tx"><?php echo esc_html( kodama_sound_t( 'sa_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kd-sheet","layout":{"type":"default"}} -->
<div class="wp-block-group kd-sheet"><!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'sc_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-v"} -->
<p class="kd-v"><?php echo esc_html( kodama_sound_t( 'sc_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'sc_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-v"} -->
<p class="kd-v"><?php echo esc_html( kodama_sound_t( 'sc_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'sc_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-v"} -->
<p class="kd-v"><?php echo esc_html( kodama_sound_t( 'sc_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'sc_k4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-v"} -->
<p class="kd-v"><?php echo esc_html( kodama_sound_t( 'sc_v4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kd-sec kd-sec--form kd-t","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-sec--form kd-t"><!-- wp:group {"className":"kd-col1000","layout":{"type":"default"}} -->
<div class="wp-block-group kd-col1000"><!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--s"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--s"><?php echo esc_html( kodama_sound_t( 'sa_f_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kd-formpanel","layout":{"type":"default"}} -->
<div class="wp-block-group kd-formpanel"><?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kd-sec kd-sec--rows kd-p","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-sec--rows kd-p"><!-- wp:group {"className":"kd-col1000","layout":{"type":"default"}} -->
<div class="wp-block-group kd-col1000"><!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--s"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--s"><?php echo esc_html( kodama_sound_t( 'sa_n_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kd-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kd-rows"><!-- wp:group {"className":"kd-trow kd-trow--3","layout":{"type":"default"}} -->
<div class="wp-block-group kd-trow kd-trow--3"><!-- wp:paragraph {"className":"kd-tc kd-tc1"} -->
<p class="kd-tc kd-tc1"><?php echo esc_html( kodama_sound_t( 'sa_n_1_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tc kd-tc2"} -->
<p class="kd-tc kd-tc2"><?php echo esc_html( kodama_sound_t( 'sa_n_1_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tc kd-tc3"} -->
<p class="kd-tc kd-tc3"><?php echo esc_html( kodama_sound_t( 'sa_n_1_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-trow kd-trow--3","layout":{"type":"default"}} -->
<div class="wp-block-group kd-trow kd-trow--3"><!-- wp:paragraph {"className":"kd-tc kd-tc1"} -->
<p class="kd-tc kd-tc1"><?php echo esc_html( kodama_sound_t( 'sa_n_2_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tc kd-tc2"} -->
<p class="kd-tc kd-tc2"><?php echo esc_html( kodama_sound_t( 'sa_n_2_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tc kd-tc3"} -->
<p class="kd-tc kd-tc3"><?php echo esc_html( kodama_sound_t( 'sa_n_2_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-trow kd-trow--3","layout":{"type":"default"}} -->
<div class="wp-block-group kd-trow kd-trow--3"><!-- wp:paragraph {"className":"kd-tc kd-tc1"} -->
<p class="kd-tc kd-tc1"><?php echo esc_html( kodama_sound_t( 'sa_n_3_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tc kd-tc2"} -->
<p class="kd-tc kd-tc2"><?php echo esc_html( kodama_sound_t( 'sa_n_3_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tc kd-tc3"} -->
<p class="kd-tc kd-tc3"><?php echo esc_html( kodama_sound_t( 'sa_n_3_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--s kd-h2--gap"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--s kd-h2--gap"><?php echo esc_html( kodama_sound_t( 'sa_pf_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-tx"} -->
<p class="kd-tx"><?php echo esc_html( kodama_sound_t( 'sa_pf_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
