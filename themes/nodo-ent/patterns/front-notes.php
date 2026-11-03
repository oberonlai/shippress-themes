<?php
/**
 * Title: Home: notes
 * Slug: nodo-ent/front-notes
 * Categories: nodo-ent
 * Keywords: clinic, ear nose throat
 * Viewport Width: 1440
 * Description: Three latest notes in a row of unequal widths.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nd-sec nd-notes", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull nd-sec nd-notes">
<!-- wp:heading {"className": "sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up"><?php echo wp_kses_post( nodo_ent_t( 'kf4c6f851' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( nodo_ent_t( 'ka3ff1dce' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"nd-notes__q"} -->
<div class="wp-block-query nd-notes__q"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sp-reveal sp-reveal--up"} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"className": "nd-links", "layout": {"type": "default"}} -->
<div class="wp-block-group nd-links">
<!-- wp:paragraph {"className":"nd-link"} -->
<p class="nd-link"><a href="/notes/"><?php echo wp_kses_post( nodo_ent_t( 'kf4c6f851' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->