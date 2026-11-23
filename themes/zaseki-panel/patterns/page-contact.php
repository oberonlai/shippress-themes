<?php
/**
 * Title: Page: Contact
 * Slug: zaseki-panel/page-contact
 * Categories: zaseki-panel
 * Inserter: no
 * Viewport Width: 1440
 * Description: The contact page: address, hours, a contact form slot with an email fallback.
 */
?>
<!-- wp:group {"className":"zp-phead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull zp-phead">
<!-- wp:group {"className":"zp-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__panel">
<!-- wp:group {"className":"zp-phead__grid zp-wipe sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__grid zp-wipe sp-reveal sp-reveal--wipe">
<!-- wp:html -->
<div class="zp-gridwrap" aria-hidden="true"><svg class="zp-grid" viewBox="0 0 768 512" preserveAspectRatio="xMidYMid slice" focusable="false"><rect x="133" y="133" width="118" height="118" fill="#C3D3C6"/><rect x="261" y="133" width="118" height="118" fill="#D9B3A4"/><rect x="389" y="261" width="118" height="118" fill="#CFCBC1"/><g stroke="#8C5648" stroke-width="10" fill="none"><path d="M0 0V512"/><path d="M128 0V512"/><path d="M256 0V512"/><path d="M384 0V512"/><path d="M512 0V512"/><path d="M640 0V512"/><path d="M768 0V512"/><path d="M0 0H768"/><path d="M0 128H768"/><path d="M0 256H768"/><path d="M0 384H768"/><path d="M0 512H768"/></g></svg></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__text">
<!-- wp:heading {"level":1,"className":"zp-phead__h1"} -->
<h1 class="wp-block-heading zp-phead__h1"><?php echo esc_html( zaseki_panel_t( 'pg_contact_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-phead__lede"} -->
<p class="zp-phead__lede"><?php echo esc_html( zaseki_panel_t( 'pg_contact_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-phead__photo","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-phead__img"} -->
<figure class="wp-block-image size-full zp-phead__img"><img src="<?php echo zaseki_panel_img( 'floor-walk.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_f1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-contact","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-contact">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'contact_l1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'contact_h1' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'contact_b1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-facts","layout":{"type":"default"}} -->
<div class="wp-block-group zp-facts">
<!-- wp:group {"className":"zp-fact","layout":{"type":"default"}} -->
<div class="wp-block-group zp-fact">
<!-- wp:paragraph {"className":"zp-fact__l"} -->
<p class="zp-fact__l"><?php echo esc_html( zaseki_panel_t( 'fact1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fact__v"} -->
<p class="zp-fact__v"><?php echo esc_html( zaseki_panel_t( 'fact1_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-fact","layout":{"type":"default"}} -->
<div class="wp-block-group zp-fact">
<!-- wp:paragraph {"className":"zp-fact__l"} -->
<p class="zp-fact__l"><?php echo esc_html( zaseki_panel_t( 'fact2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fact__v"} -->
<p class="zp-fact__v"><?php echo esc_html( zaseki_panel_t( 'fact2_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-fact","layout":{"type":"default"}} -->
<div class="wp-block-group zp-fact">
<!-- wp:paragraph {"className":"zp-fact__l"} -->
<p class="zp-fact__l"><?php echo esc_html( zaseki_panel_t( 'fact3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fact__v"} -->
<p class="zp-fact__v"><?php echo esc_html( zaseki_panel_t( 'fact3_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-fact","layout":{"type":"default"}} -->
<div class="wp-block-group zp-fact">
<!-- wp:paragraph {"className":"zp-fact__l"} -->
<p class="zp-fact__l"><?php echo esc_html( zaseki_panel_t( 'fact4_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fact__v"} -->
<p class="zp-fact__v"><?php echo esc_html( zaseki_panel_t( 'fact4_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-fact","layout":{"type":"default"}} -->
<div class="wp-block-group zp-fact">
<!-- wp:paragraph {"className":"zp-fact__l"} -->
<p class="zp-fact__l"><?php echo esc_html( zaseki_panel_t( 'fact5_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fact__v"} -->
<p class="zp-fact__v"><?php echo esc_html( zaseki_panel_t( 'fact5_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"contact-form","className":"zp-sec zp-psec zp-form","layout":{"type":"default"}} -->
<section id="contact-form" class="wp-block-group zp-sec zp-psec zp-form">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'contact_l2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'contact_h2' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'contact_b2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group zp-formbox">
<?php ob_start(); ?>
<!-- wp:buttons {"className":"zp-cta"} -->
<div class="wp-block-buttons zp-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@zaseki-panel.example?subject=<?php echo rawurlencode( zaseki_panel_t( 'contact_mail_subject' ) ); ?>"><?php echo esc_html( zaseki_panel_t( 'contact_email_button' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$zp_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $zp_fallback ) );
?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
