<?php
/**
 * Title: Home: parallax interlude
 * Slug: kaiten-skills/front-interlude
 * Categories: kaiten-skills
 * Viewport Width: 1440
 * Description: Full-bleed photo with a wave-cut bottom edge and a small stone card.
 */
?>
<!-- wp:group {"className":"ks-interlude","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ks-interlude"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p10-desk.webp' ) ); ?>","alt":"Empty morning desk by a tall window with plants and a chair","dimRatio":0,"className":"ks-interlude__cover sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover ks-interlude__cover sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kaiten_skills_t( 'a1bb0cb53' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10-desk.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"ks-wrap ks-interlude__row","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wrap ks-interlude__row"><!-- wp:paragraph {"className":"ks-quote"} -->
<p class="ks-quote"><?php echo wp_kses_post( kaiten_skills_t( 'k404c34c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->
