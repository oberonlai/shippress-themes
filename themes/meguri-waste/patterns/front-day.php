<?php
/**
 * Title: Home: a collection day pictogram line
 * Slug: meguri-waste/front-day
 * Categories: meguri-waste
 * Viewport Width: 1440
 * Description: Ruled head, five flat pictograms joined by long slate arrows with teal markers and times, then a two-column paragraph.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"day","className":"mw-sec mw-day","layout":{"type":"default"}} -->
<section id="day" class="wp-block-group alignfull mw-sec mw-day"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'day_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"mw-line sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mw-line sp-stagger"><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'd1_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'notice' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'd1_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'd2_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'bins' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'd2_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'd3_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'truck' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'd3_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'd4_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'weigh' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'd4_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'd5_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'report' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'd5_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mw-day__lead mw-cols"} -->
<p class="mw-day__lead mw-cols"><?php echo esc_html( meguri_waste_t( 'day_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
