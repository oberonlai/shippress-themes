<?php
/**
 * Title: Contact: details and form
 * Slug: enban-records/contact-main
 * Categories: enban-records
 * Inserter: no
 * Description: Contact: head card, address and hours beside the contact form slot (a mailto button when no form plugin is active), booking and selling routes, and the in-person note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec eb-sec--first eb-sec--head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec eb-sec--first eb-sec--head"><!-- wp:group {"className":"eb-phead","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead"><!-- wp:group {"className":"eb-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead__text"><!-- wp:paragraph {"className":"eb-eyebrow"} -->
<p class="eb-eyebrow">Write to the shop</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"eb-h1 eb-phead__title"} -->
<h1 class="wp-block-heading eb-h1 eb-phead__title">Contact</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-lede"} -->
<p class="eb-lede">Get in touch with Enban Records to inquire about records, schedule a listening desk session, or discuss selling a collection.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-phead__card sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead__card sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo enban_records_img( 'wall-sleeves.webp' ); ?>" alt="Two square record sleeves with abstract artwork stood on a narrow oak ledge against a lilac-grey plaster wall."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"reach","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec" id="reach"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Reaching the shop in Easterby</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Address, hours, a form</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-contact","layout":{"type":"default"}} -->
<div class="wp-block-group eb-contact"><!-- wp:group {"className":"eb-contact__info","layout":{"type":"default"}} -->
<div class="wp-block-group eb-contact__info"><!-- wp:paragraph -->
<p>We welcome your enquiries whether you are looking for a specific pressing, planning a visit, or arranging to sell a shelf of vinyl. Enban Records is located at 7 Weir Lane, Halden Row, Easterby. You can reach our counter by telephone at +00 41 555 0147 during our regular opening hours, Wednesday through Sunday from 11:00 to 19:00.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"eb-hours","layout":{"type":"default"}} -->
<div class="wp-block-group eb-hours"><!-- wp:group {"className":"eb-hours__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group eb-hours__row"><!-- wp:paragraph {"className":"eb-hours__d"} -->
<p class="eb-hours__d">Address</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-hours__t"} -->
<p class="eb-hours__t">7 Weir Lane, Halden Row, Easterby</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-hours__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group eb-hours__row"><!-- wp:paragraph {"className":"eb-hours__d"} -->
<p class="eb-hours__d">Email</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-hours__t"} -->
<p class="eb-hours__t"><a href="mailto:hello@enban-records.example">hello@enban-records.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-hours__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group eb-hours__row"><!-- wp:paragraph {"className":"eb-hours__d"} -->
<p class="eb-hours__d">Telephone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-hours__t"} -->
<p class="eb-hours__t">+00 41 555 0147</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-hours__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group eb-hours__row"><!-- wp:paragraph {"className":"eb-hours__d"} -->
<p class="eb-hours__d">Open</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-hours__t"} -->
<p class="eb-hours__t">Wednesday to Sunday, 11:00–19:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-hours__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group eb-hours__row"><!-- wp:paragraph {"className":"eb-hours__d"} -->
<p class="eb-hours__d">Replies</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-hours__t"} -->
<p class="eb-hours__t">Within one working day</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group eb-contact__form"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Send a message</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"eb-formwrap","layout":{"type":"constrained"},"anchor":"write"} -->
<div class="wp-block-group eb-formwrap" id="write"><?php
ob_start();
?>
<a class="wp-element-button" href="mailto:hello@enban-records.example<?php echo ''; ?>"><?php echo esc_html( enban_records_t( 'contact_email_button' ) ); ?></a>
<?php
$eb_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $eb_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?>
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"eb-note"} -->
<p class="eb-note">If you prefer to write, you can send an email to hello@enban-records.example or use our direct contact form. We read all incoming correspondence carefully and reply to all booking and selling messages within one working day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Inquiries for listening and selling</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Booking or selling</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-prose","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-prose"><!-- wp:paragraph -->
<p>To streamline your request, please let us know how we can best assist you. If you are writing to book a forty-five-minute listening desk slot, please specify your preferred day from Wednesday to Sunday, your desired hour at 13:00, 14:00, 15:00, or 16:00, and up to three albums or musical styles you enjoy.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If you are inquiring about selling records or requesting an in-home shelf valuation within fifteen kilometres, please include a general estimate of the number of discs, predominant genres, and overall condition. Ines Valdane or Kofi Asante-Lind will respond with valuation availability promptly.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-end eb-end--two","layout":{"type":"default"}} -->
<div class="wp-block-group eb-end eb-end--two"><!-- wp:buttons {"className":"eb-boxrow"} -->
<div class="wp-block-buttons eb-boxrow"><!-- wp:button {"className":"is-style-eb-box eb-box--240"} -->
<div class="wp-block-button is-style-eb-box eb-box--240"><a class="wp-block-button__link wp-element-button" href="/listening/">Request a listening</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"eb-boxrow"} -->
<div class="wp-block-buttons eb-boxrow"><!-- wp:button {"className":"is-style-eb-box eb-box--240"} -->
<div class="wp-block-button is-style-eb-box eb-box--240"><a class="wp-block-button__link wp-element-button" href="/selling/">Sell a shelf</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Visiting our counter in person</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">No appointment needed</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-prose","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-prose"><!-- wp:paragraph -->
<p>You do not need an appointment to visit our shop, browse our 6,000 bins, or examine today's 17:00 arrival crate. Our oak counter is staffed Wednesday through Sunday, with Ines Valdane, Kofi Asante-Lind, Mira Lindqvist, Rafael Ortega, and June Park ready to answer questions, play records, or inspect discs brought in for our ultrasonic cleaning service.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Whether you are stepping off the train at Easterby Central or cycling down Weir Lane, our doors are open to help you listen first and discover music at an unhurried pace.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-end","layout":{"type":"default"}} -->
<div class="wp-block-group eb-end"><!-- wp:buttons {"className":"eb-boxrow"} -->
<div class="wp-block-buttons eb-boxrow"><!-- wp:button {"className":"is-style-eb-box eb-box--330"} -->
<div class="wp-block-button is-style-eb-box eb-box--330"><a class="wp-block-button__link wp-element-button" href="/visit/">Plan a visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
