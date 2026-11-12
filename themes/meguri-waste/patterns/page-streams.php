<?php
/**
 * Title: Page: Streams
 * Slug: meguri-waste/page-streams
 * Categories: meguri-waste
 * Description: Inner page: lead, a mini pannable strip with five day tags and one ruled section per stream with what goes in and what stays out.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"mw-lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mw-lead"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":1,"className":"mw-h1"} -->
<h1 class="wp-block-heading mw-h1"><?php echo esc_html( meguri_waste_t( 'sx_t' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:separator {"className":"mw-hairline is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide mw-hairline"/>
<!-- /wp:separator --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'sx_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-mini","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-mini"><!-- wp:html -->
<div class="mw-mini__strip" tabindex="0" role="region" aria-label="<?php echo esc_attr( meguri_waste_t( 'sx_strip' ) ); ?>"><figure class="mw-mini__fig"><img src="<?php echo meguri_waste_img( 'p12' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p12' ) ); ?>" width="1408" height="587" decoding="async"/></figure></div>
<!-- /wp:html --><!-- wp:html -->
<ol class="mw-minitags mw-wrap"><li class="mw-tag mw-tag--static"><b><?php echo esc_html( meguri_waste_t( 'tag_mon' ) ); ?></b><span><?php echo esc_html( meguri_waste_t( 'tag_mon_s' ) ); ?></span></li><li class="mw-tag mw-tag--static"><b><?php echo esc_html( meguri_waste_t( 'tag_tue' ) ); ?></b><span><?php echo esc_html( meguri_waste_t( 'tag_tue_s' ) ); ?></span></li><li class="mw-tag mw-tag--static"><b><?php echo esc_html( meguri_waste_t( 'tag_wed' ) ); ?></b><span><?php echo esc_html( meguri_waste_t( 'tag_wed_s' ) ); ?></span></li><li class="mw-tag mw-tag--static"><b><?php echo esc_html( meguri_waste_t( 'tag_thu' ) ); ?></b><span><?php echo esc_html( meguri_waste_t( 'tag_thu_s' ) ); ?></span></li><li class="mw-tag mw-tag--static"><b><?php echo esc_html( meguri_waste_t( 'tag_fri' ) ); ?></b><span><?php echo esc_html( meguri_waste_t( 'tag_fri_s' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'sx_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"mw-stream sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-stream sp-reveal sp-reveal--down"><!-- wp:group {"className":"mw-stream__head","layout":{"type":"default"}} -->
<div class="wp-block-group mw-stream__head"><!-- wp:html -->
<span class="mw-row__ico"><?php echo meguri_waste_icon( 'general' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:group {"className":"mw-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group mw-row__body"><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'sx1_h' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-chip"} -->
<p class="mw-chip"><?php echo esc_html( meguri_waste_t( 'st1_c' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mw-chip"} -->
<p class="mw-chip"><?php echo esc_html( meguri_waste_t( 'sx1_cont' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'sx1_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"mw-inout","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout"><!-- wp:group {"className":"mw-inout__col","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout__col"><!-- wp:paragraph {"className":"mw-inout__h"} -->
<p class="mw-inout__h"><?php echo esc_html( meguri_waste_t( 'sx_in' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-ticks"} -->
<ul class="wp-block-list mw-ticks"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx1_i1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx1_i2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx1_i3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-inout__col mw-inout__col--out","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout__col mw-inout__col--out"><!-- wp:paragraph {"className":"mw-inout__h"} -->
<p class="mw-inout__h"><?php echo esc_html( meguri_waste_t( 'sx_out' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-ticks mw-ticks--out"} -->
<ul class="wp-block-list mw-ticks mw-ticks--out"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx1_o1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx1_o2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx1_o3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx1_o4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-stream sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-stream sp-reveal sp-reveal--down"><!-- wp:group {"className":"mw-stream__head","layout":{"type":"default"}} -->
<div class="wp-block-group mw-stream__head"><!-- wp:html -->
<span class="mw-row__ico"><?php echo meguri_waste_icon( 'recycling' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:group {"className":"mw-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group mw-row__body"><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'sx2_h' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-chip"} -->
<p class="mw-chip"><?php echo esc_html( meguri_waste_t( 'st2_c' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mw-chip"} -->
<p class="mw-chip"><?php echo esc_html( meguri_waste_t( 'sx2_cont' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'sx2_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"mw-inout","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout"><!-- wp:group {"className":"mw-inout__col","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout__col"><!-- wp:paragraph {"className":"mw-inout__h"} -->
<p class="mw-inout__h"><?php echo esc_html( meguri_waste_t( 'sx_in' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-ticks"} -->
<ul class="wp-block-list mw-ticks"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx2_i1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx2_i2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx2_i3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx2_i4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-inout__col mw-inout__col--out","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout__col mw-inout__col--out"><!-- wp:paragraph {"className":"mw-inout__h"} -->
<p class="mw-inout__h"><?php echo esc_html( meguri_waste_t( 'sx_out' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-ticks mw-ticks--out"} -->
<ul class="wp-block-list mw-ticks mw-ticks--out"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx2_o1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx2_o2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx2_o3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx2_o4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-stream sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-stream sp-reveal sp-reveal--down"><!-- wp:group {"className":"mw-stream__head","layout":{"type":"default"}} -->
<div class="wp-block-group mw-stream__head"><!-- wp:html -->
<span class="mw-row__ico"><?php echo meguri_waste_icon( 'glass' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:group {"className":"mw-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group mw-row__body"><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'sx3_h' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-chip"} -->
<p class="mw-chip"><?php echo esc_html( meguri_waste_t( 'st3_c' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mw-chip"} -->
<p class="mw-chip"><?php echo esc_html( meguri_waste_t( 'sx3_cont' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'sx3_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"mw-inout","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout"><!-- wp:group {"className":"mw-inout__col","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout__col"><!-- wp:paragraph {"className":"mw-inout__h"} -->
<p class="mw-inout__h"><?php echo esc_html( meguri_waste_t( 'sx_in' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-ticks"} -->
<ul class="wp-block-list mw-ticks"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx3_i1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx3_i2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx3_i3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-inout__col mw-inout__col--out","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout__col mw-inout__col--out"><!-- wp:paragraph {"className":"mw-inout__h"} -->
<p class="mw-inout__h"><?php echo esc_html( meguri_waste_t( 'sx_out' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-ticks mw-ticks--out"} -->
<ul class="wp-block-list mw-ticks mw-ticks--out"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx3_o1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx3_o2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx3_o3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx3_o4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-stream sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-stream sp-reveal sp-reveal--down"><!-- wp:group {"className":"mw-stream__head","layout":{"type":"default"}} -->
<div class="wp-block-group mw-stream__head"><!-- wp:html -->
<span class="mw-row__ico"><?php echo meguri_waste_icon( 'food' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:group {"className":"mw-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group mw-row__body"><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'sx4_h' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-chip"} -->
<p class="mw-chip"><?php echo esc_html( meguri_waste_t( 'st4_c' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mw-chip"} -->
<p class="mw-chip"><?php echo esc_html( meguri_waste_t( 'sx4_cont' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'sx4_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"mw-inout","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout"><!-- wp:group {"className":"mw-inout__col","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout__col"><!-- wp:paragraph {"className":"mw-inout__h"} -->
<p class="mw-inout__h"><?php echo esc_html( meguri_waste_t( 'sx_in' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-ticks"} -->
<ul class="wp-block-list mw-ticks"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx4_i1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx4_i2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx4_i3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx4_i4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-inout__col mw-inout__col--out","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout__col mw-inout__col--out"><!-- wp:paragraph {"className":"mw-inout__h"} -->
<p class="mw-inout__h"><?php echo esc_html( meguri_waste_t( 'sx_out' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-ticks mw-ticks--out"} -->
<ul class="wp-block-list mw-ticks mw-ticks--out"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx4_o1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx4_o2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx4_o3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx4_o4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-stream sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-stream sp-reveal sp-reveal--down"><!-- wp:group {"className":"mw-stream__head","layout":{"type":"default"}} -->
<div class="wp-block-group mw-stream__head"><!-- wp:html -->
<span class="mw-row__ico"><?php echo meguri_waste_icon( 'confidential' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:group {"className":"mw-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group mw-row__body"><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'sx5_h' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-chip"} -->
<p class="mw-chip"><?php echo esc_html( meguri_waste_t( 'st5_c' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mw-chip"} -->
<p class="mw-chip"><?php echo esc_html( meguri_waste_t( 'sx5_cont' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'sx5_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"mw-inout","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout"><!-- wp:group {"className":"mw-inout__col","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout__col"><!-- wp:paragraph {"className":"mw-inout__h"} -->
<p class="mw-inout__h"><?php echo esc_html( meguri_waste_t( 'sx_in' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-ticks"} -->
<ul class="wp-block-list mw-ticks"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx5_i1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx5_i2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx5_i3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx5_i4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-inout__col mw-inout__col--out","layout":{"type":"default"}} -->
<div class="wp-block-group mw-inout__col mw-inout__col--out"><!-- wp:paragraph {"className":"mw-inout__h"} -->
<p class="mw-inout__h"><?php echo esc_html( meguri_waste_t( 'sx_out' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-ticks mw-ticks--out"} -->
<ul class="wp-block-list mw-ticks mw-ticks--out"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx5_o1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx5_o2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx5_o3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sx5_o4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec mw-sec--paper","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec mw-sec--paper"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'sx_hq' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'sx_pq' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mw-btn"} -->
<div class="wp-block-button mw-btn"><a class="wp-block-button__link wp-element-button" href="/set-your-schedule/"><?php echo esc_html( meguri_waste_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
