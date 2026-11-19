<?php
/**
 * Title: Home: about on a blurred ground
 * Slug: rinrin-cycletours/front-about
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: The (About) label, a three-line stepped heading with hairlines and three paragraphs over a blurred, mist-veiled copy of a photograph; two photographs flush to opposite viewport edges.
 */
?>
<!-- wp:group {"className":"rc-about","tagName":"section","anchor":"about","align":"full","layout":{"type":"default"}} -->
<section id="about" class="wp-block-group alignfull rc-about"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-about__photo rc-about__photo--l"} -->
<figure class="wp-block-image size-full rc-about__photo rc-about__photo--l"><img src="<?php echo rinrin_cycletours_img( 'about-hands.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_about_hands' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rc-about__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group rc-about__text sp-stagger"><!-- wp:group {"className":"rc-about__lab sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-about__lab sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'about_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"rc-about__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading rc-about__h sp-reveal sp-reveal--up"><span class="rc-step rc-step--1"><?php echo esc_html( rinrin_cycletours_t( 'about_h1' ) ); ?></span><span class="rc-step rc-step--2"><?php echo esc_html( rinrin_cycletours_t( 'about_h2' ) ); ?></span><span class="rc-step rc-step--3"><?php echo esc_html( rinrin_cycletours_t( 'about_h3' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-about__p sp-reveal sp-reveal--up"} -->
<p class="rc-about__p sp-reveal sp-reveal--up"><?php echo esc_html( rinrin_cycletours_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"rc-about__p sp-reveal sp-reveal--up"} -->
<p class="rc-about__p sp-reveal sp-reveal--up"><?php echo esc_html( rinrin_cycletours_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"rc-about__p sp-reveal sp-reveal--up"} -->
<p class="rc-about__p sp-reveal sp-reveal--up"><?php echo esc_html( rinrin_cycletours_t( 'about_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rc-pill"} -->
<div class="wp-block-button rc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'about_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-about__photo rc-about__photo--r"} -->
<figure class="wp-block-image size-full rc-about__photo rc-about__photo--r"><img src="<?php echo rinrin_cycletours_img( 'about-guests.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_about_guests' ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
