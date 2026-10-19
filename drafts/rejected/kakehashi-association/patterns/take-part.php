<?php
/**
 * Title: Home: take part
 * Slug: kakehashi-association/take-part
 * Categories: kakehashi-association
 * Keywords: community association, nonprofit, volunteers
 * Viewport Width: 1440
 * Description: Three plain rows (join, volunteer, donate) with one sentence and a link each, on a full nadeshiko-pink field; a cut-out pair of clasped hands breaks over the field's top edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"kh-take","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-take">
<!-- wp:html -->
<img class="kh-take__obj" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( kakehashi_association_t( 'alt_hands' ) ); ?>" loading="lazy"/>
<!-- /wp:html -->

<!-- wp:group {"className":"kh-sec__head","layout":{"type":"default"}} -->
<div class="wp-block-group kh-sec__head"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kakehashi_association_t( 'tp_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-sec__title"} -->
<h2 class="wp-block-heading kh-sec__title"><?php echo esc_html( kakehashi_association_t( 'tp_title' ) ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:html -->
<ol class="kh-take__list"><li class="kh-take__row"><h3 class="kh-take__t"><?php echo esc_html( kakehashi_association_t( 'tp1_t' ) ); ?></h3><p class="kh-take__p"><?php echo esc_html( kakehashi_association_t( 'tp1_p' ) ); ?></p><a class="kh-take__l" href="/contact/"><?php echo esc_html( kakehashi_association_t( 'tp1_l' ) ); ?> <span aria-hidden="true">&rarr;</span></a></li><li class="kh-take__row"><h3 class="kh-take__t"><?php echo esc_html( kakehashi_association_t( 'tp2_t' ) ); ?></h3><p class="kh-take__p"><?php echo esc_html( kakehashi_association_t( 'tp2_p' ) ); ?></p><a class="kh-take__l" href="/contact/"><?php echo esc_html( kakehashi_association_t( 'tp2_l' ) ); ?> <span aria-hidden="true">&rarr;</span></a></li><li class="kh-take__row"><h3 class="kh-take__t"><?php echo esc_html( kakehashi_association_t( 'tp3_t' ) ); ?></h3><p class="kh-take__p"><?php echo esc_html( kakehashi_association_t( 'tp3_p' ) ); ?></p><a class="kh-take__l" href="/contact/"><?php echo esc_html( kakehashi_association_t( 'tp3_l' ) ); ?> <span aria-hidden="true">&rarr;</span></a></li></ol>
<!-- /wp:html --></section>
<!-- /wp:group -->
