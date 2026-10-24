<?php
/**
 * Title: Home: case
 * Slug: akira-audit/front-case
 * Categories: akira-audit
 * Keywords: audit, case study
 * Viewport Width: 1440
 * Description: One case: text and a dark button at the left, two overlapping photographs in hairline frames with crop marks at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"aa-sec aa-sec--stone aa-sec--case","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull aa-sec aa-sec--stone aa-sec--case">
<!-- wp:group {"className":"aa-case","layout":{"type":"default"}} -->
<div class="wp-block-group aa-case">
<!-- wp:group {"className":"aa-case__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group aa-case__text sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"aa-eyebrow"} -->
<p class="aa-eyebrow"><?php echo esc_html( akira_audit_t( 'case_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"aa-h2"} -->
<h2 class="wp-block-heading aa-h2"><?php echo esc_html( akira_audit_t( 'case_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( akira_audit_t( 'case_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"aa-btnrow"} -->
<div class="wp-block-buttons aa-btnrow">
<!-- wp:button {"className":"aa-btn"} -->
<div class="wp-block-button aa-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/cases/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'case_btn' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-pair","layout":{"type":"default"}} -->
<div class="wp-block-group aa-pair">
<!-- wp:group {"className":"aa-frame aa-pair__a","layout":{"type":"default"}} -->
<div class="wp-block-group aa-frame aa-pair__a">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sp-reveal"} -->
<figure class="wp-block-image size-full sp-reveal"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h10-case-a-timber.webp' ) ); ?>" alt="<?php echo esc_attr( akira_audit_t( 'alt_h10' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-frame aa-pair__b","layout":{"type":"default"}} -->
<div class="wp-block-group aa-frame aa-pair__b">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sp-reveal"} -->
<figure class="wp-block-image size-full sp-reveal"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h11-case-b-workshop.webp' ) ); ?>" alt="<?php echo esc_attr( akira_audit_t( 'alt_h11' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
