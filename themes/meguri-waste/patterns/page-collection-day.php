<?php
/**
 * Title: Page: A collection day
 * Slug: meguri-waste/page-collection-day
 * Categories: meguri-waste
 * Description: Inner page: lead band, a seven-step pictogram line in two rows with times, a parallax dock band and the missed-pickup rule.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"mw-wash mw-wash--lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mw-wash mw-wash--lead"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-wash__pic"} -->
<figure class="wp-block-image size-full mw-wash__pic"><img src="<?php echo meguri_waste_img( 'p13' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:group {"className":"mw-wash__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wash__text"><!-- wp:heading {"level":1,"className":"mw-h1"} -->
<h1 class="wp-block-heading mw-h1"><?php echo esc_html( meguri_waste_t( 'cd_t' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:separator {"className":"mw-hairline is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide mw-hairline"/>
<!-- /wp:separator --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'cd_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'cd_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"mw-line mw-line--part sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mw-line mw-line--part sp-stagger"><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'cd1_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'notice' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'cd1_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'cd2_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'depot' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'cd2_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'cd3_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'bins' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'cd3_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'cd4_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'truck' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'cd4_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-line mw-line--part mw-line--rest sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mw-line mw-line--part mw-line--rest sp-stagger"><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'cd5_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'photo' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'cd5_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'cd6_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'weigh' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'cd6_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'cd7_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'report' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'cd7_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec mw-sec--paper","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec mw-sec--paper"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:group {"className":"mw-twocol","layout":{"type":"default"}} -->
<div class="wp-block-group mw-twocol"><!-- wp:group {"className":"","layout":{"type":"default"}} -->
<div class="wp-block-group "><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'cd_h0' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'cd_p0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"","layout":{"type":"default"}} -->
<div class="wp-block-group "><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'cd_h1' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'cd_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo meguri_waste_img( 'p04' ); ?>","dimRatio":0,"minHeight":560,"minHeightUnit":"px","contentPosition":"bottom left","align":"full","className":"mw-dock sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left mw-dock sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p04' ) ); ?>" src="<?php echo meguri_waste_img( 'p04' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"mw-wrap mw-dock__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap mw-dock__wrap"><!-- wp:group {"className":"mw-dock__panel sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-dock__panel sp-reveal sp-reveal--down"><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'cd_band_h' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'cd_band_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"mw-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'cd_h2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'cd_p2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mw-box mw-box--alert mw-boxline"} -->
<p class="mw-box mw-box--alert mw-boxline"><?php echo esc_html( meguri_waste_t( 'hd_missed' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mw-btn"} -->
<div class="wp-block-button mw-btn"><a class="wp-block-button__link wp-element-button" href="/set-your-schedule/"><?php echo esc_html( meguri_waste_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
