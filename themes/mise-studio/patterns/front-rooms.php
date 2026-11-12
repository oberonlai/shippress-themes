<?php
/**
 * Title: Home: rooms a brief covers (grey-bar accordion)
 * Slug: mise-studio/front-rooms
 * Categories: mise-studio
 * Keywords: accordion, rooms
 * Viewport Width: 1440
 * Description: Three flat grey 48px bars with white disc chevrons; each opens a white sheet with one intro line and three photographs; the first is open.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"rooms","className":"ms-sec ms-sec--rooms","layout":{"type":"default"}} -->
<section id="rooms" class="wp-block-group alignfull ms-sec ms-sec--rooms"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2"} -->
<h2 class="wp-block-heading ms-h2"><?php echo esc_html( mise_studio_t( 'rm_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-intro"} -->
<p class="ms-intro"><?php echo esc_html( mise_studio_t( 'rm_intro' ) ); ?></p>
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
<!-- /wp:group --></div>
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
<!-- /wp:group --></div>
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
<!-- /wp:group --></div>
<!-- /wp:group --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ms-dot ms-dot--end"} -->
<p class="ms-dot ms-dot--end"><a href="/rooms/"><?php echo esc_html( mise_studio_t( 'rm_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
