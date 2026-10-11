<?php
/**
 * Title: The shelf of incense with prices (synced)
 * Slug: kuyuru-incense/shelf-info
 * Categories: kuyuru-incense
 * Keywords: shelf, synced, shared
 * Viewport Width: 1440
 * Description: Every stick and cone with its photograph, price and the editable house-favourite badge. Shown on the shop page when WooCommerce is not active.
 */

echo Kuyuru_Incense_Info::markup( 'shelf' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
