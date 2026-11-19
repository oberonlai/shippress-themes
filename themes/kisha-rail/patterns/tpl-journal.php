<?php
/**
 * Title: Template: journal page
 * Slug: kisha-rail/tpl-journal
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: The posts page: framed window with category cells, the posts as cards and three short notes on what the journal holds.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-iwin","layout":{"type":"default"}} -->
<section class="wp-block-group kr-iwin">
<!-- wp:group {"className":"kr-win kr-win--in sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win kr-win--in sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-win__img"} -->
<figure class="wp-block-image size-full kr-win__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-saltmarsh.webp' ) ); ?>" alt="<?php echo esc_attr( kisha_rail_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kr-win__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win__scrim">
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-win__fg","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win__fg">
<!-- wp:heading {"level":1,"className":"kr-h1"} -->
<h1 class="wp-block-heading kr-h1"><?php echo esc_html( kisha_rail_t( 'tpl_notes_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kr-sub"} -->
<p class="kr-sub"><?php echo esc_html( kisha_rail_t( 'tpl_notes_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-itabs","layout":{"type":"default"}} -->
<div class="wp-block-group kr-itabs">
<!-- wp:paragraph {"className":"kr-itab kr-itab--1"} -->
<p class="kr-itab kr-itab--1"><a href="/category/on-the-line/"><?php echo esc_html( kisha_rail_t( 'tab_cat1' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-itab kr-itab--2"} -->
<p class="kr-itab kr-itab--2"><a href="/category/travelling-well/"><?php echo esc_html( kisha_rail_t( 'tab_cat2' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-itab kr-itab--3"} -->
<p class="kr-itab kr-itab--3"><a href="/category/tour-managers/"><?php echo esc_html( kisha_rail_t( 'tab_cat3' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"kr-sec kr-notes","layout":{"type":"default"}} -->
<section class="wp-block-group kr-sec kr-notes">
<!-- wp:query {"queryId":9,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kr-posts"} -->
<div class="wp-block-query kr-posts"><!-- wp:post-template {"className":"kr-posts__grid"} -->
<!-- wp:group {"className":"kr-post","layout":{"type":"default"}} -->
<div class="wp-block-group kr-post">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kr-post__img"} /-->

<!-- wp:post-date {"className":"kr-post__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kr-post__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kr-post__title"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"kr-isec kr-jabout","layout":{"type":"default"}} -->
<section class="wp-block-group kr-isec kr-jabout">
<!-- wp:group {"className":"kr-icol","layout":{"type":"default"}} -->
<div class="wp-block-group kr-icol">
<!-- wp:paragraph {"className":"kr-lead"} -->
<p class="kr-lead"><?php echo esc_html( kisha_rail_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kr-jgrid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kr-jgrid sp-stagger">
<!-- wp:group {"className":"kr-jcol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-jcol sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"kr-h3i"} -->
<h3 class="wp-block-heading kr-h3i"><?php echo esc_html( kisha_rail_t( 'journal_s1_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'journal_s1_b1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'journal_s1_b2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-jcol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-jcol sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"kr-h3i"} -->
<h3 class="wp-block-heading kr-h3i"><?php echo esc_html( kisha_rail_t( 'journal_s2_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'journal_s2_b1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'journal_s2_b2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-jcol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-jcol sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"kr-h3i"} -->
<h3 class="wp-block-heading kr-h3i"><?php echo esc_html( kisha_rail_t( 'journal_s3_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'journal_s3_b1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 'journal_s3_b2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
