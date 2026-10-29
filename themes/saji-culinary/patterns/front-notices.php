<?php
/**
 * Title: Home: notices
 * Slug: saji-culinary/front-notices
 * Categories: saji-culinary
 * Keywords: culinary school, cooking, chef
 * Viewport Width: 1440
 * Description: The NOTICES word with the "new" seal on the left and the three latest notices as hairline rows on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"saji-sec saji-notices","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull saji-sec saji-notices"><!-- wp:group {"align":"wide","className":"saji-notices__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide saji-notices__grid"><!-- wp:group {"className":"saji-notices__word","layout":{"type":"default"}} -->
<div class="wp-block-group saji-notices__word"><?php echo saji_culinary_word( saji_culinary_t( 'nt_word' ), saji_culinary_t( 'nt_sub' ), 'new' ); ?></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"saji-notices__list"} -->
<div class="wp-block-query saji-notices__list"><!-- wp:post-template -->
<!-- wp:group {"className":"saji-notice sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group saji-notice sp-reveal sp-reveal--up"><!-- wp:post-date {"format":"Y.m.d","className":"saji-notice__date"} /-->

<!-- wp:post-terms {"term":"category","className":"saji-notice__tag"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"saji-notice__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
