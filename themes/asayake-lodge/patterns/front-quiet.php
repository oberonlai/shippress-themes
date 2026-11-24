<?php
/**
 * Title: Home: quiet band
 * Slug: asayake-lodge/front-quiet
 * Categories: asayake-lodge
 * Viewport Width: 1440
 * Description: Full-width night corridor photo with a parallax layer and a white card that stays still.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"quiet","className":"al-quiet sp-parallax","layout":{"type":"default"}} -->
<section id="quiet" class="wp-block-group alignfull al-quiet sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"al-quiet__img sp-parallax__layer"} -->
<figure class="wp-block-image size-full al-quiet__img sp-parallax__layer"><img src="<?php echo asayake_lodge_img( 'p09-night-corridor.webp' ); ?>" alt="<?php echo asayake_lodge_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"al-quiet__card","layout":{"type":"default"}} -->
<div class="wp-block-group al-quiet__card"><!-- wp:heading {"level":3,"className":"al-quiet__h"} -->
<h3 class="wp-block-heading al-quiet__h"><?php echo esc_html( asayake_lodge_t( 'quiet_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"al-quiet__p"} -->
<p class="al-quiet__p"><?php echo esc_html( asayake_lodge_t( 'quiet_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
