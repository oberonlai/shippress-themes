<?php
/**
 * Title: Template: Journal
 * Slug: enban-records/tpl-journal
 * Categories: enban-records
 * Inserter: no
 * Description: The posts page: head, page-local Topics bar, post cards and the two journal series.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec eb-sec--first","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec eb-sec--first"><!-- wp:group {"className":"eb-head3","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3"><!-- wp:heading {"level":1,"textAlign":"center","className":"eb-h1"} -->
<h1 class="wp-block-heading has-text-align-center eb-h1">Journal</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Behind the counter and from the desk</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","className":"eb-intro"} -->
<p class="has-text-align-center eb-intro">Dispatches from behind our oak counter and stories from the listening desk, exploring record care, sound fidelity, and listening habits.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"eb-bar eb-bar--local","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull eb-bar eb-bar--local"><!-- wp:group {"className":"eb-bar__in","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group eb-bar__in"><!-- wp:paragraph {"className":"eb-bar__label"} -->
<p class="eb-bar__label">Topics</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-bar__links"} -->
<p class="eb-bar__links"><a href="/category/behind-the-counter/">Behind the counter</a> <span class="eb-bar__sep">/</span> <a href="/category/from-the-desk/">From the desk</a> <span class="eb-bar__sep">/</span> <a href="/tag/cleaning/">Cleaning</a> <span class="eb-bar__sep">/</span> <a href="/tag/grading/">Grading</a> <span class="eb-bar__sep">/</span> <a href="/tag/first-records/">First records</a> <span class="eb-bar__sep">/</span> <a href="/tag/listening/">Listening</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"latest","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec" id="latest"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Latest from the journal</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Dispatches</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"eb-posts"} -->
<div class="wp-block-query eb-posts"><!-- wp:post-template {"className":"eb-crate eb-posts__list","layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","className":"eb-card__fig"} /-->

<!-- wp:post-terms {"term":"category","className":"eb-card__fmtname"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"eb-card__title"} /-->

<!-- wp:post-date {"format":"j F Y","className":"eb-card__meta"} /-->

<!-- wp:read-more {"content":"Read","className":"eb-status eb-status--read"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing here yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"about","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec" id="about"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">About the journal</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Two series</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrows","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrows"><!-- wp:group {"className":"eb-lrow","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow"><!-- wp:group {"className":"eb-lrow__title","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__title"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Behind the counter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-for"} -->
<p class="eb-for">Cleaning and grading</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__body"><!-- wp:paragraph -->
<p>In our Behind the counter series, we document the practical routines that keep our single room running smoothly. Our featured article, 'Why we clean every record twice', details Rafael Ortega's two-step process of preparing vinyl for the bins and crate. We explore the physics of ultrasonic cavitation, explaining how sub-microscopic bubbles lift stubborn groove contaminants that standard hand brushes miss. The article also examines our strict grading sheet, detailing why we maintain Very Good Plus (VG+) as our shop baseline and how proper care preserves both delicate phono cartridges and the life of irreplaceable pressings.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrow","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow"><!-- wp:group {"className":"eb-lrow__title","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__title"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">From the desk</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-for"} -->
<p class="eb-for">Building a shelf</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__body"><!-- wp:paragraph -->
<p>Our From the desk essays reflect the daily conversations and musical discoveries shared across our listening turntable. In 'Building a first shelf of twelve', June Park and Ines Valdane outline a thoughtful approach to assembling a record collection from scratch. Rather than chasing inflated collector rarities or overwhelming yourself with volume, we discuss the value of selecting a dozen enduring records across spiritual jazz, dub, Brazilian grooves, and library music. The piece offers practical advice on sleeve care, turntable placement, and how taking forty-five minutes to listen deeply can reshape your relationship with music.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrow","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow"><!-- wp:group {"className":"eb-lrow__title","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__title"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Topics</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-for"} -->
<p class="eb-for">Reading categories</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-lrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group eb-lrow__body"><!-- wp:paragraph -->
<p>Our journal archive is organized into two primary categories: Behind the counter, focusing on cleaning techniques, grading standards, cartridge alignment, and shop history; and From the desk, highlighting listening recommendations, customer stories, and beginner guides. Readers can also filter articles by tags such as cleaning, grading, first-records, and listening. We publish dispatches unhurriedly, sharing only practical insights and considered reflections drawn directly from our daily interactions at 7 Weir Lane. You can receive notification of new essays through our weekly Friday letter, dispatched every Friday morning at 10:00.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-end","layout":{"type":"default"}} -->
<div class="wp-block-group eb-end"><!-- wp:buttons {"className":"eb-boxrow"} -->
<div class="wp-block-buttons eb-boxrow"><!-- wp:button {"className":"is-style-eb-box eb-box--330"} -->
<div class="wp-block-button is-style-eb-box eb-box--330"><a class="wp-block-button__link wp-element-button" href="/newsletter/">Get the Friday letter</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
