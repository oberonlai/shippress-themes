<?php
/**
 * Title: Page: Enquiry and visit
 * Slug: kotoba-language/page-enquiry
 * Categories: kotoba-language
 * Description: Cropped Hello. wordmark, contact details beside a street photograph, enquiry form.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"kl-wrap kl-lede-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap kl-lede-wrap"><!-- wp:paragraph {"className":"kl-lede"} -->
<p class="kl-lede"><?php echo esc_html( kotoba_language_t( 'enquiry_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kl-word kl-word--page" aria-hidden="true"><p class="kl-word__t">Hello.</p></div>
<!-- /wp:html -->

<!-- wp:group {"tagName":"section","className":"kl-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec"><!-- wp:group {"className":"kl-wrap kl-contactgrid","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap kl-contactgrid"><!-- wp:group {"className":"kl-contact","layout":{"type":"default"}} -->
<div class="wp-block-group kl-contact"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'en_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body">Scheepmakerspassage 14<br>3011 VH Rotterdam, Netherlands</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'en_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo wp_kses_post( kotoba_language_t( 'en_hours_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'en_reach' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo wp_kses_post( kotoba_language_t( 'en_reach_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'en_eve' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'en_eve_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-wide"} -->
<figure class="wp-block-image size-full kl-wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s10.webp' ) ); ?>" alt="<?php echo esc_attr( kotoba_language_t( 'alt_s10' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec kl-prose-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-prose-sec"><!-- wp:group {"className":"kl-narrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kl-narrow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kl-h2"} -->
<h2 class="wp-block-heading kl-h2"><?php echo esc_html( kotoba_language_t( 'enquiry_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'enquiry_b1_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'enquiry_b1_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec kl-prose-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-prose-sec"><!-- wp:group {"className":"kl-narrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kl-narrow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kl-h2"} -->
<h2 class="wp-block-heading kl-h2"><?php echo esc_html( kotoba_language_t( 'enquiry_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'enquiry_b2_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'enquiry_b2_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec"><!-- wp:group {"className":"kl-wrap kl-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap kl-formwrap"><!-- wp:heading {"level":2,"className":"kl-h2"} -->
<h2 class="wp-block-heading kl-h2"><?php echo esc_html( kotoba_language_t( 'en_form_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="kl-form" action="mailto:hello@kotobalanguage.example" method="post" enctype="text/plain"><p><label for="kl-f-name"><?php echo esc_html( kotoba_language_t( 'f_name' ) ); ?></label><input id="kl-f-name" name="name" type="text" required></p><p><label for="kl-f-mail"><?php echo esc_html( kotoba_language_t( 'f_mail' ) ); ?></label><input id="kl-f-mail" name="email" type="email" required></p><p><label for="kl-f-lang"><?php echo esc_html( kotoba_language_t( 'f_lang' ) ); ?></label><input id="kl-f-lang" name="language" type="text"></p><p><label for="kl-f-msg"><?php echo esc_html( kotoba_language_t( 'f_msg' ) ); ?></label><textarea id="kl-f-msg" name="message" rows="5"></textarea></p><p><button type="submit" class="kl-form__btn"><?php echo esc_html( kotoba_language_t( 'f_send' ) ); ?></button></p></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->