<?php
/**
 * Title: Home: visit (entrance photograph, address and hours)
 * Slug: seimyaku-clinic/front-visit
 * Categories: seimyaku-clinic
 * Keywords: visit, address
 * Viewport Width: 1440
 * Description: A photograph of the entrance beside the address, a two-column hours table, contact details, what to bring and two buttons.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visit","className":"sz-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-visit" id="visit"><!-- wp:group {"className":"sz-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sz-visit__grid"><!-- wp:group {"className":"sz-visit__photo","layout":{"type":"default"}} -->
<div class="wp-block-group sz-visit__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo seimyaku_clinic_img( 'entrance-stairs.webp' ); ?>" alt="<?php echo esc_attr( seimyaku_clinic_t( 'a27071b75' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-visit__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-visit__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'k1fb581e1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seimyaku_clinic_t( 'kd2a6fb64' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"sz-hours","hasFixedLayout":false} -->
<figure class="wp-block-table sz-hours"><table><thead><tr><th><?php echo wp_kses_post( seimyaku_clinic_t( 'k03727ac4' ) ); ?></th><th><?php echo wp_kses_post( seimyaku_clinic_t( 'k6a7e7316' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( seimyaku_clinic_t( 'k6ea62973' ) ); ?></td><td><?php echo wp_kses_post( seimyaku_clinic_t( 'k613edc53' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( seimyaku_clinic_t( 'k8b705118' ) ); ?></td><td>09:00–12:30</td></tr><tr><td><?php echo wp_kses_post( seimyaku_clinic_t( 'k2d5cd99e' ) ); ?></td><td><?php echo wp_kses_post( seimyaku_clinic_t( 'k03f4a478' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seimyaku_clinic_t( 'k570c16c4' ) ); ?> <a href="mailto:care@seimyaku-clinic.example"><?php echo wp_kses_post( seimyaku_clinic_t( 'kd21eb933' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-bring"} -->
<p class="sz-bring"><strong><?php echo wp_kses_post( seimyaku_clinic_t( 'k862d5ae0' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sz-meta"} -->
<p class="is-style-sz-meta"><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k0bffb310' ) ); ?></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k0d847a70' ) ); ?></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'kadd3b2b1' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-note"} -->
<p class="sz-note"><?php echo wp_kses_post( seimyaku_clinic_t( 'k1b27660f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sz-visit__btns","layout":{"type":"default"}} -->
<div class="wp-block-group sz-visit__btns"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sz-btn"} -->
<div class="wp-block-button sz-btn"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k43700e64' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k69d9a05e' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
