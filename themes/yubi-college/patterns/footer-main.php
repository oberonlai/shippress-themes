<?php
/**
 * Title: Footer: four columns
 * Slug: yubi-college/footer-main
 * Categories: yubi-college
 * Viewport Width: 1440
 * Description: Kon-ao footer: address and contacts, office hours, a link list, the term-letters form and a round Top disc.
 */
?>
<!-- wp:group {"className":"yb-foot","layout":{"type":"default"}} -->
<div class="wp-block-group yb-foot"><!-- wp:group {"className":"yb-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-foot__in"><!-- wp:group {"className":"yb-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group yb-foot__col"><!-- wp:paragraph {"className":"yb-foot__name"} -->
<p class="yb-foot__name"><?php echo esc_html( yubi_college_t( 'foot_name' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-foot__line"} -->
<p class="yb-foot__line"><?php echo esc_html( yubi_college_t( 'foot_line' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-foot__p"} -->
<p class="yb-foot__p"><?php echo esc_html( yubi_college_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-foot__p"} -->
<p class="yb-foot__p"><?php echo esc_html( yubi_college_t( 'foot_voice_l' ) ); ?> <a href="tel:+00415550187">+00 41 555 0187</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-foot__p"} -->
<p class="yb-foot__p"><?php echo esc_html( yubi_college_t( 'foot_text_l' ) ); ?> <a href="tel:+00415550188">+00 41 555 0188</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-foot__p"} -->
<p class="yb-foot__p"><a href="mailto:hello@yubicollege.example">hello@yubicollege.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group yb-foot__col"><!-- wp:paragraph {"className":"yb-foot__h"} -->
<p class="yb-foot__h"><?php echo esc_html( yubi_college_t( 'foot_hours_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-foot__p"} -->
<p class="yb-foot__p"><?php echo esc_html( yubi_college_t( 'foot_h1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-foot__p"} -->
<p class="yb-foot__p"><?php echo esc_html( yubi_college_t( 'foot_h2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-foot__p"} -->
<p class="yb-foot__p"><?php echo esc_html( yubi_college_t( 'foot_h3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-foot__p yb-foot__muted"} -->
<p class="yb-foot__p yb-foot__muted"><?php echo esc_html( yubi_college_t( 'foot_h4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group yb-foot__col"><!-- wp:paragraph {"className":"yb-foot__h"} -->
<p class="yb-foot__h"><?php echo esc_html( yubi_college_t( 'foot_links_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="yb-foot__links"><li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_about' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_courses' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/teaching-week/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_week' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/placements/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_place' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/tutors/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_tutors' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_stories' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/fees-and-entry/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_fees' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/taster-evenings/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_taster' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/notices/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_notices' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_letters' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_contact' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/notices/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'fl_privacy' ) ); ?></a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-foot__col yb-foot__letters","layout":{"type":"default"}} -->
<div class="wp-block-group yb-foot__col yb-foot__letters"><!-- wp:paragraph {"className":"yb-foot__h"} -->
<p class="yb-foot__h"><?php echo esc_html( yubi_college_t( 'foot_letters_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-foot__p yb-foot__muted"} -->
<p class="yb-foot__p yb-foot__muted"><?php echo esc_html( yubi_college_t( 'foot_letters_p' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@yubicollege.example', 'label' => yubi_college_t( 'forms_email' ), 'submit' => yubi_college_t( 'forms_subscribe' ), 'notice' => yubi_college_t( 'forms_mail_notice' ), 'subject' => yubi_college_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-foot__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group yb-foot__bottom"><!-- wp:paragraph {"className":"yb-foot__copy"} -->
<p class="yb-foot__copy"><?php echo esc_html( yubi_college_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<a class="yb-top" href="#top"><svg viewBox="0 0 12 12" width="10" height="10" aria-hidden="true" focusable="false"><path d="M6 11V1M2 5l4-4 4 4" fill="none" stroke="currentColor" stroke-width="1.5"/></svg><span><?php echo esc_html( yubi_college_t( 'foot_top' ) ); ?></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
