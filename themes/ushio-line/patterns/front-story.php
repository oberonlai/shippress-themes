<?php
/**
 * Title: Home: story
 * Slug: ushio-line/front-story
 * Categories: ushio-line
 * Keywords: ferry, harbour
 * Viewport Width: 1440
 * Description: A real morning: a portrait photograph, a serif pull line and one passenger's short story.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ul-sec ul-story","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ul-sec ul-story"><!-- wp:group {"className":"ul-wrap ul-story__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ul-wrap ul-story__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ul-story__photo sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full ul-story__photo sp-reveal sp-reveal--up"><img src="<?php echo ushio_line_img( 's1-nurse.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_s1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ul-story__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ul-story__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ul-label"} -->
<p class="ul-label"><?php echo esc_html( ushio_line_t( 'sy_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ul-pull"} -->
<p class="ul-pull"><?php echo esc_html( ushio_line_t( 'sy_pull' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ul-h3"} -->
<h3 class="wp-block-heading ul-h3"><?php echo esc_html( ushio_line_t( 'sy_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ushio_line_t( 'sy_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ushio_line_t( 'sy_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo ushio_line_go( ushio_line_t( 'sy_go' ), '/about/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
