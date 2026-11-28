<?php
/**
 * Title: Page: Book a first assessment
 * Slug: taira-clinic/page-contact
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact and booking page: form slot with a mailto fallback, hours, address and phone.
 */
?>
<?php
ob_start(); ?>
<!-- wp:html -->
<div class="tc-cta2 tc-cta2--solo"><a class="tc-blk" href="mailto:desk@taira-clinic.example?subject=<?php echo rawurlencode( taira_clinic_t( 'booking_subject' ) ); ?>"><span class="tc-blk__t"><?php echo esc_html( taira_clinic_t( 'booking_email' ) ); ?></span><span class="tc-blk__s"><?php echo wp_kses_post( taira_clinic_t( 'k02fe96d9' ) ); ?></span><span class="tc-blk__ar" aria-hidden="true">&rarr;</span></a></div>
<!-- /wp:html -->
<?php
$tc_fallback = ob_get_clean();
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-pagehead">
<!-- wp:group {"className":"tc-wrap tc-pagehead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-pagehead__grid">
<!-- wp:group {"className":"tc-pagehead__t","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__t">
<!-- wp:paragraph {"className":"tc-crumb"} -->
<p class="tc-crumb"><a href="/"><?php echo esc_html( taira_clinic_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( taira_clinic_t( 'contact_title' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-h1 tc-h1--inner"} -->
<h1 class="wp-block-heading tc-h1 tc-h1--inner"><?php echo esc_html( taira_clinic_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( taira_clinic_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-pagehead__ph","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taira_clinic_img( 'p14-reception.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"book","align":"full","className":"tc-sec tc-sec--page tc-sec--contact","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull tc-sec tc-sec--page tc-sec--contact">
<!-- wp:group {"className":"tc-wrap tc-split tc-split--contact","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-split tc-split--contact">
<!-- wp:group {"className":"tc-split__a","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__a">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( taira_clinic_t( 'contact_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'contact_p' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $tc_fallback ) ); ?>
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__b tc-visit__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__b tc-visit__b">
<!-- wp:heading {"level":3,"className":"tc-h3"} -->
<h3 class="wp-block-heading tc-h3"><?php echo esc_html( taira_clinic_t( 'vs_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-visit__l"} -->
<p class="tc-visit__l"><strong><?php echo esc_html( taira_clinic_t( 'vs_wk_k' ) ); ?></strong> <?php echo esc_html( taira_clinic_t( 'vs_wk_v' ) ); ?><br><strong><?php echo esc_html( taira_clinic_t( 'vs_sa_k' ) ); ?></strong> <?php echo esc_html( taira_clinic_t( 'vs_sa_v' ) ); ?><br><strong><?php echo esc_html( taira_clinic_t( 'vs_su_k' ) ); ?></strong> <?php echo esc_html( taira_clinic_t( 'vs_su_v' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-visit__l"} -->
<p class="tc-visit__l"><?php echo esc_html( taira_clinic_t( 'vs_addr' ) ); ?><br><a href="tel:+15550142200"><?php echo esc_html( taira_clinic_t( 'hd_phone' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-sec--page">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group tc-rows">
<!-- wp:group {"className":"tc-row","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'contact_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'contact_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'contact_s1_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-row","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'contact_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'contact_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'contact_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'contact_s2_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-row","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'contact_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'contact_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'contact_s3_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'contact_s3_p3' ) ); ?></p>
<!-- /wp:paragraph -->
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
