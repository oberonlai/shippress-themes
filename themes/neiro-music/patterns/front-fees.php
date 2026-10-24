<?php
/**
 * Title: Home: fees
 * Slug: neiro-music/front-fees
 * Categories: neiro-music
 * Description: Rail label and a full-width fee list on a lifted panel.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"nm-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nm-sec"><!-- wp:group {"className":"nm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap"><!-- wp:group {"className":"nm-panel nm-rg","layout":{"type":"default"}} -->
<div class="wp-block-group nm-panel nm-rg"><?php echo neiro_music_rail( neiro_music_t( 'rail_fees' ) ); ?>

<!-- wp:group {"className":"nm-fees","layout":{"type":"default"}} -->
<div class="wp-block-group nm-fees"><!-- wp:heading {"className":"nm-h2"} -->
<h2 class="wp-block-heading nm-h2"><?php echo esc_html( neiro_music_t( 'fee_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"nm-prices","layout":{"type":"default"}} -->
<div class="wp-block-group nm-prices"><?php for ( $i = 1; $i <= 6; $i++ ) { ?>
<!-- wp:group {"className":"nm-price","layout":{"type":"default"}} -->
<div class="wp-block-group nm-price"><!-- wp:group {"className":"nm-price__l","layout":{"type":"default"}} -->
<div class="wp-block-group nm-price__l"><!-- wp:paragraph {"className":"nm-price__n"} -->
<p class="nm-price__n"><?php echo esc_html( neiro_music_t( "f{$i}_n" ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-meta"} -->
<p class="nm-meta"><?php echo esc_html( neiro_music_t( "f{$i}_d" ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nm-price__v"} -->
<p class="nm-price__v"><?php echo esc_html( neiro_music_t( "f{$i}_p" ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php } ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nm-meta nm-fees__note"} -->
<p class="nm-meta nm-fees__note"><?php echo esc_html( neiro_music_t( 'fee_note' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo neiro_music_link( neiro_music_t( 'fee_link' ), '/fees/' ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
