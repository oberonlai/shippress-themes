<?php
/**
 * Title: Page: Newsletter
 * Slug: himuro-gelato/page-newsletter
 * Categories: himuro-gelato
 * Keywords: page-newsletter
 * Viewport Width: 1440
 * Description: Inner page: Newsletter. A standalone subscribe page with the newsletter form slot.
 */
?>
<!-- wp:group {"className":"hg-head","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-head"><!-- wp:cover {"url":"<?php echo himuro_gelato_img( 'a1' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.4},"minHeight":62,"minHeightUnit":"vh","className":"hg-head__stage sp-parallax"} -->
<div class="wp-block-cover hg-head__stage sp-parallax" style="min-height:62vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_a1' ) ); ?>" src="<?php echo himuro_gelato_img( 'a1' ); ?>" style="object-position:50% 40%" data-object-fit="cover" data-object-position="50% 40%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"hg-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group hg-head__in"><!-- wp:heading {"level":1,"className":"hg-head__title"} -->
<h1 class="wp-block-heading hg-head__title"><?php echo esc_html( himuro_gelato_t( 'pg_newsletter_t' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-prose hg-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-prose hg-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:paragraph {"className":"hg-label"} -->
<p class="hg-label"><?php echo esc_html( himuro_gelato_t( 'pg_newsletter_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-lede sp-reveal sp-reveal--up"} -->
<p class="hg-lede sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-prose__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hg-prose__body sp-stagger"><!-- wp:heading {"level":2,"className":"hg-prose__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hg-prose__h sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_newsletter_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_newsletter_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-note__form hg-note__form--page","layout":{"type":"default"}} -->
<div class="wp-block-group hg-note__form hg-note__form--page"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@himurogelato.example', 'label' => himuro_gelato_t( 'forms_email' ), 'submit' => himuro_gelato_t( 'forms_subscribe' ), 'notice' => himuro_gelato_t( 'forms_mail_notice' ), 'subject' => himuro_gelato_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-prose__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hg-prose__body sp-stagger"><!-- wp:heading {"level":2,"className":"hg-prose__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hg-prose__h sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_newsletter_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_newsletter_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->
