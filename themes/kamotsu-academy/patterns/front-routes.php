<?php
/**
 * Title: Home: four tall promo cards
 * Slug: kamotsu-academy/front-routes
 * Categories: kamotsu-academy
 * Viewport Width: 1440
 * Description: Four tall rounded cards on the pale grey ground: headline top-left, photo below, white round chevron bottom-left, a hi-vis badge on the first card and an outline pill underneath.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"courses","className":"ka-sec ka-routes","layout":{"type":"default"}} -->
<section id="courses" class="wp-block-group alignfull ka-sec ka-routes">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-sechead ka-sechead--c","layout":{"type":"default"}} -->
<div class="wp-block-group ka-sechead ka-sechead--c">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'routes_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'routes_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ka-lead ka-lead--c"} -->
<p class="ka-lead ka-lead--c"><?php echo wp_kses_post( kamotsu_academy_t( 'routes_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"ka-rc-row sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ka-rc-row sp-stagger">
<!-- wp:group {"className":"ka-rc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-rc sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-rc__k"} -->
<p class="ka-rc__k"><?php echo wp_kses_post( kamotsu_academy_t( 'r1_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-rc__t"} -->
<h3 class="wp-block-heading ka-rc__t"><a href="/courses/"><?php echo wp_kses_post( kamotsu_academy_t( 'r1_t' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-rc__img"} -->
<figure class="wp-block-image size-full ka-rc__img"><img src="<?php echo kamotsu_academy_img( 'p04-reversing-cones.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<a class="ka-chev ka-chev--card" href="/courses/" aria-label="<?php echo kamotsu_academy_a( 'r1_t' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html -->
<!-- wp:html -->
<div class="ka-badge" aria-hidden="true"><span><?php echo wp_kses_post( kamotsu_academy_t( 'badge_1' ) ); ?></span><span><?php echo wp_kses_post( kamotsu_academy_t( 'badge_2' ) ); ?></span><span><?php echo wp_kses_post( kamotsu_academy_t( 'badge_3' ) ); ?></span></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-rc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-rc sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-rc__k"} -->
<p class="ka-rc__k"><?php echo wp_kses_post( kamotsu_academy_t( 'r2_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-rc__t"} -->
<h3 class="wp-block-heading ka-rc__t"><a href="/courses/"><?php echo wp_kses_post( kamotsu_academy_t( 'r2_t' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-rc__img"} -->
<figure class="wp-block-image size-full ka-rc__img"><img src="<?php echo kamotsu_academy_img( 'p05-cab-door.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<a class="ka-chev ka-chev--card" href="/courses/" aria-label="<?php echo kamotsu_academy_a( 'r2_t' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-rc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-rc sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-rc__k"} -->
<p class="ka-rc__k"><?php echo wp_kses_post( kamotsu_academy_t( 'r3_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-rc__t"} -->
<h3 class="wp-block-heading ka-rc__t"><a href="/courses/"><?php echo wp_kses_post( kamotsu_academy_t( 'r3_t' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-rc__img"} -->
<figure class="wp-block-image size-full ka-rc__img"><img src="<?php echo kamotsu_academy_img( 'p06-refresher-coffee.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<a class="ka-chev ka-chev--card" href="/courses/" aria-label="<?php echo kamotsu_academy_a( 'r3_t' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-rc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-rc sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-rc__k"} -->
<p class="ka-rc__k"><?php echo wp_kses_post( kamotsu_academy_t( 'r4_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-rc__t"} -->
<h3 class="wp-block-heading ka-rc__t"><a href="/courses/"><?php echo wp_kses_post( kamotsu_academy_t( 'r4_t' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-rc__img"} -->
<figure class="wp-block-image size-full ka-rc__img"><img src="<?php echo kamotsu_academy_img( 'p07-cpc-classroom.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<a class="ka-chev ka-chev--card" href="/courses/" aria-label="<?php echo kamotsu_academy_a( 'r4_t' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"ka-pillrow"} -->
<div class="wp-block-buttons ka-pillrow">
<!-- wp:button {"className":"is-style-outline-pill ka-pill ka-pill--out"} -->
<div class="wp-block-button is-style-outline-pill ka-pill ka-pill--out"><a class="wp-block-button__link wp-element-button" href="/courses/"><?php echo wp_kses_post( kamotsu_academy_t( 'routes_pill' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
