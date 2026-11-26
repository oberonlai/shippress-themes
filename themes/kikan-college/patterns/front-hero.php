<?php
/**
 * Title: Home: framed window hero with stats row
 * Slug: kikan-college/front-hero
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: Rounded window: navy panel with vertical label and headline beside a low-key photograph, copper slash on the join, right end strip; stats row under it.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"kc-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull kc-hero">
<!-- wp:group {"className":"kc-window","layout":{"type":"default"}} -->
<div class="wp-block-group kc-window">
<!-- wp:group {"className":"kc-hero__panel-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__panel-wrap">
<!-- wp:group {"className":"kc-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__panel">
<!-- wp:group {"className":"kc-rail","layout":{"type":"default"}} -->
<div class="wp-block-group kc-rail">
<!-- wp:paragraph {"className":"kc-rail__l"} -->
<p class="kc-rail__l"><?php echo esc_html( kikan_college_t( 'hero_rail' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__text">
<!-- wp:paragraph {"className":"kc-eyebrow"} -->
<p class="kc-eyebrow"><?php echo esc_html( kikan_college_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"kc-hero__h1"} -->
<h1 class="wp-block-heading kc-hero__h1"><?php echo kikan_college_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-bar" aria-hidden="true"></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-hero__lede"} -->
<p class="kc-hero__lede"><?php echo esc_html( kikan_college_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-hero__actions","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__actions">
<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns">
<!-- wp:button {"className":"kc-pill kc-pill--white"} -->
<div class="wp-block-button kc-pill kc-pill--white"><a class="wp-block-button__link wp-element-button" href="/open-days/"><?php echo esc_html( kikan_college_t( 'hero_btn' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"kc-textlink"} -->
<p class="kc-textlink"><a href="#day"><?php echo esc_html( kikan_college_t( 'hero_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__photo sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-hero__img"} -->
<figure class="wp-block-image size-full kc-hero__img"><img src="<?php echo kikan_college_img( 'hero-joint.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_hero' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-hero__strip","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__strip">
<!-- wp:paragraph {"className":"kc-hero__strip-l"} -->
<p class="kc-hero__strip-l"><?php echo esc_html( kikan_college_t( 'hero_strip' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-stats","layout":{"type":"default"}} -->
<div class="wp-block-group kc-stats">
<!-- wp:group {"className":"kc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group kc-stat">
<!-- wp:paragraph {"className":"kc-stat__n"} -->
<p class="kc-stat__n"><span class="sp-count"><?php echo esc_html( kikan_college_t( 'st1_n' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-stat__l"} -->
<p class="kc-stat__l"><?php echo esc_html( kikan_college_t( 'st1_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group kc-stat">
<!-- wp:paragraph {"className":"kc-stat__n"} -->
<p class="kc-stat__n"><span class="sp-count"><?php echo esc_html( kikan_college_t( 'st2_n' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-stat__l"} -->
<p class="kc-stat__l"><?php echo esc_html( kikan_college_t( 'st2_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group kc-stat">
<!-- wp:paragraph {"className":"kc-stat__n"} -->
<p class="kc-stat__n"><span class="sp-count"><?php echo esc_html( kikan_college_t( 'st3_n' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-stat__l"} -->
<p class="kc-stat__l"><?php echo esc_html( kikan_college_t( 'st3_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group kc-stat">
<!-- wp:paragraph {"className":"kc-stat__n"} -->
<p class="kc-stat__n"><span class="sp-count"><?php echo esc_html( kikan_college_t( 'st4_n' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-stat__l"} -->
<p class="kc-stat__l"><?php echo esc_html( kikan_college_t( 'st4_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
