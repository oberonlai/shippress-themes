<?php
/**
 * Title: Footer
 * Slug: michikusa-lodge/footer-main
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Description: Ink footer: wordmark and address, hours, the page list and the Road notes sign-up, then the copyright row.
 */
?>
<!-- wp:group {"className":"ml-foot has-footer-background-color","layout":{"type":"default"}} -->
<div class="wp-block-group ml-foot has-footer-background-color"><!-- wp:group {"className":"ml-wrap ml-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap ml-foot__in"><!-- wp:group {"className":"ml-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ml-foot__grid"><!-- wp:group {"className":"ml-foot__col ml-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group ml-foot__col ml-foot__brand"><!-- wp:paragraph {"className":"ml-foot__mark"} -->
<p class="ml-foot__mark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'foot_name' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__p"} -->
<p class="ml-foot__p"><?php echo esc_html( michikusa_lodge_t( 'foot_addr1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__p"} -->
<p class="ml-foot__p"><?php echo esc_html( michikusa_lodge_t( 'foot_addr2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__p"} -->
<p class="ml-foot__p"><a href="tel:+00445550142"><?php echo esc_html( michikusa_lodge_t( 'foot_phone' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__p"} -->
<p class="ml-foot__p"><a href="mailto:desk@michikusa-lodge.example">desk@michikusa-lodge.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ml-foot__col"><!-- wp:paragraph {"className":"ml-foot__label"} -->
<p class="ml-foot__label"><?php echo esc_html( michikusa_lodge_t( 'foot_hours_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__p"} -->
<p class="ml-foot__p"><?php echo esc_html( michikusa_lodge_t( 'foot_h1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__p"} -->
<p class="ml-foot__p"><?php echo esc_html( michikusa_lodge_t( 'foot_h2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__p"} -->
<p class="ml-foot__p"><?php echo esc_html( michikusa_lodge_t( 'foot_h3' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__p"} -->
<p class="ml-foot__p"><?php echo esc_html( michikusa_lodge_t( 'foot_h4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__p"} -->
<p class="ml-foot__p"><?php echo esc_html( michikusa_lodge_t( 'foot_h5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ml-foot__col"><!-- wp:paragraph {"className":"ml-foot__label"} -->
<p class="ml-foot__label"><?php echo esc_html( michikusa_lodge_t( 'foot_pages_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"ml-foot__list"} -->
<ul class="wp-block-list ml-foot__list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_rooms' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/what-a-stay-includes/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_stay' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/late-arrivals/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_late' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/the-road/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_road' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_about' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_journal' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/questions/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_questions' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/book-tonight/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_book' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/road-notes/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_notes' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_privacy' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'fl_terms' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-foot__col ml-foot__letters","layout":{"type":"default"}} -->
<div class="wp-block-group ml-foot__col ml-foot__letters"><!-- wp:paragraph {"className":"ml-foot__label"} -->
<p class="ml-foot__label"><?php echo esc_html( michikusa_lodge_t( 'foot_notes_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__p"} -->
<p class="ml-foot__p"><?php echo esc_html( michikusa_lodge_t( 'foot_notes_p' ) ); ?></p>
<!-- /wp:paragraph --><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'desk@michikusa-lodge.example', 'label' => michikusa_lodge_t( 'forms_email' ), 'submit' => michikusa_lodge_t( 'forms_subscribe' ), 'notice' => michikusa_lodge_t( 'forms_mail_notice' ), 'subject' => michikusa_lodge_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-foot__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group ml-foot__bottom"><!-- wp:paragraph {"className":"ml-foot__copy"} -->
<p class="ml-foot__copy"><?php echo esc_html( michikusa_lodge_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__copy ml-foot__top"} -->
<p class="ml-foot__copy ml-foot__top"><a href="#top"><span class="ml-top__a" aria-hidden="true">↑</span><span class="ml-top__t"><?php echo esc_html( michikusa_lodge_t( 'foot_top' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
