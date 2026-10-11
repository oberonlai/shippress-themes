<?php
/**
 * Title: Home: broadcast log (vertical episode timeline with waveforms)
 * Slug: oto-radio/home-log
 * Categories: oto-radio
 * Keywords: timeline, episodes, latest, log, waveform, podcast
 * Viewport Width: 1280
 * Description: The six latest episodes as stops on a vertical timeline: the date on the left, an amber node on the line, then the episode number, running time, a waveform, the title and the notes. New posts appear at the top by themselves.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"broadcast-log","align":"full","className":"oto-section oto-log","layout":{"type":"constrained"}} -->
<section id="broadcast-log" class="wp-block-group alignfull oto-section oto-log"><!-- wp:group {"align":"wide","className":"oto-log__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide oto-log__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Broadcast log</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"oto-log__title"} -->
<h2 class="wp-block-heading oto-log__title">The latest episodes, newest at the top.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"oto-log__intro"} -->
<p class="oto-log__intro">Each stop is one Friday. Open a title for the show notes, the running order and the record we played after the show.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"oto-timeline"} -->
<div class="wp-block-query alignwide oto-timeline"><!-- wp:post-template -->
<!-- wp:group {"className":"oto-stop","layout":{"type":"default"}} -->
<div class="wp-block-group oto-stop"><!-- wp:group {"className":"oto-stop__when","layout":{"type":"default"}} -->
<div class="wp-block-group oto-stop__when"><!-- wp:post-date {"format":"D","className":"oto-stop__day"} /-->

<!-- wp:post-date {"format":"j M","className":"oto-stop__date"} /-->

<!-- wp:post-date {"format":"Y","className":"oto-stop__year"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"oto-stop__body","layout":{"type":"default"}} -->
<div class="wp-block-group oto-stop__body"><!-- wp:group {"className":"oto-stop__meta","layout":{"type":"default"}} -->
<div class="wp-block-group oto-stop__meta"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"oto-radio/episode","args":{"key":"number"}}}},"className":"oto-no"} -->
<p class="oto-no"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"oto-radio/episode","args":{"key":"duration"}}}},"className":"oto-time"} -->
<p class="oto-time"></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","className":"oto-stop__terms"} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wave"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wave"/>
<!-- /wp:separator -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"oto-stop__title"} /-->

<!-- wp:post-excerpt {"excerptLength":26,"className":"oto-stop__excerpt"} /-->

<!-- wp:read-more {"content":"Show notes and running order","className":"oto-stop__more"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","className":"oto-stop__sleeve"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"oto-empty"} -->
<p class="oto-empty">The first episode goes here. Write a post and it appears on the log.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"oto-log__more alignwide"} -->
<div class="wp-block-buttons oto-log__more alignwide"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/episodes/">Every episode, numbered</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
