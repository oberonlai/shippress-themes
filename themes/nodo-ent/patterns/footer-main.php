<?php
/**
 * Title: Footer: clinic details and notice
 * Slug: nodo-ent/footer-main
 * Categories: nodo-ent
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName": "footer", "align": "full", "className": "nd-footer", "layout": {"type": "default"}} -->
<footer class="wp-block-group alignfull nd-footer">
<!-- wp:group {"className": "nd-footer__cols", "layout": {"type": "default"}} -->
<div class="wp-block-group nd-footer__cols">
<!-- wp:group {"className": "nd-footer__col", "layout": {"type": "default"}} -->
<div class="wp-block-group nd-footer__col">
<!-- wp:heading -->
<h2 class="wp-block-heading">Nodo Clinic</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nodo_ent_t( 'footer_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nodo_ent_t( 'footer_adults' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className": "nd-footer__col", "layout": {"type": "default"}} -->
<div class="wp-block-group nd-footer__col">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( nodo_ent_t( 'footer_hours' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nodo_ent_t( 'footer_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nodo_ent_t( 'footer_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nodo_ent_t( 'footer_tel' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>hello@nodoclinic.example</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className": "nd-footer__col", "layout": {"type": "default"}} -->
<div class="wp-block-group nd-footer__col">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( nodo_ent_t( 'footer_pages' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nd-link"} -->
<p class="nd-link"><a href="/about/"><?php echo wp_kses_post( nodo_ent_t( 'footer_about' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nd-link"} -->
<p class="nd-link"><a href="/stories/"><?php echo wp_kses_post( nodo_ent_t( 'footer_stories' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nd-link"} -->
<p class="nd-link"><a href="/notes/"><?php echo wp_kses_post( nodo_ent_t( 'footer_notes' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nd-link"} -->
<p class="nd-link"><a href="/newsletter/"><?php echo wp_kses_post( nodo_ent_t( 'footer_news' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nd-footer__fine"} -->
<p class="nd-footer__fine"><?php echo wp_kses_post( nodo_ent_t( 'footer_fine' ) ); ?></p>
<!-- /wp:paragraph -->
</footer>
<!-- /wp:group -->
