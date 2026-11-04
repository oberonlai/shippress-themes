<?php
/**
 * Title: Page head: title and sub-line
 * Slug: sokuten-survey/head-page
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-tag ss-tag--page","layout":{"type":"default"}} -->
<div class="wp-block-group ss-tag ss-tag--page">
<!-- wp:post-title {"level":1,"className":"ss-tag__main"} /-->

<!-- wp:paragraph {"className":"ss-tag__sub"} -->
<p class="ss-tag__sub"><?php echo esc_html( sokuten_survey_t( 'page_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
