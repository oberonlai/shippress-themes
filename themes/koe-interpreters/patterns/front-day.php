<?php
/**
 * Title: Home: the meeting day with the hour ruler
 * Slug: koe-interpreters/front-day
 * Categories: koe-interpreters
 * Keywords: interpreting, meeting day, schedule
 * Viewport Width: 1440
 * Description: Heading and paragraphs beside a photograph, then a horizontal hour ruler from 07:00 to 18:00 with five proportional markers, each leading to a short note below.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ko-day","anchor":"meeting-day","layout":{"type":"default"}} -->
<section id="meeting-day" class="wp-block-group alignfull ko-day"><!-- wp:group {"align":"wide","className":"ko-day__a","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ko-day__a"><!-- wp:group {"className":"ko-day__text","layout":{"type":"default"}} -->
<div class="wp-block-group ko-day__text"><!-- wp:paragraph {"className":"ko-label ko-label--teal"} -->
<p class="ko-label ko-label--teal"><?php echo wp_kses_post( koe_interpreters_t( 'k4985030d' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up"><?php echo wp_kses_post( koe_interpreters_t( 'k6bd6f210' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( koe_interpreters_t( 'k1a7410ea' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( koe_interpreters_t( 'k2630e881' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ko-day__img"} -->
<figure class="wp-block-image size-large ko-day__img"><img src="<?php echo koe_interpreters_img( 'p11.webp' ); ?>" alt="<?php echo esc_attr( koe_interpreters_t( 'a147e0e7a' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"align":"wide","className":"ko-ruler","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ko-ruler"><!-- wp:html -->
<div class="ko-ruler__track" aria-hidden="true"><span class="ko-dot ko-dot--1"></span><span class="ko-dot ko-dot--2"></span><span class="ko-dot ko-dot--3"></span><span class="ko-dot ko-dot--4"></span><span class="ko-dot ko-dot--5"></span><svg class="ko-ruler__leads" viewBox="0 0 1200 44" preserveAspectRatio="none" fill="none" stroke="#0C2336" stroke-width="1"><path vector-effect="non-scaling-stroke" d="M81.8 0V32H4V44"/><path vector-effect="non-scaling-stroke" d="M136.4 0V22H244V44"/><path vector-effect="non-scaling-stroke" d="M218.2 0V12H484V44"/><path vector-effect="non-scaling-stroke" d="M600 0V22H724V44"/><path vector-effect="non-scaling-stroke" d="M1145.4 0V22H964V44"/></svg></div>
<!-- /wp:html --><!-- wp:group {"className":"ko-ruler__notes sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ko-ruler__notes sp-stagger"><!-- wp:group {"className":"ko-stop sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ko-stop sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ko-stop__time"} -->
<p class="ko-stop__time">07:45</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-stop__note"} -->
<p class="ko-stop__note"><?php echo wp_kses_post( koe_interpreters_t( 'k48bf6009' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-stop sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ko-stop sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ko-stop__time"} -->
<p class="ko-stop__time">08:15</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-stop__note"} -->
<p class="ko-stop__note"><?php echo wp_kses_post( koe_interpreters_t( 'k7cfee611' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-stop ko-stop--open sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ko-stop ko-stop--open sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ko-stop__time"} -->
<p class="ko-stop__time">09:00</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-stop__note"} -->
<p class="ko-stop__note"><?php echo wp_kses_post( koe_interpreters_t( 'k240aa6c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-stop sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ko-stop sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ko-stop__time"} -->
<p class="ko-stop__time">12:30</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-stop__note"} -->
<p class="ko-stop__note"><?php echo wp_kses_post( koe_interpreters_t( 'kbc5b0b4d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-stop sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ko-stop sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ko-stop__time"} -->
<p class="ko-stop__time">17:30</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-stop__note"} -->
<p class="ko-stop__note"><?php echo wp_kses_post( koe_interpreters_t( 'ke317279e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"align":"wide","className":"ko-day__relay"} -->
<p class="alignwide ko-day__relay"><?php echo wp_kses_post( koe_interpreters_t( 'kb530362a' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
