<?php
/**
 * Title: Inner: faq
 * Slug: kashidashi-hire/inner-faq
 * Categories: kashidashi-hire
 * Inserter: no
 * Description: FAQ page head and twelve ruled questions in three tagged groups with a mist wedge on the right margin.
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
<figure class="wp-block-image size-full kh-ihead__img"><img src="<?php echo kashidashi_hire_img( 'p18-cleared-plot' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p18' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__shade"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__copy kh-ihead__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__copy kh-ihead__copy"><!-- wp:paragraph {"className":"kh-hero__kicker"} -->
<p class="kh-hero__kicker"><?php echo esc_html( kashidashi_hire_t( 'ih_faq_kick' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kh-hero__title kh-ihead__title"} -->
<h1 class="wp-block-heading kh-hero__title kh-ihead__title"><span class="kh-strip"><?php echo esc_html( kashidashi_hire_t( 'ih_faq_h1' ) ); ?></span></h1>
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
<p class="kh-lead kh-lead--big sp-reveal sp-reveal--up"><?php echo esc_html( kashidashi_hire_t( 'i_faq_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-faq kh-faq--i","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-faq kh-faq--i"><!-- wp:group {"className":"kh-wipe kh-wipe--faq sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wipe kh-wipe--faq sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"kh-wipe__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wipe__in"><!-- wp:group {"className":"kh-mist","layout":{"type":"default"}} -->
<div class="wp-block-group kh-mist"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-faq__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-faq__in"><!-- wp:group {"className":"kh-fgroup","layout":{"type":"default"}} -->
<div class="wp-block-group kh-fgroup"><!-- wp:paragraph {"className":"kh-tag"} -->
<p class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'fg_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-faq__list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kh-faq__list sp-stagger"><!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q1' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a1' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q2' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a2' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q3' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a3' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q4' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a4' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-fgroup","layout":{"type":"default"}} -->
<div class="wp-block-group kh-fgroup"><!-- wp:paragraph {"className":"kh-tag"} -->
<p class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'fg_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-faq__list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kh-faq__list sp-stagger"><!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q5' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a5' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q6' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a6' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q7' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a7' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q8' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a8' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-fgroup","layout":{"type":"default"}} -->
<div class="wp-block-group kh-fgroup"><!-- wp:paragraph {"className":"kh-tag"} -->
<p class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'fg_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-faq__list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kh-faq__list sp-stagger"><!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q9' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a9' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q10' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a10' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q11' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a11' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kh-q sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kh-q sp-reveal sp-reveal--up"><summary><?php echo esc_html( kashidashi_hire_t( 'i_faq_q12' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_faq_a12' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
