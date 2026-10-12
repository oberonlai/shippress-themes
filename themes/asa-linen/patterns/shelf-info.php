<?php
/**
 * Title: The linen shelf with prices (synced)
 * Slug: asa-linen/shelf-info
 * Categories: asa-linen
 * Keywords: shelf, synced, shared
 * Viewport Width: 1440
 * Description: Every piece with its photograph, linen weight, price and the editable badge. Shown on the shop page when WooCommerce is not active.
 */

echo Asa_Linen_Info::markup( 'shelf' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
