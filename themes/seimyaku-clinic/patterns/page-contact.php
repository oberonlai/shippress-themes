<?php
/**
 * Title: Page: Book or Inquire
 * Slug: seimyaku-clinic/page-contact
 * Categories: seimyaku-clinic
 * Viewport Width: 1440
 * Description: Inner page: photograph band with the docked title below, then the text (the detailed layout is built in stage 2).
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-phead"><!-- wp:group {"className":"sz-phead__media sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__media sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo seimyaku_clinic_img( 'dietitian-plate.webp' ); ?>" alt="Dietitian showing a plate model and food cards to a seated patient."/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sz-veil sz-veil--static","layout":{"type":"default"}} -->
<div class="wp-block-group sz-veil sz-veil--static"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__text"><!-- wp:paragraph {"className":"is-style-sz-meta sz-crumbs"} -->
<p class="is-style-sz-meta sz-crumbs"><span><a href="/">Home</a></span><span>Book or Inquire</span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sz-phead__title"} -->
<h1 class="wp-block-heading sz-phead__title">Book or Inquire</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-lead"} -->
<p class="sz-lead">Reach out to schedule your ninety-minute first consultation or ask our clinical coordination team a question about our monitoring services.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sz-prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-prose"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Booking Your First Appointment</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>To book an initial consultation with Dr Ilse Marchetti or Dr Kwame Asante, please contact our administrative desk by phone or complete our booking form. When requesting an appointment, provide your full name, contact telephone number, email address, date of birth, and preferred appointment days between Monday and Saturday. It is also helpful to state your general clinical reason for visiting—such as kidney function review, persistent high blood pressure, or follow-up after a stone—and whether you possess a doctor's referral letter. To ensure strict medical confidentiality, please do not transmit sensitive laboratory reports via unsecured email forms; instead, bring paper copies directly to your initial consultation.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Direct Contact and What Happens Next</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our coordination team is available Monday through Friday from 08:30 to 17:30 (Wednesday until 19:30) and Saturday mornings from 09:00 to 12:30. You can telephone us directly at +00 31 555 0148 or email care@seimyaku-clinic.example. Once your inquiry is submitted, our coordinator Samuel Obi reviews your scheduling details within one working day / our desk contacts you to confirm an appointment slot matching your preferred schedule / we send a clear pre-visit checklist detailing which medical letters, previous lab sheets, and prescription lists to bring with you. If you have immediate questions regarding fees or parking accessibility, our team is glad to assist.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sz-formsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-formsec"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Book a first consultation</h2>
<!-- /wp:heading -->

<!-- wp:group {"anchor":"write","className":"sz-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group sz-formwrap" id="write"><?php
ob_start();
?>
<a class="wp-element-button" href="mailto:care@seimyaku-clinic.example?subject=<?php echo rawurlencode( seimyaku_clinic_t( 'contact_subject' ) ); ?>"><?php echo esc_html( seimyaku_clinic_t( 'contact_email' ) ); ?></a>
<?php
$sz_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $sz_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sz-note"} -->
<p class="sz-note">We do not accept results by email; please bring them to the visit. In an emergency, call your local emergency number.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
