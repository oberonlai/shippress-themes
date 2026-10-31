<?php
/**
 * Title: Footer
 * Slug: suji-clinic/foot-main
 * Categories: suji-clinic
 * Keywords: clinic, footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: Slate footer in three columns with the thin Latin ghost word and the back-to-top tab.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"sj-foot","layout":{"type":"default"}} -->
<footer class="wp-block-group alignfull sj-foot"><!-- wp:group {"className":"sj-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group sj-foot__in"><!-- wp:group {"className":"sj-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group sj-foot__col"><!-- wp:paragraph {"className":"sj-foot__mark"} -->
<p class="sj-foot__mark"><a href="<?php echo suji_clinic_url(); ?>">Suji</a> <span><?php echo esc_html( suji_clinic_t( 'brand_sub' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-foot__text"} -->
<p class="sj-foot__text"><?php echo esc_html( suji_clinic_t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group sj-foot__col"><!-- wp:paragraph {"className":"sj-foot__h"} -->
<p class="sj-foot__h"><?php echo esc_html( suji_clinic_t( 'foot_addr_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-foot__text"} -->
<p class="sj-foot__text"><?php echo suji_clinic_lines( 'visit_addr_t' ); ?><br><?php echo esc_html( suji_clinic_t( 'visit_phone_t' ) ); ?><br><?php echo esc_html( suji_clinic_t( 'foot_email' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-foot__text"} -->
<p class="sj-foot__text"><?php echo suji_clinic_lines( 'visit_hours_t' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group sj-foot__col"><!-- wp:paragraph {"className":"sj-foot__h"} -->
<p class="sj-foot__h"><?php echo esc_html( suji_clinic_t( 'foot_more_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-foot__links"} -->
<p class="sj-foot__links"><a href="<?php echo suji_clinic_url( 'about' ); ?>"><?php echo esc_html( suji_clinic_t( 'foot_about' ) ); ?></a><a href="<?php echo suji_clinic_url( 'clubs' ); ?>"><?php echo esc_html( suji_clinic_t( 'foot_clubs' ) ); ?></a><a href="<?php echo suji_clinic_url( 'journal' ); ?>"><?php echo esc_html( suji_clinic_t( 'foot_journal' ) ); ?></a><a href="<?php echo suji_clinic_url( 'faq' ); ?>"><?php echo esc_html( suji_clinic_t( 'foot_faq' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sj-foot__ghost"} -->
<p class="sj-foot__ghost" aria-hidden="true">SUJI</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-foot__legal"} -->
<p class="sj-foot__legal"><?php echo esc_html( suji_clinic_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-pagetop"} -->
<p class="sj-pagetop"><a href="#top" aria-label="<?php echo esc_attr( suji_clinic_t( 'pagetop' ) ); ?>"></a></p>
<!-- /wp:paragraph --></footer>
<!-- /wp:group -->
