<?php
/**
 * Title: Home: corridor band with parallax
 * Slug: mikura-storage/front-corridor
 * Categories: mikura-storage
 * Viewport Width: 1440
 * Description: Full-width corridor photograph with a slow vertical parallax and the band words in white.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p14-corridor-wide.webp' ) ); ?>","dimRatio":30,"customOverlayColor":"#212529","minHeight":640,"contentPosition":"bottom left","className":"mk-corridor sp-parallax","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left mk-corridor sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#212529"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( mikura_storage_t( 'k54987f5a' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p14-corridor-wide.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"mk-wrap mk-corridor__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-wrap mk-corridor__in">
<!-- wp:heading {"level":2,"className":"mk-band"} -->
<h2 class="wp-block-heading mk-band"><?php echo wp_kses_post( mikura_storage_t( 'k0a57748f' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mk-band__text"} -->
<p class="mk-band__text"><?php echo wp_kses_post( mikura_storage_t( 'k55d97e95' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
