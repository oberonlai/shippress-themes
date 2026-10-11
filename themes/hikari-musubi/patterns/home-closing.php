<?php
/**
 * Title: Home: the closing invitation
 * Slug: hikari-musubi/home-closing
 * Categories: hikari-musubi
 * Keywords: cta, contact, invitation
 * Description: A photograph of a couple from behind, an invitation to write and a link to the contact page.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section hm-closing","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section hm-closing"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-photo hm-photo--portrait"} -->
<figure class="wp-block-image size-large hm-photo hm-photo--portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/couple.jpg' ) ); ?>" alt="A couple seen from behind walking slowly along a garden path in soft morning haze"/></figure>
<!-- /wp:image -->

<!-- wp:separator {"className":"is-style-knot"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-knot"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Tell us about your day</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"hm-centre"} -->
<p class="has-text-align-center hm-centre">Write a few lines about the two of you, a season you like and roughly how many guests. We reply within two working days.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hm-buttons","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons hm-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Write to us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
