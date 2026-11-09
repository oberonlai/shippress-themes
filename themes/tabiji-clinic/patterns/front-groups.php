<?php
/**
 * Title: Home: groups band
 * Slug: tabiji-clinic/front-groups
 * Categories: tabiji-clinic
 * Keywords: clinic, travel, vaccination
 * Viewport Width: 1440
 * Description: Inset blurred-photo band with a centred title and an outline pill; the photo moves slowly (parallax).
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p13-corridor.webp' ) ); ?>","dimRatio":50,"overlayColor":"paper","className":"tc-groups alignwide sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover tc-groups alignwide sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-paper-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="Softly defocused clinic corridor illuminated by diffused daylight with faint human figures." src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13-corridor.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"tc-groups__in","layout":{"type":"default"}} -->
<div class="wp-block-group tc-groups__in"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tabiji_clinic_t( 'gp_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"tc-groups__h"} -->
<h2 class="wp-block-heading tc-groups__h"><?php echo esc_html( tabiji_clinic_t( 'gp_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"tc-groups__p"} -->
<p class="tc-groups__p"><?php echo esc_html( tabiji_clinic_t( 'gp_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"tc-groups__btn","layout":{"type":"flex"}} -->
<div class="wp-block-buttons tc-groups__btn"><!-- wp:button {"className":"is-style-outline tc-pill tc-pill--lg"} -->
<div class="wp-block-button is-style-outline tc-pill tc-pill--lg"><a class="wp-block-button__link wp-element-button" href="/groups/"><?php echo esc_html( tabiji_clinic_t( 'gp_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
