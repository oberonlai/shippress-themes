<?php
/**
 * Title: Home: weekly and monthly rates
 * Slug: nagare-workation/front-rates
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Label-cell price board on mist ground: Week and Month rows with a very light 96 px numeral and a unit on its baseline, an Included row of two white cells joined by a bold plus, and an outline pill.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-rates","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-rates"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-open sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'rates_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"nw-labelpair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-labelpair"><!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label"><?php echo esc_html( nagare_workation_t( 'rates_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-sublabel"} -->
<p class="nw-sublabel"><?php echo esc_html( nagare_workation_t( 'rates_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-lede"} -->
<p class="nw-lede"><?php echo esc_html( nagare_workation_t( 'rates_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-board","layout":{"type":"default"}} -->
<div class="wp-block-group nw-board"><!-- wp:group {"className":"nw-row nw-row--price","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--price"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rates_week' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value nw-value--bare","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value nw-value--bare"><!-- wp:paragraph {"className":"nw-price"} -->
<p class="nw-price"><span class="nw-from"><?php echo esc_html( nagare_workation_t( 'rates_from' ) ); ?></span><span class="nw-num nw-num--week"><?php echo esc_html( nagare_workation_t( 'rates_week_n' ) ); ?></span><span class="nw-unit"><?php echo esc_html( nagare_workation_t( 'rates_week_u' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-row nw-row--price","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--price"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rates_month' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value nw-value--bare","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value nw-value--bare"><!-- wp:paragraph {"className":"nw-price"} -->
<p class="nw-price"><span class="nw-from"><?php echo esc_html( nagare_workation_t( 'rates_from' ) ); ?></span><span class="nw-num nw-num--month"><?php echo esc_html( nagare_workation_t( 'rates_month_n' ) ); ?></span><span class="nw-unit"><?php echo esc_html( nagare_workation_t( 'rates_month_u' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-row nw-row--incl","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--incl"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rates_inc_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-stack","layout":{"type":"default"}} -->
<div class="wp-block-group nw-stack"><!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rates_inc1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'rates_inc1_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-plus"} -->
<p class="nw-plus"><?php echo esc_html( nagare_workation_t( 'rates_plus' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rates_inc2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'rates_inc2_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-board__foot","layout":{"type":"default"}} -->
<div class="wp-block-group nw-board__foot"><!-- wp:buttons {"className":"nw-btns"} -->
<div class="wp-block-buttons nw-btns"><!-- wp:button {"className":"nw-pill nw-pill--line"} -->
<div class="wp-block-button nw-pill nw-pill--line"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/rates/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'rates_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
