<?php
/**
 * Title: Header: logo, menu and apply disc
 * Slug: kairo-supply/header-main
 * Categories: kairo-supply
 * Keywords: electrical wholesaler, trade counter
 * Viewport Width: 1440
 * Description: Top bar with the wordmark, text menu, language label and the round yellow Apply disc.
 */
?>
<!-- wp:group {"className":"kai-head","layout":{"type":"default"}} -->
<div class="wp-block-group kai-head">
<!-- wp:paragraph {"className":"kai-logo"} -->
<p class="kai-logo"><a href="/"><?php echo wp_kses_post( kairo_supply_t( 'hd_logo' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"mobile","className":"kai-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<!-- wp:html -->
<span class="kai-lang" aria-label="<?php echo esc_attr( kairo_supply_t( 'hd_lang_label' ) ); ?>">EN <i aria-hidden="true">▾</i></span><a class="kai-disc" href="/apply/"><b aria-hidden="true"></b><span><?php echo wp_kses_post( kairo_supply_t( 'hd_apply' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
