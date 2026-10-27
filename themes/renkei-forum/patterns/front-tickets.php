<?php
/**
 * Title: Home: tickets and price table
 * Slug: renkei-forum/front-tickets
 * Categories: renkei-forum
 * Viewport Width: 1440
 * Description: Heading and button beside a photo, then the full-width price table.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"tickets","align":"full","className":"rf-sec rf-tick","layout":{"type":"default"}} -->
<section id="tickets" class="wp-block-group alignfull rf-sec rf-tick"><!-- wp:group {"className":"rf-tick__top","layout":{"type":"default"}} -->
<div class="wp-block-group rf-tick__top"><!-- wp:group {"className":"rf-tick__t","layout":{"type":"default"}} -->
<div class="wp-block-group rf-tick__t"><!-- wp:paragraph {"className":"rf-label"} -->
<p class="rf-label"><?php echo wp_kses_post( rf_t( 'kc1c694bd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rf-h2 sp-stagger"} -->
<h2 class="wp-block-heading rf-h2 sp-stagger"><span class="rf-line sp-reveal sp-reveal--wipe"><mark class="rf-bar"><?php echo wp_kses_post( rf_t( 'kc8f88984' ) ); ?></mark></span><span class="rf-line sp-reveal sp-reveal--wipe"><mark class="rf-bar"><?php echo wp_kses_post( rf_t( 'kcdfee2bc' ) ); ?></mark></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rf-body"} -->
<p class="rf-body"><?php echo wp_kses_post( rf_t( 'k8f76f4c9' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"rf-cta"} -->
<div class="wp-block-buttons rf-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/tickets/#request"><?php echo wp_kses_post( rf_t( 'kbb872b0f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rf-tick__img"} -->
<figure class="wp-block-image size-full rf-tick__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/registration-queue.webp' ) ); ?>" alt="<?php echo esc_attr( rf_t( 'Attendees wait in a short queue while a host checks names at registration.' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"rf-price"} -->
<figure class="wp-block-table rf-price"><table class="has-fixed-layout"><thead><tr><th><?php echo wp_kses_post( rf_t( 'kb9b57aae' ) ); ?></th><th><?php echo wp_kses_post( rf_t( 'kb3733659' ) ); ?></th><th><?php echo wp_kses_post( rf_t( 'k3601146c' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( rf_t( 'keceea513' ) ); ?></td><td><?php echo wp_kses_post( rf_t( 'keff3f1f0' ) ); ?></td><td>€0</td></tr><tr><td><?php echo wp_kses_post( rf_t( 'kc2e6af9c' ) ); ?></td><td><?php echo wp_kses_post( rf_t( 'k9fd07cec' ) ); ?></td><td>€290</td></tr><tr><td><?php echo wp_kses_post( rf_t( 'kbb466d31' ) ); ?></td><td><?php echo wp_kses_post( rf_t( 'k38bc25cc' ) ); ?></td><td>€180</td></tr><tr><td><?php echo wp_kses_post( rf_t( 'kadfe5979' ) ); ?></td><td><?php echo wp_kses_post( rf_t( 'k7742d01a' ) ); ?></td><td>€1,450</td></tr><tr><td><?php echo wp_kses_post( rf_t( 'k625eb270' ) ); ?></td><td><?php echo wp_kses_post( rf_t( 'kde4cc69c' ) ); ?></td><td>€240</td></tr><tr><td><?php echo wp_kses_post( rf_t( 'k8f24059e' ) ); ?></td><td><?php echo wp_kses_post( rf_t( 'kfbb4d0f2' ) ); ?></td><td>€60</td></tr></tbody></table></figure>
<!-- /wp:table --></section>
<!-- /wp:group -->
