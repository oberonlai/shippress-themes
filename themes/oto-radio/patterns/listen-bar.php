<?php
/**
 * Title: Listen bar (episode number, running time, Listen link)
 * Slug: oto-radio/listen-bar
 * Categories: oto-radio
 * Keywords: listen, play, episode, duration, audio, feed
 * Viewport Width: 1280
 * Description: Put it at the top of an episode: a Listen link to the episode in your feed, the episode number and the running time. Lists of episodes (the home page timeline, the Episodes page) read the number and the running time from here.
 */
?>
<!-- wp:group {"className":"oto-listen","layout":{"type":"default"}} -->
<div class="wp-block-group oto-listen"><!-- wp:paragraph {"className":"oto-listen__play"} -->
<p class="oto-listen__play"><a href="https://feeds.example.com/oto-radio/49">Listen</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"oto-listen__info","layout":{"type":"default"}} -->
<div class="wp-block-group oto-listen__info"><!-- wp:paragraph {"className":"oto-listen__no"} -->
<p class="oto-listen__no">Episode 49</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"oto-listen__time"} -->
<p class="oto-listen__time">50 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wave"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wave"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"oto-listen__note"} -->
<p class="oto-listen__note">Plays in your podcast app. Change the link to this episode in your own feed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
