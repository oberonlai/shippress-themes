<?php
/**
 * Title: Home: visit (hours, address, telephone)
 * Slug: nemuri-clinic/front-visit
 * Categories: nemuri-clinic
 * Inserter: yes
 * Viewport Width: 1440
 * Description: Hours table with dots, address, large telephone number and an entrance photograph.
 */
?>
<!-- wp:group {"align":"full","className":"nc-sec nc-visit","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nc-sec nc-visit"><!-- wp:group {"className":"nc-head","layout":{"type":"default"}} -->
<div class="wp-block-group nc-head"><!-- wp:heading {"className":"nc-head__t"} -->
<h2 class="wp-block-heading nc-head__t"><?php echo wp_kses_post( nemuri_clinic_t( 'k5e706a9b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label"><?php echo wp_kses_post( nemuri_clinic_t( 'k523eedb6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-visit__in","layout":{"type":"default"}} -->
<div class="wp-block-group nc-visit__in"><!-- wp:group {"className":"nc-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group nc-visit__text"><!-- wp:html -->
<table class="nc-hours"><thead><tr><th scope="col"><span class="screen-reader-text"><?php echo wp_kses_post( nemuri_clinic_t( 'kc2ba7e78' ) ); ?></span></th><th scope="col"><?php echo wp_kses_post( nemuri_clinic_t( 'kfd29458a' ) ); ?></th><th scope="col"><?php echo wp_kses_post( nemuri_clinic_t( 'k2ddecde8' ) ); ?></th><th scope="col"><?php echo wp_kses_post( nemuri_clinic_t( 'k510c292b' ) ); ?></th><th scope="col"><?php echo wp_kses_post( nemuri_clinic_t( 'ked5e8353' ) ); ?></th><th scope="col"><?php echo wp_kses_post( nemuri_clinic_t( 'kac616f84' ) ); ?></th><th scope="col"><?php echo wp_kses_post( nemuri_clinic_t( 'k13c7d2d7' ) ); ?></th><th scope="col"><?php echo wp_kses_post( nemuri_clinic_t( 'kef6572e4' ) ); ?></th></tr></thead><tbody>
<tr><th scope="row"><?php echo wp_kses_post( nemuri_clinic_t( 'ke64629de' ) ); ?><span>13:00–17:00</span></th><td class="x" data-d="Mon">—</td><td data-d="Tue">●</td><td data-d="Wed">●</td><td data-d="Thu">●</td><td data-d="Fri">●</td><td data-d="Sat">▲</td><td class="x" data-d="Sun">—</td></tr>
<tr><th scope="row"><?php echo wp_kses_post( nemuri_clinic_t( 'k0b8bd8e7' ) ); ?><span>17:30–21:00</span></th><td class="x" data-d="Mon">—</td><td data-d="Tue">●</td><td data-d="Wed">●</td><td data-d="Thu">●</td><td data-d="Fri">●</td><td class="x" data-d="Sat">—</td><td class="x" data-d="Sun">—</td></tr>
<tr><th scope="row"><?php echo wp_kses_post( nemuri_clinic_t( 'k48b089e7' ) ); ?><span><?php echo wp_kses_post( nemuri_clinic_t( 'kf92f0483' ) ); ?></span></th><td class="x" data-d="Mon">—</td><td data-d="Tue">●</td><td data-d="Wed">●</td><td data-d="Thu">●</td><td class="x" data-d="Fri">—</td><td class="x" data-d="Sat">—</td><td class="x" data-d="Sun">—</td></tr>
</tbody></table>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"nc-visit__note"} -->
<p class="nc-visit__note"><?php echo wp_kses_post( nemuri_clinic_t( 'kfa485e29' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nc-visit__addr"} -->
<p class="nc-visit__addr"><?php echo wp_kses_post( nemuri_clinic_t( 'k95ffa0a1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nc-bigtel"} -->
<p class="nc-bigtel"><span><?php echo wp_kses_post( nemuri_clinic_t( 'k6ab9375e' ) ); ?></span> <a href="tel:+12065550142">(206) 555-0142</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nc-more"} -->
<p class="nc-more"><a href="/first-visit/"><?php echo wp_kses_post( nemuri_clinic_t( 'k43700e64' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nc-visit__img"} -->
<figure class="wp-block-image size-large nc-visit__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/visit-entrance.webp' ) ); ?>" alt="<?php echo esc_attr( 'Glass entrance doors of the clinic looking out toward evening city streetlights.' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
