<?php
/**
 * Title: Home: journal
 * Slug: kawa-dumplings/journal
 * Categories: kawa-dumplings
 * Viewport Width: 1440
 * Description: Three latest notes as photograph cards.
 */
?>
<!-- wp:group {"tagName":"section","className":"kd-sec kd-journal","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-journal"><!-- wp:group {"className":"kd-wide","layout":{"type":"default"}} -->
<div class="wp-block-group kd-wide"><!-- wp:group {"className":"kd-tabbar","layout":{"type":"default"}} -->
<div class="wp-block-group kd-tabbar"><!-- wp:paragraph {"className":"kd-tab"} -->
<p class="kd-tab"><?php echo esc_html( kawa_dumplings_t( 'tab_notes' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-journal__head","layout":{"type":"default"}} -->
<div class="wp-block-group kd-journal__head"><!-- wp:heading {"className":"kd-h2"} -->
<h2 class="wp-block-heading kd-h2"><?php echo esc_html( kawa_dumplings_t( 'jr_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-link"} -->
<p class="kd-link"><a href="/journal/"><?php echo esc_html( kawa_dumplings_t( 'jr_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kd-cards sp-stagger"><!-- wp:group {"className":"kd-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kd-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kd-card__img"} -->
<figure class="wp-block-image size-full kd-card__img"><img src="<?php echo esc_url( kawa_dumplings_img( 'post-broth.webp' ) ); ?>" alt="<?php echo esc_attr( kawa_dumplings_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kd-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group kd-card__body"><!-- wp:paragraph {"className":"kd-card__d"} -->
<p class="kd-card__d"><?php echo esc_html( kawa_dumplings_t( 'post1_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kd-card__t"} -->
<h3 class="wp-block-heading kd-card__t"><a href="/how-the-broth-gets-inside/"><?php echo esc_html( kawa_dumplings_t( 'post1_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-card__x"} -->
<p class="kd-card__x"><?php echo esc_html( kawa_dumplings_t( 'post1_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kd-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kd-card__img"} -->
<figure class="wp-block-image size-full kd-card__img"><img src="<?php echo esc_url( kawa_dumplings_img( 'post-table-six.webp' ) ); ?>" alt="<?php echo esc_attr( kawa_dumplings_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kd-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group kd-card__body"><!-- wp:paragraph {"className":"kd-card__d"} -->
<p class="kd-card__d"><?php echo esc_html( kawa_dumplings_t( 'post2_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kd-card__t"} -->
<h3 class="wp-block-heading kd-card__t"><a href="/a-table-for-six-at-harbour-street/"><?php echo esc_html( kawa_dumplings_t( 'post2_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-card__x"} -->
<p class="kd-card__x"><?php echo esc_html( kawa_dumplings_t( 'post2_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kd-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kd-card__img"} -->
<figure class="wp-block-image size-full kd-card__img"><img src="<?php echo esc_url( kawa_dumplings_img( 'post-wrappers.webp' ) ); ?>" alt="<?php echo esc_attr( kawa_dumplings_t( 'alt_p15' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kd-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group kd-card__body"><!-- wp:paragraph {"className":"kd-card__d"} -->
<p class="kd-card__d"><?php echo esc_html( kawa_dumplings_t( 'post3_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kd-card__t"} -->
<h3 class="wp-block-heading kd-card__t"><a href="/morning-the-first-two-thousand-wrappers/"><?php echo esc_html( kawa_dumplings_t( 'post3_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-card__x"} -->
<p class="kd-card__x"><?php echo esc_html( kawa_dumplings_t( 'post3_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
