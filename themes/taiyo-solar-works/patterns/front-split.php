<?php
/**
 * Title: Home: split first screen
 * Slug: taiyo-solar-works/front-split
 * Categories: taiyo-solar-works
 * Keywords: home
 * Viewport Width: 1440
 * Description: Half-viewport roof photograph beside a graphite gradient panel with an inset portrait photograph, headline and a thin news line.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","className":"ts-split","align":"full","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull ts-split">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ts-split__photo"} -->
<figure class="wp-block-image size-large ts-split__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p1.webp' ) ); ?>" alt="<?php echo esc_attr( taiyo_solar_works_t( 'k7077e230' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<div class="ts-vlabel" aria-hidden="true"><span class="ts-vlabel__t"><?php echo wp_kses_post( taiyo_solar_works_t( 'k89fb511f' ) ); ?></span><span class="ts-vlabel__ring">07</span><span class="ts-vlabel__t"><?php echo wp_kses_post( taiyo_solar_works_t( 'k3cca5998' ) ); ?></span></div>
<!-- /wp:html -->
<!-- wp:group {"className":"ts-split__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ts-split__panel">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ts-split__inset"} -->
<figure class="wp-block-image size-large ts-split__inset"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p2.webp' ) ); ?>" alt="<?php echo esc_attr( taiyo_solar_works_t( 'k4aa79227' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"ts-split__head","layout":{"type":"default"}} -->
<div class="wp-block-group ts-split__head">
<!-- wp:paragraph {"className":"ts-split__tag"} -->
<p class="ts-split__tag"><?php echo wp_kses_post( taiyo_solar_works_t( 'ka63d6eaa' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"ts-split__title"} -->
<h1 class="wp-block-heading ts-split__title"><?php echo wp_kses_post( taiyo_solar_works_t( 'k46a3da6e' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ts-split__lead"} -->
<p class="ts-split__lead"><?php echo wp_kses_post( taiyo_solar_works_t( 'k53c74575' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"ts-split__actions"} -->
<div class="wp-block-buttons ts-split__actions">
<!-- wp:button {"className":"is-style-ground"} -->
<div class="wp-block-button is-style-ground"><a class="wp-block-button__link wp-element-button" href="/free-roof-assessment/"><?php echo wp_kses_post( taiyo_solar_works_t( 'kbb3b3b79' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/installations/"><?php echo wp_kses_post( taiyo_solar_works_t( 'k7b61fa20' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ts-newsline"} -->
<p class="ts-newsline"><?php echo wp_kses_post( taiyo_solar_works_t( 'k754b0d1f' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
