<?php
/**
 * Title: Home: next deadlines
 * Slug: tsumiki-accounting/home-calendar
 * Categories: tsumiki-accounting
 * Keywords: accounting
 * Viewport Width: 1440
 * Description: A short list of the next filing dates, linking to the full tax calendar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ta-section ","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ta-section "><!-- wp:group {"align":"wide","className":"ta-split ta-split--cal","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ta-split ta-split--cal"><!-- wp:image {"sizeSlug":"large","className":"ta-split__photo"} -->
<figure class="wp-block-image size-large ta-split__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/folders.jpg' ) ); ?>" alt="Labelled folders standing in a row on a shelf"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ta-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ta-split__text"><!-- wp:group {"className":"ta-intro","layout":{"type":"default"}} -->
<div class="wp-block-group ta-intro"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Tax calendar</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ta-intro__title"} -->
<h2 class="wp-block-heading ta-intro__title">The next three dates.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"is-style-calendar"} -->
<figure class="wp-block-table is-style-calendar"><table><tbody><tr><td>31 Oct</td><td>Withholding tax, monthly payers</td></tr><tr><td>30 Nov</td><td>Second interim personal tax payment</td></tr><tr><td>31 Jan</td><td>Payroll year-end returns and statements</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:buttons {"className":"ta-links"} -->
<div class="wp-block-buttons ta-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/tax-calendar/">The whole year</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
