<?php
/**
 * Title: Home: two mirrored people rows
 * Slug: meguri-waste/front-people
 * Categories: meguri-waste
 * Viewport Width: 1440
 * Description: Ruled head and two horizontal rows, picture one side and a short quote the other, mirrored.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"people","className":"mw-sec mw-people","layout":{"type":"default"}} -->
<section id="people" class="wp-block-group alignfull mw-sec mw-people"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'people_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"mw-person sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-person sp-reveal sp-reveal--down"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-person__pic"} -->
<figure class="wp-block-image size-full mw-person__pic"><img src="<?php echo meguri_waste_img( 'p06' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p06' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mw-person__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-person__text"><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'pe1_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mw-person__role"} -->
<p class="mw-person__role"><?php echo esc_html( meguri_waste_t( 'pe1_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'pe1_q' ) ); ?></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mw-person mw-person--rev sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-person mw-person--rev sp-reveal sp-reveal--down"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-person__pic"} -->
<figure class="wp-block-image size-full mw-person__pic"><img src="<?php echo meguri_waste_img( 'p07' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p07' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mw-person__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-person__text"><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'pe2_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mw-person__role"} -->
<p class="mw-person__role"><?php echo esc_html( meguri_waste_t( 'pe2_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'pe2_q' ) ); ?></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mw-more"} -->
<p class="mw-more"><a href="/about/"><?php echo esc_html( meguri_waste_t( 'people_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
