<?php
/**
 * Title: Home: method bands
 * Slug: suji-clinic/front-method
 * Categories: suji-clinic
 * Keywords: clinic, method, bands
 * Viewport Width: 1440
 * Description: Three tinted photo bands, each with a white card whose inset photo is cut on a diagonal, a hard-shadow tab and a thin Latin ghost word.
 */
$bands = array(
	'a' => array( 'cls' => 'assess', 'wash' => 'm1-goniometer.webp', 'inset' => 'm1', 'in' => 'n1-tape.webp', 'altw' => 'alt_m1', 'alti' => 'alt_n1', 'rev' => false, 'dir' => 'left' ),
	'r' => array( 'cls' => 'rebuild', 'wash' => 'm2-calfraise.webp', 'inset' => 'm2', 'in' => 'n2-band.webp', 'altw' => 'alt_m2', 'alti' => 'alt_n2', 'rev' => true, 'dir' => 'right' ),
	't' => array( 'cls' => 'return', 'wash' => 'm3-jog.webp', 'inset' => 'm3', 'in' => 'n3-hop.webp', 'altw' => 'alt_m3', 'alti' => 'alt_n3', 'rev' => false, 'dir' => 'left' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-sec sj-method","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sj-sec sj-method"><!-- wp:group {"className":"sj-wrap sj-head sj-head--s","layout":{"type":"default"}} -->
<div class="wp-block-group sj-wrap sj-head sj-head--s"><!-- wp:paragraph {"className":"sj-giant"} -->
<p class="sj-giant"><span class="sj-giant__first">M</span>ETHOD</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-sublabel"} -->
<p class="sj-sublabel"><?php echo esc_html( suji_clinic_t( 'met_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php foreach ( $bands as $k => $b ) : ?>

<!-- wp:group {"className":"sj-band sj-band--<?php echo $b['cls']; ?><?php echo $b['rev'] ? ' sj-band--rev' : ''; ?>","layout":{"type":"default"}} -->
<div class="wp-block-group sj-band sj-band--<?php echo $b['cls']; ?><?php echo $b['rev'] ? ' sj-band--rev' : ''; ?>"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sj-band__wash"} -->
<figure class="wp-block-image size-full sj-band__wash"><img src="<?php echo suji_clinic_img( $b['wash'] ); ?>" alt="<?php echo esc_attr( suji_clinic_t( $b['altw'] ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sj-band__ghost"} -->
<p class="sj-band__ghost" aria-hidden="true"><?php echo esc_html( suji_clinic_t( "met_{$k}_tab" ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sj-band__card sp-reveal sp-reveal--<?php echo $b['dir']; ?>","layout":{"type":"default"}} -->
<div class="wp-block-group sj-band__card sp-reveal sp-reveal--<?php echo $b['dir']; ?>"><!-- wp:paragraph {"className":"sj-band__tab"} -->
<p class="sj-band__tab"><?php echo esc_html( suji_clinic_t( "met_{$k}_tab" ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sj-band__text","layout":{"type":"default"}} -->
<div class="wp-block-group sj-band__text"><!-- wp:paragraph {"className":"sj-band__kicker"} -->
<p class="sj-band__kicker"><?php echo esc_html( suji_clinic_t( "met_{$k}_k" ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sj-band__h"} -->
<h3 class="wp-block-heading sj-band__h"><?php
	$h     = suji_clinic_t( "met_{$k}_h" );
	$first = strtok( $h, ' ' );
	echo '<span class="sj-band__first">' . esc_html( $first ) . '</span>' . esc_html( substr( $h, strlen( $first ) ) );
?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sj-band__p"} -->
<p class="sj-band__p"><?php echo esc_html( suji_clinic_t( "met_{$k}_p" ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sj-band__inset"} -->
<figure class="wp-block-image size-full sj-band__inset"><img src="<?php echo suji_clinic_img( $b['in'] ); ?>" alt="<?php echo esc_attr( suji_clinic_t( $b['alti'] ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sj-band__go"} -->
<p class="sj-band__go"><a class="sj-chip" href="<?php echo suji_clinic_url( 'method' ); ?>" aria-label="<?php echo esc_attr( suji_clinic_t( 'met_go' ) ); ?>"></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?></section>
<!-- /wp:group -->
