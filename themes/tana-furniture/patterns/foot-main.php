<?php
/**
 * Title: Footer
 * Slug: tana-furniture/foot-main
 * Categories: tana-furniture
 * Inserter: no
 * Description: Bark footer: the letter form, the shop details and plain text links.
 */
?>
<!-- wp:group {"align":"full","className":"tf-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tf-foot"><!-- wp:group {"align":"wide","className":"tf-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tf-foot__grid"><!-- wp:group {"className":"tf-foot__col tf-foot__letters","layout":{"type":"default"}} -->
<div class="wp-block-group tf-foot__col tf-foot__letters"><!-- wp:paragraph {"className":"tf-foot__label"} -->
<p class="tf-foot__label"><?php echo esc_html( tana_furniture_t( 'ft_letters_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-foot__line"} -->
<p class="tf-foot__line"><?php echo esc_html( tana_furniture_t( 'ft_letters_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"tana-furniture/news-slot"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-foot__col tf-foot__info","layout":{"type":"default"}} -->
<div class="wp-block-group tf-foot__col tf-foot__info"><!-- wp:paragraph {"className":"tf-foot__label"} -->
<p class="tf-foot__label"><?php echo esc_html( tana_furniture_t( 'ft_address_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'ft_address' ) ); ?><br><?php echo esc_html( tana_furniture_t( 'ft_hours' ) ); ?><br><?php echo esc_html( tana_furniture_t( 'ft_phone' ) ); ?><br><a href="mailto:<?php echo esc_html( tana_furniture_t( 'ft_email' ) ); ?>"><?php echo esc_html( tana_furniture_t( 'ft_email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-foot__col tf-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group tf-foot__col tf-foot__links"><!-- wp:paragraph {"className":"tf-foot__label"} -->
<p class="tf-foot__label"><?php echo esc_html( tana_furniture_t( 'ft_links_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/prices/"><?php echo esc_html( tana_furniture_t( 'ft_prices' ) ); ?></a><br><a href="/delivery/"><?php echo esc_html( tana_furniture_t( 'ft_delivery' ) ); ?></a><br><a href="/contact/"><?php echo esc_html( tana_furniture_t( 'ft_contact' ) ); ?></a><br><a href="/newsletter/"><?php echo esc_html( tana_furniture_t( 'ft_newsletter' ) ); ?></a><br><a href="/journal/"><?php echo esc_html( tana_furniture_t( 'ft_journal' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"tf-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tf-foot__base"><!-- wp:paragraph {"className":"tf-foot__legal"} -->
<p class="tf-foot__legal"><?php echo esc_html( tana_furniture_t( 'ft_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
