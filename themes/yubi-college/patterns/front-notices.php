<?php
/**
 * Title: Home: notices and term letters
 * Slug: yubi-college/front-notices
 * Categories: yubi-college
 * Viewport Width: 1440
 * Description: Notices heading beside the three latest posts as hairline rows, and a pale aqua term-letters panel with the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"notices","className":"yb-sec yb-sec--white yb-sec--notices","layout":{"type":"default"}} -->
<section id="notices" class="wp-block-group alignfull yb-sec yb-sec--white yb-sec--notices"><!-- wp:group {"className":"yb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap"><!-- wp:group {"className":"yb-notices","layout":{"type":"default"}} -->
<div class="wp-block-group yb-notices"><!-- wp:group {"className":"yb-notices__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-notices__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--s"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--s"><?php echo esc_html( yubi_college_t( 'notices_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'notices_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-notices__list","layout":{"type":"default"}} -->
<div class="wp-block-group yb-notices__list"><!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"yb-notes"} -->
<div class="wp-block-query yb-notes"><!-- wp:post-template {"className":"yb-notes__list"} -->
<!-- wp:group {"className":"yb-note-row","layout":{"type":"default"}} -->
<div class="wp-block-group yb-note-row"><!-- wp:post-date {"format":"d.m.Y","isLink":false,"className":"yb-note-row__d"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"yb-note-row__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
<!-- wp:paragraph {"className":"yb-textlink"} -->
<p class="yb-textlink"><a href="<?php echo esc_url( home_url( '/notices/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'notices_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-letters","layout":{"type":"default"}} -->
<div class="wp-block-group yb-letters"><!-- wp:group {"className":"yb-letters__txt","layout":{"type":"default"}} -->
<div class="wp-block-group yb-letters__txt"><!-- wp:heading {"level":3,"className":"yb-letters__h"} -->
<h3 class="wp-block-heading yb-letters__h"><?php echo esc_html( yubi_college_t( 'letters_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-letters__p"} -->
<p class="yb-letters__p"><?php echo esc_html( yubi_college_t( 'letters_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@yubicollege.example', 'label' => yubi_college_t( 'forms_email' ), 'submit' => yubi_college_t( 'forms_subscribe' ), 'notice' => yubi_college_t( 'forms_mail_notice' ), 'subject' => yubi_college_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
