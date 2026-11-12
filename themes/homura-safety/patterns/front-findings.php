<?php
/**
 * Title: Home: how a review reads
 * Slug: homura-safety/front-findings
 * Categories: homura-safety
 * Keywords: findings, report
 * Viewport Width: 1440
 * Description: A photo of a printed findings page beside an excerpt card of three finding rows with priority pills.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"findings","className":"hs-sec hs-findings","layout":{"type":"default"}} -->
<section id="findings" class="wp-block-group alignfull hs-sec hs-findings"><!-- wp:group {"align":"wide","className":"hs-findings__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-findings__grid"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"hs-findings__photo sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full hs-findings__photo sp-reveal sp-reveal--zoom"><img src="<?php echo homura_safety_img( 'hs-09-findings-desk' ); ?>" alt="<?php echo esc_attr( homura_safety_t( 'alt_09' ) ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hs-findings__card","layout":{"type":"default"}} -->
<div class="wp-block-group hs-findings__card"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'fi_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'fi_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'fi_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hs-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hs-rows sp-stagger"><!-- wp:group {"className":"hs-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hs-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hs-row__id"} -->
<p class="hs-row__id"><?php echo esc_html( homura_safety_t( 'fi1_id' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-row__text"} -->
<p class="hs-row__text"><strong><?php echo esc_html( homura_safety_t( 'fi1_w' ) ); ?></strong><br><?php echo esc_html( homura_safety_t( 'fi1_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-pill"} -->
<p class="hs-pill"><?php echo esc_html( homura_safety_t( 'fi1_pr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hs-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hs-row__id"} -->
<p class="hs-row__id"><?php echo esc_html( homura_safety_t( 'fi2_id' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-row__text"} -->
<p class="hs-row__text"><strong><?php echo esc_html( homura_safety_t( 'fi2_w' ) ); ?></strong><br><?php echo esc_html( homura_safety_t( 'fi2_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-pill"} -->
<p class="hs-pill"><?php echo esc_html( homura_safety_t( 'fi2_pr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hs-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hs-row__id"} -->
<p class="hs-row__id"><?php echo esc_html( homura_safety_t( 'fi3_id' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-row__text"} -->
<p class="hs-row__text"><strong><?php echo esc_html( homura_safety_t( 'fi3_w' ) ); ?></strong><br><?php echo esc_html( homura_safety_t( 'fi3_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-pill"} -->
<p class="hs-pill"><?php echo esc_html( homura_safety_t( 'fi3_pr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
