<?php
/**
 * Title: Footer: details and links
 * Slug: hakari-course/footer-main
 * Inserter: no
 * Keywords: food safety, course, landing
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"hk-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hk-footer"><!-- wp:group {"className":"hk-ft__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hk-ft__grid"><!-- wp:group {"className":"hk-ft__lead","layout":{"type":"default"}} -->
<div class="wp-block-group hk-ft__lead"><!-- wp:paragraph {"className":"hk-ft__brand"} -->
<p class="hk-ft__brand"><strong>Hakari Course</strong></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-ft__about"} -->
<p class="hk-ft__about"><?php echo wp_kses_post( hakari_course_t( 'hk_about' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-ft__about"} -->
<p class="hk-ft__about"><?php echo wp_kses_post( hakari_course_t( 'hk_sup' ) ); ?> · <a href="mailto:hello@hakari-course.example">hello@hakari-course.example</a></p>
<!-- /wp:paragraph --><!-- wp:html -->
<p class="hk-langs hk-langs--foot" lang="en"><span class="screen-reader-text"><?php echo esc_html( hakari_course_t( 'hk_lang' ) ); ?>: </span><a href="?lang=en" hreflang="en"<?php echo 'en' === hakari_course_lang() ? ' aria-current="true"' : ''; ?>>EN</a><a href="?lang=zh-TW" hreflang="zh-TW"<?php echo 'zh-TW' === hakari_course_lang() ? ' aria-current="true"' : ''; ?>><?php echo esc_html( "\u{4E2D}\u{6587}" ); ?></a><a href="?lang=ja" hreflang="ja"<?php echo 'ja' === hakari_course_lang() ? ' aria-current="true"' : ''; ?>><?php echo esc_html( "\u{65E5}\u{672C}\u{8A9E}" ); ?></a><a href="?lang=fr" hreflang="fr"<?php echo 'fr' === hakari_course_lang() ? ' aria-current="true"' : ''; ?>>FR</a><a href="?lang=de" hreflang="de"<?php echo 'de' === hakari_course_lang() ? ' aria-current="true"' : ''; ?>>DE</a></p>
<!-- /wp:html --></div>
<!-- /wp:group --><!-- wp:group {"className":"hk-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group hk-fcol"><!-- wp:paragraph {"className":"hk-fcol__t"} -->
<p class="hk-fcol__t"><strong><?php echo wp_kses_post( hakari_course_t( 'hk_c1' ) ); ?></strong></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/syllabus/"><?php echo wp_kses_post( hakari_course_t( 'hk_syllabus' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/instructors/"><?php echo wp_kses_post( hakari_course_t( 'hk_instructors' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/dates-fees/"><?php echo wp_kses_post( hakari_course_t( 'hk_fees' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/how-it-works/"><?php echo wp_kses_post( hakari_course_t( 'hk_how' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hk-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group hk-fcol"><!-- wp:paragraph {"className":"hk-fcol__t"} -->
<p class="hk-fcol__t"><strong><?php echo wp_kses_post( hakari_course_t( 'hk_c2' ) ); ?></strong></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/stories/"><?php echo wp_kses_post( hakari_course_t( 'hk_stories' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/faq/"><?php echo wp_kses_post( hakari_course_t( 'hk_faq' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/notes/"><?php echo wp_kses_post( hakari_course_t( 'hk_notes' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/waitlist/"><?php echo wp_kses_post( hakari_course_t( 'hk_waitlist' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hk-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group hk-fcol"><!-- wp:paragraph {"className":"hk-fcol__t"} -->
<p class="hk-fcol__t"><strong><?php echo wp_kses_post( hakari_course_t( 'hk_c3' ) ); ?></strong></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/contact/"><?php echo wp_kses_post( hakari_course_t( 'hk_contact' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/privacy/"><?php echo wp_kses_post( hakari_course_t( 'hk_privacy' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hk-fcol__i"} -->
<p class="hk-fcol__i"><a href="/terms/"><?php echo wp_kses_post( hakari_course_t( 'hk_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"hk-ft__legal"} -->
<p class="hk-ft__legal"><?php echo wp_kses_post( hakari_course_t( 'hk_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
