<?php
/**
 * Title: Page: Round notes
 * Slug: shikii-mats/pg-round-notes
 * Categories: shikii-mats
 * Inserter: no
 * Viewport Width: 1440
 * Description: Inner page round-notes: two-tile threshold collage, title below and dashed content rows.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"sm-phero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sm-phero">
<!-- wp:group {"align":"full","className":"sm-pcollage","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sm-pcollage">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-ptile sm-ptile--a"} -->
<figure class="wp-block-image size-full sm-ptile sm-ptile--a"><img src="<?php echo shikii_mats_img( 'hero-mat-pile.webp' ); ?>" alt="<?php echo shikii_mats_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-ptile sm-ptile--b"} -->
<figure class="wp-block-image size-full sm-ptile sm-ptile--b"><img src="<?php echo shikii_mats_img( 'hero-wet-pavement.webp' ); ?>" alt="<?php echo shikii_mats_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"sm-line","layout":{"type":"default"}} -->
<div class="wp-block-group sm-line">

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-rib","layout":{"type":"default"}} -->
<div class="wp-block-group sm-rib">

</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-wrap sm-phero__text","layout":{"type":"default"}} -->
<div class="wp-block-group sm-wrap sm-phero__text">
<!-- wp:heading {"level":1,"className":"sm-h1 sm-h1--page"} -->
<h1 class="wp-block-heading sm-h1 sm-h1--page"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_t' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-lede"} -->
<p class="sm-lede"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_i' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"sm-sec sm-sec--rows","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sm-sec sm-sec--rows">
<!-- wp:group {"className":"sm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sm-wrap">
<!-- wp:group {"className":"sm-prow","layout":{"type":"default"}} -->
<div class="wp-block-group sm-prow">
<!-- wp:group {"className":"sm-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group sm-prow__body">
<!-- wp:heading {"level":2,"className":"sm-h2 sm-h2--row"} -->
<h2 class="wp-block-heading sm-h2 sm-h2--row"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-p"} -->
<p class="sm-p"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_s1_b1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-p"} -->
<p class="sm-p"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_s1_b2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-prow","layout":{"type":"default"}} -->
<div class="wp-block-group sm-prow">
<!-- wp:group {"className":"sm-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group sm-prow__body">
<!-- wp:heading {"level":2,"className":"sm-h2 sm-h2--row"} -->
<h2 class="wp-block-heading sm-h2 sm-h2--row"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-p"} -->
<p class="sm-p"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_s2_b1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-p"} -->
<p class="sm-p"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_s2_b2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"join","align":"full","className":"sm-sec sm-sec--band","layout":{"type":"default"}} -->
<section id="join" class="wp-block-group alignfull sm-sec sm-sec--band">
<!-- wp:group {"className":"sm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sm-wrap">
<!-- wp:group {"className":"sm-formpanel","layout":{"type":"default"}} -->
<div class="wp-block-group sm-formpanel">
<!-- wp:heading {"level":2,"className":"sm-h2 sm-h2--row"} -->
<h2 class="wp-block-heading sm-h2 sm-h2--row"><?php echo esc_html( shikii_mats_t( 'form_h_notes' ) ); ?></h2>
<!-- /wp:heading -->
<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'round@shikiimats.example',
	'label'   => shikii_mats_t( 'forms_email' ),
	'submit'  => shikii_mats_t( 'forms_subscribe' ),
	'notice'  => shikii_mats_t( 'forms_mail_notice' ),
	'subject' => shikii_mats_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"sm-sec sm-sec--rows sm-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sm-sec sm-sec--rows sm-sec--tight">
<!-- wp:group {"className":"sm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sm-wrap">
<!-- wp:group {"className":"sm-prow","layout":{"type":"default"}} -->
<div class="wp-block-group sm-prow">
<!-- wp:group {"className":"sm-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group sm-prow__body">
<!-- wp:heading {"level":2,"className":"sm-h2 sm-h2--row"} -->
<h2 class="wp-block-heading sm-h2 sm-h2--row"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-p"} -->
<p class="sm-p"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_s3_b1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-p"} -->
<p class="sm-p"><?php echo esc_html( shikii_mats_t( 'pg_round_notes_s3_b2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
