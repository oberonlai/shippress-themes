<?php
/**
 * Title: Page: Contact
 * Slug: komorebi-cabins/page-contact
 * Categories: komorebi-cabins
 * Viewport Width: 1440
 * Description: Plain greige head with a vertical kicker, contact details and the contact form slot with a mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-head kc-head--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-head kc-head--plain"><!-- wp:group {"className":"kc-head__gutter","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head__gutter"><!-- wp:paragraph {"className":"kc-head__kicker"} -->
<p class="kc-head__kicker">We reply within one working day</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"kc-head__h1"} -->
<h1 class="wp-block-heading kc-head__h1">Contact</h1>
<!-- /wp:heading --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-intro-in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-intro-in"><!-- wp:paragraph {"className":"kc-lead kc-pintro"} -->
<p class="kc-lead kc-pintro">We are on hand seven days a week at the woodshed office to answer questions regarding cabin availability and travel. We reply to all email inquiries within one working day.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-list kc-details","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-list kc-details"><!-- wp:group {"className":"kc-list__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-list__in"><!-- wp:group {"className":"kc-titlebar","layout":{"type":"default"}} -->
<div class="wp-block-group kc-titlebar"><!-- wp:heading {"level":2,"className":"kc-title"} -->
<h2 class="wp-block-heading kc-title">Reach the office</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-bracket"} -->
<p class="kc-bracket">[ every day ]</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ruled kc-details","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled kc-details"><!-- wp:group {"className":"kc-ruled__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled__row"><!-- wp:paragraph {"className":"kc-ruled__k"} -->
<p class="kc-ruled__k">Email</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-ruled__v"} -->
<p class="kc-ruled__v">stay@komorebi-cabins.example</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ruled__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled__row"><!-- wp:paragraph {"className":"kc-ruled__k"} -->
<p class="kc-ruled__k">Phone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-ruled__v"} -->
<p class="kc-ruled__v">+44 1632 960 418</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ruled__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled__row"><!-- wp:paragraph {"className":"kc-ruled__k"} -->
<p class="kc-ruled__k">Calls</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-ruled__v"} -->
<p class="kc-ruled__v">daily 08:30–19:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ruled__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled__row"><!-- wp:paragraph {"className":"kc-ruled__k"} -->
<p class="kc-ruled__k">We reply</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-ruled__v"} -->
<p class="kc-ruled__v">within one working day</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"write","className":"kc-formsec","layout":{"type":"default"}} -->
<section id="write" class="wp-block-group alignfull kc-formsec"><!-- wp:group {"className":"kc-formsec__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-formsec__in"><!-- wp:group {"className":"kc-formsec__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-formsec__text"><!-- wp:heading {"level":2,"className":"kc-sec__h"} -->
<h2 class="wp-block-heading kc-sec__h">Write to us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Questions about the cabins, a group, the way here or anything else. Tell us how we can reach you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-formsec__form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-formsec__form"><?php
ob_start(); ?>
<!-- wp:buttons {"className":"kc-buttons"} -->
<div class="wp-block-buttons kc-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:stay@komorebi-cabins.example?subject=<?php echo rawurlencode( komorebi_cabins_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( komorebi_cabins_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kc-note"} -->
<p class="kc-note"><?php echo esc_html( komorebi_cabins_t( 'forms_contact_hint' ) ); ?></p>
<!-- /wp:paragraph -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec"><!-- wp:group {"className":"kc-sec__in sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__in sp-stagger"><!-- wp:heading {"level":2,"className":"kc-sec__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-sec__h sp-reveal sp-reveal--up">How can you get in touch with our office?</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-sec__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__body"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up">Our team operates from the woodshed office located at Larch Gate on Gravel Lane in Hollin Vale. You can reach us by email at stay@komorebi-cabins.example or by telephone at +44 1632 960 418. Telephone calls are answered daily between eight-thirty and nineteen o'clock, covering booking inquiries, arrival updates, and general information about the village. Written inquiries received through our contact form or via email are reviewed by Amira Haddad and answered within one working day. Whether you have questions regarding cabin layouts, bringing a dog to Fern or Beech, or arranging arrival assistance from the Larch Gate bus stop, we are glad to provide clear, practical answers to help you prepare for your stay.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec"><!-- wp:group {"className":"kc-sec__in sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__in sp-stagger"><!-- wp:heading {"level":2,"className":"kc-sec__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-sec__h sp-reveal sp-reveal--up">How do office hours and inquiries work?</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-sec__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__body"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up">The woodshed office opens every morning at eight-thirty and closes at nineteen o'clock in the evening. If you are inquiring about holding a weekend, please mention your preferred cabin size, your exact dates, the number of guests in your party, and whether you plan to bring a dog. While online hold requests and emails can be sent at any time, in-person assistance and telephone support end at nineteen o'clock when our office closes for the evening. If you require emergency assistance during your stay, instructions and direct contact details are posted on the inside of every cabin entrance door. For all routine matters, including route advice, extra firewood requests, and local walk suggestions, please reach out during regular daily office hours.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
