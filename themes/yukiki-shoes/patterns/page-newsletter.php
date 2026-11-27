<?php
/**
 * Title: Page: newsletter
 * Slug: yukiki-shoes/page-newsletter
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: Header, the letter text beside the dynamic subscribe form (required email field and submit; a mailto request without a plugin) and how to subscribe.
 */
?>
<!-- wp:group {"className":"ys-phead","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ys-phead">
<!-- wp:html -->
<nav class="ys-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( yukiki_shoes_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( yukiki_shoes_t( 'nl_h1' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"ys-phead__h"} -->
<h1 class="wp-block-heading ys-phead__h"><?php echo esc_html( yukiki_shoes_t( 'nl_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-phead__lead"} -->
<p class="ys-phead__lead"><?php echo esc_html( yukiki_shoes_t( 'nl_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"subscribe","align":"full","className":"ys-sec ys-sec--white","layout":{"type":"default"}} -->
<section id="subscribe" class="wp-block-group alignfull ys-sec ys-sec--white">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:group {"className":"ys-split","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split">
<!-- wp:group {"className":"ys-split__l","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split__l">
<!-- wp:heading {"level":2,"className":"ys-h2 ys-h2--l"} -->
<h2 class="wp-block-heading ys-h2 ys-h2--l"><?php echo esc_html( yukiki_shoes_t( 'nl_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'nl_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'nl_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-split__r ys-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split__r ys-formbox">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@yukikishoes.example', 'label' => yukiki_shoes_t( 'forms_email' ), 'submit' => yukiki_shoes_t( 'forms_subscribe' ), 'notice' => yukiki_shoes_t( 'forms_mail_notice' ), 'subject' => yukiki_shoes_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ys-sec ys-sec--band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ys-sec ys-sec--band">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:group {"className":"ys-split","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split">
<!-- wp:group {"className":"ys-split__l","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split__l">
<!-- wp:heading {"level":2,"className":"ys-h2 ys-h2--l"} -->
<h2 class="wp-block-heading ys-h2 ys-h2--l"><?php echo esc_html( yukiki_shoes_t( 'nl_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-split__r","layout":{"type":"default"}} -->
<div class="wp-block-group ys-split__r">
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'nl_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'nl_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
