<?php
/**
 * Title: Page: contact
 * Slug: kikan-college/page-contact
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: Page: contact
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-stubpage","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-stubpage">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:group {"className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head">
<!-- wp:paragraph {"className":"kc-head__n"} -->
<p class="kc-head__n"><?php echo esc_html( kikan_college_t( 'page-contact_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"kc-head__h"} -->
<h1 class="wp-block-heading kc-head__h"><?php echo esc_html( kikan_college_t( 'page-contact_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-rule" aria-hidden="true"></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo esc_html( kikan_college_t( 'page-contact_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php
ob_start(); ?>
<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns">
<!-- wp:button {"className":"kc-pill kc-pill--solid"} -->
<div class="wp-block-button kc-pill kc-pill--solid"><a class="wp-block-button__link wp-element-button" href="mailto:hello@kikan-college.example?subject=<?php echo rawurlencode( kikan_college_t( 'contact_mail_subject' ) ); ?>"><?php echo esc_html( kikan_college_t( 'contact_email_button' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
