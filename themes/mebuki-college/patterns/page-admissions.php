<?php
/**
 * Title: Page: admissions
 * Slug: mebuki-college/page-admissions
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Description: Admissions page: page hero with a chalk tick, the four steps in a row, the observed morning, key dates and the deposit note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-ph","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-ph"><!-- wp:group {"className":"mb-ph__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-ph__text"><!-- wp:paragraph {"className":"mb-pill mb-pill--left"} -->
<p class="mb-pill mb-pill--left"><?php echo esc_html( mebuki_college_t( 'i_adm_hero_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"level":1,"className":"mb-ph__h"} /-->
<!-- wp:paragraph {"className":"mb-ph__lead"} -->
<p class="mb-ph__lead"><?php echo esc_html( mebuki_college_t( 'i_adm_hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-ph__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group mb-ph__photo sp-parallax"><!-- wp:group {"className":"sp-parallax__layer mb-ph__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer mb-ph__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-ph__img"} -->
<figure class="wp-block-image size-full mb-ph__img"><img src="<?php echo mebuki_college_img( 'p14-observed-morning.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<svg class="mb-chalk mb-chalk--s" viewBox="0 0 680 480" preserveAspectRatio="xMidYMid slice" aria-hidden="true" focusable="false"><path class="mb-chalk__loop" pathLength="1" d="M400 300C400 262 360 245 330 255C296 266 285 310 305 338C325 362 385 355 398 318"/><path class="mb-chalk__arrow" pathLength="1" d="M300 372C330 386 370 384 400 368"/><path class="mb-chalk__tick" pathLength="1" d="M395 85L415 115L455 65"/></svg>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec mb-sec--wash","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec mb-sec--wash"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'i_adm_s0_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'i_adm_s0_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_adm_s0_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-steps mb-steps--row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-steps mb-steps--row sp-reveal sp-reveal--up"><!-- wp:group {"className":"mb-step","layout":{"type":"default"}} -->
<div class="wp-block-group mb-step"><!-- wp:paragraph {"className":"mb-step__n"} -->
<p class="mb-step__n">01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"mb-step__h"} -->
<h3 class="wp-block-heading mb-step__h"><?php echo esc_html( mebuki_college_t( 'adm0_n' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-step__p"} -->
<p class="mb-step__p"><?php echo esc_html( mebuki_college_t( 'adm0_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-step","layout":{"type":"default"}} -->
<div class="wp-block-group mb-step"><!-- wp:paragraph {"className":"mb-step__n"} -->
<p class="mb-step__n">02</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"mb-step__h"} -->
<h3 class="wp-block-heading mb-step__h"><?php echo esc_html( mebuki_college_t( 'adm1_n' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-step__p"} -->
<p class="mb-step__p"><?php echo esc_html( mebuki_college_t( 'adm1_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-step","layout":{"type":"default"}} -->
<div class="wp-block-group mb-step"><!-- wp:paragraph {"className":"mb-step__n"} -->
<p class="mb-step__n">03</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"mb-step__h"} -->
<h3 class="wp-block-heading mb-step__h"><?php echo esc_html( mebuki_college_t( 'adm2_n' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-step__p"} -->
<p class="mb-step__p"><?php echo esc_html( mebuki_college_t( 'adm2_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-step","layout":{"type":"default"}} -->
<div class="wp-block-group mb-step"><!-- wp:paragraph {"className":"mb-step__n"} -->
<p class="mb-step__n">04</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"mb-step__h"} -->
<h3 class="wp-block-heading mb-step__h"><?php echo esc_html( mebuki_college_t( 'adm3_n' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-step__p"} -->
<p class="mb-step__p"><?php echo esc_html( mebuki_college_t( 'adm3_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'i_adm_s1_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'i_adm_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_adm_s1_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec mb-sec--white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec mb-sec--white"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'i_adm_s2_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'i_adm_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_adm_s2_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-dates","layout":{"type":"default"}} -->
<div class="wp-block-group mb-dates"><!-- wp:group {"className":"mb-date","layout":{"type":"default"}} -->
<div class="wp-block-group mb-date"><!-- wp:paragraph {"className":"mb-date__l"} -->
<p class="mb-date__l"><?php echo esc_html( mebuki_college_t( 'dt0_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-date__v"} -->
<p class="mb-date__v"><?php echo esc_html( mebuki_college_t( 'dt0_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-date","layout":{"type":"default"}} -->
<div class="wp-block-group mb-date"><!-- wp:paragraph {"className":"mb-date__l"} -->
<p class="mb-date__l"><?php echo esc_html( mebuki_college_t( 'dt1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-date__v"} -->
<p class="mb-date__v"><?php echo esc_html( mebuki_college_t( 'dt1_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-date","layout":{"type":"default"}} -->
<div class="wp-block-group mb-date"><!-- wp:paragraph {"className":"mb-date__l"} -->
<p class="mb-date__l"><?php echo esc_html( mebuki_college_t( 'dt2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-date__v"} -->
<p class="mb-date__v"><?php echo esc_html( mebuki_college_t( 'dt2_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-date","layout":{"type":"default"}} -->
<div class="wp-block-group mb-date"><!-- wp:paragraph {"className":"mb-date__l"} -->
<p class="mb-date__l"><?php echo esc_html( mebuki_college_t( 'dt3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-date__v"} -->
<p class="mb-date__v"><?php echo esc_html( mebuki_college_t( 'dt3_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mb-note"} -->
<p class="mb-note"><?php echo esc_html( mebuki_college_t( 'fees_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-textlink"} -->
<p class="mb-textlink"><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'i_adm_fees' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"mb-visit__btns"} -->
<div class="wp-block-buttons mb-visit__btns"><!-- wp:button {"className":"mb-btn"} -->
<div class="wp-block-button mb-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/open-days/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'visit_b1' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"mb-btn mb-btn--outline"} -->
<div class="wp-block-button mb-btn mb-btn--outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'visit_b2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
