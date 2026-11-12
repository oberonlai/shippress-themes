<?php
/**
 * Title: Footer
 * Slug: homura-safety/foot-main
 * Categories: homura-safety
 * Inserter: no
 * Description: Ink footer: about line, address and hours, anchor links, the code-change brief form and legal links.
 */
?>
<!-- wp:group {"align":"full","className":"hs-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hs-foot"><!-- wp:group {"align":"wide","className":"hs-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-foot__grid"><!-- wp:group {"className":"hs-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hs-foot__col"><!-- wp:paragraph {"className":"hs-foot__brand"} -->
<p class="hs-foot__brand">Homura Safety</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'ft_about' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hs-foot__col"><!-- wp:paragraph {"className":"hs-foot__label"} -->
<p class="hs-foot__label"><?php echo esc_html( homura_safety_t( 'ft_label_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'ft_address' ) ); ?><br><?php echo esc_html( homura_safety_t( 'ft_hours' ) ); ?><br><?php echo esc_html( homura_safety_t( 'ft_hours_note' ) ); ?><br><?php echo esc_html( homura_safety_t( 'ft_phone' ) ); ?><br><a href="mailto:hello@homura-safety.example">hello@homura-safety.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hs-foot__col"><!-- wp:paragraph {"className":"hs-foot__label"} -->
<p class="hs-foot__label"><?php echo esc_html( homura_safety_t( 'ft_label_pages' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/#scope"><?php echo esc_html( homura_safety_t( 'ft_scope' ) ); ?></a><br><a href="/#process"><?php echo esc_html( homura_safety_t( 'ft_process' ) ); ?></a><br><a href="/#findings"><?php echo esc_html( homura_safety_t( 'ft_findings' ) ); ?></a><br><a href="/#fees"><?php echo esc_html( homura_safety_t( 'ft_fees' ) ); ?></a><br><a href="/about/"><?php echo esc_html( homura_safety_t( 'sl_about' ) ); ?></a><br><a href="/cases/"><?php echo esc_html( homura_safety_t( 'ca_sub' ) ); ?></a><br><a href="/contact/"><?php echo esc_html( homura_safety_t( 'sl_contact' ) ); ?></a><br><a href="/journal/"><?php echo esc_html( homura_safety_t( 'ft_journal' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-foot__col hs-foot__news","layout":{"type":"default"}} -->
<div class="wp-block-group hs-foot__col hs-foot__news"><!-- wp:paragraph {"className":"hs-foot__label"} -->
<p class="hs-foot__label"><?php echo esc_html( homura_safety_t( 'ft_label_news' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'ft_news_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"homura-safety/news-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hs-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-foot__base"><!-- wp:paragraph {"className":"hs-foot__legal"} -->
<p class="hs-foot__legal"><?php echo esc_html( homura_safety_t( 'ft_legal' ) ); ?> <a href="/privacy/"><?php echo esc_html( homura_safety_t( 'ft_privacy' ) ); ?></a> · <a href="/terms/"><?php echo esc_html( homura_safety_t( 'ft_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
