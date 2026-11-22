<?php
/**
 * Title: Page: about
 * Slug: mebuki-college/page-about
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Description: About page: split page hero, the 1987 story, two notched photo cards, how we teach, the campus and the partner settings.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-ph","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-ph"><!-- wp:group {"className":"mb-ph__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-ph__text"><!-- wp:paragraph {"className":"mb-pill mb-pill--left"} -->
<p class="mb-pill mb-pill--left"><?php echo esc_html( mebuki_college_t( 'i_about_hero_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"level":1,"className":"mb-ph__h"} /-->
<!-- wp:paragraph {"className":"mb-ph__lead"} -->
<p class="mb-ph__lead"><?php echo esc_html( mebuki_college_t( 'i_about_hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-ph__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group mb-ph__photo sp-parallax"><!-- wp:group {"className":"sp-parallax__layer mb-ph__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer mb-ph__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-ph__img"} -->
<figure class="wp-block-image size-full mb-ph__img"><img src="<?php echo mebuki_college_img( 'p16-campus-orchard-row.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'i_about_s0_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'i_about_s0_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_about_s0_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec mb-sec--wash","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec mb-sec--wash"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'i_about_t3_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'i_about_t3_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-t3grid mb-t3grid--two sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mb-t3grid mb-t3grid--two sp-stagger"><!-- wp:group {"className":"mb-t3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-t3 sp-reveal sp-reveal--up"><!-- wp:group {"className":"mb-t3__ph","layout":{"type":"default"}} -->
<div class="wp-block-group mb-t3__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-t3__img"} -->
<figure class="wp-block-image size-full mb-t3__img"><img src="<?php echo mebuki_college_img( 'p02-floor-practice.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"mb-t3__tab","layout":{"type":"default"}} -->
<div class="wp-block-group mb-t3__tab"><!-- wp:paragraph {"className":"mb-t3__label"} -->
<p class="mb-t3__label"><?php echo esc_html( mebuki_college_t( 'i_about_t3a_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-t3__sub"} -->
<p class="mb-t3__sub"><?php echo esc_html( mebuki_college_t( 'i_about_t3a_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<p class="mb-disc"><a href="<?php echo esc_url( home_url( '/a-day-on-the-course/' ) ); ?>" aria-label="<?php echo mebuki_college_a( 'i_about_t3a_a' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M2.5 1.5 10 6l-7.5 4.5z" fill="currentColor"/></svg></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mb-t3__text"} -->
<p class="mb-t3__text"><?php echo esc_html( mebuki_college_t( 'i_about_t3a_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-t3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-t3 sp-reveal sp-reveal--up"><!-- wp:group {"className":"mb-t3__ph","layout":{"type":"default"}} -->
<div class="wp-block-group mb-t3__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-t3__img"} -->
<figure class="wp-block-image size-full mb-t3__img"><img src="<?php echo mebuki_college_img( 'p04-studio-water.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"mb-t3__tab","layout":{"type":"default"}} -->
<div class="wp-block-group mb-t3__tab"><!-- wp:paragraph {"className":"mb-t3__label"} -->
<p class="mb-t3__label"><?php echo esc_html( mebuki_college_t( 'i_about_t3b_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-t3__sub"} -->
<p class="mb-t3__sub"><?php echo esc_html( mebuki_college_t( 'i_about_t3b_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<p class="mb-disc"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" aria-label="<?php echo mebuki_college_a( 'i_about_t3b_a' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M2.5 1.5 10 6l-7.5 4.5z" fill="currentColor"/></svg></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mb-t3__text"} -->
<p class="mb-t3__text"><?php echo esc_html( mebuki_college_t( 'i_about_t3b_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'i_about_s1_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'i_about_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_about_s1_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec mb-sec--white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec mb-sec--white"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'i_about_s2_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'i_about_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_about_s2_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'i_about_s3_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'i_about_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_about_s3_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-listwrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-listwrap sp-reveal sp-reveal--up"><!-- wp:list {"className":"mb-list"} -->
<ul class="wp-block-list mb-list"><!-- wp:list-item -->
<li><?php echo esc_html( mebuki_college_t( 'i_about_set0' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mebuki_college_t( 'i_about_set1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mebuki_college_t( 'i_about_set2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mebuki_college_t( 'i_about_set3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mebuki_college_t( 'i_about_set4' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mebuki_college_t( 'i_about_set5' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mb-textlink mb-textlink--center"} -->
<p class="mb-textlink mb-textlink--center"><a href="<?php echo esc_url( home_url( '/tutors/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'i_about_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
