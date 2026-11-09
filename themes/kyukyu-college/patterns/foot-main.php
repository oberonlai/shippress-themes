<?php
/**
 * Title: Footer: address, pages, hours, open evening
 * Slug: kyukyu-college/foot-main
 * Categories: kyukyu-college
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: White footer inside the hairline frame: wordmark and address, page links, hours, the open-evening line with a Book a visit pill, and the copyright row.
 */
$e = 'kyukyu_college_e';
?>
<!-- wp:group {"align":"full","className":"kk-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kk-foot"><!-- wp:group {"className":"kk-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kk-foot__grid"><!-- wp:group {"className":"kk-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kk-foot__col"><!-- wp:site-title {"level":0,"isLink":false,"className":"kk-brand__title"} /-->

<!-- wp:paragraph {"className":"kk-foot__small"} -->
<p class="kk-foot__small">41 Wexford Lane<br>Northmere<br>admissions@kyukyu-college.example<br>+1 555 0142</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kk-foot__col"><!-- wp:paragraph {"className":"kk-foot__h"} -->
<p class="kk-foot__h"><?php echo $e( 'foot_pages' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="kk-foot__links"><li><a href="/about/">About the college</a></li><li><a href="/campus/">Campus &amp; visit</a></li><li><a href="/contact/">Contact</a></li><li><a href="/news/">Stories</a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kk-foot__col"><!-- wp:paragraph {"className":"kk-foot__h"} -->
<p class="kk-foot__h"><?php echo $e( 'foot_hours' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kk-foot__small"} -->
<p class="kk-foot__small">Office Mon–Fri 08:30–17:00<br>Skills lab Mon–Sat 07:30–21:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kk-foot__col"><!-- wp:paragraph {"className":"kk-foot__h"} -->
<p class="kk-foot__h"><?php echo $e( 'foot_open' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kk-foot__small"} -->
<p class="kk-foot__small">First Thursday of the month, 18:00–20:00.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-long-arrow kk-pill"} -->
<div class="wp-block-button is-style-long-arrow kk-pill"><a class="wp-block-button__link wp-element-button" href="/#visit">Book a visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kk-foot__copy"} -->
<p class="kk-foot__copy"><?php echo $e( 'copy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
