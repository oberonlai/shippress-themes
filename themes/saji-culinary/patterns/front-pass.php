<?php
/**
 * Title: Home: the pass
 * Slug: saji-culinary/front-pass
 * Categories: saji-culinary
 * Keywords: culinary school, cooking, chef
 * Viewport Width: 1440
 * Description: Giant word THE PASS with the spoon seal beside the round halftone portrait, then two paragraphs and three fact lines.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"saji-sec saji-pass","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull saji-sec saji-pass"><!-- wp:group {"align":"wide","className":"saji-t3","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide saji-t3"><?php echo saji_culinary_halftone( 'p1-taste.webp', saji_culinary_t( 'alt_p1' ) ); ?>

<?php echo saji_culinary_word( saji_culinary_t( 'ps_word' ), saji_culinary_t( 'ps_sub' ), '' ); ?></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"saji-pass__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide saji-pass__grid"><!-- wp:group {"className":"saji-pass__facts","layout":{"type":"default"}} -->
<div class="wp-block-group saji-pass__facts"><!-- wp:paragraph {"className":"saji-fact"} -->
<p class="saji-fact"><?php echo esc_html( saji_culinary_t( 'ps_f1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"saji-fact"} -->
<p class="saji-fact"><?php echo esc_html( saji_culinary_t( 'ps_f2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"saji-fact"} -->
<p class="saji-fact"><?php echo esc_html( saji_culinary_t( 'ps_f3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"saji-pass__text","layout":{"type":"default"}} -->
<div class="wp-block-group saji-pass__text"><!-- wp:paragraph {"className":""} -->
<p class=""><?php echo esc_html( saji_culinary_t( 'ps_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":""} -->
<p class=""><?php echo esc_html( saji_culinary_t( 'ps_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
