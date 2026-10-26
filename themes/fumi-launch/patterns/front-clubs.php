<?php
/**
 * Title: Home: book clubs
 * Slug: fumi-launch/front-clubs
 * Categories: fumi-launch
 * Viewport Width: 1440
 * Description: Ivory band for reading groups.
 */
?>
<!-- wp:group {"className":"fl-sec fl-sec--paper","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fl-sec fl-sec--paper">
<!-- wp:group {"className":"fl-frame fl-frame--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group fl-frame fl-frame--narrow">
<!-- wp:columns {"className":"fl-cols fl-cols--bc"} -->
<div class="wp-block-columns fl-cols fl-cols--bc"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"fl-ph sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full fl-ph sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/book-club-table.webp' ) ); ?>" alt="<?php echo esc_attr( fumi_launch_t( 'a153a5c2f' ) ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:paragraph {"className":"fl-label"} -->
<p class="fl-label"><?php echo wp_kses_post( fumi_launch_t( 'kcf603677' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"fl-h fl-h--l"} -->
<h2 class="wp-block-heading fl-h fl-h--l"><?php echo wp_kses_post( fumi_launch_t( 'k5ce631fc' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( fumi_launch_t( 'k19bc2efd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fl-arrow"} -->
<p class="fl-arrow"><a href="#editions"><?php echo wp_kses_post( fumi_launch_t( 'kd658dee5' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
