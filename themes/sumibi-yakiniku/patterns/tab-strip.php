<?php
/**
 * Title: Tab strip: Courses, Cuts and Drinks, Groups and Rooms, Reserve
 * Slug: sumibi-yakiniku/tab-strip
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: Full-width pale tan band with four equal tabs; the active tab is a white block flush top and bottom. The tabs are real links to the pages.
 */
?>
<!-- wp:group {"tagName":"nav","className":"sy-tabs","layout":{"type":"default"}} -->
<nav class="wp-block-group sy-tabs" aria-label="<?php echo sumibi_yakiniku_a( 'tabs_label' ); ?>"><!-- wp:paragraph {"className":"sy-tab sy-tab--on"} -->
<p class="sy-tab sy-tab--on"><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_courses' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/cuts-and-drinks/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_cuts' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/groups/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_groups' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_reserve' ) ); ?></a></p>
<!-- /wp:paragraph --></nav>
<!-- /wp:group -->
