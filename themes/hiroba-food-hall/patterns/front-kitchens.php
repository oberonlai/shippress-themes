<?php
/**
 * Title: Home: kitchen cards
 * Slug: hiroba-food-hall/front-kitchens
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Description: Paper band with two kitchen cards (cover, medallion, plates, hours chip, gold button) and the other six kitchens.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-sec--paper hb-kitchens","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-sec hb-sec--paper hb-kitchens"><!-- wp:group {"className":"hb-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hb-lockup"><!-- wp:paragraph {"className":"hb-caps"} -->
<p class="hb-caps"><?php echo esc_html( hiroba_t( 'caps_kitchens' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-sub"} -->
<p class="hb-sub"><?php echo esc_html( hiroba_t( 'sub_kitchens' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-rule"/>
<!-- /wp:separator -->

<!-- wp:heading {"className":"hb-statement"} -->
<h2 class="wp-block-heading hb-statement"><?php echo hiroba_gold( 'st_kitchens' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hb-intro"} -->
<p class="hb-intro"><?php echo esc_html( hiroba_t( 'kitchens_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hb-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hb-cards sp-stagger"><!-- wp:group {"className":"hb-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hb-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-card__cover"} -->
<figure class="wp-block-image size-full hb-card__cover"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hb-medal","layout":{"type":"default"}} -->
<div class="wp-block-group hb-medal"><!-- wp:paragraph {"className":"hb-medal__m"} -->
<p class="hb-medal__m">LL</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"hb-card__name","level":3} -->
<h3 class="wp-block-heading hb-card__name"><?php echo esc_html( hiroba_t( 'k1_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hb-card__cuisine"} -->
<p class="hb-card__cuisine"><?php echo esc_html( hiroba_t( 'k1_cuisine' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hb-flank","layout":{"type":"default"}} -->
<div class="wp-block-group hb-flank"><!-- wp:separator {"className":"hb-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-hair"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"hb-flank__t"} -->
<p class="hb-flank__t"><?php echo esc_html( hiroba_t( 'plates_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hb-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-thumbs","layout":{"type":"default"}} -->
<div class="wp-block-group hb-thumbs"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-thumb"} -->
<figure class="wp-block-image size-full hb-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p07.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p07' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( hiroba_t( 'k1_t1' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-thumb"} -->
<figure class="wp-block-image size-full hb-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p08' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( hiroba_t( 'k1_t2' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-thumb"} -->
<figure class="wp-block-image size-full hb-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p09' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( hiroba_t( 'k1_t3' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-hours-row","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hours-row"><!-- wp:paragraph {"className":"hb-chip"} -->
<p class="hb-chip"><?php echo esc_html( hiroba_t( 'chip_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hb-hours-lines","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hours-lines"><!-- wp:paragraph {"className":"hb-hl"} -->
<p class="hb-hl"><?php echo esc_html( hiroba_t( 'card_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-hl"} -->
<p class="hb-hl"><?php echo esc_html( hiroba_t( 'card_h2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hb-btn hb-btn--gold hb-card__btn"} -->
<div class="wp-block-button hb-btn hb-btn--gold hb-card__btn"><a class="wp-block-button__link wp-element-button" href="/kitchens/"><?php echo esc_html( hiroba_t( 'card_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hb-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-card__cover"} -->
<figure class="wp-block-image size-full hb-card__cover"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p06' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hb-medal","layout":{"type":"default"}} -->
<div class="wp-block-group hb-medal"><!-- wp:paragraph {"className":"hb-medal__m"} -->
<p class="hb-medal__m">EG</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"hb-card__name","level":3} -->
<h3 class="wp-block-heading hb-card__name"><?php echo esc_html( hiroba_t( 'k2_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hb-card__cuisine"} -->
<p class="hb-card__cuisine"><?php echo esc_html( hiroba_t( 'k2_cuisine' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hb-flank","layout":{"type":"default"}} -->
<div class="wp-block-group hb-flank"><!-- wp:separator {"className":"hb-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-hair"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"hb-flank__t"} -->
<p class="hb-flank__t"><?php echo esc_html( hiroba_t( 'plates_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hb-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-thumbs","layout":{"type":"default"}} -->
<div class="wp-block-group hb-thumbs"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-thumb"} -->
<figure class="wp-block-image size-full hb-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p10' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( hiroba_t( 'k2_t1' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-thumb"} -->
<figure class="wp-block-image size-full hb-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p11' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( hiroba_t( 'k2_t2' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-thumb"} -->
<figure class="wp-block-image size-full hb-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p12' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( hiroba_t( 'k2_t3' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-hours-row","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hours-row"><!-- wp:paragraph {"className":"hb-chip"} -->
<p class="hb-chip"><?php echo esc_html( hiroba_t( 'chip_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hb-hours-lines","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hours-lines"><!-- wp:paragraph {"className":"hb-hl"} -->
<p class="hb-hl"><?php echo esc_html( hiroba_t( 'card_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-hl"} -->
<p class="hb-hl"><?php echo esc_html( hiroba_t( 'card_h2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hb-btn hb-btn--gold hb-card__btn"} -->
<div class="wp-block-button hb-btn hb-btn--gold hb-card__btn"><a class="wp-block-button__link wp-element-button" href="/kitchens/"><?php echo esc_html( hiroba_t( 'card_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-discs sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hb-discs sp-reveal sp-reveal--up"><!-- wp:group {"className":"hb-disc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-disc"><!-- wp:paragraph {"className":"hb-disc__m"} -->
<p class="hb-disc__m">GC</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-disc__n"} -->
<p class="hb-disc__n"><?php echo esc_html( hiroba_t( 'kn_gc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-disc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-disc"><!-- wp:paragraph {"className":"hb-disc__m"} -->
<p class="hb-disc__m">WR</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-disc__n"} -->
<p class="hb-disc__n"><?php echo esc_html( hiroba_t( 'kn_wr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-disc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-disc"><!-- wp:paragraph {"className":"hb-disc__m"} -->
<p class="hb-disc__m">SS</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-disc__n"} -->
<p class="hb-disc__n"><?php echo esc_html( hiroba_t( 'kn_ss' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-disc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-disc"><!-- wp:paragraph {"className":"hb-disc__m"} -->
<p class="hb-disc__m">FR</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-disc__n"} -->
<p class="hb-disc__n"><?php echo esc_html( hiroba_t( 'kn_fr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-disc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-disc"><!-- wp:paragraph {"className":"hb-disc__m"} -->
<p class="hb-disc__m">BH</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-disc__n"} -->
<p class="hb-disc__n"><?php echo esc_html( hiroba_t( 'kn_bh' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-disc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-disc"><!-- wp:paragraph {"className":"hb-disc__m"} -->
<p class="hb-disc__m">ST</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-disc__n"} -->
<p class="hb-disc__n"><?php echo esc_html( hiroba_t( 'kn_st' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hb-more"} -->
<p class="hb-more"><a href="/kitchens/"><?php echo esc_html( hiroba_t( 'all_kitchens' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
