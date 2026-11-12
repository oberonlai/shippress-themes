<?php
/**
 * Title: Home: intro on a dissolving wash band
 * Slug: meguri-waste/front-intro
 * Categories: meguri-waste
 * Viewport Width: 1440
 * Description: Narrative introduction on white with the watercolour bleeding off the right edge and dissolving into white.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"about","className":"mw-wash mw-wash--intro","layout":{"type":"default"}} -->
<section id="about" class="wp-block-group alignfull mw-wash mw-wash--intro"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-wash__pic"} -->
<figure class="wp-block-image size-full mw-wash__pic"><img src="<?php echo meguri_waste_img( 'p02' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:group {"className":"mw-wash__text sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wash__text sp-reveal sp-reveal--down"><!-- wp:heading {"level":2,"className":"mw-h2"} -->
<h2 class="wp-block-heading mw-h2"><?php echo esc_html( meguri_waste_t( 'intro_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'intro_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'intro_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'intro_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
