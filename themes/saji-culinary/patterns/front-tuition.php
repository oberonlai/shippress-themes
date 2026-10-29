<?php
/**
 * Title: Home: tuition
 * Slug: saji-culinary/front-tuition
 * Categories: saji-culinary
 * Keywords: culinary school, cooking, chef
 * Viewport Width: 1440
 * Description: Fees at a glance: a full-width ledger of four programmes and a line for the kit and instalments.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"saji-sec saji-tuition","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull saji-sec saji-tuition"><!-- wp:group {"align":"wide","className":"saji-tuition__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide saji-tuition__in"><!-- wp:paragraph {"className":"saji-label saji-label--brick"} -->
<p class="saji-label saji-label--brick"><?php echo esc_html( saji_culinary_t( 'tu_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"saji-tuition__title"} -->
<h2 class="wp-block-heading saji-tuition__title"><?php echo esc_html( saji_culinary_t( 'tu_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":true,"className":"saji-ledger"} -->
<figure class="wp-block-table saji-ledger"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( saji_culinary_t( 'tu_h1' ) ); ?></th><th><?php echo esc_html( saji_culinary_t( 'tu_h2' ) ); ?></th><th><?php echo esc_html( saji_culinary_t( 'tu_h3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( saji_culinary_t( 'tu_1' ) ); ?></td><td><?php echo esc_html( saji_culinary_t( 'tu_1l' ) ); ?></td><td><?php echo esc_html( saji_culinary_t( 'tu_1p' ) ); ?></td></tr><tr><td><?php echo esc_html( saji_culinary_t( 'tu_2' ) ); ?></td><td><?php echo esc_html( saji_culinary_t( 'tu_2l' ) ); ?></td><td><?php echo esc_html( saji_culinary_t( 'tu_2p' ) ); ?></td></tr><tr><td><?php echo esc_html( saji_culinary_t( 'tu_3' ) ); ?></td><td><?php echo esc_html( saji_culinary_t( 'tu_3l' ) ); ?></td><td><?php echo esc_html( saji_culinary_t( 'tu_3p' ) ); ?></td></tr><tr><td><?php echo esc_html( saji_culinary_t( 'tu_4' ) ); ?></td><td><?php echo esc_html( saji_culinary_t( 'tu_4l' ) ); ?></td><td><?php echo esc_html( saji_culinary_t( 'tu_4p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"saji-ledger__note"} -->
<p class="saji-ledger__note"><?php echo esc_html( saji_culinary_t( 'tu_note' ) ); ?> <a href="/tuition/"><?php echo esc_html( saji_culinary_t( 'tu_go' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
