<?php
/**
 * Title: Footer: four columns
 * Slug: asayake-lodge/footer-main
 * Categories: asayake-lodge
 * Viewport Width: 1440
 * Description: Deep ink footer: wordmark and address, hours, the page list and the house-letter newsletter slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"al-foot","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-foot"><!-- wp:group {"className":"al-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group al-foot__cols"><!-- wp:group {"className":"al-fcol al-fcol--brand","layout":{"type":"default"}} -->
<div class="wp-block-group al-fcol al-fcol--brand"><!-- wp:group {"className":"al-brand al-brand--foot","layout":{"type":"default"}} -->
<div class="wp-block-group al-brand al-brand--foot"><!-- wp:html -->
<svg class="al-mark" viewBox="0 0 48 48" width="28" height="28" aria-hidden="true" focusable="false"><path d="M6 36h36M10 36V26L24 16l14 10v10M14 26l10-8 10 8M16 20a8 8 0 0 1 16 0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"al-wordmark"} -->
<p class="al-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"al-fline"} -->
<p class="al-fline"><?php echo esc_html( asayake_lodge_t( 'f_line' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall"} -->
<p class="al-fsmall"><?php echo esc_html( asayake_lodge_t( 'f_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall"} -->
<p class="al-fsmall"><a href="tel:+00445550142"><?php echo esc_html( asayake_lodge_t( 'phone' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall"} -->
<p class="al-fsmall"><a href="mailto:stay@asayake-lodge.example"><?php echo esc_html( asayake_lodge_t( 'email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group al-fcol"><!-- wp:paragraph {"className":"al-flabel"} -->
<p class="al-flabel"><?php echo esc_html( asayake_lodge_t( 'f_hours' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-fhour"} -->
<p class="al-fsmall al-fhour"><span><?php echo esc_html( asayake_lodge_t( 'f_h1d' ) ); ?></span> <?php echo esc_html( asayake_lodge_t( 'f_h1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-fhour"} -->
<p class="al-fsmall al-fhour"><span><?php echo esc_html( asayake_lodge_t( 'f_h2d' ) ); ?></span> <?php echo esc_html( asayake_lodge_t( 'f_h2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-fhour"} -->
<p class="al-fsmall al-fhour"><span><?php echo esc_html( asayake_lodge_t( 'f_h3d' ) ); ?></span> <?php echo esc_html( asayake_lodge_t( 'f_h3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-fhour"} -->
<p class="al-fsmall al-fhour"><span><?php echo esc_html( asayake_lodge_t( 'f_h4d' ) ); ?></span> <?php echo esc_html( asayake_lodge_t( 'f_h4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-fhour"} -->
<p class="al-fsmall al-fhour"><span><?php echo esc_html( asayake_lodge_t( 'f_h5d' ) ); ?></span> <?php echo esc_html( asayake_lodge_t( 'f_h5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group al-fcol"><!-- wp:paragraph {"className":"al-flabel"} -->
<p class="al-flabel"><?php echo esc_html( asayake_lodge_t( 'f_links' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-flink"} -->
<p class="al-fsmall al-flink"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'fl_rooms' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-flink"} -->
<p class="al-fsmall al-flink"><a href="<?php echo esc_url( home_url( '/a-day/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'fl_day' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-flink"} -->
<p class="al-fsmall al-flink"><a href="<?php echo esc_url( home_url( '/rates/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'fl_rates' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-flink"} -->
<p class="al-fsmall al-flink"><a href="<?php echo esc_url( home_url( '/getting-here/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'fl_getting' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-flink"} -->
<p class="al-fsmall al-flink"><a href="<?php echo esc_url( home_url( '/questions/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'fl_questions' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-flink"} -->
<p class="al-fsmall al-flink"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'fl_about' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-flink"} -->
<p class="al-fsmall al-flink"><a href="<?php echo esc_url( home_url( '/house-rules/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'fl_rules' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-flink"} -->
<p class="al-fsmall al-flink"><a href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'fl_book' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall al-flink"} -->
<p class="al-fsmall al-flink"><a href="<?php echo esc_url( home_url( '/letters/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'fl_letters' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-fcol al-fcol--news","layout":{"type":"default"}} -->
<div class="wp-block-group al-fcol al-fcol--news"><!-- wp:paragraph {"className":"al-flabel"} -->
<p class="al-flabel"><?php echo esc_html( asayake_lodge_t( 'f_news' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall"} -->
<p class="al-fsmall"><?php echo esc_html( asayake_lodge_t( 'f_news_text' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"al-form al-form--dark","layout":{"type":"default"}} -->
<div class="wp-block-group al-form al-form--dark"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@asayake-lodge.example', 'label' => asayake_lodge_t( 'forms_email' ), 'submit' => asayake_lodge_t( 'forms_subscribe' ), 'notice' => asayake_lodge_t( 'forms_mail_notice' ), 'subject' => asayake_lodge_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"al-fsmall al-fcol__nl"} -->
<p class="al-fsmall al-fcol__nl"><a href="<?php echo esc_url( home_url( '/house-letter/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'f_news_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-fbottom","layout":{"type":"default"}} -->
<div class="wp-block-group al-fbottom"><!-- wp:paragraph {"className":"al-fsmall"} -->
<p class="al-fsmall"><?php echo esc_html( asayake_lodge_t( 'f_copy' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-fsmall"} -->
<p class="al-fsmall"><a href="#top"><?php echo esc_html( asayake_lodge_t( 'f_top' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
