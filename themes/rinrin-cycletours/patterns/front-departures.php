<?php
/**
 * Title: Home: departures strip
 * Slug: rinrin-cycletours/front-departures
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Horizontal scroll-snap row of five tour spec cards: photograph, ghost numeral, name and a hairline spec list (days, distance, climbing, grade, from-price).
 */
?>
<!-- wp:group {"className":"rc-deps","tagName":"section","anchor":"tours","align":"full","layout":{"type":"default"}} -->
<section id="tours" class="wp-block-group alignfull rc-deps"><!-- wp:group {"className":"rc-deps__head","layout":{"type":"default"}} -->
<div class="wp-block-group rc-deps__head"><!-- wp:group {"className":"rc-deps__headl","layout":{"type":"default"}} -->
<div class="wp-block-group rc-deps__headl"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'deps_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rc-deps__h"} -->
<h2 class="wp-block-heading rc-deps__h"><?php echo esc_html( rinrin_cycletours_t( 'deps_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rc-pill rc-pill--s"} -->
<div class="wp-block-button rc-pill rc-pill--s"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/tours/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'deps_all' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-strip","layout":{"type":"default"}} -->
<div class="wp-block-group rc-strip"><!-- wp:group {"className":"rc-card","layout":{"type":"default"}} -->
<div class="wp-block-group rc-card"><!-- wp:group {"className":"rc-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group rc-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-card__img"} -->
<figure class="wp-block-image size-full rc-card__img"><img src="<?php echo rinrin_cycletours_img( 'tour-harbour.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_harbour' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="rc-card__num" aria-hidden="true">01</p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"rc-card__name"} -->
<h3 class="wp-block-heading rc-card__name"><?php echo esc_html( rinrin_cycletours_t( 'tour_harbour_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-card__txt"} -->
<p class="rc-card__txt"><?php echo esc_html( rinrin_cycletours_t( 'tour_harbour_txt' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-spec"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_days' ) ); ?></dt><dd>3</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_dist' ) ); ?></dt><dd>142 km</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_climb' ) ); ?></dt><dd>1,180 m</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_grade' ) ); ?></dt><dd>1 Easy</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_from' ) ); ?></dt><dd>€690</dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-card","layout":{"type":"default"}} -->
<div class="wp-block-group rc-card"><!-- wp:group {"className":"rc-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group rc-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-card__img"} -->
<figure class="wp-block-image size-full rc-card__img"><img src="<?php echo rinrin_cycletours_img( 'tour-lighthouse.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_lighthouse' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="rc-card__num" aria-hidden="true">02</p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"rc-card__name"} -->
<h3 class="wp-block-heading rc-card__name"><?php echo esc_html( rinrin_cycletours_t( 'tour_lighthouse_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-card__txt"} -->
<p class="rc-card__txt"><?php echo esc_html( rinrin_cycletours_t( 'tour_lighthouse_txt' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-spec"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_days' ) ); ?></dt><dd>4</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_dist' ) ); ?></dt><dd>205 km</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_climb' ) ); ?></dt><dd>2,040 m</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_grade' ) ); ?></dt><dd>2 Steady</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_from' ) ); ?></dt><dd>€920</dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-card","layout":{"type":"default"}} -->
<div class="wp-block-group rc-card"><!-- wp:group {"className":"rc-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group rc-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-card__img"} -->
<figure class="wp-block-image size-full rc-card__img"><img src="<?php echo rinrin_cycletours_img( 'tour-marsh.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_marsh' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="rc-card__num" aria-hidden="true">03</p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"rc-card__name"} -->
<h3 class="wp-block-heading rc-card__name"><?php echo esc_html( rinrin_cycletours_t( 'tour_marsh_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-card__txt"} -->
<p class="rc-card__txt"><?php echo esc_html( rinrin_cycletours_t( 'tour_marsh_txt' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-spec"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_days' ) ); ?></dt><dd>5</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_dist' ) ); ?></dt><dd>248 km</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_climb' ) ); ?></dt><dd>1,620 m</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_grade' ) ); ?></dt><dd>2 Steady</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_from' ) ); ?></dt><dd>€1,140</dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-card","layout":{"type":"default"}} -->
<div class="wp-block-group rc-card"><!-- wp:group {"className":"rc-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group rc-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-card__img"} -->
<figure class="wp-block-image size-full rc-card__img"><img src="<?php echo rinrin_cycletours_img( 'tour-cliff.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_cliff' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="rc-card__num" aria-hidden="true">04</p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"rc-card__name"} -->
<h3 class="wp-block-heading rc-card__name"><?php echo esc_html( rinrin_cycletours_t( 'tour_cliff_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-card__txt"} -->
<p class="rc-card__txt"><?php echo esc_html( rinrin_cycletours_t( 'tour_cliff_txt' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-spec"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_days' ) ); ?></dt><dd>5</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_dist' ) ); ?></dt><dd>312 km</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_climb' ) ); ?></dt><dd>4,350 m</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_grade' ) ); ?></dt><dd>3 Hilly</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_from' ) ); ?></dt><dd>€1,260</dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-card","layout":{"type":"default"}} -->
<div class="wp-block-group rc-card"><!-- wp:group {"className":"rc-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group rc-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-card__img"} -->
<figure class="wp-block-image size-full rc-card__img"><img src="<?php echo rinrin_cycletours_img( 'tour-longcoast.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_longcoast' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="rc-card__num" aria-hidden="true">05</p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"rc-card__name"} -->
<h3 class="wp-block-heading rc-card__name"><?php echo esc_html( rinrin_cycletours_t( 'tour_long_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-card__txt"} -->
<p class="rc-card__txt"><?php echo esc_html( rinrin_cycletours_t( 'tour_long_txt' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-spec"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_days' ) ); ?></dt><dd>7</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_dist' ) ); ?></dt><dd>486 km</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_climb' ) ); ?></dt><dd>6,900 m</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_grade' ) ); ?></dt><dd>4 Strong</dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'spec_from' ) ); ?></dt><dd>€1,780</dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
