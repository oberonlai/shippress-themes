<?php
/**
 * Title: Home: visit, photograph and a definition list of hours
 * Slug: hodoki-clinic/front-visit
 * Categories: hodoki-clinic
 * Keywords: home
 * Viewport Width: 1440
 * Description: White band with the entrance photograph, the address, opening hours as a definition list, phone, email, transport and two buttons.
 */
$hd = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"hd-sec hd-visit","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-sec hd-visit"><!-- wp:group {"className":"hd-wrap hd-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hd-wrap hd-visit__grid"><!-- wp:group {"className":"hd-visit__fig","layout":{"type":"default"}} -->
<div class="wp-block-group hd-visit__fig"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hd-wipe-x sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hd-wipe-x sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( $hd . 'visit-entrance.webp' ); ?>" alt="<?php echo esc_attr( hodoki_clinic_t( 'a5bb5442e' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-visit__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hd-visit__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hd-label"} -->
<p class="hd-label"><?php echo wp_kses_post( hodoki_clinic_t( 'k9de70f65' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hd-h2"} -->
<h2 class="wp-block-heading hd-h2"><?php echo wp_kses_post( hodoki_clinic_t( 'k7768fd9c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<dl class="hd-hours"><div><dt><?php echo wp_kses_post( hodoki_clinic_t( 'k5f25a222' ) ); ?></dt><dd>08:00–20:00</dd></div><div><dt><?php echo wp_kses_post( hodoki_clinic_t( 'k13c7d2d7' ) ); ?></dt><dd>09:00–14:00</dd></div><div><dt><?php echo wp_kses_post( hodoki_clinic_t( 'kaa8c72ff' ) ); ?></dt><dd><?php echo wp_kses_post( hodoki_clinic_t( 'k03f4a478' ) ); ?></dd></div></dl>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hd-note hd-note--tight"} -->
<p class="hd-note hd-note--tight"><?php echo wp_kses_post( hodoki_clinic_t( 'kae12093e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-body"} -->
<p class="hd-body"><?php echo wp_kses_post( hodoki_clinic_t( 'kbcc254b5' ) ); ?> <a href="tel:+15550142300">+1 555 0142 300</a><br><?php echo wp_kses_post( hodoki_clinic_t( 'kce8ae9da' ) ); ?> <a href="mailto:hello@hodoki-clinic.example"><?php echo wp_kses_post( hodoki_clinic_t( 'kdd86b07b' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-body"} -->
<p class="hd-body"><?php echo wp_kses_post( hodoki_clinic_t( 'k4fff62a5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hd-btns"} -->
<div class="wp-block-buttons hd-btns"><!-- wp:button {"className":"hd-pill hd-pill--fill"} -->
<div class="wp-block-button hd-pill hd-pill--fill"><a class="wp-block-button__link wp-element-button" href="/first-visit/"><?php echo wp_kses_post( hodoki_clinic_t( 'k36e1e09f' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"hd-pill hd-pill--soft"} -->
<div class="wp-block-button hd-pill hd-pill--soft"><a class="wp-block-button__link wp-element-button" href="/first-visit/"><?php echo wp_kses_post( hodoki_clinic_t( 'kfc206df9' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
