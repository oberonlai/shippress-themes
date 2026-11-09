<?php
/**
 * Title: Head: tpl-head-archive
 * Slug: kaban-luggage/tpl-head-archive
 * Categories: kaban-luggage
 * Keywords: luggage, shop, travel
 * Viewport Width: 1440
 * Inserter: no
 * Description: Dark head band for archives.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kl-head kl-head--small sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-head kl-head--small sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sp-parallax__layer kl-head__layer"} -->
<figure class="wp-block-image size-full sp-parallax__layer kl-head__layer"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/f1.webp' ) ); ?>" alt="A packed suitcase resting on a low floor scale during a fitting session."/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kl-head__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kl-head__copy"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label">STORIES</p>
<!-- /wp:paragraph -->

<?php if ( is_home() ) : ?>
<!-- wp:heading {"level":1,"className":"kl-head__title"} -->
<h1 class="wp-block-heading kl-head__title"><?php echo esc_html( kaban_luggage_t( 'kcbb37401' ) ); ?></h1>
<!-- /wp:heading -->
<?php else : ?>
<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"kl-head__title"} /-->
<?php endif; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
