<?php
/**
 * Title: Home: piers
 * Slug: ushio-line/front-piers
 * Categories: ushio-line
 * Keywords: ferry, harbour
 * Viewport Width: 1440
 * Description: Mist ground: a sine route with six piers set by minutes, three portrait photographs echoing the hero, pier links and a drifting tick row.
 */
?>
<?php
$ul_piers = array( 0, 5, 9, 14, 19, 24 );
$ul_route = '';
foreach ( $ul_piers as $ul_i => $ul_m ) {
	$ul_route .= '<li class="ul-route__stop' . ( 0 === $ul_i ? ' is-first' : '' ) . ( 5 === $ul_i ? ' is-last' : '' ) . '" style="--p:' . round( $ul_m / 24 * 100, 2 ) . '%"><span class="ul-route__name">' . esc_html( ushio_line_t( 'pier' . ( $ul_i + 1 ) ) ) . '</span><span class="ul-route__dot" aria-hidden="true"></span><span class="ul-route__min">' . esc_html( sprintf( ushio_line_t( 'pr_min' ), $ul_m ) ) . '</span></li>';
}
$ul_tickset = '';
foreach ( array( 70, 35, 140, 35, 70, 140, 35, 70, 35, 140 ) as $ul_w ) {
	$ul_tickset .= '<span class="ul-tick ul-tick--row" style="--w:' . $ul_w . 'px"></span>';
}
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ul-sec ul-piers","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ul-sec ul-piers"><!-- wp:group {"className":"ul-wrap ul-piers__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ul-wrap ul-piers__head sp-reveal sp-reveal--up"><!-- wp:heading {"className":"ul-h"} -->
<h2 class="wp-block-heading ul-h"><?php echo esc_html( ushio_line_t( 'pr_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ushio_line_t( 'pr_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ul-wrap"><ol class="ul-route" aria-label="<?php echo esc_attr( ushio_line_t( 'pr_all_label' ) ); ?>"><?php echo $ul_route; // phpcs:ignore WordPress.Security.EscapeOutput ?></ol></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ul-wrap ul-trio sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ul-wrap ul-trio sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ul-trio__a sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full ul-trio__a sp-reveal sp-reveal--zoom"><img src="<?php echo ushio_line_img( 'p1-eastmole.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_p1' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( ushio_line_t( 'pr_cap1' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ul-trio__b sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full ul-trio__b sp-reveal sp-reveal--zoom"><img src="<?php echo ushio_line_img( 'p2-stairs.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_p2' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( ushio_line_t( 'pr_cap2' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ul-trio__c sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full ul-trio__c sp-reveal sp-reveal--zoom"><img src="<?php echo ushio_line_img( 'p3-timber-pier.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_p3' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( ushio_line_t( 'pr_cap3' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ul-wrap ul-links","layout":{"type":"default"}} -->
<div class="wp-block-group ul-wrap ul-links"><?php for ( $ul_i = 1; $ul_i <= 6; $ul_i++ ) { echo "\n" . ushio_line_go( ushio_line_t( 'pier' . $ul_i ), '/piers/#pier-' . $ul_i ) . "\n"; } // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="sp-marquee ul-ticks-row" aria-hidden="true"><div class="ul-ticks-row__set"><?php echo $ul_tickset; // phpcs:ignore WordPress.Security.EscapeOutput ?></div><div class="ul-ticks-row__set"><?php echo $ul_tickset; // phpcs:ignore WordPress.Security.EscapeOutput ?></div></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
