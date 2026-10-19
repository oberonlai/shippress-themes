<?php
/**
 * Title: Home: type poster first screen
 * Slug: asahi-gakuen/hero-type-poster
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Description: First screen: pure typography on a full-bleed pale forget-me-not field: a giant three-line school motto, a hairline, three facts on the left and the admissions note with one link on the right. No image.
 */
?>
<!-- wp:group {"tagName":"section","className":"ag-hp","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-hp">
<!-- wp:heading {"level":1,"className":"ag-hp__motto"} -->
<h1 class="wp-block-heading ag-hp__motto"><?php echo esc_html( asahi_gakuen_t( 'hp_motto' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<div class="ag-hp__row"><ul class="ag-hp__facts"><li><?php echo esc_html( asahi_gakuen_t( 'hp_f1' ) ); ?></li><li><?php echo esc_html( asahi_gakuen_t( 'hp_f2' ) ); ?></li><li><?php echo esc_html( asahi_gakuen_t( 'hp_f3' ) ); ?></li></ul><p class="ag-hp__adm"><?php echo esc_html( asahi_gakuen_t( 'hp_adm' ) ); ?> <a href="#admissions"><?php echo esc_html( asahi_gakuen_t( 'hp_adm_l' ) ); ?> <span aria-hidden="true">&rarr;</span></a></p></div>
<!-- /wp:html -->
</section>
<!-- /wp:group -->
