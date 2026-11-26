<?php
/**
 * Title: Home: two clinicians
 * Slug: teate-clinic/front-clinicians
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Two equal columns: portrait, name, role, a short account, working days and what each is best for.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"clinicians","align":"full","className":"tc-sec tc-sec--clin","layout":{"type":"default"}} -->
<section id="clinicians" class="wp-block-group alignfull tc-sec tc-sec--clin">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'clin_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hlabel"} -->
<p class="tc-hlabel"><?php echo esc_html( teate_clinic_t( 'clin_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-profs sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group tc-profs sp-stagger">
<!-- wp:group {"className":"tc-prof sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prof sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-portrait tc-prof__img"} -->
<figure class="wp-block-image size-full tc-portrait tc-prof__img"><img src="<?php echo teate_clinic_img( 'clinician-maren.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-prof__body","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prof__body">
<!-- wp:heading {"level":3,"className":"tc-h3 tc-prof__name"} -->
<h3 class="wp-block-heading tc-h3 tc-prof__name"><?php echo esc_html( teate_clinic_t( 'prof_maren_name' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-prof__role"} -->
<p class="tc-prof__role"><?php echo esc_html( teate_clinic_t( 'prof_maren_role' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-prof__p"} -->
<p class="tc-prof__p"><?php echo esc_html( teate_clinic_t( 'prof_maren_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="tc-ledger tc-ledger--mini"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'days_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'prof_maren_days' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'best_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'prof_maren_best' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-prof sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prof sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-portrait tc-prof__img"} -->
<figure class="wp-block-image size-full tc-portrait tc-prof__img"><img src="<?php echo teate_clinic_img( 'clinician-kofi.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-prof__body","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prof__body">
<!-- wp:heading {"level":3,"className":"tc-h3 tc-prof__name"} -->
<h3 class="wp-block-heading tc-h3 tc-prof__name"><?php echo esc_html( teate_clinic_t( 'prof_kofi_name' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-prof__role"} -->
<p class="tc-prof__role"><?php echo esc_html( teate_clinic_t( 'prof_kofi_role' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-prof__p"} -->
<p class="tc-prof__p"><?php echo esc_html( teate_clinic_t( 'prof_kofi_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="tc-ledger tc-ledger--mini"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'days_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'prof_kofi_days' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'best_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'prof_kofi_best' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tc-more"} -->
<p class="tc-more"><a href="/clinicians/"><?php echo esc_html( teate_clinic_t( 'clin_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
