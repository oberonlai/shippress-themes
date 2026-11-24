<?php
/**
 * Title: Home: new-arrivals letter
 * Slug: yuka-tiles/front-letter
 * Categories: yuka-tiles
 * Viewport Width: 1440
 * Description: Grey band with a headline and the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"letter","align":"full","className":"yt-letter","layout":{"type":"default"}} -->
<section id="letter" class="wp-block-group alignfull yt-letter">
<!-- wp:group {"className":"yt-wrap yt-wrap--c yt-letter__in","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c yt-letter__in">
<!-- wp:group {"className":"yt-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group yt-letter__text">
<!-- wp:heading {"level":2,"className":"yt-letter__h"} -->
<h2 class="wp-block-heading yt-letter__h"><?php echo esc_html( yuka_tiles_t( 'letter_heading' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-letter__p"} -->
<p class="yt-letter__p"><?php echo esc_html( yuka_tiles_t( 'letter_line' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
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
