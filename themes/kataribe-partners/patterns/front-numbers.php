<?php
/**
 * Title: Home: figures band
 * Slug: kataribe-partners/front-numbers
 * Categories: kataribe-partners
 * Keywords: public relations, agency
 * Viewport Width: 1440
 * Description: Full-bleed blue gradient band: two big figures with five-bar glyphs and count-up numerals, then four small figures.
 */
$e = 'kataribe_partners_e';
$a = 'kataribe_partners_a';
$i = 'kataribe_partners_img';
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"numbers","className":"kp-numbers","layout":{"type":"default"}} -->
<section id="numbers" class="wp-block-group alignfull kp-numbers"><!-- wp:group {"className":"kp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kp-wrap"><!-- wp:heading {"className":"kp-h2 kp-numbers__title"} -->
<h2 class="wp-block-heading kp-h2 kp-numbers__title"><?php echo kataribe_partners_lines( 'num_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-subline kp-numbers__sub"} -->
<p class="kp-subline kp-numbers__sub"><?php echo esc_html( kataribe_partners_t( 'num_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kp-figs kp-figs--big","layout":{"type":"default"}} -->
<div class="wp-block-group kp-figs kp-figs--big"><?php
$nums = array( 1 => '312', 2 => '46', 3 => '12', 4 => '5', 5 => '18', 6 => '2' );
for ( $n = 1; $n <= 2; $n++ ) : ?><!-- wp:group {"className":"kp-fig","layout":{"type":"default"}} -->
<div class="wp-block-group kp-fig"><!-- wp:html -->
<div class="kp-bars" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kp-fig__body","layout":{"type":"default"}} -->
<div class="wp-block-group kp-fig__body"><!-- wp:paragraph {"className":"kp-fig__label"} -->
<p class="kp-fig__label"><?php echo $e( 'num_' . $n . '_l' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-fig__num sp-reveal sp-count"} -->
<p class="kp-fig__num sp-reveal sp-count"><?php echo $nums[ $n ]; ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-fig__unit"} -->
<p class="kp-fig__unit"><?php echo $e( 'num_' . $n . '_u' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endfor; ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-figs kp-figs--small","layout":{"type":"default"}} -->
<div class="wp-block-group kp-figs kp-figs--small"><?php for ( $n = 3; $n <= 6; $n++ ) : ?><!-- wp:group {"className":"kp-fig kp-fig--s","layout":{"type":"default"}} -->
<div class="wp-block-group kp-fig kp-fig--s"><!-- wp:paragraph {"className":"kp-fig__label"} -->
<p class="kp-fig__label"><?php echo $e( 'num_' . $n . '_l' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-fig__num sp-reveal sp-count"} -->
<p class="kp-fig__num sp-reveal sp-count"><?php echo $nums[ $n ]; ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-fig__unit"} -->
<p class="kp-fig__unit"><?php echo $e( 'num_' . $n . '_u' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endfor; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
