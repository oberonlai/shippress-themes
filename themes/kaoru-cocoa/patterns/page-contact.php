<?php
/**
 * Title: Inner: Contact
 * Slug: kaoru-cocoa/page-contact
 * Categories: kaoru-cocoa
 * Keywords: contact, address, form
 * Viewport Width: 1440
 * Description: Contact page: address, phone and hours beside the contact form slot with an email fallback, and where to book a tasting or order a cake.
 */
?>
<!-- wp:group {"align":"full","className":"kc-hero kc-ihead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-hero kc-ihead"><!-- wp:group {"className":"kc-window","layout":{"type":"default"}} -->
<div class="wp-block-group kc-window"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-window__photo kc-ihead__photo"} -->
<figure class="wp-block-image size-full kc-window__photo kc-ihead__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/visit-counter.webp' ) ); ?>" alt="Bright shop interior showing the pale wooden counter, glass screen and marble slab."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-strips","layout":{"type":"default"}} -->
<div class="wp-block-group kc-strips"><!-- wp:paragraph {"className":"kc-strip kc-strip--1"} -->
<p class="kc-strip kc-strip--1">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-strip kc-strip--2"} -->
<p class="kc-strip kc-strip--2">One working day</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-strip kc-strip--3"} -->
<p class="kc-strip kc-strip--3">Linden Arcade</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__text kc-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__text kc-ihead__text"><!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-h1--in"} -->
<h1 class="wp-block-heading kc-h1 kc-h1--in">Contact the Shop</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-lede"} -->
<p class="kc-lede">For questions, private inquiries, or custom cake arrangements, please get in touch with our team at Linden Arcade. We read every message carefully and reply within one working day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","anchor":"write","className":"kc-isec kc-isec--wide","layout":{"type":"default"}} -->
<div id="write" class="wp-block-group alignfull kc-isec kc-isec--wide"><!-- wp:group {"className":"kc-pgrid kc-pgrid--contact","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pgrid kc-pgrid--contact"><!-- wp:group {"className":"kc-pgrid__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pgrid__text"><!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2">Shop address, opening hours, and direct lines</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-address"} -->
<p class="kc-address">14 Linden Arcade<br>Harrowfield<br>+00 44 555 0173<br><a href="mailto:hello@kaoru-cocoa.example">hello@kaoru-cocoa.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body">Kaoru Cocoa is located at 14 Linden Arcade in Harrowfield. You can reach our counter team by telephone at +00 44 555 0173 or by writing directly to hello@kaoru-cocoa.example. Our shop is open Tuesday through Sunday from 09:00 to 18:00, and closed on Mondays. Whether you have a question about our roasting schedule, require ingredient clarification for allergies, or want to check table availability for counter flights, we are delighted to assist. We monitor our inbox throughout the working week and respond to every written inquiry within one working day. You are also welcome to speak with Priya Raman or Sofia Marchetti directly at our counter.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-pgrid__card kc-pgrid__form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pgrid__card kc-pgrid__form"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title">Write to the shop</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-form"><?php
ob_start(); ?>
<div class="wp-block-buttons kc-btns"><div class="wp-block-button kc-btn kc-btn--primary"><a class="wp-block-button__link wp-element-button" href="mailto:hello@kaoru-cocoa.example?subject=<?php echo rawurlencode( kaoru_cocoa_t( 'contact_mail_subject' ) ); ?>"><?php echo esc_html( kaoru_cocoa_t( 'contact_email_button' ) ); ?></a></div></div>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kc-isec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-isec"><!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2">Booking tastings and placing cake orders</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body">If you wish to reserve seats for our forty-five-minute seated chocolate tasting, please use the booking form on our dedicated tasting page or email hello@kaoru-cocoa.example with your preferred day from Thursday to Sunday, your chosen time slot of 11:00, 14:00, or 16:00, and your guest count up to six. For whole cake orders, please visit our cake orders page or write to us specifying your chosen recipe, your size choice of eighteen or twenty-two centimetres, your collection day from Friday to Sunday between 11:00 and 17:00, and your custom plaque inscription. Remember to place cake orders at least three days ahead.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns"><!-- wp:button {"className":"kc-btn kc-btn--primary"} -->
<div class="wp-block-button kc-btn kc-btn--primary"><a class="wp-block-button__link wp-element-button" href="/tasting/#book">Book a tasting</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"kc-btn kc-btn--pill"} -->
<div class="wp-block-button kc-btn kc-btn--pill"><a class="wp-block-button__link wp-element-button" href="/cake-orders/#order">Order a cake</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
