<?php
/**
 * Title: Footer: slate band
 * Slug: meguri-waste/foot-main
 * Categories: meguri-waste
 * Description: Slate footer band with the wordmark, depot address, hours, licence box and links. No form.
 */
?>
<!-- wp:group {"align":"full","className":"mw-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-foot"><!-- wp:group {"className":"mw-wrap mw-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap mw-foot__cols"><!-- wp:group {"className":"mw-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group mw-foot__col"><!-- wp:paragraph {"className":"mw-foot__brand"} -->
<p class="mw-foot__brand"><?php echo esc_html( meguri_waste_t( 'brand_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mw-box mw-box--licence mw-box--dark"} -->
<p class="mw-box mw-box--licence mw-box--dark"><?php echo esc_html( meguri_waste_t( 'hd_licence' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mw-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group mw-foot__col"><!-- wp:paragraph {"className":"mw-foot__h"} -->
<p class="mw-foot__h"><?php echo esc_html( meguri_waste_t( 'ft_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'ft_hours1' ) ); ?><br><?php echo esc_html( meguri_waste_t( 'ft_hours2' ) ); ?><br><?php echo esc_html( meguri_waste_t( 'ft_hours3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mw-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group mw-foot__col"><!-- wp:paragraph {"className":"mw-foot__h"} -->
<p class="mw-foot__h"><?php echo esc_html( meguri_waste_t( 'ft_links_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/set-your-schedule/"><?php echo esc_html( meguri_waste_t( 'cta' ) ); ?></a><br><a href="/newsletter/"><?php echo esc_html( meguri_waste_t( 'ft_news' ) ); ?></a><br><a href="/privacy/"><?php echo esc_html( meguri_waste_t( 'ft_privacy' ) ); ?></a><br><a href="/terms/"><?php echo esc_html( meguri_waste_t( 'ft_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mw-wrap mw-foot__copy"} -->
<p class="mw-wrap mw-foot__copy"><?php echo esc_html( meguri_waste_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
