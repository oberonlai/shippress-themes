<?php
/**
 * Title: Home: the problem, single column with one wide photograph
 * Slug: hodoki-clinic/front-problem
 * Categories: hodoki-clinic
 * Keywords: home
 * Viewport Width: 1440
 * Description: A narrow text column with run-in labels and one full-width 16:9 photograph after the first paragraph.
 */
$hd = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"hd-sec hd-problem","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-sec hd-problem"><!-- wp:group {"className":"hd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hd-wrap"><!-- wp:group {"className":"hd-prob__col","layout":{"type":"default"}} -->
<div class="wp-block-group hd-prob__col"><!-- wp:group {"className":"hd-prob__lab","layout":{"type":"default"}} -->
<div class="wp-block-group hd-prob__lab"><!-- wp:paragraph {"className":"hd-label"} -->
<p class="hd-label"><?php echo wp_kses_post( hodoki_clinic_t( 'k1dfbdf54' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"hd-h2"} -->
<h2 class="wp-block-heading hd-h2"><?php echo wp_kses_post( hodoki_clinic_t( 'k0cf95c4a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hd-body hd-prob__p"} -->
<p class="hd-body hd-prob__p"><span class="hd-runin"><?php echo wp_kses_post( hodoki_clinic_t( 'kfe529303' ) ); ?></span> <?php echo wp_kses_post( hodoki_clinic_t( 'ka3368116' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hd-prob__fig","layout":{"type":"default"}} -->
<div class="wp-block-group hd-prob__fig"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hd-wipe-x sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hd-wipe-x sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( $hd . 'problem-desk-neck.webp' ); ?>" alt="<?php echo esc_attr( hodoki_clinic_t( 'a2a4428b9' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hd-body hd-prob__p"} -->
<p class="hd-body hd-prob__p"><span class="hd-runin"><?php echo wp_kses_post( hodoki_clinic_t( 'kf64e2e50' ) ); ?></span> <?php echo wp_kses_post( hodoki_clinic_t( 'k5e04d929' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-body hd-prob__p"} -->
<p class="hd-body hd-prob__p"><span class="hd-runin"><?php echo wp_kses_post( hodoki_clinic_t( 'kb9b1da6d' ) ); ?></span> <?php echo wp_kses_post( hodoki_clinic_t( 'kb13d0241' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
