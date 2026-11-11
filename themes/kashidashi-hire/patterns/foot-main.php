<?php
/**
 * Title: Footer
 * Slug: kashidashi-hire/foot-main
 * Categories: kashidashi-hire
 * Inserter: no
 * Description: Deep pine footer: yard details, the yard board form, menu and legal links.
 */
?>
<!-- wp:group {"align":"full","className":"kh-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kh-foot"><!-- wp:group {"align":"wide","className":"kh-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kh-foot__grid"><!-- wp:group {"className":"kh-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kh-foot__col"><!-- wp:paragraph {"className":"kh-foot__label"} -->
<p class="kh-foot__label"><?php echo esc_html( kashidashi_hire_t( 'ft_addr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-foot__brand"} -->
<p class="kh-foot__brand"><strong><?php echo esc_html( kashidashi_hire_t( 'ft_brand' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'ft_addr' ) ); ?><br><?php echo esc_html( kashidashi_hire_t( 'ft_hours' ) ); ?><br><?php echo esc_html( kashidashi_hire_t( 'ft_phone' ) ); ?><br><a href="mailto:<?php echo esc_html( kashidashi_hire_t( 'ft_email' ) ); ?>"><?php echo esc_html( kashidashi_hire_t( 'ft_email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-foot__col kh-foot__board","layout":{"type":"default"}} -->
<div class="wp-block-group kh-foot__col kh-foot__board"><!-- wp:paragraph {"className":"kh-foot__label"} -->
<p class="kh-foot__label"><?php echo esc_html( kashidashi_hire_t( 'ft_board' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-foot__line"} -->
<p class="kh-foot__line"><?php echo esc_html( kashidashi_hire_t( 'ft_board_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kashidashi-hire/news-slot"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kh-foot__col"><!-- wp:paragraph {"className":"kh-foot__label"} -->
<p class="kh-foot__label"><?php echo esc_html( kashidashi_hire_t( 'ft_menu_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'ft_fleet' ) ); ?></a><br><a href="/hire-week/"><?php echo esc_html( kashidashi_hire_t( 'ft_week' ) ); ?></a><br><a href="/rates/"><?php echo esc_html( kashidashi_hire_t( 'ft_rates' ) ); ?></a><br><a href="/yard/"><?php echo esc_html( kashidashi_hire_t( 'ft_yard' ) ); ?></a><br><a href="/faq/"><?php echo esc_html( kashidashi_hire_t( 'ft_faq' ) ); ?></a><br><a href="/request/"><?php echo esc_html( kashidashi_hire_t( 'ft_request' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kh-foot__baseline","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kh-foot__baseline"><!-- wp:group {"className":"kh-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group kh-foot__base"><!-- wp:paragraph {"className":"kh-foot__copy"} -->
<p class="kh-foot__copy"><?php echo esc_html( kashidashi_hire_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-foot__legal"} -->
<p class="kh-foot__legal"><a href="/privacy/"><?php echo esc_html( kashidashi_hire_t( 'ft_privacy' ) ); ?></a> · <a href="/terms-of-hire/"><?php echo esc_html( kashidashi_hire_t( 'ft_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
