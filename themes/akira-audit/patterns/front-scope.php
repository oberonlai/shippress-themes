<?php
/**
 * Title: Home: scope circle
 * Slug: akira-audit/front-scope
 * Categories: akira-audit
 * Keywords: audit, scope, services
 * Viewport Width: 1440
 * Description: White card on the grid ground: a circular photograph with a tick ring and cross-hair, a lead and three link rows with boxed arrows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"aa-sec aa-sec--stone aa-sec--scope","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull aa-sec aa-sec--stone aa-sec--scope">
<!-- wp:group {"className":"aa-scope","layout":{"type":"default"}} -->
<div class="wp-block-group aa-scope">
<!-- wp:group {"className":"aa-scope__circle sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group aa-scope__circle sp-reveal sp-reveal--zoom">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h02-scope-count-sheet.webp' ) ); ?>" alt="<?php echo esc_attr( akira_audit_t( 'alt_h02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<?php echo akira_audit_scope_svg(); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-scope__text","layout":{"type":"default"}} -->
<div class="wp-block-group aa-scope__text">
<!-- wp:paragraph {"className":"aa-eyebrow"} -->
<p class="aa-eyebrow"><?php echo esc_html( akira_audit_t( 'scope_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"aa-h2"} -->
<h2 class="wp-block-heading aa-h2"><?php echo esc_html( akira_audit_t( 'scope_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"aa-lead"} -->
<p class="aa-lead"><?php echo esc_html( akira_audit_t( 'scope_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"aa-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group aa-rows sp-stagger">
<!-- wp:group {"className":"aa-row sp-reveal sp-reveal--up","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group aa-row sp-reveal sp-reveal--up">
<!-- wp:group {"className":"aa-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group aa-row__text">
<!-- wp:paragraph {"className":"aa-row__eyebrow"} -->
<p class="aa-row__eyebrow"><?php echo esc_html( akira_audit_t( 'scope_e1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-row__title"} -->
<p class="aa-row__title"><a href="<?php echo esc_url( home_url( '/company-audit/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'scope_t1' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-row sp-reveal sp-reveal--up","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group aa-row sp-reveal sp-reveal--up">
<!-- wp:group {"className":"aa-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group aa-row__text">
<!-- wp:paragraph {"className":"aa-row__eyebrow"} -->
<p class="aa-row__eyebrow"><?php echo esc_html( akira_audit_t( 'scope_e2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-row__title"} -->
<p class="aa-row__title"><a href="<?php echo esc_url( home_url( '/charity-audit/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'scope_t2' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-row sp-reveal sp-reveal--up","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group aa-row sp-reveal sp-reveal--up">
<!-- wp:group {"className":"aa-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group aa-row__text">
<!-- wp:paragraph {"className":"aa-row__eyebrow"} -->
<p class="aa-row__eyebrow"><?php echo esc_html( akira_audit_t( 'scope_e3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-row__title"} -->
<p class="aa-row__title"><a href="<?php echo esc_url( home_url( '/grant-assurance/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'scope_t3' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
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
