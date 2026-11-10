<?php
/**
 * Title: Three steps as rule rows
 * Slug: kantei-valuers/inner-steps
 * Categories: kantei-valuers
 * Keywords: inner page
 * Viewport Width: 1440
 * Inserter: no
 * Description: Quote within one working day, the site hour, the signed report: three rule rows.
 */
$e = 'kantei_valuers_e';
?>
<!-- wp:group {"align":"full","tagName":"section","className":"kv-sec kv-steps","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-sec kv-steps"><!-- wp:paragraph {"className":"kv-label"} -->
<p class="kv-label"><?php echo $e( 'steps_label' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kv-rrows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kv-rrows sp-stagger"><?php for ( $n = 1; $n <= 3; $n++ ) : ?><!-- wp:group {"className":"kv-rrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-rrow sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-rrow__chip kv-rrow__chip--wide"} -->
<p class="kv-rrow__chip kv-rrow__chip--wide"><span class="kv-chip"><?php echo $e( "st{$n}_n" ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-rrow__title"} -->
<p class="kv-rrow__title"><?php echo $e( "st{$n}_t" ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endfor; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
