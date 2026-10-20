<?php
/**
 * Title: Home: notes for inventors
 * Slug: hatsumei-patent/front-notes
 * Categories: hatsumei-patent
 * Keywords: journal, posts, notes
 * Viewport Width: 1440
 * Description: A heading with a link to the journal and the three latest posts as ruled text rows with date and category.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-fnotes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hp-fnotes"><!-- wp:group {"className":"hp-fnotes__head","layout":{"type":"default"}} -->
<div class="wp-block-group hp-fnotes__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'front_notes_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( hatsumei_patent_t( 'front_notes_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"hp-fnotes__btns"} -->
<div class="wp-block-buttons hp-fnotes__btns"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( hatsumei_patent_t( 'front_notes_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":31,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"hp-fnotes__list"} -->
<div class="wp-block-query hp-fnotes__list"><!-- wp:post-template -->
<!-- wp:group {"className":"hp-fnote","layout":{"type":"default"}} -->
<div class="wp-block-group hp-fnote"><!-- wp:post-date {"format":<?php echo wp_json_encode( hatsumei_patent_t( 'date_format' ) ); ?>,"className":"hp-fnote__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hp-fnote__title"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"hp-fnote__ex"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
