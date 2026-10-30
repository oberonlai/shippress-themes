<?php
/**
 * Title: Footer: details
 * Slug: kensa-laboratory/foot-main
 * Categories: kensa-laboratory
 * Keywords: materials testing, laboratory, concrete
 * Viewport Width: 1440
 * Description: Light menu row, steel-dark copyright bar and the page-top button.
 */
?>
<!-- wp:group {"align":"full","className":"kl-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kl-foot"><!-- wp:group {"className":"kl-foot__menu-row","layout":{"type":"default"}} -->
<div class="wp-block-group kl-foot__menu-row"><!-- wp:paragraph {"className":"kl-foot__addr"} -->
<p class="kl-foot__addr"><?php echo esc_html( kensa_laboratory_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="kl-foot__menu"><li><a href="/#tests"><?php echo esc_html( kensa_laboratory_t( 'fm_0' ) ); ?></a></li><li><a href="/#send"><?php echo esc_html( kensa_laboratory_t( 'fm_1' ) ); ?></a></li><li><a href="/#fees"><?php echo esc_html( kensa_laboratory_t( 'fm_2' ) ); ?></a></li><li><a href="/#lab"><?php echo esc_html( kensa_laboratory_t( 'fm_3' ) ); ?></a></li><li><a href="/#faq"><?php echo esc_html( kensa_laboratory_t( 'fm_4' ) ); ?></a></li><li><a href="/sample-log/"><?php echo esc_html( kensa_laboratory_t( 'fm_5' ) ); ?></a></li><li><a href="/cases/"><?php echo esc_html( kensa_laboratory_t( 'fm_8' ) ); ?></a></li><li><a href="/book/"><?php echo esc_html( kensa_laboratory_t( 'fm_9' ) ); ?></a></li><li><a href="/newsletter/"><?php echo esc_html( kensa_laboratory_t( 'fm_10' ) ); ?></a></li><li><a href="/privacy/"><?php echo esc_html( kensa_laboratory_t( 'fm_6' ) ); ?></a></li><li><a href="/terms/"><?php echo esc_html( kensa_laboratory_t( 'fm_7' ) ); ?></a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-foot__bar","layout":{"type":"default"}} -->
<div class="wp-block-group kl-foot__bar"><!-- wp:paragraph {"className":"kl-foot__copy"} -->
<p class="kl-foot__copy"><?php echo esc_html( kensa_laboratory_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="kl-top" href="#top" aria-label="<?php echo esc_attr( kensa_laboratory_t( 'to_top' ) ); ?>"><svg viewBox="0 0 20 20" width="20" height="20" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12l6-6 6 6"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group -->
