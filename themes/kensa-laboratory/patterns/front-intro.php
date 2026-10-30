<?php
/**
 * Title: Home: intro
 * Slug: kensa-laboratory/front-intro
 * Categories: kensa-laboratory
 * Keywords: materials testing, laboratory, concrete
 * Viewport Width: 1440
 * Description: Label, headline, three prose paragraphs, a wide bench photograph and the three facts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kl-sec kl-intro","layout":{"type":"constrained"},"anchor":"about"} -->
<section id="about" class="wp-block-group alignfull kl-sec kl-intro"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kensa_laboratory_t( 'lbl_about' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( kensa_laboratory_t( 'intro_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kl-prose-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-prose-wrap"><!-- wp:paragraph {"className":"kl-prose"} -->
<p class="kl-prose"><?php echo esc_html( kensa_laboratory_t( 'intro_p0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-prose"} -->
<p class="kl-prose"><?php echo esc_html( kensa_laboratory_t( 'intro_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-prose"} -->
<p class="kl-prose"><?php echo esc_html( kensa_laboratory_t( 'intro_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-wide-photo"} -->
<figure class="wp-block-image size-full kl-wide-photo"><img src="<?php echo kensa_laboratory_img( 'intro-bench.webp' ); ?>" alt="<?php echo esc_attr( kensa_laboratory_t( 'alt_P06' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kl-facts","layout":{"type":"default"}} -->
<div class="wp-block-group kl-facts"><!-- wp:paragraph {"className":"kl-fact sp-reveal sp-count"} -->
<p class="kl-fact sp-reveal sp-count"><?php echo esc_html( kensa_laboratory_t( 'fact_0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-fact sp-reveal sp-count"} -->
<p class="kl-fact sp-reveal sp-count"><?php echo esc_html( kensa_laboratory_t( 'fact_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-fact sp-reveal sp-count"} -->
<p class="kl-fact sp-reveal sp-count"><?php echo esc_html( kensa_laboratory_t( 'fact_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
