<?php
/**
 * Title: Home: a park that is walked every morning (sticky photo)
 * Slug: nohara-park/front-story
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Sticky 4:5 photograph on the left; heading, three narrative paragraphs, a ruled list of the seven people and an inset photograph scroll beside it.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-story","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-story"><!-- wp:group {"className":"np-wrap np-story__grid","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-story__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-story__pic"} -->
<figure class="wp-block-image size-full np-story__pic"><img src="<?php echo nohara_park_img( 'n1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_N1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-story__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-story__txt"><!-- wp:heading {"className":"np-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'story_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"np-story__prose sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-story__prose sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'story_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'story_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'story_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<hr class="np-rule"/>
<!-- /wp:html -->

<!-- wp:html -->
<ul class="np-people"><li><b><?php echo esc_html( nohara_park_t( 'ppl_1_n' ) ); ?></b> <span><?php echo esc_html( nohara_park_t( 'ppl_1_r' ) ); ?></span></li><li><b><?php echo esc_html( nohara_park_t( 'ppl_2_n' ) ); ?></b> <span><?php echo esc_html( nohara_park_t( 'ppl_2_r' ) ); ?></span></li><li><b><?php echo esc_html( nohara_park_t( 'ppl_3_n' ) ); ?></b> <span><?php echo esc_html( nohara_park_t( 'ppl_3_r' ) ); ?></span></li><li><b><?php echo esc_html( nohara_park_t( 'ppl_4_n' ) ); ?></b> <span><?php echo esc_html( nohara_park_t( 'ppl_4_r' ) ); ?></span></li><li><b><?php echo esc_html( nohara_park_t( 'ppl_5_n' ) ); ?></b> <span><?php echo esc_html( nohara_park_t( 'ppl_5_r' ) ); ?></span></li><li><b><?php echo esc_html( nohara_park_t( 'ppl_6_n' ) ); ?></b> <span><?php echo esc_html( nohara_park_t( 'ppl_6_r' ) ); ?></span></li><li><b><?php echo esc_html( nohara_park_t( 'ppl_7_n' ) ); ?></b> <span><?php echo esc_html( nohara_park_t( 'ppl_7_r' ) ); ?></span></li></ul>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-story__inset"} -->
<figure class="wp-block-image size-full np-story__inset"><img src="<?php echo nohara_park_img( 'a1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_A1' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( nohara_park_t( 'story_cap' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/wardens/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'story_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
