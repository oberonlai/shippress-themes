<?php
/**
 * Title: Home: hairline service index
 * Slug: hayate-cycles/front-index
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: The page spine: Service title and six hairline rows, each with a small number, a 60 px name, a short text, a price line, a pill and a 3:2 photograph on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-section hc-section--index","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-section hc-section--index">
<!-- wp:group {"className":"hc-index__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-index__head">
<!-- wp:heading {"className":"hc-title"} -->
<h2 class="wp-block-heading hc-title"><?php echo esc_html( hayate_cycles_t( 'idx_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sub"} -->
<p class="hc-sub"><?php echo esc_html( hayate_cycles_t( 'idx_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hc-index sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-index sp-stagger">
<!-- wp:group {"align":"full","className":"hc-index__row sp-reveal sp-reveal--up","layout":{"type":"default"},"anchor":"new-bikes"} -->
<div id="new-bikes" class="wp-block-group alignfull hc-index__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hc-index__num"} -->
<p class="hc-index__num">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-index__name"} -->
<h3 class="wp-block-heading hc-index__name"><?php echo esc_html( hayate_cycles_t( 'idx_1_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-index__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-index__text">
<!-- wp:paragraph -->
<p><?php echo esc_html( hayate_cycles_t( 'idx_1_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-index__price"} -->
<p class="hc-index__price"><?php echo esc_html( hayate_cycles_t( 'idx_1_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hc-pillwrap"} -->
<div class="wp-block-buttons hc-pillwrap"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-index__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hc-index__photo sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s1-city-bikes.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_s1' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hc-index__row sp-reveal sp-reveal--up","layout":{"type":"default"},"anchor":"fitting"} -->
<div id="fitting" class="wp-block-group alignfull hc-index__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hc-index__num"} -->
<p class="hc-index__num">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-index__name"} -->
<h3 class="wp-block-heading hc-index__name"><?php echo esc_html( hayate_cycles_t( 'idx_2_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-index__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-index__text">
<!-- wp:paragraph -->
<p><?php echo esc_html( hayate_cycles_t( 'idx_2_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-index__price"} -->
<p class="hc-index__price"><?php echo esc_html( hayate_cycles_t( 'idx_2_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hc-pillwrap"} -->
<div class="wp-block-buttons hc-pillwrap"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/#fitting' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-index__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hc-index__photo sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s2-fitting.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_s2' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hc-index__row sp-reveal sp-reveal--up","layout":{"type":"default"},"anchor":"tune-ups"} -->
<div id="tune-ups" class="wp-block-group alignfull hc-index__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hc-index__num"} -->
<p class="hc-index__num">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-index__name"} -->
<h3 class="wp-block-heading hc-index__name"><?php echo esc_html( hayate_cycles_t( 'idx_3_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-index__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-index__text">
<!-- wp:paragraph -->
<p><?php echo esc_html( hayate_cycles_t( 'idx_3_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-index__price"} -->
<p class="hc-index__price"><?php echo esc_html( hayate_cycles_t( 'idx_3_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hc-pillwrap"} -->
<div class="wp-block-buttons hc-pillwrap"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/#tune-ups' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-index__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hc-index__photo sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s3-cassette.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_s3' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hc-index__row sp-reveal sp-reveal--up","layout":{"type":"default"},"anchor":"repairs"} -->
<div id="repairs" class="wp-block-group alignfull hc-index__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hc-index__num"} -->
<p class="hc-index__num">04</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-index__name"} -->
<h3 class="wp-block-heading hc-index__name"><?php echo esc_html( hayate_cycles_t( 'idx_4_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-index__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-index__text">
<!-- wp:paragraph -->
<p><?php echo esc_html( hayate_cycles_t( 'idx_4_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-index__price"} -->
<p class="hc-index__price"><?php echo esc_html( hayate_cycles_t( 'idx_4_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hc-pillwrap"} -->
<div class="wp-block-buttons hc-pillwrap"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/#repairs' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-index__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hc-index__photo sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s4-puncture.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_s4' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hc-index__row sp-reveal sp-reveal--up","layout":{"type":"default"},"anchor":"wheels"} -->
<div id="wheels" class="wp-block-group alignfull hc-index__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hc-index__num"} -->
<p class="hc-index__num">05</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-index__name"} -->
<h3 class="wp-block-heading hc-index__name"><?php echo esc_html( hayate_cycles_t( 'idx_5_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-index__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-index__text">
<!-- wp:paragraph -->
<p><?php echo esc_html( hayate_cycles_t( 'idx_5_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-index__price"} -->
<p class="hc-index__price"><?php echo esc_html( hayate_cycles_t( 'idx_5_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hc-pillwrap"} -->
<div class="wp-block-buttons hc-pillwrap"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/#wheels' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-index__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hc-index__photo sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s5-lacing.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_s5' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hc-index__row sp-reveal sp-reveal--up","layout":{"type":"default"},"anchor":"e-bike-care"} -->
<div id="e-bike-care" class="wp-block-group alignfull hc-index__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hc-index__num"} -->
<p class="hc-index__num">06</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-index__name"} -->
<h3 class="wp-block-heading hc-index__name"><?php echo esc_html( hayate_cycles_t( 'idx_6_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-index__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-index__text">
<!-- wp:paragraph -->
<p><?php echo esc_html( hayate_cycles_t( 'idx_6_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-index__price"} -->
<p class="hc-index__price"><?php echo esc_html( hayate_cycles_t( 'idx_6_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hc-pillwrap"} -->
<div class="wp-block-buttons hc-pillwrap"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/#e-bike-care' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-index__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hc-index__photo sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s6-ebike.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_s6' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
