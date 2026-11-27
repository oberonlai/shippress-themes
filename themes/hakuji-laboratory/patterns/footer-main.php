<?php
/**
 * Title: Footer
 * Slug: hakuji-laboratory/footer-main
 * Categories: hakuji-laboratory
 * Inserter: no
 * Viewport Width: 1440
 * Description: Deep grey-violet footer sheet (40px top radius): wordmark and link row, three columns with the address, the hours and the early-access slot, and the copyright line.
 */
?>
<!-- wp:group {"align":"full","className":"hk-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hk-footer">
<!-- wp:group {"className":"hk-inner","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner">
<!-- wp:group {"className":"hk-foot1","layout":{"type":"default"}} -->
<div class="wp-block-group hk-foot1">
<!-- wp:paragraph {"className":"hk-wordmark hk-wordmark--f"} -->
<p class="hk-wordmark hk-wordmark--f"><a href="/"><span class="hk-dot" aria-hidden="true"></span><?php echo esc_html( hakuji_laboratory_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="hk-foot-links"><li><a href="/about/"><?php echo esc_html( hakuji_laboratory_t( 'link_about' ) ); ?></a></li><li><a href="/cases/"><?php echo esc_html( hakuji_laboratory_t( 'link_cases' ) ); ?></a></li><li><a href="/upload-guide/"><?php echo esc_html( hakuji_laboratory_t( 'link_upload' ) ); ?></a></li><li><a href="/fees/"><?php echo esc_html( hakuji_laboratory_t( 'link_fees' ) ); ?></a></li><li><a href="/notices/"><?php echo esc_html( hakuji_laboratory_t( 'link_notices' ) ); ?></a></li><li><a href="/newsletter/"><?php echo esc_html( hakuji_laboratory_t( 'link_early' ) ); ?></a></li><li><a href="/contact/"><?php echo esc_html( hakuji_laboratory_t( 'link_open' ) ); ?></a></li><li><a href="/privacy/"><?php echo esc_html( hakuji_laboratory_t( 'link_privacy' ) ); ?></a></li><li><a href="/terms/"><?php echo esc_html( hakuji_laboratory_t( 'link_terms' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-foot2","layout":{"type":"default"}} -->
<div class="wp-block-group hk-foot2">
<!-- wp:group {"className":"hk-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group hk-fcol">
<!-- wp:heading {"level":3,"className":"hk-fcol__h"} -->
<h3 class="wp-block-heading hk-fcol__h"><?php echo esc_html( hakuji_laboratory_t( 'foot_h1' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-fcol__p"} -->
<p class="hk-fcol__p"><?php echo esc_html( hakuji_laboratory_t( 'visit_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-fcol__p"} -->
<p class="hk-fcol__p"><?php echo esc_html( hakuji_laboratory_t( 'visit_tel' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-fcol__p"} -->
<p class="hk-fcol__p"><a href="mailto:<?php echo esc_html( hakuji_laboratory_t( 'email' ) ); ?>"><?php echo esc_html( hakuji_laboratory_t( 'email' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group hk-fcol">
<!-- wp:heading {"level":3,"className":"hk-fcol__h"} -->
<h3 class="wp-block-heading hk-fcol__h"><?php echo esc_html( hakuji_laboratory_t( 'foot_h2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-fcol__p"} -->
<p class="hk-fcol__p"><?php echo esc_html( hakuji_laboratory_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-fcol__p"} -->
<p class="hk-fcol__p"><?php echo esc_html( hakuji_laboratory_t( 'foot_sat' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-fcol__p"} -->
<p class="hk-fcol__p"><?php echo esc_html( hakuji_laboratory_t( 'visit_pick' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-fcol hk-fcol--nl","layout":{"type":"default"}} -->
<div class="wp-block-group hk-fcol hk-fcol--nl">
<!-- wp:heading {"level":3,"className":"hk-fcol__h"} -->
<h3 class="wp-block-heading hk-fcol__h"><?php echo esc_html( hakuji_laboratory_t( 'foot_h3' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:html -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => hakuji_laboratory_t( 'email' ), 'label' => hakuji_laboratory_t( 'forms_email' ), 'submit' => hakuji_laboratory_t( 'forms_subscribe' ), 'notice' => hakuji_laboratory_t( 'forms_mail_notice' ), 'subject' => hakuji_laboratory_t( 'forms_mail_subject' ) ) ); ?>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"hk-copy"} -->
<p class="hk-copy"><?php echo esc_html( hakuji_laboratory_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
