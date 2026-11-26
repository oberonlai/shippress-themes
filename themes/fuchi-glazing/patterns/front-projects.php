<?php
/**
 * Title: Home: recent projects, asymmetric masonry
 * Slug: fuchi-glazing/front-projects
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Three columns of different photograph ratios, pushed down by different amounts, with name, story and a fact line under each.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"projects","align":"full","className":"fg-sec fg-sec--projects","layout":{"type":"default"}} -->
<section id="projects" class="wp-block-group alignfull fg-sec fg-sec--projects">
<!-- wp:group {"className":"fg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap">
<!-- wp:heading {"textAlign":"center","className":"fg-h2"} -->
<h2 class="wp-block-heading has-text-align-center fg-h2"><?php echo esc_html( fuchi_glazing_t( 'pj_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"fg-masonry sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group fg-masonry sp-stagger">
<!-- wp:group {"className":"fg-proj fg-proj--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fg-proj fg-proj--1 sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"4/5","scale":"cover","className":"fg-proj__img"} -->
<figure class="wp-block-image size-full fg-proj__img"><img src="<?php echo fuchi_glazing_img( 'project-bakery.webp' ); ?>" alt="<?php echo fuchi_glazing_a( 'alt_p14' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"fg-proj__t"} -->
<h3 class="wp-block-heading fg-proj__t"><?php echo esc_html( fuchi_glazing_t( 'pj_t1' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-proj__x"} -->
<p class="fg-proj__x"><?php echo esc_html( fuchi_glazing_t( 'pj_x1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-proj__f"} -->
<p class="fg-proj__f"><?php echo esc_html( fuchi_glazing_t( 'pj_f1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-proj fg-proj--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fg-proj fg-proj--2 sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"1/1","scale":"cover","className":"fg-proj__img"} -->
<figure class="wp-block-image size-full fg-proj__img"><img src="<?php echo fuchi_glazing_img( 'project-dental.webp' ); ?>" alt="<?php echo fuchi_glazing_a( 'alt_p15' ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"fg-proj__t"} -->
<h3 class="wp-block-heading fg-proj__t"><?php echo esc_html( fuchi_glazing_t( 'pj_t2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-proj__x"} -->
<p class="fg-proj__x"><?php echo esc_html( fuchi_glazing_t( 'pj_x2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-proj__f"} -->
<p class="fg-proj__f"><?php echo esc_html( fuchi_glazing_t( 'pj_f2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-proj fg-proj--3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fg-proj fg-proj--3 sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"3/2","scale":"cover","className":"fg-proj__img"} -->
<figure class="wp-block-image size-full fg-proj__img"><img src="<?php echo fuchi_glazing_img( 'project-hardware.webp' ); ?>" alt="<?php echo fuchi_glazing_a( 'alt_p16' ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"fg-proj__t"} -->
<h3 class="wp-block-heading fg-proj__t"><?php echo esc_html( fuchi_glazing_t( 'pj_t3' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-proj__x"} -->
<p class="fg-proj__x"><?php echo esc_html( fuchi_glazing_t( 'pj_x3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-proj__f"} -->
<p class="fg-proj__f"><?php echo esc_html( fuchi_glazing_t( 'pj_f3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"fg-more","align":"center"} -->
<p class="fg-more has-text-align-center"><a href="/projects/"><?php echo esc_html( fuchi_glazing_t( 'pj_more' ) ); ?> &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
