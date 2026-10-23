<?php
/**
 * Title: Home: client stories
 * Slug: ito-hr-partners/front-stories
 * Categories: ito-hr-partners
 * Keywords: consultancy, hr, employment law
 * Viewport Width: 1440
 * Description: Three story cards (2:1 photograph, category chip, title, excerpt, round arrow) from the latest posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ih-stories","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ih-stories"><!-- wp:group {"className":"ih-stories__in","layout":{"type":"default"}} -->
<div class="wp-block-group ih-stories__in"><!-- wp:group {"className":"ih-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ih-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ih-label"} -->
<p class="ih-label"><?php echo wp_kses_post( ito_hr_partners_t( 'k96f789ae' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ih-h2"} -->
<h2 class="wp-block-heading ih-h2"><?php echo wp_kses_post( ito_hr_partners_t( 'k94db9ea4' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ih-stories__q sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-query ih-stories__q sp-reveal sp-reveal--up"><!-- wp:post-template {"className":"ih-stories__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/1","className":"ih-story__img"} /-->

<!-- wp:post-terms {"term":"category","className":"ih-story__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ih-story__title"} /-->

<!-- wp:post-excerpt {"excerptLength":30,"className":"ih-story__ex"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
