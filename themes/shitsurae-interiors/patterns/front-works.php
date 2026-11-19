<?php
/**
 * Title: Home: works
 * Slug: shitsurae-interiors/front-works
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: A sticky two-item index with a solid triangle marker beside a two-column grid of 3:2 photographs, each with its title and month underneath.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-works","anchor":"works","layout":{"type":"default"}} -->
<section id="works" class="wp-block-group alignfull si-sec si-works"><!-- wp:group {"className":"si-word sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_works' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_works' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-works__cols","layout":{"type":"default"}} -->
<div class="wp-block-group si-works__cols"><!-- wp:paragraph {"className":"si-index"} -->
<p class="si-index"><a class="is-current" href="<?php echo esc_url( home_url( '/works/#flats' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'ix_flats' ) ); ?></a><a href="<?php echo esc_url( home_url( '/works/#shops' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'ix_shops' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-works__main","layout":{"type":"default"}} -->
<div class="wp-block-group si-works__main"><!-- wp:paragraph {"className":"si-goto si-goto--top"} -->
<p class="si-goto si-goto--top"><a href="<?php echo esc_url( home_url( '/works/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'go_works' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-works__grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-works__grid sp-stagger"><!-- wp:group {"className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-card__ph"} -->
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p11-hollin-living.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'work_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__d"} -->
<p class="si-card__d"><?php echo esc_html( shitsurae_interiors_t( 'work_c_date' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-card__ph"} -->
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p12-arden-studio.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'work_e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__d"} -->
<p class="si-card__d"><?php echo esc_html( shitsurae_interiors_t( 'work_e_date' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-card__ph"} -->
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p13-fenn-shopfront.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'work_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__d"} -->
<p class="si-card__d"><?php echo esc_html( shitsurae_interiors_t( 'work_b_date' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-card__ph"} -->
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p14-market-florist.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'work_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__d"} -->
<p class="si-card__d"><?php echo esc_html( shitsurae_interiors_t( 'work_f_date' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->
