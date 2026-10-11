<?php
/**
 * Title: Company address, email and support hours (synced)
 * Slug: hikari-app/company-info
 * Categories: hikari-app
 * Keywords: synced, company
 * Description: The company address, email and support hours as one synced pattern, shown in the footer and on the Contact page.
 */

echo Hikari_App_Info::markup( 'company' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
