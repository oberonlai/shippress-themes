<?php
/**
 * Title: News: page head with harbour photograph
 * Slug: ishizue-holdings/news-head
 * Categories: ishizue-holdings
 * Description: Small timeline head for the news index: heading and bracket lead at the left, the harbour panorama bleeding off the right edge, a tinted sliver and the curve-ended line.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ih-ph ih-t4","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ih-ph ih-t4"><!-- wp:group {"className":"ih-ph__text","layout":{"type":"default"}} -->
<div class="wp-block-group ih-ph__text"><!-- wp:heading {"level":1,"className":"ih-ph__h1"} -->
<h1 class="wp-block-heading ih-ph__h1">Notices and<br>stories.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ih-ph__lead ih-br--lg ih-br"} -->
<p class="ih-ph__lead ih-br--lg ih-br"><span class="ih-br">(<mark>Stories</mark>)</span> from the six companies.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ih-ph__media"><div class="ih-ph__photo sp-parallax" style="--sp-par:6%"><img src="<?php echo ishizue_holdings_img( 'p11.webp' ); ?>" alt="Morning panorama of the harbour quay with the head office, trees and a tram." loading="eager"/></div><div class="ih-ph__sliver"></div></div>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ih-ph__line ih-curve" aria-hidden="true"></div>
<!-- /wp:html -->
