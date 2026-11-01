<?php
/**
 * Title: Home: access
 * Slug: ushio-line/front-access
 * Categories: ushio-line
 * Keywords: ferry, harbour
 * Viewport Width: 1440
 * Description: Step-free boarding in three ruled rows beside a boarding-ramp photograph.
 */
?>
<?php
$ul_acc = '';
for ( $ul_i = 1; $ul_i <= 3; $ul_i++ ) {
	$ul_acc .= '<li class="ul-rule-row ul-rule-row--two"><span class="ul-rule-row__a">' . esc_html( ushio_line_t( 'ac_r' . $ul_i . '_t' ) ) . '</span><span class="ul-rule-row__c">' . esc_html( ushio_line_t( 'ac_r' . $ul_i ) ) . '</span></li>';
}
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ul-sec ul-access","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ul-sec ul-access"><!-- wp:group {"className":"ul-wrap ul-access__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ul-wrap ul-access__grid"><!-- wp:group {"className":"ul-access__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ul-access__text sp-reveal sp-reveal--up"><!-- wp:heading {"className":"ul-h"} -->
<h2 class="wp-block-heading ul-h"><?php echo esc_html( ushio_line_t( 'ac_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<ul class="ul-rule-rows"><?php echo $ul_acc; // phpcs:ignore WordPress.Security.EscapeOutput ?></ul>
<!-- /wp:html -->

<?php echo ushio_line_go( ushio_line_t( 'ac_go' ), '/on-board/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ul-access__photo sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full ul-access__photo sp-reveal sp-reveal--up"><img src="<?php echo ushio_line_img( 'a1-ramp.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_a1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
