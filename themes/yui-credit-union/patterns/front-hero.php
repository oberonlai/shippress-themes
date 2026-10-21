<?php
/**
 * Title: Home: hero
 * Slug: yui-credit-union/front-hero
 * Categories: yui-credit-union
 * Keywords: credit union, home
 * Viewport Width: 1440
 * Description: Inset branch photograph under the floating bar, then the headline, intro, pills and a dashed fact line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ycu-sec ycu-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ycu-sec ycu-hero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ycu-hero__photo"} -->
<figure class="wp-block-image size-full ycu-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/branch-counter.webp' ) ); ?>" alt="A member and a teller talk across a light wood counter in a bright branch" loading="eager" fetchpriority="high"/></figure>
<!-- /wp:image --><!-- wp:group {"align":"wide","className":"ycu-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ycu-hero__text"><!-- wp:heading {"level":1,"className":"ycu-hero__title has-huge-font-size"} -->
<h1 class="wp-block-heading ycu-hero__title has-huge-font-size">Banking owned by<br>the people who <em>use</em> it.</h1>
<!-- /wp:heading --><!-- wp:group {"className":"ycu-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group ycu-hero__side"><!-- wp:paragraph -->
<p>Yui Credit Union is a not-for-profit cooperative in Lindenport. Every member owns a share, every member gets one vote, and what we earn comes back as better rates.</p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"ycu-btns ","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons ycu-btns "><!-- wp:button {"className":"ycu-btn"} -->
<div class="wp-block-button ycu-btn"><a class="wp-block-button__link wp-element-button" href="/membership/">Become a member</a></div>
<!-- /wp:button --><!-- wp:button {"className":"ycu-btn ycu-btn--ghost"} -->
<div class="wp-block-button ycu-btn ycu-btn--ghost"><a class="wp-block-button__link wp-element-button" href="/rates/">See sample rates</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"align":"wide","className":"ycu-fact","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ycu-fact"><!-- wp:paragraph {"className":"ycu-fact__line"} -->
<p class="ycu-fact__line"><span>1961</span><span>18,420 members</span><span>3 branches</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
