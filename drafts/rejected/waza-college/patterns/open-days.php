<?php
/**
 * Title: Home: open days
 * Slug: waza-college/open-days
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Description: A dated list of open days with booking links, beside a photograph of an open day.
 */
?>
<!-- wp:group {"tagName":"section","className":"wz-od","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull wz-od"><!-- wp:group {"className":"wz-od__head","layout":{"type":"default"}} -->
<div class="wp-block-group wz-od__head"><!-- wp:paragraph {"className":"wz-eyebrow"} -->
<p class="wz-eyebrow"><?php echo esc_html( waza_college_t( 'od_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"wz-sec__title"} -->
<h2 class="wp-block-heading wz-sec__title"><?php echo esc_html( waza_college_t( 'od_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"wz-od__img"} -->
<figure class="wp-block-image size-full wz-od__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/openday.webp' ) ); ?>" alt="<?php echo esc_attr( waza_college_t( 'alt_openday' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<ul class="wz-od__list" id="open-days"><li><time class="wz-od__d"><?php echo esc_html( waza_college_t( 'od1_d' ) ); ?></time><span class="wz-od__t"><?php echo esc_html( waza_college_t( 'od1_t' ) ); ?></span><span class="wz-od__m"><?php echo esc_html( waza_college_t( 'od1_m' ) ); ?></span><a class="wz-od__a" href="/apply/"><?php echo esc_html( waza_college_t( 'od_book' ) ); ?> <span aria-hidden="true">&rarr;</span></a></li><li><time class="wz-od__d"><?php echo esc_html( waza_college_t( 'od2_d' ) ); ?></time><span class="wz-od__t"><?php echo esc_html( waza_college_t( 'od2_t' ) ); ?></span><span class="wz-od__m"><?php echo esc_html( waza_college_t( 'od2_m' ) ); ?></span><a class="wz-od__a" href="/apply/"><?php echo esc_html( waza_college_t( 'od_book' ) ); ?> <span aria-hidden="true">&rarr;</span></a></li><li><time class="wz-od__d"><?php echo esc_html( waza_college_t( 'od3_d' ) ); ?></time><span class="wz-od__t"><?php echo esc_html( waza_college_t( 'od3_t' ) ); ?></span><span class="wz-od__m"><?php echo esc_html( waza_college_t( 'od3_m' ) ); ?></span><a class="wz-od__a" href="/apply/"><?php echo esc_html( waza_college_t( 'od_book' ) ); ?> <span aria-hidden="true">&rarr;</span></a></li><li><time class="wz-od__d"><?php echo esc_html( waza_college_t( 'od4_d' ) ); ?></time><span class="wz-od__t"><?php echo esc_html( waza_college_t( 'od4_t' ) ); ?></span><span class="wz-od__m"><?php echo esc_html( waza_college_t( 'od4_m' ) ); ?></span><a class="wz-od__a" href="/apply/"><?php echo esc_html( waza_college_t( 'od_book' ) ); ?> <span aria-hidden="true">&rarr;</span></a></li></ul>
<!-- /wp:html --></section>
<!-- /wp:group -->
