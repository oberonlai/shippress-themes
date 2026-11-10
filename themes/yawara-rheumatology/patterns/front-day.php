<?php
/**
 * Title: Home: a day at the clinic
 * Slug: yawara-rheumatology/front-day
 * Categories: yawara-rheumatology
 * Viewport Width: 1440
 * Description: A haze band with a square photo and tab on the left, and five time stops in one row on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yw-sec yw-day"} -->
<section class="wp-block-group alignfull yw-sec yw-day"><!-- wp:group {"className":"yw-split"} -->
<div class="wp-block-group yw-split"><!-- wp:group {"className":"yw-split__l"} -->
<div class="wp-block-group yw-split__l"><?php echo yawara_cell( 'p10-waiting.webp', __( 'A sunlit clinic waiting room with chairs, a potted plant and a person reading.', 'yawara-rheumatology' ), yawara_tab( '08:30', __( 'FLARE SLOTS', 'yawara-rheumatology' ) ), 'yw-cell--sq' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-split__r"} -->
<div class="wp-block-group yw-split__r"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php esc_html_e( 'A day at the clinic', 'yawara-rheumatology' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yw-sub"} -->
<p class="yw-sub"><?php esc_html_e( 'THE DAILY ROUTINE', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Our daily routine leaves room for a sudden flare as well as for unhurried first visits. The mornings are kept open on purpose.', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yw-stops sp-stagger"} -->
<div class="wp-block-group yw-stops sp-stagger"><!-- wp:group {"className":"yw-stop yw-stop--flare sp-reveal sp-reveal--up"} -->
<div class="wp-block-group yw-stop yw-stop--flare sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yw-stop__time"} -->
<p class="yw-stop__time">08:30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-stop__text"} -->
<p class="yw-stop__text"><?php esc_html_e( 'Flare-day slots', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-stop sp-reveal sp-reveal--up"} -->
<div class="wp-block-group yw-stop sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yw-stop__time"} -->
<p class="yw-stop__time">09:30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-stop__text"} -->
<p class="yw-stop__text"><?php esc_html_e( 'First visits', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-stop sp-reveal sp-reveal--up"} -->
<div class="wp-block-group yw-stop sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yw-stop__time"} -->
<p class="yw-stop__time">12:30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-stop__text"} -->
<p class="yw-stop__text"><?php esc_html_e( 'Ultrasound list', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-stop sp-reveal sp-reveal--up"} -->
<div class="wp-block-group yw-stop sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yw-stop__time"} -->
<p class="yw-stop__time">14:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-stop__text"} -->
<p class="yw-stop__text"><?php esc_html_e( 'Physiotherapy studio', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-stop sp-reveal sp-reveal--up"} -->
<div class="wp-block-group yw-stop sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yw-stop__time"} -->
<p class="yw-stop__time">16:30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-stop__text"} -->
<p class="yw-stop__text"><?php esc_html_e( 'Nurse call-backs', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
