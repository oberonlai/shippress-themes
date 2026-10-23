<?php
/**
 * Title: Home: signs worth a visit, with a floated cat photo
 * Slug: aoba-veterinary/front-signs
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: The problem: a short paragraph, a two-column ruled list of eight signs and a vertical photograph of a cat's ear being checked.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-signs","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-signs"><!-- wp:group {"align":"wide","className":"av-signs__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-signs__in"><!-- wp:group {"className":"av-signs__text","layout":{"type":"default"}} -->
<div class="wp-block-group av-signs__text"><!-- wp:heading {"className":"av-long"} -->
<h2 class="wp-block-heading av-long"><?php echo wp_kses_post( aoba_veterinary_t( 'k9e3bb09a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'ke0344c32' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"av-signlist"} -->
<ul class="wp-block-list av-signlist"><!-- wp:list-item -->
<li><?php echo wp_kses_post( aoba_veterinary_t( 'k0dc5361d' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( aoba_veterinary_t( 'k619f47cd' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( aoba_veterinary_t( 'k268dd708' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( aoba_veterinary_t( 'kbfd1be79' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( aoba_veterinary_t( 'kdfe33fad' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( aoba_veterinary_t( 'kb314a28d' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( aoba_veterinary_t( 'kb2bd50ac' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( aoba_veterinary_t( 'kbe5cfdf6' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"av-note"} -->
<p class="av-note"><?php echo wp_kses_post( aoba_veterinary_t( 'k4ab33428' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"av-signs__photo"} -->
<figure class="wp-block-image size-large av-signs__photo"><img src="<?php echo esc_url( $av . 'p04-ear.webp' ); ?>" alt="<?php echo esc_attr( aoba_veterinary_t( 'aa66f1df8' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
