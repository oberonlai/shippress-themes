<?php
/**
 * Title: Home: hero
 * Slug: akira-audit/front-hero
 * Categories: akira-audit
 * Keywords: audit, hero, stock count
 * Viewport Width: 1440
 * Description: Full-bleed stock-count photograph with a boxed verb in the headline, an outline watermark word cut by the white info bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"aa-herowrap","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull aa-herowrap">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h01-hero-stock-count.webp' ) ); ?>","dimRatio":0,"focalPoint":{"x":0.7,"y":0.45},"isDark":false,"align":"full","className":"aa-hero sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light aa-hero sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( akira_audit_t( 'alt_h01' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h01-hero-stock-count.webp' ) ); ?>" style="object-position:70% 45%" data-object-fit="cover" data-object-position="70% 45%"/><div class="wp-block-cover__inner-container">
<!-- wp:heading {"level":1,"className":"aa-hero__title"} -->
<h1 class="wp-block-heading aa-hero__title"><span class="aa-hero__line"><?php echo esc_html( akira_audit_t( 'hero_l1' ) ); ?></span> <span class="aa-hero__line"><span class="aa-boxed"><?php echo esc_html( akira_audit_t( 'hero_l2a' ) ); ?></span> <?php echo esc_html( akira_audit_t( 'hero_l2b' ) ); ?></span> <span class="aa-hero__line"><?php echo esc_html( akira_audit_t( 'hero_l3' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"aa-hero__mark"} -->
<p class="aa-hero__mark"><?php echo esc_html( akira_audit_t( 'hero_mark' ) ); ?></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"aa-info","layout":{"type":"default"}} -->
<div class="wp-block-group aa-info">
<!-- wp:group {"className":"aa-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group aa-info__cell">
<!-- wp:paragraph {"className":"aa-info__label"} -->
<p class="aa-info__label"><?php echo esc_html( akira_audit_t( 'info_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-info__value"} -->
<p class="aa-info__value"><?php echo esc_html( akira_audit_t( 'info_v1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group aa-info__cell">
<!-- wp:paragraph {"className":"aa-info__label"} -->
<p class="aa-info__label"><?php echo esc_html( akira_audit_t( 'info_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-info__value"} -->
<p class="aa-info__value"><?php echo esc_html( akira_audit_t( 'info_v2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group aa-info__cell">
<!-- wp:paragraph {"className":"aa-info__label"} -->
<p class="aa-info__label"><?php echo esc_html( akira_audit_t( 'info_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-info__value"} -->
<p class="aa-info__value"><?php echo esc_html( akira_audit_t( 'info_v3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-info__cell aa-info__cell--link","layout":{"type":"default"}} -->
<div class="wp-block-group aa-info__cell aa-info__cell--link">
<!-- wp:paragraph {"className":"aa-info__go"} -->
<p class="aa-info__go"><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'info_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
