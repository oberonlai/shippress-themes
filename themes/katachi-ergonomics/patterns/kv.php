<?php
/**
 * Title: Home: photograph with docked card
 * Slug: katachi-ergonomics/kv
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk, consultancy
 * Viewport Width: 1440
 * Description: Full-bleed pale photograph with a wide-tracked headline, three observation markers and a white card docked at the lower left with the booking button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ke-kv sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ke-kv sp-parallax"><!-- wp:group {"className":"ke-kv__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group ke-kv__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ke-kv__photo"} -->
<figure class="wp-block-image size-full ke-kv__photo"><img src="<?php echo katachi_ergonomics_img( 'kv-desk.webp' ); ?>" alt="<?php echo esc_attr( katachi_ergonomics_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ke-kv__wash" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:html -->
<div class="ke-kv__marks" aria-hidden="true"><span class="ke-mark ke-mark--1"><span class="ke-mark__tag"><?php echo esc_html( katachi_ergonomics_t( 'mk1' ) ); ?><span class="ke-mark__line"></span><span class="ke-mark__dot"></span></span></span><span class="ke-mark ke-mark--2"><span class="ke-mark__tag"><?php echo esc_html( katachi_ergonomics_t( 'mk2' ) ); ?><span class="ke-mark__line"></span><span class="ke-mark__dot"></span></span></span><span class="ke-mark ke-mark--3"><span class="ke-mark__tag"><?php echo esc_html( katachi_ergonomics_t( 'mk3' ) ); ?><span class="ke-mark__line"></span><span class="ke-mark__dot"></span></span></span></div>
<!-- /wp:html -->

<!-- wp:heading {"level":1,"className":"ke-kv__title"} -->
<h1 class="wp-block-heading ke-kv__title"><?php echo esc_html( katachi_ergonomics_t( 'kv_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ke-kv__card","layout":{"type":"default"}} -->
<div class="wp-block-group ke-kv__card"><!-- wp:heading {"level":2,"className":"ke-card__t"} -->
<h2 class="wp-block-heading ke-card__t"><?php echo esc_html( katachi_ergonomics_t( 'kv_ct' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-card__p"} -->
<p class="ke-card__p"><?php echo esc_html( katachi_ergonomics_t( 'kv_cp' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ke-card__cta"} -->
<div class="wp-block-buttons ke-card__cta"><!-- wp:button {"className":"ke-btn ke-btn--arrow"} -->
<div class="wp-block-button ke-btn ke-btn--arrow"><a class="wp-block-button__link wp-element-button" href="#book"><?php echo esc_html( katachi_ergonomics_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"ke-kv__list"} -->
<ul class="wp-block-list ke-kv__list"><!-- wp:list-item -->
<li><a href="#includes"><?php echo esc_html( katachi_ergonomics_t( 'mk1' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#includes"><?php echo esc_html( katachi_ergonomics_t( 'mk2' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#includes"><?php echo esc_html( katachi_ergonomics_t( 'mk3' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></section>
<!-- /wp:group -->
