<?php
/**
 * Title: Home: notices and letters
 * Slug: mebuki-college/front-notices
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Description: Mist band: the three latest notices as dated rows beside a white panel for the open-day letters sign-up.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"notices","className":"mb-sec mb-sec--wash mb-sec--short","layout":{"type":"default"}} -->
<section id="notices" class="wp-block-group alignfull mb-sec mb-sec--wash mb-sec--short"><!-- wp:group {"className":"mb-wrap mb-notes","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap mb-notes"><!-- wp:group {"className":"mb-notes__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-notes__l sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill mb-pill--left"} -->
<p class="mb-pill mb-pill--left"><?php echo esc_html( mebuki_college_t( 'p_notes' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2 mb-h2--left mb-h2--m"} -->
<h2 class="wp-block-heading mb-h2 mb-h2--left mb-h2--m"><?php echo esc_html( mebuki_college_t( 'notes_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"mb-notes__q"} -->
<div class="wp-block-query mb-notes__q"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"mb-note","layout":{"type":"default"}} -->
<div class="wp-block-group mb-note"><!-- wp:post-date {"format":"d.m.Y","className":"mb-note__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mb-note__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
<!-- wp:paragraph {"className":"mb-textlink"} -->
<p class="mb-textlink"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'notes_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-letters","layout":{"type":"default"}} -->
<div class="wp-block-group mb-letters"><!-- wp:heading {"level":3,"className":"mb-card__h mb-letters__h"} -->
<h3 class="wp-block-heading mb-card__h mb-letters__h"><?php echo esc_html( mebuki_college_t( 'letters_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-letters__p"} -->
<p class="mb-letters__p"><?php echo esc_html( mebuki_college_t( 'letters_p' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'admissions@mebukicollege.example', 'label' => mebuki_college_t( 'forms_email' ), 'submit' => mebuki_college_t( 'forms_subscribe' ), 'notice' => mebuki_college_t( 'forms_mail_notice' ), 'subject' => mebuki_college_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
