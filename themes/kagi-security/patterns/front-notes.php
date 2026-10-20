<?php
/**
 * Title: Home: notes from the desk
 * Slug: kagi-security/front-notes
 * Categories: kagi-security
 * Keywords: journal, posts
 * Viewport Width: 1440
 * Description: Three journal notes as ruled rows with a photograph, date, title and excerpt.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-desknotes","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-desknotes"><!-- wp:group {"className":"ks-desknotes__head","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-desknotes__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'front_notes_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'front_notes_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( kagi_security_t( 'front_notes_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":31,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ks-desknotes__list"} -->
<div class="wp-block-query alignwide ks-desknotes__list"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"className":"ks-desknotes__body","layout":{"type":"default"}} -->
<div class="wp-block-group ks-desknotes__body"><!-- wp:post-date {"format":<?php echo wp_json_encode( kagi_security_t( 'date_format' ) ); ?>,"className":"ks-desknotes__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":24} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
