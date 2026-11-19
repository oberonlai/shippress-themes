<?php
/**
 * Title: Home: stacked photo strips
 * Slug: rinrin-cycletours/front-strips
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Two full-bleed parallax photograph strips in a 29px inset, each with a centred vertical caption and a right-edge stack of four arrow links: bike hire and luggage transfer.
 */
?>
<!-- wp:group {"className":"rc-strips","tagName":"section","anchor":"hire","align":"full","layout":{"type":"default"}} -->
<section id="hire" class="wp-block-group alignfull rc-strips"><!-- wp:group {"className":"rc-sstrip rc-sstrip--a sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group rc-sstrip rc-sstrip--a sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-sstrip__img"} -->
<figure class="wp-block-image size-full rc-sstrip__img"><img src="<?php echo rinrin_cycletours_img( 'strip-bikes.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_strip_bikes' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rc-sstrip__inner","layout":{"type":"default"}} -->
<div class="wp-block-group rc-sstrip__inner"><!-- wp:heading {"level":2,"className":"rc-sstrip__cap"} -->
<h2 class="wp-block-heading rc-sstrip__cap"><?php echo esc_html( rinrin_cycletours_t( 'strip_a_cap' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-sstrip__sub"} -->
<p class="rc-sstrip__sub"><?php echo esc_html( rinrin_cycletours_t( 'strip_a_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<nav class="rc-links" aria-label="<?php echo rinrin_cycletours_a( 'strip_a_cap_nav' ); ?>"><a href="<?php echo esc_url( home_url( '/bike-hire/#includes' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'strip_a_l1' ) ); ?></a><a href="<?php echo esc_url( home_url( '/bike-hire/#sizes' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'strip_a_l2' ) ); ?></a><a href="<?php echo esc_url( home_url( '/bike-hire/#ebike' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'strip_a_l3' ) ); ?></a><a href="<?php echo esc_url( home_url( '/bike-hire/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'strip_a_l4' ) ); ?></a></nav>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-sstrip rc-sstrip--b sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group rc-sstrip rc-sstrip--b sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-sstrip__img"} -->
<figure class="wp-block-image size-full rc-sstrip__img"><img src="<?php echo rinrin_cycletours_img( 'strip-van.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_strip_van' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rc-sstrip__inner","layout":{"type":"default"}} -->
<div class="wp-block-group rc-sstrip__inner"><!-- wp:heading {"level":2,"className":"rc-sstrip__cap"} -->
<h2 class="wp-block-heading rc-sstrip__cap"><?php echo esc_html( rinrin_cycletours_t( 'strip_b_cap' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-sstrip__sub"} -->
<p class="rc-sstrip__sub"><?php echo esc_html( rinrin_cycletours_t( 'strip_b_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<nav class="rc-links" aria-label="<?php echo rinrin_cycletours_a( 'strip_b_cap_nav' ); ?>"><a href="<?php echo esc_url( home_url( '/luggage/#van' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'strip_b_l1' ) ); ?></a><a href="<?php echo esc_url( home_url( '/luggage/#limits' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'strip_b_l2' ) ); ?></a><a href="<?php echo esc_url( home_url( '/luggage/#times' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'strip_b_l3' ) ); ?></a><a href="<?php echo esc_url( home_url( '/luggage/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'strip_b_l4' ) ); ?></a></nav>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
