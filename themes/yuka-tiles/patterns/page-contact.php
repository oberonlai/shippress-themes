<?php
/**
 * Title: Page: Contact
 * Slug: yuka-tiles/page-contact
 * Categories: yuka-tiles
 * Inserter: no
 * Viewport Width: 1440
 * Description: Stage-1 contact page with the contact form slot and a mailto fallback.
 */
?>
<?php ob_start(); ?>
<!-- wp:buttons {"className":"yt-pair yt-pair--copper"} -->
<div class="wp-block-buttons yt-pair yt-pair--copper"><!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="mailto:hello@yuka-tiles.example?subject=<?php echo rawurlencode( yuka_tiles_t( 'contact_mail_subject' ) ); ?>"><?php echo esc_html( yuka_tiles_t( 'contact_email_button' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php $yt_fallback = ob_get_clean(); ?>
<!-- wp:group {"tagName":"section","className":"yt-sec yt-psec","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-psec">
<!-- wp:group {"className":"yt-wrap yt-wrap--c yt-wrap--page","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c yt-wrap--page">
<!-- wp:paragraph {"className":"yt-label"} -->
<p class="yt-label"><?php echo esc_html( yuka_tiles_t( 'contact_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yt-h2 yt-h2--page"} -->
<h1 class="wp-block-heading yt-h2 yt-h2--page"><?php echo esc_html( yuka_tiles_t( 'contact_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-lede"} -->
<p class="yt-lede"><?php echo esc_html( yuka_tiles_t( 'contact_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-prose"} -->
<p class="yt-prose"><?php echo esc_html( yuka_tiles_t( 'contact_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $yt_fallback ) ); ?>
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
