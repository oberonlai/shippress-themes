<?php
/**
 * Title: Post: meta rows
 * Slug: kodama-sound/post-meta
 * Categories: kodama-sound
 * Viewport Width: 1440
 * Description: Published, category and tags as ruled key/value rows.
 */
?>
<!-- wp:group {"className":"kd-sheet kd-sheet--post","layout":{"type":"default"}} -->
<div class="wp-block-group kd-sheet kd-sheet--post"><!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'pm_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kd-v","layout":{"type":"default"}} -->
<div class="wp-block-group kd-v"><!-- wp:post-date {"format":"F j, Y"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'pm_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kd-v","layout":{"type":"default"}} -->
<div class="wp-block-group kd-v"><!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-kv","layout":{"type":"default"}} -->
<div class="wp-block-group kd-kv"><!-- wp:paragraph {"className":"kd-k"} -->
<p class="kd-k"><?php echo esc_html( kodama_sound_t( 'pm_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kd-v","layout":{"type":"default"}} -->
<div class="wp-block-group kd-v"><!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
