<?php
/**
 * Title: Home: this month's events
 * Slug: kakehashi-association/events-month
 * Categories: kakehashi-association
 * Keywords: community association, nonprofit, volunteers
 * Viewport Width: 1440
 * Description: This month's events as a date list: a large day number, the title and the place, beside a sticky month heading.
 */
?>
<!-- wp:group {"tagName":"section","className":"kh-evm","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-evm">
<!-- wp:group {"className":"kh-evm__head","layout":{"type":"default"}} -->
<div class="wp-block-group kh-evm__head"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kakehashi_association_t( 'ev_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-sec__title"} -->
<h2 class="wp-block-heading kh-sec__title"><?php echo esc_html( kakehashi_association_t( 'ev_title' ) ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:html -->
<ol class="kh-evm__list"><li class="kh-evm__row"><span class="kh-evm__day"><?php echo esc_html( kakehashi_association_t( 'ev1_d' ) ); ?><small><?php echo esc_html( kakehashi_association_t( 'ev1_w' ) ); ?></small></span><strong class="kh-evm__t"><?php echo esc_html( kakehashi_association_t( 'ev1_t' ) ); ?></strong><span class="kh-evm__p"><?php echo esc_html( kakehashi_association_t( 'ev1_p' ) ); ?></span></li><li class="kh-evm__row"><span class="kh-evm__day"><?php echo esc_html( kakehashi_association_t( 'ev2_d' ) ); ?><small><?php echo esc_html( kakehashi_association_t( 'ev2_w' ) ); ?></small></span><strong class="kh-evm__t"><?php echo esc_html( kakehashi_association_t( 'ev2_t' ) ); ?></strong><span class="kh-evm__p"><?php echo esc_html( kakehashi_association_t( 'ev2_p' ) ); ?></span></li><li class="kh-evm__row"><span class="kh-evm__day"><?php echo esc_html( kakehashi_association_t( 'ev3_d' ) ); ?><small><?php echo esc_html( kakehashi_association_t( 'ev3_w' ) ); ?></small></span><strong class="kh-evm__t"><?php echo esc_html( kakehashi_association_t( 'ev3_t' ) ); ?></strong><span class="kh-evm__p"><?php echo esc_html( kakehashi_association_t( 'ev3_p' ) ); ?></span></li><li class="kh-evm__row"><span class="kh-evm__day"><?php echo esc_html( kakehashi_association_t( 'ev4_d' ) ); ?><small><?php echo esc_html( kakehashi_association_t( 'ev4_w' ) ); ?></small></span><strong class="kh-evm__t"><?php echo esc_html( kakehashi_association_t( 'ev4_t' ) ); ?></strong><span class="kh-evm__p"><?php echo esc_html( kakehashi_association_t( 'ev4_p' ) ); ?></span></li><li class="kh-evm__row"><span class="kh-evm__day"><?php echo esc_html( kakehashi_association_t( 'ev5_d' ) ); ?><small><?php echo esc_html( kakehashi_association_t( 'ev5_w' ) ); ?></small></span><strong class="kh-evm__t"><?php echo esc_html( kakehashi_association_t( 'ev5_t' ) ); ?></strong><span class="kh-evm__p"><?php echo esc_html( kakehashi_association_t( 'ev5_p' ) ); ?></span></li></ol>
<!-- /wp:html --></section>
<!-- /wp:group -->
