<?php
/**
 * Title: Theatre details (synced)
 * Slug: yose-rakugo/details-card
 * Categories: yose-rakugo
 * Keywords: address, phone, hours
 * Description: Show times, address, phone and email as one synced pattern used in the footer and on the Contact page.
 */

echo Yose_Rakugo_Info::markup( 'details' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
