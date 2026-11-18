<?php
/**
 * Title: Home: journal
 * Slug: taruki-distillery/front-journal
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: Three journal entries as ruled text rows on a charcoal ground: date, title, one line, caps link.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--dark td-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--dark td-journal"><!-- wp:group {"align":"wide","className":"td-journal__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-journal__head"><!-- wp:paragraph {"className":"td-caps td-caps--light sp-reveal sp-reveal--up"} -->
<p class="td-caps td-caps--light sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'jo_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"td-h2 td-h2--light sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading td-h2 td-h2--light sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'jo_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"td-journal__list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-journal__list sp-stagger"><!-- wp:group {"className":"td-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-post sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-caps td-caps--light td-post__d"} -->
<p class="td-caps td-caps--light td-post__d"><?php echo esc_html( taruki_t( 'jo_1_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"td-post__main","layout":{"type":"default"}} -->
<div class="wp-block-group td-post__main"><!-- wp:heading {"level":3,"className":"td-post__t"} -->
<h3 class="wp-block-heading td-post__t"><a href="/inside-batch-112-a-week-at-the-still/"><?php echo esc_html( taruki_t( 'jo_1_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-post__b"} -->
<p class="td-post__b"><?php echo esc_html( taruki_t( 'jo_1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-link td-link--light td-post__go"} -->
<p class="td-link td-link--light td-post__go"><a href="/inside-batch-112-a-week-at-the-still/"><?php echo esc_html( taruki_t( 'jo_read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-post sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-caps td-caps--light td-post__d"} -->
<p class="td-caps td-caps--light td-post__d"><?php echo esc_html( taruki_t( 'jo_2_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"td-post__main","layout":{"type":"default"}} -->
<div class="wp-block-group td-post__main"><!-- wp:heading {"level":3,"className":"td-post__t"} -->
<h3 class="wp-block-heading td-post__t"><a href="/why-ottilie-runs-slowly/"><?php echo esc_html( taruki_t( 'jo_2_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-post__b"} -->
<p class="td-post__b"><?php echo esc_html( taruki_t( 'jo_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-link td-link--light td-post__go"} -->
<p class="td-link td-link--light td-post__go"><a href="/why-ottilie-runs-slowly/"><?php echo esc_html( taruki_t( 'jo_read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-post sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-caps td-caps--light td-post__d"} -->
<p class="td-caps td-caps--light td-post__d"><?php echo esc_html( taruki_t( 'jo_3_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"td-post__main","layout":{"type":"default"}} -->
<div class="wp-block-group td-post__main"><!-- wp:heading {"level":3,"className":"td-post__t"} -->
<h3 class="wp-block-heading td-post__t"><a href="/peel-from-the-hillside-grove/"><?php echo esc_html( taruki_t( 'jo_3_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-post__b"} -->
<p class="td-post__b"><?php echo esc_html( taruki_t( 'jo_3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-link td-link--light td-post__go"} -->
<p class="td-link td-link--light td-post__go"><a href="/peel-from-the-hillside-grove/"><?php echo esc_html( taruki_t( 'jo_read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-link td-link--light td-journal__more"} -->
<p class="td-link td-link--light td-journal__more"><a href="/journal/"><?php echo esc_html( taruki_t( 'jo_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
