<?php
/**
 * Title: Inner: Contact
 * Slug: kisha-rail/inner-contact
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: Address, phone, email and hours in two columns, the form slot with a mailto fallback and how to find Station House.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-iwin","layout":{"type":"default"}} -->
<section class="wp-block-group kr-iwin">
<!-- wp:group {"className":"kr-win kr-win--in sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win kr-win--in sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-win__img"} -->
<figure class="wp-block-image size-full kr-win__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p15-brochure-desk.webp' ) ); ?>" alt="<?php echo esc_attr( kisha_rail_t( 'alt_p15' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kr-win__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win__scrim">
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-win__fg","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win__fg">
<!-- wp:heading {"level":1,"className":"kr-h1"} -->
<h1 class="wp-block-heading kr-h1"><?php echo esc_html( kisha_rail_t( 'contact_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kr-sub"} -->
<p class="kr-sub"><?php echo esc_html( kisha_rail_t( 'contact_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-itabs","layout":{"type":"default"}} -->
<div class="wp-block-group kr-itabs">
<!-- wp:paragraph {"className":"kr-itab kr-itab--1"} -->
<p class="kr-itab kr-itab--1"><a href="#a1"><?php echo esc_html( kisha_rail_t( 'tab_office' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-itab kr-itab--2"} -->
<p class="kr-itab kr-itab--2"><a href="#a2"><?php echo esc_html( kisha_rail_t( 'tab_write' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-itab kr-itab--3"} -->
<p class="kr-itab kr-itab--3"><a href="#a3"><?php echo esc_html( kisha_rail_t( 'tab_finding' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"kr-ilead","layout":{"type":"default"}} -->
<section class="wp-block-group kr-ilead">
<!-- wp:paragraph {"className":"kr-lead"} -->
<p class="kr-lead"><?php echo esc_html( kisha_rail_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"kr-isec","layout":{"type":"default"},"anchor":"a1"} -->
<section id="a1" class="wp-block-group kr-isec">
<!-- wp:group {"className":"kr-icol","layout":{"type":"default"}} -->
<div class="wp-block-group kr-icol">
<!-- wp:group {"className":"kr-ihead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 'tab_office' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kr-h2 kr-h2i"} -->
<h2 class="wp-block-heading kr-h2 kr-h2i"><?php echo esc_html( kisha_rail_t( 'contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'contact_s1_b1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'contact_s1_b2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-twocol","layout":{"type":"default"}} -->
<div class="wp-block-group kr-twocol">
<!-- wp:group {"className":"kr-twocol__c","layout":{"type":"default"}} -->
<div class="wp-block-group kr-twocol__c">
<!-- wp:paragraph {"className":"kr-foot__k kr-ct__k"} -->
<p class="kr-foot__k kr-ct__k"><?php echo esc_html( kisha_rail_t( 'ct_adr_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-ct__l"} -->
<p class="kr-ct__l"><?php echo esc_html( kisha_rail_t( 'ct_a1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-ct__l"} -->
<p class="kr-ct__l"><?php echo esc_html( kisha_rail_t( 'ct_a2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-ct__l"} -->
<p class="kr-ct__l"><?php echo esc_html( kisha_rail_t( 'ct_ph' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-ct__l"} -->
<p class="kr-ct__l"><a href="mailto:tours@kisharail.example"><?php echo esc_html( kisha_rail_t( 'ct_em' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-twocol__c","layout":{"type":"default"}} -->
<div class="wp-block-group kr-twocol__c">
<!-- wp:paragraph {"className":"kr-foot__k kr-ct__k"} -->
<p class="kr-foot__k kr-ct__k"><?php echo esc_html( kisha_rail_t( 'ct_hrs_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-ct__l"} -->
<p class="kr-ct__l"><?php echo esc_html( kisha_rail_t( 'ct_h1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-ct__l"} -->
<p class="kr-ct__l"><?php echo esc_html( kisha_rail_t( 'ct_h2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-ct__l"} -->
<p class="kr-ct__l"><?php echo esc_html( kisha_rail_t( 'ct_h3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"kr-isec","layout":{"type":"default"},"anchor":"a2"} -->
<section id="a2" class="wp-block-group kr-isec">
<!-- wp:group {"className":"kr-icol","layout":{"type":"default"}} -->
<div class="wp-block-group kr-icol">
<!-- wp:group {"className":"kr-ihead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 'tab_write' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kr-h2 kr-h2i"} -->
<h2 class="wp-block-heading kr-h2 kr-h2i"><?php echo esc_html( kisha_rail_t( 'contact_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'contact_s2_b1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'contact_s2_b2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-formcard","layout":{"type":"default"}} -->
<div class="wp-block-group kr-formcard">
<?php
ob_start(); ?>
<a class="wp-element-button kr-mail" href="mailto:tours@kisharail.example?subject=<?php echo rawurlencode( kisha_rail_t( 'contact_mail_subject' ) ); ?>"><?php echo esc_html( kisha_rail_t( 'contact_email_button' ) ); ?></a>
<p class="kr-mailcall"><?php echo esc_html( kisha_rail_t( 'forms_call_line' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"kr-isec","layout":{"type":"default"},"anchor":"a3"} -->
<section id="a3" class="wp-block-group kr-isec">
<!-- wp:group {"className":"kr-icol","layout":{"type":"default"}} -->
<div class="wp-block-group kr-icol">
<!-- wp:group {"className":"kr-ihead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 'tab_finding' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kr-h2 kr-h2i"} -->
<h2 class="wp-block-heading kr-h2 kr-h2i"><?php echo esc_html( kisha_rail_t( 'contact_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'contact_s3_b1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
