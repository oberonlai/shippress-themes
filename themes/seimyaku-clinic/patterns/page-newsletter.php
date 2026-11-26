<?php
/**
 * Title: Page: The Clinic Letter
 * Slug: seimyaku-clinic/page-newsletter
 * Categories: seimyaku-clinic
 * Viewport Width: 1440
 * Description: Inner page: photograph band with the docked title below, then the text (the detailed layout is built in stage 2).
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-phead"><!-- wp:group {"className":"sz-phead__media sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__media sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo seimyaku_clinic_img( 'street-morning.webp' ); ?>" alt="Quiet residential street with trees, apartment buildings, and tram tracks in morning haze."/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sz-veil sz-veil--static","layout":{"type":"default"}} -->
<div class="wp-block-group sz-veil sz-veil--static"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__text"><!-- wp:paragraph {"className":"is-style-sz-meta sz-crumbs"} -->
<p class="is-style-sz-meta sz-crumbs"><span><a href="/">Home</a></span><span>The Clinic Letter</span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sz-phead__title"} -->
<h1 class="wp-block-heading sz-phead__title">The Clinic Letter</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-lead"} -->
<p class="sz-lead">Our quarterly publication offers thoughtful observations on kidney health, blood pressure management, and updates from our clinical team.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sz-prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-prose"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">A Quarterly Letter from Our Clinicians</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Four times each year, Seimyaku Clinic distributes a quiet, focused newsletter written entirely by our own healthcare team. Rather than promotional marketing or general health trivia, our letter shares practical clinical updates directly relevant to patients managing kidney health and blood pressure. Each seasonal edition includes notices regarding clinic opening hours and holiday schedules, an educational column from our renal dietitian Priya Nair offering seasonal dietary guidance, and timely announcements regarding autumn flu vaccination clinics and pneumonia immunization dates. The letter is published in January, April, July, and October, providing a calm point of connection between your scheduled clinic appointments without cluttering your inbox.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">How to Subscribe</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Subscribing to our clinic letter is completely free and open to current patients, family members, and inquiring individuals alike. To join the mailing list, enter your preferred email address into our subscription form or email care@seimyaku-clinic.example with the subject line 'Clinic letter'. Depending on your browser settings, submitting the form opens your standard email application; simply send the pre-addressed message to confirm your request, as you are not subscribed until that confirmation is dispatched. We never share subscriber addresses with third parties, and every email letter contains an immediate one-click unsubscribe mechanism. You may also pick up printed copies from our reception desk on Alder Row.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sz-formsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-formsec"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Subscribe</h2>
<!-- /wp:heading -->

<!-- wp:group {"anchor":"subscribe","className":"sz-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group sz-formwrap" id="subscribe"><?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'care@seimyaku-clinic.example',
		'label'   => seimyaku_clinic_t( 'forms_email' ),
		'submit'  => seimyaku_clinic_t( 'forms_subscribe' ),
		'notice'  => seimyaku_clinic_t( 'forms_mail_notice' ),
		'subject' => seimyaku_clinic_t( 'forms_mail_subject' ),
	)
);
?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
