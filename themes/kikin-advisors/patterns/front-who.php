<?php
/**
 * Title: Home: who it's for
 * Slug: kikin-advisors/front-who
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: Pale butter band bleeding off the right edge with an outline circle badge on its corner and a vertical headline.
 */
?>
<!-- wp:group {"align":"full","anchor":"who","className":"kk-sec kk-who","layout":{"type":"default"}} -->
<div id="who" class="wp-block-group alignfull kk-sec kk-who"><!-- wp:group {"className":"kk-band kk-band--r","layout":{"type":"default"}} -->
<div class="wp-block-group kk-band kk-band--r"><?php echo kikin_advisors_badge( kikin_advisors_t( 'who_badge' ), kikin_advisors_t( 'who_badge_sub' ) ); ?>

<?php echo kikin_advisors_vhead( kikin_advisors_t( 'who_head' ) ); ?>

<!-- wp:group {"className":"kk-band__fig sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kk-band__fig sp-reveal sp-reveal--left"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1100,"height":825} -->
<figure class="wp-block-image size-full"><img src="<?php echo kikin_advisors_img( 'k06.webp' ); ?>" alt="<?php echo esc_attr( kikin_advisors_t( 'alt_k06' ) ); ?>" width="1100" height="825"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-band__text sp-reveal sp-reveal--right","layout":{"type":"default"}} -->
<div class="wp-block-group kk-band__text sp-reveal sp-reveal--right"><!-- wp:paragraph -->
<p><?php echo esc_html( kikin_advisors_t( 'who_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kikin_advisors_t( 'who_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kk-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kk-rows"><?php
echo kikin_advisors_row( kikin_advisors_t( 'who_r1_h' ), kikin_advisors_t( 'who_r1_d' ) ) . "\n\n";
echo kikin_advisors_row( kikin_advisors_t( 'who_r2_h' ), kikin_advisors_t( 'who_r2_d' ) ) . "\n\n";
echo kikin_advisors_row( kikin_advisors_t( 'who_r3_h' ), kikin_advisors_t( 'who_r3_d' ) );
?></div>
<!-- /wp:group -->

<?php echo kikin_advisors_pill( kikin_advisors_t( 'cta' ), '#request' ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
