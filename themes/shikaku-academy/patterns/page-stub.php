<?php
/**
 * Title: Inner page placeholder (stage 1)
 * Slug: shikaku-academy/page-stub
 * Categories: shikaku-academy
 * Inserter: false
 */
echo sa_g( 'sa-sec sa-pagehead',
	sa_g( 'sa-wrap', '<!-- wp:post-title {"level":1,"className":"sa-pagetitle"} /-->' . "\n\n" . sa_p( 'sa-body', esc_html( sa_t( 'pg_stub' ) ) ) ),
	'section'
);
