<?php
/**
 * Title: Home: greige parallax band
 * Slug: suzu-ballet/front-band
 * Categories: suzu-ballet
 * Keywords: ballet, dance school, studio
 * Viewport Width: 1440
 * Description: Full-bleed greige photograph that moves slower than the page, with an oversized caps word sitting on its bottom edge.
 */
$t = 'suzu_ballet_t';
?>
<?php
$url = sb_url( 'b11-port-de-bras.webp' );
$alt = $t( 'band_alt' );
?>
<!-- wp:cover {"url":"<?php echo $url; ?>","alt":"<?php echo esc_attr( $alt ); ?>","dimRatio":30,"overlayColor":"tint","align":"full","className":"sb-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull sb-band sp-parallax"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( $alt ); ?>" src="<?php echo $url; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-tint-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><?php
echo sb_p( 'sb-band__cap', $t( 'band_cap' ) ) . "\n\n" . sb_p( 'sb-band__word', $t( 'band_word' ) ) . "\n";
?></div></div>
<!-- /wp:cover -->
