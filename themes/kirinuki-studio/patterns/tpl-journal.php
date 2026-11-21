<?php
/**
 * Title: Template: journal
 * Slug: kirinuki-studio/tpl-journal
 * Categories: kirinuki-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts page: mist head with triptych, category chips, a three-column list of case-note posts and two rows about the journal.
 */
?>
<!-- wp:group {"tagName":"main","className":"kr-main","layout":{"type":"default"}} -->
<main class="wp-block-group kr-main"><!-- wp:group {"tagName":"section","align":"full","className":"kr-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-ihead"><!-- wp:html -->
<div class="kr-grain" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kr-ihead__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__inner"><!-- wp:group {"className":"kr-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__text"><!-- wp:paragraph {"className":"kr-eyebrow kr-dots"} -->
<p class="kr-eyebrow kr-dots"><?php echo esc_html( kirinuki_studio_t( 'i_crumb_journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kr-ihead__h"} -->
<h1 class="wp-block-heading kr-ihead__h"><?php echo esc_html( kirinuki_studio_t( 'i_journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-ihead__lede"} -->
<p class="kr-ihead__lede"><?php echo esc_html( kirinuki_studio_t( 'i_journal_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-triptych kr-triptych--s","layout":{"type":"default"}} -->
<div class="wp-block-group kr-triptych kr-triptych--s"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'w2.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w2' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'd1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_d1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 's1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground"><!-- wp:group {"className":"kr-sheet kr-sheet--ruled","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--ruled"><!-- wp:group {"className":"kr-sheet__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_jr_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_jr_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroups kr-cgroups--one","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroups kr-cgroups--one"><!-- wp:group {"className":"kr-cgroup kr-cgroup--plum","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--plum"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'i_jr_g' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/category/studio-notes/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_jr_c1' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/tag/packshot/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_jr_c2' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/tag/skincare/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_jr_c3' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground kr-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground kr-sec--tight"><!-- wp:group {"className":"kr-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-wrap"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"kr-jr"} -->
<div class="wp-block-query kr-jr"><!-- wp:post-template {"className":"kr-jr__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"kr-jr__img kr-chamfer"} /-->
<!-- wp:post-date {"format":"M Y","className":"kr-jr__d"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"kr-jr__t"} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground kr-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground kr-sec--tight"><!-- wp:group {"className":"kr-sheet kr-sheet--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--plain"><!-- wp:group {"className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_journal_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_journal_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_journal_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_journal_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
