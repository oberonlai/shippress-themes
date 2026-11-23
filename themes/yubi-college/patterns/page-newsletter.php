<?php
/**
 * Title: Page: term letters
 * Slug: yubi-college/page-newsletter
 * Categories: yubi-college
 * Viewport Width: 1440
 * Inserter: false
 * Description: Standalone term-letters page: a short head, a parallax photograph band, what the letters contain and the newsletter form slot in a pale aqua panel, then the privacy line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-pagehead"><!-- wp:group {"className":"yb-wrap yb-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-pagehead__in"><!-- wp:paragraph {"className":"yb-sub yb-ph__sub"} -->
<p class="yb-sub yb-ph__sub"><?php echo esc_html( yubi_college_t( 'newsletter_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yb-pagehead__h"} -->
<h1 class="wp-block-heading yb-pagehead__h"><?php echo esc_html( yubi_college_t( 'newsletter_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-ph__lead yb-ph__lead--wide"} -->
<p class="yb-ph__lead yb-ph__lead--wide"><?php echo esc_html( yubi_college_t( 'newsletter_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-nlband sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yb-nlband sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-nlband__img"} -->
<figure class="wp-block-image size-full yb-nlband__img"><img src="<?php echo yubi_college_img( 'p15-saturday-room-wide.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","anchor":"letters","className":"yb-sec yb-sec--white yb-sec--in","layout":{"type":"default"}} -->
<section id="letters" class="wp-block-group alignfull yb-sec yb-sec--white yb-sec--in"><!-- wp:group {"className":"yb-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--m"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--m"><?php echo esc_html( yubi_college_t( 'newsletter_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'newsletter_s1_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-prose"} -->
<p class="yb-prose"><?php echo esc_html( yubi_college_t( 'newsletter_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap"><!-- wp:group {"className":"yb-formpanel","layout":{"type":"default"}} -->
<div class="wp-block-group yb-formpanel"><!-- wp:group {"className":"yb-letters","layout":{"type":"default"}} -->
<div class="wp-block-group yb-letters"><!-- wp:group {"className":"yb-letters__txt","layout":{"type":"default"}} -->
<div class="wp-block-group yb-letters__txt"><!-- wp:heading {"level":3,"className":"yb-letters__h"} -->
<h3 class="wp-block-heading yb-letters__h"><?php echo esc_html( yubi_college_t( 'letters_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-letters__p"} -->
<p class="yb-letters__p"><?php echo esc_html( yubi_college_t( 'letters_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@yubicollege.example', 'label' => yubi_college_t( 'forms_email' ), 'submit' => yubi_college_t( 'forms_subscribe' ), 'notice' => yubi_college_t( 'forms_mail_notice' ), 'subject' => yubi_college_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","anchor":"privacy","className":"yb-sec yb-sec--white yb-sec--in","layout":{"type":"default"}} -->
<section id="privacy" class="wp-block-group alignfull yb-sec yb-sec--white yb-sec--in"><!-- wp:group {"className":"yb-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--m"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--m"><?php echo esc_html( yubi_college_t( 'newsletter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'newsletter_s2_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-prose"} -->
<p class="yb-prose"><?php echo esc_html( yubi_college_t( 'newsletter_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
