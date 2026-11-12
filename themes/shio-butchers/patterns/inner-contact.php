<?php
/**
 * Title: Inner: Order for pickup
 * Slug: shio-butchers/inner-contact
 * Categories: shio-butchers
 * Keywords: butcher, shop, inner
 * Viewport Width: 1440
 * Description: Contact page: address rail head, the order notes and the contact form slot with the mailto fallback.
 */
?>
<!-- wp:group {"className":"sb-phead","tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sb-phead"><!-- wp:group {"className":"sb-grid","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sb-grid"><!-- wp:html -->
<aside class="sb-rail" aria-label="Find us">
<h2 class="sb-rail__h">Find us</h2>
<ul class="sb-rail__list">
<li class="sb-rail__row sb-rail__row--note"><span class="sb-bullet" aria-hidden="true"></span><span class="sb-rail__label">Address · 14 Market Row, Saltgate</span></li>
<li class="sb-rail__row sb-rail__row--note"><span class="sb-bullet" aria-hidden="true"></span><span class="sb-rail__label">Hours · Tue–Fri 07:30–18:30, Sat 07:00–15:00</span></li>
<li class="sb-rail__row sb-rail__row--note"><span class="sb-bullet" aria-hidden="true"></span><span class="sb-rail__label">Cut-off · orders close 18:00</span></li>
<li class="sb-rail__row sb-rail__row--note"><span class="sb-bullet" aria-hidden="true"></span><span class="sb-rail__label">Phone · +00 0000 2009</span></li>
<li class="sb-rail__row sb-rail__row--note"><span class="sb-bullet" aria-hidden="true"></span><span class="sb-rail__label">Email · orders@shio-butchers.example</span></li>
</ul>
</aside>
<!-- /wp:html -->

<!-- wp:group {"className":"sb-pstage","layout":{"type":"default"}} -->
<div class="wp-block-group sb-pstage"><!-- wp:group {"className":"sb-ppanel","layout":{"type":"default"}} -->
<div class="wp-block-group sb-ppanel"><!-- wp:paragraph {"className":"sb-sub sb-sub--left"} -->
<p class="sb-sub sb-sub--left">ORDER</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sb-ptitle"} -->
<h1 class="wp-block-heading sb-ptitle">Order for pickup</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sb-panel__lead"} -->
<p class="sb-panel__lead">Place your order by 18:00 for collection starting at 07:30 the following opening morning. We cut and wrap your portions right before you arrive, holding them chilled on our pickup shelf.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-pphoto","layout":{"type":"default"}} -->
<div class="wp-block-group sb-pphoto"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sb-pimg"} -->
<figure class="wp-block-image size-full sb-pimg"><img src="<?php echo shio_butchers_img( 'h18-pickup-shelf.webp' ); ?>" alt="Wrapped parcels on the pickup shelf and a hand writing on a blank order pad."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-sec","tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sb-sec"><!-- wp:group {"className":"sb-grid","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sb-grid"><!-- wp:html -->
<aside class="sb-rail" aria-label="Next step">
<h2 class="sb-rail__h">Next step</h2>
<ul class="sb-rail__list">
<li class="sb-rail__row sb-rail__row--note"><span class="sb-bullet" aria-hidden="true"></span><span class="sb-rail__label">Order by 18:00</span></li>
<li class="sb-rail__row sb-rail__row--note"><span class="sb-bullet" aria-hidden="true"></span><span class="sb-rail__label">Confirmed by 19:00</span></li>
<li class="sb-rail__row sb-rail__row--note"><span class="sb-bullet" aria-hidden="true"></span><span class="sb-rail__label">Pick up from 07:30</span></li>
</ul>
</aside>
<!-- /wp:html -->

<!-- wp:group {"className":"sb-main-col sb-formcol","layout":{"type":"default"}} -->
<div class="wp-block-group sb-main-col sb-formcol"><!-- wp:group {"className":"sb-title","layout":{"type":"default"}} -->
<div class="wp-block-group sb-title"><!-- wp:paragraph {"className":"sb-sub"} -->
<p class="sb-sub">ORDER</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Order for pickup</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">How do you submit and pay for your pickup order?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>To submit an order, enter your name, email, phone number, preferred pickup day, and the cuts and approximate weights you require into our online order form, or send an email to orders@shio-butchers.example. Hanna Sørlie will review your request and send a written confirmation by 19:00 with estimated weights. At 07:00 the next morning, our butchers slice and weigh your selection on the block to within 10 g, wrap it in waxed butcher paper, and tie it with cotton string. You do not pay online. Payment is handled in person at our counter when you pick up your parcel, calculated from the final weighed total using either debit card, credit card, or cash.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sb-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group sb-formbox"><!-- wp:html -->
<?php
ob_start(); ?>
<div class="wp-block-buttons sb-btns"><div class="wp-block-button is-style-double"><a class="wp-block-button__link wp-element-button" href="mailto:orders@shio-butchers.example"><?php echo esc_html( shio_butchers_t( 'contact_email' ) ); ?></a></div></div>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">When and where can you collect your order?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Collection takes place at our shop at 14 Market Row, Saltgate. Our opening hours are Tuesday through Friday from 07:30 to 18:30, and Saturday from 07:00 to 15:00. We remain closed on Sunday and Monday for carcass delivery and butchery. Orders placed before our daily 18:00 cut-off are prepared for morning collection beginning at 07:30 Tuesday through Friday, or from 07:00 on Saturday for orders submitted Friday evening. Once packed, your parcel is transferred to our dedicated 2 °C chilled shelf and held safely until the end of business on your pickup day. If you have questions regarding your order, call us directly on +00 0000 2009 or email orders@shio-butchers.example.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
