<?php
/**
 * Title: Home: chalet intro
 * Slug: yukishiro-chalet/intro
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Centred chapter head, three narrative paragraphs and a two-photograph row.
 */
?>
<!-- wp:group {"tagName":"section","className":"yk-sec yk-intro","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-intro"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-chap"><!-- wp:paragraph {"className":"yk-lead"} -->
<p class="yk-lead"><?php echo esc_html( yukishiro_chalet_t( 'intro_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title"} -->
<h2 class="wp-block-heading yk-title"><?php echo esc_html( yukishiro_chalet_t( 'intro_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"yk-lede"} -->
<p class="yk-lede"><?php echo esc_html( yukishiro_chalet_t( 'intro_lede' ) ); ?> <a href="/about/"><?php echo esc_html( yukishiro_chalet_t( 'intro_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-prose sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-prose sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 'intro_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 'intro_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 'intro_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-duo sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-duo sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-duo__a sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full yk-duo__a sp-reveal sp-reveal--up"><img src="<?php echo esc_url( yukishiro_chalet_img( 'skis-at-door.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-duo__b sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full yk-duo__b sp-reveal sp-reveal--up"><img src="<?php echo esc_url( yukishiro_chalet_img( 'hut-trail.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
