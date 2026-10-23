<?php
/**
 * Title: Home: single-column narrative with a wide reception photo
 * Slug: aoba-veterinary/front-intro
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: An off-white band: section label, a left-aligned long-form heading, two paragraphs and a wide 16:9 reception photograph.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-intro","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-intro"><!-- wp:heading {"textAlign":"center","className":"av-label"} -->
<h2 class="wp-block-heading has-text-align-center av-label"><?php echo wp_kses_post( aoba_veterinary_t( 'k2df70611' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"className":"av-long"} -->
<h2 class="wp-block-heading av-long"><?php echo wp_kses_post( aoba_veterinary_t( 'k78aff160' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k817d7f6d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k422e85fb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none","className":"av-wide"} -->
<figure class="wp-block-image alignwide size-large av-wide"><img src="<?php echo esc_url( $av . 'p14-reception.webp' ); ?>" alt="<?php echo esc_attr( aoba_veterinary_t( 'a7356fddb' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
