<?php
/**
 * Title: Home: instruments
 * Slug: neiro-music/front-instruments
 * Categories: neiro-music
 * Description: Rail label, headline and four text columns with hairline tops.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"nm-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nm-sec"><!-- wp:group {"className":"nm-wrap nm-rg","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap nm-rg"><?php echo neiro_music_rail( neiro_music_t( 'rail_instruments' ) ); ?>

<!-- wp:group {"className":"nm-ins","layout":{"type":"default"}} -->
<div class="wp-block-group nm-ins"><!-- wp:heading {"className":"nm-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading nm-h2 sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'ins_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"nm-ins__cols sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nm-ins__cols sp-stagger"><?php for ( $i = 1; $i <= 4; $i++ ) { ?>
<!-- wp:group {"className":"nm-ins__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nm-ins__col sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"nm-ins__h"} -->
<h3 class="wp-block-heading nm-ins__h"><?php echo esc_html( neiro_music_t( "i{$i}_h" ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-ins__p"} -->
<p class="nm-ins__p"><?php echo esc_html( neiro_music_t( "i{$i}_p" ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo neiro_music_link( neiro_music_t( 'ins_link' ), '/lessons/' ); ?></div>
<!-- /wp:group -->
<?php } ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
