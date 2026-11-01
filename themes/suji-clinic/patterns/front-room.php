<?php
/**
 * Title: Home: the room
 * Slug: suji-clinic/front-room
 * Categories: suji-clinic
 * Keywords: clinic, team, room
 * Viewport Width: 1440
 * Description: A heading, a paragraph and three people as hairline rows at the left over a pale wedge; a portrait flush to the right edge with a vertical Latin word and a name plate.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-sec sj-room","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sj-sec sj-room"><!-- wp:group {"className":"sj-room__text","layout":{"type":"default"}} -->
<div class="wp-block-group sj-room__text"><!-- wp:heading {"className":"sj-h2"} -->
<h2 class="wp-block-heading sj-h2"><?php echo esc_html( suji_clinic_t( 'room_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( suji_clinic_t( 'room_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sj-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sj-rows sp-stagger"><?php for ( $n = 1; $n <= 3; $n++ ) : ?>
<!-- wp:group {"className":"sj-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sj-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sj-row__name"} -->
<p class="sj-row__name"><?php echo esc_html( suji_clinic_t( "room_{$n}_n" ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-row__role"} -->
<p class="sj-row__role"><?php echo esc_html( suji_clinic_t( "room_{$n}_r" ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-row__text"} -->
<p class="sj-row__text"><?php echo esc_html( suji_clinic_t( "room_{$n}_t" ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endfor; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sj-more"} -->
<p class="sj-more"><a href="<?php echo suji_clinic_url( 'team' ); ?>"><?php echo esc_html( suji_clinic_t( 'room_go' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-room__fig","layout":{"type":"default"}} -->
<div class="wp-block-group sj-room__fig"><!-- wp:paragraph {"className":"sj-room__vert"} -->
<p class="sj-room__vert" aria-hidden="true"><?php echo esc_html( suji_clinic_t( 'room_vert' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sj-room__photo"} -->
<figure class="wp-block-image size-full sj-room__photo"><img src="<?php echo suji_clinic_img( 'd1-solheim.webp' ); ?>" alt="<?php echo esc_attr( suji_clinic_t( 'alt_d1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sj-room__plate"} -->
<p class="sj-room__plate"><span><?php echo esc_html( suji_clinic_t( 'room_1_n' ) ); ?></span><span><?php echo esc_html( suji_clinic_t( 'room_1_r' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
