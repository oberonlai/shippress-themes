<?php
/**
 * Title: Weekly lesson timetable (synced)
 * Slug: kenban-piano/timetable
 * Categories: kenban-piano
 * Keywords: piano school, lessons, fees, timetable
 * Description: The weekly timetable (Monday to Sunday, morning, afternoon and evening) with the free first lesson, as one synced pattern used in the footer and on Lessons. Today is marked from the site timezone.
 */

echo Kenban_Piano_Info::markup( 'timetable' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
