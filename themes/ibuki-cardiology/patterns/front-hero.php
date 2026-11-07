<?php
/**
 * Title: Home: hero
 * Slug: ibuki-cardiology/front-hero
 * Categories: ibuki-cardiology
 * Viewport Width: 1440
 * Description: White head band with a two-line headline, a full-bleed photograph and an ink info bar fused to its foot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ib-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ib-hero"><!-- wp:group {"className":"ib-hero__band","layout":{"type":"default"}} -->
<div class="wp-block-group ib-hero__band"><!-- wp:heading {"level":1,"className":"ib-hero__h1"} -->
<h1 class="wp-block-heading ib-hero__h1"><span class="ib-line">A clinic that follows the heart</span> <span class="ib-line">through the working week.</span></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p01-echo-room.webp' ) ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.4},"isDark":false,"className":"ib-hero__photo sp-parallax"} -->
<div class="wp-block-cover ib-hero__photo sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Sonographer placing an ultrasound probe on a patient&#x27;s chest beside a reviewing cardiologist." src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p01-echo-room.webp' ) ); ?>" style="object-position:50% 40%" data-object-fit="cover" data-object-position="50% 40%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"ib-hero__bar","layout":{"type":"default"}} -->
<div class="wp-block-group ib-hero__bar"><!-- wp:paragraph {"className":"ib-bar__i"} -->
<p class="ib-bar__i"><span class="ib-dot"></span>Open today 08:00–17:30</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ib-bar__i"} -->
<p class="ib-bar__i">First-visit echo slots from 08:30</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ib-bar__i"} -->
<p class="ib-bar__i">Follow-up desk 13:00–16:00</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ib-bar__i ib-bar__more"} -->
<p class="ib-bar__i ib-bar__more"><a href="/clinics/">Clinics by day<span class="ib-arr">↗</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
