<?php
/**
 * Title: Home: the case
 * Slug: kura-wine/front-case
 * Categories: kura-wine
 * Keywords: wine, shop, merchant
 * Viewport Width: 1440
 * Description: 50/50 split: dark text half with a 2 by 2 grid of hairline link rows against a half-bleed 3:4 photo.
 */
?>
<?php
$rows = array(
	array( 1, 'arrives' ),
	array( 2, 'rests' ),
	array( 3, 'tasted' ),
	array( 4, 'friday' ),
);
?>
<!-- wp:columns {"align":"full","anchor":"case","className":"kw-case","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div id="case" class="wp-block-columns alignfull kw-case"><!-- wp:column {"className":"kw-case__text"} -->
<div class="wp-block-column kw-case__text"><!-- wp:paragraph {"className":"kw-label"} -->
<p class="kw-label"><?php echo esc_html( kura_wine_t( 'cs_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-catch"} -->
<p class="kw-catch"><?php echo esc_html( kura_wine_t( 'cs_catch' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-case__p sp-reveal sp-reveal--up"} -->
<p class="kw-case__p sp-reveal sp-reveal--up"><?php echo esc_html( kura_wine_t( 'cs_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kw-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kw-rows sp-stagger"><?php foreach ( $rows as $r ) : ?>
<!-- wp:paragraph {"className":"kw-row sp-reveal sp-reveal--up"} -->
<p class="kw-row sp-reveal sp-reveal--up"><a href="<?php echo esc_url( home_url( '/the-case/#' . $r[1] ) ); ?>"><span class="kw-row__n">0<?php echo (int) $r[0]; ?></span> <?php echo esc_html( kura_wine_t( 'cs_r' . $r[0] ) ); ?></a></p>
<!-- /wp:paragraph -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"kw-case__photo"} -->
<div class="wp-block-column kw-case__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kw-ph kw-ph--k9 kw-case__img sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full kw-ph kw-ph--k9 kw-case__img sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( kura_wine_img( 'K9' ) ); ?>" alt="<?php echo esc_attr( kura_wine_t( 'alt_K9' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
