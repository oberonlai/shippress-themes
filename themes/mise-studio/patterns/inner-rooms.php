<?php
/**
 * Title: Page: Rooms
 * Slug: mise-studio/inner-rooms
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: Rooms page: the grey-bar accordion with nine photographs, a text-only bar and the clearances that are measured.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--head","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--head"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:paragraph {"className":"ms-crumb"} -->
<p class="ms-crumb"><a href="/"><?php echo esc_html( mise_studio_t( 'crumb_home' ) ); ?></a><span class="ms-crumb__sep" aria-hidden="true"> / </span>Rooms</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ms-h1 ms-h1--page"} -->
<h1 class="wp-block-heading ms-h1 ms-h1--page">Rooms a brief covers</h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-headphoto sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ms-headphoto sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-pos-50-45"} -->
<figure class="wp-block-image size-full ms-pos-50-45"><img src="<?php echo mise_studio_img( 'service-band' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_service-band' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<svg class="ms-hero__outline ms-headphoto__outline" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" focusable="false"><polygon points="14,16 56,16 56,28 84,28 84,78 14,78"/></svg>
<!-- /wp:html -->

<!-- wp:group {"className":"ms-headphoto__cap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-headphoto__cap"><!-- wp:paragraph {"className":"ms-headphoto__t"} -->
<p class="ms-headphoto__t"><?php echo esc_html( mise_studio_t( 'rm2_cap1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-headphoto__s"} -->
<p class="ms-headphoto__s"><?php echo esc_html( mise_studio_t( 'rm2_cap2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'rm2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-intro"} -->
<p class="ms-intro"><?php echo esc_html( mise_studio_t( 'rm2_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-bars","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bars"><!-- wp:details {"className":"ms-bar","showContent":true} -->
<details class="wp-block-details ms-bar" open><summary><?php echo esc_html( mise_studio_t( 'rm_b1' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-sheet__intro"} -->
<p class="ms-sheet__intro"><?php echo esc_html( mise_studio_t( 'rm_i1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-thumbs","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumbs"><!-- wp:group {"className":"ms-thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumb"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-thumb__img"} -->
<figure class="wp-block-image size-full ms-thumb__img"><img src="<?php echo mise_studio_img( 'room-hot-line' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_room-hot-line' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ms-thumb__cap"} -->
<p class="ms-thumb__cap"><?php echo esc_html( mise_studio_t( 'cap_room-hot-line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumb"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-thumb__img"} -->
<figure class="wp-block-image size-full ms-thumb__img"><img src="<?php echo mise_studio_img( 'room-pass' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_room-pass' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ms-thumb__cap"} -->
<p class="ms-thumb__cap"><?php echo esc_html( mise_studio_t( 'cap_room-pass' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumb"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-thumb__img"} -->
<figure class="wp-block-image size-full ms-thumb__img"><img src="<?php echo mise_studio_img( 'room-clearances' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_room-clearances' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ms-thumb__cap"} -->
<p class="ms-thumb__cap"><?php echo esc_html( mise_studio_t( 'cap_room-clearances' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ms-faq__a ms-faq__a--after"} -->
<p class="ms-faq__a ms-faq__a--after"><?php echo esc_html( mise_studio_t( 'rm2_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'rm_b2' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-sheet__intro"} -->
<p class="ms-sheet__intro"><?php echo esc_html( mise_studio_t( 'rm_i2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-thumbs","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumbs"><!-- wp:group {"className":"ms-thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumb"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-thumb__img"} -->
<figure class="wp-block-image size-full ms-thumb__img"><img src="<?php echo mise_studio_img( 'room-prep' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_room-prep' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ms-thumb__cap"} -->
<p class="ms-thumb__cap"><?php echo esc_html( mise_studio_t( 'cap_room-prep' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumb"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-thumb__img"} -->
<figure class="wp-block-image size-full ms-thumb__img"><img src="<?php echo mise_studio_img( 'room-pastry' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_room-pastry' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ms-thumb__cap"} -->
<p class="ms-thumb__cap"><?php echo esc_html( mise_studio_t( 'cap_room-pastry' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumb"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-thumb__img"} -->
<figure class="wp-block-image size-full ms-thumb__img"><img src="<?php echo mise_studio_img( 'room-cold' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_room-cold' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ms-thumb__cap"} -->
<p class="ms-thumb__cap"><?php echo esc_html( mise_studio_t( 'cap_room-cold' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ms-faq__a ms-faq__a--after"} -->
<p class="ms-faq__a ms-faq__a--after"><?php echo esc_html( mise_studio_t( 'rm2_b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'rm_b3' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-sheet__intro"} -->
<p class="ms-sheet__intro"><?php echo esc_html( mise_studio_t( 'rm_i3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-thumbs","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumbs"><!-- wp:group {"className":"ms-thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumb"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-thumb__img"} -->
<figure class="wp-block-image size-full ms-thumb__img"><img src="<?php echo mise_studio_img( 'room-washup' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_room-washup' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ms-thumb__cap"} -->
<p class="ms-thumb__cap"><?php echo esc_html( mise_studio_t( 'cap_room-washup' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumb"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-thumb__img"} -->
<figure class="wp-block-image size-full ms-thumb__img"><img src="<?php echo mise_studio_img( 'room-goods-in' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_room-goods-in' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ms-thumb__cap"} -->
<p class="ms-thumb__cap"><?php echo esc_html( mise_studio_t( 'cap_room-goods-in' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ms-thumb"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-thumb__img"} -->
<figure class="wp-block-image size-full ms-thumb__img"><img src="<?php echo mise_studio_img( 'room-dry-store' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_room-dry-store' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ms-thumb__cap"} -->
<p class="ms-thumb__cap"><?php echo esc_html( mise_studio_t( 'cap_room-dry-store' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ms-faq__a ms-faq__a--after"} -->
<p class="ms-faq__a ms-faq__a--after"><?php echo esc_html( mise_studio_t( 'rm2_b3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'rm2_nh' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-faq__a"} -->
<p class="ms-faq__a"><?php echo esc_html( mise_studio_t( 'rm2_nb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'rm2_mh' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-sheet ms-sheet--rows sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--rows sp-reveal sp-reveal--up"><!-- wp:group {"className":"ms-sheet__head","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet__head"><!-- wp:heading {"level":3,"className":"ms-sheet__title"} -->
<h3 class="wp-block-heading ms-sheet__title"><?php echo esc_html( mise_studio_t( 'rm2_rh' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-rows","layout":{"type":"default"}} -->
<div class="wp-block-group ms-rows"><!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'rm2_m1l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'rm2_m1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'rm2_m2l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'rm2_m2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'rm2_m3l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'rm2_m3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'rm2_m4l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'rm2_m4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:group {"className":"ms-sheet ms-sheet--close","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--close"><!-- wp:group {"className":"ms-close","layout":{"type":"default"}} -->
<div class="wp-block-group ms-close"><!-- wp:heading {"level":3,"className":"ms-sheet__title"} -->
<h3 class="wp-block-heading ms-sheet__title"><?php echo esc_html( mise_studio_t( 'fl_book' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"ms-pill-wrap"} -->
<div class="wp-block-buttons ms-pill-wrap"><!-- wp:button {"className":"ms-pill"} -->
<div class="wp-block-button ms-pill"><a class="wp-block-button__link wp-element-button" href="/book-a-visit/"><?php echo esc_html( mise_studio_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
