<?php
/**
 * Title: Template: recovery stories list
 * Slug: aoba-veterinary/tpl-stories
 * Categories: aoba-veterinary
 * Keywords: template
 * Viewport Width: 1440
 * Description: The posts page: a photograph head with the framed box, then each story as a ruled row with a 4:3 photograph left and text right.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-hero av-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-hero av-hero--page"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>","alt":"Bright empty waiting area with an oak bench and green plants","dimRatio":0,"minHeight":360,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-hero__photo" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Bright empty waiting area with an oak bench and green plants" src="<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box","layout":{"type":"default"}} -->
<div class="wp-block-group av-box"><!-- wp:heading {"textAlign":"center","level":1,"className":"av-box__title"} -->
<h1 class="wp-block-heading has-text-align-center av-box__title">Recovery stories</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line">Three animals, told one at a time</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-page av-page--list","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-page av-page--list"><!-- wp:paragraph {"className":"av-lead"} -->
<p class="av-lead">Each story is a single case, told with the animal, the clinician and what actually happened. Every animal is different, and these are not a promise of the same result.</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","inherit":false},"align":"wide","className":"av-stories"} -->
<div class="wp-block-query alignwide av-stories"><!-- wp:post-template -->
<!-- wp:group {"className":"av-storyrow","layout":{"type":"default"}} -->
<div class="wp-block-group av-storyrow"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"av-storyrow__img"} /-->

<!-- wp:group {"className":"av-storyrow__text","layout":{"type":"default"}} -->
<div class="wp-block-group av-storyrow__text"><!-- wp:post-title {"isLink":true,"level":2,"className":"av-long av-long--small"} /-->

<!-- wp:post-excerpt {"excerptLength":30} /-->

<!-- wp:read-more {"content":"Read the story","className":"av-readmore"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
