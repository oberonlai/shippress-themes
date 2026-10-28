<?php
/**
 * Title: Home: visit the showroom
 * Slug: hikari-lighting/front-visit
 * Categories: hikari-lighting
 * Description: Two columns: showroom exterior photo at the left, label, heading, mono hours list and directions at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hl-section hl-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-section hl-visit"><!-- wp:group {"className":"hl-wrap hl-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hl-wrap hl-visit__grid"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hl-visit__img sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-large hl-visit__img sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/hl-06-window.webp' ) ); ?>" alt="<?php echo esc_attr( hikari_lighting_t( 'ab39bbe5a' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hl-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group hl-visit__text"><!-- wp:paragraph {"className":"hl-label"} -->
<p class="hl-label"><?php echo wp_kses_post( hikari_lighting_t( 'k5cfbd5d8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hl-h2"} -->
<h2 class="wp-block-heading hl-h2"><?php echo wp_kses_post( hikari_lighting_t( 'k9fdb864c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"hl-visit__hours hl-mono"} -->
<ul class="wp-block-list hl-visit__hours hl-mono"><!-- wp:list-item -->
<li><?php echo wp_kses_post( hikari_lighting_t( 'k40db25a7' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hikari_lighting_t( 'kd1640e41' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hikari_lighting_t( 'k089e763e' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>+31 10 555 0142</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hikari_lighting_t( 'kf59187f2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-mono hl-arrow"} -->
<p class="hl-mono hl-arrow"><a href="/visit/"><?php echo wp_kses_post( hikari_lighting_t( 'k7dd227c2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
