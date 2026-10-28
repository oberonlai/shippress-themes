<?php
/**
 * Title: Page head: news
 * Slug: nagi-imaging/head-news
 * Categories: nagi-imaging
 * Inserter: no
 * Description: Scattered photo field with the title on white strips for the news and archive pages.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nagi-head","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nagi-head">
<!-- wp:group {"className":"nagi-head__stage","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-head__stage">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-hf1 sp-parallax nagi-par-6"} -->
<figure class="wp-block-image size-large nagi-frame nagi-hf1 sp-parallax nagi-par-6"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3-monitor.webp' ) ); ?>" alt="A greyscale diagnostic monitor glows on a desk in a darkened reading room."/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-hf2 sp-parallax nagi-par-9"} -->
<figure class="wp-block-image size-large nagi-frame nagi-hf2 sp-parallax nagi-par-9"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-gantry.webp' ) ); ?>" alt="The curved edge of a CT gantry ring glows faintly above an empty patient table."/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-hf3 sp-parallax nagi-par-4"} -->
<figure class="wp-block-image size-large nagi-frame nagi-hf3 sp-parallax nagi-par-4"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h7-chair.webp' ) ); ?>" alt="An empty cushioned chair beside a tall window at dusk near a potted plant."/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"nagi-label nagi-head__label"} -->
<p class="nagi-label nagi-head__label">News and notes</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"nagi-strips nagi-head__title"} -->
<h1 class="wp-block-heading nagi-strips nagi-head__title"><span class="nagi-strip">Notes from</span><span class="nagi-strip">the reading room.</span></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nagi-lede nagi-head__lede"} -->
<p class="nagi-lede nagi-head__lede">Hours, studies and referrer notes from our outpatient imaging room at Calder Quay.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
