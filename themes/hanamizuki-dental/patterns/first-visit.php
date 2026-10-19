<?php
/**
 * Title: Home: first visit
 * Slug: hanamizuki-dental/first-visit
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Description: Four first-visit steps (form, X-ray, plan, treat) on a hairline row, with a what-to-bring list beside a treatment room photograph.
 */
?>
<!-- wp:group {"tagName":"section","className":"hd-fv","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-fv">
<!-- wp:group {"className":"hd-sec__head","layout":{"type":"default"}} -->
<div class="wp-block-group hd-sec__head"><!-- wp:paragraph {"className":"hd-label"} -->
<p class="hd-label"><?php echo esc_html( hanamizuki_dental_t( 'fv_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hd-sec__title"} -->
<h2 class="wp-block-heading hd-sec__title"><?php echo esc_html( hanamizuki_dental_t( 'fv_title' ) ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:html -->
<ol class="hd-fv__steps"><li class="hd-fv__s"><span class="hd-fv__k">1</span><h3 class="hd-fv__t"><?php echo esc_html( hanamizuki_dental_t( 'fv1_t' ) ); ?></h3><p><?php echo esc_html( hanamizuki_dental_t( 'fv1_d' ) ); ?></p></li><li class="hd-fv__s"><span class="hd-fv__k">2</span><h3 class="hd-fv__t"><?php echo esc_html( hanamizuki_dental_t( 'fv2_t' ) ); ?></h3><p><?php echo esc_html( hanamizuki_dental_t( 'fv2_d' ) ); ?></p></li><li class="hd-fv__s"><span class="hd-fv__k">3</span><h3 class="hd-fv__t"><?php echo esc_html( hanamizuki_dental_t( 'fv3_t' ) ); ?></h3><p><?php echo esc_html( hanamizuki_dental_t( 'fv3_d' ) ); ?></p></li><li class="hd-fv__s"><span class="hd-fv__k">4</span><h3 class="hd-fv__t"><?php echo esc_html( hanamizuki_dental_t( 'fv4_t' ) ); ?></h3><p><?php echo esc_html( hanamizuki_dental_t( 'fv4_d' ) ); ?></p></li></ol><div class="hd-fv__bring"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/treatment.webp' ) ); ?>" alt="<?php echo esc_attr( hanamizuki_dental_t( 'alt_treatment' ) ); ?>" loading="lazy"/><div><p class="hd-fv__bl"><?php echo esc_html( hanamizuki_dental_t( 'fv_bring' ) ); ?></p><ul><li><?php echo esc_html( hanamizuki_dental_t( 'fv_b1' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'fv_b2' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'fv_b3' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'fv_b4' ) ); ?></li></ul></div></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
