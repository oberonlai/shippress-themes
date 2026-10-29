<?php
/**
 * Title: Footer: school details
 * Slug: saji-culinary/foot-main
 * Categories: saji-culinary
 * Keywords: culinary school, cooking, chef
 * Viewport Width: 1440
 * Description: Ink footer: lockup, address, hours and the second link list.
 */
?>
<!-- wp:group {"align":"full","className":"saji-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull saji-foot"><!-- wp:html -->
<a class="saji-lockup saji-lockup--foot" href="/"><svg class="saji-spoon" viewBox="0 0 40 56" width="40" height="56" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><ellipse cx="20" cy="13" rx="9" ry="11.5"/><path d="M17.5 24.5c.8 3.2 4.2 3.2 5 0M20 27.5V54"/></svg><span class="saji-lockup__name">Saji</span><span class="saji-lockup__line"><?php echo esc_html( saji_culinary_t( 'brand_line' ) ); ?></span></a>
<!-- /wp:html -->

<!-- wp:group {"align":"wide","className":"saji-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide saji-foot__grid"><!-- wp:group {"className":"saji-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group saji-foot__col"><!-- wp:paragraph {"className":"saji-foot__p"} -->
<p class="saji-foot__p"><?php echo saji_culinary_lines( 'ft_address' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-foot__p"} -->
<p class="saji-foot__p"><?php echo esc_html( saji_culinary_t( 'ft_phone' ) ); ?><br><a href="mailto:hello@saji-culinary.example"><?php echo esc_html( saji_culinary_t( 'ft_email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"saji-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group saji-foot__col"><!-- wp:paragraph {"className":"saji-foot__p"} -->
<p class="saji-foot__p"><?php echo esc_html( saji_culinary_t( 'ft_office' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-foot__p"} -->
<p class="saji-foot__p"><?php echo esc_html( saji_culinary_t( 'ft_pass' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-foot__p"} -->
<p class="saji-foot__p"><?php echo esc_html( saji_culinary_t( 'ft_open' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"saji-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group saji-foot__col"><!-- wp:paragraph {"className":"saji-foot__links"} -->
<p class="saji-foot__links"><a href="/admissions/"><?php echo esc_html( saji_culinary_t( 'ft_admissions' ) ); ?></a><br><a href="/about/"><?php echo esc_html( saji_culinary_t( 'ft_about' ) ); ?></a><br><a href="/notices/"><?php echo esc_html( saji_culinary_t( 'ft_notices' ) ); ?></a><br><a href="/contact/"><?php echo esc_html( saji_culinary_t( 'ft_contact' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"saji-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide saji-foot__base"><!-- wp:paragraph {"className":"saji-foot__legal"} -->
<p class="saji-foot__legal"><?php echo esc_html( saji_culinary_t( 'ft_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
