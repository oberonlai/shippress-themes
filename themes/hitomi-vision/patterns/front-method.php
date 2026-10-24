<?php
/**
 * Title: Home: method
 * Slug: hitomi-vision/front-method
 * Categories: hitomi-vision
 * Keywords: optometry, exam, method
 * Viewport Width: 1440
 * Description: A dome-topped section head, one centred prose column about the four parts of the exam, and a triptych of three 4:5 photographs with two-line captions.
 */
$hv_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
$hv_tri = array(
	array( 'p05-phoropter.webp', 'alt_phoropter', 'm_cap1' ),
	array( 'p06-slitlamp.webp', 'alt_slitlamp', 'm_cap2' ),
	array( 'p07-imaging.webp', 'alt_imaging', 'm_cap3' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"method","className":"hv-sec hv-dome","layout":{"type":"constrained"}} -->
<section id="method" class="wp-block-group alignfull hv-sec hv-dome"><!-- wp:group {"className":"hv-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hv-head sp-reveal sp-reveal--up"><!-- wp:heading {"className":"hv-head__title"} -->
<h2 class="wp-block-heading hv-head__title"><?php echo esc_html( hitomi_vision_t( 'm_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hv-head__sub"} -->
<p class="hv-head__sub"><?php echo esc_html( hitomi_vision_t( 'm_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hv-method","layout":{"type":"constrained"}} -->
<div class="wp-block-group hv-method"><?php foreach ( array( 'm_1', 'm_2', 'm_3', 'm_4' ) as $hv_k ) : ?><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses( hitomi_vision_t( $hv_k ), array( 'strong' => array() ) ); ?></p>
<!-- /wp:paragraph -->

<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hv-triptych sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hv-triptych sp-stagger"><?php foreach ( $hv_tri as $hv_i => $hv_t ) : ?><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"hv-tri sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-large hv-tri sp-reveal sp-reveal--wipe"><img src="<?php echo $hv_img( $hv_t[0] ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( hitomi_vision_t( $hv_t[1] ) ); ?>" style="aspect-ratio:4/5;object-fit:cover"/><figcaption class="wp-element-caption"><?php echo hitomi_vision_lines( $hv_t[2] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></figcaption></figure>
<!-- /wp:image -->
<?php if ( $hv_i < 2 ) : ?>

<?php endif; ?><?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
