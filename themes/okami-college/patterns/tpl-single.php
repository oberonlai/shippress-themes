<?php
/**
 * Title: Template: single
 * Slug: okami-college/tpl-single
 * Categories: okami-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ok-main ok-main--single","layout":{"type":"default"}} -->
<main class="wp-block-group ok-main ok-main--single"><!-- wp:group {"tagName":"section","align":"full","className":"ok-win ok-win--single","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ok-win ok-win--single"><!-- wp:group {"className":"ok-win__win","layout":{"type":"default"}} -->
<div class="wp-block-group ok-win__win"><!-- wp:post-featured-image {"className":"ok-win__fig"} /--></div>
<!-- /wp:group --><!-- wp:group {"className":"ok-win__box","layout":{"type":"default"}} -->
<div class="wp-block-group ok-win__box"><!-- wp:post-terms {"term":"category","className":"ok-label"} /--><!-- wp:post-title {"level":1,"className":"ok-win__title"} /--></div>
<!-- /wp:group --><!-- wp:group {"className":"ok-win__strip","layout":{"type":"default"}} -->
<div class="wp-block-group ok-win__strip"><!-- wp:post-date {"format":"<?php echo esc_attr( okami_college_t( 'date_fmt' ) ); ?>","className":"ok-win__cap"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ok-body ok-body--single","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ok-body ok-body--single"><!-- wp:post-content {"className":"ok-prose","layout":{"type":"constrained","contentSize":"720px"}} /--><!-- wp:group {"className":"ok-prevnext","layout":{"type":"default"}} -->
<div class="wp-block-group ok-prevnext"><!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_attr( okami_college_t( 'add1f775e' ) ); ?>","showTitle":true,"linkLabel":false} /--><!-- wp:post-navigation-link {"type":"next","label":"<?php echo esc_attr( okami_college_t( 'a10ac3d04' ) ); ?>","showTitle":true,"linkLabel":false} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->