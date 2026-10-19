<?php
/**
 * Title: Home: interview
 * Slug: asahi-gakuen/interview
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Description: One long interview excerpt in a 640px column beside one cut-out portrait that breaks over the edge of its colour block.
 */
?>
<!-- wp:group {"tagName":"section","className":"ag-iv","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-iv">
<!-- wp:html -->
<figure class="ag-iv__fig"><span class="ag-iv__block" aria-hidden="true"></span><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teacher-a-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( asahi_gakuen_t( 'alt_teacher_a' ) ); ?>" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:group {"className":"ag-iv__body","layout":{"type":"default"}} -->
<div class="wp-block-group ag-iv__body"><!-- wp:paragraph {"className":"ag-label"} -->
<p class="ag-label"><?php echo esc_html( asahi_gakuen_t( 'iv_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ag-iv__title"} -->
<h2 class="wp-block-heading ag-iv__title"><?php echo esc_html( asahi_gakuen_t( 'iv_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ag-iv__who"} -->
<p class="ag-iv__who"><?php echo esc_html( asahi_gakuen_t( 'iv_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ag-iv__p"} -->
<p class="ag-iv__p"><?php echo esc_html( asahi_gakuen_t( 'iv_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ag-iv__p"} -->
<p class="ag-iv__p"><?php echo esc_html( asahi_gakuen_t( 'iv_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ag-iv__p"} -->
<p class="ag-iv__p"><?php echo esc_html( asahi_gakuen_t( 'iv_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="ag-iv__more"><a href="/about/"><?php echo esc_html( asahi_gakuen_t( 'iv_more' ) ); ?> <span aria-hidden="true">&rarr;</span></a></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
