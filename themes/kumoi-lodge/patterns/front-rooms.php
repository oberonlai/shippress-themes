<?php
/**
 * Title: Home: rooms open this month
 * Slug: kumoi-lodge/front-rooms
 * Categories: kumoi-lodge
 * Keywords: lodge, home
 * Viewport Width: 1440
 * Description: Three room cards: a 1.85:1 rounded photo with outline circle arrows, then a hairline split row (title, meta and outline pill | 1 px rule | description and amenities).
 */
?>
<!-- wp:group {"className":"km-sec km-rooms","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"rooms"} -->
<section id="rooms" class="wp-block-group alignfull km-sec km-rooms"><!-- wp:group {"className":"km-col","layout":{"type":"default"}} -->
<div class="wp-block-group km-col"><!-- wp:heading {"level":2,"className":"km-title"} -->
<h2 class="wp-block-heading km-title"><?php kumoi_lodge_e( 'rooms_label' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"km-lead km-intro"} -->
<p class="km-lead km-intro"><?php kumoi_lodge_e( 'rooms_lead' ); ?></p>
<!-- /wp:paragraph -->
<?php
$kl_rooms = array(
	1 => array( 'kl-r1', 'alt_r1', '/rooms/#ridge' ),
	2 => array( 'kl-r2', 'alt_r2', '/rooms/#larch' ),
	3 => array( 'kl-r3', 'alt_r3', '/rooms/#bunk' ),
);
foreach ( $kl_rooms as $n => $r ) :
	?>
<!-- wp:group {"className":"km-room","layout":{"type":"default"}} -->
<div class="wp-block-group km-room"><!-- wp:group {"className":"km-photo km-photo--wide sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group km-photo km-photo--wide sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kumoi_lodge_img( $r[0] ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( kumoi_lodge_t( $r[1] ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<span class="km-arrow km-arrow--l" aria-hidden="true">←</span><a class="km-arrow km-arrow--r" href="<?php echo esc_url( home_url( $r[2] ) ); ?>" aria-label="<?php echo esc_attr( kumoi_lodge_t( 'room_arrow' ) . ': ' . kumoi_lodge_t( 'room' . $n . '_name' ) ); ?>">→</a>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"km-split","layout":{"type":"default"}} -->
<div class="wp-block-group km-split"><!-- wp:group {"className":"km-split__l","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__l"><!-- wp:heading {"level":3,"className":"km-card-title"} -->
<h3 class="wp-block-heading km-card-title"><?php kumoi_lodge_e( 'room' . $n . '_name' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"km-meta"} -->
<p class="km-meta"><?php kumoi_lodge_e( 'room' . $n . '_m1' ); ?><br><?php kumoi_lodge_e( 'room' . $n . '_m2' ); ?></p>
<!-- /wp:paragraph -->
<?php echo kumoi_lodge_pill( kumoi_lodge_t( 'room_pill' ), $r[2] ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
</div>
<!-- /wp:group -->
<!-- wp:html -->
<span class="km-split__rule" aria-hidden="true"></span>
<!-- /wp:html -->
<!-- wp:group {"className":"km-split__r","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__r"><!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php kumoi_lodge_e( 'room' . $n . '_d' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"km-meta"} -->
<p class="km-meta"><?php kumoi_lodge_e( 'room' . $n . '_a' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?>
<!-- wp:paragraph {"className":"km-meta km-rooms__note"} -->
<p class="km-meta km-rooms__note"><?php kumoi_lodge_e( 'rooms_note' ); ?> · <a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php kumoi_lodge_e( 'rooms_all' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
