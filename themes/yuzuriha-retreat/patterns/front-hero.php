<?php
/**
 * Title: Home: full-bleed first-light hero with the day-line
 * Slug: yuzuriha-retreat/front-hero
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Full-bleed photograph under the frosted header, headline lower left on a dark forest glow, lede, and a hairline day-line with seven timed ticks.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-top","layout":{"type":"default"},"anchor":"top"} -->
<section id="top" class="wp-block-group yr-top"><!-- wp:cover {"url":"<?php echo yuzuriha_retreat_img( 'p01-deck-first-light.webp' ); ?>","dimRatio":0,"isDark":false,"minHeight":100,"minHeightUnit":"vh","className":"yr-hero sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light yr-hero sp-parallax" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo yuzuriha_retreat_a( 'alt_p01' ); ?>" src="<?php echo yuzuriha_retreat_img( 'p01-deck-first-light.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

<!-- wp:group {"className":"yr-hero__in","layout":{"type":"default"}} -->
<div class="wp-block-group yr-hero__in"><!-- wp:group {"className":"yr-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-hero__text"><!-- wp:html -->
<div class="yr-glow" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:heading {"level":1,"className":"yr-hero__h1"} -->
<h1 class="wp-block-heading yr-hero__h1"><?php echo yuzuriha_retreat_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-lede"} -->
<p class="yr-lede"><?php echo esc_html( yuzuriha_retreat_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-hero__link"} -->
<p class="yr-hero__link"><a href="#calendar"><?php echo esc_html( yuzuriha_retreat_t( 'hero_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-dl","layout":{"type":"default"}} -->
<div class="wp-block-group yr-dl"><!-- wp:group {"className":"yr-dl__marks","layout":{"type":"default"}} -->
<div class="wp-block-group yr-dl__marks"><!-- wp:paragraph {"className":"yr-dl__m yr-dl__m--1"} -->
<p class="yr-dl__m yr-dl__m--1"><span class="yr-dl__t">05:45</span> <?php echo esc_html( yuzuriha_retreat_t( 'dl_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-dl__m yr-dl__m--2"} -->
<p class="yr-dl__m yr-dl__m--2"><span class="yr-dl__t">06:15</span> <?php echo esc_html( yuzuriha_retreat_t( 'dl_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-dl__m yr-dl__m--3"} -->
<p class="yr-dl__m yr-dl__m--3"><span class="yr-dl__t">10:00</span> <?php echo esc_html( yuzuriha_retreat_t( 'dl_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-dl__m yr-dl__m--4"} -->
<p class="yr-dl__m yr-dl__m--4"><span class="yr-dl__t">12:30</span> <?php echo esc_html( yuzuriha_retreat_t( 'dl_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-dl__m yr-dl__m--5"} -->
<p class="yr-dl__m yr-dl__m--5"><span class="yr-dl__t">16:30</span> <?php echo esc_html( yuzuriha_retreat_t( 'dl_5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-dl__m yr-dl__m--6"} -->
<p class="yr-dl__m yr-dl__m--6"><span class="yr-dl__t">18:30</span> <?php echo esc_html( yuzuriha_retreat_t( 'dl_6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-dl__m yr-dl__m--7"} -->
<p class="yr-dl__m yr-dl__m--7"><span class="yr-dl__t">21:00</span> <?php echo esc_html( yuzuriha_retreat_t( 'dl_7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-dl__rule","layout":{"type":"default"}} -->
<div class="wp-block-group yr-dl__rule"><!-- wp:html -->
<span class="yr-dl__fill"></span><span class="yr-dl__dot"></span>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->
