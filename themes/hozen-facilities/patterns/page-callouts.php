<?php
/**
 * Title: Page: Call-outs
 * Slug: hozen-facilities/page-callouts
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Call-outs page: desk number, daytime and night staggered pair, priorities table, five steps as hairline rows, fees.
 */
?>
<!-- wp:group {"align":"full","className":"hz-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hz-pagehead">
<!-- wp:group {"className":"hz-lockup hz-lockup--page","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup hz-lockup--page">
<!-- wp:heading {"level":1,"className":"hz-lockup__title"} -->
<h1 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_callouts_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_callouts_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_callouts_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hz-intro"} -->
<p class="hz-intro"><?php echo esc_html( hozen_facilities_t( 'i_callouts_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"report","className":"hz-pgsec hz-pgsec--desk","layout":{"type":"default"}} -->
<section id="report" class="wp-block-group alignfull hz-pgsec hz-pgsec--desk">
<!-- wp:group {"className":"hz-deskblock","layout":{"type":"default"}} -->
<div class="wp-block-group hz-deskblock">
<!-- wp:group {"className":"hz-deskblock__t","layout":{"type":"default"}} -->
<div class="wp-block-group hz-deskblock__t">
<!-- wp:group {"className":"hz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group hz-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_one_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_one_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_one_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_one_4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-phone","layout":{"type":"default"}} -->
<div class="wp-block-group hz-phone">
<!-- wp:paragraph {"className":"hz-phone__num"} -->
<p class="hz-phone__num"><a href="tel:+31105550198">+31 10 555 0198</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-phone__meta"} -->
<p class="hz-phone__meta"><?php echo esc_html( hozen_facilities_t( 'co_phone_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
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
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/c1-desk.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_c1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost">#01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'i_co_day_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'i_co_day_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'i_co_day_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_co_day_p_1' ) ); ?></p>
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
<figure class="wp-block-image size-full hz-site__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/n1-valve.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_n1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-ghost"} -->
<p class="hz-ghost">#02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__label"} -->
<p class="hz-cap__label"><?php echo esc_html( hozen_facilities_t( 'i_co_night_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hz-cap__title"} -->
<h3 class="wp-block-heading hz-cap__title"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'i_co_night_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-cap__meta"} -->
<p class="hz-cap__meta"><?php echo esc_html( hozen_facilities_t( 'i_co_night_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_co_night_p_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_co_night_p_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-cap__desc"} -->
<p class="hz-cap__desc"><?php echo esc_html( hozen_facilities_t( 'i_co_night_p_3' ) ); ?></p>
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

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--table","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--table">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_pri_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_pri_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_pri_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<table class="hz-table"><thead><tr><th scope="col"><?php echo esc_html( hozen_facilities_t( 'i_pt_h1' ) ); ?></th><th scope="col"><?php echo esc_html( hozen_facilities_t( 'i_pt_h2' ) ); ?></th><th scope="col"><?php echo esc_html( hozen_facilities_t( 'i_pt_h3' ) ); ?></th></tr></thead><tbody><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_prio1_c' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_prio1_m' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'prio1_t' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_prio2_c' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_prio2_m' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'prio2_t' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_prio3_c' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_prio3_m' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'prio3_t' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_prio4_c' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_prio4_m' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_pt_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'prio4_t' ) ); ?></td></tr></tbody></table>
<!-- /wp:html -->

<!-- wp:group {"className":"hz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group hz-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_pri_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_pri_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_pri_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_pri_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_pri_5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--steps","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--steps">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_steps_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_steps_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_steps_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-steps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hz-steps sp-stagger">
<!-- wp:group {"className":"hz-rowitem sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-rowitem sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-rowitem__n"} -->
<p class="hz-rowitem__n"><?php echo esc_html( hozen_facilities_t( 'i_step1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-rowitem__p"} -->
<p class="hz-rowitem__p"><?php echo esc_html( hozen_facilities_t( 'i_step1_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-rowitem sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-rowitem sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-rowitem__n"} -->
<p class="hz-rowitem__n"><?php echo esc_html( hozen_facilities_t( 'i_step2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-rowitem__p"} -->
<p class="hz-rowitem__p"><?php echo esc_html( hozen_facilities_t( 'i_step2_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-rowitem sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-rowitem sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-rowitem__n"} -->
<p class="hz-rowitem__n"><?php echo esc_html( hozen_facilities_t( 'i_step3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-rowitem__p"} -->
<p class="hz-rowitem__p"><?php echo esc_html( hozen_facilities_t( 'i_step3_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-rowitem sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-rowitem sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-rowitem__n"} -->
<p class="hz-rowitem__n"><?php echo esc_html( hozen_facilities_t( 'i_step4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-rowitem__p"} -->
<p class="hz-rowitem__p"><?php echo esc_html( hozen_facilities_t( 'i_step4_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-rowitem sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hz-rowitem sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hz-rowitem__n"} -->
<p class="hz-rowitem__n"><?php echo esc_html( hozen_facilities_t( 'i_step5_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-rowitem__p"} -->
<p class="hz-rowitem__p"><?php echo esc_html( hozen_facilities_t( 'i_step5_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group hz-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_steps_1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--fees","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--fees">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_cof_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_cof_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_cof_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<dl class="hz-dl"><div class="hz-dl__row"><dt><?php echo esc_html( hozen_facilities_t( 'price4_s' ) ); ?></dt><dd><?php echo esc_html( hozen_facilities_t( 'price4_p' ) ); ?></dd></div><div class="hz-dl__row"><dt><?php echo esc_html( hozen_facilities_t( 'price5_s' ) ); ?></dt><dd><?php echo esc_html( hozen_facilities_t( 'price5_p' ) ); ?></dd></div><div class="hz-dl__row"><dt><?php echo esc_html( hozen_facilities_t( 'price6_s' ) ); ?></dt><dd><?php echo esc_html( hozen_facilities_t( 'price6_p' ) ); ?></dd></div></dl>
<!-- /wp:html -->

<!-- wp:group {"className":"hz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group hz-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_fees_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_fees_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_co_fees_3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hozen-facilities/page-strip"} /-->
