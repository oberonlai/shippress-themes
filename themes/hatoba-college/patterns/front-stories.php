<?php
/**
 * Title: Home: cadet stories
 * Slug: hatoba-college/front-stories
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Description: One story, magazine style: 3:2 photograph beside an italic pull quote, with links to the other stories.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"stories","className":"hc-sec hc-stories","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull hc-sec hc-stories"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'stories_h_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'stories_h_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'stories_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-story","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hc-story__photo"} -->
<figure class="wp-block-image size-large hc-story__photo"><img src="<?php echo hatoba_college_img( 'p10-deck-portrait.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-story__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story__text sp-reveal sp-reveal--up"><!-- wp:quote {"className":"hc-quote"} -->
<blockquote class="wp-block-quote hc-quote"><!-- wp:paragraph -->
<p><?php echo esc_html( hatoba_college_t( 'story_q' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html( hatoba_college_t( 'story_c' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph {"className":"hc-more"} -->
<p class="hc-more"><a href="<?php echo hatoba_college_url( '/cadet-stories/' ); ?>"><?php echo esc_html( hatoba_college_t( 'story_l1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-more"} -->
<p class="hc-more"><a href="<?php echo hatoba_college_url( '/cadet-stories/' ); ?>"><?php echo esc_html( hatoba_college_t( 'story_l2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
