<?php
/**
 * Title: Template: posts page
 * Slug: meguri-waste/tpl-posts
 * Categories: meguri-waste
 * Inserter: no
 * Description: Posts page: wash lead with the translated h1, then the post list.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"mw-wash mw-wash--lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mw-wash mw-wash--lead"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-wash__pic"} -->
<figure class="wp-block-image size-full mw-wash__pic"><img src="<?php echo meguri_waste_img( 'p18' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p18' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:group {"className":"mw-wash__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wash__text"><!-- wp:heading {"level":1,"className":"mw-h1"} -->
<h1 class="wp-block-heading mw-h1"><?php echo esc_html( meguri_waste_t( 'pg_posts_t' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:separator {"className":"mw-hairline is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide mw-hairline"/>
<!-- /wp:separator --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'pg_posts_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->


<!-- wp:pattern {"slug":"meguri-waste/tpl-list"} /-->
