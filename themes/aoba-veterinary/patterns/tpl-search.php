<?php
/**
 * Title: Template: search results
 * Slug: aoba-veterinary/tpl-search
 * Categories: aoba-veterinary
 * Keywords: template
 * Viewport Width: 1440
 * Description: Search heading, form and result list.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-pagehead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-pagehead"><!-- wp:query-title {"type":"search","align":"wide"} /-->

<!-- wp:search {"label":"Search","buttonText":"Search","align":"wide"} /--></section>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"av-prose"} -->
<div class="wp-block-query av-prose"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"level":2,"fontSize":"large"} /-->

<!-- wp:post-excerpt {"excerptLength":40} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing matched that search. Try another word, or call the clinic on +1 555 0142 300.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
