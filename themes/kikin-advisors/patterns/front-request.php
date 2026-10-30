<?php
/**
 * Title: Home: request
 * Slug: kikin-advisors/front-request
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: Grid-paper block with one yellow pill, a small illustration and the round page-top disc.
 */
?>
<!-- wp:group {"align":"full","anchor":"request","className":"kk-request","layout":{"type":"default"}} -->
<div id="request" class="wp-block-group alignfull kk-request"><!-- wp:group {"className":"kk-request__in","layout":{"type":"default"}} -->
<div class="wp-block-group kk-request__in"><!-- wp:heading {"className":"kk-request__title"} -->
<h2 class="wp-block-heading kk-request__title"><?php echo esc_html( kikin_advisors_t( 'req_head' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"kk-request__list"} -->
<ul class="wp-block-list kk-request__list"><!-- wp:list-item -->
<li><?php echo esc_html( kikin_advisors_t( 'req_1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( kikin_advisors_t( 'req_2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( kikin_advisors_t( 'req_3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<?php echo kikin_advisors_pill( kikin_advisors_t( 'cta' ), '/request/', 'kk-pill--yellow', 'kk-request__pill' ); ?>

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1100,"height":825,"className":"kk-request__fig"} -->
<figure class="wp-block-image size-full kk-request__fig"><img src="<?php echo kikin_advisors_img( 'k18.webp' ); ?>" alt="<?php echo esc_attr( kikin_advisors_t( 'alt_k18' ) ); ?>" width="1100" height="825"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="kk-top" href="#top"><svg viewBox="0 0 24 14" width="18" height="11" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 12 12 3l9 9"/></svg><span><?php echo esc_html( kikin_advisors_t( 'top' ) ); ?></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
