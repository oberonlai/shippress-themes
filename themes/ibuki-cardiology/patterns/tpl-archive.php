<?php
/**
 * Title: Template: archive
 * Slug: ibuki-cardiology/tpl-archive
 * Categories: ibuki-cardiology
 * Viewport Width: 1440
 * Description: Listing head, slate strip and post rows with thumbnails.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ib-ph","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ib-ph"><!-- wp:paragraph {"className":"ib-pagehead__l"} -->
<p class="ib-pagehead__l">(News)</p>
<!-- /wp:paragraph --><!-- wp:query-title {"type":"archive","level":1,"className":"ib-pagehead__t"} /--></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"ib-proof ib-proof--strip","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ib-proof ib-proof--strip"><!-- wp:group {"className":"ib-step sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ib-step sp-stagger"><!-- wp:paragraph {"className":"ib-step__l ib-step__l--1 sp-reveal sp-reveal--up"} -->
<p class="ib-step__l ib-step__l--1 sp-reveal sp-reveal--up">Notes from</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ib-step__l ib-step__l--2 sp-reveal sp-reveal--up"} -->
<p class="ib-step__l ib-step__l--2 sp-reveal sp-reveal--up">the clinic week.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"className":"ib-newslist","layout":{"type":"default"}} -->
<div class="wp-block-group ib-newslist"><!-- wp:query {"queryId":21,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ib-newsq ib-newsq--page"} -->
<div class="wp-block-query ib-newsq ib-newsq--page"><!-- wp:post-template -->
<!-- wp:group {"className":"ib-newsrow ib-newsrow--thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ib-newsrow ib-newsrow--thumb"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"ib-newsrow__img"} /-->
<!-- wp:group {"className":"ib-newsrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group ib-newsrow__body"><!-- wp:post-date {"format":"M j, Y","className":"ib-newsrow__d"} /-->
<!-- wp:post-terms {"term":"category","className":"ib-newsrow__c"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ib-newsrow__t"} /-->
<!-- wp:post-excerpt {"excerptLength":24} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"ib-close ib-close--s","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ib-close ib-close--s"><!-- wp:group {"className":"ib-close__in","layout":{"type":"default"}} -->
<div class="wp-block-group ib-close__in"><!-- wp:group {"className":"ib-close__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ib-close__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ib-close__title"} -->
<h2 class="wp-block-heading ib-close__title">Book a first<br>visit.</h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ib-close__lead"} -->
<p class="ib-close__lead">We see new patients from Monday to Friday with scheduled appointments beginning at 08:30.</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ib-close__addr"} -->
<p class="ib-close__addr">Ibuki Cardiology<br>14 Harbour Lane, 2nd floor, Northbridge<br>Phone +1 555 0142<br>desk@ibuki-cardiology.example</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ib-close__addr"} -->
<p class="ib-close__addr">Monday–Friday 08:00–17:30<br>Saturday 09:00–12:30 (follow-ups only)<br>Closed Sunday and public holidays</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ib-close__media","layout":{"type":"default"}} -->
<div class="wp-block-group ib-close__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ib-close__img"} -->
<figure class="wp-block-image size-full ib-close__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p12-entrance.webp' ) ); ?>" alt="Clinic glass entrance and quiet sidewalk viewed from the street on a bright morning."/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ib-blk ib-blk--paper"} -->
<p class="ib-blk ib-blk--paper"><a href="/contact/">Book a visit<span class="ib-arr">↗</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
