<?php
/**
 * Title: Page: Sites
 * Slug: hozen-facilities/page-sites
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Sites page: head, parallax look-up band, staggered four-site pair, the four hubs with their sites.
 */
?>
<!-- wp:group {"align":"full","className":"hz-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hz-pagehead">
<!-- wp:group {"className":"hz-lockup hz-lockup--page","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup hz-lockup--page">
<!-- wp:heading {"level":1,"className":"hz-lockup__title"} -->
<h1 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_sites_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_sites_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_sites_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hz-intro"} -->
<p class="hz-intro"><?php echo esc_html( hozen_facilities_t( 'i_sites_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-roof-edge.webp' ) ); ?>","dimRatio":0,"minHeight":560,"minHeightUnit":"px","isDark":false,"align":"full","className":"hz-roof hz-roof--tall sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light hz-roof hz-roof--tall sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_h2' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-roof-edge.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"hz-roof__spacer"} -->
<p class="hz-roof__spacer"></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec">
<!-- wp:group {"className":"hz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group hz-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sites_where_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sites_where_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sites_where_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sites_where_4' ) ); ?></p>
<!-- /wp:paragraph -->
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

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--hubs","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--hubs">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'net_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'net_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'net_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-hubsecs","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hubsecs">
<!-- wp:group {"anchor":"rotterdam","className":"hz-hubsec","layout":{"type":"default"}} -->
<div id="rotterdam" class="wp-block-group hz-hubsec">
<!-- wp:group {"className":"hz-hubsec__l","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hubsec__l">
<!-- wp:heading {"level":3,"className":"hz-sub"} -->
<h3 class="wp-block-heading hz-sub"><?php echo esc_html( hozen_facilities_t( 'i_hub1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-hubrow__addr"} -->
<p class="hz-hubrow__addr"><?php echo esc_html( hozen_facilities_t( 'hub1_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubrow__meta"} -->
<p class="hz-hubrow__meta"><?php echo esc_html( hozen_facilities_t( 'hub1_m' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-hubsec__r","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hubsec__r">
<!-- wp:html -->
<dl class="hz-dl"><div class="hz-dl__row"><dt><?php echo esc_html( hozen_facilities_t( 'site1_name' ) ); ?></dt><dd><?php echo esc_html( hozen_facilities_t( 'i_sl1_d' ) ); ?></dd></div></dl>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt1_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt1_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt1_3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"delft","className":"hz-hubsec","layout":{"type":"default"}} -->
<div id="delft" class="wp-block-group hz-hubsec">
<!-- wp:group {"className":"hz-hubsec__l","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hubsec__l">
<!-- wp:heading {"level":3,"className":"hz-sub"} -->
<h3 class="wp-block-heading hz-sub"><?php echo esc_html( hozen_facilities_t( 'i_hub2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-hubrow__addr"} -->
<p class="hz-hubrow__addr"><?php echo esc_html( hozen_facilities_t( 'hub2_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubrow__meta"} -->
<p class="hz-hubrow__meta"><?php echo esc_html( hozen_facilities_t( 'hub2_m' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-hubsec__r","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hubsec__r">
<!-- wp:html -->
<dl class="hz-dl"><div class="hz-dl__row"><dt><?php echo esc_html( hozen_facilities_t( 'site2_name' ) ); ?></dt><dd><?php echo esc_html( hozen_facilities_t( 'i_sl2_d' ) ); ?></dd></div></dl>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt2_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt2_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt2_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt2_4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"the-hague","className":"hz-hubsec","layout":{"type":"default"}} -->
<div id="the-hague" class="wp-block-group hz-hubsec">
<!-- wp:group {"className":"hz-hubsec__l","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hubsec__l">
<!-- wp:heading {"level":3,"className":"hz-sub"} -->
<h3 class="wp-block-heading hz-sub"><?php echo esc_html( hozen_facilities_t( 'i_hub3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-hubrow__addr"} -->
<p class="hz-hubrow__addr"><?php echo esc_html( hozen_facilities_t( 'hub3_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubrow__meta"} -->
<p class="hz-hubrow__meta"><?php echo esc_html( hozen_facilities_t( 'hub3_m' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-hubsec__r","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hubsec__r">
<!-- wp:html -->
<dl class="hz-dl"><div class="hz-dl__row"><dt><?php echo esc_html( hozen_facilities_t( 'site3_name' ) ); ?></dt><dd><?php echo esc_html( hozen_facilities_t( 'i_sl3_d' ) ); ?></dd></div></dl>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt3_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt3_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt3_3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"dordrecht","className":"hz-hubsec","layout":{"type":"default"}} -->
<div id="dordrecht" class="wp-block-group hz-hubsec">
<!-- wp:group {"className":"hz-hubsec__l","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hubsec__l">
<!-- wp:heading {"level":3,"className":"hz-sub"} -->
<h3 class="wp-block-heading hz-sub"><?php echo esc_html( hozen_facilities_t( 'i_hub4_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-hubrow__addr"} -->
<p class="hz-hubrow__addr"><?php echo esc_html( hozen_facilities_t( 'hub4_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubrow__meta"} -->
<p class="hz-hubrow__meta"><?php echo esc_html( hozen_facilities_t( 'hub4_m' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-hubsec__r","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hubsec__r">
<!-- wp:html -->
<dl class="hz-dl"><div class="hz-dl__row"><dt><?php echo esc_html( hozen_facilities_t( 'site4_name' ) ); ?></dt><dd><?php echo esc_html( hozen_facilities_t( 'i_sl4_d' ) ); ?></dd></div></dl>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt4_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt4_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-hubsec__p"} -->
<p class="hz-hubsec__p"><?php echo esc_html( hozen_facilities_t( 'i_hubtxt4_3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hz-total"} -->
<p class="hz-total"><?php echo esc_html( hozen_facilities_t( 'i_total' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_on_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_on_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_on_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group hz-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sites_on_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sites_on_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sites_on_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_sites_on_4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hozen-facilities/page-strip"} /-->
