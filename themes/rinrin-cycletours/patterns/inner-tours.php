<?php
/**
 * Title: Page: Tours
 * Slug: rinrin-cycletours/inner-tours
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Tours: quay hero, intro, five photo-left catalogue rows with spec lists and a circle arrow, notes, one full-bleed strip and the book pill.
 */
?>
<!-- wp:group {"className":"rc-ihero sp-parallax","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-ihero sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-ihero__img"} -->
<figure class="wp-block-image size-full rc-ihero__img"><img src="<?php echo rinrin_cycletours_img( 'band-road.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_band_road' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rc-ihero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group rc-ihero__inner"><!-- wp:heading {"level":1,"className":"rc-ihero__title"} -->
<h1 class="wp-block-heading rc-ihero__title"><?php echo esc_html( rinrin_cycletours_t( 'tours_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-ilede","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-ilede"><!-- wp:paragraph {"className":"rc-ilede__p"} -->
<p class="rc-ilede__p"><?php echo esc_html( rinrin_cycletours_t( 'tours_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-cat","tagName":"section","anchor":"catalogue","align":"full","layout":{"type":"default"}} -->
<section id="catalogue" class="wp-block-group alignfull rc-cat"><!-- wp:group {"className":"rc-cat__head","layout":{"type":"default"}} -->
<div class="wp-block-group rc-cat__head"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'deps_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-trow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow sp-reveal sp-reveal--up"><!-- wp:group {"className":"rc-trow__media","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-trow__img"} -->
<figure class="wp-block-image size-full rc-trow__img"><img src="<?php echo rinrin_cycletours_img( 'tour-harbour.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_harbour' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="rc-card__num" aria-hidden="true">01</p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-trow__info","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow__info"><!-- wp:heading {"level":2,"className":"rc-trow__name"} -->
<h2 class="wp-block-heading rc-trow__name"><?php echo esc_html( rinrin_cycletours_t( 'tour_harbour_name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-trow__txt"} -->
<p class="rc-trow__txt"><?php echo esc_html( rinrin_cycletours_t( 'tour_harbour_txt' ) ); ?> <?php echo esc_html( rinrin_cycletours_t( 'trow_harbour_txt2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-spec"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_days' ) ); ?></dt><dd>3</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_dist' ) ); ?></dt><dd>142 km</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_climb' ) ); ?></dt><dd>1,180 m</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_grade' ) ); ?></dt><dd>1 Easy</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_from' ) ); ?></dt><dd>€690</dd></div></dl>
<!-- /wp:html -->

<!-- wp:html -->
<a class="rc-circle" href="<?php echo esc_url( home_url( '/the-harbour-line/' ) ); ?>" aria-label="<?php echo rinrin_cycletours_a( 'trow_view' ); ?>"><span class="screen-reader-text"><?php echo esc_html( rinrin_cycletours_t( 'trow_view' ) ); ?></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-trow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow sp-reveal sp-reveal--up"><!-- wp:group {"className":"rc-trow__media","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-trow__img"} -->
<figure class="wp-block-image size-full rc-trow__img"><img src="<?php echo rinrin_cycletours_img( 'tour-lighthouse.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_lighthouse' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="rc-card__num" aria-hidden="true">02</p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-trow__info","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow__info"><!-- wp:heading {"level":2,"className":"rc-trow__name"} -->
<h2 class="wp-block-heading rc-trow__name"><?php echo esc_html( rinrin_cycletours_t( 'tour_lighthouse_name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-trow__txt"} -->
<p class="rc-trow__txt"><?php echo esc_html( rinrin_cycletours_t( 'tour_lighthouse_txt' ) ); ?> <?php echo esc_html( rinrin_cycletours_t( 'trow_lighthouse_txt2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-spec"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_days' ) ); ?></dt><dd>4</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_dist' ) ); ?></dt><dd>205 km</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_climb' ) ); ?></dt><dd>2,040 m</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_grade' ) ); ?></dt><dd>2 Steady</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_from' ) ); ?></dt><dd>€920</dd></div></dl>
<!-- /wp:html -->

<!-- wp:html -->
<a class="rc-circle" href="<?php echo esc_url( home_url( '/departures/' ) ); ?>" aria-label="<?php echo rinrin_cycletours_a( 'trow_view' ); ?>"><span class="screen-reader-text"><?php echo esc_html( rinrin_cycletours_t( 'trow_view' ) ); ?></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-trow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow sp-reveal sp-reveal--up"><!-- wp:group {"className":"rc-trow__media","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-trow__img"} -->
<figure class="wp-block-image size-full rc-trow__img"><img src="<?php echo rinrin_cycletours_img( 'tour-marsh.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_marsh' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="rc-card__num" aria-hidden="true">03</p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-trow__info","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow__info"><!-- wp:heading {"level":2,"className":"rc-trow__name"} -->
<h2 class="wp-block-heading rc-trow__name"><?php echo esc_html( rinrin_cycletours_t( 'tour_marsh_name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-trow__txt"} -->
<p class="rc-trow__txt"><?php echo esc_html( rinrin_cycletours_t( 'tour_marsh_txt' ) ); ?> <?php echo esc_html( rinrin_cycletours_t( 'trow_marsh_txt2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-spec"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_days' ) ); ?></dt><dd>5</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_dist' ) ); ?></dt><dd>248 km</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_climb' ) ); ?></dt><dd>1,620 m</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_grade' ) ); ?></dt><dd>2 Steady</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_from' ) ); ?></dt><dd>€1,140</dd></div></dl>
<!-- /wp:html -->

