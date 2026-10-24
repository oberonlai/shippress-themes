<?php
/**
 * Title: Page: Compliance
 * Slug: hozen-facilities/page-compliance
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Compliance page: focus-in statement, annual programme table, parallax roof band, compliance manager note, what the fee does not say.
 */
?>
<!-- wp:group {"align":"full","className":"hz-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hz-pagehead">
<!-- wp:group {"className":"hz-lockup hz-lockup--page","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup hz-lockup--page">
<!-- wp:heading {"level":1,"className":"hz-lockup__title"} -->
<h1 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_compliance_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_compliance_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_compliance_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hz-intro"} -->
<p class="hz-intro"><?php echo esc_html( hozen_facilities_t( 'i_compliance_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-statement hz-statement--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-statement hz-statement--inner">
<!-- wp:group {"className":"hz-statement__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hz-statement__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-statement__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-statement__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k3-valve.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_k3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-statement__text","layout":{"type":"default"}} -->
<div class="wp-block-group hz-statement__text">
<!-- wp:paragraph {"className":"hz-lines sp-reveal sp-reveal--up"} -->
<p class="hz-lines sp-reveal sp-reveal--up"><?php echo wp_kses_post( hozen_facilities_t( 'i_cp_l_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lines sp-reveal sp-reveal--up"} -->
<p class="hz-lines sp-reveal sp-reveal--up"><?php echo wp_kses_post( hozen_facilities_t( 'i_cp_l_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'i_cp_in_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'i_cp_in_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'i_cp_in_3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-ghosts","layout":{"type":"default"}} -->
<div class="wp-block-group hz-ghosts">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-ghost-photo hz-ghost-photo--left"} -->
<figure class="wp-block-image size-full hz-ghost-photo hz-ghost-photo--left"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/g2-corridor.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--table","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--table">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_prog_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_prog_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_prog_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<table class="hz-table hz-table--comp"><thead><tr><th scope="col"><?php echo esc_html( hozen_facilities_t( 'i_ct_h1' ) ); ?></th><th scope="col"><?php echo esc_html( hozen_facilities_t( 'i_ct_h2' ) ); ?></th><th scope="col"><?php echo esc_html( hozen_facilities_t( 'i_ct_h3' ) ); ?></th></tr></thead><tbody><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_ct1_0' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_ct1_1' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'i_ct1_2' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_ct2_0' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_ct2_1' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'i_ct2_2' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_ct3_0' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_ct3_1' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'i_ct3_2' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_ct4_0' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_ct4_1' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'i_ct4_2' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_ct5_0' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_ct5_1' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'i_ct5_2' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_ct6_0' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_ct6_1' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'i_ct6_2' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h1' ) ); ?>" class="hz-table__c0"><?php echo esc_html( hozen_facilities_t( 'i_ct7_0' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h2' ) ); ?>" class="hz-table__c1"><?php echo esc_html( hozen_facilities_t( 'i_ct7_1' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'i_ct_h3' ) ); ?>" class="hz-table__c2"><?php echo esc_html( hozen_facilities_t( 'i_ct7_2' ) ); ?></td></tr></tbody></table>
<!-- /wp:html -->

<!-- wp:group {"className":"hz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group hz-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_cp_tab_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_cp_tab_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_cp_tab_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_cp_tab_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_cp_tab_5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/b2-roof.webp' ) ); ?>","dimRatio":0,"minHeight":446,"minHeightUnit":"px","isDark":false,"align":"full","className":"hz-roof sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light hz-roof sp-parallax" style="min-height:446px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_b2' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/b2-roof.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"hz-roof__spacer"} -->
<p class="hz-roof__spacer"></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--note","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--note">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_note_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_note_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_note_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-notepair","layout":{"type":"default"}} -->
<div class="wp-block-group hz-notepair">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-notepair__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-notepair__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3-gauge.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_h3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-notepair__t","layout":{"type":"default"}} -->
<div class="wp-block-group hz-notepair__t">
<!-- wp:paragraph {"className":"hz-notepair__p"} -->
<p class="hz-notepair__p"><?php echo esc_html( hozen_facilities_t( 'i_cp_note_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-notepair__p"} -->
<p class="hz-notepair__p"><?php echo esc_html( hozen_facilities_t( 'i_cp_note_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-notepair__p"} -->
<p class="hz-notepair__p"><?php echo esc_html( hozen_facilities_t( 'i_cp_note_3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-pgsec hz-pgsec--fees","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-pgsec hz-pgsec--fees">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'i_fee_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'i_fee_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'i_fee_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group hz-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_cp_fee_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_cp_fee_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 'i_cp_fee_3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hozen-facilities/page-strip"} /-->
