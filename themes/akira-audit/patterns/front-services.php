<?php
/**
 * Title: Home: services band
 * Slug: akira-audit/front-services
 * Categories: akira-audit
 * Keywords: audit, services
 * Viewport Width: 1440
 * Description: Ink band: eyebrow and heading at the left, a statement and paragraph at the right, then three photograph cards with a scrim and a boxed arrow.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"aa-sec aa-sec--band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull aa-sec aa-sec--band">
<!-- wp:group {"className":"aa-band__head","layout":{"type":"default"}} -->
<div class="wp-block-group aa-band__head">
<!-- wp:group {"className":"aa-band__left","layout":{"type":"default"}} -->
<div class="wp-block-group aa-band__left">
<!-- wp:paragraph {"className":"aa-eyebrow aa-eyebrow--light"} -->
<p class="aa-eyebrow aa-eyebrow--light"><?php echo esc_html( akira_audit_t( 'svc_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"aa-h2 aa-h2--light"} -->
<h2 class="wp-block-heading aa-h2 aa-h2--light"><?php echo esc_html( akira_audit_t( 'svc_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-band__right","layout":{"type":"default"}} -->
<div class="wp-block-group aa-band__right">
<!-- wp:paragraph {"className":"aa-statement"} -->
<p class="aa-statement"><?php echo esc_html( akira_audit_t( 'svc_statement' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-band__p"} -->
<p class="aa-band__p"><?php echo esc_html( akira_audit_t( 'svc_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group aa-cards sp-stagger">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h07-service-company.webp' ) ); ?>","dimRatio":0,"isDark":false,"className":"aa-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light aa-card sp-reveal sp-reveal--up"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( akira_audit_t( 'alt_h07' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h07-service-company.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"aa-card__title"} -->
<p class="aa-card__title"><a href="<?php echo esc_url( home_url( '/company-audit/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'svc_t1' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h08-service-charity.webp' ) ); ?>","dimRatio":0,"isDark":false,"className":"aa-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light aa-card sp-reveal sp-reveal--up"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( akira_audit_t( 'alt_h08' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h08-service-charity.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"aa-card__title"} -->
<p class="aa-card__title"><a href="<?php echo esc_url( home_url( '/charity-audit/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'svc_t2' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h09-service-grant.webp' ) ); ?>","dimRatio":0,"isDark":false,"className":"aa-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light aa-card sp-reveal sp-reveal--up"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( akira_audit_t( 'alt_h09' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h09-service-grant.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"aa-card__title"} -->
<p class="aa-card__title"><a href="<?php echo esc_url( home_url( '/grant-assurance/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'svc_t3' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
