<?php
/**
 * Title: Home: the school year
 * Slug: asahi-gakuen/school-year
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Description: Six key moments of the school year as a compact month and event list beside a classroom photograph.
 */
?>
<!-- wp:group {"tagName":"section","className":"ag-sy","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-sy">
<!-- wp:group {"className":"ag-sy__side","layout":{"type":"default"}} -->
<div class="wp-block-group ag-sy__side"><!-- wp:paragraph {"className":"ag-label"} -->
<p class="ag-label"><?php echo esc_html( asahi_gakuen_t( 'sy_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ag-sec__title"} -->
<h2 class="wp-block-heading ag-sec__title"><?php echo esc_html( asahi_gakuen_t( 'sy_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<img class="ag-sy__ph" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/classroom.webp' ) ); ?>" alt="<?php echo esc_attr( asahi_gakuen_t( 'alt_classroom' ) ); ?>" loading="lazy"/>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<ol class="ag-sy__list"><li class="ag-sy__i"><span class="ag-sy__m"><?php echo esc_html( asahi_gakuen_t( 'sy1_m' ) ); ?></span><span class="ag-sy__t"><?php echo esc_html( asahi_gakuen_t( 'sy1_t' ) ); ?></span></li><li class="ag-sy__i"><span class="ag-sy__m"><?php echo esc_html( asahi_gakuen_t( 'sy2_m' ) ); ?></span><span class="ag-sy__t"><?php echo esc_html( asahi_gakuen_t( 'sy2_t' ) ); ?></span></li><li class="ag-sy__i"><span class="ag-sy__m"><?php echo esc_html( asahi_gakuen_t( 'sy3_m' ) ); ?></span><span class="ag-sy__t"><?php echo esc_html( asahi_gakuen_t( 'sy3_t' ) ); ?></span></li><li class="ag-sy__i"><span class="ag-sy__m"><?php echo esc_html( asahi_gakuen_t( 'sy4_m' ) ); ?></span><span class="ag-sy__t"><?php echo esc_html( asahi_gakuen_t( 'sy4_t' ) ); ?></span></li><li class="ag-sy__i"><span class="ag-sy__m"><?php echo esc_html( asahi_gakuen_t( 'sy5_m' ) ); ?></span><span class="ag-sy__t"><?php echo esc_html( asahi_gakuen_t( 'sy5_t' ) ); ?></span></li><li class="ag-sy__i"><span class="ag-sy__m"><?php echo esc_html( asahi_gakuen_t( 'sy6_m' ) ); ?></span><span class="ag-sy__t"><?php echo esc_html( asahi_gakuen_t( 'sy6_t' ) ); ?></span></li></ol>
<!-- /wp:html --></section>
<!-- /wp:group -->
