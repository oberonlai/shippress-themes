<?php
/**
 * Title: Page: programmes
 * Slug: mebuki-college/page-programmes
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Description: Programmes page: split page hero and one mirrored panel card per programme with its entry route, modules and tuition.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-ph","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-ph"><!-- wp:group {"className":"mb-ph__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-ph__text"><!-- wp:paragraph {"className":"mb-pill mb-pill--left"} -->
<p class="mb-pill mb-pill--left"><?php echo esc_html( mebuki_college_t( 'i_prog_hero_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"level":1,"className":"mb-ph__h"} /-->
<!-- wp:paragraph {"className":"mb-ph__lead"} -->
<p class="mb-ph__lead"><?php echo esc_html( mebuki_college_t( 'i_prog_hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-ph__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group mb-ph__photo sp-parallax"><!-- wp:group {"className":"sp-parallax__layer mb-ph__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer mb-ph__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-ph__img"} -->
<figure class="wp-block-image size-full mb-ph__img"><img src="<?php echo mebuki_college_img( 'p09-music-circle.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-cards","layout":{"type":"default"}} -->
<div class="wp-block-group mb-cards"><!-- wp:group {"anchor":"diploma","className":"mb-card sp-stagger","layout":{"type":"default"}} -->
<div id="diploma" class="wp-block-group mb-card sp-stagger"><!-- wp:group {"className":"mb-card__photos sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-card__photos sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-card__img"} -->
<figure class="wp-block-image size-full mb-card__img"><img src="<?php echo mebuki_college_img( 'p11-route-diploma.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-card__img"} -->
<figure class="wp-block-image size-full mb-card__img"><img src="<?php echo mebuki_college_img( 'p05-small-group.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-card__panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-card__panel sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-card__time"} -->
<p class="mb-card__time"><?php echo esc_html( mebuki_college_t( 'i_prog_0_time' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-card__h"} -->
<h2 class="wp-block-heading mb-card__h"><?php echo esc_html( mebuki_college_t( 'i_prog_0_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-card__p"} -->
<p class="mb-card__p"><?php echo esc_html( mebuki_college_t( 'i_prog_0_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<p class="mb-disc"><a href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>" aria-label="<?php echo mebuki_college_a( 'i_prog_0_a' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M2.5 1.5 10 6l-7.5 4.5z" fill="currentColor"/></svg></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_prog_0_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mb-route__price mb-route__price--c"} -->
<p class="mb-route__price mb-route__price--c"><?php echo esc_html( mebuki_college_t( 'i_prog_0_price' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec mb-sec--white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec mb-sec--white"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-cards","layout":{"type":"default"}} -->
<div class="wp-block-group mb-cards"><!-- wp:group {"anchor":"graduate","className":"mb-card sp-stagger mb-card--flip","layout":{"type":"default"}} -->
<div id="graduate" class="wp-block-group mb-card sp-stagger mb-card--flip"><!-- wp:group {"className":"mb-card__photos sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-card__photos sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-card__img"} -->
<figure class="wp-block-image size-full mb-card__img"><img src="<?php echo mebuki_college_img( 'p12-route-graduate.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-card__img"} -->
<figure class="wp-block-image size-full mb-card__img"><img src="<?php echo mebuki_college_img( 'p03-talk-it-through.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-card__panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-card__panel sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-card__time"} -->
<p class="mb-card__time"><?php echo esc_html( mebuki_college_t( 'i_prog_1_time' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-card__h"} -->
<h2 class="wp-block-heading mb-card__h"><?php echo esc_html( mebuki_college_t( 'i_prog_1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-card__p"} -->
<p class="mb-card__p"><?php echo esc_html( mebuki_college_t( 'i_prog_1_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<p class="mb-disc"><a href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>" aria-label="<?php echo mebuki_college_a( 'i_prog_1_a' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M2.5 1.5 10 6l-7.5 4.5z" fill="currentColor"/></svg></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_prog_1_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mb-route__price mb-route__price--c"} -->
<p class="mb-route__price mb-route__price--c"><?php echo esc_html( mebuki_college_t( 'i_prog_1_price' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-cards","layout":{"type":"default"}} -->
<div class="wp-block-group mb-cards"><!-- wp:group {"anchor":"weekend","className":"mb-card sp-stagger","layout":{"type":"default"}} -->
<div id="weekend" class="wp-block-group mb-card sp-stagger"><!-- wp:group {"className":"mb-card__photos sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-card__photos sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-card__img"} -->
<figure class="wp-block-image size-full mb-card__img"><img src="<?php echo mebuki_college_img( 'p13-route-weekend.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-card__img"} -->
<figure class="wp-block-image size-full mb-card__img"><img src="<?php echo mebuki_college_img( 'p15-ines-portrait.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-card__panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-card__panel sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-card__time"} -->
<p class="mb-card__time"><?php echo esc_html( mebuki_college_t( 'i_prog_2_time' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-card__h"} -->
<h2 class="wp-block-heading mb-card__h"><?php echo esc_html( mebuki_college_t( 'i_prog_2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-card__p"} -->
<p class="mb-card__p"><?php echo esc_html( mebuki_college_t( 'i_prog_2_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<p class="mb-disc"><a href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>" aria-label="<?php echo mebuki_college_a( 'i_prog_2_a' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M2.5 1.5 10 6l-7.5 4.5z" fill="currentColor"/></svg></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_prog_2_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mb-route__price mb-route__price--c"} -->
<p class="mb-route__price mb-route__price--c"><?php echo esc_html( mebuki_college_t( 'i_prog_2_price' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mb-textlink mb-textlink--center mb-pad"} -->
<p class="mb-textlink mb-textlink--center mb-pad"><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'i_prog_fees' ) ); ?></a></p>
<!-- /wp:paragraph -->
