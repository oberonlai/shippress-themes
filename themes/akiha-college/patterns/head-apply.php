<?php
/**
 * Title: Header: apply button
 * Slug: akiha-college/head-apply
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: The slate Apply for a place button with a square arrow box.
 */
?>
<!-- wp:buttons {"className":"ak-btns"} -->
<div class="wp-block-buttons ak-btns"><!-- wp:button {"className":"ak-btn ak-btn--head"} -->
<div class="wp-block-button ak-btn ak-btn--head"><a class="wp-block-button__link wp-element-button" href="<?php echo akiha_college_url( '/contact/' ); ?>"><?php echo esc_html( akiha_college_t( 'apply' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->