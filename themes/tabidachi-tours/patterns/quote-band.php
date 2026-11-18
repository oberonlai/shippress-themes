<?php
/**
 * Title: Home: inset gold duotone quote band with the newsletter line
 * Slug: tabidachi-tours/quote-band
 * Categories: tabidachi-tours
 * Viewport Width: 1440
 * Description: Rounded inset band, parallax photo toned gold, a 48px light quote and the newsletter slot.
 */
?>
<!-- wp:group {"className":"tt-sec tt-quote-sec","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull tt-sec tt-quote-sec"><!-- wp:group {"className":"tt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tt-wrap"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/band-coastal-path.webp' ) ); ?>","dimRatio":80,"customOverlayColor":"#B79B5B","minHeight":480,"minHeightUnit":"px","className":"tt-quote sp-parallax dark-band","layout":{"type":"default"}} -->
<div class="wp-block-cover tt-quote sp-parallax dark-band" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#B79B5B"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( tabidachi_tours_t( 'af533eccd' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/band-coastal-path.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

<!-- wp:group {"className":"tt-quote__in tt-dark","layout":{"type":"default"}} -->
<div class="wp-block-group tt-quote__in tt-dark"><!-- wp:paragraph {"className":"tt-quote__label"} -->
<p class="tt-quote__label"><?php echo wp_kses_post( tabidachi_tours_t( 'k209ec94f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"tt-quote__q"} -->
<h2 class="wp-block-heading tt-quote__q"><?php echo wp_kses_post( tabidachi_tours_t( 'k818d5012' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tt-quote__by"} -->
<p class="tt-quote__by"><?php echo wp_kses_post( tabidachi_tours_t( 'k3b00e458' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tt-quote__news","layout":{"type":"default"}} -->
<div class="wp-block-group tt-quote__news"><!-- wp:paragraph {"className":"tt-quote__nl"} -->
<p class="tt-quote__nl"><?php echo wp_kses_post( tabidachi_tours_t( 'k0f89c1d3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@tabidachi-tours.example', 'label' => tabidachi_tours_t( 'forms_email' ), 'submit' => tabidachi_tours_t( 'forms_subscribe' ), 'notice' => tabidachi_tours_t( 'forms_mail_notice' ), 'subject' => tabidachi_tours_t( 'forms_mail_subject' ) ) ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
