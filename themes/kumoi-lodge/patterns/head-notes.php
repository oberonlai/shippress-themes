<?php
/**
 * Title: Inner head: notes
 * Slug: kumoi-lodge/head-notes
 * Categories: kumoi-lodge
 * Keywords: lodge, inner page
 * Viewport Width: 1440
 * Description: Blurred photograph with the page label and intro, for the notes index.
 */
?>
<?php echo kumoi_lodge_head( '<!-- wp:heading {"level":1,"className":"km-h1"} -->' . "\n" . '<h1 class="wp-block-heading km-h1">' . esc_html( kumoi_lodge_t( 'notes_h1' ) ) . '</h1>' . "\n" . '<!-- /wp:heading -->', kumoi_lodge_t( 'notes_intro' ), 'kl-p1', kumoi_lodge_t( 'alt_p1' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
