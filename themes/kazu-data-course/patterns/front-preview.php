<?php
/**
 * Title: Home: free preview
 * Slug: kazu-data-course/front-preview
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: A framed 16:9 window with a play button.
 */
?>
<!-- wp:group {"className":"kz-sec kz-preview","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull kz-sec kz-preview"><!-- wp:group {"className":"kz-col kz-col--center","layout":{"type":"default"}} -->
<div class="wp-block-group kz-col kz-col--center"><!-- wp:paragraph {"className":"kz-eyebrow"} -->
<p class="kz-eyebrow"><?php echo esc_html( kazu_t( 'pv_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><?php echo esc_html( kazu_t( 'pv_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-text"} -->
<p class="kz-text"><?php echo esc_html( kazu_t( 'pv_text' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-mid","layout":{"type":"default"}} -->
<div class="wp-block-group kz-mid"><!-- wp:group {"className":"kz-frame kz-frame--wide","layout":{"type":"default"}} -->
<div class="wp-block-group kz-frame kz-frame--wide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-photo kz-photo--169"} -->
<figure class="wp-block-image size-full kz-photo kz-photo--169"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10-studio.webp' ) ); ?>" alt="<?php echo esc_attr( kazu_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kz-playbtn"} -->
<p class="kz-playbtn"><a href="/curriculum/" aria-label="<?php echo esc_html( kazu_t( 'pv_play' ) ); ?>"><span aria-hidden="true">▶</span></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kz-caption kz-caption--c"} -->
<p class="kz-caption kz-caption--c"><?php echo esc_html( kazu_t( 'pv_cap' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
