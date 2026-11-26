<?php
/**
 * Title: Page: Contact
 * Slug: teate-clinic/page-contact
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Contact: split head, anchor sheet, address and hours ledgers, getting here, access, contact form slot with mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"tc-sec tc-phead","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull tc-sec tc-phead">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-phead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-phead__photo"} -->
<figure class="wp-block-image size-full tc-phead__photo"><img src="<?php echo teate_clinic_img( 'contact-door.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-phead__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__side">
<!-- wp:group {"className":"tc-card tc-card--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--page">
<!-- wp:paragraph {"className":"tc-card__kicker"} -->
<p class="tc-card__kicker"><?php echo esc_html( teate_clinic_t( 'card_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-phead__h1"} -->
<h1 class="wp-block-heading tc-phead__h1"><?php echo esc_html( teate_clinic_t( 'contact_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:separator {"className":"tc-card__rule","opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity tc-card__rule"/>
<!-- /wp:separator -->
<!-- wp:paragraph {"className":"tc-phead__lede"} -->
<p class="tc-phead__lede"><?php echo esc_html( teate_clinic_t( 'contact_lede' ) ); ?></p>
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
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-psheet","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-psheet">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:html -->
<nav class="tc-sheet" aria-label="<?php echo teate_clinic_a( 'sheet_page' ); ?>"><a class="tc-sheet__cell" href="#address"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M18 33s11-10 11-18a11 11 0 0 0-22 0c0 8 11 18 11 18z"/><circle cx="18" cy="15" r="4"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_contact_1' ) ); ?></span></a><a class="tc-sheet__cell" href="#hours"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="18" cy="18" r="13"/><path d="M18 9v9l6 4"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_contact_2' ) ); ?></span></a><a class="tc-sheet__cell" href="#getting"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 30h24M10 30V10h16v20M14 16h8M14 22h8"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_contact_3' ) ); ?></span></a><a class="tc-sheet__cell" href="#access"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="18" cy="9" r="3"/><path d="M18 14v9M12 18h12M14 31l4-8 4 8"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_contact_4' ) ); ?></span></a><a class="tc-sheet__cell" href="#write"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="5" y="9" width="26" height="18" rx="3"/><path d="M6 11l12 9 12-9"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_contact_5' ) ); ?></span></a></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-psec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-psec">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'contact_0_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split">
<!-- wp:group {"className":"tc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__main">
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'contact_0_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'contact_0_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__side">
<!-- wp:html -->
<div id="address"><div class="tc-ledger"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'ct_1_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'ct_1_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'ct_2_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'ct_2_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'ct_3_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'ct_3_v' ) ); ?></span></div></div></div>
<!-- /wp:html -->
<!-- wp:html -->
<div id="hours" class="tc-ledger-gap"><div class="tc-ledger"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'hr_open' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hr_open_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'hr_sat' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hr_sat_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'hr_closed' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hr_closed_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'hr_phone' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hr_phone_v' ) ); ?></span></div></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"getting","align":"full","className":"tc-sec tc-prow tc-prow--alt","layout":{"type":"default"}} -->
<section id="getting" class="wp-block-group alignfull tc-sec tc-prow tc-prow--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'contact_1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'contact_1_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'contact_1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"access","align":"full","className":"tc-sec tc-prow ","layout":{"type":"default"}} -->
<section id="access" class="wp-block-group alignfull tc-sec tc-prow ">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'contact_2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'contact_2_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'contact_2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"write","align":"full","className":"tc-sec tc-psec tc-psec--alt","layout":{"type":"default"}} -->
<section id="write" class="wp-block-group alignfull tc-sec tc-psec tc-psec--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'contact_3_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'contact_3_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'contact_3_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tc-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-formwrap">
<?php
ob_start(); ?>
<!-- wp:paragraph {"className":"tc-note"} -->
<p class="tc-note"><?php echo esc_html( teate_clinic_t( 'contact_fallback_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"tc-btn"} -->
<div class="wp-block-button tc-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@teate-clinic.example?subject=<?php echo rawurlencode( teate_clinic_t( 'contact_mail_subject' ) ); ?>"><?php echo esc_html( teate_clinic_t( 'contact_email_button' ) ); ?></a></div>
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
