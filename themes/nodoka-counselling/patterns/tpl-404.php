<?php
/**
 * Title: 404
 * Slug: nodoka-counselling/tpl-404
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Page not found.
 */
?>
<!-- wp:group {"className":"nc-sec nc-page","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-sec nc-page"><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:heading {"level":1,"className":"nc-page__title"} -->
<h1 class="wp-block-heading nc-page__title"><?php esc_html_e( 'Page not found', 'nodoka-counselling' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-page__p"} -->
<p class="nc-page__p"><?php esc_html_e( 'The page you were looking for is not here. Start again from the home page.', 'nodoka-counselling' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-link"} -->
<p class="nc-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->