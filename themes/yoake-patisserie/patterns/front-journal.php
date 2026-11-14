<?php
/**
 * Title: Home: from the bench
 * Slug: yoake-patisserie/front-journal
 * Categories: yoake-patisserie
 * Viewport Width: 1440
 * Description: The latest three stories as ruled text rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yk-section yk-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yk-section yk-journal"><!-- wp:group {"className":"yk-journal__head","layout":{"type":"default"}} -->
<div class="wp-block-group yk-journal__head"><!-- wp:paragraph {"className":"yk-kicker"} -->
<p class="yk-kicker"><?php echo wp_kses_post( yoake_patisserie_t( 'k420a4202' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-dash"} -->
<p class="yk-dash" aria-hidden="true">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"yk-rows sp-reveal"} -->
<div class="wp-block-query yk-rows sp-reveal"><!-- wp:post-template -->
<!-- wp:group {"className":"yk-row","layout":{"type":"default"}} -->
<div class="wp-block-group yk-row"><!-- wp:post-date {"format":"<?php echo esc_attr( yoake_patisserie_t( 'date_fmt' ) ); ?>","className":"yk-row__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"yk-row__t"} /-->

<!-- wp:paragraph {"className":"yk-row__a"} -->
<p class="yk-row__a" aria-hidden="true">→</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
