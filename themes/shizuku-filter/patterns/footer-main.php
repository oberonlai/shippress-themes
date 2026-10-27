<?php
/**
 * Title: Footer: wordmark, links, address
 * Slug: shizuku-filter/footer-main
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: White footer with the 1px ink rule, small wordmark, page links and the workshop address.
 * Inserter: no
 */
?>
<!-- wp:group {"className":"sf-foot","layout":{"type":"default"}} -->
<div class="wp-block-group sf-foot">
<!-- wp:paragraph {"className":"sf-foot__wm"} -->
<p class="sf-foot__wm"><a href="/"><?php shizuku_filter_e( 'brand' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sf-foot__links"} -->
<ul class="wp-block-list sf-foot__links"><!-- wp:list-item -->
<li><a href="/rewards/"><?php shizuku_filter_e( 'foot_rewards' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/the-filter/"><?php shizuku_filter_e( 'foot_filter' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/making-schedule/"><?php shizuku_filter_e( 'foot_schedule' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/our-story/"><?php shizuku_filter_e( 'foot_story' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/faq/"><?php shizuku_filter_e( 'foot_faq' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/updates/"><?php shizuku_filter_e( 'foot_updates' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/waitlist/"><?php shizuku_filter_e( 'foot_waitlist' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/contact/"><?php shizuku_filter_e( 'foot_contact' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/privacy/"><?php shizuku_filter_e( 'foot_privacy' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/terms/"><?php shizuku_filter_e( 'foot_terms' ); ?></a></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sf-foot__addr"} -->
<p class="sf-foot__addr"><?php shizuku_filter_e( 'foot_address' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-foot__note"} -->
<p class="sf-foot__note"><?php shizuku_filter_e( 'foot_note' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
