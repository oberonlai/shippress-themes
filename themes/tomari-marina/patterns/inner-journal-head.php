<?php
/**
 * Title: Journal: page head for the posts page
 * Slug: tomari-marina/inner-journal-head
 * Categories: tomari-marina
 * Keywords: inner
 * Viewport Width: 1440
 * Description: The head of the journal index: bracket word, numeral 10, a photograph, the title and one line, with the bottom line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-t1__panel tm-head","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-t1__panel tm-head"><!-- wp:group {"className":"tm-t1__tl","layout":{"type":"default"}} -->
<div class="wp-block-group tm-t1__tl"><!-- wp:html -->
<svg class="tm-pennant" width="48" height="38" viewBox="0 0 48 38" aria-hidden="true" focusable="false"><path d="M2 0h4v38H2z M6 3l40 11L6 25z" fill="#C30D23"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"tm-t1__label"} -->
<p class="tm-t1__label"><?php echo wp_kses_post( tomari_marina_t( 'in_journal_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-t1__word"} -->
<p class="tm-t1__word"><?php echo wp_kses_post( tomari_marina_t( 'in_journal_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tm-t1__num"} -->
<p class="tm-t1__num"><?php echo wp_kses_post( tomari_marina_t( 'in_journal_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"aspectRatio":"0.52","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-t1__portrait"} -->
<figure class="wp-block-image size-large tm-t1__portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-hands-cleat.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'in_journal_04' ) ); ?>" style="aspect-ratio:0.52;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"className":"tm-t1__statement"} -->
<h1 class="wp-block-heading tm-t1__statement"><?php echo wp_kses_post( tomari_marina_t( 'in_journal_05' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"tm-t1__side","layout":{"type":"default"}} -->
<div class="wp-block-group tm-t1__side"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_journal_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tomari-marina/bottom-line-inner"} /--></section>
<!-- /wp:group -->