<?php
/**
 * Title: Home: interlude
 * Slug: hitomi-vision/front-interlude
 * Categories: hitomi-vision
 * Keywords: optometry, photo, full width
 * Viewport Width: 1440
 * Description: A full-bleed photograph of the exam room that moves slower than the page, with a one-line caption below it.
 */
$hv_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"align":"full","className":"hv-interlude-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hv-interlude-wrap"><!-- wp:cover {"url":"<?php echo $hv_img( 'p04-exam-room.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>","dimRatio":0,"minHeight":720,"isDark":false,"align":"full","className":"hv-interlude sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light hv-interlude sp-parallax" style="min-height:720px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hitomi_vision_t( 'alt_exam_room' ) ); ?>" src="<?php echo $hv_img( 'p04-exam-room.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"className":"hv-interlude__cap"} -->
<p class="hv-interlude__cap"><?php echo esc_html( hitomi_vision_t( 'i_caption' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
