<?php
/**
 * Title: Notes: following the keepers
 * Slug: kumoi-lodge/notes-after
 * Categories: kumoi-lodge
 * Keywords: lodge, notes
 * Viewport Width: 1440
 * Description: A cream band under the notes list with one short text column.
 */
?>
<!-- wp:group {"className":"km-sec km-g-cream","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull km-sec km-g-cream"><!-- wp:group {"className":"km-col","layout":{"type":"default"}} -->
<div class="wp-block-group km-col"><!-- wp:group {"className":"km-narr sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-narr sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"km-card-title"} -->
<h3 class="wp-block-heading km-card-title"><?php echo esc_html( kumoi_lodge_t( 'notes_more_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kumoi_lodge_t( 'notes_more_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php echo kumoi_lodge_pill( kumoi_lodge_t( 'hold' ), '/rates-and-booking/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
