<?php
/**
 * Title: Groups: sticky photograph beside three room rows
 * Slug: sumibi-yakiniku/groups
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: A tall photograph that holds while three private rooms scroll past: Hearth Room 8, Long Room 12 and Upper Floor 24, each with a large number, a short description and outline pills. A white plate at the photograph's corner holds 8-24.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-groups","layout":{"type":"default"}} -->
<section class="wp-block-group sy-groups" id="groups"><!-- wp:paragraph {"className":"sy-label sy-label--r sp-reveal sp-reveal--up"} -->
<p class="sy-label sy-label--r sp-reveal sp-reveal--up"><?php echo esc_html( sumibi_yakiniku_t( 'groups_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-groups__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sy-groups__grid"><!-- wp:group {"className":"sy-groups__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-groups__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-groups__img"} -->
<figure class="wp-block-image size-full sy-groups__img"><img src="<?php echo sumibi_yakiniku_img( 'p10-long-room.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--groups","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--groups"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'groups_plate_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'groups_plate_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-groups__text","layout":{"type":"default"}} -->
<div class="wp-block-group sy-groups__text"><!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'groups_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-lede"} -->
<p class="sy-lede"><?php echo esc_html( sumibi_yakiniku_t( 'groups_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-rooms sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sy-rooms sp-stagger"><!-- wp:group {"className":"sy-room sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-room sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sy-room__n sp-count"} -->
<p class="sy-room__n sp-count"><?php echo esc_html( sumibi_yakiniku_t( 'rm1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sy-room__name"} -->
<h3 class="wp-block-heading sy-room__name"><?php echo esc_html( sumibi_yakiniku_t( 'rm1_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-room__p"} -->
<p class="sy-room__p"><?php echo esc_html( sumibi_yakiniku_t( 'rm1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-pills","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pills"><!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm1_pill1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm1_pill2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-room sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-room sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sy-room__n sp-count"} -->
<p class="sy-room__n sp-count"><?php echo esc_html( sumibi_yakiniku_t( 'rm2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sy-room__name"} -->
<h3 class="wp-block-heading sy-room__name"><?php echo esc_html( sumibi_yakiniku_t( 'rm2_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-room__p"} -->
<p class="sy-room__p"><?php echo esc_html( sumibi_yakiniku_t( 'rm2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-pills","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pills"><!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm2_pill1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm2_pill2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-room sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-room sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sy-room__n sp-count"} -->
<p class="sy-room__n sp-count"><?php echo esc_html( sumibi_yakiniku_t( 'rm3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sy-room__name"} -->
<h3 class="wp-block-heading sy-room__name"><?php echo esc_html( sumibi_yakiniku_t( 'rm3_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-room__p"} -->
<p class="sy-room__p"><?php echo esc_html( sumibi_yakiniku_t( 'rm3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-pills","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pills"><!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm3_pill1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm3_pill2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sy-note"} -->
<p class="sy-note"><?php echo esc_html( sumibi_yakiniku_t( 'groups_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