<!-- wp:html -->
<a class="rc-circle" href="<?php echo esc_url( home_url( '/departures/' ) ); ?>" aria-label="<?php echo rinrin_cycletours_a( 'trow_view' ); ?>"><span class="screen-reader-text"><?php echo esc_html( rinrin_cycletours_t( 'trow_view' ) ); ?></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-trow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow sp-reveal sp-reveal--up"><!-- wp:group {"className":"rc-trow__media","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-trow__img"} -->
<figure class="wp-block-image size-full rc-trow__img"><img src="<?php echo rinrin_cycletours_img( 'tour-cliff.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_cliff' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="rc-card__num" aria-hidden="true">04</p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-trow__info","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow__info"><!-- wp:heading {"level":2,"className":"rc-trow__name"} -->
<h2 class="wp-block-heading rc-trow__name"><?php echo esc_html( rinrin_cycletours_t( 'tour_cliff_name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-trow__txt"} -->
<p class="rc-trow__txt"><?php echo esc_html( rinrin_cycletours_t( 'tour_cliff_txt' ) ); ?> <?php echo esc_html( rinrin_cycletours_t( 'trow_cliff_txt2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-spec"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_days' ) ); ?></dt><dd>5</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_dist' ) ); ?></dt><dd>312 km</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_climb' ) ); ?></dt><dd>4,350 m</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_grade' ) ); ?></dt><dd>3 Hilly</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_from' ) ); ?></dt><dd>€1,260</dd></div></dl>
<!-- /wp:html -->

<!-- wp:html -->
<a class="rc-circle" href="<?php echo esc_url( home_url( '/departures/' ) ); ?>" aria-label="<?php echo rinrin_cycletours_a( 'trow_view' ); ?>"><span class="screen-reader-text"><?php echo esc_html( rinrin_cycletours_t( 'trow_view' ) ); ?></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-trow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow sp-reveal sp-reveal--up"><!-- wp:group {"className":"rc-trow__media","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-trow__img"} -->
<figure class="wp-block-image size-full rc-trow__img"><img src="<?php echo rinrin_cycletours_img( 'tour-longcoast.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_longcoast' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="rc-card__num" aria-hidden="true">05</p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-trow__info","layout":{"type":"default"}} -->
<div class="wp-block-group rc-trow__info"><!-- wp:heading {"level":2,"className":"rc-trow__name"} -->
<h2 class="wp-block-heading rc-trow__name"><?php echo esc_html( rinrin_cycletours_t( 'tour_long_name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-trow__txt"} -->
<p class="rc-trow__txt"><?php echo esc_html( rinrin_cycletours_t( 'tour_long_txt' ) ); ?> <?php echo esc_html( rinrin_cycletours_t( 'trow_long_txt2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-spec"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_days' ) ); ?></dt><dd>7</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_dist' ) ); ?></dt><dd>486 km</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_climb' ) ); ?></dt><dd>6,900 m</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_grade' ) ); ?></dt><dd>4 Strong</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_from' ) ); ?></dt><dd>€1,780</dd></div></dl>
<!-- /wp:html -->

<!-- wp:html -->
<a class="rc-circle" href="<?php echo esc_url( home_url( '/departures/' ) ); ?>" aria-label="<?php echo rinrin_cycletours_a( 'trow_view' ); ?>"><span class="screen-reader-text"><?php echo esc_html( rinrin_cycletours_t( 'trow_view' ) ); ?></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-isecs"><!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'tours_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'tours_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'tours_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'tours_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'tours_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'tours_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-strips rc-strips--inner","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-strips rc-strips--inner"><!-- wp:group {"className":"rc-sstrip sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group rc-sstrip sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-sstrip__img"} -->
<figure class="wp-block-image size-full rc-sstrip__img"><img src="<?php echo rinrin_cycletours_img( 'post-lighthouse.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_post_lighthouse' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rc-sstrip__inner","layout":{"type":"default"}} -->
<div class="wp-block-group rc-sstrip__inner"><!-- wp:heading {"level":2,"className":"rc-sstrip__cap"} -->
<h2 class="wp-block-heading rc-sstrip__cap"><?php echo esc_html( rinrin_cycletours_t( 'tours_strip_cap' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-sstrip__sub"} -->
<p class="rc-sstrip__sub"><?php echo esc_html( rinrin_cycletours_t( 'tours_strip_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<nav class="rc-links" aria-label="<?php echo rinrin_cycletours_a( 'tours_strip_cap_nav' ); ?>"><a href="<?php echo esc_url( home_url( '/the-harbour-line/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'tours_strip_l1' ) ); ?></a><a href="<?php echo esc_url( home_url( '/departures/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'tours_strip_l2' ) ); ?></a><a href="<?php echo esc_url( home_url( '/grades/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'tours_strip_l3' ) ); ?></a><a href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'tours_strip_l4' ) ); ?></a></nav>
<!-- /wp:html --></div>
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
