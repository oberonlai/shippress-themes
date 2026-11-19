<?php
/**
 * Title: Strip: Journal
 * Slug: tsukuri-design/strip-journal
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Title strip with the journal photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-strip td-strip--photo","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-strip td-strip--photo"><!-- wp:group {"className":"td-strip__txt","layout":{"type":"default"}} -->
<div class="wp-block-group td-strip__txt"><!-- wp:heading {"level":1,"className":"td-strip__h"} -->
<h1 class="wp-block-heading td-strip__h"><?php echo esc_html( tsukuri_design_t( 'j_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-role"} -->
<p class="td-role"><?php echo esc_html( tsukuri_design_t( 'j_desc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-strip__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group td-strip__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p11-speaker.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
