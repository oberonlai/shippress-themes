<?php
/**
 * Title: Home: the day strip
 * Slug: kikan-college/front-day
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: Proportional day strip with a time line, the Friday strip and three day columns.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"day","align":"full","className":"kc-sec kc-day","layout":{"type":"default"}} -->
<section id="day" class="wp-block-group alignfull kc-sec kc-day">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-head sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"kc-head__n"} -->
<p class="kc-head__n"><?php echo esc_html( kikan_college_t( 'day_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo esc_html( kikan_college_t( 'day_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-rule" aria-hidden="true"></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo esc_html( kikan_college_t( 'day_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-dayblock","layout":{"type":"default"}} -->
<div class="wp-block-group kc-dayblock">
<!-- wp:html -->
<div class="kc-ticks" aria-hidden="true"><span class="kc-tick kc-tick--0"><?php echo esc_html( kikan_college_t( 'tick0' ) ); ?></span><span class="kc-tick kc-tick--1"><?php echo esc_html( kikan_college_t( 'tick1' ) ); ?></span><span class="kc-tick kc-tick--2"><?php echo esc_html( kikan_college_t( 'tick2' ) ); ?></span><span class="kc-tick kc-tick--3"><?php echo esc_html( kikan_college_t( 'tick3' ) ); ?></span><span class="kc-tick kc-tick--4"><?php echo esc_html( kikan_college_t( 'tick4' ) ); ?></span><span class="kc-tick kc-tick--5"><?php echo esc_html( kikan_college_t( 'tick5' ) ); ?></span><span class="kc-tick kc-tick--6"><?php echo esc_html( kikan_college_t( 'tick6' ) ); ?></span><span class="kc-tick kc-tick--7"><?php echo esc_html( kikan_college_t( 'tick7' ) ); ?></span></div>
<!-- /wp:html -->
<!-- wp:group {"className":"kc-daystrip","layout":{"type":"default"}} -->
<div class="wp-block-group kc-daystrip">
<!-- wp:group {"className":"kc-seg kc-seg--tint kc-seg--1","layout":{"type":"default"}} -->
<div class="wp-block-group kc-seg kc-seg--tint kc-seg--1">
<!-- wp:paragraph {"className":"kc-seg__l kc-vh"} -->
<p class="kc-seg__l kc-vh"><?php echo esc_html( kikan_college_t( 'seg1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-seg__t"} -->
<p class="kc-seg__t"><?php echo esc_html( kikan_college_t( 'seg1_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-seg kc-seg--primary kc-seg--2","layout":{"type":"default"}} -->
<div class="wp-block-group kc-seg kc-seg--primary kc-seg--2">
<!-- wp:paragraph {"className":"kc-seg__l"} -->
<p class="kc-seg__l"><?php echo esc_html( kikan_college_t( 'seg2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-seg__t"} -->
<p class="kc-seg__t"><?php echo esc_html( kikan_college_t( 'seg2_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-seg kc-seg--tint kc-seg--3","layout":{"type":"default"}} -->
<div class="wp-block-group kc-seg kc-seg--tint kc-seg--3">
<!-- wp:paragraph {"className":"kc-seg__l kc-vh"} -->
<p class="kc-seg__l kc-vh"><?php echo esc_html( kikan_college_t( 'seg3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-seg__t"} -->
<p class="kc-seg__t"><?php echo esc_html( kikan_college_t( 'seg3_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-seg kc-seg--primary kc-seg--4","layout":{"type":"default"}} -->
<div class="wp-block-group kc-seg kc-seg--primary kc-seg--4">
<!-- wp:paragraph {"className":"kc-seg__l"} -->
<p class="kc-seg__l"><?php echo esc_html( kikan_college_t( 'seg4_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-seg__t"} -->
<p class="kc-seg__t"><?php echo esc_html( kikan_college_t( 'seg4_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-seg kc-seg--tint kc-seg--5","layout":{"type":"default"}} -->
<div class="wp-block-group kc-seg kc-seg--tint kc-seg--5">
<!-- wp:paragraph {"className":"kc-seg__l"} -->
<p class="kc-seg__l"><?php echo esc_html( kikan_college_t( 'seg5_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-seg__t"} -->
<p class="kc-seg__t"><?php echo esc_html( kikan_college_t( 'seg5_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-seg kc-seg--panel kc-seg--6","layout":{"type":"default"}} -->
<div class="wp-block-group kc-seg kc-seg--panel kc-seg--6">
<!-- wp:paragraph {"className":"kc-seg__l"} -->
<p class="kc-seg__l"><?php echo esc_html( kikan_college_t( 'seg6_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-seg__t"} -->
<p class="kc-seg__t"><?php echo esc_html( kikan_college_t( 'seg6_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-seg kc-seg--copper kc-seg--7","layout":{"type":"default"}} -->
<div class="wp-block-group kc-seg kc-seg--copper kc-seg--7">
<!-- wp:paragraph {"className":"kc-seg__l"} -->
<p class="kc-seg__l"><?php echo esc_html( kikan_college_t( 'seg7_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-seg__t"} -->
<p class="kc-seg__t"><?php echo esc_html( kikan_college_t( 'seg7_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-legend"} -->
<p class="kc-legend"><?php echo esc_html( kikan_college_t( 'day_legend' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-fri","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fri">
<!-- wp:paragraph {"className":"kc-fri__l"} -->
<p class="kc-fri__l"><?php echo esc_html( kikan_college_t( 'fri_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-daystrip kc-daystrip--fri","layout":{"type":"default"}} -->
<div class="wp-block-group kc-daystrip kc-daystrip--fri">
<!-- wp:group {"className":"kc-seg kc-seg--primary kc-fri--1","layout":{"type":"default"}} -->
<div class="wp-block-group kc-seg kc-seg--primary kc-fri--1">
<!-- wp:paragraph {"className":"kc-seg__l"} -->
<p class="kc-seg__l"><?php echo esc_html( kikan_college_t( 'fri1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-seg__t"} -->
<p class="kc-seg__t"><?php echo esc_html( kikan_college_t( 'fri1_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-seg kc-seg--tint kc-fri--2","layout":{"type":"default"}} -->
<div class="wp-block-group kc-seg kc-seg--tint kc-fri--2">
<!-- wp:paragraph {"className":"kc-seg__l kc-vh"} -->
<p class="kc-seg__l kc-vh"><?php echo esc_html( kikan_college_t( 'fri2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-seg__t"} -->
<p class="kc-seg__t"><?php echo esc_html( kikan_college_t( 'fri2_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-seg kc-seg--panel kc-fri--3","layout":{"type":"default"}} -->
<div class="wp-block-group kc-seg kc-seg--panel kc-fri--3">
<!-- wp:paragraph {"className":"kc-seg__l"} -->
<p class="kc-seg__l"><?php echo esc_html( kikan_college_t( 'fri3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-seg__t"} -->
<p class="kc-seg__t"><?php echo esc_html( kikan_college_t( 'fri3_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-cols sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cols sp-stagger">
<!-- wp:group {"className":"kc-col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-ph kc-ph--43"} -->
<figure class="wp-block-image size-full kc-ph kc-ph--43"><img src="<?php echo kikan_college_img( 'day-morning.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_day1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"kc-col__h"} -->
<h3 class="wp-block-heading kc-col__h"><?php echo esc_html( kikan_college_t( 'day_c1_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-col__p"} -->
<p class="kc-col__p"><?php echo esc_html( kikan_college_t( 'day_c1_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-ph kc-ph--43"} -->
<figure class="wp-block-image size-full kc-ph kc-ph--43"><img src="<?php echo kikan_college_img( 'day-rig.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_day2' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"kc-col__h"} -->
<h3 class="wp-block-heading kc-col__h"><?php echo esc_html( kikan_college_t( 'day_c2_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-col__p"} -->
<p class="kc-col__p"><?php echo esc_html( kikan_college_t( 'day_c2_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-ph kc-ph--43"} -->
<figure class="wp-block-image size-full kc-ph kc-ph--43"><img src="<?php echo kikan_college_img( 'day-logbook.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_day3' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"kc-col__h"} -->
<h3 class="wp-block-heading kc-col__h"><?php echo esc_html( kikan_college_t( 'day_c3_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-col__p"} -->
<p class="kc-col__p"><?php echo esc_html( kikan_college_t( 'day_c3_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
