<?php
/**
 * Title: Home: rates
 * Slug: kaigi-centre/front-rates
 * Categories: kaigi-centre
 * Keywords: conference, front-rates
 * Viewport Width: 1440
 * Description: Six-row rate table, price column right-aligned and never clipped.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-rates-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-rates-sec">
<!-- wp:group {"className":"kc-rates__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-rates__head">
<!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label"><?php echo esc_html( kaigi_centre_t( 'rates_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2"><?php echo esc_html( kaigi_centre_t( 'rates_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:table {"className":"kc-rates"} -->
<figure class="wp-block-table kc-rates"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( kaigi_centre_t( 'rates_th1' ) ); ?></th><th><?php echo esc_html( kaigi_centre_t( 'rates_th2' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( kaigi_centre_t( 'k4dd9b587' ) ); ?></td><td>€6,800</td></tr><tr><td><?php echo wp_kses_post( kaigi_centre_t( 'k4caa462a' ) ); ?></td><td>€2,600</td></tr><tr><td><?php echo wp_kses_post( kaigi_centre_t( 'kf60d6bc4' ) ); ?></td><td>€1,900</td></tr><tr><td><?php echo wp_kses_post( kaigi_centre_t( 'kd791b6d8' ) ); ?></td><td>€640</td></tr><tr><td><?php echo wp_kses_post( kaigi_centre_t( 'k9fc999aa' ) ); ?></td><td>€420</td></tr><tr><td><?php echo wp_kses_post( kaigi_centre_t( 'k50b06e82' ) ); ?></td><td>€68</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"kc-rates__note"} -->
<p class="kc-rates__note"><?php echo esc_html( kaigi_centre_t( 'rates_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-textlink"} -->
<p class="kc-textlink"><a href="<?php echo esc_url( home_url( '/rates/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'rates_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
