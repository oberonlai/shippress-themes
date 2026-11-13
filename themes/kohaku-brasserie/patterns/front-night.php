<?php
/**
 * Title: Home: night band
 * Slug: kohaku-brasserie/front-night
 * Categories: kohaku-brasserie
 * Viewport Width: 1440
 * Description: Espresso band with a dimmed pinned photograph, a parenthesised label, the big word and three short paragraphs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kb-night","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kb-night"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kb-night__bg"} -->
<figure class="wp-block-image size-full kb-night__bg"><img src="<?php echo kohaku_brasserie_img( 'h04' ); ?>" alt="<?php echo esc_attr( kohaku_brasserie_t( 'a91bb3bf2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kb-night__in","layout":{"type":"default"}} -->
<div class="wp-block-group kb-night__in"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label"><?php echo wp_kses_post( kohaku_brasserie_t( 'k6b39ac81' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kb-night__word"} -->
<h2 class="wp-block-heading kb-night__word"><?php echo wp_kses_post( kohaku_brasserie_t( 'k30a36407' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kb-night__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kb-night__text sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( kohaku_brasserie_t( 'k96e7dd52' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( kohaku_brasserie_t( 'k029b6cf8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( kohaku_brasserie_t( 'ke93b8114' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
