<?php
/**
 * Title: Home: a welcome from the head
 * Slug: aozora-primary-school/front-welcome
 * Categories: aozora-primary-school
 * Keywords: home, school, primary
 * Viewport Width: 1440
 * Description: Three paragraphs from the head teacher beside her portrait in an arch frame and three plain figures.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-welcome","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-welcome"><!-- wp:group {"className":"ap-welcome__in","layout":{"type":"default"}} -->
<div class="wp-block-group ap-welcome__in"><!-- wp:group {"className":"ap-welcome__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ap-welcome__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'front_wel_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ap-welcome__title"} -->
<h2 class="wp-block-heading ap-welcome__title"><?php echo wp_kses_post( aozora_primary_school_t( 'front_wel_02' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aozora_primary_school_t( 'front_wel_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aozora_primary_school_t( 'front_wel_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aozora_primary_school_t( 'front_wel_05' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-sign"} -->
<p class="ap-sign"><?php echo wp_kses_post( aozora_primary_school_t( 'front_wel_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-welcome__side","layout":{"type":"default"}} -->
<div class="wp-block-group ap-welcome__side"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-welcome__photo"} -->
<figure class="wp-block-image size-large ap-welcome__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teacher-1.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_wel_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:list {"className":"ap-figures"} -->
<ul class="wp-block-list ap-figures"><!-- wp:list-item -->
<li><?php echo wp_kses_post( aozora_primary_school_t( 'front_fig_1' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( aozora_primary_school_t( 'front_fig_2' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( aozora_primary_school_t( 'front_fig_3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
