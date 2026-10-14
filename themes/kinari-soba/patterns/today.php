<?php
/**
 * Title: Today's note (synced)
 * Slug: kinari-soba/today
 * Categories: kinari-soba
 * Keywords: soba, hours, menu, sold out
 * Description: Today's note and what is sold out for today, as one synced pattern shown on the home page, Menu and in the footer. Edit it once each morning.
 */

echo Kinari_Soba_Info::markup( 'today' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
