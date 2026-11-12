<?php
/**
 * Title: Page: guest stories
 * Slug: nohara-park/page-stories
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Guest stories: four caption-panel cards, each beside its story.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-phead"><!-- wp:group {"className":"np-phead__pic sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__pic sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-phead__img"} -->
<figure class="wp-block-image size-full np-phead__img"><img src="<?php echo nohara_park_img( 'f1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_F1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-phead__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__txt"><!-- wp:paragraph {"className":"np-crumb"} -->
<p class="np-crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_brand' ) ); ?></a> / <?php echo esc_html( nohara_park_t( 'stories_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"np-h1"} -->
<h1 class="wp-block-heading np-h1"><?php echo esc_html( nohara_park_t( 'stories_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-lead"} -->
<p class="np-lead"><?php echo esc_html( nohara_park_t( 'stories_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--read"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stories_lead2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight np-stories","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight np-stories"><!-- wp:group {"className":"np-wrap np-wrap--cards","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--cards"><!-- wp:group {"anchor":"abara","className":"np-storyrow","layout":{"type":"default"}} -->
<div class="wp-block-group np-storyrow" id="abara"><!-- wp:group {"className":"np-card sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group np-card sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-card__pic"} -->
<figure class="wp-block-image size-full np-card__pic"><img src="<?php echo nohara_park_img( 's1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_S1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__panel"><!-- wp:paragraph {"className":"np-badge"} -->
<p class="np-badge"><?php echo esc_html( nohara_park_t( 'st_1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__txt"><!-- wp:paragraph {"className":"np-card__line"} -->
<p class="np-card__line"><?php echo esc_html( nohara_park_t( 'st_1_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"np-card__title"} -->
<h3 class="wp-block-heading np-card__title"><a href="#abara"><?php echo esc_html( nohara_park_t( 'stories_s1_h' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-storyrow__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-storyrow__txt"><!-- wp:heading {"level":3,"className":"np-h3"} -->
<h3 class="wp-block-heading np-h3"><?php echo esc_html( nohara_park_t( 'stories_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stories_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stories_s1_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"greta-paul","className":"np-storyrow","layout":{"type":"default"}} -->
<div class="wp-block-group np-storyrow" id="greta-paul"><!-- wp:group {"className":"np-card sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group np-card sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-card__pic"} -->
<figure class="wp-block-image size-full np-card__pic"><img src="<?php echo nohara_park_img( 'w2' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_W2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__panel"><!-- wp:paragraph {"className":"np-badge"} -->
<p class="np-badge"><?php echo esc_html( nohara_park_t( 'st_2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__txt"><!-- wp:paragraph {"className":"np-card__line"} -->
<p class="np-card__line"><?php echo esc_html( nohara_park_t( 'st_2_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"np-card__title"} -->
<h3 class="wp-block-heading np-card__title"><a href="#greta-paul"><?php echo esc_html( nohara_park_t( 'stories_s2_h' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-storyrow__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-storyrow__txt"><!-- wp:heading {"level":3,"className":"np-h3"} -->
<h3 class="wp-block-heading np-h3"><?php echo esc_html( nohara_park_t( 'stories_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stories_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stories_s2_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"lindqvist-moreau","className":"np-storyrow","layout":{"type":"default"}} -->
<div class="wp-block-group np-storyrow" id="lindqvist-moreau"><!-- wp:group {"className":"np-card sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group np-card sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-card__pic"} -->
<figure class="wp-block-image size-full np-card__pic"><img src="<?php echo nohara_park_img( 'l1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_L1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__panel"><!-- wp:paragraph {"className":"np-badge"} -->
<p class="np-badge"><?php echo esc_html( nohara_park_t( 'st_3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__txt"><!-- wp:paragraph {"className":"np-card__line"} -->
<p class="np-card__line"><?php echo esc_html( nohara_park_t( 'st_3_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"np-card__title"} -->
<h3 class="wp-block-heading np-card__title"><a href="#lindqvist-moreau"><?php echo esc_html( nohara_park_t( 'stories_s3_h' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-storyrow__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-storyrow__txt"><!-- wp:heading {"level":3,"className":"np-h3"} -->
<h3 class="wp-block-heading np-h3"><?php echo esc_html( nohara_park_t( 'stories_s3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stories_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stories_s3_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"nadia-kofi","className":"np-storyrow","layout":{"type":"default"}} -->
<div class="wp-block-group np-storyrow" id="nadia-kofi"><!-- wp:group {"className":"np-card sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group np-card sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-card__pic"} -->
<figure class="wp-block-image size-full np-card__pic"><img src="<?php echo nohara_park_img( 's3' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_S3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__panel"><!-- wp:paragraph {"className":"np-badge"} -->
<p class="np-badge"><?php echo esc_html( nohara_park_t( 'st_4_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__txt"><!-- wp:paragraph {"className":"np-card__line"} -->
<p class="np-card__line"><?php echo esc_html( nohara_park_t( 'st_4_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"np-card__title"} -->
<h3 class="wp-block-heading np-card__title"><a href="#nadia-kofi"><?php echo esc_html( nohara_park_t( 'stories_s4_h' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-storyrow__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-storyrow__txt"><!-- wp:heading {"level":3,"className":"np-h3"} -->
<h3 class="wp-block-heading np-h3"><?php echo esc_html( nohara_park_t( 'stories_s4_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stories_s4_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stories_s4_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--close"><!-- wp:group {"className":"np-wrap np-closing","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-closing"><!-- wp:heading {"className":"np-closing__h"} -->
<h2 class="wp-block-heading np-closing__h"><?php echo esc_html( nohara_park_t( 'close_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
