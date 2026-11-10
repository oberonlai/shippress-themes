<?php
/**
 * Title: Home: full-bleed photograph, headline, ring, info bar
 * Slug: kantei-valuers/front-hero
 * Categories: kantei-valuers
 * Keywords: hero, valuer, first screen
 * Viewport Width: 1440
 * Description: Full-bleed documentary photograph under the logo tile and nav slab, a two-line headline over a 20 px rule at the bottom-left, a turning ring badge at the bottom-right and a white three-cell info bar.
 */
$e = 'kantei_valuers_e';
$a = 'kantei_valuers_a';
$i = 'kantei_valuers_img';
$p = explode( '|', kantei_valuers_t( 'hero_title' ) );
?>
<!-- wp:cover {"url":"<?php echo $i( 'h01-shopfront-tape.webp' ); ?>","alt":"<?php echo $a( 'alt_hero' ); ?>","dimRatio":0,"isDark":false,"align":"full","tagName":"section","anchor":"top","className":"kv-hero sp-parallax","layout":{"type":"default"}} -->
<section id="top" class="wp-block-cover alignfull is-light kv-hero sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo $a( 'alt_hero' ); ?>" src="<?php echo $i( 'h01-shopfront-tape.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kv-hero__row","layout":{"type":"default"}} -->
<div class="wp-block-group kv-hero__row"><!-- wp:group {"className":"kv-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kv-hero__text"><!-- wp:heading {"level":1,"className":"kv-hero__title"} -->
<h1 class="wp-block-heading kv-hero__title"><?php foreach ( $p as $n => $line ) { echo '<span class="kv-line kv-line--' . ( $n + 1 ) . '">' . esc_html( $line ) . '</span>'; } ?></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"kv-hero__rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity kv-hero__rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"kv-hero__sub"} -->
<p class="kv-hero__sub"><?php echo $e( 'hero_sub1' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-hero__sub kv-hero__sub--caps"} -->
<p class="kv-hero__sub kv-hero__sub--caps"><?php echo $e( 'hero_sub2' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="kv-ring" href="#request"><span class="kv-ring__orbit" aria-hidden="true"><i></i><i></i></span><span class="kv-ring__label"><?php echo $e( 'ring' ); ?></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->

<!-- wp:group {"className":"kv-info","layout":{"type":"default"}} -->
<div class="wp-block-group kv-info"><!-- wp:group {"className":"kv-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group kv-info__cell"><!-- wp:paragraph {"className":"kv-info__n"} -->
<p class="kv-info__n"><?php echo $e( 'bar1_n' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-info__t"} -->
<p class="kv-info__t"><?php echo $e( 'bar1_t' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group kv-info__cell"><!-- wp:paragraph {"className":"kv-info__n"} -->
<p class="kv-info__n"><?php echo $e( 'bar2_n' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-info__t"} -->
<p class="kv-info__t"><?php echo $e( 'bar2_t' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group kv-info__cell"><!-- wp:paragraph {"className":"kv-info__n"} -->
<p class="kv-info__n"><?php echo $e( 'bar3_n' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-info__t"} -->
<p class="kv-info__t"><?php echo $e( 'bar3_t' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
