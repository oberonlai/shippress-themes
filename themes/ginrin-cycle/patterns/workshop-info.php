<?php
/**
 * Title: Workshop: address, hours and phone (synced)
 * Slug: ginrin-cycle/workshop-info
 * Categories: ginrin-cycle
 * Keywords: address, hours, opening, phone, email, visit
 * Description: The workshop address, opening hours, phone number and email as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer and every page change together.
 */

echo Ginrin_Cycle_Info::markup( 'workshop' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
