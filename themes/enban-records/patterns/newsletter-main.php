<?php
/**
 * Title: Newsletter: the Friday letter
 * Slug: enban-records/newsletter-main
 * Categories: enban-records
 * Inserter: no
 * Description: Newsletter page: head card, the subscribe form slot (email and submit with a disclosed mail fallback), what the letter holds, sample subject lines and privacy.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec eb-sec--first eb-sec--head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec eb-sec--first eb-sec--head"><!-- wp:group {"className":"eb-phead","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead"><!-- wp:group {"className":"eb-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead__text"><!-- wp:paragraph {"className":"eb-eyebrow"} -->
<p class="eb-eyebrow">One email, Friday 10:00</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"eb-h1 eb-phead__title"} -->
<h1 class="wp-block-heading eb-h1 eb-phead__title">The Friday letter</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-lede"} -->
<p class="eb-lede">Sent every Friday at 10:00, our short weekly newsletter brings the week's crate arrivals and desk reflections directly to your inbox.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-phead__card sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead__card sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo enban_records_img( 'window-shelves.webp' ); ?>" alt="Window light falling across wooden record shelves in a quiet shop."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"form","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec" id="form"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Subscribe</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Email and one button</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-letter__form eb-letter__form--light","layout":{"type":"constrained"},"anchor":"subscribe"} -->
<div class="wp-block-group eb-letter__form eb-letter__form--light" id="subscribe"><?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'hello@enban-records.example',
		'label'   => enban_records_t( 'forms_email' ),
		'submit'  => enban_records_t( 'forms_subscribe' ),
		'notice'  => enban_records_t( 'forms_mail_notice' ),
		'subject' => enban_records_t( 'forms_mail_subject' ),
	)
);
?>
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">What you receive every Friday</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Three things, three minutes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"eb-intro"} -->
<p class="eb-intro">The Friday letter is a single, concise email sent promptly every Friday at 10:00, written by June Park from the shop counter. We respect your attention and never send marketing blasts or promotional clutter. Each dispatch covers three specific topics: an advance overview of the records entering today's 17:00 crate, a single spotlight on an exceptional record heard at our listening desk during the week, and a confirmation of the coming week's shop hours and desk availability.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"eb-lrows","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrows"><!-- wp:group {"className":"eb-lrow","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow"><!-- wp:group {"className":"eb-lrow__title","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__title"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">The 17:00 crate</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-for"} -->
<p class="eb-for">Item one</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__body"><!-- wp:paragraph -->
<p>An advance overview of the records entering today's 17:00 crate.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrow","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow"><!-- wp:group {"className":"eb-lrow__title","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__title"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">One record from the desk</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-for"} -->
<p class="eb-for">Item two</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__body"><!-- wp:paragraph -->
<p>A single spotlight on an exceptional record heard at the listening desk during the week.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrow","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow"><!-- wp:group {"className":"eb-lrow__title","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__title"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Next week's hours</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-for"} -->
<p class="eb-for">Item three</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__body"><!-- wp:paragraph -->
<p>A confirmation of the coming week's shop hours and desk availability.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"eb-note"} -->
<p class="eb-note">It is designed to be read in three minutes over morning coffee.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Recent subject lines and desk dispatches</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Four recent subject lines</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"eb-intro"} -->
<p class="eb-intro">Recent editions of the Friday letter give a clear sense of what arrives in our subscribers' inboxes.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"eb-more eb-subjects"} -->
<ul class="wp-block-list eb-more eb-subjects"><!-- wp:list-item -->
<li>The 17:00 crate: Brazilian 7-inches and seaside dub</li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li>On the desk: forty-five minutes with Odile Farrant</li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li>Friday notes: ultrasonic cleaning and weekend desk slots</li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li>New arrivals: spiritual jazz pressings and winter hours</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"eb-note"} -->
<p class="eb-note">Every email focuses on real discs currently spinning in our room at 7 Weir Lane, giving you the first opportunity to review incoming titles before they hit the shop bins on Saturday morning.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">How to subscribe and privacy</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Plain text, once a week</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-prose","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-prose"><!-- wp:paragraph -->
<p>Subscribing to the Friday letter requires only your email address entered in our sign-up box. We never share your contact details, sell data to third parties, or send unsolicited correspondence.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If our website runs without an external mail plugin, clicking subscribe generates a pre-addressed email message to hello@enban-records.example, allowing you to confirm your subscription directly from your own email client. You can unsubscribe at any moment with a single click at the bottom of any dispatch, or by sending a quick note to our counter.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-end","layout":{"type":"default"}} -->
<div class="wp-block-group eb-end"><!-- wp:buttons {"className":"eb-boxrow"} -->
<div class="wp-block-buttons eb-boxrow"><!-- wp:button {"className":"is-style-eb-box eb-box--330"} -->
<div class="wp-block-button is-style-eb-box eb-box--330"><a class="wp-block-button__link wp-element-button" href="/journal/">Read the journal</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
