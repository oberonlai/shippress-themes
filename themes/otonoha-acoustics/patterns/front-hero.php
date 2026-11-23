<?php
/**
 * Title: Home: diagonal-split first screen
 * Slug: otonoha-acoustics/front-hero
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Description: Pale upper-left half with the staggered headline, a dark low-key auditorium photograph below a rising diagonal seam with the second headline line in white, the outline booking pill and a five-tick survey-day timeline on the photo.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-hero","anchor":"top","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull oto-hero"><!-- wp:group {"className":"oto-hero__plate","layout":{"type":"default"}} -->
<div class="wp-block-group oto-hero__plate"><!-- wp:group {"className":"sp-parallax oto-hero__par","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax oto-hero__par" style="padding-top:0;padding-bottom:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"oto-hero__img"} -->
<figure class="wp-block-image size-full oto-hero__img"><img src="<?php echo otonoha_acoustics_img( 'p01-auditorium-survey.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-hero__text oto-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group oto-hero__text oto-wrap"><!-- wp:paragraph {"className":"oto-eyebrow"} -->
<p class="oto-eyebrow"><?php echo esc_html( otonoha_acoustics_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"oto-h1"} -->
<h1 class="wp-block-heading oto-h1"><span class="oto-l1"><?php echo esc_html( otonoha_acoustics_t( 'hero_l1' ) ); ?></span> <span class="oto-l2"><?php echo esc_html( otonoha_acoustics_t( 'hero_l2' ) ); ?></span></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"oto-lead"} -->
<p class="oto-lead"><?php echo esc_html( otonoha_acoustics_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-pill oto-pill--hero"} -->
<p class="oto-pill oto-pill--hero"><a href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'cta_label' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-timeline oto-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group oto-timeline oto-wrap"><!-- wp:list {"className":"oto-tl"} -->
<ul class="wp-block-list oto-tl"><!-- wp:list-item -->
<li><span class="oto-tl__t"><?php echo esc_html( otonoha_acoustics_t( 'tl_1_t' ) ); ?></span><span class="oto-tl__l"><?php echo esc_html( otonoha_acoustics_t( 'tl_1_l' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="oto-tl__t"><?php echo esc_html( otonoha_acoustics_t( 'tl_2_t' ) ); ?></span><span class="oto-tl__l"><?php echo esc_html( otonoha_acoustics_t( 'tl_2_l' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="oto-tl__t"><?php echo esc_html( otonoha_acoustics_t( 'tl_3_t' ) ); ?></span><span class="oto-tl__l"><?php echo esc_html( otonoha_acoustics_t( 'tl_3_l' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="oto-tl__t"><?php echo esc_html( otonoha_acoustics_t( 'tl_4_t' ) ); ?></span><span class="oto-tl__l"><?php echo esc_html( otonoha_acoustics_t( 'tl_4_l' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="oto-tl__t"><?php echo esc_html( otonoha_acoustics_t( 'tl_5_t' ) ); ?></span><span class="oto-tl__l"><?php echo esc_html( otonoha_acoustics_t( 'tl_5_l' ) ); ?></span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
