<?php
/**
 * Title: Home: stories
 * Slug: azuke-finance/front-stories
 * Categories: azuke-finance
 * Keywords: invoice funding, factoring, landing
 * Viewport Width: 1440
 * Description: Three supplier stories as photo cards with pill tags.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-stories","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull az-stories"><!-- wp:group {"className":"az-stories__head","layout":{"type":"default"}} -->
<div class="wp-block-group az-stories__head"><!-- wp:heading {"className":"az-title sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading az-title sp-reveal sp-reveal--mask"><?php echo esc_html( azuke_finance_t( 's_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-body"} -->
<p class="az-body"><?php echo esc_html( azuke_finance_t( 's_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group az-cards sp-stagger"><!-- wp:group {"className":"az-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group az-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"az-card__img"} -->
<figure class="wp-block-image size-full az-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p1.webp' ) ); ?>" alt="<?php echo esc_attr( azuke_finance_t( 'alt_p1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"az-tag"} -->
<p class="az-tag"><?php echo esc_html( azuke_finance_t( 's_tag1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-card__name"} -->
<p class="az-card__name"><?php echo esc_html( azuke_finance_t( 's_n1' ) ); ?><br><span class="az-card__biz"><?php echo esc_html( azuke_finance_t( 's_b1' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-card__out"} -->
<p class="az-card__out"><?php echo esc_html( azuke_finance_t( 's_o1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-card__go"} -->
<p class="az-card__go"><a href="/stories/"><?php echo esc_html( azuke_finance_t( 's_read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group az-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"az-card__img"} -->
<figure class="wp-block-image size-full az-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p2.webp' ) ); ?>" alt="<?php echo esc_attr( azuke_finance_t( 'alt_p2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"az-tag"} -->
<p class="az-tag"><?php echo esc_html( azuke_finance_t( 's_tag2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-card__name"} -->
<p class="az-card__name"><?php echo esc_html( azuke_finance_t( 's_n2' ) ); ?><br><span class="az-card__biz"><?php echo esc_html( azuke_finance_t( 's_b2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-card__out"} -->
<p class="az-card__out"><?php echo esc_html( azuke_finance_t( 's_o2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-card__go"} -->
<p class="az-card__go"><a href="/stories/"><?php echo esc_html( azuke_finance_t( 's_read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group az-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"az-card__img"} -->
<figure class="wp-block-image size-full az-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p3.webp' ) ); ?>" alt="<?php echo esc_attr( azuke_finance_t( 'alt_p3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"az-tag"} -->
<p class="az-tag"><?php echo esc_html( azuke_finance_t( 's_tag3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-card__name"} -->
<p class="az-card__name"><?php echo esc_html( azuke_finance_t( 's_n3' ) ); ?><br><span class="az-card__biz"><?php echo esc_html( azuke_finance_t( 's_b3' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-card__out"} -->
<p class="az-card__out"><?php echo esc_html( azuke_finance_t( 's_o3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-card__go"} -->
<p class="az-card__go"><a href="/stories/"><?php echo esc_html( azuke_finance_t( 's_read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
