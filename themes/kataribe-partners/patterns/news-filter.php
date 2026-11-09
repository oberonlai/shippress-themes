<?php
/**
 * Title: News: filter row of tick cells
 * Slug: kataribe-partners/news-filter
 * Categories: kataribe-partners
 * Keywords: news, filter
 * Viewport Width: 1440
 * Inserter: no
 * Description: One row of three tick cells (All, Notes, Stories); the current category is filled navy.
 */
$e   = 'kataribe_partners_e';
$cur = is_category() ? get_queried_object() : null;
$cur = $cur && isset( $cur->slug ) ? $cur->slug : '';
$on  = function ( $slug ) use ( $cur ) { return $slug === $cur ? ' is-active' : ''; };
$all = ( '' === $cur && ! is_tag() ) ? ' is-active' : '';
?>
<!-- wp:group {"className":"kp-cells kp-cells--row","layout":{"type":"default"}} -->
<div class="wp-block-group kp-cells kp-cells--row"><!-- wp:paragraph {"className":"kp-cell<?php echo $all; ?>"} -->
<p class="kp-cell<?php echo $all; ?>"><a href="/news/"><span><?php echo $e( 'flt_all' ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-cell<?php echo $on( 'notes' ); ?>"} -->
<p class="kp-cell<?php echo $on( 'notes' ); ?>"><a href="/category/notes/"><span><?php echo $e( 'flt_notes' ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-cell<?php echo $on( 'stories' ); ?>"} -->
<p class="kp-cell<?php echo $on( 'stories' ); ?>"><a href="/category/stories/"><span><?php echo $e( 'flt_stories' ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
