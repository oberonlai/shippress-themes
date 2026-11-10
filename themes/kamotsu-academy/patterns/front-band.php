<?php
/**
 * Title: Home: parallax road band with docked card
 * Slug: kamotsu-academy/front-band
 * Categories: kamotsu-academy
 * Viewport Width: 1440
 * Description: Full-bleed 21:9 dawn road photo with a slow parallax and a white Test day card docked at the bottom-right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"band","className":"ka-bandwrap","layout":{"type":"default"}} -->
<section id="band" class="wp-block-group alignfull ka-bandwrap">
<!-- wp:cover {"url":"<?php echo kamotsu_academy_img( 'p12-dawn-carriageway.webp' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"isDark":false,"className":"ka-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light ka-band sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo kamotsu_academy_a( 'alt_p12' ); ?>" src="<?php echo kamotsu_academy_img( 'p12-dawn-carriageway.webp' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"ka-card ka-card--text ka-band__card","layout":{"type":"default"}} -->
<div class="wp-block-group ka-card ka-card--text ka-band__card">
<!-- wp:group {"className":"ka-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group ka-card__text">
<!-- wp:paragraph {"className":"ka-card__k"} -->
<p class="ka-card__k"><?php echo wp_kses_post( kamotsu_academy_t( 'band_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-card__t"} -->
<p class="ka-card__t"><?php echo wp_kses_post( kamotsu_academy_t( 'band_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<a class="ka-chev ka-chev--line" href="/test-day/" aria-label="<?php echo kamotsu_academy_a( 'band_go' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
</section>
<!-- /wp:group -->
