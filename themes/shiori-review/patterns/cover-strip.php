<?php
/**
 * Title: Footer: strip of issue covers
 * Slug: shiori-review/cover-strip
 * Categories: shiori-review
 * Keywords: covers, issues, footer
 * Viewport Width: 1440
 * Description: Five issue covers in a calm horizontal row (a scrolling row on phones), each linking to the Issues page.
 */
?>
<!-- wp:group {"align":"wide","className":"sr-strip","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sr-strip"><!-- wp:group {"className":"sr-strip__head","layout":{"type":"default"}} -->
<div class="wp-block-group sr-strip__head"><!-- wp:paragraph {"className":"sr-mark"} -->
<p class="sr-mark">Back issues</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sr-strip__all"} -->
<p class="sr-strip__all"><a href="/issues/">All issues</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sr-strip__row","layout":{"type":"default"}} -->
<div class="wp-block-group sr-strip__row"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sr-cover"} -->
<figure class="wp-block-image size-large sr-cover"><a href="/issues/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover-current.jpg' ) ); ?>" alt="Cover of Issue 12, Autumn 2026: The Reading Room"/></a><figcaption class="wp-element-caption"><span class="sr-cover__no">No.&#8239;12</span> The Reading Room</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sr-cover"} -->
<figure class="wp-block-image size-large sr-cover"><a href="/issues/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover-01.jpg' ) ); ?>" alt="Cover of Issue 11, Summer 2026: Weather Reports"/></a><figcaption class="wp-element-caption"><span class="sr-cover__no">No.&#8239;11</span> Weather Reports</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sr-cover"} -->
<figure class="wp-block-image size-large sr-cover"><a href="/issues/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover-02.jpg' ) ); ?>" alt="Cover of Issue 10, Spring 2026: Small Hours"/></a><figcaption class="wp-element-caption"><span class="sr-cover__no">No.&#8239;10</span> Small Hours</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sr-cover"} -->
<figure class="wp-block-image size-large sr-cover"><a href="/issues/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover-03.jpg' ) ); ?>" alt="Cover of Issue 09, Winter 2025: The Kitchen Table"/></a><figcaption class="wp-element-caption"><span class="sr-cover__no">No.&#8239;09</span> The Kitchen Table</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sr-cover"} -->
<figure class="wp-block-image size-large sr-cover"><a href="/issues/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover-04.jpg' ) ); ?>" alt="Cover of Issue 08, Autumn 2025: Margins"/></a><figcaption class="wp-element-caption"><span class="sr-cover__no">No.&#8239;08</span> Margins</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
