<?php
/**
 * Title: Header
 * Slug: getsuji-payroll/head-main
 * Categories: getsuji-payroll
 * Keywords: header, navigation, logo
 * Viewport Width: 1440
 * Inserter: no
 * Description: Flush navy logo panel at the left, a small fixed mark that appears after the first screen, the burger with a vertical MENU at the right.
 */
?>
<!-- wp:group {"className":"gp-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group gp-header__bar"><!-- wp:group {"className":"gp-logo","layout":{"type":"default"}} -->
<div class="wp-block-group gp-logo"><!-- wp:html -->
<a class="gp-logo__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Getsuji Payroll"><?php echo getsuji_payroll_mark( 96, 'gp-logo__ring' ); // phpcs:ignore WordPress.Security.EscapeOutput ?><span class="gp-logo__name">GETSUJI<br>PAYROLL</span><span class="gp-logo__sub">Payroll bureau · Ghent</span><span class="gp-logo__word">Getsuji Payroll</span></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="gp-fixmark" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Getsuji Payroll"><?php echo getsuji_payroll_mark( 40, 'gp-fixmark__ring' ); // phpcs:ignore WordPress.Security.EscapeOutput ?><span class="gp-fixmark__name">getsuji</span></a>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"always","overlayBackgroundColor":"base","overlayTextColor":"ink","className":"gp-nav","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group -->
