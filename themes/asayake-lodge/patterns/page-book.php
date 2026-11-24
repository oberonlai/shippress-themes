<?php
/**
 * Title: Page: Ask for a bed
 * Slug: asayake-lodge/page-book
 * Categories: asayake-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: Inner page: head with the four steps docked, request form slot with the mailto fallback, direct contact, before-you-write card.
 */
?>
<?php
ob_start(); ?>
<!-- wp:buttons {"className":"al-btn al-btn--fill-wrap"} -->
<div class="wp-block-buttons al-btn al-btn--fill-wrap"><!-- wp:button {"className":"al-btn al-btn--fill"} -->
<div class="wp-block-button al-btn al-btn--fill"><a class="wp-block-button__link wp-element-button" href="mailto:stay@asayake-lodge.example?subject=<?php echo rawurlencode( asayake_lodge_t( 'book_mail_subject' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'book_email_button' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$al_fallback = ob_get_clean();
?>
<!-- wp:group {"tagName":"section","align":"full","className":"al-field al-field--bar","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-field al-field--bar"><!-- wp:group {"className":"al-bar","layout":{"type":"default"}} -->
<div class="wp-block-group al-bar"><!-- wp:group {"className":"al-cell","layout":{"type":"default"}} -->
<div class="wp-block-group al-cell"><!-- wp:paragraph {"className":"al-cell__l"} -->
<p class="al-cell__l"><?php echo esc_html( asayake_lodge_t( 'bk_c1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-cell__v"} -->
<p class="al-cell__v"><?php echo esc_html( asayake_lodge_t( 'bk_c1_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-cell","layout":{"type":"default"}} -->
<div class="wp-block-group al-cell"><!-- wp:paragraph {"className":"al-cell__l"} -->
<p class="al-cell__l"><?php echo esc_html( asayake_lodge_t( 'bk_c2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-cell__v"} -->
<p class="al-cell__v"><?php echo esc_html( asayake_lodge_t( 'bk_c2_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-cell","layout":{"type":"default"}} -->
<div class="wp-block-group al-cell"><!-- wp:paragraph {"className":"al-cell__l"} -->
<p class="al-cell__l"><?php echo esc_html( asayake_lodge_t( 'bk_c3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-cell__v"} -->
<p class="al-cell__v"><?php echo esc_html( asayake_lodge_t( 'bk_c3_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-cell","layout":{"type":"default"}} -->
<div class="wp-block-group al-cell"><!-- wp:paragraph {"className":"al-cell__l"} -->
<p class="al-cell__l"><?php echo esc_html( asayake_lodge_t( 'bk_c4_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-cell__v"} -->
<p class="al-cell__v"><?php echo esc_html( asayake_lodge_t( 'bk_c4_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"al-sec al-lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-sec al-lead"><!-- wp:paragraph {"className":"al-lead__p"} -->
<p class="al-lead__p"><?php echo esc_html( asayake_lodge_t( 'book_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"al-sec al-splitsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-sec al-splitsec"><!-- wp:group {"className":"al-split","layout":{"type":"default"}} -->
<div class="wp-block-group al-split"><!-- wp:group {"className":"al-split__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group al-split__media sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"al-split__img"} -->
<figure class="wp-block-image size-full al-split__img"><img src="<?php echo asayake_lodge_img( 'p10-room-key.webp' ); ?>" alt="<?php echo asayake_lodge_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group al-split__text"><!-- wp:heading {"level":2,"className":"al-h2 al-h2--sm"} -->
<h2 class="wp-block-heading al-h2 al-h2--sm"><?php echo esc_html( asayake_lodge_t( 'book_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"al-body"} -->
<p class="al-body"><?php echo esc_html( asayake_lodge_t( 'book_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"al-sec al-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-sec al-notes"><!-- wp:heading {"level":2,"className":"al-notes__h"} -->
<h2 class="wp-block-heading al-notes__h"><?php echo esc_html( asayake_lodge_t( 'bk_t3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"al-notes__card","layout":{"type":"default"}} -->
<div class="wp-block-group al-notes__card"><!-- wp:group {"className":"al-note","layout":{"type":"default"}} -->
<div class="wp-block-group al-note"><!-- wp:html -->
<svg viewBox="0 0 28 28" width="28" height="28" aria-hidden="true" focusable="false"><circle cx="14" cy="14" r="12.5" fill="none" stroke="#D69A5C" stroke-width="1.5"/><rect x="8" y="9.5" width="12" height="9" rx="1.6" fill="none" stroke="#D69A5C" stroke-width="1.5"/><path d="M11 14h6M11 16.5h4" stroke="#D69A5C" stroke-width="1.5" stroke-linecap="round"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"al-note__t"} -->
<p class="al-note__t"><?php echo esc_html( asayake_lodge_t( 'bk_t3_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-note","layout":{"type":"default"}} -->
<div class="wp-block-group al-note"><!-- wp:html -->
<svg viewBox="0 0 28 28" width="28" height="28" aria-hidden="true" focusable="false"><circle cx="14" cy="14" r="12.5" fill="none" stroke="#D69A5C" stroke-width="1.5"/><circle cx="14" cy="10.5" r="2.5" fill="none" stroke="#D69A5C" stroke-width="1.5"/><path d="M9.5 19c.6-3 2.2-4.5 4.5-4.5s3.900 1.500 4.500 4.500" fill="none" stroke="#D69A5C" stroke-width="1.5" stroke-linecap="round"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"al-note__t"} -->
<p class="al-note__t"><?php echo esc_html( asayake_lodge_t( 'bk_t3_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-note","layout":{"type":"default"}} -->
<div class="wp-block-group al-note"><!-- wp:html -->
<svg viewBox="0 0 28 28" width="28" height="28" aria-hidden="true" focusable="false"><circle cx="14" cy="14" r="12.5" fill="none" stroke="#D69A5C" stroke-width="1.5"/><path d="M8 19v-7M8 16h12v3M20 16v-2.500a2.500 2.500 0 0 0-2.500-2.500H13" fill="none" stroke="#D69A5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"al-note__t"} -->
<p class="al-note__t"><?php echo esc_html( asayake_lodge_t( 'bk_t3_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-note","layout":{"type":"default"}} -->
<div class="wp-block-group al-note"><!-- wp:html -->
<svg viewBox="0 0 28 28" width="28" height="28" aria-hidden="true" focusable="false"><circle cx="14" cy="14" r="12.5" fill="none" stroke="#D69A5C" stroke-width="1.5"/><path d="M16.5 8.5a6 6 0 1 0 3 9.5 5 5 0 0 1-3-9.5z" fill="none" stroke="#D69A5C" stroke-width="1.5" stroke-linejoin="round"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"al-note__t"} -->
<p class="al-note__t"><?php echo esc_html( asayake_lodge_t( 'bk_t3_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"form","className":"al-sec al-formsec","layout":{"type":"default"}} -->
<section id="form" class="wp-block-group alignfull al-sec al-formsec"><!-- wp:group {"className":"al-formcard","layout":{"type":"default"}} -->
<div class="wp-block-group al-formcard"><!-- wp:heading {"level":2,"className":"al-h2 al-h2--sm"} -->
<h2 class="wp-block-heading al-h2 al-h2--sm"><?php echo esc_html( asayake_lodge_t( 'book_form_h' ) ); ?></h2>
<!-- /wp:heading -->
<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $al_fallback ) ); ?>
<!-- wp:paragraph {"className":"al-body al-form__call"} -->
<p class="al-body al-form__call"><?php echo esc_html( asayake_lodge_t( 'book_call_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"al-sec al-proses","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-sec al-proses"><!-- wp:group {"className":"al-prose","layout":{"type":"default"}} -->
<div class="wp-block-group al-prose"><!-- wp:heading {"level":2,"className":"al-prose__h"} -->
<h2 class="wp-block-heading al-prose__h"><?php echo esc_html( asayake_lodge_t( 'book_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"al-body"} -->
<p class="al-body"><?php echo esc_html( asayake_lodge_t( 'book_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-prose","layout":{"type":"default"}} -->
<div class="wp-block-group al-prose"><!-- wp:heading {"level":2,"className":"al-prose__h"} -->
<h2 class="wp-block-heading al-prose__h"><?php echo esc_html( asayake_lodge_t( 'book_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"al-body"} -->
<p class="al-body"><?php echo esc_html( asayake_lodge_t( 'book_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
