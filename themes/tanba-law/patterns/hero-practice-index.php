<?php
/**
 * Title: Home: practice index first screen
 * Slug: tanba-law/hero-practice-index
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Description: A tall old-purple banner beside the side rail with the firm line and a low-key office photograph at its foot; right, a 640px centred column with the label, headline, a matter search field, six filter chips and the first four practice index rows, with a cut-out desk lamp breaking over the column.
 */
?>
<!-- wp:group {"tagName":"section","className":"tb-hx","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tb-hx">
<!-- wp:html -->
<div class="tb-hx__banner"><p class="tb-hx__firm"><?php echo esc_html( tanba_law_t( 'hx_firm' ) ); ?></p><p class="tb-hx__firm2"><?php echo esc_html( tanba_law_t( 'hx_firm2' ) ); ?></p><figure class="tb-hx__ph"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office.webp' ) ); ?>" alt="<?php echo esc_attr( tanba_law_t( 'alt_office' ) ); ?>"/><figcaption><?php echo esc_html( tanba_law_t( 'hx_cap' ) ); ?></figcaption></figure></div>
<!-- /wp:html --><!-- wp:group {"className":"tb-hx__col","layout":{"type":"default"}} -->
<div class="wp-block-group tb-hx__col"><!-- wp:paragraph {"className":"tb-label"} -->
<p class="tb-label"><?php echo esc_html( tanba_law_t( 'hx_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tb-hx__h"} -->
<h1 class="wp-block-heading tb-hx__h"><?php echo esc_html( tanba_law_t( 'hx_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tb-hx__lead"} -->
<p class="tb-hx__lead"><?php echo esc_html( tanba_law_t( 'hx_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="tb-fx__search" role="search" method="get" action="/"><label class="screen-reader-text" for="tb-q"><?php echo esc_html( tanba_law_t( 'hx_ph' ) ); ?></label><input id="tb-q" type="search" name="s" placeholder="<?php echo esc_attr( tanba_law_t( 'hx_ph' ) ); ?>"/><button type="submit"><?php echo esc_html( tanba_law_t( 'hx_go' ) ); ?></button></form><div class="tb-fx__chips" role="group" aria-label="<?php echo esc_attr( tanba_law_t( 'hx_label' ) ); ?>"><input class="tb-fx__r" type="radio" name="tb-f" id="tb-f-all" checked/><label class="tb-fx__chip" for="tb-f-all"><?php echo esc_html( tanba_law_t( 'hx_all' ) ); ?></label><input class="tb-fx__r" type="radio" name="tb-f" id="tb-f-corporate"/><label class="tb-fx__chip" for="tb-f-corporate"><?php echo esc_html( tanba_law_t( 'hx_c1' ) ); ?></label><input class="tb-fx__r" type="radio" name="tb-f" id="tb-f-employment"/><label class="tb-fx__chip" for="tb-f-employment"><?php echo esc_html( tanba_law_t( 'hx_c2' ) ); ?></label><input class="tb-fx__r" type="radio" name="tb-f" id="tb-f-property"/><label class="tb-fx__chip" for="tb-f-property"><?php echo esc_html( tanba_law_t( 'hx_c3' ) ); ?></label><input class="tb-fx__r" type="radio" name="tb-f" id="tb-f-ip"/><label class="tb-fx__chip" for="tb-f-ip"><?php echo esc_html( tanba_law_t( 'hx_c4' ) ); ?></label><input class="tb-fx__r" type="radio" name="tb-f" id="tb-f-disputes"/><label class="tb-fx__chip" for="tb-f-disputes"><?php echo esc_html( tanba_law_t( 'hx_c5' ) ); ?></label><input class="tb-fx__r" type="radio" name="tb-f" id="tb-f-family"/><label class="tb-fx__chip" for="tb-f-family"><?php echo esc_html( tanba_law_t( 'hx_c6' ) ); ?></label></div><div class="tb-ix tb-ix--first"><img class="tb-hx__lamp" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lamp-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( tanba_law_t( 'alt_lamp' ) ); ?>"/><p class="tb-ix__g"><span>A</span><?php echo esc_html( tanba_law_t( 'ix_g1' ) ); ?></p><div class="tb-ix__hd" aria-hidden="true"><span><?php echo esc_html( tanba_law_t( 'ix_h_no' ) ); ?></span><span><?php echo esc_html( tanba_law_t( 'ix_h_p' ) ); ?></span><span><?php echo esc_html( tanba_law_t( 'ix_h_d' ) ); ?></span><span><?php echo esc_html( tanba_law_t( 'ix_h_w' ) ); ?></span></div><ol class="tb-ix__list"><li class="tb-ix__row" data-t="corporate"><a href="/practice-areas/"><span class="tb-ix__no">01</span><span class="tb-ix__p"><?php echo esc_html( tanba_law_t( 'ix1_p' ) ); ?></span><span class="tb-ix__d"><?php echo esc_html( tanba_law_t( 'ix1_d' ) ); ?></span><span class="tb-ix__w"><?php echo esc_html( tanba_law_t( 'ix1_w' ) ); ?></span><span class="tb-ix__ar" aria-hidden="true">&rarr;</span></a></li><li class="tb-ix__row" data-t="corporate"><a href="/practice-areas/"><span class="tb-ix__no">02</span><span class="tb-ix__p"><?php echo esc_html( tanba_law_t( 'ix2_p' ) ); ?></span><span class="tb-ix__d"><?php echo esc_html( tanba_law_t( 'ix2_d' ) ); ?></span><span class="tb-ix__w"><?php echo esc_html( tanba_law_t( 'ix2_w' ) ); ?></span><span class="tb-ix__ar" aria-hidden="true">&rarr;</span></a></li><li class="tb-ix__row" data-t="corporate"><a href="/practice-areas/"><span class="tb-ix__no">03</span><span class="tb-ix__p"><?php echo esc_html( tanba_law_t( 'ix3_p' ) ); ?></span><span class="tb-ix__d"><?php echo esc_html( tanba_law_t( 'ix3_d' ) ); ?></span><span class="tb-ix__w"><?php echo esc_html( tanba_law_t( 'ix3_w' ) ); ?></span><span class="tb-ix__ar" aria-hidden="true">&rarr;</span></a></li><li class="tb-ix__row" data-t="corporate ip"><a href="/practice-areas/"><span class="tb-ix__no">04</span><span class="tb-ix__p"><?php echo esc_html( tanba_law_t( 'ix4_p' ) ); ?></span><span class="tb-ix__d"><?php echo esc_html( tanba_law_t( 'ix4_d' ) ); ?></span><span class="tb-ix__w"><?php echo esc_html( tanba_law_t( 'ix4_w' ) ); ?></span><span class="tb-ix__ar" aria-hidden="true">&rarr;</span></a></li></ol></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
