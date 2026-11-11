<?php
/**
 * Title: Page: open a search
 * Slug: senbatsu-partners/page-contact
 * Categories: senbatsu-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sb-seam sb-seam--photo"} -->
<section class="wp-block-group alignfull sb-seam sb-seam--photo">
<!-- wp:group {"className":"sb-seam__in"} -->
<div class="wp-block-group sb-seam__in">
<!-- wp:heading {"level":1,"className":"sb-seam__h"} -->
<h1 class="wp-block-heading sb-seam__h"><?php echo wp_kses_post( senbatsu_partners_t( 'k9b410351' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sb-seam__photo"} -->
<figure class="wp-block-image size-full sb-seam__photo"><img src="<?php echo senbatsu_partners_img( 'office.webp' ); ?>" alt="<?php echo esc_attr( senbatsu_partners_t( 'a133f9aa7' ) ); ?>"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sb-band sb-band--white","layout":{"type":"constrained","contentSize":"992px","wideSize":"992px"}} -->
<section class="wp-block-group alignfull sb-band sb-band--white">
<!-- wp:group {"className":"sb-head sb-head--c sp-reveal sp-reveal--up","layout":{"type":"constrained","contentSize":"992px"}} -->
<div class="wp-block-group sb-head sb-head--c sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sb-eyebrow"} -->
<p class="sb-eyebrow"><?php echo wp_kses_post( senbatsu_partners_t( 'k9b410351' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( senbatsu_partners_t( 'kde3fb4fb' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sb-lead"} -->
<p class="sb-lead"><?php echo wp_kses_post( senbatsu_partners_t( 'kfb49a87d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sb-band sb-band--warm","layout":{"type":"constrained","contentSize":"992px","wideSize":"992px"}} -->
<section class="wp-block-group alignfull sb-band sb-band--warm">
<!-- wp:group {"className":"sb-contact"} -->
<div class="wp-block-group sb-contact">
<!-- wp:group {"className":"sb-contact__details"} -->
<div class="wp-block-group sb-contact__details">
<!-- wp:heading {"level":3,"className":"sb-h4"} -->
<h3 class="wp-block-heading sb-h4"><?php echo wp_kses_post( senbatsu_partners_t( 'k4ae1d233' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( senbatsu_partners_t( 'k12520113' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-contact__addr"} -->
<p class="sb-contact__addr"><?php echo wp_kses_post( senbatsu_partners_t( 'kea6d13ed' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sb-h4"} -->
<h3 class="wp-block-heading sb-h4"><?php echo wp_kses_post( senbatsu_partners_t( 'kd1993ffe' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( senbatsu_partners_t( 'k5ed73534' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-contact__form"} -->
<div class="wp-block-group sb-contact__form">
<!-- wp:group {"className":"sb-holder sb-holder--form"} -->
<div class="wp-block-group sb-holder sb-holder--form">
<?php
ob_start(); ?>
<div class="wp-block-buttons sb-btn sb-btn--primary">
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="mailto:search@senbatsu-partners.example?subject=<?php echo rawurlencode( senbatsu_partners_t( 'contact_subject' ) ); ?>"><?php echo esc_html( senbatsu_partners_t( 'contact_email' ) ); ?></a></div>
</div>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sb-contact__note"} -->
<p class="sb-contact__note"><?php echo esc_html( senbatsu_partners_t( 'forms_contact_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-head sb-head--l"} -->
<div class="wp-block-group sb-head sb-head--l">
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( senbatsu_partners_t( 'k6dde3bf9' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"sb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity sb-rule"/>
<!-- /wp:separator -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-prose"} -->
<div class="wp-block-group sb-prose">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( senbatsu_partners_t( 'k0d552fed' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
