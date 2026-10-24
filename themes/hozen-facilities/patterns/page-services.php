<?php
/**
 * Title: Page: Services
 * Slug: hozen-facilities/page-services
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Services page: head, focus-in statement with ghost photo, two staggered pairs for the four contracts, the price table.
 */
?>
<!-- wp:group {"align":"full","className":"hz-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hz-pagehead">
<!-- wp:group {"className":"hz-lockup hz-lockup--page","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup hz-lockup--page">
<!-- wp:heading {"level":1,"className":"hz-lockup__title"} -->
<h1 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_services_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_services_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_services_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hz-intro"} -->
<p class="hz-intro"><?php echo esc_html( hozen_facilities_t( 'i_services_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-statement hz-statement--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-statement hz-statement--inner">
<!-- wp:group {"className":"hz-statement__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hz-statement__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-statement__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-statement__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sv-switchboard.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_sv' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-statement__text","layout":{"type":"default"}} -->
<div class="wp-block-group hz-statement__text">
<!-- wp:paragraph {"className":"hz-lines sp-reveal sp-reveal--up"} -->
<p class="hz-lines sp-reveal sp-reveal--up"><?php echo wp_kses_post( hozen_facilities_t( 'i_sv_l_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lines sp-reveal sp-reveal--up"} -->
<p class="hz-lines sp-reveal sp-reveal--up"><?php echo wp_kses_post( hozen_facilities_t( 'i_sv_l_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'i_sv_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'i_sv_intro_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'i_sv_intro_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'i_sv_intro_3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-ghosts","layout":{"type":"default"}} -->
<div class="wp-block-group hz-ghosts">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-ghost-photo hz-ghost-photo--a"} -->
<figure class="wp-block-image size-full hz-ghost-photo hz-ghost-photo--a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/g1-facade.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--pair","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--pair">
<!-- wp:group {"className":"hz-pair","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pair">
<!-- wp:group {"className":"hz-pair__col","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pair__col">
<!-- wp:group {"anchor":"planned","className":"hz-site","layout":{"type":"default"}} -->
<div id="planned" class="wp-block-group hz-site">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-site__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-pumps.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_h1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost" aria-hidden="true">#01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'i_svc1_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/services/#planned' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'i_svc1_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'i_svc1_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc1_p_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc1_p_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc1_p_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc1_p_4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-pair__col hz-pair__col--drop","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pair__col hz-pair__col--drop">
<!-- wp:group {"anchor":"reactive","className":"hz-site","layout":{"type":"default"}} -->
<div id="reactive" class="wp-block-group hz-site">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-site__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/g2-corridor.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_g2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost" aria-hidden="true">#02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'i_svc2_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/services/#reactive' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'i_svc2_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'i_svc2_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc2_p_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc2_p_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc2_p_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc2_p_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc2_p_5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-pair","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pair">
<!-- wp:group {"className":"hz-pair__col","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pair__col">
<!-- wp:group {"anchor":"compliance","className":"hz-site","layout":{"type":"default"}} -->
<div id="compliance" class="wp-block-group hz-site">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-site__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s2-library.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_s2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost" aria-hidden="true">#03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'i_svc3_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/compliance/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'i_svc3_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'i_svc3_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc3_p_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc3_p_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc3_p_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc3_p_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc3_p_5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-pair__col hz-pair__col--drop","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pair__col hz-pair__col--drop">
<!-- wp:group {"anchor":"desk","className":"hz-site","layout":{"type":"default"}} -->
<div id="desk" class="wp-block-group hz-site">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-site__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/b2-roof.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_b2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost" aria-hidden="true">#04</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'i_svc4_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/services/#desk' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'i_svc4_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'i_svc4_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc4_p_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc4_p_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc4_p_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_svc4_p_4' ) ); ?></p>
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

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--fees","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--fees">
<!-- wp:group {"className":"hz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group hz-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sv_fees_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sv_fees_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sv_fees_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sv_fees_4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hozen-facilities/front-prices"} /-->

<!-- wp:pattern {"slug":"hozen-facilities/page-strip"} /-->
