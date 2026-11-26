<?php
/**
 * Title: Home: notices and hours ledger
 * Slug: teate-clinic/front-notices
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Two columns: dated notice rows with dotted dividers, and the hours as a ruled ledger with celadon labels.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"hours","align":"full","className":"tc-sec tc-sec--notices","layout":{"type":"default"}} -->
<section id="hours" class="wp-block-group alignfull tc-sec tc-sec--notices">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-pair","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pair">
<!-- wp:group {"className":"tc-pair__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pair__col">
<!-- wp:group {"className":"tc-hrow tc-hrow--s","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow tc-hrow--s">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'notices_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hlabel"} -->
<p class="tc-hlabel"><?php echo esc_html( teate_clinic_t( 'notices_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ul class="tc-notices"><li class="tc-notice"><a href="/notes/"><span class="tc-notice__d"><?php echo esc_html( teate_clinic_t( 'n1_d' ) ); ?></span><span class="tc-notice__t"><?php echo esc_html( teate_clinic_t( 'n1_t' ) ); ?></span><span class="tc-notice__by"><?php echo esc_html( teate_clinic_t( 'n1_by' ) ); ?></span></a></li><li class="tc-notice"><a href="/notes/"><span class="tc-notice__d"><?php echo esc_html( teate_clinic_t( 'n2_d' ) ); ?></span><span class="tc-notice__t"><?php echo esc_html( teate_clinic_t( 'n2_t' ) ); ?></span><span class="tc-notice__by"><?php echo esc_html( teate_clinic_t( 'n2_by' ) ); ?></span></a></li><li class="tc-notice"><a href="/notes/"><span class="tc-notice__d"><?php echo esc_html( teate_clinic_t( 'n3_d' ) ); ?></span><span class="tc-notice__t"><?php echo esc_html( teate_clinic_t( 'n3_t' ) ); ?></span><span class="tc-notice__by"><?php echo esc_html( teate_clinic_t( 'n3_by' ) ); ?></span></a></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"tc-more"} -->
<p class="tc-more"><a href="/notes/"><?php echo esc_html( teate_clinic_t( 'notices_all' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-pair__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pair__col">
<!-- wp:group {"className":"tc-hrow tc-hrow--s","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow tc-hrow--s">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'hours_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hlabel"} -->
<p class="tc-hlabel"><?php echo esc_html( teate_clinic_t( 'hours_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="tc-ledger"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'hr_open' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hr_open_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'hr_sat' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hr_sat_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'hr_closed' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hr_closed_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'hr_phone' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hr_phone_v' ) ); ?></span></div></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"tc-note"} -->
<p class="tc-note"><?php echo esc_html( teate_clinic_t( 'hr_note1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-note"} -->
<p class="tc-note"><?php echo esc_html( teate_clinic_t( 'hr_note2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
