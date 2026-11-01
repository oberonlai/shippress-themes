<?php
/**
 * Title: Home: fares
 * Slug: ushio-line/front-fares
 * Categories: ushio-line
 * Keywords: ferry, harbour
 * Viewport Width: 1440
 * Description: Mist ground: label, heading and intro beside a ticket-window photograph, then a full-width ruled list of the six fares.
 */
?>
<?php
$ul_fares = '';
for ( $ul_i = 1; $ul_i <= 6; $ul_i++ ) {
	$ul_fares .= '<li class="ul-fare"><span class="ul-fare__n">' . esc_html( ushio_line_t( 'fa' . $ul_i . '_n' ) ) . '</span><span class="ul-fare__note">' . esc_html( ushio_line_t( 'fa' . $ul_i . '_note' ) ) . '</span><span class="ul-fare__p">' . esc_html( ushio_line_t( 'fa' . $ul_i . '_p' ) ) . '</span></li>';
}
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ul-sec ul-fares","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ul-sec ul-fares"><!-- wp:group {"className":"ul-wrap ul-fares__top","layout":{"type":"default"}} -->
<div class="wp-block-group ul-wrap ul-fares__top"><!-- wp:group {"className":"ul-fares__head","layout":{"type":"default"}} -->
<div class="wp-block-group ul-fares__head"><!-- wp:paragraph {"className":"ul-label"} -->
<p class="ul-label"><?php echo esc_html( ushio_line_t( 'fr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ul-h"} -->
<h2 class="wp-block-heading ul-h"><?php echo esc_html( ushio_line_t( 'fr_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ushio_line_t( 'fr_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ul-fares__photo"} -->
<figure class="wp-block-image size-full ul-fares__photo"><img src="<?php echo ushio_line_img( 't1-ticket-window.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_t1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ul-wrap"><ul class="ul-fare-list"><?php echo $ul_fares; // phpcs:ignore WordPress.Security.EscapeOutput ?></ul></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ul-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ul-wrap"><?php echo ushio_line_go( ushio_line_t( 'fr_go' ), '/fares/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
