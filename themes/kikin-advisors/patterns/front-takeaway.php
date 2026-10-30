<?php
/**
 * Title: Home: takeaway
 * Slug: kikin-advisors/front-takeaway
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: Mirrored butter band bleeding off the left edge with the badge on its top-left corner, a ruled list and an illustration on the right.
 */
?>
<!-- wp:group {"align":"full","anchor":"takeaway","className":"kk-sec kk-takeaway","layout":{"type":"default"}} -->
<div id="takeaway" class="wp-block-group alignfull kk-sec kk-takeaway"><!-- wp:group {"className":"kk-band kk-band--l","layout":{"type":"default"}} -->
<div class="wp-block-group kk-band kk-band--l"><?php echo kikin_advisors_badge( kikin_advisors_t( 'take_badge' ), kikin_advisors_t( 'take_badge_sub' ) ); ?>

<?php echo kikin_advisors_vhead( kikin_advisors_t( 'take_head' ) ); ?>

<!-- wp:group {"className":"kk-band__text sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kk-band__text sp-reveal sp-reveal--left"><!-- wp:paragraph -->
<p><?php echo esc_html( kikin_advisors_t( 'take_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kk-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kk-rows"><?php
for ( $i = 1; $i <= 4; $i++ ) {
	echo kikin_advisors_row( kikin_advisors_t( 'take_r' . $i . '_h' ), kikin_advisors_t( 'take_r' . $i . '_d' ) ) . ( 4 === $i ? '' : "\n\n" );
}
?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-band__fig sp-reveal sp-reveal--right","layout":{"type":"default"}} -->
<div class="wp-block-group kk-band__fig sp-reveal sp-reveal--right"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1100,"height":825} -->
<figure class="wp-block-image size-full"><img src="<?php echo kikin_advisors_img( 'k10.webp' ); ?>" alt="<?php echo esc_attr( kikin_advisors_t( 'alt_k10' ) ); ?>" width="1100" height="825"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
