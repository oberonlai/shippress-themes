<?php
/**
 * Title: Home: tagline, rounded photo and timeline line
 * Slug: ishizue-holdings/front-hero
 * Categories: ishizue-holdings
 * Description: Tagline at the left, a rounded photograph bleeding off the right edge with a sliver photograph at the far left, the notices pill and a curve-ended timeline line with year dots.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ih-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ih-hero"><!-- wp:group {"className":"ih-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group ih-hero__text"><!-- wp:heading {"level":1,"className":"ih-hero__h1"} -->
<h1 class="wp-block-heading ih-hero__h1">Foundations<br>laid once,<br>built on<br>for decades.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ih-hero__lead"} -->
<p class="ih-hero__lead">A family of six companies in Northern Europe, owned for the long term since 1962.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ih-hero__media"><div class="ih-hero__photo sp-parallax" style="--sp-par:8%"><img src="<?php echo ishizue_holdings_img( 'p01.webp' ); ?>" alt="Pale stone and glass headquarters on a harbour quay, two people walking." fetchpriority="high"/></div><div class="ih-hero__sliver"><img src="<?php echo ishizue_holdings_img( 'p02.webp' ); ?>" alt=""/></div><a class="ih-pill ih-pill--topics" href="/investors/"><span class="ih-pill__k">Notices</span><span class="ih-pill__t">Interim report H1 2026 published · 28 Aug 2026</span></a></div>
<!-- /wp:html -->

<!-- wp:html -->
<nav class="ih-tl" aria-label="Group timeline"><div class="ih-curve" aria-hidden="true"></div><a class="ih-tl__pt" style="--x:0.000000" href="#c-1962"><i></i><span>1962</span></a><a class="ih-tl__pt" style="--x:0.250000" href="#c-1978"><i></i><span>1978</span></a><a class="ih-tl__pt" style="--x:0.500000" href="#c-1994"><i></i><span>1994</span></a><a class="ih-tl__pt" style="--x:0.734375" href="#c-2009"><i></i><span>2009</span></a><a class="ih-tl__pt" style="--x:0.843750" href="#c-2016"><i></i><span>2016</span></a><a class="ih-tl__pt" style="--x:0.921875" href="#c-2021"><i></i><span>2021</span></a><a class="ih-tl__pt ih-tl__pt--now" style="--x:1.000000" href="/history/"><i></i><span>2026</span></a></nav>
<!-- /wp:html --></section>
<!-- /wp:group -->
