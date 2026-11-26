<?php
/**
 * Title: Page: request a survey
 * Slug: fuchi-glazing/page-contact
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact page: slanted head, the contact form slot with a mailto fallback, address, hours and what happens next.
 */
?>
<!-- wp:group {"align":"full","className":"fg-crumbrow","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fg-crumbrow">
<!-- wp:html -->
<p class="fg-crumb"><a href="/"><?php echo esc_html( fuchi_glazing_t( 'crumb_home' ) ); ?></a><svg width="8" height="12" viewBox="0 0 8 12" fill="none" stroke="currentColor" aria-hidden="true" focusable="false"><path d="M2 1l5 5-5 5"/></svg><span aria-current="page"><?php echo esc_html( fuchi_glazing_t( 'crumb_contact' ) ); ?></span></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"fg-phead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fg-phead">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"fg-phead__photo sp-parallax"} -->
<figure class="wp-block-image size-full fg-phead__photo sp-parallax"><img src="<?php echo fuchi_glazing_img( 'sq-entrance-door.webp' ); ?>" alt="<?php echo fuchi_glazing_a( 'alt_p04c' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<div class="fg-phead__frame" aria-hidden="true"><svg class="fg-phead__line" focusable="false"><rect x="1" y="1"/></svg></div>
<!-- /wp:html -->
<!-- wp:group {"className":"fg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group fg-phead__panel">
<!-- wp:heading {"level":1,"className":"fg-phead__h1"} -->
<h1 class="wp-block-heading fg-phead__h1"><?php echo esc_html( fuchi_glazing_t( 'ct_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-phead__lead"} -->
<p class="fg-phead__lead"><?php echo esc_html( fuchi_glazing_t( 'ct_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec fg-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec fg-sec--page">
<!-- wp:group {"className":"fg-wrap fg-contact","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap fg-contact">
<!-- wp:group {"className":"fg-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group fg-contact__form">
<!-- wp:heading {"className":"fg-h2 fg-h2--left"} -->
<h2 class="wp-block-heading fg-h2 fg-h2--left"><?php echo esc_html( fuchi_glazing_t( 'ct_h2' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'ct_p' ) ); ?></p>
<!-- /wp:paragraph -->
<?php
ob_start(); ?>
<a class="fg-cta" href="mailto:survey@fuchi-glazing.example?subject=<?php echo rawurlencode( fuchi_glazing_t( 'contact_subject' ) ); ?>"><span><?php echo esc_html( fuchi_glazing_t( 'contact_email' ) ); ?></span></a>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-contact__side","layout":{"type":"default"}} -->
<div class="wp-block-group fg-contact__side">
<!-- wp:paragraph {"className":"fg-side__h"} -->
<p class="fg-side__h"><?php echo esc_html( fuchi_glazing_t( 'ct_addr_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'ft_addr_a' ) ); ?><br><?php echo esc_html( fuchi_glazing_t( 'ft_addr_b' ) ); ?><br><a href="mailto:survey@fuchi-glazing.example"><?php echo wp_kses_post( fuchi_glazing_t( 'k0263709b' ) ); ?></a><br><a href="tel:+002079460412"><?php echo esc_html( fuchi_glazing_t( 'phone' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-side__h"} -->
<p class="fg-side__h"><?php echo esc_html( fuchi_glazing_t( 'ct_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'ft_h1' ) ); ?><br><?php echo esc_html( fuchi_glazing_t( 'ft_h2' ) ); ?><br><?php echo esc_html( fuchi_glazing_t( 'ft_h3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-side__h"} -->
<p class="fg-side__h"><?php echo esc_html( fuchi_glazing_t( 'ct_next_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-ledger sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group fg-ledger sp-stagger">
<!-- wp:group {"className":"fg-row sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"fg-row__d"} -->
<p class="fg-row__d"><?php echo esc_html( fuchi_glazing_t( 'cn_d1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__c"} -->
<p class="fg-row__c"><?php echo esc_html( fuchi_glazing_t( 'cn_c1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row__b">
<!-- wp:paragraph {"className":"fg-row__t"} -->
<p class="fg-row__t"><?php echo esc_html( fuchi_glazing_t( 'cn_t1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__x"} -->
<p class="fg-row__x"><?php echo esc_html( fuchi_glazing_t( 'cn_x1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-row sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"fg-row__d"} -->
<p class="fg-row__d"><?php echo esc_html( fuchi_glazing_t( 'cn_d2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__c"} -->
<p class="fg-row__c"><?php echo esc_html( fuchi_glazing_t( 'cn_c2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row__b">
<!-- wp:paragraph {"className":"fg-row__t"} -->
<p class="fg-row__t"><?php echo esc_html( fuchi_glazing_t( 'cn_t2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__x"} -->
<p class="fg-row__x"><?php echo esc_html( fuchi_glazing_t( 'cn_x2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-row sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"fg-row__d"} -->
<p class="fg-row__d"><?php echo esc_html( fuchi_glazing_t( 'cn_d3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__c"} -->
<p class="fg-row__c"><?php echo esc_html( fuchi_glazing_t( 'cn_c3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row__b">
<!-- wp:paragraph {"className":"fg-row__t"} -->
<p class="fg-row__t"><?php echo esc_html( fuchi_glazing_t( 'cn_t3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__x"} -->
<p class="fg-row__x"><?php echo esc_html( fuchi_glazing_t( 'cn_x3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- fg-prose -->
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec fg-sec--replace","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec fg-sec--replace">
<!-- wp:group {"className":"fg-wrap fg-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap fg-wrap--c">
<!-- wp:group {"className":"fg-prose","layout":{"type":"default"}} -->
<div class="wp-block-group fg-prose">
<!-- wp:heading {"textAlign":"center","className":"fg-h2"} -->
<h2 class="wp-block-heading has-text-align-center fg-h2"><?php echo esc_html( fuchi_glazing_t( 'contact_h1' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'contact_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'contact_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
