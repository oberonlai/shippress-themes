<?php
/**
 * Title: Page: Book a departure
 * Slug: rinrin-cycletours/inner-book
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Booking: quay hero, stepped intro, the five-step ruled list, deposit terms and the booking request form slot with its mailto fallback.
 */
?>
<!-- wp:group {"className":"rc-ihero sp-parallax","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-ihero sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-ihero__img"} -->
<figure class="wp-block-image size-full rc-ihero__img"><img src="<?php echo rinrin_cycletours_img( 'tour-marsh.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_tour_marsh' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rc-ihero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group rc-ihero__inner"><!-- wp:heading {"level":1,"className":"rc-ihero__title"} -->
<h1 class="wp-block-heading rc-ihero__title"><?php echo esc_html( rinrin_cycletours_t( 'book_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-istep","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-istep"><!-- wp:group {"className":"rc-istep__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-istep__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'book_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rc-istep__h"} -->
<h2 class="wp-block-heading rc-istep__h"><span class="rc-step rc-step--1"><?php echo esc_html( rinrin_cycletours_t( 'book_st1' ) ); ?></span><span class="rc-step rc-step--2"><?php echo esc_html( rinrin_cycletours_t( 'book_st2' ) ); ?></span><span class="rc-step rc-step--3"><?php echo esc_html( rinrin_cycletours_t( 'book_st3' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-istep__p"} -->
<p class="rc-istep__p"><?php echo esc_html( rinrin_cycletours_t( 'book_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-isecs"><!-- wp:group {"className":"rc-isec","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'book_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:html -->
<ol class="rc-steps"><li class="rc-steps__i"><span class="rc-steps__n" aria-hidden="true">01</span><span class="rc-steps__t"><?php echo esc_html( rinrin_cycletours_t( 'bk_step1' ) ); ?></span></li><li class="rc-steps__i"><span class="rc-steps__n" aria-hidden="true">02</span><span class="rc-steps__t"><?php echo esc_html( rinrin_cycletours_t( 'bk_step2' ) ); ?></span></li><li class="rc-steps__i"><span class="rc-steps__n" aria-hidden="true">03</span><span class="rc-steps__t"><?php echo esc_html( rinrin_cycletours_t( 'bk_step3' ) ); ?></span></li><li class="rc-steps__i"><span class="rc-steps__n" aria-hidden="true">04</span><span class="rc-steps__t"><?php echo esc_html( rinrin_cycletours_t( 'bk_step4' ) ); ?></span></li><li class="rc-steps__i"><span class="rc-steps__n" aria-hidden="true">05</span><span class="rc-steps__t"><?php echo esc_html( rinrin_cycletours_t( 'bk_step5' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-isecs"><!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'book_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'book_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs rc-isecs--form","tagName":"section","anchor":"request","align":"full","layout":{"type":"default"}} -->
<section id="request" class="wp-block-group alignfull rc-isecs rc-isecs--form"><!-- wp:group {"className":"rc-isec","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'book_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'book_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"rc-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group rc-formwrap"><?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rc-pill rc-pill--fill"} -->
<div class="wp-block-button rc-pill rc-pill--fill"><a class="wp-block-button__link wp-element-button" href="mailto:hello@rinrin-cycletours.example?subject=<?php echo rawurlencode( rinrin_cycletours_t( 'form_booking_subject' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'form_booking_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
