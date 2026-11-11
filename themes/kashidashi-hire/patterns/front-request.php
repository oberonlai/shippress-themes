<?php
/**
 * Title: Home: request band
 * Slug: kashidashi-hire/front-request
 * Categories: kashidashi-hire
 * Description: Diagonal two-tone band with one white card and the single request button.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"request","align":"full","className":"kh-reqband","layout":{"type":"default"}} -->
<section id="request" class="wp-block-group alignfull kh-reqband"><!-- wp:group {"className":"kh-reqcard","layout":{"type":"default"}} -->
<div class="wp-block-group kh-reqcard"><!-- wp:heading {"className":"kh-reqcard__title"} -->
<h2 class="wp-block-heading kh-reqcard__title"><?php echo esc_html( kashidashi_hire_t( 'rq_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'rq_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kh-reqcard__btn"} -->
<div class="wp-block-buttons kh-reqcard__btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/request/"><?php echo esc_html( kashidashi_hire_t( 'rq_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
