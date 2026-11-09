<?php
/**
 * Title: Home: request a proposal
 * Slug: kataribe-partners/front-request
 * Categories: kataribe-partners
 * Keywords: public relations, agency
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph with a white docked card overlapping its top edge and the one navy call to action.
 */
$e = 'kataribe_partners_e';
$a = 'kataribe_partners_a';
$i = 'kataribe_partners_img';
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"request","className":"kp-request","layout":{"type":"default"}} -->
<section id="request" class="wp-block-group alignfull kp-request"><!-- wp:group {"className":"kp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kp-wrap"><!-- wp:group {"className":"kp-reqcard","layout":{"type":"default"}} -->
<div class="wp-block-group kp-reqcard"><!-- wp:heading {"className":"kp-reqcard__title"} -->
<h2 class="wp-block-heading kp-reqcard__title"><?php echo esc_html( kataribe_partners_t( 'rq_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"kp-reqcard__list"} -->
<ul class="wp-block-list kp-reqcard__list"><!-- wp:list-item -->
<li><?php echo esc_html( kataribe_partners_t( 'rq_1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( kataribe_partners_t( 'rq_2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( kataribe_partners_t( 'rq_3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kp-solid"} -->
<div class="wp-block-button kp-solid"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( kataribe_partners_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo $i( 'h13-meeting-room.webp' ); ?>","alt":"<?php echo esc_attr( kataribe_partners_t( 'alt_request' ) ); ?>","dimRatio":0,"isDark":false,"align":"full","className":"kp-request__band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light kp-request__band sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kataribe_partners_t( 'alt_request' ) ); ?>" src="<?php echo $i( 'h13-meeting-room.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->
