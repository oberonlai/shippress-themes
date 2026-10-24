<?php
/**
 * Title: Journal head
 * Slug: hitomi-vision/journal-head
 * Categories: hitomi-vision
 * Inserter: no
 * Description: A dome-topped page head with the journal title, its lower-case sub-title and a short lede.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hv-sec hv-pagehead hv-dome","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hv-sec hv-pagehead hv-dome"><!-- wp:heading {"level":1,"className":"hv-pagehead__title"} -->
<h1 class="wp-block-heading hv-pagehead__title"><?php echo esc_html( hitomi_vision_t( 'j_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hv-head__sub"} -->
<p class="hv-head__sub"><?php echo esc_html( hitomi_vision_t( 'j_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hv-pagehead__lede"} -->
<p class="hv-pagehead__lede"><?php echo esc_html( hitomi_vision_t( 'j_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
