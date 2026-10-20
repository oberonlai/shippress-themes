<?php
/**
 * Title: Home: long stays and company accounts (an essay in two columns)
 * Slug: minato-business-hotel/front-accounts
 * Categories: minato-business-hotel
 * Keywords: business, company, long stay
 * Viewport Width: 1440
 * Description: A heading and an essay on company accounts and long stays in two columns, three plain terms below and a small photograph of the lounge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-essay","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-essay"><!-- wp:group {"align":"wide","className":"mb-essay__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-essay__grid"><!-- wp:group {"className":"mb-essay__head","layout":{"type":"default"}} -->
<div class="wp-block-group mb-essay__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'front_accounts_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( minato_business_hotel_t( 'front_accounts_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-essay__photo"} -->
<figure class="wp-block-image size-large mb-essay__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lounge-work.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'front_accounts_alt' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-essay__cols","layout":{"type":"default"}} -->
<div class="wp-block-group mb-essay__cols"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'front_accounts_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'front_accounts_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"mb-essay__terms"} -->
<ul class="wp-block-list mb-essay__terms"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_accounts_t1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_accounts_t2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_accounts_t3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/business/"><?php echo wp_kses_post( minato_business_hotel_t( 'front_accounts_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
