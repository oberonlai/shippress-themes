<?php
/**
 * Title: Home: session strip
 * Slug: minori-seminars/front-sessions
 * Categories: minori-seminars
 * Keywords: seminar, management, landing
 * Viewport Width: 1440
 * Description: Pale band with three seminar banner cards in a horizontal snap strip and black arrow squares.
 */
?>
<!-- wp:group {"align":"full","className":"ms-sessions","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ms-sessions"><!-- wp:heading {"level":2,"className":"screen-reader-text"} -->
<h2 class="wp-block-heading screen-reader-text"><?php echo wp_kses_post( minori_seminars_t( 'kae83c647' ) ); ?></h2>
<!-- /wp:heading -->

<?php echo minori_seminars_arrows( '#ms-sessions-track', 'ms-arrows--strip' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"ms-strip","anchor":"ms-sessions-track","layout":{"type":"default"}} -->
<div id="ms-sessions-track" class="wp-block-group ms-strip">
<!-- wp:group {"className":"ms-scard","layout":{"type":"default"}} -->
<div class="wp-block-group ms-scard"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1164,"height":832,"className":"ms-scard__img"} -->
<figure class="wp-block-image size-full ms-scard__img"><img src="<?php echo minori_seminars_img( 'session-first-time.webp' ); ?>" alt="<?php echo esc_attr( minori_seminars_t( 'a7736d8e0' ) ); ?>" width="1164" height="832"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ms-scard__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-scard__body"><!-- wp:paragraph {"className":"ms-scard__date"} -->
<p class="ms-scard__date"><?php echo wp_kses_post( minori_seminars_t( 'k499a3839' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ms-scard__title"} -->
<h3 class="wp-block-heading ms-scard__title"><?php echo wp_kses_post( minori_seminars_t( 'kceb827b1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-scard__text"} -->
<p class="ms-scard__text"><?php echo wp_kses_post( minori_seminars_t( 'k36083394' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-scard__link"} -->
<p class="ms-scard__link"><a href="/enrol/"><?php echo wp_kses_post( minori_seminars_t( 'kf3f44e65' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-scard","layout":{"type":"default"}} -->
<div class="wp-block-group ms-scard"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1164,"height":832,"className":"ms-scard__img"} -->
<figure class="wp-block-image size-full ms-scard__img"><img src="<?php echo minori_seminars_img( 'session-change.webp' ); ?>" alt="<?php echo esc_attr( minori_seminars_t( 'aa40e974c' ) ); ?>" width="1164" height="832"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ms-scard__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-scard__body"><!-- wp:paragraph {"className":"ms-scard__date"} -->
<p class="ms-scard__date"><?php echo wp_kses_post( minori_seminars_t( 'k29bcce48' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ms-scard__title"} -->
<h3 class="wp-block-heading ms-scard__title"><?php echo wp_kses_post( minori_seminars_t( 'k0d1da9ff' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-scard__text"} -->
<p class="ms-scard__text"><?php echo wp_kses_post( minori_seminars_t( 'k23d13b8f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-scard__link"} -->
<p class="ms-scard__link"><a href="/enrol/"><?php echo wp_kses_post( minori_seminars_t( 'kf3f44e65' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-scard","layout":{"type":"default"}} -->
<div class="wp-block-group ms-scard"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1164,"height":832,"className":"ms-scard__img"} -->
<figure class="wp-block-image size-full ms-scard__img"><img src="<?php echo minori_seminars_img( 'session-owner.webp' ); ?>" alt="<?php echo esc_attr( minori_seminars_t( 'a42bc5208' ) ); ?>" width="1164" height="832"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ms-scard__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-scard__body"><!-- wp:paragraph {"className":"ms-scard__date"} -->
<p class="ms-scard__date"><?php echo wp_kses_post( minori_seminars_t( 'k9bd8e8e1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ms-scard__title"} -->
<h3 class="wp-block-heading ms-scard__title"><?php echo wp_kses_post( minori_seminars_t( 'k25c87d68' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-scard__text"} -->
<p class="ms-scard__text"><?php echo wp_kses_post( minori_seminars_t( 'k297252bf' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-scard__link"} -->
<p class="ms-scard__link"><a href="/enrol/"><?php echo wp_kses_post( minori_seminars_t( 'kf3f44e65' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
