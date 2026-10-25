<?php
/**
 * Title: Home: split hero with label boxes
 * Slug: kazoe-app/home-hero
 * Categories: kazoe-app
 * Keywords: bookkeeping, landing
 * Viewport Width: 1440
 * Description: Top steel-blue band with dither dots and stepped label-box headline over a pale sky and blush band holding the owner photo.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kz-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-hero"><!-- wp:group {"className":"kz-hero__top sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kz-hero__top sp-parallax"><!-- wp:html -->
<div class="kz-dither sp-parallax__layer" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kz-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kz-hero__text"><!-- wp:heading {"level":1,"className":"kz-hero__title"} -->
<h1 class="wp-block-heading kz-hero__title"><span class="kz-box">Close the day</span><span class="kz-box">in one tap.</span></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"kz-hero__subs","layout":{"type":"default"}} -->
<div class="wp-block-group kz-hero__subs"><!-- wp:paragraph {"className":"kz-sub"} -->
<p class="kz-sub"><span class="kz-box kz-box--sm">Every sale tallied as it happens.</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-sub"} -->
<p class="kz-sub"><span class="kz-box kz-box--sm">Tax exports, ready for your accountant.</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-sub"} -->
<p class="kz-sub"><span class="kz-box kz-box--sm">No training. Set up in about 10 minutes.</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-hero__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group kz-hero__bottom"><!-- wp:group {"className":"kz-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kz-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k01-closing-till.webp' ) ); ?>" alt="Shop owner closing a till drawer at a counter while holding a smartphone"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
