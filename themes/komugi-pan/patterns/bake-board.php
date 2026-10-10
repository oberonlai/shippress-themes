<?php
/**
 * Title: Daily bake board (synced)
 * Slug: komugi-pan/bake-board
 * Categories: komugi-pan
 * Keywords: bake, oven, times, schedule, board, bread
 * Description: What comes out of the oven at which time, as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the home page and the bake schedule change together. Trays already out are marked from the visitor's clock.
 */

echo Komugi_Pan_Info::markup( 'bake-board' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
