<?php
/**
 * Title: Current exhibition (synced)
 * Slug: kage-gallery/current
 * Categories: kage-gallery
 * Keywords: exhibition, now on view, title, dates, artist
 * Description: The current exhibition (editable Now on view badge, title, dates, artist, wall text) as one synced pattern: the oversized title on Home and the head of Exhibitions.
 */

echo Kage_Gallery_Info::markup( 'current' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
