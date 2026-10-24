<?php
/**
 * Title: Footer: ink band
 * Slug: akira-audit/footer-main
 * Inserter: no
 * Categories: akira-audit
 * Keywords: audit, footer
 * Viewport Width: 1440
 * Description: Ink band footer: wordmark and line, two link lists, the visit details and a legal row.
 */
?>
<!-- wp:group {"align":"full","className":"aa-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull aa-footer">
<!-- wp:group {"className":"aa-footer__grid","layout":{"type":"default"}} -->
<div class="wp-block-group aa-footer__grid">
<!-- wp:group {"className":"aa-footer__brand","layout":{"type":"default"}} -->
<div class="wp-block-group aa-footer__brand">
<!-- wp:paragraph {"className":"aa-footer__name"} -->
<p class="aa-footer__name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__line"} -->
<p class="aa-footer__line"><?php echo esc_html( akira_audit_t( 'f_line' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-footer__lists","layout":{"type":"default"}} -->
<div class="wp-block-group aa-footer__lists">
<!-- wp:group {"className":"aa-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group aa-footer__col">
<!-- wp:paragraph {"className":"aa-footer__h"} -->
<p class="aa-footer__h"><?php echo esc_html( akira_audit_t( 'f_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__link"} -->
<p class="aa-footer__link"><a href="<?php echo esc_url( home_url( '/company-audit/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'f_a1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__link"} -->
<p class="aa-footer__link"><a href="<?php echo esc_url( home_url( '/charity-audit/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'f_a2' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__link"} -->
<p class="aa-footer__link"><a href="<?php echo esc_url( home_url( '/grant-assurance/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'f_a3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__link"} -->
<p class="aa-footer__link"><a href="<?php echo esc_url( home_url( '/how-we-audit/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'f_a4' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group aa-footer__col">
<!-- wp:paragraph {"className":"aa-footer__h"} -->
<p class="aa-footer__h"><?php echo esc_html( akira_audit_t( 'f_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__link"} -->
<p class="aa-footer__link"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'f_b1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__link"} -->
<p class="aa-footer__link"><a href="<?php echo esc_url( home_url( '/people/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'f_b2' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__link"} -->
<p class="aa-footer__link"><a href="<?php echo esc_url( home_url( '/cases/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'f_b3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__link"} -->
<p class="aa-footer__link"><a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'f_b4' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__link"} -->
<p class="aa-footer__link"><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'f_b5' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-footer__col aa-footer__visit","layout":{"type":"default"}} -->
<div class="wp-block-group aa-footer__col aa-footer__visit">
<!-- wp:paragraph {"className":"aa-footer__h"} -->
<p class="aa-footer__h"><?php echo esc_html( akira_audit_t( 'f_h3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__text"} -->
<p class="aa-footer__text"><?php echo esc_html( akira_audit_t( 'f_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__text"} -->
<p class="aa-footer__text"><?php echo esc_html( akira_audit_t( 'f_hours' ) ); ?><br><?php echo esc_html( akira_audit_t( 'f_phone' ) ); ?><br><a href="mailto:hello@akira-audit.example"><?php echo esc_html( akira_audit_t( 'f_mail' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-footer__legal","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group aa-footer__legal">
<!-- wp:paragraph {"className":"aa-footer__copy"} -->
<p class="aa-footer__copy"><?php echo esc_html( akira_audit_t( 'f_copy' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-footer__copy"} -->
<p class="aa-footer__copy"><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'f_priv' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
