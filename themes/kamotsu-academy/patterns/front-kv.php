<?php
/**
 * Title: Home: full-bleed photo, giant white word, docked card
 * Slug: kamotsu-academy/front-kv
 * Categories: kamotsu-academy
 * Viewport Width: 1440
 * Description: Full-bleed yard photo with a giant two-line white caps word across its upper half, the kicker and tagline over line 1 and a white Next intake card docked at the bottom-right corner with a mini timeline line.
 */
?>
<!-- wp:group {"align":"full","className":"ka-kvwrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ka-kvwrap">
<!-- wp:group {"tagName":"section","anchor":"top","className":"ka-kv","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group ka-kv">
<!-- wp:cover {"url":"<?php echo kamotsu_academy_img( 'p01-yard-walk-round.webp' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.62},"isDark":false,"className":"ka-kv__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light ka-kv__photo sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo kamotsu_academy_a( 'alt_p01' ); ?>" src="<?php echo kamotsu_academy_img( 'p01-yard-walk-round.webp' ); ?>" style="object-position:50% 62%" data-object-fit="cover" data-object-position="50% 62%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
<!-- wp:group {"className":"ka-kv__top","layout":{"type":"default"}} -->
<div class="wp-block-group ka-kv__top">
<!-- wp:paragraph {"className":"ka-kicker ka-kv__kicker"} -->
<p class="ka-kicker ka-kv__kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'kv_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-kv__tagline"} -->
<p class="ka-kv__tagline"><?php echo wp_kses_post( kamotsu_academy_t( 'kv_tagline' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":1,"className":"ka-kv__word"} -->
<h1 class="wp-block-heading ka-kv__word"><span class="ka-kv__l1"><?php echo wp_kses_post( kamotsu_academy_t( 'kv_l1' ) ); ?></span> <span class="ka-kv__l2"><?php echo wp_kses_post( kamotsu_academy_t( 'kv_l2' ) ); ?></span></h1>
<!-- /wp:heading -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-card ka-kv__card","layout":{"type":"default"}} -->
<div class="wp-block-group ka-card ka-kv__card">
<!-- wp:group {"className":"ka-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group ka-card__text">
<!-- wp:paragraph {"className":"ka-card__k"} -->
<p class="ka-card__k"><?php echo wp_kses_post( kamotsu_academy_t( 'card_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-card__t"} -->
<p class="ka-card__t"><?php echo wp_kses_post( kamotsu_academy_t( 'card_title' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="ka-mini"><span class="ka-mini__a"><?php echo wp_kses_post( kamotsu_academy_t( 'card_enrol' ) ); ?></span><span class="ka-mini__b"><?php echo wp_kses_post( kamotsu_academy_t( 'card_test' ) ); ?></span></div>
<!-- /wp:html -->
<!-- wp:html -->
<a class="ka-chev ka-chev--line" href="/fees/" aria-label="<?php echo kamotsu_academy_a( 'card_go' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-card__thumb"} -->
<figure class="wp-block-image size-full ka-card__thumb"><img src="<?php echo kamotsu_academy_img( 'p02-checklist-wheel.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
