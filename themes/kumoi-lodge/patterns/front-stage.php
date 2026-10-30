<?php
/**
 * Title: Home: cloud stage
 * Slug: kumoi-lodge/front-stage
 * Categories: kumoi-lodge
 * Keywords: lodge, home
 * Viewport Width: 1440
 * Description: Full-viewport photograph of the lodge above the cloud with a parallax drift; two serif lines and one paragraph pinned bottom left in white.
 */
?>
<!-- wp:group {"className":"km-stage sp-parallax","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull km-stage sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"km-stage__img"} -->
<figure class="wp-block-image size-full km-stage__img"><img src="<?php echo kumoi_lodge_img( 'kl-p1' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( kumoi_lodge_t( 'alt_p1' ) ); ?>" loading="lazy"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"km-stage__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-stage__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"km-statement km-statement--white"} -->
<h2 class="wp-block-heading km-statement km-statement--white"><?php kumoi_lodge_e( 'stage_l1' ); ?><br><?php kumoi_lodge_e( 'stage_l2' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"km-lead km-lead--white"} -->
<p class="km-lead km-lead--white"><?php kumoi_lodge_e( 'stage_body' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
