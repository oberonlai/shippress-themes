<?php
/**
 * Title: Home: why a quiet room
 * Slug: nodoka-counselling/front-why
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Offset square photo at the left, a small label and link top right, and a loose column of short poem-like lines sitting low on the right.
 */
?>
<!-- wp:group {"className":"nc-sec nc-why","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"why"} -->
<section id="why" class="wp-block-group alignfull nc-sec nc-why"><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-why__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nc-why__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-why__photo sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full nc-why__photo sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-plaster-leaf.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"nc-why__text","layout":{"type":"default"}} -->
<div class="wp-block-group nc-why__text"><!-- wp:group {"className":"nc-poem__side","layout":{"type":"default"}} -->
<div class="wp-block-group nc-poem__side"><!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label"><?php echo esc_html( nodoka_counselling_t( 'why_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-link"} -->
<p class="nc-link"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'why_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-poem sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nc-poem sp-stagger"><!-- wp:paragraph {"className":"nc-poem__s sp-reveal sp-reveal--up"} -->
<p class="nc-poem__s sp-reveal sp-reveal--up"><?php echo nodoka_counselling_lines( 'why_s1' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-poem__s sp-reveal sp-reveal--up"} -->
<p class="nc-poem__s sp-reveal sp-reveal--up"><?php echo nodoka_counselling_lines( 'why_s2' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-poem__s sp-reveal sp-reveal--up"} -->
<p class="nc-poem__s sp-reveal sp-reveal--up"><?php echo nodoka_counselling_lines( 'why_s3' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->