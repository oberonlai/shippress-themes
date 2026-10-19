<?php
/**
 * Title: Home: insurance and fees
 * Slug: hanamizuki-dental/insurance-fees
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Description: Accepted insurance plans on a jade panel beside a ruled fee table with before- and with-insurance prices.
 */
?>
<!-- wp:group {"tagName":"section","className":"hd-if","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-if">
<!-- wp:group {"className":"hd-if__intro","layout":{"type":"default"}} -->
<div class="wp-block-group hd-if__intro"><!-- wp:paragraph {"className":"hd-label"} -->
<p class="hd-label"><?php echo esc_html( hanamizuki_dental_t( 'if_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hd-sec__title"} -->
<h2 class="wp-block-heading hd-sec__title"><?php echo esc_html( hanamizuki_dental_t( 'if_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hd-if__lead"} -->
<p class="hd-if__lead"><?php echo esc_html( hanamizuki_dental_t( 'if_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="hd-if__ins"><p class="hd-if__il"><?php echo esc_html( hanamizuki_dental_t( 'if_ins' ) ); ?></p><ul><li><?php echo esc_html( hanamizuki_dental_t( 'if1' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'if2' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'if3' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'if4' ) ); ?></li></ul></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hd-if__fees"><table class="hd-if__t"><thead><tr><th scope="col"><?php echo esc_html( hanamizuki_dental_t( 'if_h1' ) ); ?></th><th scope="col"><?php echo esc_html( hanamizuki_dental_t( 'if_h2' ) ); ?></th><th scope="col"><?php echo esc_html( hanamizuki_dental_t( 'if_h3' ) ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html( hanamizuki_dental_t( 'if_r1' ) ); ?></th><td><?php echo esc_html( hanamizuki_dental_t( 'if_r1a' ) ); ?></td><td><?php echo esc_html( hanamizuki_dental_t( 'if_r1b' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hanamizuki_dental_t( 'if_r2' ) ); ?></th><td><?php echo esc_html( hanamizuki_dental_t( 'if_r2a' ) ); ?></td><td><?php echo esc_html( hanamizuki_dental_t( 'if_r2b' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hanamizuki_dental_t( 'if_r3' ) ); ?></th><td><?php echo esc_html( hanamizuki_dental_t( 'if_r3a' ) ); ?></td><td><?php echo esc_html( hanamizuki_dental_t( 'if_r3b' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hanamizuki_dental_t( 'if_r4' ) ); ?></th><td><?php echo esc_html( hanamizuki_dental_t( 'if_r4a' ) ); ?></td><td><?php echo esc_html( hanamizuki_dental_t( 'if_r4b' ) ); ?></td></tr></tbody></table><p class="hd-if__note"><?php echo esc_html( hanamizuki_dental_t( 'if_note' ) ); ?></p></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
