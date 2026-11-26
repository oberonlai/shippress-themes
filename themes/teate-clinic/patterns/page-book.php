<?php
/**
 * Title: Page: Book a visit
 * Slug: teate-clinic/page-book
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Book: split head, before-you-come ledger, bookable prices, booking form slot with mailto fallback, phone and hours.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"tc-sec tc-phead","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull tc-sec tc-phead">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-phead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-phead__photo"} -->
<figure class="wp-block-image size-full tc-phead__photo"><img src="<?php echo teate_clinic_img( 'visit-reception.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-phead__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__side">
<!-- wp:group {"className":"tc-card tc-card--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--page">
<!-- wp:paragraph {"className":"tc-card__kicker"} -->
<p class="tc-card__kicker"><?php echo esc_html( teate_clinic_t( 'card_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-phead__h1"} -->
<h1 class="wp-block-heading tc-phead__h1"><?php echo esc_html( teate_clinic_t( 'book_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:separator {"className":"tc-card__rule","opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity tc-card__rule"/>
<!-- /wp:separator -->
<!-- wp:paragraph {"className":"tc-phead__lede"} -->
<p class="tc-phead__lede"><?php echo esc_html( teate_clinic_t( 'book_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="tc-boxes"><a class="tc-box tc-box--a" href="/book/"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_bookfirst' ) ); ?></span></a><a class="tc-box tc-box--b" href="tel:+00445550172"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_call' ) ); ?></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"before","align":"full","className":"tc-sec tc-psec","layout":{"type":"default"}} -->
<section id="before" class="wp-block-group alignfull tc-sec tc-psec">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'book_0_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split">
<!-- wp:group {"className":"tc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__main">
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'book_0_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'book_0_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__side">
<!-- wp:html -->
<div class="tc-ledger"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'bk_1_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'bk_1_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'bk_2_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'bk_2_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'bk_3_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'bk_3_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'bk_4_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'bk_4_v' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"visits","align":"full","className":"tc-sec tc-psec tc-psec--alt","layout":{"type":"default"}} -->
<section id="visits" class="wp-block-group alignfull tc-sec tc-psec tc-psec--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'book_1_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split">
<!-- wp:group {"className":"tc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__main">
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'book_1_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'book_1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__side">
<!-- wp:html -->
<div class="tc-ledger"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'price_1_v' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'price_1_p' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'price_2_v' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'price_2_p' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'price_3_v' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'price_3_p' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'price_4_v' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'price_4_p' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"form","align":"full","className":"tc-sec tc-psec","layout":{"type":"default"}} -->
<section id="form" class="wp-block-group alignfull tc-sec tc-psec">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'book_2_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'book_2_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'book_2_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tc-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-formwrap">
<?php
ob_start(); ?>
<!-- wp:paragraph {"className":"tc-note"} -->
<p class="tc-note"><?php echo esc_html( teate_clinic_t( 'book_fallback_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"tc-btn"} -->
<div class="wp-block-button tc-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@teate-clinic.example?subject=<?php echo rawurlencode( teate_clinic_t( 'book_mail_subject' ) ); ?>"><?php echo esc_html( teate_clinic_t( 'book_email_button' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
?>
<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"phone","align":"full","className":"tc-sec tc-psec tc-psec--alt","layout":{"type":"default"}} -->
<section id="phone" class="wp-block-group alignfull tc-sec tc-psec tc-psec--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'book_3_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split">
<!-- wp:group {"className":"tc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__main">
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'book_3_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'book_3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__side">
<!-- wp:html -->
<div class="tc-ledger"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'bk_ph_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'bk_ph_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'bk_op_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'bk_op_v' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
