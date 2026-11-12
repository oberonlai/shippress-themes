<?php
/**
 * Title: Home: intro, module links and facts
 * Slug: tsubasa-college/front-intro
 * Categories: tsubasa-college
 * Keywords: intro, about, facts
 * Viewport Width: 1440
 * Description: A bracket label and an uppercase heading on the left, three narrative paragraphs on the right, a two-column list of chevron links to the eight modules and a four-cell facts row with counters.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"college","className":"tc-sec tc-intro","layout":{"type":"default"}} -->
<section id="college" class="wp-block-group alignfull tc-sec tc-intro"><!-- wp:group {"align":"wide","className":"tc-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tc-intro__grid"><!-- wp:group {"className":"tc-intro__head","layout":{"type":"default"}} -->
<div class="wp-block-group tc-intro__head"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tsubasa_college_t( 'in_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( tsubasa_college_t( 'in_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tc-rule","layout":{"type":"default"}} -->
<div class="wp-block-group tc-rule"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tc-intro__body","layout":{"type":"default"}} -->
<div class="wp-block-group tc-intro__body"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( tsubasa_college_t( 'in_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( tsubasa_college_t( 'in_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( tsubasa_college_t( 'in_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"tc-links sp-stagger"} -->
<ul class="wp-block-list tc-links sp-stagger"><!-- wp:list-item {"className":"sp-reveal sp-reveal--up"} -->
<li class="sp-reveal sp-reveal--up"><a href="/modules/#m5"><?php echo esc_html( tsubasa_college_t( 'mod_1' ) ); ?> <span class="tc-chev">›</span></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"sp-reveal sp-reveal--up"} -->
<li class="sp-reveal sp-reveal--up"><a href="/modules/#m4"><?php echo esc_html( tsubasa_college_t( 'mod_2' ) ); ?> <span class="tc-chev">›</span></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"sp-reveal sp-reveal--up"} -->
<li class="sp-reveal sp-reveal--up"><a href="/modules/#m6"><?php echo esc_html( tsubasa_college_t( 'mod_3' ) ); ?> <span class="tc-chev">›</span></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"sp-reveal sp-reveal--up"} -->
<li class="sp-reveal sp-reveal--up"><a href="/modules/#m4"><?php echo esc_html( tsubasa_college_t( 'mod_4' ) ); ?> <span class="tc-chev">›</span></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"sp-reveal sp-reveal--up"} -->
<li class="sp-reveal sp-reveal--up"><a href="/modules/#m3"><?php echo esc_html( tsubasa_college_t( 'mod_5' ) ); ?> <span class="tc-chev">›</span></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"sp-reveal sp-reveal--up"} -->
<li class="sp-reveal sp-reveal--up"><a href="/modules/#m7"><?php echo esc_html( tsubasa_college_t( 'mod_6' ) ); ?> <span class="tc-chev">›</span></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"sp-reveal sp-reveal--up"} -->
<li class="sp-reveal sp-reveal--up"><a href="/modules/#m3"><?php echo esc_html( tsubasa_college_t( 'mod_7' ) ); ?> <span class="tc-chev">›</span></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"sp-reveal sp-reveal--up"} -->
<li class="sp-reveal sp-reveal--up"><a href="/modules/#m8"><?php echo esc_html( tsubasa_college_t( 'mod_8' ) ); ?> <span class="tc-chev">›</span></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:group {"className":"tc-facts sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group tc-facts sp-stagger"><!-- wp:group {"className":"tc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tc-fact__n sp-count"} -->
<p class="tc-fact__n sp-count">2,400</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tc-fact__l"} -->
<p class="tc-fact__l"><?php echo esc_html( tsubasa_college_t( 'fact_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tc-fact__n sp-count"} -->
<p class="tc-fact__n sp-count">18</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tc-fact__l"} -->
<p class="tc-fact__l"><?php echo esc_html( tsubasa_college_t( 'fact_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tc-fact__n sp-count"} -->
<p class="tc-fact__n sp-count">8</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tc-fact__l"} -->
<p class="tc-fact__l"><?php echo esc_html( tsubasa_college_t( 'fact_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tc-fact__n sp-count"} -->
<p class="tc-fact__n sp-count">24</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tc-fact__l"} -->
<p class="tc-fact__l"><?php echo esc_html( tsubasa_college_t( 'fact_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
