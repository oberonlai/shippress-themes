<?php
/**
 * Title: Home: recent surveys, three case notes
 * Slug: otonoha-acoustics/front-cases
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Description: A count of case notes and three square-cornered 16:9 photographs, each with its title and a label and value list of room type, volume, measured figure, target and year.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-sec oto-cases","anchor":"cases","layout":{"type":"default"}} -->
<section id="cases" class="wp-block-group alignfull oto-sec oto-cases"><!-- wp:group {"className":"oto-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group oto-wrap sp-reveal sp-reveal--up"><!-- wp:group {"className":"oto-cases__head","layout":{"type":"default"}} -->
<div class="wp-block-group oto-cases__head"><!-- wp:heading {"level":2,"className":"oto-title"} -->
<h2 class="wp-block-heading oto-title"><?php echo esc_html( otonoha_acoustics_t( 'cs_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"oto-cases__count"} -->
<p class="oto-cases__count"><span class="oto-cases__n"><?php echo esc_html( otonoha_acoustics_t( 'cs_count' ) ); ?></span> <small><?php echo esc_html( otonoha_acoustics_t( 'cs_notes' ) ); ?></small></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-cases__grid","layout":{"type":"default"}} -->
<div class="wp-block-group oto-cases__grid"><!-- wp:group {"className":"oto-case","layout":{"type":"default"}} -->
<div class="wp-block-group oto-case"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-case__img"} -->
<figure class="wp-block-image size-large oto-case__img"><img src="<?php echo otonoha_acoustics_img( 'p11-lecture-room.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:heading {"level":3,"className":"oto-case__t"} -->
<h3 class="wp-block-heading oto-case__t"><a href="<?php echo esc_url( home_url( '/a-180-seat-lecture-room-that-echoed/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'cs_1_t' ) ); ?></a></h3>
<!-- /wp:heading --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_type' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_1_type' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_vol' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_1_vol' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_meas' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_1_meas' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_target' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_1_target' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_year' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_year' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-case","layout":{"type":"default"}} -->
<div class="wp-block-group oto-case"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-case__img"} -->
<figure class="wp-block-image size-large oto-case__img"><img src="<?php echo otonoha_acoustics_img( 'p12-open-office-floor.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:heading {"level":3,"className":"oto-case__t"} -->
<h3 class="wp-block-heading oto-case__t"><a href="<?php echo esc_url( home_url( '/ninety-desks-one-quiet-corner/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'cs_2_t' ) ); ?></a></h3>
<!-- /wp:heading --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_type' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_2_type' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_vol' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_2_vol' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_meas' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_2_meas' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_target' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_2_target' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_year' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_year' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-case","layout":{"type":"default"}} -->
<div class="wp-block-group oto-case"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-case__img"} -->
<figure class="wp-block-image size-large oto-case__img"><img src="<?php echo otonoha_acoustics_img( 'p13-recital-hall.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:heading {"level":3,"className":"oto-case__t"} -->
<h3 class="wp-block-heading oto-case__t"><a href="<?php echo esc_url( home_url( '/a-small-hall-for-chamber-music/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'cs_3_t' ) ); ?></a></h3>
<!-- /wp:heading --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_type' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_3_type' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_vol' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_3_vol' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_meas' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_3_meas' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_target' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_3_target' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-spec"} -->
<p class="oto-spec"><span class="oto-spec__k"><?php echo esc_html( otonoha_acoustics_t( 'cs_l_year' ) ); ?></span><span class="oto-spec__v"><?php echo esc_html( otonoha_acoustics_t( 'cs_year' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
