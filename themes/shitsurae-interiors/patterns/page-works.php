<?php
/**
 * Title: Page: works
 * Slug: shitsurae-interiors/page-works
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Works page: sticky Flats and Shops index with a solid triangle marker beside a two-column grid of 3:2 photographs, each with its title, month, size and weeks.
 */
?>
<!-- wp:group {"tagName":"section","className":"si-hero si-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group si-hero si-hero--inner"><!-- wp:group {"className":"si-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__photo sp-parallax"><!-- wp:group {"className":"si-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-slide si-slide--1"} -->
<figure class="wp-block-image size-full si-slide si-slide--1"><img src="<?php echo shitsurae_interiors_img( 'p03-hollin-bedroom.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-strip","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip"><!-- wp:paragraph {"className":"si-strip__desc"} -->
<p class="si-strip__desc"><?php echo shitsurae_interiors_lines( 'works_desc' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-strip__right","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip__right"><!-- wp:heading {"level":1,"className":"si-strip__title"} -->
<h1 class="wp-block-heading si-strip__title"><?php echo esc_html( shitsurae_interiors_t( 'nav_works' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'ring', 'si-ring' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:paragraph {"className":"si-lead2"} -->
<p class="si-lead2"><?php echo esc_html( shitsurae_interiors_t( 'works_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-word sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_works_pg' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_works_pg' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-works__cols","layout":{"type":"default"}} -->
<div class="wp-block-group si-works__cols"><!-- wp:paragraph {"className":"si-index"} -->
<p class="si-index"><a class="is-current" href="<?php echo esc_url( home_url( '/works/#flats' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'ix_flats' ) ); ?></a><a href="<?php echo esc_url( home_url( '/works/#shops' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'ix_shops' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-works__main","layout":{"type":"default"}} -->
<div class="wp-block-group si-works__main"><!-- wp:group {"className":"si-grp","layout":{"type":"default"}} -->
<div class="wp-block-group si-grp"><!-- wp:heading {"level":3,"className":"si-grp__h","anchor":"flats"} -->
<h3 id="flats" class="wp-block-heading si-grp__h"><?php echo esc_html( shitsurae_interiors_t( 'works_flats_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-grp__p"} -->
<p class="si-grp__p"><?php echo esc_html( shitsurae_interiors_t( 'works_flats_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-works__grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-works__grid sp-stagger"><!-- wp:group {"className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-card__ph"} -->
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p06-marlow-worktable.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'work_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__d"} -->
<p class="si-card__d"><?php echo esc_html( shitsurae_interiors_t( 'work_a_date' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
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
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-grp","layout":{"type":"default"}} -->
<div class="wp-block-group si-grp"><!-- wp:heading {"level":3,"className":"si-grp__h","anchor":"shops"} -->
<h3 id="shops" class="wp-block-heading si-grp__h"><?php echo esc_html( shitsurae_interiors_t( 'works_shops_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-grp__p"} -->
<p class="si-grp__p"><?php echo esc_html( shitsurae_interiors_t( 'works_shops_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-works__grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-works__grid sp-stagger"><!-- wp:group {"className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
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
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p09-weir-reading.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'work_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__d"} -->
<p class="si-card__d"><?php echo esc_html( shitsurae_interiors_t( 'work_d_date' ) ); ?></p>
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
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner si-inner--end","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner si-inner--end"><!-- wp:paragraph {"className":"si-goto"} -->
<p class="si-goto"><a href="<?php echo esc_url( home_url( '/cases/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'go_cases_pg' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
