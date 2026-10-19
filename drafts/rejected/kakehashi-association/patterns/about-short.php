<?php
/**
 * Title: Home: about, short
 * Slug: kakehashi-association/about-short
 * Categories: kakehashi-association
 * Keywords: community association, nonprofit, volunteers
 * Viewport Width: 1440
 * Description: Purpose, founding year and board in a few lines beside a photo collage of three overlapping photographs pinned with the paper-cut bridge.
 */
?>
<!-- wp:group {"tagName":"section","className":"kh-abs","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-abs">
<!-- wp:html -->
<div class="kh-abs__collage"><img class="kh-abs__a" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.webp' ) ); ?>" alt="<?php echo esc_attr( kakehashi_association_t( 'alt_meeting' ) ); ?>" loading="lazy"/><img class="kh-abs__b" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/volunteers.webp' ) ); ?>" alt="<?php echo esc_attr( kakehashi_association_t( 'alt_volunteers' ) ); ?>" loading="lazy"/><img class="kh-abs__c" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/walk.webp' ) ); ?>" alt="<?php echo esc_attr( kakehashi_association_t( 'alt_walk' ) ); ?>" loading="lazy"/><img class="kh-abs__m" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bridge-cutout.webp' ) ); ?>" alt="" loading="lazy"/></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kh-abs__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-abs__text"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kakehashi_association_t( 'ab_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-sec__title"} -->
<h2 class="wp-block-heading kh-sec__title"><?php echo esc_html( kakehashi_association_t( 'ab_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-abs__p"} -->
<p class="kh-abs__p"><?php echo esc_html( kakehashi_association_t( 'ab_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="kh-abs__facts"><div class="kh-abs__f"><dt><?php echo esc_html( kakehashi_association_t( 'ab_f1_l' ) ); ?></dt><dd><?php echo esc_html( kakehashi_association_t( 'ab_f1_n' ) ); ?></dd></div><div class="kh-abs__f"><dt><?php echo esc_html( kakehashi_association_t( 'ab_f2_l' ) ); ?></dt><dd><?php echo esc_html( kakehashi_association_t( 'ab_f2_n' ) ); ?></dd></div><div class="kh-abs__f"><dt><?php echo esc_html( kakehashi_association_t( 'ab_f3_l' ) ); ?></dt><dd><?php echo esc_html( kakehashi_association_t( 'ab_f3_n' ) ); ?></dd></div></dl>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kh-abs__more"} -->
<p class="kh-abs__more"><a href="/about/"><?php echo esc_html( kakehashi_association_t( 'ab_link' ) ); ?> <span aria-hidden="true">&rarr;</span></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
