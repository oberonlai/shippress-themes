<?php
/**
 * Title: Home: the day hour by hour
 * Slug: hidamari-care/schedule-detail
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: Five hairline-separated rows: a large time numeral, what happens, who helps and a small photo.
 */
?>
<!-- wp:group {"tagName":"section","className":"hc-sched","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-sched"><!-- wp:group {"className":"hc-sched__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-sched__head"><!-- wp:paragraph {"className":"hc-eyebrow"} -->
<p class="hc-eyebrow"><?php echo esc_html( hidamari_care_t( 'sc_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hc-sec__title"} -->
<h2 class="wp-block-heading hc-sec__title"><?php echo esc_html( hidamari_care_t( 'sc_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sched__labels","layout":{"type":"default"}} -->
<div class="wp-block-group hc-sched__labels"><!-- wp:paragraph {"className":"hc-sched__lab"} -->
<p class="hc-sched__lab"><?php echo esc_html( hidamari_care_t( 'sc_col_what' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__lab"} -->
<p class="hc-sched__lab"><?php echo esc_html( hidamari_care_t( 'sc_col_who' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sched__rows","layout":{"type":"default"}} -->
<div class="wp-block-group hc-sched__rows"><!-- wp:group {"className":"hc-sched__row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-sched__row"><!-- wp:paragraph {"className":"hc-sched__time"} -->
<p class="hc-sched__time">7:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__what"} -->
<p class="hc-sched__what"><?php echo esc_html( hidamari_care_t( 's1_w' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__who"} -->
<p class="hc-sched__who"><?php echo esc_html( hidamari_care_t( 's1_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-sched__img"} -->
<figure class="wp-block-image size-full hc-sched__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/breakfast.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sched__row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-sched__row"><!-- wp:paragraph {"className":"hc-sched__time"} -->
<p class="hc-sched__time">10:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__what"} -->
<p class="hc-sched__what"><?php echo esc_html( hidamari_care_t( 's2_w' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__who"} -->
<p class="hc-sched__who"><?php echo esc_html( hidamari_care_t( 's2_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-sched__img"} -->
<figure class="wp-block-image size-full hc-sched__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_garden' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sched__row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-sched__row"><!-- wp:paragraph {"className":"hc-sched__time"} -->
<p class="hc-sched__time">12:30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__what"} -->
<p class="hc-sched__what"><?php echo esc_html( hidamari_care_t( 's3_w' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__who"} -->
<p class="hc-sched__who"><?php echo esc_html( hidamari_care_t( 's3_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-sched__img"} -->
<figure class="wp-block-image size-full hc-sched__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lunch.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_lunch' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sched__row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-sched__row"><!-- wp:paragraph {"className":"hc-sched__time"} -->
<p class="hc-sched__time">15:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__what"} -->
<p class="hc-sched__what"><?php echo esc_html( hidamari_care_t( 's4_w' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__who"} -->
<p class="hc-sched__who"><?php echo esc_html( hidamari_care_t( 's4_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-sched__img"} -->
<figure class="wp-block-image size-full hc-sched__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tea.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_tea' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sched__row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-sched__row"><!-- wp:paragraph {"className":"hc-sched__time"} -->
<p class="hc-sched__time">19:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__what"} -->
<p class="hc-sched__what"><?php echo esc_html( hidamari_care_t( 's5_w' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-sched__who"} -->
<p class="hc-sched__who"><?php echo esc_html( hidamari_care_t( 's5_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-sched__img"} -->
<figure class="wp-block-image size-full hc-sched__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/evening.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_evening' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
