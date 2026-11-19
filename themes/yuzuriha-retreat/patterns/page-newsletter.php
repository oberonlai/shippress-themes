<?php
/**
 * Title: Page: Newsletter
 * Slug: yuzuriha-retreat/page-newsletter
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Opener, a dark panel holding the newsletter form slot and three notes on the letter.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-opener sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group yr-opener sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-opener__img"} -->
<figure class="wp-block-image size-full yr-opener__img"><img src="<?php echo yuzuriha_retreat_img( 'p15-bread-soup.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yr-opener__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-opener__text"><!-- wp:html -->
<div class="yr-glow" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-kicker"} -->
<p class="yr-kicker"><?php echo esc_html( yuzuriha_retreat_t( 'p_newsletter_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yr-opener__h"} -->
<h1 class="wp-block-heading yr-opener__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_newsletter_t' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--stone","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--stone"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'nl_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-intro yr-intro--wide"} -->
<p class="yr-intro yr-intro--wide"><?php echo esc_html( yuzuriha_retreat_t( 'p_newsletter_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-panel yr-panel--dark","layout":{"type":"default"}} -->
<div class="wp-block-group yr-panel yr-panel--dark"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@yuzuriha.example', 'label' => yuzuriha_retreat_t( 'forms_email' ), 'submit' => yuzuriha_retreat_t( 'forms_subscribe' ), 'notice' => yuzuriha_retreat_t( 'forms_mail_notice' ), 'subject' => yuzuriha_retreat_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--mist","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--mist"><!-- wp:group {"className":"yr-splits","layout":{"type":"default"}} -->
<div class="wp-block-group yr-splits"><!-- wp:group {"className":"yr-split","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_newsletter_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_newsletter_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-split","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_newsletter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_newsletter_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-split","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_newsletter_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_newsletter_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
