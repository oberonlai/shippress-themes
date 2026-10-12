<?php
/**
 * Title: The shelf of lacquerware with prices (synced)
 * Slug: tsuya-lacquer/shelf-info
 * Categories: tsuya-lacquer
 * Keywords: shelf, synced, shared
 * Viewport Width: 1440
 * Description: Every piece with its photograph, layer count, price and the editable badge. Shown on the shop page when WooCommerce is not active.
 */

echo Tsuya_Lacquer_Info::markup( 'shelf' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
