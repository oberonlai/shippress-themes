<?php
/**
 * Title: Home: about the school
 * Slug: kaiten-skills/front-intro
 * Categories: kaiten-skills
 * Viewport Width: 1440
 * Description: Text in columns 2–7, tilted photo in columns 8–11.
 */
?>
<!-- wp:group {"className":"ks-intro","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ks-intro"><!-- wp:group {"className":"ks-wrap ks-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wrap ks-intro__grid"><!-- wp:group {"className":"ks-intro__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-intro__text"><!-- wp:group {"className":"ks-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo wp_kses_post( kaiten_skills_t( 'k8f7f4c1c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo wp_kses_post( kaiten_skills_t( 'kcf056113' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'ka9ffcb0e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'kd62997ca' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-intro__ph","layout":{"type":"default"}} -->
<div class="wp-block-group ks-intro__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-intro__img sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full ks-intro__img sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-notes.webp' ) ); ?>" alt="<?php echo esc_attr( kaiten_skills_t( 'ae8565e2a' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
