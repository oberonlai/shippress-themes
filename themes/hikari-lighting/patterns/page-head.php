<?php
/**
 * Title: Dark page head
 * Slug: hikari-lighting/page-head
 * Categories: hikari-lighting
 * Description: Dark page head with a mono bracket label, a large title and a mono caption.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hl-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-pagehead"><!-- wp:group {"className":"hl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hl-wrap"><!-- wp:paragraph {"className":"hl-label"} -->
<p class="hl-label"><?php echo wp_kses_post( hikari_lighting_t( 'kdd18b704' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hl-pagehead__title"} -->
<h1 class="wp-block-heading hl-pagehead__title"><?php echo wp_kses_post( hikari_lighting_t( 'k12cb401e' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
