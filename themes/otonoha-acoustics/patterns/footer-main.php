<?php
/**
 * Title: Footer: booking band and white colophon
 * Slug: otonoha-acoustics/footer-main
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Description: Graphite booking band with the one outline pill, then a white footer with the wordmark, address with a round pin, hours, the survey-calendar sign-up on a pale panel, the page links and a caps copyright line.
 */
?>
<!-- wp:group {"className":"oto-cta","layout":{"type":"default"}} -->
<div class="wp-block-group oto-cta"><!-- wp:group {"className":"oto-cta__in","layout":{"type":"default"}} -->
<div class="wp-block-group oto-cta__in"><!-- wp:paragraph {"className":"oto-cta__t"} -->
<p class="oto-cta__t"><?php echo esc_html( otonoha_acoustics_t( 'cta_sentence' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-pill"} -->
<p class="oto-pill"><a href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'cta_label' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-foot","layout":{"type":"default"}} -->
<div class="wp-block-group oto-foot"><!-- wp:group {"className":"oto-wrap oto-foot__top","layout":{"type":"default"}} -->
<div class="wp-block-group oto-wrap oto-foot__top"><!-- wp:group {"className":"oto-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group oto-foot__brand"><!-- wp:paragraph {"className":"oto-foot__mark"} -->
<p class="oto-foot__mark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'foot_name' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-foot__tag"} -->
<p class="oto-foot__tag"><?php echo esc_html( otonoha_acoustics_t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group oto-foot__cols"><!-- wp:group {"className":"oto-foot__col oto-foot__addr","layout":{"type":"default"}} -->
<div class="wp-block-group oto-foot__col oto-foot__addr"><!-- wp:html -->
<span class="oto-disc oto-disc--pin" aria-hidden="true"><svg viewBox="0 0 20 20" width="20" height="20" focusable="false"><path d="M10 2.5a5.5 5.5 0 0 0-5.5 5.5c0 4 5.5 9.5 5.5 9.5s5.5-5.5 5.5-9.5A5.5 5.5 0 0 0 10 2.5z" fill="none" stroke="#fff" stroke-width="1.4"/><circle cx="10" cy="8" r="2" fill="#fff"/></svg></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"oto-foot__label"} -->
<p class="oto-foot__label"><?php echo esc_html( otonoha_acoustics_t( 'foot_addr_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-foot__p"} -->
<p class="oto-foot__p"><?php echo esc_html( otonoha_acoustics_t( 'foot_addr1' ) ); ?><br><?php echo esc_html( otonoha_acoustics_t( 'foot_addr2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-foot__p"} -->
<p class="oto-foot__p"><a href="tel:+00315550186"><?php echo esc_html( otonoha_acoustics_t( 'foot_phone' ) ); ?></a><br><a href="mailto:survey@otonoha-acoustics.example"><?php echo esc_html( otonoha_acoustics_t( 'foot_email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group oto-foot__col"><!-- wp:paragraph {"className":"oto-foot__label"} -->
<p class="oto-foot__label"><?php echo esc_html( otonoha_acoustics_t( 'foot_hours_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-foot__p"} -->
<p class="oto-foot__p"><?php echo esc_html( otonoha_acoustics_t( 'foot_h1' ) ); ?><br><?php echo esc_html( otonoha_acoustics_t( 'foot_h2' ) ); ?><br><?php echo esc_html( otonoha_acoustics_t( 'foot_h3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-wrap oto-foot__cal","layout":{"type":"default"}} -->
<div class="wp-block-group oto-wrap oto-foot__cal"><!-- wp:group {"className":"oto-foot__calt","layout":{"type":"default"}} -->
<div class="wp-block-group oto-foot__calt"><!-- wp:heading {"level":2,"className":"oto-foot__calh"} -->
<h2 class="wp-block-heading oto-foot__calh"><?php echo esc_html( otonoha_acoustics_t( 'foot_cal_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"oto-foot__calp"} -->
<p class="oto-foot__calp"><?php echo esc_html( otonoha_acoustics_t( 'foot_cal_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'survey@otonoha-acoustics.example',
		'label'   => otonoha_acoustics_t( 'forms_email' ),
		'submit'  => otonoha_acoustics_t( 'forms_subscribe' ),
		'notice'  => otonoha_acoustics_t( 'forms_mail_notice' ),
		'subject' => otonoha_acoustics_t( 'forms_mail_subject' ),
	)
);
?></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-wrap oto-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group oto-wrap oto-foot__links"><!-- wp:list {"className":"oto-foot__list"} -->
<ul class="wp-block-list oto-foot__list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'fl_about' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'fl_rooms' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/report/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'fl_report' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'fl_fees' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/field-notes/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'fl_notes' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/questions/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'fl_questions' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'fl_privacy' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'fl_terms' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --><!-- wp:paragraph {"className":"oto-foot__copy"} -->
<p class="oto-foot__copy"><?php echo esc_html( otonoha_acoustics_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
