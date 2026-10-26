<?php
/**
 * Title: Home: waitlist
 * Slug: fumi-launch/front-waitlist
 * Categories: fumi-launch
 * Viewport Width: 1440
 * Description: Closing call to action with the stamp.
 */
?>
<!-- wp:group {"className":"fl-sec fl-sec--field","anchor":"waitlist","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section id="waitlist" class="wp-block-group alignfull fl-sec fl-sec--field">
<!-- wp:group {"className":"fl-frame fl-frame--wide","layout":{"type":"default"}} -->
<div class="wp-block-group fl-frame fl-frame--wide">
<!-- wp:columns {"className":"fl-cols fl-cols--wl"} -->
<div class="wp-block-columns fl-cols fl-cols--wl"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%">
<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"fl-ph sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full fl-ph sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/envelope-postcard.webp' ) ); ?>" alt="<?php echo esc_attr( fumi_launch_t( 'a1aac52c2' ) ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%">
<!-- wp:paragraph {"className":"fl-label"} -->
<p class="fl-label"><?php echo wp_kses_post( fumi_launch_t( 'ke711da25' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"fl-h fl-h--xl"} -->
<h2 class="wp-block-heading fl-h fl-h--xl"><?php echo wp_kses_post( fumi_launch_t( 'ka61f8ff9' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fl-lead"} -->
<p class="fl-lead"><?php echo wp_kses_post( fumi_launch_t( 'k0d120e56' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"fl-btns"} -->
<div class="wp-block-buttons fl-btns"><!-- wp:button {"className":"fl-btn"} -->
<div class="wp-block-button fl-btn"><a class="wp-block-button__link wp-element-button" href="/editions/#order"><?php echo wp_kses_post( fumi_launch_t( 'kde08ef55' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"fl-arrow"} -->
<p class="fl-arrow"><a href="/newsletter/"><?php echo wp_kses_post( fumi_launch_t( 'ka56eeca8' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="fl-stamp fl-stamp--inline" href="/editions/#order" aria-label="<?php echo esc_attr( fumi_launch_t( 'aae289b7f' ) ); ?>"><svg class="fl-stamp__ring" viewBox="0 0 200 200" aria-hidden="true" focusable="false"><defs><path id="fl-ring-3" d="M100,100 m-80,0 a80,80 0 1,1 160,0 a80,80 0 1,1 -160,0"/></defs><text><textPath href="#fl-ring-3" textLength="496" lengthAdjust="spacing">PRE-ORDER · SIGNED FIRST PRINTING · 18 MARCH 2027 · </textPath></text></svg><span class="fl-stamp__c"><span><?php echo wp_kses_post( fumi_launch_t( 'kde08ef55' ) ); ?></span><b>↗</b></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
