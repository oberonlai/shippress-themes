<?php
/**
 * Title: Weekly class timetable (synced)
 * Slug: suzuri-shodo/timetable
 * Categories: suzuri-shodo
 * Keywords: school, timetable, fees
 * Description: The weekly timetable (Monday to Sunday, morning, afternoon and evening), with the free trial slot and a legend, as one synced pattern used in the footer, on the Timetable page and on Classes. Today is marked from the site timezone.
 */

echo Suzuri_Shodo_Info::markup( 'timetable' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
