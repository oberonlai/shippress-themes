<?php
/**
 * Title: Home: pharmacy notices
 * Slug: megumi-pharmacy/front-notices
 * Categories: megumi-pharmacy
 * Keywords: notices, news, posts
 * Viewport Width: 1440
 * Description: A Latin display label at the left and three hairline notice rows with date, category chip, title and pill.
 */
$cat = megumi_pharmacy_notices_cat();
$tax = $cat ? ',"taxQuery":{"category":[' . $cat . ']}' : '';
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mp-sec mp-notices","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mp-sec mp-notices"><!-- wp:group {"className":"mp-wrap mp-notices__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mp-wrap mp-notices__grid"><!-- wp:group {"className":"mp-notices__label","layout":{"type":"default"}} -->
<div class="wp-block-group mp-notices__label"><!-- wp:paragraph {"className":"mp-display"} -->
<p class="mp-display"><?php echo wp_kses_post( megumi_pharmacy_t( 'kd9f4b50c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-cap"} -->
<p class="mp-cap"><?php echo wp_kses_post( megumi_pharmacy_t( 'k362df86c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-notices__list","layout":{"type":"default"}} -->
<div class="wp-block-group mp-notices__list"><!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false<?php echo $tax; ?>},"className":"mp-notes"} -->
<div class="wp-block-query mp-notes"><!-- wp:post-template {"className":"sp-stagger"} -->
<!-- wp:group {"className":"mp-note sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-note sp-reveal sp-reveal--up"><!-- wp:post-date {"format":"Y.m.d","className":"mp-note__date"} /-->

<!-- wp:post-terms {"term":"category","className":"mp-note__chip"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mp-note__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"mp-more mp-more--end"} -->
<p class="mp-more mp-more--end"><a href="/stories/"><?php echo wp_kses_post( megumi_pharmacy_t( 'kf7a778bf' ) ); ?></a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
