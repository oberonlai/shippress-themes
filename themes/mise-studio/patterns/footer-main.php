<?php
/**
 * Title: Footer: four columns and legal row
 * Slug: mise-studio/footer-main
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: A white footer with a 1px top border: wordmark and address, two link columns (not a second menu bar), hours and the compact waitlist form, and the legal row with the page-top square.
 */
?>
<!-- wp:group {"align":"full","className":"ms-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ms-foot"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:group {"className":"ms-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group ms-foot__cols"><!-- wp:group {"className":"ms-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ms-foot__col"><!-- wp:paragraph {"className":"ms-foot__brand"} -->
<p class="ms-foot__brand"><?php echo esc_html( mise_studio_t( 'ft_brand' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-foot__sub"} -->
<p class="ms-foot__sub"><?php echo esc_html( mise_studio_t( 'tagline' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-foot__addr"} -->
<p class="ms-foot__addr"><?php echo esc_html( mise_studio_t( 'ft_addr1' ) ); ?><br><?php echo esc_html( mise_studio_t( 'ft_addr2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ms-foot__col"><!-- wp:heading {"level":3,"className":"ms-foot__h"} -->
<h3 class="wp-block-heading ms-foot__h"><?php echo esc_html( mise_studio_t( 'ft_studio' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"ms-foot__list"} -->
<ul class="wp-block-list ms-foot__list"><!-- wp:list-item -->
<li><a href="/studio/"><?php echo esc_html( mise_studio_t( 'fl_studio' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/rooms/"><?php echo esc_html( mise_studio_t( 'fl_rooms' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/site-test/"><?php echo esc_html( mise_studio_t( 'fl_test' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/kitchens/"><?php echo esc_html( mise_studio_t( 'fl_kitchens' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/journal/"><?php echo esc_html( mise_studio_t( 'fl_journal' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ms-foot__col"><!-- wp:heading {"level":3,"className":"ms-foot__h"} -->
<h3 class="wp-block-heading ms-foot__h"><?php echo esc_html( mise_studio_t( 'ft_visits' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"ms-foot__list"} -->
<ul class="wp-block-list ms-foot__list"><!-- wp:list-item -->
<li><a href="/fees/"><?php echo esc_html( mise_studio_t( 'fl_fees' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/book-a-visit/"><?php echo esc_html( mise_studio_t( 'fl_book' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/waitlist/"><?php echo esc_html( mise_studio_t( 'fl_waitlist' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/contact/"><?php echo esc_html( mise_studio_t( 'fl_contact' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ms-foot__col"><!-- wp:heading {"level":3,"className":"ms-foot__h"} -->
<h3 class="wp-block-heading ms-foot__h"><?php echo esc_html( mise_studio_t( 'ft_hours_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-foot__addr"} -->
<p class="ms-foot__addr"><?php echo esc_html( mise_studio_t( 'ft_hours' ) ); ?><br><?php echo esc_html( mise_studio_t( 'ft_phone' ) ); ?><br><a href="mailto:hello@mise-studio.example">hello@mise-studio.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-foot__news","layout":{"type":"default"}} -->
<div class="wp-block-group ms-foot__news"><!-- wp:pattern {"slug":"mise-studio/news-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-foot__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group ms-foot__bottom"><!-- wp:paragraph {"className":"ms-foot__legal"} -->
<p class="ms-foot__legal"><a href="/privacy/"><?php echo esc_html( mise_studio_t( 'ft_privacy' ) ); ?></a> · <a href="/terms/"><?php echo esc_html( mise_studio_t( 'ft_terms' ) ); ?></a> · <?php echo esc_html( mise_studio_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-top"} -->
<p class="ms-top"><a href="#top"><?php echo esc_html( mise_studio_t( 'ft_top' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
