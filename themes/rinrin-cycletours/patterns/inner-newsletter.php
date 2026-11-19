<?php
/**
 * Title: Page: Newsletter
 * Slug: rinrin-cycletours/inner-newsletter
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Newsletter: quay hero, stepped intro, what the monthly letter holds and the subscribe slot (email and submit, with or without a plugin).
 */
?>
<!-- wp:group {"className":"rc-ihero sp-parallax","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-ihero sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-ihero__img"} -->
<figure class="wp-block-image size-full rc-ihero__img"><img src="<?php echo rinrin_cycletours_img( 'tour-longcoast.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_longcoast' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rc-ihero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group rc-ihero__inner"><!-- wp:heading {"level":1,"className":"rc-ihero__title"} -->
<h1 class="wp-block-heading rc-ihero__title"><?php echo esc_html( rinrin_cycletours_t( 'newsletter_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-istep","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-istep"><!-- wp:group {"className":"rc-istep__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-istep__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'foot_news_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rc-istep__h"} -->
<h2 class="wp-block-heading rc-istep__h"><span class="rc-step rc-step--1"><?php echo esc_html( rinrin_cycletours_t( 'newsletter_st1' ) ); ?></span><span class="rc-step rc-step--2"><?php echo esc_html( rinrin_cycletours_t( 'newsletter_st2' ) ); ?></span><span class="rc-step rc-step--3"><?php echo esc_html( rinrin_cycletours_t( 'newsletter_st3' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-istep__p"} -->
<p class="rc-istep__p"><?php echo esc_html( rinrin_cycletours_t( 'newsletter_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-isecs"><!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'newsletter_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'newsletter_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs rc-isecs--form","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-isecs rc-isecs--form"><!-- wp:group {"className":"rc-isec","anchor":"subscribe","layout":{"type":"default"}} -->
<div id="subscribe" class="wp-block-group rc-isec"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'newsletter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'newsletter_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"rc-formwrap rc-formwrap--news","layout":{"type":"default"}} -->
<div class="wp-block-group rc-formwrap rc-formwrap--news"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@rinrin-cycletours.example', 'label' => rinrin_cycletours_t( 'forms_email' ), 'submit' => rinrin_cycletours_t( 'forms_subscribe' ), 'notice' => rinrin_cycletours_t( 'forms_mail_notice' ), 'subject' => rinrin_cycletours_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
