<?php
/**
 * Title: Home: notice strip, diagonal-split hero and twin audience bars
 * Slug: kikai-fair/front-hero
 * Categories: kikai-fair
 * Keywords: hero, fair, home
 * Viewport Width: 1440
 * Description: Notice strip, a photo cut by a 12 degree diagonal into a graphite panel with the H1, a date card, a day timeline line and two audience bars docked over the lower edge.
 */
?>
<!-- wp:group {"align":"full","className":"kf-notice","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kf-notice"><!-- wp:paragraph {"className":"kf-notice__tab"} -->
<p class="kf-notice__tab">Notice</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kf-notice__text"} -->
<p class="kf-notice__text"><a href="/#pass">Pass requests close 21 February 2027 ›</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kf-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-hero" id="top"><!-- wp:html -->
<div class="kf-hero__photo">
<input class="kf-pause-input" type="checkbox" id="kf-pause" aria-label="Pause the photo slideshow"/>
<figure class="kf-slide kf-slide--1"><img src="<?php echo kikai_fair_img( 'h01-panel-saw.webp' ); ?>" alt="Exhibitor cuts a birch panel on a sliding saw while a buyer watches with ear defenders lowered" width="1800" height="1200" fetchpriority="high"/></figure>
<figure class="kf-slide kf-slide--2"><img src="<?php echo kikai_fair_img( 'h02-cnc-router.webp' ); ?>" alt="Two visitors behind a safety barrier watching a CNC router nest cabinet parts" width="1800" height="1200"/></figure>
<figure class="kf-slide kf-slide--3"><img src="<?php echo kikai_fair_img( 'h03-edgebander.webp' ); ?>" alt="Exhibitor feeds a white panel through an edgebander while a visitor inspects a finished edge" width="1800" height="1200"/></figure>
<label class="kf-pause" for="kf-pause"><span class="kf-pause__icon" aria-hidden="true"></span><span class="screen-reader-text">Pause or resume the slideshow</span></label>
<div class="kf-datecard"><p class="kf-datecard__d">9–11 March 2027</p><p class="kf-datecard__p">Hall 4 · Riverside Exhibition Centre</p></div>
</div>
<!-- /wp:html -->

<!-- wp:group {"className":"kf-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kf-hero__panel"><!-- wp:heading {"level":1,"className":"kf-hero__title"} -->
<h1 class="wp-block-heading kf-hero__title">Machines running. Buyers listening.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kf-hero__lead"} -->
<p class="kf-hero__lead">The 9th trade fair for woodworking machinery puts 62 machines under power in Hall 4, Tuesday 9 to Thursday 11 March 2027. Meet 180 exhibitors on 22,000 square metres of live demonstrations.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kf-btn-line kf-btn-line--dark"} -->
<div class="wp-block-buttons kf-btn-line kf-btn-line--dark"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#pass">Request a pass<svg class="kf-arrow" width="28" height="6" viewBox="0 0 28 6" aria-hidden="true" focusable="false"><path d="M0 3H27M23.5.5 27 3l-3.5 2.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:html -->
<ol class="kf-timeline" aria-label="Fair days"><li><span class="kf-timeline__d">Day 1</span><span class="kf-timeline__t">Tue 9 Mar · 09:00–17:30</span></li><li><span class="kf-timeline__d">Day 2</span><span class="kf-timeline__t">Wed 10 Mar · 09:00–17:30</span></li><li><span class="kf-timeline__d">Day 3</span><span class="kf-timeline__t">Thu 11 Mar · 09:00–16:00</span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kf-bars"><a class="kf-bar-door kf-bar-door--visitors" href="#pass"><span class="kf-bar-door__s">For</span><span class="kf-bar-door__w">visitors</span><svg class="kf-bar-door__a" width="48" height="8" viewBox="0 0 48 8" aria-hidden="true" focusable="false"><path d="M0 4H47M42.5 .5 47 4l-4.5 3.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a><a class="kf-bar-door kf-bar-door--exhibitors" href="/exhibitors/#stand"><span class="kf-bar-door__s">For</span><span class="kf-bar-door__w">exhibitors</span><svg class="kf-bar-door__a" width="48" height="8" viewBox="0 0 48 8" aria-hidden="true" focusable="false"><path d="M0 4H47M42.5 .5 47 4l-4.5 3.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
