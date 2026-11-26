<?php
/**
 * Title: Inner: Newsletter
 * Slug: kaoru-cocoa/page-newsletter
 * Categories: kaoru-cocoa
 * Keywords: newsletter, letter, subscribe
 * Viewport Width: 1440
 * Description: Newsletter page: what the monthly letter holds, a standalone email subscribe form that works without a plugin, and how it is delivered.
 */
?>
<!-- wp:group {"align":"full","className":"kc-hero kc-ihead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-hero kc-ihead"><!-- wp:group {"className":"kc-window","layout":{"type":"default"}} -->
<div class="wp-block-group kc-window"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-window__photo kc-ihead__photo"} -->
<figure class="wp-block-image size-full kc-window__photo kc-ihead__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-cocoa.webp' ) ); ?>" alt="A cup of warm drinking cocoa on a white saucer resting upon pale marble."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-strips","layout":{"type":"default"}} -->
<div class="wp-block-group kc-strips"><!-- wp:paragraph {"className":"kc-strip kc-strip--1"} -->
<p class="kc-strip kc-strip--1">Once a month</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-strip kc-strip--2"} -->
<p class="kc-strip kc-strip--2">New origins</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-strip kc-strip--3"} -->
<p class="kc-strip kc-strip--3">Cake calendar</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__text kc-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__text kc-ihead__text"><!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-h1--in"} -->
<h1 class="wp-block-heading kc-h1 kc-h1--in">One Letter a Month</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-lede"} -->
<p class="kc-lede">Once a month, we write a short letter about the new origins arriving on our slab, our upcoming cake calendar, and dates for seated tastings. We never send more than one issue per month, keeping our notes quiet and focused.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kc-isec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-isec"><!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2">What we share in our monthly dispatch</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body">Our monthly letter is a quiet chronicle of life inside 14 Linden Arcade. Each issue highlights the arrival of new bean harvests from our five partner growers—Alto Sereno, Río Claro Growers, Monte Ceiba, Bahía Verde, and Ridgeway Estate—describing how each origin behaves on Noor Halvorsen's marble slab. We also publish Adaeze Okafor's seasonal cake calendar so you can plan weekend celebration orders in advance, along with newly opened dates for Priya Raman's weekend seated tastings. In addition, we share brief making notes on roasting profiles, humidity adjustments, and the evolving flavours of our single-origin chocolates, keeping you connected to the rhythm of our workshop.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","anchor":"subscribe","className":"kc-isec kc-isec--wide","layout":{"type":"default"}} -->
<div id="subscribe" class="wp-block-group alignfull kc-isec kc-isec--wide"><!-- wp:group {"className":"kc-letter__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__panel"><!-- wp:group {"className":"kc-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__text"><!-- wp:heading {"level":2,"className":"kc-letter__title"} -->
<h2 class="wp-block-heading kc-letter__title">Ask for the letter</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body">Enter your email address and send the request. It opens your email app; you are not subscribed until we reply.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@kaoru-cocoa.example',
	'label'   => kaoru_cocoa_t( 'forms_email' ),
	'submit'  => kaoru_cocoa_t( 'forms_subscribe' ),
	'notice'  => kaoru_cocoa_t( 'forms_mail_notice' ),
	'subject' => kaoru_cocoa_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kc-isec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-isec"><!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2">Quiet delivery and how to subscribe</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body">We respect your inbox and believe communication should remain thoughtful and unhurried. We publish at most one letter per calendar month, with no unexpected promotional emails or commercial advertising. To subscribe, enter your email address into our newsletter form or send a brief message to hello@kaoru-cocoa.example with the subject line Making-day letter: subscribe. This opens your email application with our address pre-filled. Please send the message to request the letter; you are not subscribed until we manually verify your address and reply. We confirm all subscriptions within one working day, and you may easily unsubscribe at any time by sending a one-line reply.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
