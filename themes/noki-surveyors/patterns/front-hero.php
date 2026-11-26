<?php
/**
 * Title: Home: diagonal two-pane hero
 * Slug: noki-surveyors/front-hero
 * Categories: noki-surveyors
 * Viewport Width: 1440
 * Description: Text column beside two photographs cut by a 9 degree seam, with a three-card row overlapping the photo foot.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"nk-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull nk-hero">
<!-- wp:group {"className":"nk-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hero__grid">
<!-- wp:group {"className":"nk-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hero__text">
<!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo esc_html( noki_surveyors_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"nk-hero__h1"} -->
<h1 class="wp-block-heading nk-hero__h1"><?php echo esc_html( noki_surveyors_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="nk-rule" aria-hidden="true"></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"nk-hero__lead"} -->
<p class="nk-hero__lead"><?php echo esc_html( noki_surveyors_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"nk-hero__actions","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hero__actions">
<!-- wp:buttons {"className":"nk-btns"} -->
<div class="wp-block-buttons nk-btns">
<!-- wp:button {"className":"nk-btn"} -->
<div class="wp-block-button nk-btn"><a class="wp-block-button__link wp-element-button" href="/request/"><?php echo esc_html( noki_surveyors_t( 'btn_request' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"nk-textlink"} -->
<p class="nk-textlink"><a href="#report"><?php echo esc_html( noki_surveyors_t( 'hero_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-hero__media","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hero__media">
<!-- wp:group {"className":"nk-pane nk-pane--a","layout":{"type":"default"}} -->
<div class="wp-block-group nk-pane nk-pane--a">
<!-- wp:group {"className":"sp-parallax nk-par-6","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax nk-par-6">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo noki_surveyors_img( 'hero-ladder-lintel.webp' ); ?>" alt="<?php echo noki_surveyors_a( 'alt_h1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-pane nk-pane--b","layout":{"type":"default"}} -->
<div class="wp-block-group nk-pane nk-pane--b">
<!-- wp:group {"className":"sp-parallax nk-par-10","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax nk-par-10">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo noki_surveyors_img( 'hero-damp-meter.webp' ); ?>" alt="<?php echo noki_surveyors_a( 'alt_h2' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-cards","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cards">
<!-- wp:group {"className":"nk-card","layout":{"type":"default"}} -->
<div class="wp-block-group nk-card">
<!-- wp:paragraph {"className":"nk-card__l"} -->
<p class="nk-card__l"><?php echo esc_html( noki_surveyors_t( 'c1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-card__v"} -->
<p class="nk-card__v"><?php echo esc_html( noki_surveyors_t( 'c1_v' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-card__line"} -->
<p class="nk-card__line"><?php echo esc_html( noki_surveyors_t( 'c1_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-card","layout":{"type":"default"}} -->
<div class="wp-block-group nk-card">
<!-- wp:paragraph {"className":"nk-card__l"} -->
<p class="nk-card__l"><?php echo esc_html( noki_surveyors_t( 'c2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-card__v"} -->
<p class="nk-card__v"><?php echo esc_html( noki_surveyors_t( 'c2_v' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-card__line"} -->
<p class="nk-card__line"><?php echo esc_html( noki_surveyors_t( 'c2_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-card nk-card--cta","layout":{"type":"default"}} -->
<div class="wp-block-group nk-card nk-card--cta">
<!-- wp:paragraph {"className":"nk-card__l"} -->
<p class="nk-card__l"><?php echo esc_html( noki_surveyors_t( 'c3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-card__v"} -->
<p class="nk-card__v"><?php echo esc_html( noki_surveyors_t( 'c3_v' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-card__line"} -->
<p class="nk-card__line"><a href="/request/"><?php echo esc_html( noki_surveyors_t( 'c3_t' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
