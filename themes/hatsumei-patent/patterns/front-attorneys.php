<?php
/**
 * Title: Home: the attorneys by name
 * Slug: hatsumei-patent/front-attorneys
 * Categories: hatsumei-patent
 * Keywords: attorneys, people, team
 * Viewport Width: 1440
 * Description: The founder in a large chamfered portrait with a quotation, and two colleagues beside her as ruled rows with a small portrait, name, role and one sentence.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-attys","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hp-attys"><!-- wp:group {"className":"hp-attys__lead","layout":{"type":"default"}} -->
<div class="wp-block-group hp-attys__lead"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-attys__portrait hp-cut hp-cut--j"} -->
<figure class="wp-block-image size-full hp-attys__portrait hp-cut hp-cut--j"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-ines.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_atty_img1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hp-attys__quote","layout":{"type":"default"}} -->
<div class="wp-block-group hp-attys__quote"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'front_atty_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-attys__q"} -->
<p class="hp-attys__q"><?php echo wp_kses_post( hatsumei_patent_t( 'front_atty_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-attys__name"} -->
<p class="hp-attys__name"><?php echo wp_kses_post( hatsumei_patent_t( 'front_atty_n1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-attys__role"} -->
<p class="hp-attys__role"><?php echo wp_kses_post( hatsumei_patent_t( 'front_atty_r1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-attys__list","layout":{"type":"default"}} -->
<div class="wp-block-group hp-attys__list"><!-- wp:group {"className":"hp-atty","layout":{"type":"default"}} -->
<div class="wp-block-group hp-atty"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-atty__img"} -->
<figure class="wp-block-image size-full hp-atty__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-tomas.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_atty_img2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hp-atty__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-atty__text"><!-- wp:paragraph {"className":"hp-atty__name"} -->
<p class="hp-atty__name"><?php echo wp_kses_post( hatsumei_patent_t( 'front_atty_n2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-atty__role"} -->
<p class="hp-atty__role"><?php echo wp_kses_post( hatsumei_patent_t( 'front_atty_r2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-atty","layout":{"type":"default"}} -->
<div class="wp-block-group hp-atty"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-atty__img"} -->
<figure class="wp-block-image size-full hp-atty__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-amara.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_atty_img3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hp-atty__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-atty__text"><!-- wp:paragraph {"className":"hp-atty__name"} -->
<p class="hp-atty__name"><?php echo wp_kses_post( hatsumei_patent_t( 'front_atty_n3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-atty__role"} -->
<p class="hp-atty__role"><?php echo wp_kses_post( hatsumei_patent_t( 'front_atty_r3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"hp-attys__btns"} -->
<div class="wp-block-buttons hp-attys__btns"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/attorneys/"><?php echo wp_kses_post( hatsumei_patent_t( 'front_atty_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
