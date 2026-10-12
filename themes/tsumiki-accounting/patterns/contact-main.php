<?php
/**
 * Title: Contact: office card and photo
 * Slug: tsumiki-accounting/contact-main
 * Categories: tsumiki-accounting
 * Keywords: accounting
 * Viewport Width: 1440
 * Description: The synced office details beside a photograph and a short list of what to bring.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ta-section ta-section--flush ta-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ta-section ta-section--flush ta-section--last"><!-- wp:group {"align":"wide","className":"ta-split ta-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ta-split ta-split--top"><!-- wp:group {"className":"ta-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ta-split__text"><!-- wp:group {"className":"ta-card","layout":{"type":"default"}} -->
<div class="wp-block-group ta-card"><!-- wp:pattern {"slug":"tsumiki-accounting/office"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-contact__bring","layout":{"type":"default"}} -->
<div class="wp-block-group ta-contact__bring"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Bring along</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled"} -->
<ul class="wp-block-list is-style-ruled"><!-- wp:list-item -->
<li>Last year&#8217;s return, if you have one</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bank statements for the year</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Any letters from the tax office</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","className":"ta-split__photo ta-split__photo--tall"} -->
<figure class="wp-block-image size-large ta-split__photo ta-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.jpg' ) ); ?>" alt="Two people talking over papers at a meeting table"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
