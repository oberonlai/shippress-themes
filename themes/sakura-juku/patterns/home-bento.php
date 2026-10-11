<?php
/**
 * Title: Home: bento grid
 * Slug: sakura-juku/home-bento
 * Categories: sakura-juku
 * Keywords: home, bento, grid, hero, school
 * Viewport Width: 1280
 * Description: The home page as one bento grid of rounded cells: the welcome (blue), a classroom photo, the five levels, the word of the week, a teacher, the street in spring, online lessons, the free trial lesson, three numbers, the latest journal posts and a student quote. Hiragana stickers sit on a few cells.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-section sj-section--bento","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sj-section sj-section--bento"><!-- wp:group {"align":"wide","className":"sj-bento sj-bento--home","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sj-bento sj-bento--home"><!-- wp:group {"className":"is-style-blue sj-cell sj-cell--intro","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-blue sj-cell sj-cell--intro"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Japanese school in Nakano, Tokyo</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sj-cell__title"} -->
<h1 class="wp-block-heading sj-cell__title">Japanese that feels friendly from the very first lesson.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Small classes of twelve at most, teachers who laugh at their own mistakes and a classroom that smells of green tea. Beginners are welcome: most of our students started with nothing but “arigatou”.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/courses/">Find your course</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/levels/">Check your level</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-cell sj-cell--photo sj-sticker sj-kana-sa","layout":{"type":"default"}} -->
<div class="wp-block-group sj-cell sj-cell--photo sj-sticker sj-kana-sa"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sj-cell__img"} -->
<figure class="wp-block-image size-large sj-cell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" alt="Four adults laughing around a round table in a bright classroom, cherry blossoms in the window behind them"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-pink sj-cell sj-cell--levels","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-pink sj-cell sj-cell--levels"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Levels</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sj-cell__title"} -->
<h3 class="wp-block-heading sj-cell__title">Five levels, from Seed to Canopy.</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"sj-ladder-mini"} -->
<ul class="wp-block-list sj-ladder-mini"><!-- wp:list-item -->
<li>Seed</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sprout</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bud</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bloom</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Canopy</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"sj-more"} -->
<p class="sj-more"><a href="/levels/">Find your level in five minutes</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-sky sj-cell sj-cell--word sj-sticker sj-kana-a","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-sky sj-cell sj-cell--word sj-sticker sj-kana-a"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Word of the week</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sj-word"} -->
<h3 class="wp-block-heading sj-word">hanami</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Looking at the cherry blossoms, and the long picnic underneath them. Use it in a sentence at Friday tea.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card sj-cell sj-cell--teacher","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card sj-cell sj-cell--teacher"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sj-cell__img"} -->
<figure class="wp-block-image size-large sj-cell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teacher1.jpg' ) ); ?>" alt="A smiling teacher with dark hair, a blue cardigan and a pink scarf against a white wall"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sj-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group sj-cell__body"><!-- wp:quote {"className":"sj-cell__quote"} -->
<blockquote class="wp-block-quote sj-cell__quote"><!-- wp:paragraph -->
<p>Mistakes are how the words find you. We make them together, out loud.</p>
<!-- /wp:paragraph --><cite>Haruka Mori, head teacher</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-cell sj-cell--spring sj-sticker sj-kana-ra","layout":{"type":"default"}} -->
<div class="wp-block-group sj-cell sj-cell--spring sj-sticker sj-kana-ra"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sj-cell__img"} -->
<figure class="wp-block-image size-large sj-cell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/spring.jpg' ) ); ?>" alt="A black bicycle leaning on a white wall under a cherry tree in full bloom"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sj-cell__caption"} -->
<p class="sj-cell__caption">Our street in April</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card sj-cell sj-cell--online","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card sj-cell sj-cell--online"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sj-cell__img"} -->
<figure class="wp-block-image size-large sj-cell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/online.jpg' ) ); ?>" alt="A student with headphones at a white desk joining a video lesson, a sprig of cherry blossom beside the laptop"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sj-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group sj-cell__body"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Online</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sj-cell__title"} -->
<h3 class="wp-block-heading sj-cell__title">Online evenings</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Live lessons from Room Sakura to your kitchen table, with the same teachers and the same small groups.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-more"} -->
<p class="sj-more"><a href="/courses/">See the online course</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-blush sj-cell sj-cell--trial sj-sticker sj-kana-hi","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-blush sj-cell sj-cell--trial sj-sticker sj-kana-hi"><!-- wp:heading {"level":3,"className":"sj-cell__title"} -->
<h3 class="wp-block-heading sj-cell__title">Your first lesson is free.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Sit in on a real class, meet the teacher and ask anything. No textbook, no test, no pressure.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Book a free trial lesson</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card sj-cell sj-cell--stats","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card sj-cell sj-cell--stats"><!-- wp:group {"className":"sj-stat","layout":{"type":"default"}} -->
<div class="wp-block-group sj-stat"><!-- wp:paragraph {"className":"sj-stat__num"} -->
<p class="sj-stat__num">12</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-stat__text"} -->
<p class="sj-stat__text">students per class, at most</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-stat","layout":{"type":"default"}} -->
<div class="wp-block-group sj-stat"><!-- wp:paragraph {"className":"sj-stat__num"} -->
<p class="sj-stat__num">8</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-stat__text"} -->
<p class="sj-stat__text">teachers, all trained to teach Japanese</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-stat","layout":{"type":"default"}} -->
<div class="wp-block-group sj-stat"><!-- wp:paragraph {"className":"sj-stat__num"} -->
<p class="sj-stat__num">31</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-stat__text"} -->
<p class="sj-stat__text">countries our students come from</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card sj-cell sj-cell--journal","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card sj-cell sj-cell--journal"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">From the journal</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":2,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"sj-mini-journal"} -->
<div class="wp-block-query sj-mini-journal"><!-- wp:post-template -->
<!-- wp:group {"className":"sj-mini-journal__item","layout":{"type":"default"}} -->
<div class="wp-block-group sj-mini-journal__item"><!-- wp:post-date {"format":"j M"} /-->

<!-- wp:group {"className":"sj-mini-journal__text","layout":{"type":"default"}} -->
<div class="wp-block-group sj-mini-journal__text"><!-- wp:post-title {"isLink":true,"level":3} /-->

<!-- wp:post-excerpt {"excerptLength":18} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"sj-more"} -->
<p class="sj-more"><a href="/journal/">Read the school journal</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-cell sj-cell--group sj-sticker sj-kana-ne","layout":{"type":"default"}} -->
<div class="wp-block-group sj-cell sj-cell--group sj-sticker sj-kana-ne"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sj-cell__img"} -->
<figure class="wp-block-image size-large sj-cell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/group.jpg' ) ); ?>" alt="Four students laughing over notebooks at a long table, a vase of cherry blossoms between them"/></figure>
<!-- /wp:image -->

<!-- wp:quote {"className":"sj-cell__quote sj-cell__quote--over"} -->
<blockquote class="wp-block-quote sj-cell__quote sj-cell__quote--over"><!-- wp:paragraph -->
<p>I came for the grammar and stayed for the Friday tea.</p>
<!-- /wp:paragraph --><cite>Lucas, Bud level</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
