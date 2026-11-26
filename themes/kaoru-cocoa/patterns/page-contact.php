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
<figure class="wp-block-image size-full kc-window__photo kc-ihead__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/visit-counter.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'a2dcae506' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-strips","layout":{"type":"default"}} -->
<div class="wp-block-group kc-strips"><!-- wp:paragraph {"className":"kc-strip kc-strip--1"} -->
<p class="kc-strip kc-strip--1"><?php echo wp_kses_post( kaoru_cocoa_t( 'k786e3cc6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-strip kc-strip--2"} -->
<p class="kc-strip kc-strip--2"><?php echo wp_kses_post( kaoru_cocoa_t( 'ka2ff15ea' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-strip kc-strip--3"} -->
<p class="kc-strip kc-strip--3"><?php echo wp_kses_post( kaoru_cocoa_t( 'k0f33119d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__text kc-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__text kc-ihead__text"><!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label"><?php echo wp_kses_post( kaoru_cocoa_t( 'kbbaff128' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-h1--in"} -->
<h1 class="wp-block-heading kc-h1 kc-h1--in"><?php echo wp_kses_post( kaoru_cocoa_t( 'k24c52b8e' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-lede"} -->
<p class="kc-lede"><?php echo wp_kses_post( kaoru_cocoa_t( 'k956e6f10' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","anchor":"write","className":"kc-isec kc-isec--wide","layout":{"type":"default"}} -->
<div id="write" class="wp-block-group alignfull kc-isec kc-isec--wide"><!-- wp:group {"className":"kc-pgrid kc-pgrid--contact","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pgrid kc-pgrid--contact"><!-- wp:group {"className":"kc-pgrid__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pgrid__text"><!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2"><?php echo wp_kses_post( kaoru_cocoa_t( 'k68a97e8a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-address"} -->
<p class="kc-address"><?php echo wp_kses_post( kaoru_cocoa_t( 'k98ecdea4' ) ); ?><br><?php echo wp_kses_post( kaoru_cocoa_t( 'kc0cf9a33' ) ); ?><br>+00 44 555 0173<br><a href="mailto:hello@kaoru-cocoa.example"><?php echo wp_kses_post( kaoru_cocoa_t( 'k1fea2a21' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo wp_kses_post( kaoru_cocoa_t( 'k70d92aa3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-pgrid__card kc-pgrid__form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pgrid__card kc-pgrid__form"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo wp_kses_post( kaoru_cocoa_t( 'k7c575dd8' ) ); ?></h3>
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
<h2 class="wp-block-heading kc-h2"><?php echo wp_kses_post( kaoru_cocoa_t( 'ka97d928f' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo wp_kses_post( kaoru_cocoa_t( 'k72c3009c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns"><!-- wp:button {"className":"kc-btn kc-btn--primary"} -->
<div class="wp-block-button kc-btn kc-btn--primary"><a class="wp-block-button__link wp-element-button" href="/tasting/#book"><?php echo wp_kses_post( kaoru_cocoa_t( 'k6f917d2c' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"kc-btn kc-btn--pill"} -->
<div class="wp-block-button kc-btn kc-btn--pill"><a class="wp-block-button__link wp-element-button" href="/cake-orders/#order"><?php echo wp_kses_post( kaoru_cocoa_t( 'k517d583c' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
