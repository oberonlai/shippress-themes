<?php
/**
 * Title: Documents list
 * Slug: kantei-valuers/inner-docs
 * Categories: kantei-valuers
 * Keywords: inner page
 * Viewport Width: 1440
 * Inserter: no
 * Description: A rule list of the six documents to have ready.
 */
$e = 'kantei_valuers_e';
?>
<!-- wp:group {"align":"full","tagName":"section","className":"kv-sec kv-docs","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-sec kv-docs"><!-- wp:heading {"level":2,"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo $e( 'docs_h' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"kv-rules kv-rules--cols"} -->
<ul class="wp-block-list kv-rules kv-rules--cols"><?php for ( $n = 1; $n <= 6; $n++ ) : ?><!-- wp:list-item -->
<li><?php echo $e( "d{$n}" ); ?></li>
<!-- /wp:list-item -->

<?php endfor; ?></ul>
<!-- /wp:list --></section>
<!-- /wp:group -->
