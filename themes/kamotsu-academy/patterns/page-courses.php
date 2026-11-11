<?php
/**
 * Title: Courses: tall cards, comparison and course structure
 * Slug: kamotsu-academy/page-courses
 * Categories: kamotsu-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: Courses page: head band, four tall promo cards, a comparison table and three text sections.
 */
?>
<!-- wp:group {"align":"full","className":"ka-pagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ka-pagewrap">
<!-- wp:group {"tagName":"section","className":"ka-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group ka-pagehead">
<!-- wp:cover {"url":"<?php echo kamotsu_academy_img( 'p15-fleet-line.webp' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"isDark":false,"className":"ka-pagehead__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light ka-pagehead__photo"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo kamotsu_academy_a( 'alt_p15' ); ?>" src="<?php echo kamotsu_academy_img( 'p15-fleet-line.webp' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
<!-- wp:heading {"level":1,"className":"ka-pagehead__word ka-pw-7"} -->
<h1 class="wp-block-heading ka-pagehead__word ka-pw-7"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_word' ) ); ?></h1>
<!-- /wp:heading -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-card ka-pagehead__card","layout":{"type":"default"}} -->
<div class="wp-block-group ka-card ka-pagehead__card">
<!-- wp:group {"className":"ka-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group ka-card__text">
<!-- wp:paragraph {"className":"ka-card__k"} -->
<p class="ka-card__k"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_ck' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-card__t"} -->
<p class="ka-card__t"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_ct' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="ka-mini"><span class="ka-mini__a"><?php echo wp_kses_post( kamotsu_academy_t( 'card_enrol' ) ); ?></span><span class="ka-mini__b"><?php echo wp_kses_post( kamotsu_academy_t( 'card_test' ) ); ?></span></div>
<!-- /wp:html -->
<!-- wp:html -->
<a class="ka-chev ka-chev--line" href="/fees/" aria-label="<?php echo kamotsu_academy_a( 'courses_ct' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
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
<!-- wp:group {"tagName":"section","align":"full","className":"ka-sec ka-intro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ka-sec ka-intro">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-intro__in sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-intro__in sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-lead ka-lead--xl"} -->
<p class="ka-lead ka-lead--xl"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ka-sec ka-routes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ka-sec ka-routes">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-rc-row sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ka-rc-row sp-stagger">
<!-- wp:group {"className":"ka-rc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-rc sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-rc__k"} -->
<p class="ka-rc__k"><?php echo wp_kses_post( kamotsu_academy_t( 'r1_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-rc__t"} -->
<h3 class="wp-block-heading ka-rc__t"><a href="/class-ce/"><?php echo wp_kses_post( kamotsu_academy_t( 'r1_t' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-rc__img"} -->
<figure class="wp-block-image size-full ka-rc__img"><img src="<?php echo kamotsu_academy_img( 'p04-reversing-cones.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<a class="ka-chev ka-chev--card" href="/class-ce/" aria-label="<?php echo kamotsu_academy_a( 'r1_t' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-rc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-rc sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-rc__k"} -->
<p class="ka-rc__k"><?php echo wp_kses_post( kamotsu_academy_t( 'r2_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-rc__t"} -->
<h3 class="wp-block-heading ka-rc__t"><a href="/class-c/"><?php echo wp_kses_post( kamotsu_academy_t( 'r2_t' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-rc__img"} -->
<figure class="wp-block-image size-full ka-rc__img"><img src="<?php echo kamotsu_academy_img( 'p05-cab-door.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<a class="ka-chev ka-chev--card" href="/class-c/" aria-label="<?php echo kamotsu_academy_a( 'r2_t' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
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
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ka-sec ka-cmp","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ka-sec ka-cmp">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-sechead sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'cmp_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'cmp_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="ka-panel ka-panel--full"><table class="ka-prices ka-prices--3"><tbody><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'cmp1_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'cmp1_s' ) ); ?></span></th><td class="ka-prices__m"><?php echo wp_kses_post( kamotsu_academy_t( 'cmp1_m' ) ); ?></td><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'cmp1_p' ) ); ?></td></tr><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'cmp2_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'cmp2_s' ) ); ?></span></th><td class="ka-prices__m"><?php echo wp_kses_post( kamotsu_academy_t( 'cmp2_m' ) ); ?></td><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'cmp2_p' ) ); ?></td></tr><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'cmp3_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'cmp3_s' ) ); ?></span></th><td class="ka-prices__m"><?php echo wp_kses_post( kamotsu_academy_t( 'cmp3_m' ) ); ?></td><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'cmp3_p' ) ); ?></td></tr><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'cmp4_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'cmp4_s' ) ); ?></span></th><td class="ka-prices__m"><?php echo wp_kses_post( kamotsu_academy_t( 'cmp4_m' ) ); ?></td><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'cmp4_p' ) ); ?></td></tr></tbody></table></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ka-sec ka-tx ka-tx--plain ka-sec--w","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ka-sec ka-tx ka-tx--plain ka-sec--w">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-tx__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-tx__grid sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-tx__col","layout":{"type":"default"}} -->
<div class="wp-block-group ka-tx__col">
<!-- wp:heading {"level":2,"className":"ka-h2 ka-tx__h"} -->
<h2 class="wp-block-heading ka-h2 ka-tx__h"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-tx__b"} -->
<p class="ka-tx__b"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ka-sec ka-tx ka-tx--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ka-sec ka-tx ka-tx--plain">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-tx__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-tx__grid sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-tx__col","layout":{"type":"default"}} -->
<div class="wp-block-group ka-tx__col">
<!-- wp:heading {"level":2,"className":"ka-h2 ka-tx__h"} -->
<h2 class="wp-block-heading ka-h2 ka-tx__h"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-tx__b"} -->
<p class="ka-tx__b"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ka-sec ka-tx ka-tx--plain ka-sec--w","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ka-sec ka-tx ka-tx--plain ka-sec--w">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-tx__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-tx__grid sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-tx__col","layout":{"type":"default"}} -->
<div class="wp-block-group ka-tx__col">
<!-- wp:heading {"level":2,"className":"ka-h2 ka-tx__h"} -->
<h2 class="wp-block-heading ka-h2 ka-tx__h"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-tx__b"} -->
<p class="ka-tx__b"><?php echo wp_kses_post( kamotsu_academy_t( 'courses_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ka-sec ka-close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ka-sec ka-close">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:buttons {"className":"ka-pillrow"} -->
<div class="wp-block-buttons ka-pillrow">
<!-- wp:button {"className":"is-style-outline-pill ka-pill ka-pill--out"} -->
<div class="wp-block-button is-style-outline-pill ka-pill ka-pill--out"><a class="wp-block-button__link wp-element-button" href="/fees/"><?php echo wp_kses_post( kamotsu_academy_t( 'close_courses' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

