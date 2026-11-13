<?php
/**
 * Title: Page: Visit and contact
 * Slug: hatoba-college/page-visit
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Inserter: no
 * Description: Visit page: inner window hero, address and hours, the open quay Saturday with a photograph, three loop-numbered directions, and the contact form slot with a mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-hero hc-hero--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-hero hc-hero--in"><!-- wp:group {"className":"hc-frame","layout":{"type":"default"}} -->
<div class="wp-block-group hc-frame"><!-- wp:group {"className":"hc-window","layout":{"type":"default"}} -->
<div class="wp-block-group hc-window"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-still"} -->
<figure class="wp-block-image size-full hc-still"><img src="<?php echo hatoba_college_img( 'p02-mooring-line.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-capbar","layout":{"type":"default"}} -->
<div class="wp-block-group hc-capbar"><!-- wp:paragraph {"className":"hc-cap is-active"} -->
<p class="hc-cap is-active"><?php echo esc_html( hatoba_college_t( 'vi_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hc-ticks" style="--hc-fill:0%" aria-hidden="true"><span class="hc-ticks__fill"></span><ol class="hc-ticks__list"><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>1</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>4</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>8</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>12</span></li></ol><span class="hc-ticks__note"><?php echo esc_html( hatoba_college_t( 'vi_note' ) ); ?></span></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hc-hero__row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hero__row"><!-- wp:heading {"level":1,"className":"hc-h1 hc-h1--in"} -->
<h1 class="wp-block-heading hc-h1 hc-h1--in"><?php echo esc_html( hatoba_college_t( 'vi_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-lede"} -->
<p class="hc-lede"><?php echo esc_html( hatoba_college_t( 'vi_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"address","className":"hc-sec hc-text","layout":{"type":"default"}} -->
<section id="address" class="wp-block-group alignfull hc-sec hc-text"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'vi_t1_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'vi_t1_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'vi_a_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-split hc-split--text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split hc-split--text"><!-- wp:group {"className":"hc-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split__text"><!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'vi_a_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-hoursbox","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hoursbox"><!-- wp:paragraph {"className":"hc-smalllabel"} -->
<p class="hc-smalllabel"><?php echo esc_html( hatoba_college_t( 'f_addr_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-stat__note"} -->
<p class="hc-stat__note"><?php echo esc_html( hatoba_college_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-smalllabel"} -->
<p class="hc-smalllabel"><?php echo esc_html( hatoba_college_t( 'f_hours_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-stat__note"} -->
<p class="hc-stat__note"><?php echo esc_html( hatoba_college_t( 'f_hours1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-stat__note"} -->
<p class="hc-stat__note"><?php echo esc_html( hatoba_college_t( 'f_hours2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-stat__note"} -->
<p class="hc-stat__note"><?php echo esc_html( hatoba_college_t( 'f_hours3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"quay","className":"hc-sec hc-facility","layout":{"type":"default"}} -->
<section id="quay" class="wp-block-group alignfull hc-sec hc-facility"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'vi_t2_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'vi_t2_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'vi_q_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-split sp-reveal sp-reveal--up hc-split--flip","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split sp-reveal sp-reveal--up hc-split--flip"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hc-split__photo"} -->
<figure class="wp-block-image size-large hc-split__photo"><img src="<?php echo hatoba_college_img( 'p11-open-quay.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split__text"><!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'vi_q_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"find","className":"hc-sec hc-text hc-find","layout":{"type":"default"}} -->
<section id="find" class="wp-block-group alignfull hc-sec hc-text hc-find"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'vi_t3_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'vi_t3_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'vi_f_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-find__list","layout":{"type":"default"}} -->
<div class="wp-block-group hc-find__list"><!-- wp:group {"className":"hc-find__item","layout":{"type":"default"}} -->
<div class="wp-block-group hc-find__item"><!-- wp:html -->
<p class="hc-find__n"><svg class="hc-loop" width="28" height="16" viewBox="0 0 28 16" aria-hidden="true" focusable="false"><path d="M14 8C11 3 6 2 4 5s0 7 4 6c3-1 5-3 6-3s3 2 6 3c4 1 8-3 4-6s-8-2-10 3z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg><span>1</span></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'vf1_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-find__item","layout":{"type":"default"}} -->
<div class="wp-block-group hc-find__item"><!-- wp:html -->
<p class="hc-find__n"><svg class="hc-loop" width="28" height="16" viewBox="0 0 28 16" aria-hidden="true" focusable="false"><path d="M14 8C11 3 6 2 4 5s0 7 4 6c3-1 5-3 6-3s3 2 6 3c4 1 8-3 4-6s-8-2-10 3z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg><span>2</span></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'vf2_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-find__item","layout":{"type":"default"}} -->
<div class="wp-block-group hc-find__item"><!-- wp:html -->
<p class="hc-find__n"><svg class="hc-loop" width="28" height="16" viewBox="0 0 28 16" aria-hidden="true" focusable="false"><path d="M14 8C11 3 6 2 4 5s0 7 4 6c3-1 5-3 6-3s3 2 6 3c4 1 8-3 4-6s-8-2-10 3z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg><span>3</span></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'vf3_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"write","className":"hc-sec hc-text hc-enquiry","layout":{"type":"default"}} -->
<section id="write" class="wp-block-group alignfull hc-sec hc-text hc-enquiry"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'vi_t4_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'vi_t4_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'vi_w_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-twoform","layout":{"type":"default"}} -->
<div class="wp-block-group hc-twoform"><!-- wp:group {"className":"hc-twoform__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-twoform__text"><!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'vi_w_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-form","layout":{"type":"default"}} -->
<div class="wp-block-group hc-form"><?php
ob_start(); ?>
<a class="wp-element-button hc-mailbtn" href="<?php echo esc_attr( 'mailto:admissions@hatoba-college.example?subject=' . rawurlencode( hatoba_college_t( 'contact_subject' ) ) ); ?>"><?php echo esc_html( hatoba_college_t( 'contact_email' ) ); ?></a>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
