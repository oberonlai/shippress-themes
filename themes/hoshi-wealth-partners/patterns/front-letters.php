<?php
/**
 * Title: Home: letters list
 * Slug: hoshi-wealth-partners/front-letters
 * Categories: hoshi-wealth-partners
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"hp-letters","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hp-letters"><!-- wp:group {"className":"hp-in hp-letters__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hp-in hp-letters__grid"><!-- wp:group {"className":"hp-letters__main","layout":{"type":"default"}} -->
<div class="wp-block-group hp-letters__main"><!-- wp:group {"className":"hp-letters__head","layout":{"type":"default"}} -->
<div class="wp-block-group hp-letters__head"><!-- wp:paragraph {"className":"hp-label hp-label--lg"} -->
<p class="hp-label hp-label--lg"><?php echo esc_html( hoshi_wealth_partners_t( 'letters_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-chips"} -->
<p class="hp-chips"><a class="is-on" href="/letters/"><?php echo esc_html( hoshi_wealth_partners_t( 'chip_all' ) ); ?></a><a href="/category/markets/"><?php echo esc_html( hoshi_wealth_partners_t( 'chip_markets' ) ); ?></a><a href="/category/planning/"><?php echo esc_html( hoshi_wealth_partners_t( 'chip_planning' ) ); ?></a><a href="/category/firm/"><?php echo esc_html( hoshi_wealth_partners_t( 'chip_firm' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"hp-letters__list"} -->
<div class="wp-block-query hp-letters__list"><!-- wp:post-template -->
<!-- wp:group {"className":"hp-letter sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hp-letter sp-reveal sp-reveal--up"><!-- wp:group {"className":"hp-letter__meta","layout":{"type":"default"}} -->
<div class="wp-block-group hp-letter__meta"><!-- wp:post-date {"format":"Y.m.d"} /--><!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --><!-- wp:post-title {"level":3,"isLink":true,"className":"hp-letter__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-letters__side","layout":{"type":"default"}} -->
<div class="wp-block-group hp-letters__side"><!-- wp:buttons {"className":"hp-btns"} -->
<div class="wp-block-buttons hp-btns"><!-- wp:button {"className":"hp-btn hp-btn--ink"} -->
<div class="wp-block-button hp-btn hp-btn--ink"><a class="wp-block-button__link wp-element-button" href="/letters/"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'btn_letters' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
