<?php
/**
 * Title: Home: projects
 * Slug: yuka-tiles/front-projects
 * Categories: yuka-tiles
 * Viewport Width: 1440
 * Description: Three equal flush project cards: photograph, name, range and a short note.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"projects","className":"yt-sec yt-projects","layout":{"type":"default"}} -->
<section id="projects" class="wp-block-group yt-sec yt-projects">
<!-- wp:group {"align":"wide","className":"yt-wrap yt-wrap--w","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yt-wrap yt-wrap--w">
<!-- wp:group {"className":"yt-projects__head","layout":{"type":"default"}} -->
<div class="wp-block-group yt-projects__head">
<!-- wp:group {"className":"yt-projects__title","layout":{"type":"default"}} -->
<div class="wp-block-group yt-projects__title">
<!-- wp:paragraph {"className":"yt-label"} -->
<p class="yt-label"><?php echo esc_html( yuka_tiles_t( 'pj_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"yt-h2"} -->
<h2 class="wp-block-heading yt-h2"><?php echo esc_html( yuka_tiles_t( 'pj_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"yt-more"} -->
<p class="yt-more"><a href="/projects/"><?php echo esc_html( yuka_tiles_t( 'pj_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yt-cards sp-stagger">
<!-- wp:group {"className":"yt-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-card sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-card__img"} -->
<figure class="wp-block-image size-full yt-card__img"><img src="<?php echo yuka_tiles_img( 'project-kitchen.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_c1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group yt-card__body">
<!-- wp:heading {"level":3,"className":"yt-card__t"} -->
<h3 class="wp-block-heading yt-card__t"><a href="/projects/#kitchen"><?php echo esc_html( yuka_tiles_t( 'pj_t1' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-card__m"} -->
<p class="yt-card__m"><?php echo esc_html( yuka_tiles_t( 'pj_m1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-card__n"} -->
<p class="yt-card__n"><?php echo esc_html( yuka_tiles_t( 'pj_n1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-card sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-card__img"} -->
<figure class="wp-block-image size-full yt-card__img"><img src="<?php echo yuka_tiles_img( 'project-stair.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_c2' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group yt-card__body">
<!-- wp:heading {"level":3,"className":"yt-card__t"} -->
<h3 class="wp-block-heading yt-card__t"><a href="/projects/#stair"><?php echo esc_html( yuka_tiles_t( 'pj_t2' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-card__m"} -->
<p class="yt-card__m"><?php echo esc_html( yuka_tiles_t( 'pj_m2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-card__n"} -->
<p class="yt-card__n"><?php echo esc_html( yuka_tiles_t( 'pj_n2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-card sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-card__img"} -->
<figure class="wp-block-image size-full yt-card__img"><img src="<?php echo yuka_tiles_img( 'project-bakery.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_c3' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group yt-card__body">
<!-- wp:heading {"level":3,"className":"yt-card__t"} -->
<h3 class="wp-block-heading yt-card__t"><a href="/projects/#bakery"><?php echo esc_html( yuka_tiles_t( 'pj_t3' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-card__m"} -->
<p class="yt-card__m"><?php echo esc_html( yuka_tiles_t( 'pj_m3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-card__n"} -->
<p class="yt-card__n"><?php echo esc_html( yuka_tiles_t( 'pj_n3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
