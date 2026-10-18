<?php
/**
 * Title: Home: safety trend chart
 * Slug: kizuki-construction/safety-trend
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Description: One single-colour navy line chart of the lost-time injury rate over ten years, in the reading column.
 */
?>
<!-- wp:group {"tagName":"section","className":"kz-trend","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-trend"><!-- wp:paragraph {"className":"kz-eyebrow"} -->
<p class="kz-eyebrow"><?php echo esc_html( kizuki_construction_t( 'st_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kz-sec__title"} -->
<h2 class="wp-block-heading kz-sec__title"><?php echo esc_html( kizuki_construction_t( 'st_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-trend__lead"} -->
<p class="kz-trend__lead"><?php echo esc_html( kizuki_construction_t( 'st_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<figure class="kz-trend__chart"><svg viewBox="0 0 880 300" role="img" aria-label="<?php echo esc_attr( kizuki_construction_t( 'st_axis' ) ); ?>: 2016 1.62, 2019 2.10, 2025 0.21"><line x1="48" x2="870" y1="260.0" y2="260.0" class="kz-trend__grid"/><text x="38" y="264.0" text-anchor="end">0.0</text><line x1="48" x2="870" y1="180.0" y2="180.0" class="kz-trend__grid"/><text x="38" y="184.0" text-anchor="end">0.8</text><line x1="48" x2="870" y1="100.0" y2="100.0" class="kz-trend__grid"/><text x="38" y="104.0" text-anchor="end">1.6</text><line x1="48" x2="870" y1="20.0" y2="20.0" class="kz-trend__grid"/><text x="38" y="24.0" text-anchor="end">2.4</text><polyline points="48.0,98.0 138.2,112.0 228.4,125.0 318.7,50.0 408.9,148.0 499.1,174.0 589.3,196.0 679.6,212.0 769.8,227.0 860.0,239.0" class="kz-trend__line"/><circle cx="48.0" cy="98.0" r="4"/><text x="48.0" y="288" text-anchor="middle">2016</text><circle cx="138.2" cy="112.0" r="4"/><text x="138.2" y="288" text-anchor="middle">2017</text><circle cx="228.4" cy="125.0" r="4"/><text x="228.4" y="288" text-anchor="middle">2018</text><circle cx="318.7" cy="50.0" r="4"/><text x="318.7" y="288" text-anchor="middle">2019</text><circle cx="408.9" cy="148.0" r="4"/><text x="408.9" y="288" text-anchor="middle">2020</text><circle cx="499.1" cy="174.0" r="4"/><text x="499.1" y="288" text-anchor="middle">2021</text><circle cx="589.3" cy="196.0" r="4"/><text x="589.3" y="288" text-anchor="middle">2022</text><circle cx="679.6" cy="212.0" r="4"/><text x="679.6" y="288" text-anchor="middle">2023</text><circle cx="769.8" cy="227.0" r="4"/><text x="769.8" y="288" text-anchor="middle">2024</text><circle cx="860.0" cy="239.0" r="4"/><text x="860.0" y="288" text-anchor="middle">2025</text><text x="860.0" y="225.0" text-anchor="middle" class="kz-trend__last">0.21</text><text x="318.7" y="36.0" text-anchor="middle" class="kz-trend__last">2.10</text></svg><figcaption><?php echo esc_html( kizuki_construction_t( 'st_axis' ) ); ?></figcaption></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kz-trend__note"} -->
<p class="kz-trend__note"><?php echo esc_html( kizuki_construction_t( 'st_note' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
