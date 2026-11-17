<?php
/**
 * Title: Home: journal (dotted news lines)
 * Slug: makiba-farmstay/front-journal
 * Categories: makiba-farmstay
 * Viewport Width: 1440
 * Description: Giant gold word JOURNAL and the three latest notes as dotted-rule lines with a date, a title and a circle arrow.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"journal","className":"mf-journal mf-grain","layout":{"type":"default"}} -->
<section id="journal" class="wp-block-group alignfull mf-journal mf-grain"><!-- wp:group {"className":"mf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mf-wrap"><!-- wp:group {"className":"mf-s1","layout":{"type":"default"}} -->
<div class="wp-block-group mf-s1"><!-- wp:heading {"level":2,"className":"mf-giant"} -->
<h2 class="wp-block-heading mf-giant"><?php echo wp_kses_post( makiba_farmstay_t( 'k3dbae2c6' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-sub"} -->
<p class="mf-sub"><?php echo wp_kses_post( makiba_farmstay_t( 'k89fd4eb2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<svg class="mf-s1__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="#A1A46D" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M5 3h10v14H5z"/><path d="M8 7h4M8 10h4M8 13h3"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mf-lead"} -->
<p class="mf-lead"><?php echo wp_kses_post( makiba_farmstay_t( 'kf06c2e6c' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up"><!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"mf-news"} -->
<div class="wp-block-query mf-news"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"mf-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group mf-newsrow"><!-- wp:post-date {"format":"j F","className":"mf-newsrow__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mf-newsrow__t"} /-->

<!-- wp:html -->
<svg class="mf-arrow" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="15.5"/><path d="M11 16h10M17.5 12.5 21 16l-3.5 3.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mf-more"} -->
<p class="mf-more"><a href="/journal/"><?php echo wp_kses_post( makiba_farmstay_t( 'k363636a3' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
