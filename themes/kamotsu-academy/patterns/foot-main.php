<?php
/**
 * Title: Footer: address, courses, academy, hours
 * Slug: kamotsu-academy/foot-main
 * Categories: kamotsu-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: Black footer: wordmark and address, course links, academy links, hours and contact, copyright row.
 */
?>
<!-- wp:group {"align":"full","className":"ka-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ka-foot">
<!-- wp:group {"className":"ka-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ka-foot__grid">
<!-- wp:group {"className":"ka-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ka-foot__col">
<!-- wp:site-title {"level":0,"isLink":false,"className":"ka-brand__title ka-foot__brand"} /-->
<!-- wp:paragraph {"className":"ka-foot__small"} -->
<p class="ka-foot__small"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-foot__small"} -->
<p class="ka-foot__small"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ka-foot__col">
<!-- wp:paragraph {"className":"ka-foot__h"} -->
<p class="ka-foot__h"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_h_courses' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="ka-foot__links"><li><a href="/class-ce/"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_l_ce' ) ); ?></a></li><li><a href="/class-c/"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_l_c' ) ); ?></a></li><li><a href="/courses/"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_l_ref' ) ); ?></a></li><li><a href="/courses/"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_l_cpc' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ka-foot__col">
<!-- wp:paragraph {"className":"ka-foot__h"} -->
<p class="ka-foot__h"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_h_academy' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="ka-foot__links"><li><a href="/the-weeks/"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_l_weeks' ) ); ?></a></li><li><a href="/fees/"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_l_fees' ) ); ?></a></li><li><a href="/test-day/"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_l_test' ) ); ?></a></li><li><a href="/fleet/"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_l_fleet' ) ); ?></a></li><li><a href="/about/"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_l_about' ) ); ?></a></li><li><a href="/news/"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_l_stories' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ka-foot__col">
<!-- wp:paragraph {"className":"ka-foot__h"} -->
<p class="ka-foot__h"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_h_hours' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-foot__small"} -->
<p class="ka-foot__small"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-foot__small"} -->
<p class="ka-foot__small"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_contact' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-foot__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group ka-foot__bottom">
<!-- wp:paragraph {"className":"ka-foot__small"} -->
<p class="ka-foot__small"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-foot__small"} -->
<p class="ka-foot__small"><?php echo wp_kses_post( kamotsu_academy_t( 'foot_fiction' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
