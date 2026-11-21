<?php
/**
 * Title: Page: Ask about a date
 * Slug: enkai-rooms/pg-ask-about-a-date
 * Categories: enkai-rooms
 * Inserter: no
 * Viewport Width: 1440
 * Description: The one way to book a private room
 */
?>
<!-- wp:group {"align":"full","className":"er-titleband sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-titleband sp-reveal sp-reveal--up"><!-- wp:heading {"level":1,"className":"er-titleband__h"} -->
<h1 class="wp-block-heading er-titleband__h">Ask about a date</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"er-titleband__sub"} -->
<p class="er-titleband__sub">One form · One reply within a working day</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"er-menus","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-menus"><!-- wp:group {"className":"er-wrap er-ask-page sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group er-wrap er-ask-page sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"er-label er-label--light"} -->
<p class="er-label er-label--light">The enquiry</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Tell us about your evening</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Give us the date you have in mind, the room you would like, how many of you there will be and a phone number. Aiyana Reyes replies within one working day and holds the room for 7 days while you choose the menu.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"er-form-slot","layout":{"type":"default"}} -->
<div class="wp-block-group er-form-slot"><?php
$fallback = '<div class="wp-block-buttons er-ask__btn"><div class="wp-block-button er-btn"><a class="wp-block-button__link wp-element-button" href="mailto:rooms@enkai-rooms.example?subject=' . rawurlencode( enkai_rooms_t( 'ask_mail_subject' ) ) . '">' . esc_html( enkai_rooms_t( 'ask_email_button' ) ) . '</a></div></div><p class="er-ask__note">' . esc_html( enkai_rooms_t( 'forms_contact_note' ) ) . '</p>';
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"er-ask__contact"} -->
<p class="er-ask__contact"><a href="mailto:rooms@enkai-rooms.example">rooms@enkai-rooms.example</a> · +00 31 555 0186<br>Events office Tuesday to Saturday, 10:00–18:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"er-rooms er-dark","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-rooms er-dark"><!-- wp:group {"className":"er-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group er-wrap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"er-label"} -->
<p class="er-label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Hours and contacts</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"er-ledger","layout":{"type":"default"}} -->
<div class="wp-block-group er-ledger"><!-- wp:group {"className":"er-row","layout":{"type":"default"}} -->
<div class="wp-block-group er-row"><!-- wp:paragraph {"className":"er-row__l"} -->
<p class="er-row__l">Address</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"er-row__v"} -->
<p class="er-row__v">14 Harbour Steps, Calder</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"er-row","layout":{"type":"default"}} -->
<div class="wp-block-group er-row"><!-- wp:paragraph {"className":"er-row__l"} -->
<p class="er-row__l">Phone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"er-row__v"} -->
<p class="er-row__v">+00 31 555 0186</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"er-row","layout":{"type":"default"}} -->
<div class="wp-block-group er-row"><!-- wp:paragraph {"className":"er-row__l"} -->
<p class="er-row__l">Email</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"er-row__v"} -->
<p class="er-row__v">rooms@enkai-rooms.example</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"er-row","layout":{"type":"default"}} -->
<div class="wp-block-group er-row"><!-- wp:paragraph {"className":"er-row__l"} -->
<p class="er-row__l">Dinner</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"er-row__v"} -->
<p class="er-row__v">Tuesday to Saturday, 18:00–23:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"er-row","layout":{"type":"default"}} -->
<div class="wp-block-group er-row"><!-- wp:paragraph {"className":"er-row__l"} -->
<p class="er-row__l">Private lunches</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"er-row__v"} -->
<p class="er-row__v">Saturday and Sunday, 12:00–15:30</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"er-row","layout":{"type":"default"}} -->
<div class="wp-block-group er-row"><!-- wp:paragraph {"className":"er-row__l"} -->
<p class="er-row__l">Events office</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"er-row__v"} -->
<p class="er-row__v">Tuesday to Saturday, 10:00–18:00; closed Monday</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"er-explore","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-explore"><!-- wp:group {"className":"er-tiles sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group er-tiles sp-stagger"><!-- wp:group {"className":"er-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group er-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04-garden-room.webp' ) ); ?>" alt="View through an open wooden doorway into the Garden Room set for dinner."/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"er-tile__l"} -->
<p class="er-tile__l"><a href="/rooms/">Rooms<span class="er-arrow"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group er-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-first-course.webp' ) ); ?>" alt="Steaming seasonal first course served in a dark ceramic stoneware bowl on black ground."/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"er-tile__l"} -->
<p class="er-tile__l"><a href="/menus/">Menus<span class="er-arrow"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group er-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-toast.webp' ) ); ?>" alt="Hands raising glassware in a toast over a long candlelit private dining table."/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"er-tile__l"} -->
<p class="er-tile__l"><a href="/weddings/">Weddings<span class="er-arrow"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group er-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-plating.webp' ) ); ?>" alt="Head chef plating dishes under glowing pass heat lamps."/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"er-tile__l"} -->
<p class="er-tile__l"><a href="/company-dinners/">Company dinners<span class="er-arrow"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
