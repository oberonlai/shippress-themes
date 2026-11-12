<?php
/**
 * Title: Footer
 * Slug: haru-allergy/foot-main
 * Categories: haru-allergy
 * Inserter: no
 * Description: Slate footer: the pollen letter form, the clinic details and plain text links.
 */
?>
<!-- wp:group {"align":"full","className":"ha-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ha-foot"><!-- wp:group {"align":"wide","className":"ha-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ha-foot__grid"><!-- wp:group {"className":"ha-foot__col ha-foot__letters","layout":{"type":"default"}} -->
<div class="wp-block-group ha-foot__col ha-foot__letters"><!-- wp:paragraph {"className":"ha-foot__label"} -->
<p class="ha-foot__label"><?php echo esc_html( haru_allergy_t( 'ft_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-foot__line"} -->
<p class="ha-foot__line"><?php echo esc_html( haru_allergy_t( 'ft_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"haru-allergy/news-slot"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-foot__col ha-foot__info","layout":{"type":"default"}} -->
<div class="wp-block-group ha-foot__col ha-foot__info"><!-- wp:paragraph {"className":"ha-foot__label"} -->
<p class="ha-foot__label"><?php echo esc_html( haru_allergy_t( 'ft_address_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( haru_allergy_t( 'ft_address' ) ); ?><br><?php echo esc_html( haru_allergy_t( 'ft_hours' ) ); ?><br><?php echo esc_html( haru_allergy_t( 'ft_phone' ) ); ?><br><a href="mailto:<?php echo esc_attr( haru_allergy_t( 'ft_email' ) ); ?>"><?php echo esc_html( haru_allergy_t( 'ft_email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-foot__col ha-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group ha-foot__col ha-foot__links"><!-- wp:paragraph {"className":"ha-foot__label"} -->
<p class="ha-foot__label"><?php echo esc_html( haru_allergy_t( 'ft_links_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/immunotherapy/"><?php echo esc_html( haru_allergy_t( 'ft_immuno' ) ); ?></a><br><a href="/newsletter/"><?php echo esc_html( haru_allergy_t( 'ft_newsletter' ) ); ?></a><br><a href="/contact/"><?php echo esc_html( haru_allergy_t( 'ft_contact' ) ); ?></a><br><a href="/privacy/"><?php echo esc_html( haru_allergy_t( 'ft_privacy' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ha-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ha-foot__base"><!-- wp:paragraph {"className":"ha-foot__legal"} -->
<p class="ha-foot__legal"><?php echo esc_html( haru_allergy_t( 'ft_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
