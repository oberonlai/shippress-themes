<?php
/**
 * Title: Home: statement and practice
 * Slug: kantei-valuers/front-practice
 * Categories: kantei-valuers
 * Keywords: statement, about, practice
 * Viewport Width: 1440
 * Description: Pale band with an accent sub-label and a two-line statement at the left, two paragraphs and an outline pill with a long arrow at the right. No photo.
 */
$e = 'kantei_valuers_e';
$l = 'kantei_valuers_lines';
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"practice","className":"kv-sec kv-practice","layout":{"type":"default"}} -->
<section id="practice" class="wp-block-group alignfull kv-sec kv-practice"><!-- wp:group {"className":"kv-practice__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kv-practice__grid"><!-- wp:group {"className":"kv-practice__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-practice__l sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-label"} -->
<p class="kv-label"><?php echo $e( 'practice_label' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kv-statement"} -->
<h2 class="wp-block-heading kv-statement"><?php echo $l( 'practice_title' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-practice__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-practice__r sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo $e( 'practice_p1' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo $e( 'practice_p2' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-pill"} -->
<div class="wp-block-button is-style-outline-pill"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo $e( 'practice_more' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
