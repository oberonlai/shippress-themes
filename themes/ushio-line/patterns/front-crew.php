<?php
/**
 * Title: Home: crew
 * Slug: ushio-line/front-crew
 * Categories: ushio-line
 * Keywords: ferry, harbour
 * Viewport Width: 1440
 * Description: Mirrored flush split row: the master at the wheelhouse window flush right, four ruled crew rows and a deckhand photograph floating lower left.
 */
?>
<?php
$ul_rows = '';
for ( $ul_i = 1; $ul_i <= 4; $ul_i++ ) {
	$ul_rows .= '<li class="ul-rule-row"><span class="ul-rule-row__a">' . esc_html( ushio_line_t( 'cr' . $ul_i . '_r' ) ) . '</span><span class="ul-rule-row__b">' . esc_html( ushio_line_t( 'cr' . $ul_i . '_n' ) ) . '</span><span class="ul-rule-row__c">' . esc_html( ushio_line_t( 'cr' . $ul_i . '_l' ) ) . '</span></li>';
}
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ul-sec ul-crew","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ul-sec ul-crew"><!-- wp:group {"className":"ul-split ul-split--rev","layout":{"type":"default"}} -->
<div class="wp-block-group ul-split ul-split--rev"><!-- wp:group {"className":"ul-split__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ul-split__text sp-reveal sp-reveal--up"><!-- wp:heading {"className":"ul-h"} -->
<h2 class="wp-block-heading ul-h"><?php echo esc_html( ushio_line_t( 'cr_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ushio_line_t( 'cr_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="ul-rule-rows"><?php echo $ul_rows; // phpcs:ignore WordPress.Security.EscapeOutput ?></ul>
<!-- /wp:html -->

<?php echo ushio_line_go( ushio_line_t( 'cr_go' ), '/crew/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ul-split__photo sp-reveal sp-reveal--right"} -->
<figure class="wp-block-image size-full ul-split__photo sp-reveal sp-reveal--right"><img src="<?php echo ushio_line_img( 'c1-master.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_c1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ul-split__float sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full ul-split__float sp-reveal sp-reveal--up"><img src="<?php echo ushio_line_img( 'c2-rope.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_c2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<?php echo ushio_line_ticks( array( array( 50, 5, 35 ), array( 56, 70, 70 ), array( 3, 1, 35 ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- /wp:html --></section>
<!-- /wp:group -->
