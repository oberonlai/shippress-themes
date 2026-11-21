<?php
/**
 * Title: Page: contact
 * Slug: azukari-stays/pg-contact
 * Categories: azukari-stays
 * Keywords: holiday let, property management, owners
 * Viewport Width: 1440
 * Description: Inner page: the office, the contact form and directions.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-ihero az-ihero--s0"} -->
<section class="wp-block-group alignfull az-ihero az-ihero--s0"><!-- wp:group {"className":"az-ihero__panel"} -->
<div class="wp-block-group az-ihero__panel"><!-- wp:paragraph {"className":"az-lab az-lab--dark"} -->
<p class="az-lab az-lab--dark"><?php echo esc_html( azukari_stays_t( 'ip_contact_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"az-ihero__h1"} -->
<h1 class="wp-block-heading az-ihero__h1"><?php echo esc_html( azukari_stays_t( 'ip_contact_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-ihero__sub"} -->
<p class="az-ihero__sub"><?php echo esc_html( azukari_stays_t( 'ip_contact_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-ihero__photo"} -->
<div class="wp-block-group az-ihero__photo"><!-- wp:group {"className":"az-ihero__par sp-parallax"} -->
<div class="wp-block-group az-ihero__par sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( azukari_stays_img( 'p10-home-townhouse.webp' ) ); ?>" alt="<?php echo esc_attr( azukari_stays_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
<!-- wp:group {"className":"az-isec az-isec--form"} -->
<div class="wp-block-group az-isec az-isec--form"><?php ob_start(); ?>
<!-- wp:buttons {"className":"az-btnrow"} -->
<div class="wp-block-buttons az-btnrow"><!-- wp:button {"className":"az-mail"} -->
<div class="wp-block-button az-mail"><a class="wp-block-button__link wp-element-button" href="mailto:owners@azukaristays.example?subject=<?php echo rawurlencode( azukari_stays_t( 'consult_mail_subject' ) ); ?>"><?php echo esc_html( azukari_stays_t( 'consult_email_button' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"az-small"} -->
<p class="az-small"><?php echo esc_html( azukari_stays_t( 'forms_phone_line' ) ); ?></p>
<!-- /wp:paragraph -->
<?php $fallback = ob_get_clean(); ?>
<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group -->
<!-- wp:group {"className":"az-irows"} -->
<div class="wp-block-group az-irows"><!-- wp:group {"className":"az-isec sp-reveal sp-reveal--up"} -->
<div class="wp-block-group az-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"az-h3 az-isec__h"} -->
<h2 class="wp-block-heading az-h3 az-isec__h"><?php echo esc_html( azukari_stays_t( 'ip_contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-body az-isec__p"} -->
<p class="az-body az-isec__p"><?php echo esc_html( azukari_stays_t( 'ip_contact_s1_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-isec sp-reveal sp-reveal--up"} -->
<div class="wp-block-group az-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"az-h3 az-isec__h"} -->
<h2 class="wp-block-heading az-h3 az-isec__h"><?php echo esc_html( azukari_stays_t( 'ip_contact_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-body az-isec__p"} -->
<p class="az-body az-isec__p"><?php echo esc_html( azukari_stays_t( 'ip_contact_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
