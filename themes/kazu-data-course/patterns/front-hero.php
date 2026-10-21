<?php
/**
 * Title: Home: hero
 * Slug: kazu-data-course/front-hero
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: T1 flush-left display headline over the T2 framed portrait with a vertical name.
 */
?>
<!-- wp:group {"className":"kz-hero","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull kz-hero"><!-- wp:group {"className":"kz-head","layout":{"type":"default"}} -->
<div class="wp-block-group kz-head"><!-- wp:heading {"className":"kz-display","level":1} -->
<h1 class="wp-block-heading kz-display"><?php echo esc_html( kazu_t( 'hero_display' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-subline"} -->
<p class="kz-subline"><?php echo esc_html( kazu_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-t2","layout":{"type":"default"}} -->
<div class="wp-block-group kz-t2"><!-- wp:group {"className":"kz-t2__text","layout":{"type":"default"}} -->
<div class="wp-block-group kz-t2__text"><!-- wp:paragraph {"className":"kz-statement"} -->
<p class="kz-statement"><?php echo kazu_lines( 'hero_state' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-namesmall"} -->
<p class="kz-namesmall"><?php echo esc_html( kazu_t( 'hero_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-meta"} -->
<p class="kz-meta"><?php echo esc_html( kazu_t( 'hero_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kz-actions","layout":{"type":"default"}} -->
<div class="wp-block-group kz-actions"><!-- wp:buttons {"className":"kz-actions__buy","layout":{"type":"flex"}} -->
<div class="wp-block-buttons kz-actions__buy"><!-- wp:button {"className":""} -->
<div class="wp-block-button "><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( kazu_buy_url() ); ?>"><?php echo esc_html( kazu_t( 'btn_buy' ) ); ?></a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kz-play"} -->
<p class="kz-play"><a href="/curriculum/"><?php echo esc_html( kazu_t( 'btn_preview' ) ); ?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-frame","layout":{"type":"default"}} -->
<div class="wp-block-group kz-frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-photo kz-photo--34"} -->
<figure class="wp-block-image size-full kz-photo kz-photo--34"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-kazu-desk.webp' ) ); ?>" alt="<?php echo esc_attr( kazu_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kz-vname"} -->
<p class="kz-vname"><?php echo esc_html( kazu_t( 'hero_vname' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
