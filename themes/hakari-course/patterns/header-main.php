<?php
/**
 * Title: Header: chips and anchor menu
 * Slug: hakari-course/header-main
 * Inserter: no
 * Keywords: food safety, course, landing
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"hk-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hk-header"><!-- wp:group {"className":"hk-chip hk-chip-l","layout":{"type":"default"}} -->
<div class="wp-block-group hk-chip hk-chip-l"><!-- wp:site-title {"level":0,"className":"hk-brand"} /-->

<!-- wp:paragraph {"className":"hk-brand__sub"} -->
<p class="hk-brand__sub"><?php echo wp_kses_post( hakari_course_t( 'hk_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hk-chip hk-chip-r","layout":{"type":"default"}} -->
<div class="wp-block-group hk-chip hk-chip-r"><!-- wp:html -->
<div class="hk-metarow"><p class="hk-meta"><?php echo wp_kses_post( hakari_course_t( 'hk_meta' ) ); ?> · <a href="/notes/"><?php echo wp_kses_post( hakari_course_t( 'hk_notes' ) ); ?></a></p>

<p class="hk-langs" lang="en"><span class="screen-reader-text"><?php echo esc_html( hakari_course_t( 'hk_lang' ) ); ?>: </span><a href="?lang=en" hreflang="en"<?php echo 'en' === hakari_course_lang() ? ' aria-current="true"' : ''; ?>>EN</a><a href="?lang=zh-TW" hreflang="zh-TW"<?php echo 'zh-TW' === hakari_course_lang() ? ' aria-current="true"' : ''; ?>><?php echo esc_html( "\u{4E2D}\u{6587}" ); ?></a><a href="?lang=ja" hreflang="ja"<?php echo 'ja' === hakari_course_lang() ? ' aria-current="true"' : ''; ?>><?php echo esc_html( "\u{65E5}\u{672C}\u{8A9E}" ); ?></a><a href="?lang=fr" hreflang="fr"<?php echo 'fr' === hakari_course_lang() ? ' aria-current="true"' : ''; ?>>FR</a><a href="?lang=de" hreflang="de"<?php echo 'de' === hakari_course_lang() ? ' aria-current="true"' : ''; ?>>DE</a></p></div>
<!-- /wp:html --><!-- wp:group {"className":"hk-navrow","layout":{"type":"default"}} -->
<div class="wp-block-group hk-navrow"><!-- wp:html -->
<a class="hk-pill-enrol" href="/#fee"><?php echo wp_kses_post( hakari_course_t( 'hk_enrol' ) ); ?></a>
<!-- /wp:html --><!-- wp:navigation {"overlayMenu":"mobile","className":"hk-nav","layout":{"type":"flex","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:html -->
<div class="hk-corner"><a class="hk-corner__enrol" href="/#fee"><?php echo wp_kses_post( hakari_course_t( 'hk_enrol' ) ); ?></a><a class="hk-corner__pdf" href="/syllabus/"><?php echo wp_kses_post( hakari_course_t( 'hk_pdf' ) ); ?></a></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
