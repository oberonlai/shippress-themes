<?php
/**
 * Title: Archive head
 * Slug: michi-motors/tpl-archive-head
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Inserter: no
 * Description: Plain head with the archive title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mm-band mm-pagehead mm-pagehead--plain","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mm-band mm-pagehead mm-pagehead--plain"><!-- wp:group {"className":"mm-band__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mm-band__grid"><!-- wp:query-title {"type":"archive","showPrefix":false,"className":"mm-t1 mm-t1--title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-band__foot","layout":{"type":"default"}} -->
<div class="wp-block-group mm-band__foot"><!-- wp:paragraph {"className":"mm-label mm-label--light"} -->
<p class="mm-label mm-label--light"><?php echo esc_html( michi_motors_t( 'front_journal_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
