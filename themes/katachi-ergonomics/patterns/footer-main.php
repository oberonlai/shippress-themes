<?php
/**
 * Title: Footer: address, hours and links
 * Slug: katachi-ergonomics/footer-main
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk, consultancy
 * Viewport Width: 1440
 * Inserter: no
 * Description: Ink footer with address, hours, a paragraph-link list and the fixed vertical Top label.
 */
?>
<!-- wp:group {"align":"full","className":"ke-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ke-foot"><!-- wp:group {"className":"ke-wrap ke-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ke-wrap ke-foot__grid"><!-- wp:group {"className":"ke-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group ke-foot__c"><!-- wp:paragraph {"className":"ke-wm ke-wm--foot"} -->
<p class="ke-wm ke-wm--foot"><a href="<?php echo katachi_ergonomics_url( '/' ); ?>"><span class="ke-wm__a"><?php echo esc_html( katachi_ergonomics_t( 'wm_a' ) ); ?></span><span class="ke-wm__b"><?php echo esc_html( katachi_ergonomics_t( 'wm_b' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__p"} -->
<p class="ke-foot__p"><?php echo esc_html( katachi_ergonomics_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__p"} -->
<p class="ke-foot__p"><?php echo esc_html( katachi_ergonomics_t( 'ft_tel' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__p"} -->
<p class="ke-foot__p"><a href="mailto:hello@katachi-ergonomics.example">hello@katachi-ergonomics.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__p ke-foot__sub"} -->
<p class="ke-foot__p ke-foot__sub"><?php echo esc_html( katachi_ergonomics_t( 'ft_area' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ke-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group ke-foot__c"><!-- wp:paragraph {"className":"ke-foot__h"} -->
<p class="ke-foot__h"><?php echo esc_html( katachi_ergonomics_t( 'ft_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="ke-foot__hours"><li><span><?php echo esc_html( katachi_ergonomics_t( 'hr1_a' ) ); ?></span><span><?php echo esc_html( katachi_ergonomics_t( 'hr1_b' ) ); ?></span></li><li><span><?php echo esc_html( katachi_ergonomics_t( 'hr2_a' ) ); ?></span><span><?php echo esc_html( katachi_ergonomics_t( 'hr2_b' ) ); ?></span></li><li><span><?php echo esc_html( katachi_ergonomics_t( 'hr3_a' ) ); ?></span><span><?php echo esc_html( katachi_ergonomics_t( 'hr3_b' ) ); ?></span></li><li><span><?php echo esc_html( katachi_ergonomics_t( 'hr4_a' ) ); ?></span><span><?php echo esc_html( katachi_ergonomics_t( 'hr4_b' ) ); ?></span></li><li><span><?php echo esc_html( katachi_ergonomics_t( 'hr5_a' ) ); ?></span><span><?php echo esc_html( katachi_ergonomics_t( 'hr5_b' ) ); ?></span></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ke-foot__c ke-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group ke-foot__c ke-foot__links"><!-- wp:paragraph {"className":"ke-foot__h"} -->
<p class="ke-foot__h"><?php echo esc_html( katachi_ergonomics_t( 'ft_links' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__link"} -->
<p class="ke-foot__link"><a href="<?php echo katachi_ergonomics_url( '/about/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fl_about' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__link"} -->
<p class="ke-foot__link"><a href="<?php echo katachi_ergonomics_url( '/review/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fl_review' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__link"} -->
<p class="ke-foot__link"><a href="<?php echo katachi_ergonomics_url( '/visit/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fl_visit' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__link"} -->
<p class="ke-foot__link"><a href="<?php echo katachi_ergonomics_url( '/fees/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fl_fees' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__link"} -->
<p class="ke-foot__link"><a href="<?php echo katachi_ergonomics_url( '/cases/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fl_cases' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__link"} -->
<p class="ke-foot__link"><a href="<?php echo katachi_ergonomics_url( '/journal/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fl_journal' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__link"} -->
<p class="ke-foot__link"><a href="<?php echo katachi_ergonomics_url( '/waitlist/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fl_waitlist' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__link"} -->
<p class="ke-foot__link"><a href="<?php echo katachi_ergonomics_url( '/book/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fl_book' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__link"} -->
<p class="ke-foot__link"><a href="<?php echo katachi_ergonomics_url( '/privacy/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fl_privacy' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-foot__link"} -->
<p class="ke-foot__link"><a href="<?php echo katachi_ergonomics_url( '/terms/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fl_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ke-wrap ke-foot__legal","layout":{"type":"default"}} -->
<div class="wp-block-group ke-wrap ke-foot__legal"><!-- wp:paragraph {"className":"ke-foot__copy"} -->
<p class="ke-foot__copy"><?php echo esc_html( katachi_ergonomics_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="ke-pagetop" href="#top"><span class="ke-pagetop__line" aria-hidden="true"></span><span class="ke-pagetop__t"><?php echo esc_html( katachi_ergonomics_t( 'top' ) ); ?></span></a>
<!-- /wp:html --></div>
<!-- /wp:group -->
