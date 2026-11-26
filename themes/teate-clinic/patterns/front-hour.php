<?php
/**
 * Title: Home: the first hour, minutes ledger
 * Slug: teate-clinic/front-hour
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Seven-five grid: the first hour as a ruled ledger of minutes with a count-up, the four-line visit flow and the two entry boxes; a portrait photograph on the right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"first-hour","align":"full","className":"tc-sec tc-sec--hour","layout":{"type":"default"}} -->
<section id="first-hour" class="wp-block-group alignfull tc-sec tc-sec--hour">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'hour_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hlabel"} -->
<p class="tc-hlabel"><?php echo esc_html( teate_clinic_t( 'hour_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split">
<!-- wp:group {"className":"tc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__main">
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'hour_intro' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="tc-ledger tc-ledger--hour"><div class="tc-ledger__block"><div class="tc-ledger__row tc-ledger__row--big"><span class="tc-ledger__l sp-reveal sp-count">10 <small><?php echo esc_html( teate_clinic_t( 'min' ) ); ?></small></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hour_1_h' ) ); ?></span></div><p class="tc-note"><?php echo esc_html( teate_clinic_t( 'hour_1_p' ) ); ?></p></div><div class="tc-ledger__block"><div class="tc-ledger__row tc-ledger__row--big"><span class="tc-ledger__l sp-reveal sp-count">15 <small><?php echo esc_html( teate_clinic_t( 'min' ) ); ?></small></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hour_2_h' ) ); ?></span></div><p class="tc-note"><?php echo esc_html( teate_clinic_t( 'hour_2_p' ) ); ?></p></div><div class="tc-ledger__block"><div class="tc-ledger__row tc-ledger__row--big"><span class="tc-ledger__l sp-reveal sp-count">25 <small><?php echo esc_html( teate_clinic_t( 'min' ) ); ?></small></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hour_3_h' ) ); ?></span></div><p class="tc-note"><?php echo esc_html( teate_clinic_t( 'hour_3_p' ) ); ?></p></div><div class="tc-ledger__block"><div class="tc-ledger__row tc-ledger__row--big"><span class="tc-ledger__l sp-reveal sp-count">10 <small><?php echo esc_html( teate_clinic_t( 'min' ) ); ?></small></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hour_4_h' ) ); ?></span></div><p class="tc-note"><?php echo esc_html( teate_clinic_t( 'hour_4_p' ) ); ?></p></div></div>
<!-- /wp:html -->
<!-- wp:html -->
<ol class="tc-flow"><li><span class="tc-flow__n">01</span><span><?php echo esc_html( teate_clinic_t( 'flow_1' ) ); ?></span></li><li><span class="tc-flow__n">02</span><span><?php echo esc_html( teate_clinic_t( 'flow_2' ) ); ?></span></li><li><span class="tc-flow__n">03</span><span><?php echo esc_html( teate_clinic_t( 'flow_3' ) ); ?></span></li><li><span class="tc-flow__n">04</span><span><?php echo esc_html( teate_clinic_t( 'flow_4' ) ); ?></span></li></ol>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"tc-note tc-note--p"} -->
<p class="tc-note tc-note--p"><?php echo esc_html( teate_clinic_t( 'hour_book' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="tc-boxes tc-boxes--hour"><a class="tc-box tc-box--a" href="/first-visit/"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_first' ) ); ?></span><span class="tc-box__sub"><?php echo esc_html( teate_clinic_t( 'box_first_sub' ) ); ?></span></a><a class="tc-box tc-box--b" href="/book/"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_ret' ) ); ?></span><span class="tc-box__sub"><?php echo esc_html( teate_clinic_t( 'box_ret_sub' ) ); ?></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__side">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-portrait"} -->
<figure class="wp-block-image size-full tc-portrait"><img src="<?php echo teate_clinic_img( 'method-movement.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
