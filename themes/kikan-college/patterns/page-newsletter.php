<?php
/**
 * Title: Page: college letter
 * Slug: kikan-college/page-newsletter
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: Page: college letter
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-stubpage","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-stubpage">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:group {"className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head">
<!-- wp:paragraph {"className":"kc-head__n"} -->
<p class="kc-head__n"><?php echo esc_html( kikan_college_t( 'page-newsletter_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"kc-head__h"} -->
<h1 class="wp-block-heading kc-head__h"><?php echo esc_html( kikan_college_t( 'page-newsletter_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-rule" aria-hidden="true"></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo esc_html( kikan_college_t( 'page-newsletter_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@kikan-college.example', 'label' => kikan_college_t( 'forms_email' ), 'submit' => kikan_college_t( 'forms_subscribe' ), 'notice' => kikan_college_t( 'forms_mail_notice' ), 'subject' => kikan_college_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
