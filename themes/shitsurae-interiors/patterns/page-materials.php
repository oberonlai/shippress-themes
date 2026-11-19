<?php
/**
 * Title: Page: materials
 * Slug: shitsurae-interiors/page-materials
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Materials page: a two-line statement, then a sticky index (Plaster, Oak, Linen, Stone, Paint) with a triangle marker beside a two-column grid of 3:2 photographs with a title and two sentences.
 */
?>
<!-- wp:group {"tagName":"section","className":"si-hero si-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group si-hero si-hero--inner"><!-- wp:group {"className":"si-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__photo sp-parallax"><!-- wp:group {"className":"si-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-slide si-slide--1"} -->
<figure class="wp-block-image size-full si-slide si-slide--1"><img src="<?php echo shitsurae_interiors_img( 'p09-weir-reading.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-strip","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip"><!-- wp:paragraph {"className":"si-strip__desc"} -->
<p class="si-strip__desc"><?php echo shitsurae_interiors_lines( 'materials_desc' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-strip__right","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip__right"><!-- wp:heading {"level":1,"className":"si-strip__title"} -->
<h1 class="wp-block-heading si-strip__title"><?php echo esc_html( shitsurae_interiors_t( 'nav_materials' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'ring', 'si-ring' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:paragraph {"className":"si-lead2"} -->
<p class="si-lead2"><?php echo esc_html( shitsurae_interiors_t( 'materials_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-statement si-statement--pg","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-statement si-statement--pg"><!-- wp:group {"className":"si-statement__lines sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-statement__lines sp-stagger"><!-- wp:paragraph {"className":"si-statement__l sp-reveal sp-reveal--up"} -->
<p class="si-statement__l sp-reveal sp-reveal--up"><?php echo esc_html( shitsurae_interiors_t( 'mat_st_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-statement__l sp-reveal sp-reveal--up"} -->
<p class="si-statement__l sp-reveal sp-reveal--up"><?php echo esc_html( shitsurae_interiors_t( 'mat_st_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-statement__g sp-reveal sp-reveal--up"} -->
<p class="si-statement__g sp-reveal sp-reveal--up"><?php echo esc_html( shitsurae_interiors_t( 'mat_st_g' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:group {"className":"si-word sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_materials_pg' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_materials_pg' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-works__cols","layout":{"type":"default"}} -->
<div class="wp-block-group si-works__cols"><!-- wp:paragraph {"className":"si-index"} -->
<p class="si-index"><a class="is-current" href="#plaster"><?php echo esc_html( shitsurae_interiors_t( 'mi_plaster' ) ); ?></a><a href="#oak"><?php echo esc_html( shitsurae_interiors_t( 'mi_oak' ) ); ?></a><a href="#linen"><?php echo esc_html( shitsurae_interiors_t( 'mi_linen' ) ); ?></a><a href="#stone"><?php echo esc_html( shitsurae_interiors_t( 'mi_stone' ) ); ?></a><a href="#paint"><?php echo esc_html( shitsurae_interiors_t( 'mi_paint' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-works__main","layout":{"type":"default"}} -->
<div class="wp-block-group si-works__main"><!-- wp:group {"className":"si-works__grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-works__grid sp-stagger"><!-- wp:group {"anchor":"plaster","className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="plaster" class="wp-block-group si-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-card__ph"} -->
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p15-plaster-hands.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'mat_plaster_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__x"} -->
<p class="si-card__x"><?php echo esc_html( shitsurae_interiors_t( 'mat_plaster_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"oak","className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="oak" class="wp-block-group si-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-card__ph"} -->
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p17-oak-joinery.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'mat_oak_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__x"} -->
<p class="si-card__x"><?php echo esc_html( shitsurae_interiors_t( 'mat_oak_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"linen","className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="linen" class="wp-block-group si-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-card__ph"} -->
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p16-linen-samples.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'mat_linen_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__x"} -->
<p class="si-card__x"><?php echo esc_html( shitsurae_interiors_t( 'mat_linen_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"stone","className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="stone" class="wp-block-group si-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-card__ph"} -->
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p08-weir-cafe.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'mat_stone_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__x"} -->
<p class="si-card__x"><?php echo esc_html( shitsurae_interiors_t( 'mat_stone_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"paint","className":"si-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="paint" class="wp-block-group si-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-card__ph"} -->
<figure class="wp-block-image size-full si-card__ph"><img src="<?php echo shitsurae_interiors_img( 'p03-hollin-bedroom.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"si-card__t"} -->
<p class="si-card__t"><?php echo esc_html( shitsurae_interiors_t( 'mat_paint_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-card__x"} -->
<p class="si-card__x"><?php echo esc_html( shitsurae_interiors_t( 'mat_paint_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner si-inner--txt","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner si-inner--txt"><!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'materials_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'materials_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'materials_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'materials_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner si-inner--end","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner si-inner--end"><!-- wp:paragraph {"className":"si-goto"} -->
<p class="si-goto"><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'go_process_pg' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
