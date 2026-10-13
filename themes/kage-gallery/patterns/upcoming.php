<?php
/**
 * Title: Upcoming exhibitions (synced)
 * Slug: kage-gallery/upcoming
 * Categories: kage-gallery
 * Keywords: exhibitions, upcoming, programme
 * Description: The next exhibitions (dates, title, artists, a short note) as one synced pattern, shown short on Home and in full on Exhibitions.
 */

echo Kage_Gallery_Info::markup( 'upcoming' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
