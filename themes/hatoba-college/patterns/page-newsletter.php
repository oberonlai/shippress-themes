<?php
/**
 * Title: Page: Newsletter
 * Slug: hatoba-college/page-newsletter
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Inserter: no
 * Description: Newsletter page: inner window hero, what the monthly email carries, and a navy subscribe band with the newsletter form slot (mailto request without plugins).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-hero hc-hero--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-hero hc-hero--in"><!-- wp:group {"className":"hc-frame","layout":{"type":"default"}} -->
<div class="wp-block-group hc-frame"><!-- wp:group {"className":"hc-window","layout":{"type":"default"}} -->
<div class="wp-block-group hc-window"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-still"} -->
<figure class="wp-block-image size-full hc-still"><img src="<?php echo hatoba_college_img( 'p06-quay-morning.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p06' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-capbar","layout":{"type":"default"}} -->
<div class="wp-block-group hc-capbar"><!-- wp:paragraph {"className":"hc-cap is-active"} -->
<p class="hc-cap is-active"><?php echo esc_html( hatoba_college_t( 'nl_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hc-ticks" style="--hc-fill:0%" aria-hidden="true"><span class="hc-ticks__fill"></span><ol class="hc-ticks__list"><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>1</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>4</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>8</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>12</span></li></ol><span class="hc-ticks__note"><?php echo esc_html( hatoba_college_t( 'nl_note' ) ); ?></span></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hc-hero__row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hero__row"><!-- wp:heading {"level":1,"className":"hc-h1 hc-h1--in"} -->
<h1 class="wp-block-heading hc-h1 hc-h1--in"><?php echo esc_html( hatoba_college_t( 'nl_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-lede"} -->
<p class="hc-lede"><?php echo esc_html( hatoba_college_t( 'nl_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"send","className":"hc-sec hc-text","layout":{"type":"default"}} -->
<section id="send" class="wp-block-group alignfull hc-sec hc-text"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'nl_t1_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'nl_t1_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'nl_t1_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'nl_t1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"subscribe","className":"hc-sec hc-newsletter hc-newsletter--page","layout":{"type":"default"}} -->
<section id="subscribe" class="wp-block-group alignfull hc-sec hc-newsletter hc-newsletter--page"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title hc-title--dark","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title hc-title--dark"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'nl_t2_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'nl_t2_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'nl_s_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-body hc-newsletter__p"} -->
<p class="hc-body hc-newsletter__p"><?php echo esc_html( hatoba_college_t( 'nl_s_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-newsletter__form","layout":{"type":"default"}} -->
<div class="wp-block-group hc-newsletter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'admissions@hatoba-college.example',
	'label'   => hatoba_college_t( 'forms_email' ),
	'submit'  => hatoba_college_t( 'forms_subscribe' ),
	'notice'  => hatoba_college_t( 'forms_mail_notice' ),
	'subject' => hatoba_college_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
