<?php
/**
 * Title: Page: Contact
 * Slug: tochi-academy/page-contact
 * Categories: tochi-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: Address, hours and enquiries
 */
?>
<!-- wp:paragraph {"className":"ta-lede"} -->
<p class="ta-lede"><?php echo wp_kses_post( tochi_academy_t( 'k084c411a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ta-split","layout":{"type":"default"}} -->
<div class="wp-block-group ta-split"><!-- wp:group {"className":"ta-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ta-split__text"><!-- wp:paragraph {"className":"ta-label"} -->
<p class="ta-label"><?php echo wp_kses_post( tochi_academy_t( 'k24189e54' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tochi_academy_t( 'k68c02b2a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k99e24cb3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'kfbb415bf' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-split__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ta-split__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ta-photo ta-photo--portrait"} -->
<figure class="wp-block-image size-full ta-photo ta-photo--portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P04.webp' ) ); ?>" alt="<?php echo esc_attr( tochi_academy_t( 'ac2b41739' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tochi_academy_t( 'k3074c385' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k8951eaef' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tochi_academy_t( 'k8b894358' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k8a0a1c42' ) ); ?></p>
<!-- /wp:paragraph -->

<?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ta-pill"} -->
<div class="wp-block-button ta-pill"><a class="wp-block-button__link wp-element-button" href="mailto:office@tochi-academy.example"><?php echo esc_html( tochi_academy_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
