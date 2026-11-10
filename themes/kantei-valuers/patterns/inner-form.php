<?php
/**
 * Title: Early-access form
 * Slug: kantei-valuers/inner-form
 * Categories: kantei-valuers
 * Keywords: inner page
 * Viewport Width: 1440
 * Inserter: no
 * Description: Name, email and role, posting to the thanks page. Never on a first screen.
 */
$e = 'kantei_valuers_e';
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"signup","className":"kv-sec kv-signup","layout":{"type":"default"}} -->
<section id="signup" class="wp-block-group alignfull kv-sec kv-signup"><!-- wp:heading {"level":2,"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo $e( 'nl_h' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kv-label"} -->
<p class="kv-label"><?php echo $e( 'nl_first' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="kv-form" action="/thanks/" method="post"><p><label><span><?php echo $e( 'nl_name' ); ?></span><input type="text" name="name" autocomplete="name" required></label></p><p><label><span><?php echo $e( 'nl_email' ); ?></span><input type="email" name="email" autocomplete="email" required></label></p><p><label><span><?php echo $e( 'nl_role' ); ?></span><select name="role"><option value="lender"><?php echo $e( 'nl_r1' ); ?></option><option value="owner"><?php echo $e( 'nl_r2' ); ?></option><option value="agent"><?php echo $e( 'nl_r3' ); ?></option></select></label></p><p><button type="submit" class="kv-pill kv-pill--btn"><?php echo $e( 'nl_go' ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kv-notes-line"} -->
<p class="kv-notes-line"><?php echo $e( 'nl_priv' ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
