<?php
/**
 * Title: Side rail: workshop label, menu and today's hours
 * Slug: urushi-nuri/rail
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: The fixed side rail on wide screens: the workshop label (a vertical line in Chinese and Japanese), the numbered main menu and the shop hours.
 */
?>
<!-- wp:group {"tagName": "aside", "className": "un-rail", "layout": {"type": "default"}} -->
<aside class="wp-block-group un-rail"><!-- wp:paragraph {"className": "un-rail__label"} -->
<p class="un-rail__label"><?php echo esc_html( urushi_nuri_t( 'rail_label' ) ); ?></p>
<!-- /wp:paragraph -->

<?php if ( '' !== urushi_nuri_t( 'rail_tate' ) ) : ?>
<!-- wp:paragraph {"className": "un-tate"} -->
<p class="un-tate"><?php echo esc_html( urushi_nuri_t( 'rail_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:navigation {"overlayMenu":"never","className":"un-rail__nav","layout":{"type":"flex","orientation":"vertical"}} /-->

<!-- wp:paragraph {"className": "un-rail__open"} -->
<p class="un-rail__open"><?php echo esc_html( urushi_nuri_t( 'board_open' ) ); ?></p>
<!-- /wp:paragraph --></aside>
<!-- /wp:group -->
