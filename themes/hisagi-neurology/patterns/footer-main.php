<?php
/**
 * Title: Footer: capsule edge, details and booking card
 * Slug: hisagi-neurology/footer-main
 * Categories: hisagi-neurology
 * Inserter: no
 * Viewport Width: 1440
 * Description: Footer with a half-height capsule row on its top edge, three columns and the fixed booking card.
 */
?>
<!-- wp:group {"align":"full","className":"hn-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hn-foot"><!-- wp:html -->
<div class="hn-signal hn-signal--foot" aria-hidden="true"><span style="--i:0"></span><span style="--i:1"></span><span style="--i:2"></span><span style="--i:3"></span><span style="--i:4"></span><span style="--i:5"></span><span style="--i:6"></span><span style="--i:7"></span><span style="--i:8"></span><span style="--i:9"></span><span style="--i:10"></span><span style="--i:11"></span><span style="--i:12"></span><span style="--i:13"></span><span style="--i:14"></span><span style="--i:15"></span></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hn-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group hn-foot__in"><!-- wp:group {"className":"hn-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hn-foot__col"><!-- wp:html -->
<a class="hn-brand" href="/"><span class="hn-brand__a">HISAGI</span><span class="hn-brand__b">NEUROLOGY</span></a>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hn-fline"} -->
<p class="hn-fline">2nd floor, 14 Linden Row, Westmere</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-fline"} -->
<p class="hn-fline">Phone 010 482 0116</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-fline"} -->
<p class="hn-fline"><a href="mailto:hello@hisagi-neurology.example">hello@hisagi-neurology.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hn-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hn-foot__col"><!-- wp:paragraph {"className":"hn-label hn-strip"} -->
<p class="hn-label hn-strip">Hours</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-fline"} -->
<p class="hn-fline">Mon, Tue, Thu, Fri 08:30–17:30</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hn-fline"} -->
<p class="hn-fline">Wed 11:00–19:30 (evening clinic)</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hn-fline"} -->
<p class="hn-fline">Sat 09:00–13:00 (follow-ups and tests only)</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hn-fline"} -->
<p class="hn-fline">Sun and public holidays closed</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hn-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hn-foot__col"><!-- wp:paragraph {"className":"hn-label hn-strip"} -->
<p class="hn-label hn-strip">Pages</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-flink"} -->
<p class="hn-flink"><a href="/about/">About</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-flink"} -->
<p class="hn-flink"><a href="/fees/">Fees</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-flink"} -->
<p class="hn-flink"><a href="/book/">Book</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-flink"} -->
<p class="hn-flink"><a href="/letter/">The Case Letter</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-flink"} -->
<p class="hn-flink"><a href="/journal/">Journal</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-flink"} -->
<p class="hn-flink"><a href="/privacy/">Privacy</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hn-foot__legal","layout":{"type":"default"}} -->
<div class="wp-block-group hn-foot__legal"><!-- wp:paragraph {"className":"hn-fsmall"} -->
<p class="hn-fsmall">© Hisagi Neurology, Westmere. A fictional clinic; names, places and figures are invented.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="hn-bookcard" href="/book/"><img class="hn-bookcard__img" src="<?php echo hisagi_neurology_img( 'reception.webp' ); ?>" alt="Hands resting on a closed appointment book beside a vase of white flowers" width="80" height="80" loading="lazy"/><span class="hn-bookcard__text"><span class="hn-bookcard__t">Book a consultation</span><span class="hn-bookcard__s">First visit · 60 min · €180</span></span></a>
<!-- /wp:html -->
