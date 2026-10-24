<?php
/**
 * Title: Home: teachers
 * Slug: neiro-music/front-teachers
 * Categories: neiro-music
 * Description: Rail label, text at the left and three portrait photographs in a row.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"nm-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nm-sec"><!-- wp:group {"className":"nm-wrap nm-rg","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap nm-rg"><?php echo neiro_music_rail( neiro_music_t( 'rail_teachers' ) ); ?>

<!-- wp:group {"className":"nm-tea","layout":{"type":"default"}} -->
<div class="wp-block-group nm-tea"><!-- wp:group {"className":"nm-tea__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nm-tea__text sp-stagger"><!-- wp:heading {"className":"nm-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading nm-h2 sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'tea_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'tea_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo neiro_music_link( neiro_music_t( 'tea_link' ), '/teachers/', 'sp-reveal sp-reveal--up' ); ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-tea__row","layout":{"type":"default"}} -->
<div class="wp-block-group nm-tea__row"><?php
$people = array( 1 => 'p14', 2 => 'p15', 3 => 'p04' );
foreach ( $people as $i => $p ) {
	?>
<!-- wp:group {"className":"nm-tea__p","layout":{"type":"default"}} -->
<div class="wp-block-group nm-tea__p"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nm-tea__img sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full nm-tea__img sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $p . '.webp' ) ); ?>" alt="<?php echo esc_attr( neiro_music_t( 'alt_' . $p ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"nm-tea__n"} -->
<p class="nm-tea__n"><?php echo esc_html( neiro_music_t( "tea{$i}_n" ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-meta"} -->
<p class="nm-meta"><?php echo esc_html( neiro_music_t( "tea{$i}_r" ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php } ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
