<?php
/**
 * Title: Home: clinic info
 * Slug: hanamizuki-dental/clinic-info
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Description: Opening hours, access, parking and the phone number in three columns on the jade field.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"clinic","className":"hd-ci","align":"full","layout":{"type":"default"}} -->
<section id="clinic" class="wp-block-group alignfull hd-ci">
<!-- wp:group {"className":"hd-sec__head","layout":{"type":"default"}} -->
<div class="wp-block-group hd-sec__head"><!-- wp:paragraph {"className":"hd-label"} -->
<p class="hd-label"><?php echo esc_html( hanamizuki_dental_t( 'ci_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hd-sec__title"} -->
<h2 class="wp-block-heading hd-sec__title"><?php echo esc_html( hanamizuki_dental_t( 'ci_title' ) ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hd-ci__cols"><div class="hd-ci__col"><p class="hd-ci__l"><?php echo esc_html( hanamizuki_dental_t( 'ci_hours' ) ); ?></p><table class="hd-ci__t"><tbody><tr><th scope="row"><?php echo esc_html( hanamizuki_dental_t( 'ci_d1' ) ); ?></th><td><?php echo esc_html( hanamizuki_dental_t( 'ci_h1' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hanamizuki_dental_t( 'ci_d2' ) ); ?></th><td><?php echo esc_html( hanamizuki_dental_t( 'ci_h2' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hanamizuki_dental_t( 'ci_d3' ) ); ?></th><td><?php echo esc_html( hanamizuki_dental_t( 'ci_h3' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hanamizuki_dental_t( 'ci_d4' ) ); ?></th><td><?php echo esc_html( hanamizuki_dental_t( 'ci_h4' ) ); ?></td></tr></tbody></table></div><div class="hd-ci__col"><p class="hd-ci__l"><?php echo esc_html( hanamizuki_dental_t( 'ci_access' ) ); ?></p><ul class="hd-ci__a"><li><?php echo esc_html( hanamizuki_dental_t( 'ci_a1' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'ci_a2' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'ci_a3' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'ci_a4' ) ); ?></li></ul></div><div class="hd-ci__col hd-ci__col--call"><p class="hd-ci__l"><?php echo esc_html( hanamizuki_dental_t( 'ci_call' ) ); ?></p><p class="hd-ci__ph"><a href="tel:+10000000000"><?php echo esc_html( hanamizuki_dental_t( 'phone' ) ); ?></a></p><p class="hd-ci__pain"><?php echo esc_html( hanamizuki_dental_t( 'ci_pain' ) ); ?></p><a class="hd-bk__btn" href="/contact/"><?php echo esc_html( hanamizuki_dental_t( 'book' ) ); ?> <span aria-hidden="true">&rarr;</span></a></div></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
