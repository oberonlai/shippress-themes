<?php
/**
 * Title: Archive: photo head with the archive title
 * Slug: nagisa-grill/head-archive
 * Categories: nagisa-grill
 * Inserter: no
 */
$title = '<!-- wp:query-title {"type":"archive","level":1,"showPrefix":false,"className":"ng-head__t","fontSize":"xx-large"} /-->' . "\n\n";
echo nagisa_grill_head( 'p02-quay.webp', 'A small wooden day boat at a stone quay at dawn as a crate of fish is handed up to a cook.', 'Journal', 'Notes from the boat and the kitchen', '[Every Wednesday]', $title );
