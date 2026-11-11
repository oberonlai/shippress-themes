<?php
/**
 * Title: Template: not found
 * Slug: tana-furniture/tpl-notfound
 * Categories: tana-furniture
 * Inserter: no
 * Description: Short message under the 404 stage.
 */
?>
<!-- wp:group {"className":"tf-sec tf-notfound","layout":{"type":"constrained"}} -->
<div class="wp-block-group tf-sec tf-notfound"><!-- wp:paragraph {"align":"center","className":"has-text-align-center"} -->
<p class="has-text-align-center"><?php echo esc_html( tana_furniture_t( 'nf_text' ) ); ?> <a href="/"><?php echo esc_html( tana_furniture_t( 'nf_home' ) ); ?></a> <?php echo esc_html( tana_furniture_t( 'nf_or' ) ); ?> <a href="/collection/"><?php echo esc_html( tana_furniture_t( 'nf_coll' ) ); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
