<?php
/**
 * Title: Home: one case
 * Slug: tsunagu-systems/case-row
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Description: One client case in a single ruled row: company type, problem and the result figure, under a wide photograph.
 */
?>
<!-- wp:group {"tagName":"section","className":"ts-case","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ts-case">
<!-- wp:paragraph {"className":"ts-label"} -->
<p class="ts-label"><?php echo esc_html( tsunagu_systems_t( 'cs_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<figure class="ts-case__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office-team.webp' ) ); ?>" alt="<?php echo esc_attr( tsunagu_systems_t( 'alt_office' ) ); ?>" loading="lazy"/></figure><div class="ts-case__row"><div class="ts-case__c"><p class="ts-case__k"><?php echo esc_html( tsunagu_systems_t( 'cs_type_l' ) ); ?></p><p class="ts-case__v"><?php echo esc_html( tsunagu_systems_t( 'cs_type' ) ); ?></p></div><div class="ts-case__c"><p class="ts-case__k"><?php echo esc_html( tsunagu_systems_t( 'cs_prob_l' ) ); ?></p><p class="ts-case__v"><?php echo esc_html( tsunagu_systems_t( 'cs_prob' ) ); ?></p></div><div class="ts-case__c ts-case__c--res"><p class="ts-case__k"><?php echo esc_html( tsunagu_systems_t( 'cs_res_l' ) ); ?></p><p class="ts-case__n"><?php echo esc_html( tsunagu_systems_t( 'cs_res_n' ) ); ?></p><p class="ts-case__v"><?php echo esc_html( tsunagu_systems_t( 'cs_res' ) ); ?></p></div></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
