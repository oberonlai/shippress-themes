<?php
/**
 * Title: Inner page: closing request block
 * Slug: kikin-advisors/inner-close
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: Grid-paper block with one heading, the yellow request pill and the round page-top disc, closing every inner page.
 */
?>
<!-- wp:group {"align":"full","className":"kk-request kk-request--close","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kk-request kk-request--close"><!-- wp:group {"className":"kk-request__in","layout":{"type":"default"}} -->
<div class="wp-block-group kk-request__in"><!-- wp:heading {"className":"kk-request__title"} -->
<h2 class="wp-block-heading kk-request__title"><?php echo esc_html( kikin_advisors_t( 'close_head' ) ); ?></h2>
<!-- /wp:heading -->

<?php echo kikin_advisors_pill( kikin_advisors_t( 'cta' ), '/request/', 'kk-pill--yellow', 'kk-request__pill' ); ?>

<!-- wp:html -->
<a class="kk-top" href="#top"><svg viewBox="0 0 24 14" width="18" height="11" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 12 12 3l9 9"/></svg><span><?php echo esc_html( kikin_advisors_t( 'top' ) ); ?></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
