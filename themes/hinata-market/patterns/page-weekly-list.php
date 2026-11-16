<?php
/**
 * Title: Page: Weekly list
 * Slug: hinata-market/page-weekly-list
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Inserter: no
 * Description: Four rows on what each Thursday issue contains, the newsletter slot on a dark panel and the privacy note.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-cols hm-cols--head hm-ihead","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-cols hm-cols--head hm-ihead"><!-- wp:group {"className":"hm-col hm-col--main","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--main"><!-- wp:paragraph {"className":"hm-label"} -->
<p class="hm-label"><span class="hm-label__dot">H</span><span><?php echo esc_html( hinata_market_t( 'wl_label' ) ); ?></span><span class="hm-label__dot">M</span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hm-h1"} -->
<h1 class="wp-block-heading hm-h1"><?php echo esc_html( hinata_market_t( 'wl_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-body hm-lead-intro"} -->
<p class="hm-body hm-lead-intro"><?php echo esc_html( hinata_market_t( 'wl_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--right","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--right"><!-- wp:group {"className":"hm-date","layout":{"type":"default"}} -->
<div class="wp-block-group hm-date"><!-- wp:paragraph {"className":"hm-date__year"} -->
<p class="hm-date__year"><?php echo esc_html( hinata_market_t( 'wl_d_year' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-date__row","layout":{"type":"default"}} -->
<div class="wp-block-group hm-date__row"><!-- wp:paragraph {"className":"hm-date__wd"} -->
<p class="hm-date__wd"><?php echo hinata_market_lines( 'wl_d_wd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-date__num","fontSize":"giant"} -->
<p class="hm-date__num"><?php echo esc_html( hinata_market_t( 'wl_d_num' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-date__mo"} -->
<p class="hm-date__mo"><?php echo hinata_market_lines( 'wl_d_mo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-arrow","layout":{"type":"default"}} -->
<div class="wp-block-group hm-arrow"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-cells","layout":{"type":"default"}} -->
<div class="wp-block-group hm-cells"><!-- wp:paragraph {"className":"hm-cell"} -->
<p class="hm-cell"><?php echo esc_html( hinata_market_t( 'wl_d_c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-cell"} -->
<p class="hm-cell"><?php echo esc_html( hinata_market_t( 'wl_d_c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-sec","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hm-sec"><!-- wp:group {"className":"hm-dots hm-dots--cut","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots hm-dots--cut"></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"hm-cols hm-cols--ab hm-prosec","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-cols hm-cols--ab hm-prosec"><!-- wp:group {"className":"hm-col hm-col--left","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--left"><!-- wp:heading {"level":2,"className":"hm-ab__h"} -->
<h2 class="wp-block-heading hm-ab__h"><?php echo esc_html( hinata_market_t( 'wl_s1_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--mid"><!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'wl_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-xrows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hm-xrows sp-stagger"><!-- wp:group {"className":"hm-xrow hm-xrow--nt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hm-xrow hm-xrow--nt sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hm-xrow__k hm-xrow__k--big"} -->
<p class="hm-xrow__k hm-xrow__k--big"><?php echo esc_html( hinata_market_t( 'wl_r1_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-xrow__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-xrow__text"><!-- wp:heading {"level":3,"className":"hm-row__title"} -->
<h3 class="wp-block-heading hm-row__title"><?php echo esc_html( hinata_market_t( 'wl_r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-body hm-xrow__line"} -->
<p class="hm-body hm-xrow__line"><?php echo esc_html( hinata_market_t( 'wl_r1_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-dots","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-xrow hm-xrow--nt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hm-xrow hm-xrow--nt sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hm-xrow__k hm-xrow__k--big"} -->
<p class="hm-xrow__k hm-xrow__k--big"><?php echo esc_html( hinata_market_t( 'wl_r2_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-xrow__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-xrow__text"><!-- wp:heading {"level":3,"className":"hm-row__title"} -->
<h3 class="wp-block-heading hm-row__title"><?php echo esc_html( hinata_market_t( 'wl_r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-body hm-xrow__line"} -->
<p class="hm-body hm-xrow__line"><?php echo esc_html( hinata_market_t( 'wl_r2_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-dots","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-xrow hm-xrow--nt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hm-xrow hm-xrow--nt sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hm-xrow__k hm-xrow__k--big"} -->
<p class="hm-xrow__k hm-xrow__k--big"><?php echo esc_html( hinata_market_t( 'wl_r3_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-xrow__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-xrow__text"><!-- wp:heading {"level":3,"className":"hm-row__title"} -->
<h3 class="wp-block-heading hm-row__title"><?php echo esc_html( hinata_market_t( 'wl_r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-body hm-xrow__line"} -->
<p class="hm-body hm-xrow__line"><?php echo esc_html( hinata_market_t( 'wl_r3_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-dots","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-xrow hm-xrow--nt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hm-xrow hm-xrow--nt sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hm-xrow__k hm-xrow__k--big"} -->
<p class="hm-xrow__k hm-xrow__k--big"><?php echo esc_html( hinata_market_t( 'wl_r4_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-xrow__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-xrow__text"><!-- wp:heading {"level":3,"className":"hm-row__title"} -->
<h3 class="wp-block-heading hm-row__title"><?php echo esc_html( hinata_market_t( 'wl_r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-body hm-xrow__line"} -->
<p class="hm-body hm-xrow__line"><?php echo esc_html( hinata_market_t( 'wl_r4_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-sec","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hm-sec"><!-- wp:group {"className":"hm-dots hm-dots--cut","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots hm-dots--cut"></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"hm-cols hm-cols--solo hm-signupwrap","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-cols hm-cols--solo hm-signupwrap"><!-- wp:group {"className":"hm-col","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col"><!-- wp:group {"className":"hm-dark hm-signup","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dark hm-signup"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@hinata-market.example',
	'label'   => hinata_market_t( 'forms_email' ),
	'submit'  => hinata_market_t( 'forms_subscribe' ),
	'notice'  => hinata_market_t( 'forms_mail_notice' ),
	'subject' => hinata_market_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-sec","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hm-sec"><!-- wp:group {"className":"hm-dots hm-dots--cut","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots hm-dots--cut"></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"hm-cols hm-cols--ab hm-prosec","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-cols hm-cols--ab hm-prosec"><!-- wp:group {"className":"hm-col hm-col--left","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--left"><!-- wp:heading {"level":2,"className":"hm-ab__h"} -->
<h2 class="wp-block-heading hm-ab__h"><?php echo esc_html( hinata_market_t( 'wl_s2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--mid"><!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'wl_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-photo hm-figure"} -->
<figure class="wp-block-image size-full hm-photo hm-figure"><img src="<?php echo hinata_market_img( 'apply-notebook.webp' ); ?>" alt="<?php echo hinata_market_a( 'wl_fig_alt' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group -->
