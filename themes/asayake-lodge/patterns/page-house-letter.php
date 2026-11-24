<?php
/**
 * Title: Page: House letter
 * Slug: asayake-lodge/page-house-letter
 * Categories: asayake-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: Inner page: head with a docked bar, what the letter is, a standalone subscribe form with a mailto fallback, photo.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"al-field al-field--bar","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-field al-field--bar"><!-- wp:group {"className":"al-bar","layout":{"type":"default"}} -->
<div class="wp-block-group al-bar"><!-- wp:group {"className":"al-cell","layout":{"type":"default"}} -->
<div class="wp-block-group al-cell"><!-- wp:paragraph {"className":"al-cell__l"} -->
<p class="al-cell__l"><?php echo esc_html( asayake_lodge_t( 'hl_c1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-cell__v"} -->
<p class="al-cell__v"><?php echo esc_html( asayake_lodge_t( 'hl_c1_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-cell","layout":{"type":"default"}} -->
<div class="wp-block-group al-cell"><!-- wp:paragraph {"className":"al-cell__l"} -->
<p class="al-cell__l"><?php echo esc_html( asayake_lodge_t( 'hl_c2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-cell__v"} -->
<p class="al-cell__v"><?php echo esc_html( asayake_lodge_t( 'hl_c2_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-cell","layout":{"type":"default"}} -->
<div class="wp-block-group al-cell"><!-- wp:paragraph {"className":"al-cell__l"} -->
<p class="al-cell__l"><?php echo esc_html( asayake_lodge_t( 'hl_c3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-cell__v"} -->
<p class="al-cell__v"><?php echo esc_html( asayake_lodge_t( 'hl_c3_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-cell","layout":{"type":"default"}} -->
<div class="wp-block-group al-cell"><!-- wp:paragraph {"className":"al-cell__l"} -->
<p class="al-cell__l"><?php echo esc_html( asayake_lodge_t( 'hl_c4_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"al-cell__v"} -->
<p class="al-cell__v"><?php echo esc_html( asayake_lodge_t( 'hl_c4_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"al-sec al-lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-sec al-lead"><!-- wp:group {"className":"al-lead__in","layout":{"type":"default"}} -->
<div class="wp-block-group al-lead__in"><!-- wp:paragraph {"className":"al-lead__p"} -->
<p class="al-lead__p"><?php echo esc_html( asayake_lodge_t( 'house_letter_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"al-sec al-splitsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-sec al-splitsec"><!-- wp:group {"className":"al-split","layout":{"type":"default"}} -->
<div class="wp-block-group al-split"><!-- wp:group {"className":"al-split__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group al-split__media sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"al-split__img"} -->
<figure class="wp-block-image size-full al-split__img"><img src="<?php echo asayake_lodge_img( 'p12-key-box.webp' ); ?>" alt="<?php echo asayake_lodge_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group al-split__text"><!-- wp:heading {"level":2,"className":"al-h2 al-h2--sm"} -->
<h2 class="wp-block-heading al-h2 al-h2--sm"><?php echo esc_html( asayake_lodge_t( 'house_letter_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"al-body"} -->
<p class="al-body"><?php echo esc_html( asayake_lodge_t( 'house_letter_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"subscribe","className":"al-sec al-formsec","layout":{"type":"default"}} -->
<section id="subscribe" class="wp-block-group alignfull al-sec al-formsec"><!-- wp:group {"className":"al-formcard","layout":{"type":"default"}} -->
<div class="wp-block-group al-formcard"><!-- wp:heading {"level":2,"className":"al-h2 al-h2--sm"} -->
<h2 class="wp-block-heading al-h2 al-h2--sm"><?php echo esc_html( asayake_lodge_t( 'hl_form_h' ) ); ?></h2>
<!-- /wp:heading -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@asayake-lodge.example', 'label' => asayake_lodge_t( 'forms_email' ), 'submit' => asayake_lodge_t( 'forms_subscribe' ), 'notice' => asayake_lodge_t( 'forms_mail_notice' ), 'subject' => asayake_lodge_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"al-sec al-proses","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-sec al-proses"><!-- wp:group {"className":"al-prose","layout":{"type":"default"}} -->
<div class="wp-block-group al-prose"><!-- wp:heading {"level":2,"className":"al-prose__h"} -->
<h2 class="wp-block-heading al-prose__h"><?php echo esc_html( asayake_lodge_t( 'house_letter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"al-body"} -->
<p class="al-body"><?php echo esc_html( asayake_lodge_t( 'house_letter_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
