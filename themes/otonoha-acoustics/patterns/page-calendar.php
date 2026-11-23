<?php
/**
 * Title: Page: survey calendar
 * Slug: otonoha-acoustics/page-calendar
 * Categories: otonoha-acoustics
 * Inserter: false
 * Viewport Width: 1440
 * Description: Page: survey calendar page: page head with ghost word, intro, two notes and the newsletter form slot on the white sheet.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull oto-pagehead"><!-- wp:group {"className":"oto-pagehead__band","layout":{"type":"default"}} -->
<div class="wp-block-group oto-pagehead__band"><!-- wp:post-title {"level":1,"className":"oto-pagehead__h"} /--><!-- wp:paragraph {"className":"oto-ghost"} -->
<p class="oto-ghost" aria-hidden="true"><?php echo esc_html( otonoha_acoustics_t( 'ghost_calendar' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"className":"oto-sheet","layout":{"type":"default"}} -->
<div class="wp-block-group oto-sheet"><!-- wp:paragraph {"className":"oto-intro"} -->
<p class="oto-intro"><?php echo esc_html( otonoha_acoustics_t( 'cal_page_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-fig"} -->
<figure class="wp-block-image size-large oto-fig"><img src="<?php echo otonoha_acoustics_img( 'p13-recital-hall.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( otonoha_acoustics_t( 'cal_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html( otonoha_acoustics_t( 'cal_s1_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( otonoha_acoustics_t( 'cal_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html( otonoha_acoustics_t( 'cal_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->
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
<!-- /wp:group -->
