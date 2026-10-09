<?php
/**
 * Title: Haiku — vertical quote
 * Slug: ma-vertical/haiku
 * Categories: ma-vertical, text, featured
 * Keywords: quote, haiku, poem, vertical
 * Description: A haiku set vertically over a faint water ripple on kinari paper.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ma-haiku","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"backgroundColor":"paper-deep","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ma-haiku has-paper-deep-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ma-haiku__ripple"} -->
<figure class="wp-block-image size-full ma-haiku__ripple"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ripple.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"is-style-tategaki ma-keep-tategaki","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-tategaki ma-keep-tategaki"><!-- wp:paragraph {"className":"ma-haiku__verse"} -->
<p class="ma-haiku__verse">The old pond —<br>a frog leaps in,<br>the sound of water.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ma-haiku__cite"} -->
<p class="ma-haiku__cite">Matsuo Bashō</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
