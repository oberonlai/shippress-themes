<?php
/**
 * Title: Home: questions and first step
 * Slug: nodoka-counselling/front-close
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Three short questions as disclosure items at the left; at the right an entrance photograph, a short invitation and two buttons.
 */
?>
<!-- wp:group {"className":"nc-sec nc-close","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"start"} -->
<section id="start" class="wp-block-group alignfull nc-sec nc-close"><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-close__rule","layout":{"type":"default"}} -->
<div class="wp-block-group nc-close__rule"><!-- wp:html -->
<span aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-close__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nc-close__grid"><!-- wp:group {"className":"nc-close__l","layout":{"type":"default"}} -->
<div class="wp-block-group nc-close__l"><!-- wp:heading {"level":2,"className":"nc-close__title"} -->
<h2 class="wp-block-heading nc-close__title"><?php echo esc_html( nodoka_counselling_t( 'faq_title' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"nc-faq","layout":{"type":"default"}} -->
<div class="wp-block-group nc-faq"><!-- wp:details {"className":"nc-faq__i"} -->
<details class="wp-block-details nc-faq__i"><summary><?php echo esc_html( nodoka_counselling_t( 'faq_q1' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( nodoka_counselling_t( 'faq_a1' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"nc-faq__i"} -->
<details class="wp-block-details nc-faq__i"><summary><?php echo esc_html( nodoka_counselling_t( 'faq_q2' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( nodoka_counselling_t( 'faq_a2' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"nc-faq__i"} -->
<details class="wp-block-details nc-faq__i"><summary><?php echo esc_html( nodoka_counselling_t( 'faq_q3' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( nodoka_counselling_t( 'faq_a3' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"nc-link"} -->
<p class="nc-link"><a href="<?php echo esc_url( home_url( '/questions/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'faq_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-close__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-close__r sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-close__photo"} -->
<figure class="wp-block-image size-full nc-close__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-entrance.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"nc-close__cta"} -->
<p class="nc-close__cta"><?php echo esc_html( nodoka_counselling_t( 'cta_text' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"nc-btns"} -->
<div class="wp-block-buttons nc-btns"><!-- wp:button {"className":"nc-btn nc-btn--fill"} -->
<div class="wp-block-button nc-btn nc-btn--fill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'cta_btn1' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"nc-btn"} -->
<div class="wp-block-button nc-btn"><a class="wp-block-button__link wp-element-button" href="mailto:<?php echo esc_attr( nodoka_counselling_t( 'foot_email' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'cta_btn2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->