<?php
/**
 * Title: Home: journal rows
 * Slug: komorebi-cabins/front-journal
 * Categories: komorebi-cabins
 * Viewport Width: 1440
 * Description: The latest three stories as ruled rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-section kc-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-section kc-journal"><!-- wp:group {"className":"kc-journal__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-journal__in"><!-- wp:group {"className":"kc-titlebar","layout":{"type":"default"}} -->
<div class="wp-block-group kc-titlebar"><!-- wp:heading {"level":2,"className":"kc-title"} -->
<h2 class="wp-block-heading kc-title"><?php echo wp_kses_post( komorebi_cabins_t( 'k6b2b5614' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-bracket"} -->
<p class="kc-bracket"><?php echo wp_kses_post( komorebi_cabins_t( 'kf2c753c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"kc-rows"} -->
<div class="wp-block-query kc-rows"><!-- wp:post-template -->
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row"><!-- wp:post-date {"format":"<?php echo esc_attr( komorebi_cabins_t( 'date_fmt' ) ); ?>","className":"kc-row__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-row__t"} /-->

<!-- wp:paragraph {"className":"kc-row__a"} -->
<p class="kc-row__a" aria-hidden="true">→</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"kc-journal__more"} -->
<p class="kc-journal__more"><a href="/journal/"><?php echo wp_kses_post( komorebi_cabins_t( 'k9daf1b4b' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
