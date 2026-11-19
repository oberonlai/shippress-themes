<?php
/**
 * Title: Home: the problem
 * Slug: tsukuri-design/front-problem
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Label and hairline, a centred object photograph and a caption row: a narrow left block and a 470 pixel column of three narrative paragraphs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--paper","anchor":"problem","layout":{"type":"default"}} -->
<section id="problem" class="wp-block-group alignfull td-sec td-sec--paper"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'l_problem' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-obj sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-obj sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p03-flawed-sample.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'pr_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-cap__kind"} -->
<p class="td-cap__kind"><?php echo esc_html( tsukuri_design_t( 'pr_kind' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( tsukuri_design_t( 'pr_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( tsukuri_design_t( 'pr_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( tsukuri_design_t( 'pr_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
