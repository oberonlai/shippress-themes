<?php
/**
 * Title: Footer: clinic name, letter, links, clinic details and the base line
 * Slug: sukoyaka-family-clinic/footer-main
 * Categories: sukoyaka-family-clinic
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: The footer: the clinic name and line, the newsletter note, the page links, the synced clinic details and the legal line.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"sf-foot","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull sf-foot"><!-- wp:group {"align":"wide","className":"sf-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-foot__grid"><!-- wp:group {"className":"sf-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group sf-foot__brand"><!-- wp:paragraph {"className":"sf-foot__mark"} -->
<p class="sf-foot__mark"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'footer_main_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sf-foot__line"} -->
<p class="sf-foot__line"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'footer_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sf-foot__letter"} -->
<p class="sf-foot__letter"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'footer_main_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sf-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group sf-foot__links"><!-- wp:paragraph {"className":"sf-foot__kicker"} -->
<p class="sf-foot__kicker"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'footer_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sf-foot__list"} -->
<p class="sf-foot__list"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'footer_main_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sf-foot__school","layout":{"type":"default"}} -->
<div class="wp-block-group sf-foot__school"><!-- wp:pattern {"slug":"sukoyaka-family-clinic/office"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"sf-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-foot__base"><!-- wp:paragraph {"className":"sf-foot__legal"} -->
<p class="sf-foot__legal"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'footer_main_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sf-foot__legal"} -->
<p class="sf-foot__legal"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'footer_main_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
