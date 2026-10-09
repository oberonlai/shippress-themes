<?php
/**
 * Title: Reservations — page opening
 * Slug: beni-kappo/reserve-intro
 * Categories: beni-kappo, banner
 * Keywords: reservations, booking, intro, seats, header
 * Viewport Width: 1440
 * Description: The reservations page head: a large title and how booking works, beside a tall noren-cut picture of the entrance curtain, with three numbered facts layered over its edge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bk-page-head is-style-lantern","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull bk-page-head is-style-lantern" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"bk-grid bk-layered","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide bk-grid bk-layered"><!-- wp:group {"className":"bk-reserve-intro__copy","style":{"layout":{"columnSpan":7,"columnStart":1},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bk-reserve-intro__copy"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Reservations</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"bk-page-head__title"} -->
<h1 class="wp-block-heading bk-page-head__title">Nine seats, <em>two seatings,</em> one long counter</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Seats for the following month open at noon on the first. Send a request below and we confirm by email within a day; nothing is held until you reply.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"bk-facts","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":3}} -->
<div class="wp-block-group bk-facts"><!-- wp:group {"className":"bk-fact","layout":{"type":"default"}} -->
<div class="wp-block-group bk-fact"><!-- wp:paragraph {"className":"bk-fact__num"} -->
<p class="bk-fact__num">9</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Seats at the counter</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bk-fact","layout":{"type":"default"}} -->
<div class="wp-block-group bk-fact"><!-- wp:paragraph {"className":"bk-fact__num"} -->
<p class="bk-fact__num">2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Seatings, Tue — Sat</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bk-fact","layout":{"type":"default"}} -->
<div class="wp-block-group bk-fact"><!-- wp:paragraph {"className":"bk-fact__num"} -->
<p class="bk-fact__num">6</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Guests per booking at most</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-noren-cut bk-layered__media","style":{"layout":{"columnSpan":5,"columnStart":8}}} -->
<figure class="wp-block-image size-full is-style-noren-cut bk-layered__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/noren-door.svg' ) ); ?>" alt="A red noren curtain in four panels hanging over a sliding wooden door, lit warmly from inside" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
