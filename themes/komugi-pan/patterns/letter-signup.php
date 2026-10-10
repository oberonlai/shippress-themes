<?php
/**
 * Title: Newsletter: sign up for the loaf letter
 * Slug: komugi-pan/letter-signup
 * Categories: komugi-pan, call-to-action
 * Keywords: newsletter, subscribe, email
 * Viewport Width: 1440
 * Description: The newsletter page head: what the weekly letter brings, an email form (plain HTML: connect it to your email service) and a round photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kp-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kp-page-head"><!-- wp:group {"align":"wide","className":"kp-split kp-split--7-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kp-split kp-split--7-5"><!-- wp:group {"className":"kp-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kp-stack"><!-- wp:paragraph {"className":"is-style-tag"} -->
<p class="is-style-tag">Every Friday</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The loaf <em>letter</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Next week's special bakes, a short story from the bench, a recipe for the end of the loaf and the first chance to reserve seasonal bread.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="kp-form kp-form--inline" action="#" method="post"><label>Your email<input type="email" name="email" placeholder="you@example.com" autocomplete="email" required></label><button type="submit">Sign me up</button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">One email a week, no adverts. Leave whenever you like with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-bun"} -->
<figure class="wp-block-image size-full is-style-bun"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/coffee.jpg' ) ); ?>" alt="A cup of coffee beside a glazed cinnamon roll"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
