<?php
/**
 * Title: Page: Book tonight
 * Slug: michikusa-lodge/page-book-tonight
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Description: Book tonight: a static copy of the home booking bar, four numbered steps, desk ledger, request form slot with an email fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ml-sec ml-sec--in ml-sec--first","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-sec ml-sec--in ml-sec--first"><!-- wp:group {"className":"ml-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap"><!-- wp:paragraph {"className":"ml-pagesub"} -->
<p class="ml-pagesub"><?php echo esc_html( michikusa_lodge_t( 'bk_sub' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"ml-intro sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group ml-intro sp-reveal sp-reveal--zoom"><!-- wp:paragraph {"className":"ml-intro__p"} -->
<p class="ml-intro__p"><?php echo esc_html( michikusa_lodge_t( 'bk_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ml-sec ml-sec--in ml-sec--bar","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-sec ml-sec--in ml-sec--bar"><!-- wp:group {"className":"ml-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap"><!-- wp:group {"className":"ml-barecho","layout":{"type":"default"}} -->
<div class="wp-block-group ml-barecho"><!-- wp:group {"className":"ml-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ml-cell"><!-- wp:paragraph {"className":"ml-cell__l"} -->
<p class="ml-cell__l"><?php echo esc_html( michikusa_lodge_t( 'bar_l1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-cell__v"} -->
<p class="ml-cell__v"><?php echo esc_html( michikusa_lodge_t( 'bar_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ml-cell"><!-- wp:paragraph {"className":"ml-cell__l"} -->
<p class="ml-cell__l"><?php echo esc_html( michikusa_lodge_t( 'bar_l2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-cell__v"} -->
<p class="ml-cell__v"><?php echo esc_html( michikusa_lodge_t( 'bar_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ml-cell"><!-- wp:paragraph {"className":"ml-cell__l"} -->
<p class="ml-cell__l"><?php echo esc_html( michikusa_lodge_t( 'bar_l3' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-cell__v"} -->
<p class="ml-cell__v"><?php echo esc_html( michikusa_lodge_t( 'bar_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ml-cell"><!-- wp:paragraph {"className":"ml-cell__l"} -->
<p class="ml-cell__l"><?php echo esc_html( michikusa_lodge_t( 'bar_l4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-cell__v"} -->
<p class="ml-cell__v"><?php echo esc_html( michikusa_lodge_t( 'bar_v4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ml-bookbtn"} -->
<div class="wp-block-button ml-bookbtn"><a class="wp-block-button__link wp-element-button" href="#request"><?php echo esc_html( michikusa_lodge_t( 'bk_bar_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ml-sec ml-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-sec ml-sec--in"><!-- wp:group {"className":"ml-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap"><!-- wp:group {"className":"ml-band sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ml-band sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ml-band__h"} -->
<h2 class="wp-block-heading ml-band__h"><?php echo esc_html( michikusa_lodge_t( 'bk_b1' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-band__sub"} -->
<p class="ml-band__sub"><?php echo esc_html( michikusa_lodge_t( 'bk_b1_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-prose","layout":{"type":"default"}} -->
<div class="wp-block-group ml-prose"><!-- wp:paragraph -->
<p><?php echo esc_html( michikusa_lodge_t( 'bk_s1_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-steps","layout":{"type":"default"}} -->
<div class="wp-block-group ml-steps"><!-- wp:group {"className":"ml-step","layout":{"type":"default"}} -->
<div class="wp-block-group ml-step"><!-- wp:paragraph {"className":"ml-step__n"} -->
<p class="ml-step__n">1</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-step__t"} -->
<p class="ml-step__t"><?php echo esc_html( michikusa_lodge_t( 'bk_s1_st1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-step","layout":{"type":"default"}} -->
<div class="wp-block-group ml-step"><!-- wp:paragraph {"className":"ml-step__n"} -->
<p class="ml-step__n">2</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-step__t"} -->
<p class="ml-step__t"><?php echo esc_html( michikusa_lodge_t( 'bk_s1_st2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-step","layout":{"type":"default"}} -->
<div class="wp-block-group ml-step"><!-- wp:paragraph {"className":"ml-step__n"} -->
<p class="ml-step__n">3</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-step__t"} -->
<p class="ml-step__t"><?php echo esc_html( michikusa_lodge_t( 'bk_s1_st3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-step","layout":{"type":"default"}} -->
<div class="wp-block-group ml-step"><!-- wp:paragraph {"className":"ml-step__n"} -->
<p class="ml-step__n">4</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-step__t"} -->
<p class="ml-step__t"><?php echo esc_html( michikusa_lodge_t( 'bk_s1_st4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ml-sec ml-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-sec ml-sec--in"><!-- wp:group {"className":"ml-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap"><!-- wp:group {"className":"ml-band sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ml-band sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ml-band__h"} -->
<h2 class="wp-block-heading ml-band__h"><?php echo esc_html( michikusa_lodge_t( 'bk_b2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-band__sub"} -->
<p class="ml-band__sub"><?php echo esc_html( michikusa_lodge_t( 'bk_b2_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-prose","layout":{"type":"default"}} -->
<div class="wp-block-group ml-prose"><!-- wp:paragraph -->
<p><?php echo esc_html( michikusa_lodge_t( 'bk_s2_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( michikusa_lodge_t( 'bk_s2_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-facts","layout":{"type":"default"}} -->
<div class="wp-block-group ml-facts"><!-- wp:group {"className":"ml-fact","layout":{"type":"default"}} -->
<div class="wp-block-group ml-fact"><!-- wp:paragraph {"className":"ml-fact__k"} -->
<p class="ml-fact__k"><?php echo esc_html( michikusa_lodge_t( 'bk_f2_1k' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-fact__v"} -->
<p class="ml-fact__v"><?php echo esc_html( michikusa_lodge_t( 'bk_f2_1v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-fact","layout":{"type":"default"}} -->
<div class="wp-block-group ml-fact"><!-- wp:paragraph {"className":"ml-fact__k"} -->
<p class="ml-fact__k"><?php echo esc_html( michikusa_lodge_t( 'bk_f2_2k' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-fact__v"} -->
<p class="ml-fact__v"><?php echo esc_html( michikusa_lodge_t( 'bk_f2_2v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-fact","layout":{"type":"default"}} -->
<div class="wp-block-group ml-fact"><!-- wp:paragraph {"className":"ml-fact__k"} -->
<p class="ml-fact__k"><?php echo esc_html( michikusa_lodge_t( 'bk_f2_3k' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-fact__v"} -->
<p class="ml-fact__v"><?php echo esc_html( michikusa_lodge_t( 'bk_f2_3v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-fact","layout":{"type":"default"}} -->
<div class="wp-block-group ml-fact"><!-- wp:paragraph {"className":"ml-fact__k"} -->
<p class="ml-fact__k"><?php echo esc_html( michikusa_lodge_t( 'bk_f2_4k' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-fact__v"} -->
<p class="ml-fact__v"><?php echo esc_html( michikusa_lodge_t( 'bk_f2_4v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ml-sec ml-sec--in ml-sec--form","anchor":"request","layout":{"type":"default"}} -->
<section id="request" class="wp-block-group alignfull ml-sec ml-sec--in ml-sec--form"><!-- wp:group {"className":"ml-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap"><!-- wp:group {"className":"ml-band sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ml-band sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ml-band__h"} -->
<h2 class="wp-block-heading ml-band__h"><?php echo esc_html( michikusa_lodge_t( 'bk_b3' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-band__sub"} -->
<p class="ml-band__sub"><?php echo esc_html( michikusa_lodge_t( 'bk_b3_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-panel","layout":{"type":"default"}} -->
<div class="wp-block-group ml-panel"><?php
ob_start(); ?>
<div class="wp-block-buttons"><div class="wp-block-button ml-btn ml-mail"><a class="wp-block-button__link wp-element-button" href="mailto:desk@michikusa-lodge.example?subject=<?php echo rawurlencode( michikusa_lodge_t( 'book_mail_subject' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'book_email_button' ) ); ?></a></div></div>
<p class="ml-mail__call"><?php echo esc_html( michikusa_lodge_t( 'book_call_line' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"ml-prices__note"} -->
<p class="ml-prices__note"><?php echo esc_html( michikusa_lodge_t( 'bk_cancel' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
