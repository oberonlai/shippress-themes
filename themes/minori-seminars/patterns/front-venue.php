<?php
/**
 * Title: Home: the room
 * Slug: minori-seminars/front-venue
 * Categories: minori-seminars
 * Keywords: seminar, management, landing
 * Viewport Width: 1440
 * Description: White block: label, photo of the room set for four tables and the address, doors and hours.
 */
?>
<!-- wp:group {"align":"full","anchor":"venue","className":"ms-sec ms-venue","layout":{"type":"default"}} -->
<div id="venue" class="wp-block-group alignfull ms-sec ms-venue"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><?php echo minori_seminars_label( 'THE ROOM' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"ms-cols ms-cols--venue","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cols ms-cols--venue"><!-- wp:group {"className":"ms-cols__main","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cols__main"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1248,"height":832,"className":"ms-wide"} -->
<figure class="wp-block-image size-full ms-wide"><img src="<?php echo minori_seminars_img( 'venue-room.webp' ); ?>" alt="<?php echo esc_attr( minori_seminars_t( 'a4b092e46' ) ); ?>" width="1248" height="832"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-cols__side","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cols__side"><!-- wp:paragraph {"className":"ms-address"} -->
<p class="ms-address"><?php echo wp_kses_post( minori_seminars_t( 'kd11ac56d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-facts"} -->
<p class="ms-facts"><?php echo wp_kses_post( minori_seminars_t( 'k2c0bc010' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minori_seminars_t( 'k0e29df9f' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo minori_seminars_btn( 'About Minori and the room', '/about/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
