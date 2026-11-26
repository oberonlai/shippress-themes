<?php
/**
 * Title: Page: college letter
 * Slug: kikan-college/page-newsletter
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: College letter: what it holds, how to ask for it, and the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero kc-hero--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero kc-hero--in">
<!-- wp:group {"className":"kc-window kc-window--in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-window kc-window--in">
<!-- wp:group {"className":"kc-hero__panel-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__panel-wrap">
<!-- wp:group {"className":"kc-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__panel">
<!-- wp:group {"className":"kc-rail","layout":{"type":"default"}} -->
<div class="wp-block-group kc-rail">
<!-- wp:paragraph {"className":"kc-rail__l"} -->
<p class="kc-rail__l"><?php echo esc_html( kikan_college_t( 'newsletter_rail' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__text">
<!-- wp:heading {"level":1,"className":"kc-hero__h1 kc-ihead__h1"} -->
<h1 class="wp-block-heading kc-hero__h1 kc-ihead__h1"><?php echo esc_html( kikan_college_t( 'newsletter_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-bar" aria-hidden="true"></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-hero__lede"} -->
<p class="kc-hero__lede"><?php echo esc_html( kikan_college_t( 'newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__photo sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-hero__img"} -->
<figure class="wp-block-image size-full kc-hero__img"><img src="<?php echo kikan_college_img( 'day-logbook.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_day3' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-hero__strip","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__strip">
<!-- wp:paragraph {"className":"kc-hero__strip-l"} -->
<p class="kc-hero__strip-l"><?php echo esc_html( kikan_college_t( 'newsletter_strip' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-head sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"kc-head__n"} -->
<p class="kc-head__n">01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo esc_html( kikan_college_t( 'newsletter_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-rule" aria-hidden="true"></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-prose","layout":{"type":"default"}} -->
<div class="wp-block-group kc-prose">
<!-- wp:paragraph {"className":"kc-prose__p"} -->
<p class="kc-prose__p"><?php echo esc_html( kikan_college_t( 'newsletter_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-prose__p"} -->
<p class="kc-prose__p"><?php echo esc_html( kikan_college_t( 'newsletter_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"subscribe","align":"full","className":"kc-sec kc-sec--tint","layout":{"type":"default"}} -->
<section id="subscribe" class="wp-block-group alignfull kc-sec kc-sec--tint">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head">
<!-- wp:paragraph {"className":"kc-head__n"} -->
<p class="kc-head__n">02</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo esc_html( kikan_college_t( 'newsletter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-rule" aria-hidden="true"></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-prose","layout":{"type":"default"}} -->
<div class="wp-block-group kc-prose">
<!-- wp:paragraph {"className":"kc-prose__p"} -->
<p class="kc-prose__p"><?php echo esc_html( kikan_college_t( 'newsletter_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-prose__p"} -->
<p class="kc-prose__p"><?php echo esc_html( kikan_college_t( 'newsletter_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-formpanel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-formpanel">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@kikan-college.example', 'label' => kikan_college_t( 'forms_email' ), 'submit' => kikan_college_t( 'forms_subscribe' ), 'notice' => kikan_college_t( 'forms_mail_notice' ), 'subject' => kikan_college_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-head sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"kc-head__n"} -->
<p class="kc-head__n">03</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo esc_html( kikan_college_t( 'newsletter_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-rule" aria-hidden="true"></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-prose","layout":{"type":"default"}} -->
<div class="wp-block-group kc-prose">
<!-- wp:paragraph {"className":"kc-prose__p"} -->
<p class="kc-prose__p"><?php echo esc_html( kikan_college_t( 'newsletter_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-prose__p"} -->
<p class="kc-prose__p"><?php echo esc_html( kikan_college_t( 'newsletter_s3_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
