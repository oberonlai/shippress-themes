<?php
/**
 * Title: Home: visit length band
 * Slug: noki-surveyors/front-visit
 * Categories: noki-surveyors
 * Viewport Width: 1440
 * Description: Full-width parallax photograph with a white panel listing visit lengths.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"visit","align":"full","className":"nk-visit","layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group alignfull nk-visit">
<!-- wp:group {"className":"nk-visit__photo sp-parallax nk-par-10","layout":{"type":"default"}} -->
<div class="wp-block-group nk-visit__photo sp-parallax nk-par-10">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo noki_surveyors_img( 'visit-ladder-walk.webp' ); ?>" alt="<?php echo noki_surveyors_a( 'alt_b1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-visit__panel","layout":{"type":"default"}} -->
<div class="wp-block-group nk-visit__panel">
<!-- wp:paragraph {"className":"nk-label"} -->
<p class="nk-label"><?php echo esc_html( noki_surveyors_t( 'vis_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"nk-h2s"} -->
<h2 class="wp-block-heading nk-h2s"><?php echo esc_html( noki_surveyors_t( 'vis_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<dl class="nk-times"><div><dt><?php echo esc_html( noki_surveyors_t( 'vt1_a' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'vt1_b' ) ); ?></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'vt2_a' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'vt2_b' ) ); ?></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'vt3_a' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'vt3_b' ) ); ?></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'vt4_a' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'vt4_b' ) ); ?></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'vt5_a' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'vt5_b' ) ); ?></dd></div></dl>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"nk-visit__note"} -->
<p class="nk-visit__note"><?php echo esc_html( noki_surveyors_t( 'vis_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
