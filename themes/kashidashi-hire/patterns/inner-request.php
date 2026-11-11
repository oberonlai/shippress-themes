<?php
/**
 * Title: Inner: request
 * Slug: kashidashi-hire/inner-request
 * Categories: kashidashi-hire
 * Inserter: no
 * Description: Request page head, what to send, hours, and the request form slot with its mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kh-hero kh-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-hero kh-ihead"><!-- wp:group {"className":"kh-wedge kh-wedge--i","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wedge kh-wedge--i"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__stage kh-ihead__stage","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__stage kh-ihead__stage"><!-- wp:group {"className":"kh-hero__photo kh-ihead__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__photo kh-ihead__photo sp-parallax"><!-- wp:group {"className":"kh-hero__stack sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__stack sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kh-ihead__img"} -->
<figure class="wp-block-image size-full kh-ihead__img"><img src="<?php echo kashidashi_hire_img( 'p01-handover' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__shade"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__copy kh-ihead__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__copy kh-ihead__copy"><!-- wp:paragraph {"className":"kh-hero__kicker"} -->
<p class="kh-hero__kicker"><?php echo esc_html( kashidashi_hire_t( 'ih_req_kick' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kh-hero__title kh-ihead__title"} -->
<h1 class="wp-block-heading kh-hero__title kh-ihead__title"><span class="kh-strip"><?php echo esc_html( kashidashi_hire_t( 'ih_req_h1' ) ); ?></span></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-dock kh-dock--one","layout":{"type":"default"}} -->
<div class="wp-block-group kh-dock kh-dock--one"><!-- wp:group {"className":"kh-dock__b","layout":{"type":"default"}} -->
<div class="wp-block-group kh-dock__b"><!-- wp:paragraph {"className":"kh-dock__next"} -->
<p class="kh-dock__next"><span><?php echo esc_html( kashidashi_hire_t( 'dk_next' ) ); ?></span> <strong><?php echo esc_html( kashidashi_hire_t( 'dk_date' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-dock__req"} -->
<p class="kh-dock__req"><a href="/request/"><?php echo esc_html( kashidashi_hire_t( 'dk_req' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-ilead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-ilead"><!-- wp:group {"className":"kh-ilead__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ilead__in"><!-- wp:paragraph {"className":"kh-lead kh-lead--big sp-reveal sp-reveal--up"} -->
<p class="kh-lead kh-lead--big sp-reveal sp-reveal--up"><?php echo esc_html( kashidashi_hire_t( 'i_request_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"send","align":"full","className":"kh-sec kh-req","layout":{"type":"default"}} -->
<section id="send" class="wp-block-group alignfull kh-sec kh-req"><!-- wp:group {"className":"kh-req__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kh-req__grid"><!-- wp:group {"className":"kh-req__l","layout":{"type":"default"}} -->
<div class="wp-block-group kh-req__l"><!-- wp:group {"className":"kh-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"kh-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__l"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-isec__t"} -->
<h2 class="wp-block-heading kh-isec__t"><?php echo esc_html( kashidashi_hire_t( 'i_request_h1' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__r"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_request_b1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-checks","layout":{"type":"default"}} -->
<div class="wp-block-group kh-checks"><!-- wp:paragraph {"className":"kh-check"} -->
<p class="kh-check"><?php echo esc_html( kashidashi_hire_t( 'rq_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-check"} -->
<p class="kh-check"><?php echo esc_html( kashidashi_hire_t( 'rq_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-check"} -->
<p class="kh-check"><?php echo esc_html( kashidashi_hire_t( 'rq_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-check"} -->
<p class="kh-check"><?php echo esc_html( kashidashi_hire_t( 'rq_l4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"kh-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__l"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-isec__t"} -->
<h2 class="wp-block-heading kh-isec__t"><?php echo esc_html( kashidashi_hire_t( 'i_request_h2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__r"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_request_b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-req__r","layout":{"type":"default"}} -->
<div class="wp-block-group kh-req__r"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kashidashi_hire_t( 'rq_form' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kashidashi-hire/contact-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-ibody","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-ibody"><!-- wp:group {"className":"kh-ibody__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ibody__in"><!-- wp:group {"className":"kh-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"kh-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__l"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-isec__t"} -->
<h2 class="wp-block-heading kh-isec__t"><?php echo esc_html( kashidashi_hire_t( 'i_request_h3' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__r"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_request_b3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
