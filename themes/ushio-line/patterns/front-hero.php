<?php
/**
 * Title: Home: hero
 * Slug: ushio-line/front-hero
 * Categories: ushio-line
 * Keywords: ferry, harbour
 * Viewport Width: 1440
 * Description: Three portrait harbour photographs in one huge-radius frame, the wordmark on the seam, wave ticks and the ellipse link.
 */
?>
<!-- wp:html -->
<section class="ul-hero alignfull">
<div class="ul-hero__frame">
<div class="ul-panel ul-panel--a sp-parallax" style="--sp-par:6%"><div class="ul-panel__drift"><img class="sp-parallax__layer" src="<?php echo ushio_line_img( 'k1-gangway.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_k1' ) ); ?>" width="720" height="1280" loading="eager" decoding="async"></div></div>
<div class="ul-panel ul-panel--b sp-parallax" style="--sp-par:9%"><div class="ul-panel__drift"><img class="sp-parallax__layer" src="<?php echo ushio_line_img( 'k2-gull.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_k2' ) ); ?>" width="864" height="1152" loading="eager" fetchpriority="high" decoding="async"></div></div>
<div class="ul-panel ul-panel--c sp-parallax" style="--sp-par:7%"><div class="ul-panel__drift"><img class="sp-parallax__layer" src="<?php echo ushio_line_img( 'k3-far-pier.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_k3' ) ); ?>" width="720" height="1280" loading="eager" decoding="async"></div></div>
<div class="ul-seam"><h1 class="ul-seam__mark"><?php echo esc_html( ushio_line_t( 'wordmark1' ) ); ?><br><?php echo esc_html( ushio_line_t( 'wordmark2' ) ); ?></h1><p class="ul-seam__tag"><?php echo esc_html( ushio_line_t( 'tagline' ) ); ?></p></div>
<?php echo ushio_line_ticks( array( array( 62, 44, 70, 1 ), array( 82, 82, 35, 1 ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
</div>
<?php echo ushio_line_ticks( array( array( 2, 21, 35 ), array( 51, 1.6, 70 ), array( 40, 9.4, 35 ), array( 1, 63, 35 ), array( 3, 93, 70 ), array( 96, 17, 35 ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<p class="ul-hero__today"><a class="ul-today" href="#day"><span class="ul-today__dot" aria-hidden="true"></span><?php echo esc_html( ushio_line_t( 'today' ) ); ?> ↓</a></p>
</section>
<!-- /wp:html -->
