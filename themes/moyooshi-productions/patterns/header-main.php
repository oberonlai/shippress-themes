<?php
/**
 * Title: Header: top bar
 * Slug: moyooshi-productions/header-main
 * Categories: moyooshi-productions
 * Viewport Width: 1440
 * Description: Two-line wordmark left, one top menu, flat ink Send a brief rectangle right; transparent over the home photograph.
 */
?>
<!-- wp:group {"className":"mp-head","layout":{"type":"default"}} -->
<div class="wp-block-group mp-head"><!-- wp:paragraph {"className":"mp-logo"} -->
<p class="mp-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="mp-logo__a"><?php echo esc_html( moyooshi_productions_t( 'head_logo_1' ) ); ?></span><br><span class="mp-logo__b"><?php echo esc_html( moyooshi_productions_t( 'head_logo_2' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"ink","overlayTextColor":"white","className":"mp-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:buttons {"className":"mp-head__cta","layout":{"type":"flex"}} -->
<div class="wp-block-buttons mp-head__cta"><!-- wp:button {"className":"mp-btn"} -->
<div class="wp-block-button mp-btn"><a class="wp-block-button__link wp-element-button" href="mailto:brief@moyooshi.example?subject=<?php echo rawurlencode( moyooshi_productions_t( 'forms_mail_subject_brief' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'head_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
