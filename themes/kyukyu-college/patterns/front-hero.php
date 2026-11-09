<?php
/**
 * Title: Home: name lockup, framed photo with crossed polygons
 * Slug: kyukyu-college/front-hero
 * Categories: kyukyu-college
 * Keywords: front-hero
 * Viewport Width: 1440
 * Description: Three-line name lockup at the left overlapping a 1.3:1 photo flush to the right frame edge, crossed by three translucent polygons, a play disc, the lead line and a four-stop term line.
 */
?>
<!-- wp:group {"align": "full", "tagName": "section", "anchor": "top", "className": "kk-hero", "layout": {"type": "default"}} -->
<section id="top" class="wp-block-group alignfull kk-hero"><!-- wp:paragraph {"className": "kk-hero__lead"} -->
<p class="kk-hero__lead">Trained to arrive first.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level": 1, "className": "kk-hero__name"} -->
<h1 class="wp-block-heading kk-hero__name">KYU<br>KYU<br><span class="kk-l3">COLLEGE</span></h1>
<!-- /wp:heading -->
<!-- wp:group {"className": "kk-hero__photo sp-parallax", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-hero__photo sp-parallax"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kyukyu_college_img( 'p01-timing-compressions.webp' ); ?>" alt="An instructor with a stopwatch times a student performing chest compressions on a training manikin."/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="kk-disc" href="/#term"><span class="kk-disc__btn" aria-hidden="true"></span><span class="kk-disc__cap">Watch a drill</span></a>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:html -->
<ul class="kk-term"><li><strong>Sep</strong> · Classroom</li><li><strong>Dec</strong> · Skills lab</li><li><strong>Mar</strong> · Ride-along</li><li><strong>Jul</strong> · Qualify</li></ul>
<!-- /wp:html --></section>
<!-- /wp:group -->
