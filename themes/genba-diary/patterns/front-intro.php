<?php
/**
 * Title: Home: intro band
 * Slug: genba-diary/front-intro
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Description: Grey band with a centred heading, one paragraph, a 16:9 photograph and an outline button.
 */
?>
<!-- wp:group {"className":"gd-intro","layout":{"type":"default"},"tagName":"section","anchor":"intro","align":"full"} -->
<section id="intro" class="wp-block-group alignfull gd-intro"><!-- wp:group {"className":"gd-wrap gd-center","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wrap gd-center"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe gd-sechead--c","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe gd-sechead--c"><!-- wp:paragraph {"className":"gd-label"} -->
<p class="gd-label"><?php echo esc_html( genba_diary_t( 'l_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"gd-h2"} -->
<h2 class="wp-block-heading gd-h2"><?php echo esc_html( genba_diary_t( 'intro_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gd-intro__p sp-reveal sp-reveal--up"} -->
<p class="gd-intro__p sp-reveal sp-reveal--up"><?php echo esc_html( genba_diary_t( 'intro_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-intro__img sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full gd-intro__img sp-reveal sp-reveal--up"><img src="<?php echo genba_diary_img( 'g02-tablet-drawing.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"gd-outline-wrap","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons gd-outline-wrap"><!-- wp:button {"className":"is-style-outline-chevron gd-outline"} -->
<div class="wp-block-button is-style-outline-chevron gd-outline"><a class="wp-block-button__link wp-element-button" href="#day"><?php echo esc_html( genba_diary_t( 'intro_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
