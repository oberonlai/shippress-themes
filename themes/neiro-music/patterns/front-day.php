<?php
/**
 * Title: Home: a teaching day (five sticky rows)
 * Slug: neiro-music/front-day
 * Categories: neiro-music
 * Description: Intro, then five stacked sticky rows: time numeral, title, text and a portrait photograph.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"nm-sec nm-sec--day","anchor":"day","align":"full","layout":{"type":"default"}} -->
<section id="day" class="wp-block-group alignfull nm-sec nm-sec--day"><!-- wp:group {"className":"nm-wrap nm-rg","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap nm-rg"><?php echo neiro_music_rail( neiro_music_t( 'rail_day' ) ); ?>

<!-- wp:group {"className":"nm-dayintro sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nm-dayintro sp-stagger"><!-- wp:heading {"className":"nm-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading nm-h2 sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'day_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'day_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-days","layout":{"type":"default"}} -->
<div class="wp-block-group nm-days"><?php
$photos = array( 1 => 'p05', 2 => 'p06', 3 => 'p07', 4 => 'p08', 5 => 'p09' );
foreach ( $photos as $i => $p ) {
	?>
<!-- wp:group {"tagName":"article","className":"nm-day","align":"full","layout":{"type":"default"}} -->
<article class="wp-block-group alignfull nm-day"><!-- wp:group {"className":"nm-wrap nm-day__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap nm-day__grid"><!-- wp:group {"className":"nm-day__side","layout":{"type":"default"}} -->
<div class="wp-block-group nm-day__side"><?php echo neiro_music_rail( neiro_music_t( 'rail_day' ) ); ?>

<!-- wp:paragraph {"className":"nm-day__time"} -->
<p class="nm-day__time"><?php echo esc_html( neiro_music_t( "d{$i}_t" ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-day__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nm-day__text sp-stagger"><!-- wp:heading {"level":3,"className":"nm-day__h sp-reveal sp-reveal--up"} -->
<h3 class="wp-block-heading nm-day__h sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( "d{$i}_h" ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-day__g sp-reveal sp-reveal--up"} -->
<p class="nm-day__g sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( "d{$i}_g" ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-day__p sp-reveal sp-reveal--up"} -->
<p class="nm-day__p sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( "d{$i}_p" ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo neiro_music_link( neiro_music_t( 'day_link' ), '/schedule/', 'sp-reveal sp-reveal--up' ); ?></div>
<!-- /wp:group -->

<?php echo neiro_music_photo( $p . '.webp', neiro_music_t( 'alt_' . $p ), 'nm-day__photo sp-reveal sp-reveal--wipe' ); ?>

<!-- wp:html -->
<hr class="nm-day__rule" aria-hidden="true"/>
<!-- /wp:html --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<?php
}
?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
