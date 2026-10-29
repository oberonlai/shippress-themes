<?php
/**
 * Title: Page: about
 * Slug: nodoka-counselling/page-about
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Inner page about (compact split hero, ruled openers, quiet rows).
 */
?>
<!-- wp:group {"className":"nc-hero nc-hero--page","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-hero nc-hero--page"><!-- wp:group {"className":"nc-hero__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__wrap"><!-- wp:group {"className":"nc-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__stage"><!-- wp:group {"className":"nc-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-hero__fig"} -->
<figure class="wp-block-image size-full nc-hero__fig"><img fetchpriority="high" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-waiting-bench.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-hero__pt","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__pt"><!-- wp:paragraph {"className":"nc-hero__eye"} -->
<p class="nc-hero__eye"><?php echo esc_html( nodoka_counselling_t( 'ip_about_01' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"nc-hero__title"} -->
<h1 class="wp-block-heading nc-hero__title"><?php echo esc_html( nodoka_counselling_t( 'ip_about_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:html -->
<nav class="nc-tabs" aria-label="Ways to begin"><a class="nc-tab" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab1' ) ); ?></a><a class="nc-tab" href="mailto:<?php echo esc_attr( nodoka_counselling_t( 'foot_email' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab2' ) ); ?></a><a class="nc-tab" href="<?php echo esc_url( home_url( '/online-sessions/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab3' ) ); ?></a></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<span class="nc-hero__rule" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-sec nc-in nc-in--first","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-sec nc-in nc-in--first"><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-open","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open"><!-- wp:group {"className":"nc-open__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"nc-open__title"} -->
<h2 class="wp-block-heading nc-open__title"><?php echo esc_html( nodoka_counselling_t( 'ip_about_03' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-open__sub"} -->
<p class="nc-open__sub"><?php echo esc_html( nodoka_counselling_t( 'ip_about_04' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"nc-open__lead sp-reveal sp-reveal--up"} -->
<p class="nc-open__lead sp-reveal sp-reveal--up"><?php echo esc_html( nodoka_counselling_t( 'ip_about_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-why__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nc-why__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-why__photo sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full nc-why__photo sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-plaster-leaf.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"nc-why__text","layout":{"type":"default"}} -->
<div class="wp-block-group nc-why__text"><!-- wp:group {"className":"nc-poem__side","layout":{"type":"default"}} -->
<div class="wp-block-group nc-poem__side"><!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label"><?php echo esc_html( nodoka_counselling_t( 'ip_about_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-poem sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nc-poem sp-stagger"><!-- wp:paragraph {"className":"nc-poem__s sp-reveal sp-reveal--up"} -->
<p class="nc-poem__s sp-reveal sp-reveal--up"><?php echo nodoka_counselling_lines( 'ip_about_07' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-poem__s sp-reveal sp-reveal--up"} -->
<p class="nc-poem__s sp-reveal sp-reveal--up"><?php echo nodoka_counselling_lines( 'ip_about_08' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-poem__s sp-reveal sp-reveal--up"} -->
<p class="nc-poem__s sp-reveal sp-reveal--up"><?php echo nodoka_counselling_lines( 'ip_about_09' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-sec nc-in ","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-sec nc-in "><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group nc-rows"><!-- wp:group {"className":"nc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row sp-reveal sp-reveal--up"><!-- wp:group {"className":"nc-row__l","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row__l"><!-- wp:heading {"level":3,"className":"nc-row__h"} -->
<h3 class="wp-block-heading nc-row__h"><?php echo esc_html( nodoka_counselling_t( 'ip_about_10' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-row__r","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row__r"><!-- wp:paragraph {"className":"nc-row__p"} -->
<p class="nc-row__p"><?php echo esc_html( nodoka_counselling_t( 'ip_about_11' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row sp-reveal sp-reveal--up"><!-- wp:group {"className":"nc-row__l","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row__l"><!-- wp:heading {"level":3,"className":"nc-row__h"} -->
<h3 class="wp-block-heading nc-row__h"><?php echo esc_html( nodoka_counselling_t( 'ip_about_12' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-row__r","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row__r"><!-- wp:paragraph {"className":"nc-row__p"} -->
<p class="nc-row__p"><?php echo esc_html( nodoka_counselling_t( 'ip_about_13' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-sec nc-in ","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-sec nc-in "><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-who__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nc-who__grid"><!-- wp:group {"className":"nc-pair sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-pair sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-pair__a"} -->
<figure class="wp-block-image size-full nc-pair__a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-room-wide.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-pair__b"} -->
<figure class="wp-block-image size-full nc-pair__b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-hands-cup.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-who__side","layout":{"type":"default"}} -->
<div class="wp-block-group nc-who__side"><!-- wp:heading {"level":2,"className":"nc-who__h"} -->
<h2 class="wp-block-heading nc-who__h"><?php echo esc_html( nodoka_counselling_t( 'ip_about_14' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-row__p"} -->
<p class="nc-row__p"><?php echo esc_html( nodoka_counselling_t( 'ip_about_15' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-link"} -->
<p class="nc-link"><a href="<?php echo esc_url( home_url( '/practitioners/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'ip_about_16' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->