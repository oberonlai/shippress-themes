<?php
/**
 * Title: Home: sites
 * Slug: hozen-facilities/front-sites
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Section lockup, then the four featured sites as a staggered two-column pair with caption rows, arrow chips and ghost numerals.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"sites","className":"hz-sec hz-sites","layout":{"type":"default"}} -->
<section id="sites" class="wp-block-group alignfull hz-sec hz-sites">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'sites_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'sites_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'sites_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-pair","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pair">
<!-- wp:group {"className":"hz-pair__col","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pair__col">
<!-- wp:group {"className":"hz-site","layout":{"type":"default"}} -->
<div class="wp-block-group hz-site">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-site__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s1-court.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_s1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost" aria-hidden="true">#01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'site1_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/sites/#rotterdam' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'site1_name' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'site1_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'site1_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-site","layout":{"type":"default"}} -->
<div class="wp-block-group hz-site">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-site__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s3-civic.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_s3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost" aria-hidden="true">#03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'site3_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/sites/#the-hague' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'site3_name' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'site3_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'site3_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-pair__col hz-pair__col--drop","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pair__col hz-pair__col--drop">
<!-- wp:group {"className":"hz-site","layout":{"type":"default"}} -->
<div class="wp-block-group hz-site">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-site__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s2-library.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_s2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost" aria-hidden="true">#02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'site2_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/sites/#delft' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'site2_name' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'site2_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'site2_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-site","layout":{"type":"default"}} -->
<div class="wp-block-group hz-site">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-site__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s4-pool.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_s4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost" aria-hidden="true">#04</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'site4_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/sites/#dordrecht' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'site4_name' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'site4_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'site4_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
