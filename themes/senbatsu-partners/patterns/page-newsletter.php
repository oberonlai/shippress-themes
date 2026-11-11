<?php
/**
 * Title: Page: search notes (newsletter)
 * Slug: senbatsu-partners/page-newsletter
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
<h1 class="wp-block-heading sb-seam__h"><?php echo wp_kses_post( senbatsu_partners_t( 'k5012120f' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sb-seam__photo"} -->
<figure class="wp-block-image size-full sb-seam__photo"><img src="<?php echo senbatsu_partners_img( 'desk-notes.webp' ); ?>" alt="<?php echo esc_attr( senbatsu_partners_t( 'aa04071fa' ) ); ?>"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sb-band sb-band--white","layout":{"type":"constrained","contentSize":"992px","wideSize":"992px"}} -->
<section class="wp-block-group alignfull sb-band sb-band--white">
<!-- wp:group {"className":"sb-head sb-head--c sp-reveal sp-reveal--up","layout":{"type":"constrained","contentSize":"992px"}} -->
<div class="wp-block-group sb-head sb-head--c sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sb-eyebrow"} -->
<p class="sb-eyebrow"><?php echo wp_kses_post( senbatsu_partners_t( 'k5012120f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( senbatsu_partners_t( 'kf6cb7715' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sb-lead"} -->
<p class="sb-lead"><?php echo wp_kses_post( senbatsu_partners_t( 'k84184bf1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sb-band sb-band--warm","layout":{"type":"constrained","contentSize":"992px","wideSize":"992px"}} -->
<section class="wp-block-group alignfull sb-band sb-band--warm">
<!-- wp:group {"className":"sb-nl"} -->
<div class="wp-block-group sb-nl">
<!-- wp:group {"className":"sb-nl__col"} -->
<div class="wp-block-group sb-nl__col">
<!-- wp:heading {"level":3,"className":"sb-h4"} -->
<h3 class="wp-block-heading sb-h4"><?php echo wp_kses_post( senbatsu_partners_t( 'kadf03b65' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( senbatsu_partners_t( 'k13467992' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-nl__col"} -->
<div class="wp-block-group sb-nl__col">
<!-- wp:heading {"level":3,"className":"sb-h4"} -->
<h3 class="wp-block-heading sb-h4"><?php echo wp_kses_post( senbatsu_partners_t( 'k0d34a71e' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( senbatsu_partners_t( 'ke6f56f3b' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-holder-wrap"} -->
<div class="wp-block-group sb-holder-wrap">
<!-- wp:group {"className":"sb-holder sb-holder--form sb-holder--narrow"} -->
<div class="wp-block-group sb-holder sb-holder--form sb-holder--narrow">
<?php echo shippress_form_slot(
	array(
		'kind'    => 'newsletter',
		'email'   => 'search@senbatsu-partners.example',
		'label'   => senbatsu_partners_t( 'forms_email' ),
		'submit'  => senbatsu_partners_t( 'forms_subscribe' ),
		'notice'  => senbatsu_partners_t( 'forms_mail_notice' ),
		'subject' => senbatsu_partners_t( 'forms_mail_subject' ),
	)
); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sb-contactline"} -->
<p class="sb-contactline"><?php echo wp_kses_post( senbatsu_partners_t( 'keb8ae4d4' ) ); ?></p>
<!-- /wp:paragraph -->

</section>
<!-- /wp:group -->
