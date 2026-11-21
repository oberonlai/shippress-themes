<?php
/**
 * Title: Footer
 * Slug: mebuki-college/footer-main
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Description: Dark footer: wordmark and address, hours, a link list, the open-day letters sign-up and the copyright row.
 */
?>
<!-- wp:group {"className":"mb-foot has-footer-background-color","layout":{"type":"default"}} -->
<div class="wp-block-group mb-foot has-footer-background-color"><!-- wp:group {"className":"mb-wrap mb-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap mb-foot__in"><!-- wp:group {"className":"mb-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mb-foot__grid"><!-- wp:group {"className":"mb-foot__col mb-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group mb-foot__col mb-foot__brand"><!-- wp:paragraph {"className":"mb-foot__mark"} -->
<p class="mb-foot__mark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'foot_name' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-foot__p"} -->
<p class="mb-foot__p"><?php echo esc_html( mebuki_college_t( 'foot_line' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-foot__p"} -->
<p class="mb-foot__p"><?php echo esc_html( mebuki_college_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-foot__p"} -->
<p class="mb-foot__p"><a href="tel:+00315550142"><?php echo esc_html( mebuki_college_t( 'foot_phone' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-foot__p"} -->
<p class="mb-foot__p"><a href="mailto:admissions@mebukicollege.example">admissions@mebukicollege.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group mb-foot__col"><!-- wp:paragraph {"className":"mb-foot__label"} -->
<p class="mb-foot__label"><?php echo esc_html( mebuki_college_t( 'foot_hours_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-foot__p"} -->
<p class="mb-foot__p"><?php echo esc_html( mebuki_college_t( 'foot_h1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-foot__p"} -->
<p class="mb-foot__p"><?php echo esc_html( mebuki_college_t( 'foot_h2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-foot__p"} -->
<p class="mb-foot__p"><?php echo esc_html( mebuki_college_t( 'foot_h3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group mb-foot__col"><!-- wp:paragraph {"className":"mb-foot__label"} -->
<p class="mb-foot__label"><?php echo esc_html( mebuki_college_t( 'foot_links_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"mb-foot__list"} -->
<ul class="wp-block-list mb-foot__list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_about' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/a-day-on-the-course/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_day' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/programmes/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_prog' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/placements/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_place' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/tutors/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_tutors' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_adm' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_fees' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_stories' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/open-days/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_open' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_journal' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_letters' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_contact' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'fl_privacy' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-foot__col mb-foot__letters","layout":{"type":"default"}} -->
<div class="wp-block-group mb-foot__col mb-foot__letters"><!-- wp:paragraph {"className":"mb-foot__label"} -->
<p class="mb-foot__label"><?php echo esc_html( mebuki_college_t( 'foot_letters_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-foot__p"} -->
<p class="mb-foot__p"><?php echo esc_html( mebuki_college_t( 'foot_letters_p' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'admissions@mebukicollege.example', 'label' => mebuki_college_t( 'forms_email' ), 'submit' => mebuki_college_t( 'forms_subscribe' ), 'notice' => mebuki_college_t( 'forms_mail_notice' ), 'subject' => mebuki_college_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-foot__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group mb-foot__bottom"><!-- wp:paragraph {"className":"mb-foot__copy"} -->
<p class="mb-foot__copy"><?php echo esc_html( mebuki_college_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-foot__copy mb-foot__top"} -->
<p class="mb-foot__copy mb-foot__top"><a href="#top"><?php echo esc_html( mebuki_college_t( 'foot_top' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
