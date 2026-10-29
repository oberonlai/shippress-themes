<?php
/**
 * Title: Home: hours and location card
 * Slug: shisei-clinic/front-visit
 * Categories: shisei-clinic
 * Keywords: hours, address, phone, visit
 * Viewport Width: 1440
 * Description: A rounded card: reception photo with the address on the left, a slate panel with the hours grid and phone on the right.
 */
?>
<!-- wp:group {"className":"ss-sec ss-visit","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec ss-visit" id="hours"><!-- wp:group {"className":"ss-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ss-wrap"><!-- wp:group {"className":"ss-card sp-reveal sp-reveal--mask","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--mask"><!-- wp:group {"className":"ss-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13.webp' ) ); ?>" alt="Quiet clinic reception area featuring a wooden bench, indoor plants, and bright window."/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ss-card__addr","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card__addr"><!-- wp:paragraph -->
<p>Suite 204, 1180 Linden Row<br>Vancouver, BC V6E 2S2, Canada<br>Five minutes on foot from the Linden Row SkyTrain stop.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card__panel"><!-- wp:paragraph {"className":"ss-card__label"} -->
<p class="ss-card__label">HOURS &amp; LOCATION</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<table class="ss-hours"><thead><tr><th><span class="screen-reader-text">Time</span></th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr></thead><tbody><tr><th>Morning</th><td>●</td><td>●</td><td>●</td><td>●</td><td>●</td><td>●</td><td>–</td></tr><tr><th>Afternoon</th><td>●</td><td>●</td><td>●</td><td>●</td><td>●</td><td>–</td><td>–</td></tr></tbody></table>
<ul class="ss-hours-lines"><li>Mon–Fri <span>8:00–13:00 · 14:00–19:30</span></li><li>Sat <span>9:00–13:00</span></li><li>Sun &amp; holidays <span>closed</span></li></ul>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ss-card__note"} -->
<p class="ss-card__note">Mon–Fri 8:00–13:00 and 14:00–19:30. Saturday 9:00–13:00. Closed Sundays and statutory holidays. Last booking 30 minutes before closing.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__tel"} -->
<p class="ss-card__tel"><a href="tel:+16045550142">+1 604 555 0142</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__note"} -->
<p class="ss-card__note">hello@shisei.example</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
