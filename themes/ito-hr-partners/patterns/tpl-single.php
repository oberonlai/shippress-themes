<?php
/**
 * Title: Template: single
 * Slug: ito-hr-partners/tpl-single
 * Categories: ito-hr-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ih-main","layout":{"type":"default"}} -->
<main class="wp-block-group ih-main"><!-- wp:group {"tagName":"section","align":"full","className":"ih-hero ih-phead ih-phead--post","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ih-hero ih-phead ih-phead--post"><!-- wp:group {"className":"ih-hero__top","layout":{"type":"default"}} -->
<div class="wp-block-group ih-hero__top"><!-- wp:post-terms {"term":"category","className":"ih-hero__label"} /-->

<!-- wp:post-title {"level":1,"className":"ih-hero__h1 ih-phead__h1 ih-phead__h1--post"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ih-hero__row","layout":{"type":"default"}} -->
<div class="wp-block-group ih-hero__row"><!-- wp:group {"className":"ih-prow ih-prow--single","layout":{"type":"default"}} -->
<div class="wp-block-group ih-prow ih-prow--single"><!-- wp:post-featured-image {"aspectRatio":"auto","className":"ih-card ih-card--b"} /--></div>
<!-- /wp:group -->

<!-- wp:html -->
<?php echo wp_kses_post( ito_hr_partners_t( 'kd8d84cdf' ) ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ih-single-text","layout":{"type":"default"}} -->
<div class="wp-block-group ih-single-text"><!-- wp:post-content {"layout":{"type":"default"}} /--></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"ito-hr-partners/page-story-close"} /--></main>
<!-- /wp:group -->