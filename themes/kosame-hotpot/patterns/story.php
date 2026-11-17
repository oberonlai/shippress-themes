<?php
/**
 * Title: Home: the pot
 * Slug: kosame-hotpot/story
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Description: Vertical header, lead paragraph, two paragraphs, a parallax photograph and a corner-bracket button.
 */
?>
<!-- wp:group {"anchor":"story","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="story" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'vh_story_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'vh_story' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-lead sp-reveal sp-reveal--up"} -->
<p class="ks-lead sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'story_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'story_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'story_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-photo sp-parallax sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-photo sp-parallax sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kosame_hotpot_img( 'dawn-stockpots.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ks-more-wrap sp-reveal sp-reveal--up"} -->
<div class="wp-block-buttons ks-more-wrap sp-reveal sp-reveal--up"><!-- wp:button {"className":"ks-more"} -->
<div class="wp-block-button ks-more"><a class="wp-block-button__link wp-element-button" href="<?php echo kosame_hotpot_url( '/about/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'more_story' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
