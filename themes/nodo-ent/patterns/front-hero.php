<?php
/**
 * Title: Home: photograph with paper strips
 * Slug: nodo-ent/front-hero
 * Categories: nodo-ent
 * Keywords: clinic, ear nose throat
 * Viewport Width: 1440
 * Description: Full-bleed documentary photograph with two vertical white paper strips holding the headline and a white information bar.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nd-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull nd-hero">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h1.webp' ) ); ?>","dimRatio":0,"isDark":false,"align":"full","className":"sp-parallax nd-hero__photo"} -->
<div class="wp-block-cover alignfull is-light sp-parallax nd-hero__photo"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( "Through a white door frame, a clinician speaks with a patient and an otoscope rests on linen" ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:heading {"level": 1, "className": "nd-strips"} -->
<h1 class="wp-block-heading nd-strips"><span><?php echo wp_kses_post( nodo_ent_t( 'kcc58f484' ) ); ?></span> <span><?php echo wp_kses_post( nodo_ent_t( 'k1deb24a5' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:group {"className": "nd-info", "layout": {"type": "default"}} -->
<div class="wp-block-group nd-info">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nodo_ent_t( 'k1b85f99c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nodo_ent_t( 'kdfaa5144' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nd-link"} -->
<p class="nd-link"><a href="/first-visit/"><?php echo wp_kses_post( nodo_ent_t( 'kfca8a5d7' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->