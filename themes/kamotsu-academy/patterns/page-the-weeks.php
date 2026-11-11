<?php
/**
 * Title: The yard weeks: road timeline and week rows
 * Slug: kamotsu-academy/page-the-weeks
 * Categories: kamotsu-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: Seven-week road timeline, week-by-week rows with photos, the daily schedule and the mock test.
 */
?>
<!-- wp:group {"align":"full","className":"ka-pagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ka-pagewrap">
<!-- wp:group {"tagName":"section","className":"ka-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group ka-pagehead">
<!-- wp:cover {"url":"<?php echo kamotsu_academy_img( 'p01-yard-walk-round.webp' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"isDark":false,"className":"ka-pagehead__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light ka-pagehead__photo"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo kamotsu_academy_a( 'alt_p01' ); ?>" src="<?php echo kamotsu_academy_img( 'p01-yard-walk-round.webp' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
<!-- wp:heading {"level":1,"className":"ka-pagehead__word ka-pw-8"} -->
<h1 class="wp-block-heading ka-pagehead__word ka-pw-8"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_word' ) ); ?></h1>
<!-- /wp:heading -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-card ka-pagehead__card","layout":{"type":"default"}} -->
<div class="wp-block-group ka-card ka-pagehead__card">
<!-- wp:group {"className":"ka-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group ka-card__text">
<!-- wp:paragraph {"className":"ka-card__k"} -->
<p class="ka-card__k"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_ck' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-card__t"} -->
<p class="ka-card__t"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_ct' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<a class="ka-chev ka-chev--line" href="/fees/" aria-label="<?php echo kamotsu_academy_a( 'the-weeks_ct' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-card__thumb"} -->
<figure class="wp-block-image size-full ka-card__thumb"><img src="<?php echo kamotsu_academy_img( 'p13-open-yard.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p13' ); ?>"/></figure>
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
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-lead ka-lead--xl"} -->
<p class="ka-lead ka-lead--xl"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_intro' ) ); ?></p>
<!-- /wp:paragraph -->
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
<h2 class="wp-block-heading ka-h2 ka-tx__h"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-tx__b"} -->
<p class="ka-tx__b"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ka-sec ka-weeks ka-weeks--page ka-sec--w","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ka-sec ka-weeks ka-weeks--page ka-sec--w">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-weeks__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-weeks__head sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'weeks_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'weeks_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-road ka-road--7 sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ka-road ka-road--7 sp-stagger">
<!-- wp:group {"className":"ka-stop ka-stop--0 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-stop ka-stop--0 sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"ka-stop__t"} -->
<h3 class="wp-block-heading ka-stop__t"><?php echo wp_kses_post( kamotsu_academy_t( 'st0_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st0_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-stop__d"} -->
<p class="ka-stop__d"><?php echo wp_kses_post( kamotsu_academy_t( 'st0_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-stop ka-stop--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-stop ka-stop--1 sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"ka-stop__t"} -->
<h3 class="wp-block-heading ka-stop__t"><?php echo wp_kses_post( kamotsu_academy_t( 'st1_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st1_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-stop__d"} -->
<p class="ka-stop__d"><?php echo wp_kses_post( kamotsu_academy_t( 'st1_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-stop ka-stop--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-stop ka-stop--2 sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"ka-stop__t"} -->
<h3 class="wp-block-heading ka-stop__t"><?php echo wp_kses_post( kamotsu_academy_t( 'st2_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st2_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-stop__d"} -->
<p class="ka-stop__d"><?php echo wp_kses_post( kamotsu_academy_t( 'st2_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-stop ka-stop--3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-stop ka-stop--3 sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"ka-stop__t"} -->
<h3 class="wp-block-heading ka-stop__t"><?php echo wp_kses_post( kamotsu_academy_t( 'st3_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st3_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-stop__d"} -->
<p class="ka-stop__d"><?php echo wp_kses_post( kamotsu_academy_t( 'st3_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-stop ka-stop--4 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-stop ka-stop--4 sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"ka-stop__t"} -->
<h3 class="wp-block-heading ka-stop__t"><?php echo wp_kses_post( kamotsu_academy_t( 'st4_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st4_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-stop__d"} -->
<p class="ka-stop__d"><?php echo wp_kses_post( kamotsu_academy_t( 'st4_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-stop ka-stop--5 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-stop ka-stop--5 sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"ka-stop__t"} -->
<h3 class="wp-block-heading ka-stop__t"><?php echo wp_kses_post( kamotsu_academy_t( 'st5_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st5_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-stop__d"} -->
<p class="ka-stop__d"><?php echo wp_kses_post( kamotsu_academy_t( 'st5_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-stop ka-stop--6 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-stop ka-stop--6 sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"ka-stop__t"} -->
<h3 class="wp-block-heading ka-stop__t"><?php echo wp_kses_post( kamotsu_academy_t( 'st6_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-chip ka-chip--end"} -->
<p class="ka-chip ka-chip--end"><?php echo wp_kses_post( kamotsu_academy_t( 'st6_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-stop__d"} -->
<p class="ka-stop__d"><?php echo wp_kses_post( kamotsu_academy_t( 'st6_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ka-sec ka-wrows-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ka-sec ka-wrows-sec">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-sechead sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'wk_rows_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'wk_rows_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrows","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrows">
<!-- wp:group {"className":"ka-wrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-wrow__t","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow__t">
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st0_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-wrow__h"} -->
<h3 class="wp-block-heading ka-wrow__h"><?php echo wp_kses_post( kamotsu_academy_t( 'st0_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-wrow__p"} -->
<p class="ka-wrow__p"><?php echo wp_kses_post( kamotsu_academy_t( 'wk_row0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrow ka-wrow--ph ka-wrow--l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow ka-wrow--ph ka-wrow--l sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-wrow__ph","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-wrow__img"} -->
<figure class="wp-block-image size-full ka-wrow__img"><img src="<?php echo kamotsu_academy_img( 'p09-theory-evening.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrow__t","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow__t">
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st1_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-wrow__h"} -->
<h3 class="wp-block-heading ka-wrow__h"><?php echo wp_kses_post( kamotsu_academy_t( 'st1_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-wrow__p"} -->
<p class="ka-wrow__p"><?php echo wp_kses_post( kamotsu_academy_t( 'wk_row1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-wrow__t","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow__t">
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st2_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-wrow__h"} -->
<h3 class="wp-block-heading ka-wrow__h"><?php echo wp_kses_post( kamotsu_academy_t( 'st2_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-wrow__p"} -->
<p class="ka-wrow__p"><?php echo wp_kses_post( kamotsu_academy_t( 'wk_row2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrow ka-wrow--ph ka-wrow--r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow ka-wrow--ph ka-wrow--r sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-wrow__t","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow__t">
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st3_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-wrow__h"} -->
<h3 class="wp-block-heading ka-wrow__h"><?php echo wp_kses_post( kamotsu_academy_t( 'st3_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-wrow__p"} -->
<p class="ka-wrow__p"><?php echo wp_kses_post( kamotsu_academy_t( 'wk_row3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrow__ph","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-wrow__img"} -->
<figure class="wp-block-image size-full ka-wrow__img"><img src="<?php echo kamotsu_academy_img( 'p10-air-lines.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-wrow__t","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow__t">
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st4_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-wrow__h"} -->
<h3 class="wp-block-heading ka-wrow__h"><?php echo wp_kses_post( kamotsu_academy_t( 'st4_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-wrow__p"} -->
<p class="ka-wrow__p"><?php echo wp_kses_post( kamotsu_academy_t( 'wk_row4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-wrow__t","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow__t">
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st5_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-wrow__h"} -->
<h3 class="wp-block-heading ka-wrow__h"><?php echo wp_kses_post( kamotsu_academy_t( 'st5_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-wrow__p"} -->
<p class="ka-wrow__p"><?php echo wp_kses_post( kamotsu_academy_t( 'wk_row5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrow ka-wrow--ph ka-wrow--l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow ka-wrow--ph ka-wrow--l sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-wrow__ph","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-wrow__img"} -->
<figure class="wp-block-image size-full ka-wrow__img"><img src="<?php echo kamotsu_academy_img( 'p11-cab-mirror.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrow__t","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrow__t">
<!-- wp:paragraph {"className":"ka-chip"} -->
<p class="ka-chip"><?php echo wp_kses_post( kamotsu_academy_t( 'st6_c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ka-wrow__h"} -->
<h3 class="wp-block-heading ka-wrow__h"><?php echo wp_kses_post( kamotsu_academy_t( 'st6_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-wrow__p"} -->
<p class="ka-wrow__p"><?php echo wp_kses_post( kamotsu_academy_t( 'wk_row6' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
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
<h2 class="wp-block-heading ka-h2 ka-tx__h"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-tx__b"} -->
<p class="ka-tx__b"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_s2_b' ) ); ?></p>
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
<h2 class="wp-block-heading ka-h2 ka-tx__h"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-tx__b"} -->
<p class="ka-tx__b"><?php echo wp_kses_post( kamotsu_academy_t( 'the-weeks_s3_b' ) ); ?></p>
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
<div class="wp-block-button is-style-outline-pill ka-pill ka-pill--out"><a class="wp-block-button__link wp-element-button" href="/fees/"><?php echo wp_kses_post( kamotsu_academy_t( 'close_the-weeks' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

