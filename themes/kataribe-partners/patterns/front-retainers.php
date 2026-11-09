<?php
/**
 * Title: Home: retainers
 * Slug: kataribe-partners/front-retainers
 * Categories: kataribe-partners
 * Keywords: public relations, agency
 * Viewport Width: 1440
 * Description: Heading, a short paragraph, the six-row retainer table at full container width and the terms note with a MORE pill.
 */
$e = 'kataribe_partners_e';
$a = 'kataribe_partners_a';
$i = 'kataribe_partners_img';
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"retainers","className":"kp-sec kp-retainers","layout":{"type":"default"}} -->
<section id="retainers" class="wp-block-group alignfull kp-sec kp-retainers"><!-- wp:group {"className":"kp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kp-wrap"><!-- wp:heading {"className":"kp-h2"} -->
<h2 class="wp-block-heading kp-h2"><?php echo esc_html( kataribe_partners_t( 'rt_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-subline"} -->
<p class="kp-subline"><?php echo esc_html( kataribe_partners_t( 'rt_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-retainers__text"} -->
<p class="kp-retainers__text"><?php echo esc_html( kataribe_partners_t( 'rt_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<table class="kp-table"><thead><tr><th scope="col"><?php echo esc_html( kataribe_partners_t( 'rt_h1' ) ); ?></th><th scope="col"><?php echo esc_html( kataribe_partners_t( 'rt_h2' ) ); ?></th><th scope="col"><?php echo esc_html( kataribe_partners_t( 'rt_h3' ) ); ?></th></tr></thead><tbody><?php for ( $n = 1; $n <= 6; $n++ ) : ?><tr><th scope="row"><?php echo $e( 'rt_' . $n . '_n' ); ?></th><td><span class="kp-table__label"><?php echo esc_html( kataribe_partners_t( 'rt_h2' ) ); ?></span><?php echo $e( 'rt_' . $n . '_d' ); ?></td><td class="kp-table__price"><span class="kp-table__label"><?php echo esc_html( kataribe_partners_t( 'rt_h3' ) ); ?></span><?php echo $e( 'rt_' . $n . '_p' ); ?></td></tr><?php endfor; ?></tbody></table>
<!-- /wp:html -->

<!-- wp:group {"className":"kp-retainers__foot","layout":{"type":"default"}} -->
<div class="wp-block-group kp-retainers__foot"><!-- wp:paragraph {"className":"kp-foot"} -->
<p class="kp-foot"><?php echo esc_html( kataribe_partners_t( 'rt_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-more"} -->
<p class="kp-more"><a href="/retainers/"><?php echo esc_html( kataribe_partners_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
