<?php
/**
 * Title: Home: journal
 * Slug: akiha-college/front-journal
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Description: T2: three ruled topic rows, each with a 16:9 thumbnail, a serif title, the category and date, and an arrow box.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"journal","className":"ak-sec ak-rail ak-rail--journal","layout":{"type":"default"}} -->
<section id="journal" class="wp-block-group alignfull ak-sec ak-rail ak-rail--journal"><!-- wp:group {"className":"ak-rail__side","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__side"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akiha_college_t( 'lbl_journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-viewall"} -->
<p class="ak-viewall"><a class="ak-viewall__link" href="<?php echo akiha_college_url( '/journal/' ); ?>"><?php echo esc_html( akiha_college_t( 'all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-rail__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__col"><!-- wp:heading {"level":2,"className":"ak-h2"} -->
<h2 class="wp-block-heading ak-h2"><?php echo esc_html( akiha_college_t( 'journal_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ak-posts sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ak-posts sp-stagger"><!-- wp:group {"className":"ak-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-post sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-post__photo"} -->
<figure class="wp-block-image size-full ak-post__photo"><img src="<?php echo akiha_college_img( 'j2.webp' ); ?>" alt="<?php echo akiha_college_a( 'alt_post2' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ak-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group ak-post__text"><!-- wp:heading {"level":3,"className":"ak-post__title"} -->
<h3 class="wp-block-heading ak-post__title"><a href="<?php echo akiha_college_url( '/january-2027-intake-dates-and-the-open-board/' ); ?>"><?php echo esc_html( akiha_college_t( 'post2_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-post__meta"} -->
<p class="ak-post__meta"><?php echo esc_html( akiha_college_t( 'post2_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-post sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-post__photo"} -->
<figure class="wp-block-image size-full ak-post__photo"><img src="<?php echo akiha_college_img( 'j1.webp' ); ?>" alt="<?php echo akiha_college_a( 'alt_post1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ak-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group ak-post__text"><!-- wp:heading {"level":3,"className":"ak-post__title"} -->
<h3 class="wp-block-heading ak-post__title"><a href="<?php echo akiha_college_url( '/what-the-gland-tells-you/' ); ?>"><?php echo esc_html( akiha_college_t( 'post1_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-post__meta"} -->
<p class="ak-post__meta"><?php echo esc_html( akiha_college_t( 'post1_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-post sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-post__photo"} -->
<figure class="wp-block-image size-full ak-post__photo"><img src="<?php echo akiha_college_img( 'j3.webp' ); ?>" alt="<?php echo akiha_college_a( 'alt_post3' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ak-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group ak-post__text"><!-- wp:heading {"level":3,"className":"ak-post__title"} -->
<h3 class="wp-block-heading ak-post__title"><a href="<?php echo akiha_college_url( '/a-day-in-bay-two/' ); ?>"><?php echo esc_html( akiha_college_t( 'post3_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-post__meta"} -->
<p class="ak-post__meta"><?php echo esc_html( akiha_college_t( 'post3_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->