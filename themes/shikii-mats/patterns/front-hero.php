<?php
/**
 * Title: Home: threshold split collage hero
 * Slug: shikii-mats/front-hero
 * Categories: shikii-mats
 * Viewport Width: 1440
 * Description: Four abutting photo tiles of unequal width cut by one dark threshold line, the headline below the photographs and a booking bar closing the first screen.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"sm-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull sm-hero">
<!-- wp:group {"align":"full","className":"sm-collage","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sm-collage">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-tile sm-tile--a"} -->
<figure class="wp-block-image size-full sm-tile sm-tile--a"><img src="<?php echo shikii_mats_img( 'hero-wet-pavement.webp' ); ?>" alt="<?php echo shikii_mats_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"sm-tile sm-tile--b sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sm-tile sm-tile--b sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-tile__img"} -->
<figure class="wp-block-image size-full sm-tile__img"><img src="<?php echo shikii_mats_img( 'hero-fitter-door.webp' ); ?>" alt="<?php echo shikii_mats_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-tile sm-tile--c"} -->
<figure class="wp-block-image size-full sm-tile sm-tile--c"><img src="<?php echo shikii_mats_img( 'hero-glass-door-rain.webp' ); ?>" alt="<?php echo shikii_mats_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-tile sm-tile--d"} -->
<figure class="wp-block-image size-full sm-tile sm-tile--d"><img src="<?php echo shikii_mats_img( 'hero-mat-pile.webp' ); ?>" alt="<?php echo shikii_mats_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"sm-line","layout":{"type":"default"}} -->
<div class="wp-block-group sm-line">
<!-- wp:paragraph {"className":"sm-chip sm-chip--out"} -->
<p class="sm-chip sm-chip--out"><?php echo esc_html( shikii_mats_t( 'chip_out' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-chip sm-chip--in"} -->
<p class="sm-chip sm-chip--in"><?php echo esc_html( shikii_mats_t( 'chip_in' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-rib","layout":{"type":"default"}} -->
<div class="wp-block-group sm-rib">

</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sm-cap"} -->
<p class="sm-cap"><?php echo esc_html( shikii_mats_t( 'cap_oi' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sm-wrap sm-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group sm-wrap sm-hero__text">
<!-- wp:paragraph {"className":"sm-eyebrow"} -->
<p class="sm-eyebrow"><?php echo esc_html( shikii_mats_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"sm-h1"} -->
<h1 class="wp-block-heading sm-h1"><?php echo shikii_mats_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-lede"} -->
<p class="sm-lede"><?php echo esc_html( shikii_mats_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sm-bar","layout":{"type":"default"}} -->
<div class="wp-block-group sm-bar">
<!-- wp:group {"className":"sm-bar__c","layout":{"type":"default"}} -->
<div class="wp-block-group sm-bar__c">
<!-- wp:paragraph {"className":"sm-bar__l"} -->
<p class="sm-bar__l"><?php echo esc_html( shikii_mats_t( 'bar_l1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-bar__v"} -->
<p class="sm-bar__v"><?php echo esc_html( shikii_mats_t( 'bar_v1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-bar__c","layout":{"type":"default"}} -->
<div class="wp-block-group sm-bar__c">
<!-- wp:paragraph {"className":"sm-bar__l"} -->
<p class="sm-bar__l"><?php echo esc_html( shikii_mats_t( 'bar_l2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-bar__v"} -->
<p class="sm-bar__v"><?php echo esc_html( shikii_mats_t( 'bar_v2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-bar__c sm-bar__c--btn","layout":{"type":"default"}} -->
<div class="wp-block-group sm-bar__c sm-bar__c--btn">
<!-- wp:buttons {"className":"sm-cta"} -->
<div class="wp-block-buttons sm-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/book-a-trial/"><?php echo esc_html( shikii_mats_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
