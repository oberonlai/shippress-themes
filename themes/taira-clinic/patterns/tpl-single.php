<?php
/**
 * Title: Template: single
 * Slug: taira-clinic/tpl-single
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"tc-main","layout":{"type":"default"}} -->
<main class="wp-block-group tc-main"><!-- wp:group {"tagName":"section","align":"full","className":"tc-pagehead tc-pagehead--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-pagehead tc-pagehead--plain"><!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap"><!-- wp:post-terms {"term":"category","className":"tc-chip"} /-->
<!-- wp:post-title {"level":1,"className":"tc-h1 tc-h1--inner"} /-->
<!-- wp:post-date {"format":"<?php echo esc_attr( taira_clinic_t( 'date_fmt' ) ); ?>","className":"tc-note"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-article","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-article"><!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap"><!-- wp:post-featured-image {"aspectRatio":"3/2","className":"tc-article__img"} /-->
<!-- wp:post-content {"layout":{"type":"default"}} /-->
<!-- wp:post-terms {"term":"post_tag","prefix":"Tags: ","className":"tc-tags"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->