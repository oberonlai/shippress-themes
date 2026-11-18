<?php
/**
 * Title: Home: journal
 * Slug: yukishiro-chalet/journal
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Three story cards: two with photographs and one text card.
 */
?>
<!-- wp:group {"tagName":"section","className":"yk-sec yk-journal","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-journal"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-chap"><!-- wp:paragraph {"className":"yk-lead"} -->
<p class="yk-lead"><?php echo esc_html( yukishiro_chalet_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title"} -->
<h2 class="wp-block-heading yk-title"><?php echo esc_html( yukishiro_chalet_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"yk-lede"} -->
<p class="yk-lede"><?php echo esc_html( yukishiro_chalet_t( 'journal_lede' ) ); ?> <a href="/journal/"><?php echo esc_html( yukishiro_chalet_t( 'journal_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-posts sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-posts sp-stagger"><!-- wp:group {"className":"yk-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-post sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-post__img"} -->
<figure class="wp-block-image size-full yk-post__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'post-drying.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p17' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yk-post__d"} -->
<p class="yk-post__d"><?php echo esc_html( yukishiro_chalet_t( 'post1_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"yk-post__t"} -->
<h3 class="wp-block-heading yk-post__t"><?php echo esc_html( yukishiro_chalet_t( 'post1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-post__x"} -->
<p class="yk-post__x"><?php echo esc_html( yukishiro_chalet_t( 'post1_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/how-the-drying-room-works-overnight/"><?php echo esc_html( yukishiro_chalet_t( 'read' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-post sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-post__img"} -->
<figure class="wp-block-image size-full yk-post__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'post-first-day.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p18' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yk-post__d"} -->
<p class="yk-post__d"><?php echo esc_html( yukishiro_chalet_t( 'post2_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"yk-post__t"} -->
<h3 class="wp-block-heading yk-post__t"><?php echo esc_html( yukishiro_chalet_t( 'post2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-post__x"} -->
<p class="yk-post__x"><?php echo esc_html( yukishiro_chalet_t( 'post2_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/your-first-day-on-skis-from-the-door/"><?php echo esc_html( yukishiro_chalet_t( 'read' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-post yk-post--text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-post yk-post--text sp-reveal sp-reveal--up"><!-- wp:html -->
<svg class="yk-flake" width="28" height="28" viewBox="0 0 14 14" fill="none" stroke="#C9A25F" stroke-width="1" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M7 1v12M1.8 4l10.4 6M12.2 4 1.8 10"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yk-post__d"} -->
<p class="yk-post__d"><?php echo esc_html( yukishiro_chalet_t( 'post3_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"yk-post__t"} -->
<h3 class="wp-block-heading yk-post__t"><?php echo esc_html( yukishiro_chalet_t( 'post3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-post__x"} -->
<p class="yk-post__x"><?php echo esc_html( yukishiro_chalet_t( 'post3_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/hut-to-hut-in-four-days/"><?php echo esc_html( yukishiro_chalet_t( 'read' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
