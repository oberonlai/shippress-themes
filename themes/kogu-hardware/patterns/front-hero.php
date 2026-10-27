<?php
/**
 * Title: Home: photo hero and info bar
 * Slug: kogu-hardware/front-hero
 * Categories: kogu-hardware
 * Inserter: yes
 * Viewport Width: 1440
 * Description: Full-height photograph with a kicker and headline bottom-left, then a ruled four-cell info bar.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h01-hinge-hero.webp' ) ); ?>","dimRatio":0,"focalPoint":{"x":0.62,"y":0.5},"isDark":true,"align":"full","className":"kh-hero sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light kh-hero sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( 'Hand lifting a brass hinge from a pegboard hook in soft raking window light.' ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h01-hinge-hero.webp' ) ); ?>" style="object-position:62% 50%" data-object-fit="cover" data-object-position="62% 50%"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"kh-hero__kicker"} -->
<p class="kh-hero__kicker"><?php echo wp_kses_post( kogu_hardware_t( 'kbc4d572b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kh-hero__title"} -->
<h1 class="wp-block-heading kh-hero__title"><?php echo wp_kses_post( kogu_hardware_t( 'kc944a189' ) ); ?></h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kh-info","layout":{"type":"default"}} -->
<div class="wp-block-group kh-info">
<!-- wp:group {"className":"kh-ib__c","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ib__c">
<!-- wp:paragraph {"className":"kh-ib__t"} -->
<p class="kh-ib__t"><span class="kh-dot" aria-hidden="true"></span><?php echo wp_kses_post( kogu_hardware_t( 'k41468343' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-ib__c","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ib__c">
<!-- wp:paragraph {"className":"kh-ib__t"} -->
<p class="kh-ib__t"><?php echo wp_kses_post( kogu_hardware_t( 'kd0c7c133' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-ib__c","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ib__c">
<!-- wp:paragraph {"className":"kh-ib__t"} -->
<p class="kh-ib__t"><?php echo wp_kses_post( kogu_hardware_t( 'k055e18e3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-ib__c","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ib__c">
<!-- wp:paragraph {"className":"kh-ib__t kh-ib__go"} -->
<p class="kh-ib__t kh-ib__go"><a href="#ask"><?php echo wp_kses_post( kogu_hardware_t( 'k8e3d6a0d' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
