<?php
/**
 * Title: Studio details: address, hours, phone and email (synced)
 * Slug: undo-ba/studio-info
 * Categories: undo-ba, contact
 * Keywords: synced, studio
 * Description: The studio address, opening hours, phone number and email as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer and the Contact page change together.
 */

echo Undo_Ba_Info::markup( 'studio' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
