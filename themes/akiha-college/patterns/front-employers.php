<?php
/**
 * Title: Home: when an employer takes a trainee on
 * Slug: akiha-college/front-employers
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Description: T2: two 1.4:1 photographs with titles and arrow boxes, then the three conditions as underlined serif rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"employers","className":"ak-sec ak-rail ak-rail--emp","layout":{"type":"default"}} -->
<section id="employers" class="wp-block-group alignfull ak-sec ak-rail ak-rail--emp"><!-- wp:group {"className":"ak-rail__side","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__side"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akiha_college_t( 'lbl_emp' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-viewall"} -->
<p class="ak-viewall"><a class="ak-viewall__link" href="<?php echo akiha_college_url( '/employers/' ); ?>"><?php echo esc_html( akiha_college_t( 'all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-rail__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__col"><!-- wp:heading {"level":2,"className":"ak-h2"} -->
<h2 class="wp-block-heading ak-h2"><?php echo esc_html( akiha_college_t( 'emp_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ak-pos","layout":{"type":"default"}} -->
<div class="wp-block-group ak-pos"><!-- wp:group {"className":"ak-pos__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-pos__item sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-pos__photo"} -->
<figure class="wp-block-image size-full ak-pos__photo"><img src="<?php echo akiha_college_img( 'e1.webp' ); ?>" alt="<?php echo akiha_college_a( 'alt_e1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ak-pos__t"} -->
<p class="ak-pos__t"><a href="<?php echo akiha_college_url( '/employers/' ); ?>"><?php echo esc_html( akiha_college_t( 'pos1_t' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-pos__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-pos__item sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-pos__photo"} -->
<figure class="wp-block-image size-full ak-pos__photo"><img src="<?php echo akiha_college_img( 'e2.webp' ); ?>" alt="<?php echo akiha_college_a( 'alt_e2' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ak-pos__t"} -->
<p class="ak-pos__t"><a href="<?php echo akiha_college_url( '/apprenticeship/' ); ?>"><?php echo esc_html( akiha_college_t( 'pos2_t' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ak-body ak-emp__p"} -->
<p class="ak-body ak-emp__p"><?php echo esc_html( akiha_college_t( 'emp_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ak-conds","layout":{"type":"default"}} -->
<div class="wp-block-group ak-conds"><!-- wp:paragraph {"className":"ak-cond"} -->
<p class="ak-cond"><a href="<?php echo akiha_college_url( '/employers/' ); ?>"><span class="ak-mark">(01)</span> <?php echo esc_html( akiha_college_t( 'cond1_t' ) ); ?>. <?php echo esc_html( akiha_college_t( 'cond1_d' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-cond"} -->
<p class="ak-cond"><a href="<?php echo akiha_college_url( '/employers/' ); ?>"><span class="ak-mark">(02)</span> <?php echo esc_html( akiha_college_t( 'cond2_t' ) ); ?>. <?php echo esc_html( akiha_college_t( 'cond2_d' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-cond"} -->
<p class="ak-cond"><a href="<?php echo akiha_college_url( '/employers/' ); ?>"><span class="ak-mark">(03)</span> <?php echo esc_html( akiha_college_t( 'cond3_t' ) ); ?>. <?php echo esc_html( akiha_college_t( 'cond3_d' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->