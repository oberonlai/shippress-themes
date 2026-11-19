<?php
/**
 * Title: Page: Departures & Prices
 * Slug: rinrin-cycletours/inner-departures
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Departures and prices: quay hero, stepped intro, the full-width seven-line price table, what is included, season windows and deposit terms.
 */
?>
<!-- wp:group {"className":"rc-ihero sp-parallax","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-ihero sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-ihero__img"} -->
<figure class="wp-block-image size-full rc-ihero__img"><img src="<?php echo rinrin_cycletours_img( 'tour-lighthouse.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_lighthouse' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rc-ihero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group rc-ihero__inner"><!-- wp:heading {"level":1,"className":"rc-ihero__title"} -->
<h1 class="wp-block-heading rc-ihero__title"><?php echo esc_html( rinrin_cycletours_t( 'departures_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-istep","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-istep"><!-- wp:group {"className":"rc-istep__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-istep__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'dp_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rc-istep__h"} -->
<h2 class="wp-block-heading rc-istep__h"><span class="rc-step rc-step--1"><?php echo esc_html( rinrin_cycletours_t( 'departures_st1' ) ); ?></span><span class="rc-step rc-step--2"><?php echo esc_html( rinrin_cycletours_t( 'departures_st2' ) ); ?></span><span class="rc-step rc-step--3"><?php echo esc_html( rinrin_cycletours_t( 'departures_st3' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-istep__p"} -->
<p class="rc-istep__p"><?php echo esc_html( rinrin_cycletours_t( 'departures_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-isecs"><!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'departures_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'departures_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-itbl rc-itbl--prices","tagName":"section","anchor":"prices","align":"full","layout":{"type":"default"}} -->
<section id="prices" class="wp-block-group alignfull rc-itbl rc-itbl--prices"><!-- wp:html -->
<div class="rc-tbl-wrap"><table class="rc-tbl "><thead><tr><th scope="col"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c1' ) ); ?></th><th scope="col" class="rc-tbl__n"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c2' ) ); ?></th></tr></thead><tbody><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_r1_c1' ) ); ?></td><td class="rc-tbl__n"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c2' ) ); ?></span>€690</td></tr><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_r2_c1' ) ); ?></td><td class="rc-tbl__n"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c2' ) ); ?></span>€920</td></tr><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_r3_c1' ) ); ?></td><td class="rc-tbl__n"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c2' ) ); ?></span>€1,140</td></tr><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_r4_c1' ) ); ?></td><td class="rc-tbl__n"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c2' ) ); ?></span>€1,260</td></tr><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_r5_c1' ) ); ?></td><td class="rc-tbl__n"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c2' ) ); ?></span>€1,780</td></tr><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_r6_c1' ) ); ?></td><td class="rc-tbl__n"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c2' ) ); ?></span>€25</td></tr><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_r7_c1' ) ); ?></td><td class="rc-tbl__n"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_prices_c2' ) ); ?></span>€45</td></tr></tbody></table></div>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-isecs"><!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'departures_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'departures_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-itbl rc-itbl--season","tagName":"section","anchor":"season","align":"full","layout":{"type":"default"}} -->
<section id="season" class="wp-block-group alignfull rc-itbl rc-itbl--season"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rc-itbl__h"} -->
<h2 class="wp-block-heading rc-itbl__h"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<div class="rc-tbl-wrap"><table class="rc-tbl "><thead><tr><th scope="col"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c1' ) ); ?></th><th scope="col"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c2' ) ); ?></th><th scope="col"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c3' ) ); ?></th><th scope="col"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c4' ) ); ?></th></tr></thead><tbody><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r1_c1' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c2' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r1_c2' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c3' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r1_c3' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c4' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r1_c4' ) ); ?></td></tr><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r2_c1' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c2' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r2_c2' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c3' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r2_c3' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c4' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r2_c4' ) ); ?></td></tr><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r3_c1' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c2' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r3_c2' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c3' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r3_c3' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c4' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r3_c4' ) ); ?></td></tr><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r4_c1' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c2' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r4_c2' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c3' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r4_c3' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c4' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r4_c4' ) ); ?></td></tr><tr><td class="rc-tbl__h"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c1' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r5_c1' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c2' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r5_c2' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c3' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r5_c3' ) ); ?></td><td><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'dp_season_c4' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'dp_season_r5_c4' ) ); ?></td></tr></tbody></table></div>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-isecs"><!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'departures_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'departures_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-ibook","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-ibook"><!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rc-pill rc-pill--fill"} -->
<div class="wp-block-button rc-pill rc-pill--fill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'pill_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
