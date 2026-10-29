<?php
/**
 * Title: Home: hero
 * Slug: nodoka-counselling/front-hero
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Split first screen: a tall low-key photo window with a slow settle and parallax, a vertical tagline in the mist column, three clay vertical tabs straddling the photo, a hairline and a notice strip.
 */
?>
<!-- wp:group {"className":"nc-hero","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-hero"><!-- wp:group {"className":"nc-hero__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__wrap"><!-- wp:group {"className":"nc-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__stage"><!-- wp:group {"className":"nc-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-hero__fig"} -->
<figure class="wp-block-image size-full nc-hero__fig"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-hero-armchairs.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:heading {"level":1,"className":"nc-hero__tag"} -->
<h1 class="wp-block-heading nc-hero__tag"><?php echo nodoka_counselling_lines( 'tagline_v' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
<!-- /wp:heading -->
<!-- wp:html -->
<nav class="nc-tabs" aria-label="Ways to begin"><a class="nc-tab" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab1' ) ); ?></a><a class="nc-tab" href="mailto:<?php echo esc_attr( nodoka_counselling_t( 'foot_email' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab2' ) ); ?></a><a class="nc-tab" href="<?php echo esc_url( home_url( '/online-sessions/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab3' ) ); ?></a></nav>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"nc-hero__hours"} -->
<p class="nc-hero__hours"><?php echo nodoka_counselling_lines( 'hours_all' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:html -->
<span class="nc-hero__rule" aria-hidden="true"></span>
<!-- /wp:html -->
<!-- wp:html -->
<p class="nc-notice"><span class="nc-notice__chip"><?php echo esc_html( nodoka_counselling_t( 'notice_chip' ) ); ?></span><span class="nc-notice__date"><?php echo esc_html( nodoka_counselling_t( 'notice_date' ) ); ?></span><span class="nc-notice__text"><?php echo esc_html( nodoka_counselling_t( 'notice_text' ) ); ?></span></p>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
