<?php
/**
 * Title: Home: book a collection
 * Slug: shoko-archives/front-book
 * Categories: shoko-archives
 * Viewport Width: 1440
 * Description: A deep moss band with the single repeated call to action: heading, two lines, the brick button, phone and hours.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"book","className":"sa-book","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull sa-book"><!-- wp:group {"className":"sa-wrap sa-book__in","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap sa-book__in"><!-- wp:heading {"className":"sa-book__h"} -->
<h2 class="wp-block-heading sa-book__h"><?php echo esc_html( shoko_archives_t( 'bk_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-book__p"} -->
<p class="sa-book__p"><?php echo esc_html( shoko_archives_t( 'bk_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sa-book__row","layout":{"type":"default"}} -->
<div class="wp-block-group sa-book__row"><!-- wp:buttons {"className":"sa-book__btn"} -->
<div class="wp-block-buttons sa-book__btn"><!-- wp:button {"className":"sa-btn"} -->
<div class="wp-block-button sa-btn"><a class="wp-block-button__link wp-element-button" href="/book-a-collection/"><?php echo esc_html( shoko_archives_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"sa-book__c"} -->
<p class="sa-book__c"><?php echo esc_html( shoko_archives_t( 'bk_phone' ) ); ?><br><?php echo esc_html( shoko_archives_t( 'bk_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
