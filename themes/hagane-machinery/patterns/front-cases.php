<?php
/**
 * Title: Home: delivered machines by industry
 * Slug: hagane-machinery/front-cases
 * Categories: hagane-machinery
 * Keywords: home, machinery
 * Viewport Width: 1440
 * Description: A heading with the industries in one line, then three customer cases with a photograph, the industry, a title and a line.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-fp hm-cases","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-fp hm-cases"><!-- wp:group {"className":"hm-fp__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-fp__in"><!-- wp:group {"className":"hm-fp__head","layout":{"type":"default"}} -->
<div class="wp-block-group hm-fp__head"><!-- wp:group {"className":"hm-fp__title","layout":{"type":"default"}} -->
<div class="wp-block-group hm-fp__title"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_01' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_02' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"hm-fp__lead hm-inds"} -->
<p class="hm-fp__lead hm-inds"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_03' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hm-cases__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hm-cases__grid"><!-- wp:group {"className":"hm-case","layout":{"type":"default"}} -->
<div class="wp-block-group hm-case"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-case__photo"} -->
<figure class="wp-block-image size-large hm-case__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/customer-line.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'front_cases_04' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"hm-case__ind"} -->
<p class="hm-case__ind"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_05' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"hm-case__title"} -->
<h3 class="wp-block-heading hm-case__title"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_06' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hm-case__text"} -->
<p class="hm-case__text"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_07' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hm-case","layout":{"type":"default"}} -->
<div class="wp-block-group hm-case"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-case__photo"} -->
<figure class="wp-block-image size-large hm-case__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/parts-tray.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'front_cases_08' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"hm-case__ind"} -->
<p class="hm-case__ind"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_09' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"hm-case__title"} -->
<h3 class="wp-block-heading hm-case__title"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_10' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hm-case__text"} -->
<p class="hm-case__text"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_11' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hm-case","layout":{"type":"default"}} -->
<div class="wp-block-group hm-case"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-case__photo"} -->
<figure class="wp-block-image size-large hm-case__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/inspection-room.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'front_cases_12' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"hm-case__ind"} -->
<p class="hm-case__ind"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_13' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"hm-case__title"} -->
<h3 class="wp-block-heading hm-case__title"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_14' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hm-case__text"} -->
<p class="hm-case__text"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_15' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/industries/"><?php echo wp_kses_post( hagane_machinery_t( 'front_cases_16' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
