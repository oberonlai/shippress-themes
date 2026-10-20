<?php
/**
 * Title: Home: invitation over a photograph with the deep band
 * Slug: hatsumei-patent/front-close
 * Categories: hatsumei-patent
 * Keywords: contact, call to action, office
 * Viewport Width: 1440
 * Description: A full-width photograph of the studio with a dark gradient at the left, three stacked white lines and a button, over a deep blue band with the address, hours and telephone.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hp-close"><!-- wp:group {"className":"hp-close__photo-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hp-close__photo-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-close__photo"} -->
<figure class="wp-block-image size-full hp-close__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio-wide.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_close_img' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hp-close__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-close__text"><!-- wp:heading {"level":2,"className":"hp-close__title"} -->
<h2 class="wp-block-heading hp-close__title"><?php echo wp_kses_post( hatsumei_patent_t( 'front_close_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"hp-close__btns"} -->
<div class="wp-block-buttons hp-close__btns"><!-- wp:button {"className":"is-style-outline-light"} -->
<div class="wp-block-button is-style-outline-light"><a class="wp-block-button__link wp-element-button" href="/first-meeting/"><?php echo wp_kses_post( hatsumei_patent_t( 'front_close_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-band-bar hp-band-bar--close","layout":{"type":"default"}} -->
<div class="wp-block-group hp-band-bar hp-band-bar--close"><!-- wp:paragraph {"className":"hp-band-bar__count"} -->
<p class="hp-band-bar__count"><?php echo wp_kses_post( hatsumei_patent_t( 'front_close_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-band-bar__text"} -->
<p class="hp-band-bar__text"><?php echo wp_kses_post( hatsumei_patent_t( 'front_close_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-band-bar__scroll"} -->
<p class="hp-band-bar__scroll"><?php echo wp_kses_post( hatsumei_patent_t( 'front_close_tel' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
