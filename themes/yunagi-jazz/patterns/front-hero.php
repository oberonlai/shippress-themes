<?php
/**
 * Title: Home: three photographs, headline and set cards
 * Slug: yunagi-jazz/front-hero
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: First screen: an ink mat holding three equal rounded photographs with the headline over their bottom edge, then a drifting row of set cards.
 */
?>
<!-- wp:group {"className":"yj-mat","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat">
<!-- wp:group {"className":"yj-mat__col yj-mat__col--1","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__col yj-mat__col--1">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-mat__img"} -->
<figure class="wp-block-image size-full yj-mat__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-bassist-tuning.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__col yj-mat__col--2 sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__col yj-mat__col--2 sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-mat__img"} -->
<figure class="wp-block-image size-full yj-mat__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-sound-engineer.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__col yj-mat__col--3","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__col yj-mat__col--3">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-mat__img"} -->
<figure class="wp-block-image size-full yj-mat__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03-lantern-lawn.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__grad","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__grad"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__title","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__title">
<!-- wp:paragraph {"className":"yj-eyebrow"} -->
<p class="yj-eyebrow"><span class="yj-eyebrow__d"><?php echo esc_html( yunagi_jazz_t( 'hero_eb_d' ) ); ?></span><span class="yj-eyebrow__m"><?php echo esc_html( yunagi_jazz_t( 'hero_eb_m' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yj-h1"} -->
<h1 class="wp-block-heading yj-h1"><?php echo esc_html( yunagi_jazz_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__facts","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__facts">
<!-- wp:paragraph {"className":"yj-facts"} -->
<p class="yj-facts"><?php echo esc_html( yunagi_jazz_t( 'hero_f1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-facts"} -->
<p class="yj-facts"><?php echo esc_html( yunagi_jazz_t( 'hero_f2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yj-stubwrap"} -->
<div class="wp-block-buttons yj-stubwrap"><!-- wp:button {"className":"yj-stub"} -->
<div class="wp-block-button yj-stub"><a class="wp-block-button__link wp-element-button" href="/tickets/"><?php echo esc_html( yunagi_jazz_t( 'hero_buy' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-strip sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group yj-strip sp-marquee">
<!-- wp:group {"className":"yj-strip__set","layout":{"type":"default"}} -->
<div class="wp-block-group yj-strip__set">
<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-piano-hands.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p05' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p05' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04-saxophone.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p04' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p04' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p07-singer-mic.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p07' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p07' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p07' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-trumpet.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p08' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p08' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-drummer-brushes.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p06' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p06' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p06' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09-archtop-guitar.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p09' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p09' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-strip__set","layout":{"type":"default"}} -->
<div class="wp-block-group yj-strip__set" aria-hidden="true">
<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-piano-hands.webp' ) ); ?>" alt="" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p05' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p05' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04-saxophone.webp' ) ); ?>" alt="" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p04' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p04' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p07-singer-mic.webp' ) ); ?>" alt="" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p07' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p07' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-trumpet.webp' ) ); ?>" alt="" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p08' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p08' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-drummer-brushes.webp' ) ); ?>" alt="" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p06' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p06' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-card","layout":{"type":"default"}} -->
<div class="wp-block-group yj-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-card__img"} -->
<figure class="wp-block-image size-full yj-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09-archtop-guitar.webp' ) ); ?>" alt="" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yj-card__meta"} -->
<p class="yj-card__meta"><span class="yj-chip"><?php echo esc_html( yunagi_jazz_t( 'chip_p09' ) ); ?></span><span class="yj-card__act"><?php echo esc_html( yunagi_jazz_t( 'act_p09' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
