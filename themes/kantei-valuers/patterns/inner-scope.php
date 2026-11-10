<?php
/**
 * Title: Scope lists: what we value and what we do not
 * Slug: kantei-valuers/inner-scope
 * Categories: kantei-valuers
 * Keywords: inner page
 * Viewport Width: 1440
 * Inserter: no
 * Description: Two rule lists, what the practice values and what it does not.
 */
$e = 'kantei_valuers_e';
?>
<!-- wp:group {"align":"full","tagName":"section","className":"kv-sec kv-scope","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-sec kv-scope"><!-- wp:group {"className":"kv-scope__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kv-scope__grid"><!-- wp:group {"className":"kv-scope__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-scope__col sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"kv-scope__h"} -->
<h3 class="wp-block-heading kv-scope__h"><?php echo esc_html( kantei_valuers_t( 'value_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"kv-rules"} -->
<ul class="wp-block-list kv-rules"><?php for ( $n = 1; $n <= 5; $n++ ) : ?><!-- wp:list-item -->
<li><?php echo $e( "v{$n}" ); ?></li>
<!-- /wp:list-item -->

<?php endfor; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-scope__col kv-scope__col--no sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-scope__col kv-scope__col--no sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"kv-scope__h"} -->
<h3 class="wp-block-heading kv-scope__h"><?php echo esc_html( kantei_valuers_t( 'novalue_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"kv-rules"} -->
<ul class="wp-block-list kv-rules"><?php for ( $n = 1; $n <= 4; $n++ ) : ?><!-- wp:list-item -->
<li><?php echo $e( "n{$n}" ); ?></li>
<!-- /wp:list-item -->

<?php endfor; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
