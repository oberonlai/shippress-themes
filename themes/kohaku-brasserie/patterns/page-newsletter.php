<?php
/**
 * Title: Page: The Monday letter
 * Slug: kohaku-brasserie/page-newsletter
 * Categories: kohaku-brasserie
 * Inserter: no
 * Description: Inner page: The Monday letter.
 */
?>
<!-- wp:group {"tagName":"section","className":"kb-sec kb-page","layout":{"type":"default"}} -->
<section class="wp-block-group kb-sec kb-page"><!-- wp:group {"className":"kb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kb-wrap"><!-- wp:group {"className":"kb-page__head","layout":{"type":"default"}} -->
<div class="wp-block-group kb-page__head"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(the Monday letter)</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kb-page__title"} -->
<h1 class="wp-block-heading kb-page__title">The Monday letter</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kb-page__lead"} -->
<p class="kb-page__lead">Next week’s afternoon plates and the late-sitting music, one email each Monday.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Leave your address and we will add you to the list. We send one email a week and nothing else.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kb-page__form","layout":{"type":"default"}} -->
<div class="wp-block-group kb-page__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'bookings@kohaku-brasserie.example', 'label' => kohaku_brasserie_t( 'forms_email' ), 'submit' => kohaku_brasserie_t( 'forms_subscribe' ), 'notice' => kohaku_brasserie_t( 'forms_mail_notice' ), 'subject' => kohaku_brasserie_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
