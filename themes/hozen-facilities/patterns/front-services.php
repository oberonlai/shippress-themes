<?php
/**
 * Title: Home: services
 * Slug: hozen-facilities/front-services
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Lockup, a large photograph at the left and four link rows with arrow chips at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"services","className":"hz-sec hz-services","layout":{"type":"default"}} -->
<section id="services" class="wp-block-group alignfull hz-sec hz-services">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'sv_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'sv_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'sv_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-sv","layout":{"type":"default"}} -->
<div class="wp-block-group hz-sv">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-sv__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-sv__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sv-switchboard.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_sv' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-sv__text","layout":{"type":"default"}} -->
<div class="wp-block-group hz-sv__text">
<!-- wp:paragraph {"className":"hz-sv__p"} -->
<p class="hz-sv__p"><?php echo esc_html( hozen_facilities_t( 'sv_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hz-svrows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hz-svrows sp-stagger">
<!-- wp:group {"className":"hz-svrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-svrow sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-svrow__name"} -->
<h3 class="wp-block-heading hz-svrow__name"><a href="<?php echo esc_url( home_url( '/services/#planned' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'sv1_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-svrow__meta"} -->
<p class="hz-svrow__meta"><?php echo esc_html( hozen_facilities_t( 'sv1_m' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-svrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-svrow sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-svrow__name"} -->
<h3 class="wp-block-heading hz-svrow__name"><a href="<?php echo esc_url( home_url( '/services/#reactive' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'sv2_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-svrow__meta"} -->
<p class="hz-svrow__meta"><?php echo esc_html( hozen_facilities_t( 'sv2_m' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-svrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-svrow sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-svrow__name"} -->
<h3 class="wp-block-heading hz-svrow__name"><a href="<?php echo esc_url( home_url( '/compliance/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'sv3_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-svrow__meta"} -->
<p class="hz-svrow__meta"><?php echo esc_html( hozen_facilities_t( 'sv3_m' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-svrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-svrow sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-svrow__name"} -->
<h3 class="wp-block-heading hz-svrow__name"><a href="<?php echo esc_url( home_url( '/services/#desk' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'sv4_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-svrow__meta"} -->
<p class="hz-svrow__meta"><?php echo esc_html( hozen_facilities_t( 'sv4_m' ) ); ?></p>
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
