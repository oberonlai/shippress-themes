<?php
/**
 * Title: Home: prices
 * Slug: shoko-archives/front-prices
 * Categories: shoko-archives
 * Viewport Width: 1440
 * Description: A ruled heading and a full-width striped price table of six rows; it stacks into label-and-price rows on phones.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"prices","className":"sa-sec","layout":{"type":"default"}} -->
<section id="prices" class="wp-block-group alignfull sa-sec"><!-- wp:group {"className":"sa-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap"><!-- wp:heading {"className":"sa-h2"} -->
<h2 class="wp-block-heading sa-h2"><?php echo esc_html( shoko_archives_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"sa-prices","hasFixedLayout":false} -->
<figure class="wp-block-table sa-prices"><table><tbody><tr><td><?php echo esc_html( shoko_archives_t( 'pr_r1n' ) ); ?><br><span class="sa-note"><?php echo esc_html( shoko_archives_t( 'pr_r1d' ) ); ?></span></td><td><?php echo esc_html( shoko_archives_t( 'pr_r1p' ) ); ?></td></tr><tr><td><?php echo esc_html( shoko_archives_t( 'pr_r2n' ) ); ?><br><span class="sa-note"><?php echo esc_html( shoko_archives_t( 'pr_r2d' ) ); ?></span></td><td><?php echo esc_html( shoko_archives_t( 'pr_r2p' ) ); ?></td></tr><tr><td><?php echo esc_html( shoko_archives_t( 'pr_r3n' ) ); ?><br><span class="sa-note"><?php echo esc_html( shoko_archives_t( 'pr_r3d' ) ); ?></span></td><td><?php echo esc_html( shoko_archives_t( 'pr_r3p' ) ); ?></td></tr><tr><td><?php echo esc_html( shoko_archives_t( 'pr_r4n' ) ); ?><br><span class="sa-note"><?php echo esc_html( shoko_archives_t( 'pr_r4d' ) ); ?></span></td><td><?php echo esc_html( shoko_archives_t( 'pr_r4p' ) ); ?></td></tr><tr><td><?php echo esc_html( shoko_archives_t( 'pr_r5n' ) ); ?><br><span class="sa-note"><?php echo esc_html( shoko_archives_t( 'pr_r5d' ) ); ?></span></td><td><?php echo esc_html( shoko_archives_t( 'pr_r5p' ) ); ?></td></tr><tr><td><?php echo esc_html( shoko_archives_t( 'pr_r6n' ) ); ?><br><span class="sa-note"><?php echo esc_html( shoko_archives_t( 'pr_r6d' ) ); ?></span></td><td><?php echo esc_html( shoko_archives_t( 'pr_r6p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sa-fine"} -->
<p class="sa-fine"><?php echo esc_html( shoko_archives_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
