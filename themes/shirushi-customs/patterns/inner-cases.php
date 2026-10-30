<?php
/**
 * Title: Page: case files
 * Slug: shirushi-customs/inner-cases-body
 * Categories: shirushi-customs
 * Inserter: no
 * Description: Four case dossiers (photograph and text fused), two columns.
 */
$img   = get_theme_file_uri( 'assets/images/' );
$files = array( 1 => 'd4.webp', 2 => 'd1.webp', 3 => 'd2.webp', 4 => 'd3.webp' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-cases","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-cases"><!-- wp:group {"className":"sc-in sc-cases__grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in sc-cases__grid sp-stagger"><?php foreach ( $files as $i => $file ) : ?>

<!-- wp:group {"className":"sc-card sc-card--case sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--case sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . $file ); ?>" alt="<?php echo esc_attr( sc_t( 'case' . $i . '_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"level":3,"className":"sc-card__t"} -->
<h3 class="wp-block-heading sc-card__t"><?php echo esc_html( sc_t( 'case' . $i . '_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p"><?php echo esc_html( sc_t( 'case' . $i . '_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 0<?php echo (int) $i; ?> / 04 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
