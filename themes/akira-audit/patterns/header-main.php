<?php
/**
 * Title: Header: logo block, menu, call button
 * Slug: akira-audit/header-main
 * Inserter: no
 * Categories: akira-audit
 * Keywords: audit, header, menu
 * Viewport Width: 1440
 * Description: White 80 px header: wordmark block with a right rule, the menu, the accent call button and the contact box.
 */
?>
<!-- wp:group {"align":"full","className":"aa-header","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
<div class="wp-block-group alignfull aa-header">
<!-- wp:group {"className":"aa-brand","layout":{"type":"default"}} -->
<div class="wp-block-group aa-brand">
<!-- wp:paragraph {"className":"aa-brand__name"} -->
<p class="aa-brand__name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-brand__sub"} -->
<p class="aa-brand__sub"><?php echo esc_html( akira_audit_t( 'brand_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"aa-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"aa-cta"} -->
<div class="wp-block-buttons aa-cta">
<!-- wp:button {"className":"aa-cta__btn"} -->
<div class="wp-block-button aa-cta__btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'cta' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"aa-mail"} -->
<div class="wp-block-buttons aa-mail">
<!-- wp:button {"className":"aa-mail__btn"} -->
<div class="wp-block-button aa-mail__btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'mail_label' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
