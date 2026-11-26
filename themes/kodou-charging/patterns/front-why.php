<?php
/**
 * Title: Home: centred statement with two pictogram columns
 * Slug: kodou-charging/front-why
 * Categories: kodou-charging
 * Viewport Width: 1440
 * Description: A centred bold statement with one accent phrase, two 110 px line pictograms each with three dotted bullets, and one narrative paragraph.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"why","align":"full","className":"kc-sec kc-sec--why sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<section id="why" class="wp-block-group alignfull kc-sec kc-sec--why sp-reveal sp-reveal--up">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:heading {"className":"kc-statement"} -->
<h2 class="wp-block-heading kc-statement"><?php echo esc_html( kodou_charging_t( 'stmt_a' ) ); ?><mark class="has-inline-color has-primary-color" style="background-color:rgba(0,0,0,0)"><?php echo esc_html( kodou_charging_t( 'stmt_b' ) ); ?></mark><?php echo esc_html( kodou_charging_t( 'stmt_c' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"kc-cols","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cols">
<!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col">
<!-- wp:html -->
<svg class="kc-pic" width="110" height="110" viewBox="0 0 110 110" fill="none" stroke="#15201E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M10 78V66l12-6 12-20h42l14 20 10 4v14H92"/><path d="M24 78H10"/><circle cx="33" cy="80" r="8"/><circle cx="81" cy="80" r="8"/><path d="M41 78h32"/><path d="M30 58h22V43H37zM58 58h22L69 43H58z"/><path d="M94 22v10M86 22v10M82 32h16v6a8 8 0 0 1-16 0zM90 46v12"/></svg>
<!-- /wp:html -->
<!-- wp:group {"className":"kc-col__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col__b">
<!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( kodou_charging_t( 'why_drive' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:html -->
<ul class="kc-dots"><li><?php echo esc_html( kodou_charging_t( 'why_drive_1' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'why_drive_2' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'why_drive_3' ) ); ?></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col">
<!-- wp:html -->
<svg class="kc-pic" width="110" height="110" viewBox="0 0 110 110" fill="none" stroke="#15201E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="18" y="20" width="54" height="76"/><path d="M28 34h10M46 34h10M28 50h10M46 50h10M28 66h10M46 66h10M36 96V82h18v14"/><path d="M92 24 80 50h12L84 80 100 52H88z"/></svg>
<!-- /wp:html -->
<!-- wp:group {"className":"kc-col__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col__b">
<!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( kodou_charging_t( 'why_run' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:html -->
<ul class="kc-dots"><li><?php echo esc_html( kodou_charging_t( 'why_run_1' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'why_run_2' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'why_run_3' ) ); ?></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-narr"} -->
<p class="kc-narr"><?php echo esc_html( kodou_charging_t( 'why_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
