<?php
/**
 * Title: Frame directory with filters, measurements and prices (synced)
 * Slug: kumo-eyewear/frames-info
 * Categories: kumo-eyewear
 * Keywords: frames, synced, shared
 * Viewport Width: 1440
 * Description: Every frame with its photograph, measurement line, material, fit, price and the editable badge, under shape / material / fit filter pills. Without JavaScript every frame shows.
 */

echo Kumo_Eyewear_Info::markup( 'frames' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
