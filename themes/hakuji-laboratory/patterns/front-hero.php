<?php
/**
 * Title: Home: hero collage
 * Slug: hakuji-laboratory/front-hero
 * Categories: hakuji-laboratory
 * Viewport Width: 1440
 * Description: Left column with the headline, lead, buttons and a four-figure stats row; at the right a pair of photographs (42 / 58, one large top-right radius) that cross-fade to a second pair, a grey-violet slab beneath with a three-line tagline and a scroll cue.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"hk-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull hk-hero">
<!-- wp:group {"className":"hk-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-hero__text">
<!-- wp:paragraph {"className":"hk-eyebrow"} -->
<p class="hk-eyebrow"><?php echo esc_html( hakuji_laboratory_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"hk-hero__h1"} -->
<h1 class="wp-block-heading hk-hero__h1"><?php echo esc_html( hakuji_laboratory_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-hero__lede"} -->
<p class="hk-hero__lede"><?php echo esc_html( hakuji_laboratory_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hk-hero__row","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hk-hero__row">
<!-- wp:buttons {"className":"hk-btn hk-cta"} -->
<div class="wp-block-buttons hk-btn hk-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( hakuji_laboratory_t( 'btn_open' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:buttons {"className":"hk-pill hk-pill--how"} -->
<div class="wp-block-buttons hk-pill hk-pill--how"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#upload"><?php echo esc_html( hakuji_laboratory_t( 'btn_how' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-stats","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stats">
<!-- wp:group {"className":"hk-stat","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stat">
<!-- wp:paragraph {"className":"hk-stat__n"} -->
<p class="hk-stat__n"><?php echo esc_html( hakuji_laboratory_t( 'stat_1_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-stat__l"} -->
<p class="hk-stat__l"><?php echo esc_html( hakuji_laboratory_t( 'stat_1_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-stat","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stat">
<!-- wp:paragraph {"className":"hk-stat__n"} -->
<p class="hk-stat__n"><?php echo esc_html( hakuji_laboratory_t( 'stat_2_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-stat__l"} -->
<p class="hk-stat__l"><?php echo esc_html( hakuji_laboratory_t( 'stat_2_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-stat","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stat">
<!-- wp:paragraph {"className":"hk-stat__n"} -->
<p class="hk-stat__n"><?php echo esc_html( hakuji_laboratory_t( 'stat_3_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-stat__l"} -->
<p class="hk-stat__l"><?php echo esc_html( hakuji_laboratory_t( 'stat_3_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-stat","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stat">
<!-- wp:paragraph {"className":"hk-stat__n"} -->
<p class="hk-stat__n"><?php echo esc_html( hakuji_laboratory_t( 'stat_4_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-stat__l"} -->
<p class="hk-stat__l"><?php echo esc_html( hakuji_laboratory_t( 'stat_4_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-stage","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stage">
<!-- wp:group {"className":"hk-pair hk-pair--a","layout":{"type":"default"}} -->
<div class="wp-block-group hk-pair hk-pair--a">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-ph hk-ph--l"} -->
<figure class="wp-block-image size-full hk-ph hk-ph--l"><img src="<?php echo hakuji_laboratory_img( 'img-01.webp' ); ?>" alt="<?php echo hakuji_laboratory_a( 'alt_img01' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-ph hk-ph--r"} -->
<figure class="wp-block-image size-full hk-ph hk-ph--r"><img src="<?php echo hakuji_laboratory_img( 'img-02.webp' ); ?>" alt="<?php echo hakuji_laboratory_a( 'alt_img02' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-pair hk-pair--b","layout":{"type":"default"}} -->
<div class="wp-block-group hk-pair hk-pair--b">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-ph hk-ph--l"} -->
<figure class="wp-block-image size-full hk-ph hk-ph--l"><img src="<?php echo hakuji_laboratory_img( 'img-03.webp' ); ?>" alt="<?php echo hakuji_laboratory_a( 'alt_img03' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-ph hk-ph--r"} -->
<figure class="wp-block-image size-full hk-ph hk-ph--r"><img src="<?php echo hakuji_laboratory_img( 'img-04.webp' ); ?>" alt="<?php echo hakuji_laboratory_a( 'alt_img04' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-slab","layout":{"type":"default"}} -->
<div class="wp-block-group hk-slab">
<!-- wp:paragraph {"className":"hk-subtag"} -->
<p class="hk-subtag"><?php echo esc_html( hakuji_laboratory_t( 'tag_1' ) ); ?><br><?php echo esc_html( hakuji_laboratory_t( 'tag_2' ) ); ?><br><?php echo esc_html( hakuji_laboratory_t( 'tag_3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-scrollcue"} -->
<p class="hk-scrollcue"><span><?php echo esc_html( hakuji_laboratory_t( 'scroll' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
