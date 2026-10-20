<?php
/**
 * Title: Home: the firm in three paragraphs
 * Slug: hatsumei-patent/front-story
 * Categories: hatsumei-patent
 * Keywords: about, story, narrative
 * Viewport Width: 1440
 * Description: A vertical section label, a heading and three narrative paragraphs about the firm beside two chamfered photographs of the library and a client meeting, the second set lower.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-story","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hp-story"><!-- wp:group {"className":"hp-story__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hp-story__grid"><!-- wp:group {"className":"hp-story__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-story__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'front_story_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hp-story__title"} -->
<h2 class="wp-block-heading hp-story__title"><?php echo wp_kses_post( hatsumei_patent_t( 'front_story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hatsumei_patent_t( 'front_story_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hatsumei_patent_t( 'front_story_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hatsumei_patent_t( 'front_story_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hp-after"} -->
<div class="wp-block-buttons hp-after"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo wp_kses_post( hatsumei_patent_t( 'front_story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-story__photos","layout":{"type":"default"}} -->
<div class="wp-block-group hp-story__photos"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-story__p1 hp-cut hp-cut--b"} -->
<figure class="wp-block-image size-full hp-story__p1 hp-cut hp-cut--b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/library.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_story_img1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-story__p2 hp-cut hp-cut--c"} -->
<figure class="wp-block-image size-full hp-story__p2 hp-cut hp-cut--c"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_story_img2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
