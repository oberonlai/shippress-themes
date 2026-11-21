<?php
/**
 * Title: Home: notes from the island
 * Slug: shimaya-villas/front-journal
 * Categories: shimaya-villas
 * Viewport Width: 1440
 * Description: Latest three journal posts as ruled text rows with date, category and title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sv-sec sv-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sv-sec sv-journal"><!-- wp:heading {"className":"sv-h2"} -->
<h2 class="wp-block-heading sv-h2"><?php echo wp_kses_post( shimaya_villas_t( 'k8f6edc9c' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"sv-jr sp-reveal sp-reveal--up"} -->
<div class="wp-block-query sv-jr sp-reveal sp-reveal--up"><!-- wp:post-template {"className":"sv-jr__list","layout":{"type":"default"}} -->
<!-- wp:group {"className":"sv-jr__row","layout":{"type":"default"}} -->
<div class="wp-block-group sv-jr__row"><!-- wp:post-date {"format":"<?php echo esc_attr( shimaya_villas_t( 'date_fmt' ) ); ?>","className":"sv-jr__date"} /-->
<!-- wp:post-terms {"term":"category","className":"sv-jr__cat"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"sv-jr__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sv-btn-outline"} -->
<div class="wp-block-button sv-btn-outline"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( shimaya_villas_t( 'k67bfaf2f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
