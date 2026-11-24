<?php
/**
 * Title: Page: Contact
 * Slug: yuka-tiles/page-contact
 * Categories: yuka-tiles
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact page: address, hours, contact form slot with mailto fallback and a photograph.
 */
?>
<?php ob_start(); ?>
<div class="wp-block-buttons yt-pair yt-pair--copper yt-pair--single"><div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="mailto:hello@yuka-tiles.example?subject=<?php echo rawurlencode( yuka_tiles_t( 'contact_mail_subject' ) ); ?>"><?php echo esc_html( yuka_tiles_t( 'contact_email_button' ) ); ?></a></div></div>
<?php $yt_fallback = ob_get_clean(); ?>
<!-- wp:group {"tagName":"section","className":"yt-sec yt-psec","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-psec">
<!-- wp:group {"className":"yt-wrap yt-wrap--c yt-wrap--page yt-split yt-split--7-5 yt-contact","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c yt-wrap--page yt-split yt-split--7-5 yt-contact">
<!-- wp:group {"className":"yt-contact__text","layout":{"type":"default"}} -->
<div class="wp-block-group yt-contact__text">
<!-- wp:paragraph {"className":"yt-label"} -->
<p class="yt-label"><?php echo esc_html( yuka_tiles_t( 'lbl_contact' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yt-h2 yt-h2--page"} -->
<h1 class="wp-block-heading yt-h2 yt-h2--page"><?php echo esc_html( yuka_tiles_t( 'contact_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-lede"} -->
<p class="yt-lede"><?php echo esc_html( yuka_tiles_t( 'contact_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"yt-isec","layout":{"type":"default"}} -->
<div class="wp-block-group yt-isec">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'contact_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-isec","layout":{"type":"default"}} -->
<div class="wp-block-group yt-isec">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'contact_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'contact_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $yt_fallback ) ); ?>
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-contact__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yt-contact__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-contact__img"} -->
<figure class="wp-block-image size-full yt-contact__img"><img src="<?php echo yuka_tiles_img( 'project-stair.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_c2' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
