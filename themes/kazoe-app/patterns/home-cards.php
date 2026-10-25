<?php
/**
 * Title: Home: built for the counter cards
 * Slug: kazoe-app/home-cards
 * Categories: kazoe-app
 * Keywords: bookkeeping, landing
 * Viewport Width: 1440
 * Description: Three full-width photo cards separated by 1px vertical rules with a caption box for each shop type.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"shops","className":"kz-cards-sec","layout":{"type":"default"}} -->
<section id="shops" class="wp-block-group alignfull kz-cards-sec"><!-- wp:group {"className":"kz-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group kz-sechead"><!-- wp:heading {"level":2,"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><span class="kz-box">Built for</span><span class="kz-box">the counter</span></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"kz-sub-lead"} -->
<p class="kz-sub-lead">Tailored to independent shop workflows.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-cards sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kz-cards sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"kz-card","layout":{"type":"default"}} -->
<div class="wp-block-group kz-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-card__photo"} -->
<figure class="wp-block-image size-full kz-card__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k06-cafe-counter.webp' ) ); ?>" alt="Bright coffee shop counter displaying fresh pastries with a barista working behind it"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kz-card__cap","layout":{"type":"default"}} -->
<div class="wp-block-group kz-card__cap"><!-- wp:paragraph {"className":"kz-card__tag"} -->
<p class="kz-card__tag">Corner café</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"kz-card__text"} -->
<p class="kz-card__text">Keep queues moving quickly through busy morning rushes and reconcile shifts onto a single closing report.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-card","layout":{"type":"default"}} -->
<div class="wp-block-group kz-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-card__photo"} -->
<figure class="wp-block-image size-full kz-card__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k07-florist.webp' ) ); ?>" alt="Florist arranging and wrapping a fresh floral bouquet at a white worktable"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kz-card__cap","layout":{"type":"default"}} -->
<div class="wp-block-group kz-card__cap"><!-- wp:paragraph {"className":"kz-card__tag"} -->
<p class="kz-card__tag">Florist</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"kz-card__text"} -->
<p class="kz-card__text">Manage custom bouquets, seasonal stems, and fluctuating sales volumes with instant receipt capture and organized records.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-card","layout":{"type":"default"}} -->
<div class="wp-block-group kz-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-card__photo"} -->
<figure class="wp-block-image size-full kz-card__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k08-bike-repair.webp' ) ); ?>" alt="Bicycle mechanic servicing a bike on a repair stand in a sunlit workshop"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kz-card__cap","layout":{"type":"default"}} -->
<div class="wp-block-group kz-card__cap"><!-- wp:paragraph {"className":"kz-card__tag"} -->
<p class="kz-card__tag">Bike repair shop</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"kz-card__text"} -->
<p class="kz-card__text">Record workshop service labor, components, and parts sales without spending your evening counting drawer coins.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
