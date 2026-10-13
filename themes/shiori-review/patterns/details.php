<?php
/**
 * Title: Magazine details (synced)
 * Slug: shiori-review/details
 * Categories: shiori-review
 * Keywords: issue, dateline, address, email
 * Description: The current issue line, the place, the cadence, the editorial office, email and social links: one synced pattern shown in the masthead dateline, the footer colophon, Contact and Subscribe.
 */

echo Shiori_Review_Info::markup( 'details' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
