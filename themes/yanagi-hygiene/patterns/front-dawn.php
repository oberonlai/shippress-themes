<?php
/**
 * Title: Home: dawn band
 * Slug: yanagi-hygiene/front-dawn
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: Full-width parallax photograph with a pale skyline on its top edge and a dark text panel.
 */
?>
<?php $img = get_theme_file_uri( 'assets/images/i05-dock.webp' ); ?>
<!-- wp:group {"align":"full","className":"yh-city","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-city"></div>
<!-- /wp:group --><!-- wp:cover {"url":"<?php echo esc_url( $img ); ?>","dimRatio":0,"className":"yh-dawn alignfull sp-parallax","style":{"css":"--sp-par:10%"},"layout":{"type":"default"}} -->
<div class="wp-block-cover yh-dawn alignfull sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( yh_t( 'dawn_alt' ) ); ?>" src="<?php echo esc_url( $img ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"yh-dawn__panel","layout":{"type":"default"}} -->
<div class="wp-block-group yh-dawn__panel"><!-- wp:heading {"className":"yh-dawn__h"} -->
<h2 class="wp-block-heading yh-dawn__h"><?php echo esc_html( yh_t( 'dawn_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"yh-dawn__p"} -->
<p class="yh-dawn__p"><?php echo esc_html( yh_t( 'dawn_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
