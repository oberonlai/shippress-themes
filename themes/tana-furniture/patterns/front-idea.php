<?php
/**
 * Title: Home: the idea
 * Slug: tana-furniture/front-idea
 * Categories: tana-furniture
 * Keywords: furniture, intro
 * Viewport Width: 1440
 * Description: Centred bracket label, two-line headline and one narrative paragraph on white.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec tf-idea","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec tf-idea"><!-- wp:paragraph {"align":"center","className":"is-style-bracket-label tf-label"} -->
<p class="has-text-align-center is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'id_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"tf-h2"} -->
<h2 class="wp-block-heading has-text-align-center tf-h2"><?php echo tana_furniture_lines( 'id_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"tf-idea__text"} -->
<p class="has-text-align-center tf-idea__text"><?php echo esc_html( tana_furniture_t( 'id_text' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
