<?php
/**
 * Title: Archive: photograph with a paper strip
 * Slug: nodo-ent/archive-head
 * Categories: nodo-ent
 * Inserter: false
 * Viewport Width: 1440
 * Description: Page head for category, tag and archive views: a full-bleed photograph with one white vertical paper strip holding the title.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/b1.webp' ) ); ?>","dimRatio":0,"isDark":false,"align":"full","className":"sp-parallax nd-head"} -->
<div class="wp-block-cover alignfull is-light sp-parallax nd-head"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( 'Nurse walking beside a patient away down a long daylit white corridor' ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/b1.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"nd-strips","layout":{"type":"default"}} -->
<div class="wp-block-group nd-strips"><!-- wp:query-title {"type":"archive","level":1,"className":"nd-strip1"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
