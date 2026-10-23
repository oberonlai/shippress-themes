<?php
/**
 * Title: Page: Courses
 * Slug: kotoba-language/page-courses
 * Categories: kotoba-language
 * Description: Language list, three course shapes with prices, CEFR line between arcs, links to the pathways.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"kl-wrap kl-lede-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap kl-lede-wrap"><!-- wp:paragraph {"className":"kl-lede"} -->
<p class="kl-lede"><?php echo esc_html( kotoba_language_t( 'courses_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-wrap kl-photo","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap kl-photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-wide"} -->
<figure class="wp-block-image size-full kl-wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s8.webp' ) ); ?>" alt="<?php echo esc_attr( kotoba_language_t( 'alt_s8' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec kl-prose-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-prose-sec"><!-- wp:group {"className":"kl-narrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kl-narrow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kl-h2"} -->
<h2 class="wp-block-heading kl-h2"><?php echo esc_html( kotoba_language_t( 'courses_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'courses_b1_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'courses_b1_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec kl-tblsec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-tblsec"><!-- wp:group {"className":"kl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap"><!-- wp:table {"className":"kl-fees"} -->
<figure class="wp-block-table kl-fees"><table class="has-fixed-layout"><tbody><tr><td><?php echo esc_html( kotoba_language_t( 'fee2_n' ) ); ?></td><td><?php echo esc_html( kotoba_language_t( 'fee2_d' ) ); ?></td><td><?php echo esc_html( kotoba_language_t( 'fee2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kotoba_language_t( 'fee3_n' ) ); ?></td><td><?php echo esc_html( kotoba_language_t( 'fee3_d' ) ); ?></td><td><?php echo esc_html( kotoba_language_t( 'fee3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kotoba_language_t( 'fee7_n' ) ); ?></td><td><?php echo esc_html( kotoba_language_t( 'fee7_d' ) ); ?></td><td><?php echo esc_html( kotoba_language_t( 'fee7_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec kl-prose-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-prose-sec"><!-- wp:group {"className":"kl-narrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kl-narrow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kl-h2"} -->
<h2 class="wp-block-heading kl-h2"><?php echo esc_html( kotoba_language_t( 'courses_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'courses_b2_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'courses_b2_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec kl-quote","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-quote"><!-- wp:group {"className":"kl-flank","layout":{"type":"default"}} -->
<div class="wp-block-group kl-flank"><!-- wp:html -->
<?php echo kotoba_language_arc( 'l' ); // phpcs:ignore ?>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kl-pull"} -->
<h2 class="wp-block-heading kl-pull"><?php echo esc_html( kotoba_language_t( 'courses_pull' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<ol class="kl-scale" aria-label="CEFR"><li>A1</li><li>A2</li><li>B1</li><li>B2</li><li>C1</li><li>C2</li></ol>
<!-- /wp:html -->

<!-- wp:html -->
<?php echo kotoba_language_arc( 'r' ); // phpcs:ignore ?>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec kl-prose-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-prose-sec"><!-- wp:group {"className":"kl-narrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kl-narrow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kl-h2"} -->
<h2 class="wp-block-heading kl-h2"><?php echo esc_html( kotoba_language_t( 'courses_h3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'courses_b3_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'courses_b3_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kl-paths-links","layout":{"type":"default"}} -->
<div class="wp-block-group kl-paths-links"><!-- wp:paragraph {"className":"kl-textlink"} -->
<p class="kl-textlink"><a href="/pathways-work/"><?php echo esc_html( kotoba_language_t( 'lnk_work' ) ); ?> →</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-textlink"} -->
<p class="kl-textlink"><a href="/pathways-settlement/"><?php echo esc_html( kotoba_language_t( 'lnk_settle' ) ); ?> →</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-textlink"} -->
<p class="kl-textlink"><a href="/pathways-exams/"><?php echo esc_html( kotoba_language_t( 'lnk_exams' ) ); ?> →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-wrap kl-stubclose","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap kl-stubclose"><!-- wp:buttons {"className":"kl-pill-btn-wrap"} -->
<div class="wp-block-buttons kl-pill-btn-wrap"><!-- wp:button {"className":"kl-pill-btn"} -->
<div class="wp-block-button kl-pill-btn"><a class="wp-block-button__link wp-element-button" href="/enquiry/"><?php echo esc_html( kotoba_language_t( 'cta_enquire' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->