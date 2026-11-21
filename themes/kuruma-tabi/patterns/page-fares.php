<?php
/**
 * Title: Page: fares
 * Slug: kuruma-tabi/page-fares
 * Categories: kuruma-tabi
 * Inserter: no
 * Viewport Width: 1440
 * Description: Fares page: split head, full-width fare table on the wash band, what the fare covers and one route row for terms.
 */
?>
<!-- wp:group {"tagName":"main","className":"kt-main","layout":{"type":"default"}} -->
<main class="wp-block-group kt-main"><!-- wp:group {"tagName":"section","align":"full","className":"kt-hero kt-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-hero kt-hero--page"><!-- wp:group {"className":"kt-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__text"><!-- wp:heading {"level":1,"className":"kt-h1"} -->
<h1 class="wp-block-heading kt-h1"><span class="kt-w" style="--i:0"><?php echo esc_html( kuruma_tabi_t( 'fr_h1' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-lede"} -->
<p class="kt-lede"><?php echo esc_html( kuruma_tabi_t( 'fr_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'snow-valley.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--wash","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-sec kt-sec--wash"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'fr_1_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kt-p kt-p--c"} -->
<p class="kt-p kt-p--c"><?php echo esc_html( kuruma_tabi_t( 'fr_1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"kt-fares__table"} -->
<figure class="wp-block-table kt-fares__table"><table><tbody><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare1_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare2_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare3_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare4_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare5_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare6_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-sec"><!-- wp:group {"className":"kt-wrap kt-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap kt-wrap--narrow"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'fr_2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-fares__more","layout":{"type":"default"}} -->
<div class="wp-block-group kt-fares__more"><!-- wp:paragraph {"className":"kt-p kt-p--w"} -->
<p class="kt-p kt-p--w"><?php echo esc_html( kuruma_tabi_t( 'fr_2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kt-incl"} -->
<ul class="wp-block-list kt-incl"><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'incl1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'incl2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'incl3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'incl4' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'incl5' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'incl6' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--pb","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-sec kt-sec--pb"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kt-rows"><!-- wp:group {"className":"kt-row kt-row--mirror","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row kt-row--mirror"><!-- wp:group {"className":"kt-row__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__media sp-reveal sp-reveal--up"><!-- wp:html -->
<span class="kt-seam kt-seam--map" aria-hidden="true"><?php echo kuruma_tabi_icon( 'map' ); ?></span>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'van-interior.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row__text sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__text sp-reveal sp-reveal--left"><!-- wp:heading {"level":3,"className":"kt-h3"} -->
<h3 class="wp-block-heading kt-h3"><?php echo esc_html( kuruma_tabi_t( 'fr_3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'fr_3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-more"} -->
<p class="kt-more"><a href="<?php echo esc_url( home_url( '/request/' ) ); ?>">→ <?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kuruma-tabi/inner-cta"} /-->
</main>
<!-- /wp:group -->
