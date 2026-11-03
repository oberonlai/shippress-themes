<?php
/**
 * Title: Home: dawn band (parallax photograph)
 * Slug: tomari-marina/front-dawn
 * Categories: tomari-marina
 * Keywords: home, parallax, band
 * Viewport Width: 1440
 * Description: A wide 21:9 dawn photograph that drifts slower than the page, with one caption at the bottom left.
 */
?>
<!-- wp:cover {"alt":"<?php echo substr( wp_json_encode( tomari_marina_t( 'front_dawn_02' ), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ), 1, -1 ); ?>","url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-dawn-panorama.webp' ) ); ?>","dimRatio":20,"overlayColor":"ink","minHeight":560,"minHeightUnit":"px","focalPoint":{"x":0.5,"y":0.5},"contentPosition":"bottom left","align":"full","className":"tm-dawn sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left tm-dawn sp-parallax" style="min-height:560px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( tomari_marina_t( 'front_dawn_02' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-dawn-panorama.webp' ) ); ?>" data-object-fit="cover" data-object-position="50% 50%" style="object-position:50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"tm-dawn__cap"} -->
<p class="tm-dawn__cap"><?php echo wp_kses_post( tomari_marina_t( 'front_dawn_01' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->