<?php
/**
 * Title: Page: enter
 * Slug: sanroku-trail/pg-enter
 * Categories: sanroku-trail
 * Inserter: no
 * Viewport Width: 1440
 * Description: Flush photo head, the four steps as ruled rows, the fee ledger, the entry form slot with a mailto fallback and a dark FAQ accordion.
 */
?>
<!-- wp:cover {"url":"<?php echo sanroku_trail_img( 'p11-finish-meadow.webp' ); ?>","alt":"<?php echo sanroku_trail_a( 'alt_p11' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.6},"minHeight":440,"minHeightUnit":"px","tagName":"section","className":"st-hero st-phead sp-parallax"} -->
<section class="wp-block-cover st-hero st-phead sp-parallax" style="min-height:440px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sanroku_trail_a( 'alt_p11' ); ?>" src="<?php echo sanroku_trail_img( 'p11-finish-meadow.webp' ); ?>" style="object-position:50% 60%" data-object-fit="cover" data-object-position="50% 60%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"st-h1"} -->
<h1 class="wp-block-heading st-h1"><span class="st-h1__l"><?php echo esc_html( sanroku_trail_t( 'enter_h1_a' ) ); ?></span> <span class="st-h1__l"><?php echo esc_html( sanroku_trail_t( 'enter_h1_b' ) ); ?></span></h1>
<!-- /wp:heading --></div></section>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","className":"st-rows","layout":{"type":"default"}} -->
<section class="wp-block-group st-rows"><!-- wp:paragraph {"className":"st-row st-row--p"} -->
<p class="st-row st-row--p"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'step_1_c' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'step_1' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-row st-row--p"} -->
<p class="st-row st-row--p"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'step_2_c' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'step_2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-row st-row--p"} -->
<p class="st-row st-row--p"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'step_3_c' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'step_3' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-row st-row--p"} -->
<p class="st-row st-row--p"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'step_4_c' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'step_4' ) ); ?></span></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"st-sec st-sec--tight st-sp ","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-sec--tight st-sp "><!-- wp:group {"className":"st-frame st-split","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame st-split"><!-- wp:group {"className":"st-split__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__l sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'enter_s1_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-split__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__r sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"st-split__p"} -->
<p class="st-split__p"><?php echo esc_html( sanroku_trail_t( 'enter_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-split__p"} -->
<p class="st-split__p"><?php echo esc_html( sanroku_trail_t( 'enter_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"st-sec st-sec--tight st-enter","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-sec--tight st-enter"><!-- wp:group {"className":"st-frame","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame"><!-- wp:group {"className":"st-enter__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-enter__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'enter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-enter__p"} -->
<p class="st-enter__p"><?php echo esc_html( sanroku_trail_t( 'enter_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"hasFixedLayout":false,"className":"st-fees"} -->
<figure class="wp-block-table st-fees"><table><thead><tr><th><?php echo esc_html( sanroku_trail_t( 'fee_h_race' ) ); ?></th><th><?php echo esc_html( sanroku_trail_t( 'fee_h_dist' ) ); ?></th><th><?php echo esc_html( sanroku_trail_t( 'fee_h_date' ) ); ?></th><th><?php echo esc_html( sanroku_trail_t( 'fee_h_fee' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_1_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_1_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_1_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_1_f' ) ); ?></td></tr><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_2_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_2_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_2_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_2_f' ) ); ?></td></tr><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_3_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_3_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_3_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_3_f' ) ); ?></td></tr><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_4_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_4_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_4_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_4_f' ) ); ?></td></tr><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_5_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_5_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_5_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_5_f' ) ); ?></td></tr><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_6_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_6_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_6_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_6_f' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"st-band-sec st-band-sec--faq","layout":{"type":"default"}} -->
<section class="wp-block-group st-band-sec st-band-sec--faq"><!-- wp:group {"className":"st-frame st-band__grid","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame st-band__grid"><!-- wp:group {"className":"st-band__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-band__l sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"st-h2 st-h2--lt"} -->
<h2 class="wp-block-heading st-h2 st-h2--lt"><?php echo esc_html( sanroku_trail_t( 'faq_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<svg class="st-map st-map--arrow" viewBox="0 0 80 12" width="80" height="12" role="img" aria-label="<?php echo sanroku_trail_a( 'faq_svg' ); ?>" fill="none" stroke="#fff" stroke-width="1"><path d="M0 6h79M74 1l5 5-5 5"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-band__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-band__r sp-reveal sp-reveal--up"><!-- wp:group {"className":"st-accs","layout":{"type":"default"}} -->
<div class="wp-block-group st-accs"><!-- wp:details {"showContent":true,"className":"st-acc"} -->
<details class="wp-block-details st-acc" open><summary><?php echo esc_html( sanroku_trail_t( 'enter_s3_h' ) ); ?></summary><!-- wp:paragraph {"className":"st-faq__p"} -->
<p class="st-faq__p"><?php echo esc_html( sanroku_trail_t( 'enter_s3_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"st-acc"} -->
<details class="wp-block-details st-acc"><summary><?php echo esc_html( sanroku_trail_t( 'enter_s4_h' ) ); ?></summary><!-- wp:paragraph {"className":"st-faq__p"} -->
<p class="st-faq__p"><?php echo esc_html( sanroku_trail_t( 'enter_s4_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"st-acc"} -->
<details class="wp-block-details st-acc"><summary><?php echo esc_html( sanroku_trail_t( 'faq_3_h' ) ); ?></summary><!-- wp:paragraph {"className":"st-faq__p"} -->
<p class="st-faq__p"><?php echo esc_html( sanroku_trail_t( 'faq_3_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"st-acc"} -->
<details class="wp-block-details st-acc"><summary><?php echo esc_html( sanroku_trail_t( 'faq_4_h' ) ); ?></summary><!-- wp:paragraph {"className":"st-faq__p"} -->
<p class="st-faq__p"><?php echo esc_html( sanroku_trail_t( 'faq_4_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"st-sec st-sec--tight st-sp st-formsec ","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-sec--tight st-sp st-formsec "><!-- wp:group {"className":"st-frame st-split","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame st-split"><!-- wp:group {"className":"st-split__l","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__l"><!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'enter_form_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-split__p"} -->
<p class="st-split__p"><?php echo esc_html( sanroku_trail_t( 'enter_form_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-split__r st-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__r st-formwrap"><?php ob_start(); ?>
<a class="wp-element-button" href="mailto:entries@sanrokutrail.example?subject=<?php echo esc_attr( rawurlencode( sanroku_trail_t( 'enter_mail_subject' ) ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'enter_email' ) ); ?></a>
<?php $fallback = ob_get_clean(); echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
