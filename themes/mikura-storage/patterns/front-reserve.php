<?php
/**
 * Title: Home: book a visit
 * Slug: mikura-storage/front-reserve
 * Categories: mikura-storage
 * Viewport Width: 1440
 * Description: The single way to reserve: a blue panel with a short static form and a photograph filling its right side.
 */
?>
<!-- wp:group {"className":"mk-sec mk-sec--reserve","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mk-sec mk-sec--reserve">
<!-- wp:group {"className":"mk-wrap","anchor":"reserve","layout":{"type":"default"}} -->
<div id="reserve" class="wp-block-group mk-wrap">
<!-- wp:group {"className":"mk-reserve","layout":{"type":"default"}} -->
<div class="wp-block-group mk-reserve">
<!-- wp:group {"className":"mk-reserve__form","layout":{"type":"default"}} -->
<div class="wp-block-group mk-reserve__form">
<!-- wp:heading {"level":2,"className":"mk-reserve__h"} -->
<h2 class="wp-block-heading mk-reserve__h"><?php echo wp_kses_post( mikura_storage_t( 'k26bd62d6' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mk-reserve__text"} -->
<p class="mk-reserve__text"><?php echo wp_kses_post( mikura_storage_t( 'kcdb1aaff' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="mk-form" action="/thanks/" method="get"><p class="mk-field"><label for="mk-r-name"><?php echo wp_kses_post( mikura_storage_t( 'k49ee3087' ) ); ?></label><input id="mk-r-name" name="name" type="text" autocomplete="name" required></p><p class="mk-field"><label for="mk-r-email"><?php echo wp_kses_post( mikura_storage_t( 'kce8ae9da' ) ); ?></label><input id="mk-r-email" name="email" type="email" autocomplete="email" required></p><p class="mk-field"><label for="mk-r-day"><?php echo wp_kses_post( mikura_storage_t( 'k03727ac4' ) ); ?></label><input id="mk-r-day" name="day" type="date"></p><p class="mk-field"><label for="mk-r-size"><?php echo wp_kses_post( mikura_storage_t( 'k6f6cb72d' ) ); ?></label><select id="mk-r-size" name="size"><option><?php echo wp_kses_post( mikura_storage_t( 'k27369e02' ) ); ?></option><option><?php echo wp_kses_post( mikura_storage_t( 'k5c2c4010' ) ); ?></option><option><?php echo wp_kses_post( mikura_storage_t( 'kec7aa157' ) ); ?></option><option><?php echo wp_kses_post( mikura_storage_t( 'k3f85b083' ) ); ?></option><option><?php echo wp_kses_post( mikura_storage_t( 'kd1310408' ) ); ?></option></select></p><p class="mk-field mk-field--btn"><button type="submit"><?php echo wp_kses_post( mikura_storage_t( 'k26bd62d6' ) ); ?></button></p></form>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"mk-ph mk-reserve__ph"} -->
<figure class="wp-block-image size-full mk-ph mk-reserve__ph"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p15-desk-morning.webp' ) ); ?>" alt="<?php echo esc_attr( mikura_storage_t( 'k58821a69' ) ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
