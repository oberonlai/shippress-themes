<?php
/**
 * Title: Footer: deep patina columns
 * Slug: kaze-clinic/footer-main
 * Categories: kaze-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: A deep patina footer: clinic name and contact, two link columns, opening hours and a fine-print rule.
 */
?>
<!-- wp:group {"align":"full","className":"kz-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kz-foot"><!-- wp:group {"className":"kz-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group kz-foot__in"><!-- wp:group {"className":"kz-foot__col kz-foot__col--brand","layout":{"type":"default"}} -->
<div class="wp-block-group kz-foot__col kz-foot__col--brand"><!-- wp:heading {"className":"kz-foot__name"} -->
<h2 class="wp-block-heading kz-foot__name"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-foot__p"} -->
<p class="kz-foot__p"><?php echo esc_html( kaze_clinic_t( 'ft_addr' ) ); ?><br><?php echo esc_html( kaze_clinic_t( 'ft_phone' ) ); ?><br><?php echo esc_html( kaze_clinic_t( 'ft_email' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__p"} -->
<p class="kz-foot__p"><?php echo esc_html( kaze_clinic_t( 'ft_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kz-foot__col"><!-- wp:paragraph {"className":"kz-foot__h"} -->
<p class="kz-foot__h"><?php echo esc_html( kaze_clinic_t( 'ft_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/about/"><?php echo esc_html( kaze_clinic_t( 'ft_about' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/conditions/"><?php echo esc_html( kaze_clinic_t( 'ft_cond' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/tests/"><?php echo esc_html( kaze_clinic_t( 'ft_tests' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/first-visit/"><?php echo esc_html( kaze_clinic_t( 'ft_first' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/clinicians/"><?php echo esc_html( kaze_clinic_t( 'ft_clin' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kz-foot__col"><!-- wp:paragraph {"className":"kz-foot__h"} -->
<p class="kz-foot__h"><?php echo esc_html( kaze_clinic_t( 'ft_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/fees/"><?php echo esc_html( kaze_clinic_t( 'ft_fees' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/stories/"><?php echo esc_html( kaze_clinic_t( 'ft_stories' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/journal/"><?php echo esc_html( kaze_clinic_t( 'ft_journal' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/breathing-letter/"><?php echo esc_html( kaze_clinic_t( 'ft_letter' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/visit/"><?php echo esc_html( kaze_clinic_t( 'ft_visit' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__l"} -->
<p class="kz-foot__l"><a href="/book/"><?php echo esc_html( kaze_clinic_t( 'ft_book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kz-foot__col"><!-- wp:paragraph {"className":"kz-foot__h"} -->
<p class="kz-foot__h"><?php echo esc_html( kaze_clinic_t( 'ft_h3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-foot__p"} -->
<p class="kz-foot__p"><?php echo esc_html( kaze_clinic_t( 'ft_hrs1' ) ); ?><br><?php echo esc_html( kaze_clinic_t( 'ft_hrs2' ) ); ?><br><?php echo esc_html( kaze_clinic_t( 'ft_hrs3' ) ); ?><br><?php echo esc_html( kaze_clinic_t( 'ft_hrs4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kz-foot__fine"} -->
<p class="kz-foot__fine"><?php echo esc_html( kaze_clinic_t( 'ft_fine' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
