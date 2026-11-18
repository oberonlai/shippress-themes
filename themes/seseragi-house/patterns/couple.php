<?php
/**
 * Title: Couple: the hung page
 * Slug: seseragi-house/couple
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: The text column at 31% with two photographs of different ratios hung beside it, a wide photograph bleeding off the left edge and a vertical title in the right margin.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"house","className":"sese-sec sese-couple","layout":{"type":"default"}} -->
<section id="house" class="wp-block-group sese-sec sese-couple">
<!-- wp:group {"className":"sese-hung","layout":{"type":"default"}} -->
<div class="wp-block-group sese-hung">
<!-- wp:group {"className":"sese-hung__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-hung__text sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sese-eyebrow"} -->
<p class="sese-eyebrow"><?php echo esc_html( seseragi_house_t( 'couple_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'couple_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'couple_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'couple_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-hung__side","layout":{"type":"default"}} -->
<div class="wp-block-group sese-hung__side">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-ph sese-ph--wide sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full sese-ph sese-ph--wide sp-reveal sp-reveal--up"><img src="<?php echo esc_url( seseragi_house_img( 'couple-kitchen-door.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-ph sese-ph--tall sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full sese-ph sese-ph--tall sp-reveal sp-reveal--up"><img src="<?php echo esc_url( seseragi_house_img( 'jonas-coffee-stairs.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-hung2","layout":{"type":"default"}} -->
<div class="wp-block-group sese-hung2">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-ph sese-hung2__img sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full sese-ph sese-hung2__img sp-reveal sp-reveal--up"><img src="<?php echo esc_url( seseragi_house_img( 'window-table-set.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sese-hung2__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-hung2__text sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'couple_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-sig"} -->
<p class="sese-sig"><?php echo esc_html( seseragi_house_t( 'couple_sig' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sese-vt sese-vt--b"} -->
<p class="sese-vt sese-vt--b"><?php echo esc_html( seseragi_house_t( 'couple_vt' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
