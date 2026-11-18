<?php
/**
 * Title: Crew line
 * Slug: moyooshi-productions/crew
 * Categories: moyooshi-productions
 * Viewport Width: 1440
 * Description: Mist band: three portrait photographs with names and roles, a core-team label and a link to the About page.
 */
?>
<!-- wp:group {"tagName":"section","className":"mp-sec mp-crew","layout":{"type":"default"}} -->
<section class="wp-block-group mp-sec mp-crew"><!-- wp:group {"className":"mp-frame mp-crew__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mp-frame mp-crew__grid"><!-- wp:group {"className":"mp-crew__l","layout":{"type":"default"}} -->
<div class="wp-block-group mp-crew__l"><!-- wp:paragraph {"className":"mp-label"} -->
<p class="mp-label"><?php echo esc_html( moyooshi_productions_t( 'lbl_crew' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"mp-h2"} -->
<h2 class="wp-block-heading mp-h2"><?php echo esc_html( moyooshi_productions_t( 'crew_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mp-lead"} -->
<p class="mp-lead"><?php echo esc_html( moyooshi_productions_t( 'crew_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-more"} -->
<p class="mp-more"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'crew_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-people sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mp-people sp-stagger"><!-- wp:group {"className":"mp-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-person sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mp-person__img"} -->
<figure class="wp-block-image size-full mp-person__img"><img src="<?php echo moyooshi_productions_img( 'producer-portrait.webp' ); ?>" alt="<?php echo moyooshi_productions_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-person__n"} -->
<p class="mp-person__n"><?php echo esc_html( moyooshi_productions_t( 'c1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-person__r"} -->
<p class="mp-person__r"><?php echo esc_html( moyooshi_productions_t( 'c1_r' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-person sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mp-person__img"} -->
<figure class="wp-block-image size-full mp-person__img"><img src="<?php echo moyooshi_productions_img( 'stage-manager.webp' ); ?>" alt="<?php echo moyooshi_productions_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-person__n"} -->
<p class="mp-person__n"><?php echo esc_html( moyooshi_productions_t( 'c2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-person__r"} -->
<p class="mp-person__r"><?php echo esc_html( moyooshi_productions_t( 'c2_r' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-person sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mp-person__img"} -->
<figure class="wp-block-image size-full mp-person__img"><img src="<?php echo moyooshi_productions_img( 'tech-desk.webp' ); ?>" alt="<?php echo moyooshi_productions_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-person__n"} -->
<p class="mp-person__n"><?php echo esc_html( moyooshi_productions_t( 'c3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-person__r"} -->
<p class="mp-person__r"><?php echo esc_html( moyooshi_productions_t( 'c3_r' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
