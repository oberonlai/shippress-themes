<?php
/**
 * Title: Home: system diagram
 * Slug: tsunagu-systems/hero-system-diagram
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Description: First screen: a mono label, a two-line headline and one sentence at the top left; below, a centred tabletop model of an office network (cut-out photograph) on a pale wisteria grid floor, overflowing the floor edge, with five numbered callouts whose hairline leaders run to labels in the right-hand column; Compare plans button and Talk to an engineer link under the diagram.
 */
?>
<!-- wp:group {"tagName":"section","className":"ts-sys","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ts-sys">
<!-- wp:paragraph {"className":"ts-sys__label"} -->
<p class="ts-sys__label"><?php echo esc_html( tsunagu_systems_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ts-sys__title"} -->
<h1 class="wp-block-heading ts-sys__title"><?php echo esc_html( tsunagu_systems_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ts-sys__lead"} -->
<p class="ts-sys__lead"><?php echo esc_html( tsunagu_systems_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="ts-sys__fig"><div class="ts-sys__floor" aria-hidden="true"></div><div class="ts-sys__art"><img class="ts-sys__img" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/system-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( tsunagu_systems_t( 'alt_system' ) ); ?>" width="660" height="479" loading="eager"/><span class="ts-sys__pin" style="left:69%;top:30%" aria-hidden="true">1</span><span class="ts-sys__pin" style="left:36%;top:35%" aria-hidden="true">2</span><span class="ts-sys__pin" style="left:62%;top:57%" aria-hidden="true">3</span><span class="ts-sys__pin" style="left:41%;top:58%" aria-hidden="true">4</span><span class="ts-sys__pin" style="left:51%;top:78%" aria-hidden="true">5</span></div><svg class="ts-sys__lines" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true"><line x1="44.2" y1="30" x2="75" y2="14" vector-effect="non-scaling-stroke"/><circle cx="75" cy="14" r="0.35"/><line x1="23.0" y1="35" x2="75" y2="31" vector-effect="non-scaling-stroke"/><circle cx="75" cy="31" r="0.35"/><line x1="39.7" y1="57" x2="75" y2="48" vector-effect="non-scaling-stroke"/><circle cx="75" cy="48" r="0.35"/><line x1="26.2" y1="58" x2="75" y2="65" vector-effect="non-scaling-stroke"/><circle cx="75" cy="65" r="0.35"/><line x1="32.6" y1="78" x2="75" y2="82" vector-effect="non-scaling-stroke"/><circle cx="75" cy="82" r="0.35"/></svg><ol class="ts-sys__labs"><li class="ts-sys__lab" style="--y:14%"><span class="ts-sys__no">01</span><strong><?php echo esc_html( tsunagu_systems_t( 'n1_t' ) ); ?></strong><span><?php echo esc_html( tsunagu_systems_t( 'n1_d' ) ); ?></span></li><li class="ts-sys__lab" style="--y:31%"><span class="ts-sys__no">02</span><strong><?php echo esc_html( tsunagu_systems_t( 'n2_t' ) ); ?></strong><span><?php echo esc_html( tsunagu_systems_t( 'n2_d' ) ); ?></span></li><li class="ts-sys__lab" style="--y:48%"><span class="ts-sys__no">03</span><strong><?php echo esc_html( tsunagu_systems_t( 'n3_t' ) ); ?></strong><span><?php echo esc_html( tsunagu_systems_t( 'n3_d' ) ); ?></span></li><li class="ts-sys__lab" style="--y:65%"><span class="ts-sys__no">04</span><strong><?php echo esc_html( tsunagu_systems_t( 'n4_t' ) ); ?></strong><span><?php echo esc_html( tsunagu_systems_t( 'n4_d' ) ); ?></span></li><li class="ts-sys__lab" style="--y:82%"><span class="ts-sys__no">05</span><strong><?php echo esc_html( tsunagu_systems_t( 'n5_t' ) ); ?></strong><span><?php echo esc_html( tsunagu_systems_t( 'n5_d' ) ); ?></span></li></ol></div>
<!-- /wp:html -->

<!-- wp:buttons {"className":"ts-sys__cta"} -->
<div class="wp-block-buttons ts-sys__cta"><!-- wp:button {"className":"ts-btn"} -->
<div class="wp-block-button ts-btn"><a class="wp-block-button__link wp-element-button" href="#plans"><?php echo esc_html( tsunagu_systems_t( 'hero_cta' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"ts-textlink"} -->
<div class="wp-block-button ts-textlink"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( tsunagu_systems_t( 'hero_link' ) ); ?> <span aria-hidden="true">&rarr;</span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
