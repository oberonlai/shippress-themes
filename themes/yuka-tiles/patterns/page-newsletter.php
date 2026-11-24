<?php
/**
 * Title: Page: New-arrivals letter
 * Slug: yuka-tiles/page-newsletter
 * Categories: yuka-tiles
 * Inserter: no
 * Viewport Width: 1440
 * Description: Stage-1 standalone newsletter page with the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","className":"yt-sec yt-psec","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-psec">
<!-- wp:group {"className":"yt-wrap yt-wrap--c yt-wrap--page","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c yt-wrap--page">
<!-- wp:paragraph {"className":"yt-label"} -->
<p class="yt-label"><?php echo esc_html( yuka_tiles_t( 'newsletter_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yt-h2 yt-h2--page"} -->
<h1 class="wp-block-heading yt-h2 yt-h2--page"><?php echo esc_html( yuka_tiles_t( 'newsletter_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-lede"} -->
<p class="yt-lede"><?php echo esc_html( yuka_tiles_t( 'newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-prose"} -->
<p class="yt-prose"><?php echo esc_html( yuka_tiles_t( 'newsletter_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"yt-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group yt-formbox">
<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@yuka-tiles.example',
	'label'   => yuka_tiles_t( 'forms_email' ),
	'submit'  => yuka_tiles_t( 'forms_subscribe' ),
	'notice'  => yuka_tiles_t( 'forms_mail_notice' ),
	'subject' => yuka_tiles_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
