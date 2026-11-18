<?php
/**
 * Title: Home: what goes in the bottle
 * Slug: taruki-distillery/front-bottle
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: S3: a bottle photograph at the left, a frosted botanicals photograph fading in from the right, text and a caps link.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--pale td-bottle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--pale td-bottle"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-bottle__ghost"} -->
<figure class="wp-block-image size-full td-bottle__ghost"><img src="<?php echo taruki_img( 'img-07.webp' ); ?>" alt="<?php echo taruki_a( 'alt_07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"td-bottle__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-bottle__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-bottle__pack sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full td-bottle__pack sp-reveal sp-reveal--up"><img src="<?php echo taruki_img( 'img-06.webp' ); ?>" alt="<?php echo taruki_a( 'alt_06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"td-bottle__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-bottle__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-caps"} -->
<p class="td-caps"><?php echo esc_html( taruki_t( 'bt_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"td-h2"} -->
<h2 class="wp-block-heading td-h2"><?php echo esc_html( taruki_t( 'bt_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-bottle__p"} -->
<p class="td-bottle__p"><?php echo esc_html( taruki_t( 'bt_body' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-link"} -->
<p class="td-link"><a href="/shop/"><?php echo esc_html( taruki_t( 'bt_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
