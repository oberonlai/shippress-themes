<?php
/**
 * Title: Footer
 * Slug: azukari-stays/foot-main
 * Categories: azukari-stays
 * Keywords: holiday let, property management, owners
 * Viewport Width: 1440
 * Description: Four columns: company, hours, pages and the owner waiting list.
 */
?>
<!-- wp:group {"align":"full","className":"az-foot","backgroundColor":"footer","textColor":"white"} -->
<div class="wp-block-group alignfull az-foot has-white-color has-footer-background-color has-text-color has-background"><!-- wp:group {"className":"az-foot__cols"} -->
<div class="wp-block-group az-foot__cols"><!-- wp:group {"className":"az-foot__c"} -->
<div class="wp-block-group az-foot__c"><!-- wp:paragraph {"className":"az-foot__brand"} -->
<p class="az-foot__brand"><?php echo esc_html( azukari_stays_t( 'foot_brand' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-foot__line"} -->
<p class="az-foot__line"><?php echo esc_html( azukari_stays_t( 'foot_line' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-foot__t"} -->
<p class="az-foot__t"><?php echo esc_html( azukari_stays_t( 'foot_addr' ) ); ?><br><?php echo esc_html( azukari_stays_t( 'foot_phone' ) ); ?><br><a href="mailto:owners@azukaristays.example">owners@azukaristays.example</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-foot__c"} -->
<div class="wp-block-group az-foot__c"><!-- wp:paragraph {"className":"az-foot__h"} -->
<p class="az-foot__h"><?php echo esc_html( azukari_stays_t( 'foot_h_hours' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-foot__t"} -->
<p class="az-foot__t"><?php echo esc_html( azukari_stays_t( 'foot_hours1' ) ); ?><br><?php echo esc_html( azukari_stays_t( 'foot_hours2' ) ); ?><br><?php echo esc_html( azukari_stays_t( 'foot_hours3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-foot__c"} -->
<div class="wp-block-group az-foot__c"><!-- wp:paragraph {"className":"az-foot__h"} -->
<p class="az-foot__h"><?php echo esc_html( azukari_stays_t( 'foot_h_links' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="az-foot__links"><li><a href="/#homes"><?php echo esc_html( azukari_stays_t( 'flink1' ) ); ?></a></li><li><a href="/#listing"><?php echo esc_html( azukari_stays_t( 'flink2' ) ); ?></a></li><li><a href="/#sheet"><?php echo esc_html( azukari_stays_t( 'flink3' ) ); ?></a></li><li><a href="/#owners"><?php echo esc_html( azukari_stays_t( 'flink4' ) ); ?></a></li><li><a href="/#consult"><?php echo esc_html( azukari_stays_t( 'flink5' ) ); ?></a></li><li><a href="/#why"><?php echo esc_html( azukari_stays_t( 'flink6' ) ); ?></a></li><li><a href="/journal/"><?php echo esc_html( azukari_stays_t( 'flink7' ) ); ?></a></li><li><a href="/newsletter/"><?php echo esc_html( azukari_stays_t( 'flink8' ) ); ?></a></li><li><a href="/contact/"><?php echo esc_html( azukari_stays_t( 'flink9' ) ); ?></a></li><li><a href="/privacy/"><?php echo esc_html( azukari_stays_t( 'flink10' ) ); ?></a></li><li><a href="/terms/"><?php echo esc_html( azukari_stays_t( 'flink11' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-foot__c az-foot__news"} -->
<div class="wp-block-group az-foot__c az-foot__news"><!-- wp:paragraph {"className":"az-foot__h"} -->
<p class="az-foot__h"><?php echo esc_html( azukari_stays_t( 'foot_h_news' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-foot__t"} -->
<p class="az-foot__t"><?php echo esc_html( azukari_stays_t( 'foot_news' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'owners@azukaristays.example', 'label' => azukari_stays_t( 'forms_email' ), 'submit' => azukari_stays_t( 'forms_subscribe' ), 'notice' => azukari_stays_t( 'forms_mail_notice' ), 'subject' => azukari_stays_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-foot__bar"} -->
<div class="wp-block-group az-foot__bar"><!-- wp:paragraph {"className":"az-foot__t"} -->
<p class="az-foot__t"><?php echo esc_html( azukari_stays_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-foot__t"} -->
<p class="az-foot__t"><a href="#top"><?php echo esc_html( azukari_stays_t( 'foot_top' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
