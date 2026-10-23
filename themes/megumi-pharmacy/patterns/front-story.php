<?php
/**
 * Title: Home: one story
 * Slug: megumi-pharmacy/front-story
 * Categories: megumi-pharmacy
 * Keywords: story, longform
 * Viewport Width: 1440
 * Description: A wide 21:9 photograph and one short story in a 645 px column.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mp-sec mp-story","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mp-sec mp-story"><!-- wp:group {"className":"mp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mp-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mp-story__photo"} -->
<figure class="wp-block-image size-full mp-story__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-sorting.webp' ) ); ?>" alt="<?php echo esc_attr( megumi_pharmacy_t( 'afd4613e3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mp-story__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-story__col sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker"><?php echo wp_kses_post( megumi_pharmacy_t( 'k36ec2072' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mp-h2"} -->
<h2 class="wp-block-heading mp-h2"><?php echo wp_kses_post( megumi_pharmacy_t( 'kdda5b551' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( megumi_pharmacy_t( 'k673df1de' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( megumi_pharmacy_t( 'k9d72f9bd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-sign"} -->
<p class="mp-sign"><?php echo wp_kses_post( megumi_pharmacy_t( 'k0f133e03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mp-btn mp-btn--ink"} -->
<div class="wp-block-button mp-btn mp-btn--ink"><a class="wp-block-button__link wp-element-button" href="/stories/"><?php echo wp_kses_post( megumi_pharmacy_t( 'ke3068ba5' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
