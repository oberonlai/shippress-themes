<?php
/**
 * Title: Page: Book or Inquire
 * Slug: seimyaku-clinic/page-contact
 * Categories: seimyaku-clinic
 * Viewport Width: 1440
 * Description: Inner page: photograph band, the booking form (dynamic slot with mailto fallback) beside phone, email, hours and what happens next.
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-phead"><!-- wp:group {"className":"sz-phead__media sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__media sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo seimyaku_clinic_img( 'results-folder.webp' ); ?>" alt="Hands sorting past lab sheets and letters into a folder on a table."/></figure>
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

<!-- wp:group {"tagName":"section","align":"full","className":"sz-contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-contact"><!-- wp:group {"className":"sz-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__form"><!-- wp:paragraph {"className":"is-style-sz-chip"} -->
<p class="is-style-sz-chip">Book</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Book a first consultation</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>To book an initial consultation with Dr Ilse Marchetti or Dr Kwame Asante, please contact our administrative desk by phone or complete our booking form. When requesting an appointment, provide your full name, contact telephone number, email address, date of birth, and preferred appointment days between Monday and Saturday. It is also helpful to state your general clinical reason for visiting—such as kidney function review, persistent high blood pressure, or follow-up after a stone—and whether you possess a doctor's referral letter.</p>
<!-- /wp:paragraph -->

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
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-contact__side","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__side"><!-- wp:group {"className":"sz-contact__box","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__box"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Phone and email</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>+00 31 555 0148</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="mailto:care@seimyaku-clinic.example">care@seimyaku-clinic.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-contact__box","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__box"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Hours</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Monday–Friday 08:30–17:30 (Wednesday to 19:30)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Saturday 09:00–12:30 · Sunday closed</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-contact__box","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__box"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">What happens next</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sz-next__row","layout":{"type":"default"}} -->
<div class="wp-block-group sz-next__row"><!-- wp:paragraph {"className":"sz-next__t"} -->
<p class="sz-next__t">Within one working day</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-next__d"} -->
<p class="sz-next__d">Samuel Obi reviews your scheduling details.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-next__row","layout":{"type":"default"}} -->
<div class="wp-block-group sz-next__row"><!-- wp:paragraph {"className":"sz-next__t"} -->
<p class="sz-next__t">A slot is confirmed</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-next__d"} -->
<p class="sz-next__d">The desk contacts you with a time that matches your preferred days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-next__row","layout":{"type":"default"}} -->
<div class="wp-block-group sz-next__row"><!-- wp:paragraph {"className":"sz-next__t"} -->
<p class="sz-next__t">A checklist follows</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-next__d"} -->
<p class="sz-next__d">Which letters, lab sheets and medicine lists to bring.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
