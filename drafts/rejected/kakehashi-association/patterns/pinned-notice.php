<?php
/**
 * Title: Home: pinned notice
 * Slug: kakehashi-association/pinned-notice
 * Categories: kakehashi-association
 * Keywords: community association, nonprofit, volunteers
 * Viewport Width: 1440
 * Description: One important notice in a pale pink box: label, date, title, one sentence and an action.
 */
?>
<!-- wp:group {"tagName":"section","className":"kh-pin","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-pin">
<!-- wp:html -->
<div class="kh-pin__box"><p class="kh-pin__meta"><span class="kh-pin__l"><?php echo esc_html( kakehashi_association_t( 'pn_label' ) ); ?></span><span><?php echo esc_html( kakehashi_association_t( 'pn_d' ) ); ?></span></p><h2 class="kh-pin__t"><?php echo esc_html( kakehashi_association_t( 'pn_t' ) ); ?></h2><p class="kh-pin__p"><?php echo esc_html( kakehashi_association_t( 'pn_p' ) ); ?></p><a class="kh-pin__btn" href="/contact/"><?php echo esc_html( kakehashi_association_t( 'pn_btn' ) ); ?> <span aria-hidden="true">&rarr;</span></a></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
