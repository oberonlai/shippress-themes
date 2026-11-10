<?php
/**
 * Title: Home: questions
 * Slug: genba-diary/front-questions
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Description: Label, heading and five ruled question rows that open with a plus sign.
 */
?>
<!-- wp:group {"className":"gd-questions gd-sec","layout":{"type":"default"},"tagName":"section","anchor":"questions","align":"full"} -->
<section id="questions" class="wp-block-group alignfull gd-questions gd-sec"><!-- wp:group {"className":"gd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wrap"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"gd-label"} -->
<p class="gd-label"><?php echo esc_html( genba_diary_t( 'l_questions' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"gd-h2"} -->
<h2 class="wp-block-heading gd-h2"><?php echo esc_html( genba_diary_t( 'questions_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-faqs","layout":{"type":"default"}} -->
<div class="wp-block-group gd-faqs"><!-- wp:details {"className":"gd-faq"} -->
<details class="wp-block-details gd-faq"><summary><?php echo esc_html( genba_diary_t( 'q1_q' ) ); ?></summary>
<!-- wp:paragraph -->
<p><?php echo esc_html( genba_diary_t( 'q1_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gd-faq"} -->
<details class="wp-block-details gd-faq"><summary><?php echo esc_html( genba_diary_t( 'q2_q' ) ); ?></summary>
<!-- wp:paragraph -->
<p><?php echo esc_html( genba_diary_t( 'q2_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gd-faq"} -->
<details class="wp-block-details gd-faq"><summary><?php echo esc_html( genba_diary_t( 'q3_q' ) ); ?></summary>
<!-- wp:paragraph -->
<p><?php echo esc_html( genba_diary_t( 'q3_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gd-faq"} -->
<details class="wp-block-details gd-faq"><summary><?php echo esc_html( genba_diary_t( 'q4_q' ) ); ?></summary>
<!-- wp:paragraph -->
<p><?php echo esc_html( genba_diary_t( 'q4_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gd-faq"} -->
<details class="wp-block-details gd-faq"><summary><?php echo esc_html( genba_diary_t( 'q5_q' ) ); ?></summary>
<!-- wp:paragraph -->
<p><?php echo esc_html( genba_diary_t( 'q5_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
