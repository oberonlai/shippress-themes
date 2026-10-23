<?php
/**
 * Title: Home: pupils' stories
 * Slug: neiro-music/front-stories
 * Categories: neiro-music
 * Description: Rail label and three story rows with landscape photographs.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"nm-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nm-sec"><!-- wp:group {"className":"nm-wrap nm-rg","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap nm-rg"><?php echo neiro_music_rail( neiro_music_t( 'rail_stories' ) ); ?>

<!-- wp:group {"className":"nm-sto","layout":{"type":"default"}} -->
<div class="wp-block-group nm-sto"><!-- wp:heading {"className":"nm-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading nm-h2 sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'sto_h' ) ); ?></h2>
<!-- /wp:heading --><?php
$photos = array( 1 => 'p10', 2 => 'p11', 3 => 'p12' );
foreach ( $photos as $i => $p ) {
	?>

<!-- wp:group {"className":"nm-story","layout":{"type":"default"}} -->
<div class="wp-block-group nm-story"><!-- wp:group {"className":"nm-story__t sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nm-story__t sp-stagger"><!-- wp:paragraph {"className":"nm-story__q sp-reveal sp-reveal--up"} -->
<p class="nm-story__q sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( "s{$i}_q" ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-meta sp-reveal sp-reveal--up"} -->
<p class="nm-meta sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( "s{$i}_n" ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo neiro_music_photo( $p . '.webp', neiro_music_t( 'alt_' . $p ), 'nm-story__img sp-reveal sp-reveal--wipe' ); ?></div>
<!-- /wp:group --><?php } ?>

<?php echo neiro_music_link( neiro_music_t( 'sto_link' ), '/stories/' ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
