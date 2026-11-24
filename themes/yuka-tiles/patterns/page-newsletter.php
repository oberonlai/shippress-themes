<?php
/**
 * Title: Page: New-arrivals letter
 * Slug: yuka-tiles/newsletter
 * Categories: yuka-tiles
 * Inserter: no
 * Viewport Width: 1440
 * Description: Standalone newsletter page: triptych head, what the letter holds, the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yt-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yt-ihead">
<!-- wp:group {"className":"yt-ihead__tri","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__tri">
<!-- wp:group {"className":"yt-ihead__col","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__col">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-ihead__img"} -->
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'range-glazed.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_r3' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-ihead__col","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__col">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-ihead__img"} -->
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'range-terrazzo.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_r4' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-ihead__col","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__col">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-ihead__img"} -->
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'range-grout.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_r5' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="yt-sun" aria-hidden="true"></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__text">
<!-- wp:paragraph {"className":"yt-ihead__label"} -->
<p class="yt-ihead__label"><?php echo esc_html( yuka_tiles_t( 'lbl_newsletter' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yt-ihead__t"} -->
<h1 class="wp-block-heading yt-ihead__t"><?php echo esc_html( yuka_tiles_t( 'newsletter_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-ihead__lede"} -->
<p class="yt-ihead__lede"><?php echo esc_html( yuka_tiles_t( 'newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--copper"} -->
<div class="wp-block-buttons yt-pair yt-pair--copper">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( yuka_tiles_t( 'btn_journal' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/borrow/"><?php echo esc_html( yuka_tiles_t( 'btn_borrow' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"yt-sec yt-isecs","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-isecs">
<!-- wp:group {"className":"yt-wrap yt-wrap--c sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c sp-stagger">
<!-- wp:group {"className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'newsletter_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'newsletter_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'newsletter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'newsletter_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"yt-sec yt-letter-page","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-letter-page">
<!-- wp:group {"className":"yt-wrap yt-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c">
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
