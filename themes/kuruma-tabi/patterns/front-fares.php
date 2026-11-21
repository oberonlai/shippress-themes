<?php
/**
 * Title: Home: fares
 * Slug: kuruma-tabi/front-fares
 * Categories: kuruma-tabi
 * Viewport Width: 1440
 * Description: Full-width fare table with the price column right-aligned and a two-column list of what the fare covers.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--wash","layout":{"type":"default"},"anchor":"fares"} -->
<section id="fares" class="wp-block-group alignfull kt-sec kt-sec--wash"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'fares_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'fares_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"kt-fares__table"} -->
<figure class="wp-block-table kt-fares__table"><table class="has-fixed-layout"><tbody><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare1_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare2_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare3_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare4_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare5_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kuruma_tabi_t( 'fare6_n' ) ); ?></td><td><?php echo esc_html( kuruma_tabi_t( 'fare6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:group {"className":"kt-fares__more","layout":{"type":"default"}} -->
<div class="wp-block-group kt-fares__more"><!-- wp:heading {"level":3,"className":"kt-h3 kt-h3--s"} -->
<h3 class="wp-block-heading kt-h3 kt-h3--s"><?php echo esc_html( kuruma_tabi_t( 'incl_h' ) ); ?></h3>
<!-- /wp:heading -->

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
<!-- /wp:list -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'fares_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kt-btns"} -->
<div class="wp-block-buttons kt-btns"><!-- wp:button {"className":"kt-btn"} -->
<div class="wp-block-button kt-btn"><a class="wp-block-button__link wp-element-button" href="#request"><?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
