<?php
/**
 * Title: Home: notes
 * Slug: sokuten-survey/front-notes
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-sec ss-notesec","tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section id="notes" class="wp-block-group alignfull ss-sec ss-notesec">
<!-- wp:group {"className":"ss-notes__head","layout":{"type":"default"}} -->
<div class="wp-block-group ss-notes__head">
<!-- wp:group {"className":"ss-notes__titles","layout":{"type":"default"}} -->
<div class="wp-block-group ss-notes__titles">
<!-- wp:paragraph {"className":"ss-eyebrow"} -->
<p class="ss-eyebrow"><?php echo esc_html( sokuten_survey_t( 'eb_notes' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-h2"} -->
<h2 class="wp-block-heading ss-h2"><?php echo esc_html( sokuten_survey_t( 'notes_h2' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ss-btn-wrap","layout":{"type":"flex"}} -->
<div class="wp-block-buttons ss-btn-wrap"><!-- wp:button {"className":"is-style-outline ss-btn"} -->
<div class="wp-block-button is-style-outline ss-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/notes/' ) ); ?>"><?php echo esc_html( sokuten_survey_t( 'notes_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-intro ss-notes__intro"} -->
<p class="ss-intro ss-notes__intro"><?php echo esc_html( sokuten_survey_t( 'notes_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":21,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ss-notes"} -->
<div class="wp-block-query ss-notes"><!-- wp:post-template {"className":"ss-notes__list"} -->
<!-- wp:group {"className":"ss-note","layout":{"type":"default"}} -->
<div class="wp-block-group ss-note"><!-- wp:post-date {"format":"Y.m.d","className":"ss-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ss-note__title"} /-->

<!-- wp:post-terms {"term":"category","className":"ss-chip"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
</section>
<!-- /wp:group -->
