<?php
/**
 * Title: Home: author
 * Slug: fumi-launch/front-author
 * Categories: fumi-launch
 * Viewport Width: 1440
 * Description: Portrait and short biography with a four-row history.
 */
?>
<!-- wp:group {"className":"fl-sec fl-sec--field","anchor":"author","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section id="author" class="wp-block-group alignfull fl-sec fl-sec--field">
<!-- wp:group {"className":"fl-frame fl-frame--wide","layout":{"type":"default"}} -->
<div class="wp-block-group fl-frame fl-frame--wide">
<!-- wp:columns {"className":"fl-cols fl-cols--au"} -->
<div class="wp-block-columns fl-cols fl-cols--au"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%">
<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"fl-ph sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full fl-ph sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/author-window.webp' ) ); ?>" alt="<?php echo esc_attr( fumi_launch_t( 'a2d883ec5' ) ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%">
<!-- wp:paragraph {"className":"fl-label"} -->
<p class="fl-label"><?php echo wp_kses_post( fumi_launch_t( 'ka517747c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"fl-h fl-h--l"} -->
<h2 class="wp-block-heading fl-h fl-h--l"><?php echo wp_kses_post( fumi_launch_t( 'k01fd00f2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fl-lead"} -->
<p class="fl-lead"><?php echo wp_kses_post( fumi_launch_t( 'k05b2a3c0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"fl-hists sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group fl-hists sp-stagger">
<!-- wp:group {"className":"fl-hist sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fl-hist sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"fl-hist__y"} -->
<p class="fl-hist__y">2014</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fl-hist__t"} -->
<p class="fl-hist__t"><?php echo wp_kses_post( fumi_launch_t( 'k7eece6e9' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"fl-hist sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fl-hist sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"fl-hist__y"} -->
<p class="fl-hist__y">2018</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fl-hist__t"} -->
<p class="fl-hist__t"><?php echo wp_kses_post( fumi_launch_t( 'k5e4802c8' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"fl-hist sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fl-hist sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"fl-hist__y"} -->
<p class="fl-hist__y">2022</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fl-hist__t"} -->
<p class="fl-hist__t"><?php echo wp_kses_post( fumi_launch_t( 'k87474b8f' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"fl-hist sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fl-hist sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"fl-hist__y"} -->
<p class="fl-hist__y">2027</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fl-hist__t"} -->
<p class="fl-hist__t"><?php echo wp_kses_post( fumi_launch_t( 'k9e11d83d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
