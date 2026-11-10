<?php
/**
 * Title: Home: scope mornings
 * Slug: fukubi-clinic/front-mornings
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Full-width parallax photograph of the endoscopy suite with a white card (label, heading, fasting sentences, a compact week card row) docked at the left.
 */
?>
<?php $img = get_theme_file_uri( 'assets/images/p08-suite.webp' ); ?>
<!-- wp:cover {"url":"<?php echo esc_url( $img ); ?>","dimRatio":10,"overlayColor":"white","align":"full","className":"fc-mornings sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull fc-mornings sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( fc_t( 'alt_p08' ) ); ?>" src="<?php echo esc_url( $img ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"fc-card fc-mornings__card","layout":{"type":"default"}} -->
<div class="wp-block-group fc-card fc-mornings__card"><?php echo fc_label( fc_t( 'mor_label' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- wp:heading {"level":3,"className":"fc-h3"} -->
<h3 class="wp-block-heading fc-h3"><?php echo esc_html( fc_t( 'mor_h' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'mor_p' ) ); ?></p>
<!-- /wp:paragraph --><?php echo fc_week_card( 'compact' ); // phpcs:ignore WordPress.Security.EscapeOutput ?><!-- wp:paragraph {"className":"fc-more"} -->
<p class="fc-more"><a href="<?php echo esc_url( home_url( '/preparation/' ) ); ?>"><?php echo esc_html( fc_t( 'mor_btn' ) ); ?></a><?php echo fc_chev(); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
