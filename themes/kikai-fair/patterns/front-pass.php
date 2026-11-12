<?php
/**
 * Title: Home: request a pass band
 * Slug: kikai-fair/front-pass
 * Categories: kikai-fair
 * Keywords: pass, cta
 * Viewport Width: 1440
 * Description: White band with the lattice corner, an ochre uppercase title, a short lead, the outline button and a 3:2 photo of a pass being scanned.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kf-value kf-lattice kf-pass","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-value kf-lattice kf-pass" id="pass"><!-- wp:group {"align":"wide","className":"kf-value__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-value__in"><!-- wp:group {"className":"kf-value__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__text sp-reveal sp-reveal--up"><!-- wp:heading {"className":"kf-pass__h"} -->
<h2 class="wp-block-heading kf-pass__h"><?php echo wp_kses_post( kikai_fair_t( 'k55f8b22f' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kikai_fair_t( 'k53fec46b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kf-btn-line"} -->
<div class="wp-block-buttons kf-btn-line"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/request-a-pass/"><?php echo wp_kses_post( kikai_fair_t( 'k55f8b22f' ) ); ?><svg class="kf-arrow" width="28" height="6" viewBox="0 0 28 6" aria-hidden="true" focusable="false"><path d="M0 3H27M23.5.5 27 3l-3.5 2.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kf-value__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__photo sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="kf-photo"><img src="<?php echo kikai_fair_img( 's01-pass-scan.webp' ); ?>" alt="<?php echo esc_attr( kikai_fair_t( 'a081d871b' ) ); ?>" width="1600" height="1067" loading="lazy"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
