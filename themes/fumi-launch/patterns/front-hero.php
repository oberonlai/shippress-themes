<?php
/**
 * Title: Home: hero
 * Slug: fumi-launch/front-hero
 * Categories: fumi-launch
 * Viewport Width: 1440
 * Description: Framed-window photograph with the giant title crossing it, the persimmon author name and the rotating pre-order stamp on a green field.
 */
?>
<!-- wp:group {"className":"fl-hero","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fl-hero">
<!-- wp:group {"className":"fl-frame fl-hero__frame","layout":{"type":"default"}} -->
<div class="wp-block-group fl-frame fl-hero__frame">
<!-- wp:paragraph {"className":"fl-hero__eyebrow"} -->
<p class="fl-hero__eyebrow"><?php echo wp_kses_post( fumi_launch_t( 'k7c5bb362' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fl-hero__name"} -->
<p class="fl-hero__name"><?php echo wp_kses_post( fumi_launch_t( 'k01fd00f2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"fl-hero__window sp-parallax","layout":{"type":"default"},"style":{"spacing":{}}} -->
<div class="wp-block-group fl-hero__window sp-parallax">
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"fl-ph "} -->
<figure class="wp-block-image size-full fl-ph "><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-book-cafe.webp' ) ); ?>" alt="<?php echo esc_attr( fumi_launch_t( 'a782e03b1' ) ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"fl-h fl-hero__title"} -->
<h1 class="wp-block-heading fl-h fl-hero__title"><?php echo wp_kses_post( fumi_launch_t( 'k33d05da2' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fl-hero__cap"} -->
<p class="fl-hero__cap"><?php echo wp_kses_post( fumi_launch_t( 'k573cd148' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="fl-stamp fl-stamp--hero" href="/editions/#order" aria-label="<?php echo esc_attr( fumi_launch_t( 'aae289b7f' ) ); ?>"><svg class="fl-stamp__ring" viewBox="0 0 200 200" aria-hidden="true" focusable="false"><defs><path id="fl-ring-1" d="M100,100 m-80,0 a80,80 0 1,1 160,0 a80,80 0 1,1 -160,0"/></defs><text><textPath href="#fl-ring-1" textLength="496" lengthAdjust="spacing">PRE-ORDER · SIGNED FIRST PRINTING · 18 MARCH 2027 · </textPath></text></svg><span class="fl-stamp__c"><span><?php echo wp_kses_post( fumi_launch_t( 'kde08ef55' ) ); ?></span><b>↗</b></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
