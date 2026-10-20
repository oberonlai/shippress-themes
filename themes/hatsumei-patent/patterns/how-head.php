<?php
/**
 * Title: From idea to patent: page head
 * Slug: hatsumei-patent/how-head
 * Categories: hatsumei-patent
 * Keywords: idea, patent, chapters
 * Viewport Width: 1440
 * Description: Title and paragraph beside a photograph of a workshop bench.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-head hp-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hp-head hp-head--photo"><!-- wp:group {"align":"wide","className":"hp-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hp-head__grid"><!-- wp:group {"className":"hp-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hp-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'home_steps_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hp-head__title"} -->
<h1 class="wp-block-heading hp-head__title"><?php echo wp_kses_post( hatsumei_patent_t( 'how_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hp-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hatsumei_patent_t( 'how_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide hp-head__photo"} -->
<figure class="wp-block-image size-large alignwide hp-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'how_head_03' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( hatsumei_patent_t( 'how_head_04' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
