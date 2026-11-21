<?php
/**
 * Title: Footer: dates, address and links
 * Slug: hozue-foodfest/footer-main
 * Categories: hozue-foodfest
 * Viewport Width: 1440
 * Description: Olive-black footer: wordmark and dates, address and contact, the link index.
 */
?>
<!-- wp:group {"className":"hf-foot has-footer-background-color has-base-color has-text-color has-background","layout":{"type":"default"}} -->
<div class="wp-block-group hf-foot has-footer-background-color has-base-color has-text-color has-background"><!-- wp:group {"className":"hf-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group hf-foot__cols"><!-- wp:group {"className":"hf-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group hf-foot__c"><!-- wp:paragraph {"className":"hf-foot__name"} -->
<p class="hf-foot__name"><?php echo esc_html( hozue_foodfest_t( 'logo_name' ) ); ?> <span><?php echo esc_html( hozue_foodfest_t( 'logo_sub' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-foot__txt"} -->
<p class="hf-foot__txt"><?php echo esc_html( hozue_foodfest_t( 'foot_dates' ) ); ?><br><?php echo esc_html( hozue_foodfest_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group hf-foot__c"><!-- wp:paragraph {"className":"hf-foot__h"} -->
<p class="hf-foot__h"><?php echo esc_html( hozue_foodfest_t( 'foot_addr_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-foot__txt"} -->
<p class="hf-foot__txt"><?php echo esc_html( hozue_foodfest_t( 'foot_addr1' ) ); ?><br><?php echo esc_html( hozue_foodfest_t( 'foot_addr2' ) ); ?><br><a href="tel:+4420816630">+00 44 2081 6630</a><br><a href="mailto:hello@hozuefestival.example">hello@hozuefestival.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group hf-foot__c"><!-- wp:paragraph {"className":"hf-foot__h"} -->
<p class="hf-foot__h"><?php echo esc_html( hozue_foodfest_t( 'foot_index_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-foot__index"} -->
<p class="hf-foot__index"><a href="<?php echo esc_url( home_url( '/programme/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'nav_programme' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/tickets/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'nav_tickets' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/stallholders/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'nav_stallholders' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/getting-here/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'nav_getting' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'nav_faq' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'nav_newsletter' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'nav_about' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'nav_contact' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group hf-foot__c"><!-- wp:paragraph {"className":"hf-foot__h"} -->
<p class="hf-foot__h"><?php echo esc_html( hozue_foodfest_t( 'foot_legal_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-foot__index"} -->
<p class="hf-foot__index"><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'nav_privacy' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'nav_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hf-foot__legal"} -->
<p class="hf-foot__legal"><?php echo esc_html( hozue_foodfest_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
