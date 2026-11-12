<?php
/**
 * Title: Inner: contact the fair office
 * Slug: kikai-fair/inner-contact
 * Categories: kikai-fair
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kf-phead kf-lattice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-phead kf-lattice"><!-- wp:group {"align":"wide","className":"kf-phead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-phead__in"><!-- wp:paragraph {"className":"kf-eyebrow"} -->
<p class="kf-eyebrow">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kf-phead__h"} -->
<h1 class="wp-block-heading kf-phead__h">Contact the Fair Office</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kf-phead__lead"} -->
<p class="kf-phead__lead">The Kikai Fair Office assists trade visitors, participating exhibitors, and press representatives with all operational queries. Contact our Lindmark administration team between Monday and Friday from 09:00 to 17:00.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"office","className":"kf-value kf-value--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-value kf-value--inner" id="office"><!-- wp:group {"align":"wide","className":"kf-value__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-value__in"><!-- wp:group {"className":"kf-value__text","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__text"><!-- wp:group {"className":"kf-num","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group kf-num"><!-- wp:paragraph {"className":"kf-vlabel"} -->
<p class="kf-vlabel">Part</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kf-numeral"} -->
<p class="kf-numeral">01</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"kf-value__h"} -->
<h2 class="wp-block-heading kf-value__h">Where is the Kikai Fair Office located and when is it open?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The administrative headquarters of Kikai Fair is located at Kikai Fair Office, 3rd floor, 40 Quay Street, Lindmark. Our team is available from Monday to Friday between 09:00 and 17:00 to handle phone and written correspondence. You can direct general inquiries by email to hello@kikaifair.example. The actual exhibition takes place at Hall 4, Riverside Exhibition Centre, located at 12 Harbour Road in Lindmark. For freight shipments, exhibitor stand build-up begins on Monday 8 March 2027 from 07:00 to 20:00, with public opening days running from Tuesday 9 March through Thursday 11 March 2027.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="kf-facts kf-facts--stack"><li><b>Office</b><span>Kikai Fair Office, 3rd floor, 40 Quay Street, Lindmark</span></li><li><b>Hours</b><span>Monday to Friday, 09:00–17:00</span></li><li><b>Email</b><span><a href="mailto:hello@kikaifair.example">hello@kikaifair.example</a></span></li></ul>
<!-- /wp:html -->

<!-- wp:html -->
<?php
ob_start(); ?>
<a class="wp-element-button" href="mailto:hello@kikaifair.example"><?php echo esc_html( kikai_fair_t( 'contact_email' ) ); ?></a>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kf-value__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__photo sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="kf-photo"><img src="<?php echo kikai_fair_img( 'v01-hall-aisle.webp' ); ?>" alt="Elevated view of a wide hall aisle with running machines and trade visitors" width="1600" height="1067" loading="lazy"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"people","className":"kf-news kf-news--people","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-news kf-news--people" id="people"><!-- wp:heading {"className":"kf-news__h"} -->
<h2 class="wp-block-heading kf-news__h">Who should I contact for visitor passes, stand bookings, or press inquiries?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kf-news__lead"} -->
<p class="kf-news__lead">To ensure your query is handled efficiently, our office maintains three designated departmental coordinators. For visitor passes, ticketing questions, and apprentice group registrations, contact Aiyana Brooks in visitor services. For stand space reservations, shell scheme stand bookings, and Demo Stage slots, contact Tomás Ferreira, our exhibitor relations lead. For press accreditation, editorial interviews, and official trade partnerships, contact Fair Director Mira Halvorsen. All three department heads can be reached through our central email address at hello@kikaifair.example or by visiting our office at 40 Quay Street during standard business hours.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="kf-contacts"><div class="kf-person"><span class="kf-person__k">Visitors and passes</span><b class="kf-person__n">Aiyana Brooks</b><span class="kf-person__r">Visitor services</span><a href="mailto:hello@kikaifair.example?subject=Visitor%20question">hello@kikaifair.example</a></div><div class="kf-person"><span class="kf-person__k">Stands and Demo Stage</span><b class="kf-person__n">Tomás Ferreira</b><span class="kf-person__r">Exhibitor relations lead</span><a href="mailto:hello@kikaifair.example?subject=Exhibitor%20question">hello@kikaifair.example</a></div><div class="kf-person"><span class="kf-person__k">Press and partners</span><b class="kf-person__n">Mira Halvorsen</b><span class="kf-person__r">Fair director</span><a href="mailto:hello@kikaifair.example?subject=Press%20enquiry">hello@kikaifair.example</a></div></div>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kf-value kf-value--inner kf-lattice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-value kf-value--inner kf-lattice"><!-- wp:group {"align":"wide","className":"kf-value__in kf-value__in--stack","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-value__in kf-value__in--stack"><!-- wp:group {"className":"kf-value__text","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__text"><!-- wp:heading {"className":"kf-value__h"} -->
<h2 class="wp-block-heading kf-value__h">How should pass requests and urgent inquiries be submitted?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Visitors seeking entry passes should complete their pass request well before the online deadline of Sunday 21 February 2027. Once submitted, pass confirmations and QR codes are distributed via email within two working days. If you are contacting our office regarding emergency floor access, electrical power requirements, or heavy machine unloading for the Monday 8 March build-up, specify your stand number and machine specifications in your message subject line. Floor safety officer Kwame Asante and our operational staff review all technical space submissions to coordinate prompt clearance.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
