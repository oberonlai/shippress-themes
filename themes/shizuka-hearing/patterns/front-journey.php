<?php
/**
 * Title: Journey: sticky stacked cards
 * Slug: shizuka-hearing/front-journey
 * Categories: shizuka-hearing
 * Viewport Width: 1440
 * Description: Blue-gray band with a sticky title column and three stacked cards: the missed sentence, the fitting, the review visit.
 */
?>
<!-- wp:group {"align":"full","className":"sh-journey","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-journey">
<!-- wp:group {"className":"sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group sh-head"><!-- wp:paragraph {"className":"sh-eyebrow"} -->
<p class="sh-eyebrow">THE JOURNEY</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-sub"} -->
<p class="sh-sub">From the first conversation to the review visit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-journey__row","layout":{"type":"default"}} -->
<div class="wp-block-group sh-journey__row"><!-- wp:group {"className":"sh-journey__side","layout":{"type":"default"}} -->
<div class="wp-block-group sh-journey__side"><!-- wp:html -->
<svg class="sh-circles" viewBox="0 0 250 250" width="250" height="250" aria-hidden="true" focusable="false"><circle cx="125" cy="125" r="124" fill="none" stroke="currentColor" stroke-width="1"/><circle cx="125" cy="125" r="74" fill="none" stroke="currentColor" stroke-width="1"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sh-journey__lead"} -->
<p class="sh-journey__lead">From the sentence you missed to the one you caught.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-journey__word","ariaHidden":true} -->
<p class="sh-journey__word" aria-hidden="true">LISTEN</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-cards","layout":{"type":"default"}} -->
<div class="wp-block-group sh-cards">
<!-- wp:group {"className":"sh-card sh-card--1","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card sh-card--1"><!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title">THE MISSED SENTENCE</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-card__sub"} -->
<p class="sh-card__sub">The problem · Hearing check, 60 min</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sh-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card__body"><?php echo shizuka_hearing_img( 'h12', 'sh-card__img' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>The missed sentence is rarely the whole conversation. It is the name at the end of a question, or the aside a friend makes while a restaurant talks over them. You lean in, watch the mouth, and still lose the line. Nodding feels easier than asking again. At Shizuka Hearing the first visit starts with that, not with a device. A hearing check lasts 60 minutes: conversation, a look in the ear, and pure-tone audiometry. When background sound is the real problem, the diagnostic assessment runs 90 minutes and includes a speech-in-noise test. You take home a plain-language summary. The hearing check is €95. The diagnostic assessment is €160.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sh-pill "} -->
<div class="wp-block-button sh-pill "><a class="wp-block-button__link wp-element-button" href="/hearing-check/">Hearing Check</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


<!-- wp:group {"className":"sh-card sh-card--2","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card sh-card--2"><!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title">THE FITTING</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-card__sub"} -->
<p class="sh-card__sub">The method · Two visits and a 14-day trial</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sh-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card__body"><?php echo shizuka_hearing_img( 'h11', 'sh-card__img' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>A fitting here is two visits, not a handover at the counter. We choose a hearing aid for your hearing and for the rooms you actually use, at home, at work, and at a café, and we do not steer you toward a manufacturer. Real-ear measurement places a thin probe tube at the ear so we can see the sound that arrives, and adjust it. You then take loaner devices home for 14 days and wear them where the missed sentences happen. The second visit is for what you noticed. Fitting and real-ear verification, including that trial, is €380. The first two review visits are included.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sh-pill "} -->
<div class="wp-block-button sh-pill "><a class="wp-block-button__link wp-element-button" href="/fitting-method/">How a fitting works</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


<!-- wp:group {"className":"sh-card sh-card--3","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card sh-card--3"><!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title">THE REVIEW VISIT</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-card__sub"} -->
<p class="sh-card__sub">The proof · 2 weeks, 6 weeks, 6 months</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sh-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card__body"><?php echo shizuka_hearing_img( 'h13', 'sh-card__img' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>The review visit is where a fitting meets ordinary life. We see you at 2 weeks, at 6 weeks, and at 6 months, then once a year. Each visit is 45 minutes: how conversation is going, a check of the fit, cleaning if it is needed, and a re-tune when the settings should change. The first two of these visits are included with every fitting. Later reviews are €60. A shorter cleaning and re-tune, 30 minutes, is €35 if you need it between reviews. The schedule is a set of return dates so the aid can be adjusted as you use it.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sh-pill "} -->
<div class="wp-block-button sh-pill "><a class="wp-block-button__link wp-element-button" href="/aftercare/">Review visits</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
