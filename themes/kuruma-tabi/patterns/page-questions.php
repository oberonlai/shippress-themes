<?php
/**
 * Title: Page: questions
 * Slug: kuruma-tabi/page-questions
 * Categories: kuruma-tabi
 * Inserter: no
 * Viewport Width: 1440
 * Description: Questions page: split head and six questions with answers.
 */
?>
<!-- wp:group {"tagName":"main","className":"kt-main","layout":{"type":"default"}} -->
<main class="wp-block-group kt-main"><!-- wp:group {"tagName":"section","align":"full","className":"kt-hero kt-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-hero kt-hero--page"><!-- wp:group {"className":"kt-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__text"><!-- wp:heading {"level":1,"className":"kt-h1"} -->
<h1 class="wp-block-heading kt-h1"><span class="kt-w" style="--i:0"><?php echo esc_html( kuruma_tabi_t( 'qa_h1' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-lede"} -->
<p class="kt-lede"><?php echo esc_html( kuruma_tabi_t( 'qa_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'lakeside-walk.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--pb","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-sec kt-sec--pb"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'qa_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'qa_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-faq","layout":{"type":"default"}} -->
<div class="wp-block-group kt-faq"><!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'qa_1_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'qa_1_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'qa_2_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'qa_2_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'qa_3_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'qa_3_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'qa_4_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'qa_4_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'qa_5_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'qa_5_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'qa_6_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'qa_6_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kuruma-tabi/inner-cta"} /-->
</main>
<!-- /wp:group -->
