<?php
/**
 * Title: Home: studio
 * Slug: shitsurae-interiors/front-studio
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Two columns: a bold two-line lead and three paragraphs on how the studio works, beside one square-ish photograph of the drawing table.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-studio","anchor":"studio","layout":{"type":"default"}} -->
<section id="studio" class="wp-block-group alignfull si-sec si-studio"><!-- wp:group {"className":"si-word sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_studio' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_studio' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-studio__cols","layout":{"type":"default"}} -->
<div class="wp-block-group si-studio__cols"><!-- wp:group {"className":"si-studio__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-studio__text sp-stagger"><!-- wp:paragraph {"className":"si-lead sp-reveal sp-reveal--up"} -->
<p class="si-lead sp-reveal sp-reveal--up"><?php echo shitsurae_interiors_lines( 'studio_lead' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prose sp-reveal sp-reveal--up"} -->
<p class="si-prose sp-reveal sp-reveal--up"><?php echo esc_html( shitsurae_interiors_t( 'studio_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prose sp-reveal sp-reveal--up"} -->
<p class="si-prose sp-reveal sp-reveal--up"><?php echo esc_html( shitsurae_interiors_t( 'studio_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prose sp-reveal sp-reveal--up"} -->
<p class="si-prose sp-reveal sp-reveal--up"><?php echo esc_html( shitsurae_interiors_t( 'studio_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-goto"} -->
<p class="si-goto"><a href="<?php echo esc_url( home_url( '/studio/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'go_studio' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-studio__photo sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-studio__photo sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p10-studio-desk.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->
