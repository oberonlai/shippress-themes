<?php
/**
 * Title: Page: Open evening
 * Slug: tochi-academy/page-open-evening
 * Categories: tochi-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: Visit the college
 */
?>
<!-- wp:paragraph {"className":"ta-lede"} -->
<p class="ta-lede"><?php echo wp_kses_post( tochi_academy_t( 'kd8ef7c83' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ta-split","layout":{"type":"default"}} -->
<div class="wp-block-group ta-split"><!-- wp:group {"className":"ta-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ta-split__text"><!-- wp:paragraph {"className":"ta-label"} -->
<p class="ta-label"><?php echo wp_kses_post( tochi_academy_t( 'k52a0e19e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tochi_academy_t( 'k81bd8cf6' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k32616fcd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k77e7739d' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-split__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ta-split__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ta-photo ta-photo--portrait"} -->
<figure class="wp-block-image size-full ta-photo ta-photo--portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P03.webp' ) ); ?>" alt="<?php echo esc_attr( tochi_academy_t( 'aff22e961' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-rows","layout":{"type":"default"}} -->
<div class="wp-block-group ta-rows">
<!-- wp:paragraph {"className":"ta-row"} -->
<p class="ta-row"><a href="/contact/"><span class="ta-row__n"><?php echo wp_kses_post( tochi_academy_t( 'kda871149' ) ); ?></span><span class="ta-row__s"><?php echo wp_kses_post( tochi_academy_t( 'k60a4344d' ) ); ?></span><span class="ta-row__e"><?php echo wp_kses_post( tochi_academy_t( 'k78ae6f0c' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ta-row"} -->
<p class="ta-row"><a href="/contact/"><span class="ta-row__n"><?php echo wp_kses_post( tochi_academy_t( 'kc0a5a5cf' ) ); ?></span><span class="ta-row__s"><?php echo wp_kses_post( tochi_academy_t( 'k60a4344d' ) ); ?></span><span class="ta-row__e"><?php echo wp_kses_post( tochi_academy_t( 'k78ae6f0c' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ta-row"} -->
<p class="ta-row"><a href="/contact/"><span class="ta-row__n"><?php echo wp_kses_post( tochi_academy_t( 'k5c8febd1' ) ); ?></span><span class="ta-row__s"><?php echo wp_kses_post( tochi_academy_t( 'k60a4344d' ) ); ?></span><span class="ta-row__e"><?php echo wp_kses_post( tochi_academy_t( 'k78ae6f0c' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tochi_academy_t( 'kfda5a72b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k3ae246fe' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tochi_academy_t( 'kf8d39bab' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k0d2e973e' ) ); ?></p>
<!-- /wp:paragraph -->

<?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ta-pill"} -->
<div class="wp-block-button ta-pill"><a class="wp-block-button__link wp-element-button" href="mailto:office@tochi-academy.example?subject=<?php echo rawurlencode( tochi_academy_t( 'open_evening_subject' ) ); ?>"><?php echo esc_html( tochi_academy_t( 'open_evening_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
