<?php
/**
 * Title: Home: close
 * Slug: kazu-data-course/front-close
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: T1 echo: flush-left display line over a split with a framed photo.
 */
?>
<!-- wp:group {"className":"kz-close","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull kz-close"><!-- wp:group {"className":"kz-head","layout":{"type":"default"}} -->
<div class="wp-block-group kz-head"><!-- wp:heading {"className":"kz-display kz-display--close"} -->
<h2 class="wp-block-heading kz-display kz-display--close"><?php echo esc_html( kazu_t( 'cl_display' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-subline"} -->
<p class="kz-subline"><?php echo esc_html( kazu_t( 'cl_sub' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-mid kz-alt kz-alt--rev kz-alt--close","layout":{"type":"default"}} -->
<div class="wp-block-group kz-mid kz-alt kz-alt--rev kz-alt--close"><!-- wp:group {"className":"kz-alt__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kz-alt__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-photo kz-photo--45"} -->
<figure class="wp-block-image size-full kz-photo kz-photo--45"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-kazu-window.webp' ) ); ?>" alt="<?php echo esc_attr( kazu_t( 'alt_p12' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-alt__text","layout":{"type":"default"}} -->
<div class="wp-block-group kz-alt__text"><!-- wp:paragraph {"className":"kz-text"} -->
<p class="kz-text"><?php echo esc_html( kazu_t( 'cl_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kz-actions__buy kz-actions__two","layout":{"type":"flex"}} -->
<div class="wp-block-buttons kz-actions__buy kz-actions__two"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/curriculum/"><?php echo esc_html( kazu_t( 'cl_btn1' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":""} -->
<div class="wp-block-button "><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( kazu_buy_url() ); ?>"><?php echo esc_html( kazu_t( 'cl_btn2' ) ); ?></a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kz-small"} -->
<p class="kz-small"><?php echo esc_html( kazu_t( 'cl_hours' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
