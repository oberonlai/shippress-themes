<?php
/**
 * Title: Page: About
 * Slug: hozen-facilities/page-about
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: About page: founding note with focus-in photograph and ghost photo, staggered pair, seven people as rows, history in four paragraphs.
 */
?>
<!-- wp:group {"align":"full","className":"hz-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hz-pagehead">
<!-- wp:group {"className":"hz-lockup hz-lockup--page","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup hz-lockup--page">
<!-- wp:heading {"level":1,"className":"hz-lockup__title"} -->
<h1 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_about_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_about_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_about_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hz-intro"} -->
<p class="hz-intro"><?php echo esc_html( hozen_facilities_t( 'i_about_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-statement hz-statement--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-statement hz-statement--inner">
<!-- wp:group {"className":"hz-statement__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hz-statement__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-statement__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-statement__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/g1-facade.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_g1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-statement__text","layout":{"type":"default"}} -->
<div class="wp-block-group hz-statement__text">
<!-- wp:paragraph {"className":"hz-lines sp-reveal sp-reveal--up"} -->
<p class="hz-lines sp-reveal sp-reveal--up"><?php echo wp_kses_post( hozen_facilities_t( 'i_ab_l_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lines sp-reveal sp-reveal--up"} -->
<p class="hz-lines sp-reveal sp-reveal--up"><?php echo wp_kses_post( hozen_facilities_t( 'i_ab_l_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'i_ab_in_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'i_ab_in_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'i_ab_who' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-ghosts","layout":{"type":"default"}} -->
<div class="wp-block-group hz-ghosts">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-ghost-photo hz-ghost-photo--a"} -->
<figure class="wp-block-image size-full hz-ghost-photo hz-ghost-photo--a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k2-water.webp' ) ); ?>" alt=""/></figure>
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
<!-- wp:group {"className":"hz-site","layout":{"type":"default"}} -->
<div class="wp-block-group hz-site">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-site__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-pumps.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_h1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost">#01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'i_ab_c1l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/sites/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'i_ab_c1t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'i_ab_c1m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_ab_c1p' ) ); ?></p>
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
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k1-ceiling.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_k1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost">#02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'i_ab_c2l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/call-outs/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'i_ab_c2t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'i_ab_c2m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_ab_c2p' ) ); ?></p>
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

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--people","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--people">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_people_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_people_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_people_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-people sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hz-people sp-stagger">
<!-- wp:group {"className":"hz-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-person sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-person__n"} -->
<h3 class="wp-block-heading hz-person__n"><?php echo esc_html( hozen_facilities_t( 'i_pe1_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-person__r"} -->
<p class="hz-person__r"><?php echo esc_html( hozen_facilities_t( 'i_pe1_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-person__s"} -->
<p class="hz-person__s"><?php echo esc_html( hozen_facilities_t( 'i_pe1_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-person sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-person__n"} -->
<h3 class="wp-block-heading hz-person__n"><?php echo esc_html( hozen_facilities_t( 'i_pe2_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-person__r"} -->
<p class="hz-person__r"><?php echo esc_html( hozen_facilities_t( 'i_pe2_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-person__s"} -->
<p class="hz-person__s"><?php echo esc_html( hozen_facilities_t( 'i_pe2_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-person sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-person__n"} -->
<h3 class="wp-block-heading hz-person__n"><?php echo esc_html( hozen_facilities_t( 'i_pe3_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-person__r"} -->
<p class="hz-person__r"><?php echo esc_html( hozen_facilities_t( 'i_pe3_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-person__s"} -->
<p class="hz-person__s"><?php echo esc_html( hozen_facilities_t( 'i_pe3_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-person sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-person__n"} -->
<h3 class="wp-block-heading hz-person__n"><?php echo esc_html( hozen_facilities_t( 'i_pe4_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-person__r"} -->
<p class="hz-person__r"><?php echo esc_html( hozen_facilities_t( 'i_pe4_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-person__s"} -->
<p class="hz-person__s"><?php echo esc_html( hozen_facilities_t( 'i_pe4_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-person sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-person__n"} -->
<h3 class="wp-block-heading hz-person__n"><?php echo esc_html( hozen_facilities_t( 'i_pe5_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-person__r"} -->
<p class="hz-person__r"><?php echo esc_html( hozen_facilities_t( 'i_pe5_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-person__s"} -->
<p class="hz-person__s"><?php echo esc_html( hozen_facilities_t( 'i_pe5_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-person sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-person__n"} -->
<h3 class="wp-block-heading hz-person__n"><?php echo esc_html( hozen_facilities_t( 'i_pe6_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-person__r"} -->
<p class="hz-person__r"><?php echo esc_html( hozen_facilities_t( 'i_pe6_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-person__s"} -->
<p class="hz-person__s"><?php echo esc_html( hozen_facilities_t( 'i_pe6_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-person sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"hz-person__n"} -->
<h3 class="wp-block-heading hz-person__n"><?php echo esc_html( hozen_facilities_t( 'i_pe7_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-person__r"} -->
<p class="hz-person__r"><?php echo esc_html( hozen_facilities_t( 'i_pe7_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-person__s"} -->
<p class="hz-person__s"><?php echo esc_html( hozen_facilities_t( 'i_pe7_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group hz-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_ab_pe_1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--hist","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--hist">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_hist_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_hist_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_hist_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-hist sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hist sp-stagger">
<!-- wp:group {"className":"hz-hist__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hist__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-hist__y"} -->
<p class="hz-hist__y"><?php echo esc_html( hozen_facilities_t( 'i_hi1_y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hist__t"} -->
<p class="hz-hist__t"><?php echo esc_html( hozen_facilities_t( 'i_hi1_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-hist__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hist__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-hist__y"} -->
<p class="hz-hist__y"><?php echo esc_html( hozen_facilities_t( 'i_hi2_y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hist__t"} -->
<p class="hz-hist__t"><?php echo esc_html( hozen_facilities_t( 'i_hi2_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-hist__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hist__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-hist__y"} -->
<p class="hz-hist__y"><?php echo esc_html( hozen_facilities_t( 'i_hi3_y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hist__t"} -->
<p class="hz-hist__t"><?php echo esc_html( hozen_facilities_t( 'i_hi3_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-hist__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hist__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-hist__y"} -->
<p class="hz-hist__y"><?php echo esc_html( hozen_facilities_t( 'i_hi4_y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hist__t"} -->
<p class="hz-hist__t"><?php echo esc_html( hozen_facilities_t( 'i_hi4_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hozen-facilities/page-strip"} /-->
