<?php
/**
 * Title: Home: notices sheet
 * Slug: hakuji-laboratory/front-notices
 * Categories: hakuji-laboratory
 * Viewport Width: 1440
 * Description: White sheet with a 25px bottom radius lying over the photo band: title lockup, outline button and four ruled notice rows.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"notices","align":"full","className":"hk-sheet hk-sheet--b","layout":{"type":"default"}} -->
<section id="notices" class="wp-block-group alignfull hk-sheet hk-sheet--b">
<!-- wp:group {"className":"hk-inner hk-notices","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner hk-notices">
<!-- wp:group {"className":"hk-notices__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notices__head sp-reveal sp-reveal--up">
<!-- wp:group {"className":"hk-lock","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lock">
<!-- wp:paragraph {"className":"hk-lock__w"} -->
<p class="hk-lock__w"><?php echo esc_html( hakuji_laboratory_t( 'lock_notices' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-lock__l"} -->
<p class="hk-lock__l"><?php echo esc_html( hakuji_laboratory_t( 'lock_notices_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'notices_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"hk-pill"} -->
<div class="wp-block-buttons hk-pill"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/notices/"><?php echo esc_html( hakuji_laboratory_t( 'btn_notices' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-nrows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hk-nrows sp-stagger">
<!-- wp:group {"className":"hk-nrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-nrow sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-nrow__d"} -->
<p class="hk-nrow__d"><?php echo esc_html( hakuji_laboratory_t( 'n1_d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-nrow__c"} -->
<p class="hk-nrow__c"><?php echo esc_html( hakuji_laboratory_t( 'n1_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-nrow__t"} -->
<p class="hk-nrow__t"><a href="/five-habits-of-a-clean-scan/"><?php echo esc_html( hakuji_laboratory_t( 'n1_t' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-nrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-nrow sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-nrow__d"} -->
<p class="hk-nrow__d"><?php echo esc_html( hakuji_laboratory_t( 'n2_d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-nrow__c"} -->
<p class="hk-nrow__c"><?php echo esc_html( hakuji_laboratory_t( 'n2_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-nrow__t"} -->
<p class="hk-nrow__t"><a href="/a-new-layered-zirconia-shade-set-at-the-bench/"><?php echo esc_html( hakuji_laboratory_t( 'n2_t' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-nrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-nrow sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-nrow__d"} -->
<p class="hk-nrow__d"><?php echo esc_html( hakuji_laboratory_t( 'n3_d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-nrow__c"} -->
<p class="hk-nrow__c"><?php echo esc_html( hakuji_laboratory_t( 'n3_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-nrow__t"} -->
<p class="hk-nrow__t"><a href="/holiday-pick-up-schedule/"><?php echo esc_html( hakuji_laboratory_t( 'n3_t' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-nrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-nrow sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-nrow__d"} -->
<p class="hk-nrow__d"><?php echo esc_html( hakuji_laboratory_t( 'n4_d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-nrow__c"} -->
<p class="hk-nrow__c"><?php echo esc_html( hakuji_laboratory_t( 'n4_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-nrow__t"} -->
<p class="hk-nrow__t"><a href="/fees/"><?php echo esc_html( hakuji_laboratory_t( 'n4_t' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
