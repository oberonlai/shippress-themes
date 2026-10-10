<?php
/**
 * Title: Newsletter — sign up for The Pressing Letter
 * Slug: kura-shizuku/newsletter-signup
 * Categories: kura-shizuku, featured, call-to-action
 * Keywords: newsletter, signup, subscribe, form
 * Viewport Width: 1440
 * Description: The newsletter page: a centred head, a sealed letter in a drop-shaped frame and a sign-up form in a bottle-label panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-page-head"><!-- wp:group {"align":"wide","className":"ks-page-head__inner ks-centre","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-page-head__inner ks-centre"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Pressing Letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">A letter when the new sake is <em>pressed</em></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-gilded"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-gilded"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">About eight times a year, written by the family: what is in the tanks, which bottles are coming, and the dates of tours and tastings. Subscribers hear about small releases first.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-section--tight","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-section--tight"><!-- wp:group {"align":"wide","className":"ks-grid ks-signup","layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide ks-grid ks-signup"><!-- wp:group {"className":"ks-signup__media","style":{"layout":{"columnSpan":5}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-signup__media"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-drop"} -->
<figure class="wp-block-image size-full is-style-drop"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/newsletter-letter.svg' ) ); ?>" alt="A washi envelope sealed with a gold wax drop beside a sprig of cedar" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-label-frame ks-signup__panel","style":{"layout":{"columnSpan":7}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-label-frame ks-signup__panel"><!-- wp:html -->
<form class="ks-form" action="#" method="post">
	<p class="ks-field ks-field--half"><label for="ks-nl-name">First name</label><input id="ks-nl-name" type="text" name="name" autocomplete="given-name"></p>
	<p class="ks-field ks-field--half"><label for="ks-nl-email">Email</label><input id="ks-nl-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required></p>
	<fieldset class="ks-choices"><legend>Tell me about</legend><label><input type="checkbox" name="topics[]" value="releases" checked> New releases</label><label><input type="checkbox" name="topics[]" value="tours"> Tours and tastings</label><label><input type="checkbox" name="topics[]" value="recipes"> Cooking with sake</label></fieldset>
	<p class="ks-field ks-field--check"><label><input type="checkbox" name="age" value="yes" required> I am of legal drinking age where I live.</label></p>
	<p class="ks-field"><button type="submit" class="wp-element-button">Subscribe to the letter</button></p>
	<p class="ks-form__note">Eight letters a year at most. Leave with one click, any time.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
