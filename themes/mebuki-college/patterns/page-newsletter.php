<?php
/**
 * Title: Page: newsletter
 * Slug: mebuki-college/page-newsletter
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Description: Open-day letters page: a text page with a full-width parallax photo band and the newsletter form on a white panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-ph mb-ph--text","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-ph mb-ph--text"><!-- wp:group {"className":"mb-ph__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-ph__text"><!-- wp:paragraph {"className":"mb-pill mb-pill--left"} -->
<p class="mb-pill mb-pill--left"><?php echo esc_html( mebuki_college_t( 'i_nl_hero_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"level":1,"className":"mb-ph__h"} /-->
<!-- wp:paragraph {"className":"mb-ph__lead"} -->
<p class="mb-ph__lead"><?php echo esc_html( mebuki_college_t( 'i_nl_hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'i_nl_s0_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'i_nl_s0_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_nl_s0_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-garden mb-garden--s sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-garden mb-garden--s sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-garden__img"} -->
<figure class="wp-block-image size-full mb-garden__img"><img src="<?php echo mebuki_college_img( 'p07-coat-pegs.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"mb-garden__card","layout":{"type":"default"}} -->
<div class="wp-block-group mb-garden__card"><!-- wp:paragraph {"className":"mb-eyebrow"} -->
<p class="mb-eyebrow"><?php echo esc_html( mebuki_college_t( 'i_nl_band_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-garden__p"} -->
<p class="mb-garden__p"><?php echo esc_html( mebuki_college_t( 'i_nl_band_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec mb-sec--wash","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec mb-sec--wash"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-sechead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-sechead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'i_nl_s1_pill' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'i_nl_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-prosecol sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-prosecol sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-prose"} -->
<p class="mb-prose"><?php echo esc_html( mebuki_college_t( 'i_nl_s1_b_0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-formwrap"><!-- wp:group {"className":"mb-letters mb-letters--page","layout":{"type":"default"}} -->
<div class="wp-block-group mb-letters mb-letters--page"><!-- wp:heading {"level":3,"className":"mb-card__h mb-letters__h"} -->
<h3 class="wp-block-heading mb-card__h mb-letters__h"><?php echo esc_html( mebuki_college_t( 'letters_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-letters__p"} -->
<p class="mb-letters__p"><?php echo esc_html( mebuki_college_t( 'letters_p' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'admissions@mebukicollege.example', 'label' => mebuki_college_t( 'forms_email' ), 'submit' => mebuki_college_t( 'forms_subscribe' ), 'notice' => mebuki_college_t( 'forms_mail_notice' ), 'subject' => mebuki_college_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
