<?php
/**
 * Title: Home: hero
 * Slug: fukubi-clinic/front-hero
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Pale slate-mist wash with a row of five circular photographs (centre one large, two cut by the screen edges) gliding sideways, a blurred halo disc behind with parallax, a quote-mark headline at the lower left and a dot-matrix week card docked over the centre circle.
 */
?>
<!-- wp:group {"align":"full","className":"fc-hero sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-hero sp-parallax"><!-- wp:html -->
<div class="fc-halo sp-parallax__layer" aria-hidden="true"></div>
<!-- /wp:html --><!-- wp:group {"className":"fc-circles","layout":{"type":"default"}} -->
<div class="wp-block-group fc-circles"><?php
echo fc_img( 'p04-reception.webp', fc_t( 'alt_p04' ), 'fc-c fc-c--4' ) . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput
echo fc_img( 'p02-fasting.webp', fc_t( 'alt_p02' ), 'fc-c fc-c--2' ) . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput
echo fc_img( 'p01-report.webp', fc_t( 'alt_p01' ), 'fc-c fc-c--1' ) . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput
echo fc_img( 'p03-room.webp', fc_t( 'alt_p03' ), 'fc-c fc-c--3' ) . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput
echo fc_img( 'p05-corridor.webp', fc_t( 'alt_p05' ), 'fc-c fc-c--5' ); // phpcs:ignore WordPress.Security.EscapeOutput
?></div>
<!-- /wp:group --><!-- wp:group {"className":"fc-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group fc-hero__text"><!-- wp:heading {"level":1,"className":"fc-hero__title"} -->
<h1 class="wp-block-heading fc-hero__title"><span class="fc-hero__q">“<?php echo esc_html( fc_t( 'hero_q' ) ); ?>”</span><br><span class="fc-hero__l"><?php echo esc_html( fc_t( 'hero_2' ) ); ?></span></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"fc-hero__lead"} -->
<p class="fc-hero__lead"><?php echo esc_html( fc_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"fc-btns fc-btns--pair"} -->
<div class="wp-block-buttons fc-btns fc-btns--pair"><!-- wp:button {"className":"fc-btn"} -->
<div class="wp-block-button fc-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( fc_t( 'book_first' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"fc-btn"} -->
<div class="wp-block-button fc-btn"><a class="wp-block-button__link wp-element-button" href="#symptoms"><?php echo esc_html( fc_t( 'hero_btn2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><!-- wp:group {"className":"fc-hero__card","layout":{"type":"default"}} -->
<div class="wp-block-group fc-hero__card"><?php echo fc_week_card(); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
