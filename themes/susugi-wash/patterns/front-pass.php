<?php
/**
 * Title: Home: full-bleed parallax photo and the last hour
 * Slug: susugi-wash/front-pass
 * Categories: susugi-wash
 * Inserter: yes
 * Viewport Width: 1440
 * Description: Wide photograph that drifts with scroll (sp-parallax), then two columns: headline left, two paragraphs right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"last-hour","align":"full","className":"sw-passwrap","layout":{"type":"default"}} -->
<section id="last-hour" class="wp-block-group alignfull sw-passwrap">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/w1-pass-closing.webp' ) ); ?>","dimRatio":0,"minHeight":420,"minHeightUnit":"px","isDark":false,"align":"full","className":"sp-parallax sw-pass","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light sp-parallax sw-pass" style="min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( susugi_wash_t( 'a6a311255' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/w1-pass-closing.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"sw-sec sw-sec--pass","layout":{"type":"default"}} -->
<div class="wp-block-group sw-sec sw-sec--pass">
<!-- wp:group {"className":"sw-in","layout":{"type":"default"}} -->
<div class="wp-block-group sw-in">
<!-- wp:paragraph {"className":"sw-side"} -->
<p class="sw-side"><?php echo wp_kses_post( susugi_wash_t( 'k8cf655f7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sw-two","layout":{"type":"default"}} -->
<div class="wp-block-group sw-two">
<!-- wp:group {"className":"sw-two__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sw-two__l sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sw-no"} -->
<p class="sw-no"><?php echo wp_kses_post( susugi_wash_t( 'kc1680cc0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"sw-h2"} -->
<h2 class="wp-block-heading sw-h2"><?php echo wp_kses_post( susugi_wash_t( 'k028702bc' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-two__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sw-two__r sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sw-p"} -->
<p class="sw-p"><?php echo wp_kses_post( susugi_wash_t( 'kbe0ae9b7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-p"} -->
<p class="sw-p"><?php echo wp_kses_post( susugi_wash_t( 'k15023db5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
