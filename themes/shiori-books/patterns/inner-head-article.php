<?php
/**
 * Title: Inner head: article
 * Slug: shiori-books/inner-head-article
 * Categories: shiori-books
 * Inserter: no
 * Description: Split head for a journal note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sb-splithead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sb-splithead"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/' ) ); ?>hero-evening-shelves.webp","dimRatio":40,"customOverlayColor":"#908f8b","alt":"Back room shelves at evening with a low lamp and empty chairs","className":"sb-splithead__l"} -->
<div class="wp-block-cover sb-splithead__l"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#908f8b"></span><img class="wp-block-cover__image-background" alt="Back room shelves at evening with a low lamp and empty chairs" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' ) ); ?>hero-evening-shelves.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"sb-splithead__name"} -->
<p class="sb-splithead__name">JOURNAL</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-splithead__label"} -->
<p class="sb-splithead__label">( A NOTE )</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"backgroundColor":"dark","textColor":"card","className":"sb-splithead__r","layout":{"type":"default"}} -->
<div class="wp-block-group sb-splithead__r has-card-color has-dark-background-color has-text-color has-background"><!-- wp:paragraph {"className":"sb-splithead__fact"} -->
<p class="sb-splithead__fact">( 27 CALDER LANE )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
