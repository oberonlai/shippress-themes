<?php
/**
 * Title: Page: Newsletter
 * Slug: tochi-academy/page-newsletter
 * Categories: tochi-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: One email a month
 */
?>
<!-- wp:paragraph {"className":"ta-lede"} -->
<p class="ta-lede"><?php echo wp_kses_post( tochi_academy_t( 'k0dab68f9' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tochi_academy_t( 'k6a2ba596' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'ke09f4cba' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tochi_academy_t( 'k1b1a9a29' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k3deeb798' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'office@tochi-academy.example',
	'label'   => tochi_academy_t( 'forms_email' ),
	'submit'  => tochi_academy_t( 'forms_subscribe' ),
	'notice'  => tochi_academy_t( 'forms_mail_notice' ),
	'subject' => tochi_academy_t( 'forms_mail_subject' ),
) ); ?>
