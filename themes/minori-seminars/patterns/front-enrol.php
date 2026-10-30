<?php
/**
 * Title: Home: enrol banner
 * Slug: minori-seminars/front-enrol
 * Categories: minori-seminars
 * Keywords: seminar, management, landing
 * Viewport Width: 1440
 * Description: Inset 1074x460 photo banner with parallax, a brick corner ribbon, a plum label bar, the giant call to action and a short account of enrolment.
 */
?>
<!-- wp:group {"align":"full","anchor":"enrol","className":"ms-sec ms-enrol","layout":{"type":"default"}} -->
<div id="enrol" class="wp-block-group alignfull ms-sec ms-enrol"><!-- wp:group {"className":"ms-banner sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ms-banner sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1280,"height":548,"className":"ms-banner__photo"} -->
<figure class="wp-block-image size-full ms-banner__photo"><img src="<?php echo minori_seminars_img( 'enrol-participant.webp' ); ?>" alt="<?php echo esc_attr( minori_seminars_t( 'a6a68ddd9' ) ); ?>" width="1280" height="548"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ms-ribbon"} -->
<p class="ms-ribbon"><?php echo wp_kses_post( minori_seminars_t( 'k21b745ab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-banner__text","layout":{"type":"default"}} -->
<div class="wp-block-group ms-banner__text"><!-- wp:paragraph {"className":"ms-bar-label"} -->
<p class="ms-bar-label"><?php echo wp_kses_post( minori_seminars_t( 'k89765388' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ms-banner__title"} -->
<h2 class="wp-block-heading ms-banner__title"><?php echo wp_kses_post( minori_seminars_t( 'kf3f44e65' ) ); ?></h2>
<!-- /wp:heading -->

<?php echo minori_seminars_btn( 'Reserve a seat', '/enrol/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ms-enrol__text"} -->
<p class="ms-enrol__text"><?php echo wp_kses_post( minori_seminars_t( 'kbf5e3e4c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
