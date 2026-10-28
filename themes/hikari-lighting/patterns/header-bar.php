<?php
/**
 * Title: Header bar
 * Slug: hikari-lighting/header-bar
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"hl-bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hl-bar"><!-- wp:html -->
<a class="hl-bar__brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Hikari Lighting"><?php echo hikari_lighting_wordmark( 'hl-bar__mark' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></a>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"hl-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between"}} /--></div>
<!-- /wp:group -->
