<?php
/**
 * Title: Page: Programmes and fees
 * Slug: hatoba-college/page-programmes
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Inserter: no
 * Description: Programmes page: inner window hero, seven fee bars with weeks chips and prices, what the fee includes, two instalments, bursary.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-hero hc-hero--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-hero hc-hero--in"><!-- wp:group {"className":"hc-frame","layout":{"type":"default"}} -->
<div class="wp-block-group hc-frame"><!-- wp:group {"className":"hc-window","layout":{"type":"default"}} -->
<div class="wp-block-group hc-window"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-still"} -->
<figure class="wp-block-image size-full hc-still"><img src="<?php echo hatoba_college_img( 'p16-engine-workshop.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p16' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-capbar","layout":{"type":"default"}} -->
<div class="wp-block-group hc-capbar"><!-- wp:paragraph {"className":"hc-cap is-active"} -->
<p class="hc-cap is-active"><?php echo esc_html( hatoba_college_t( 'pr_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hc-ticks" style="--hc-fill:100%" aria-hidden="true"><span class="hc-ticks__fill"></span><ol class="hc-ticks__list"><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>1</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>4</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>8</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>12</span></li></ol><span class="hc-ticks__note"><?php echo esc_html( hatoba_college_t( 'pr_note' ) ); ?></span></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hc-hero__row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hero__row"><!-- wp:heading {"level":1,"className":"hc-h1 hc-h1--in"} -->
<h1 class="wp-block-heading hc-h1 hc-h1--in"><?php echo esc_html( hatoba_college_t( 'pr_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-lede"} -->
<p class="hc-lede"><?php echo esc_html( hatoba_college_t( 'pr_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"hc-sec hc-text hc-feesec","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull hc-sec hc-text hc-feesec"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'pr_t1_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'pr_t1_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'pr_f_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'pr_f_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-panel hc-panel--fees","layout":{"type":"default"}} -->
<div class="wp-block-group hc-panel hc-panel--fees"><!-- wp:group {"className":"hc-bars sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bars sp-stagger"><!-- wp:group {"className":"hc-bar hc-bar--fee sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar hc-bar--fee sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-bar__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__head"><!-- wp:heading {"level":3,"className":"hc-bar__title"} -->
<h3 class="wp-block-heading hc-bar__title"><?php echo esc_html( hatoba_college_t( 'pf1_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-chip"} -->
<p class="hc-chip"><?php echo esc_html( hatoba_college_t( 'pf1_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col"><!-- wp:paragraph {"className":"hc-bar__text"} -->
<p class="hc-bar__text"><?php echo esc_html( hatoba_college_t( 'pf1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col hc-bar__pricecol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col hc-bar__pricecol"><!-- wp:paragraph {"className":"hc-smalllabel"} -->
<p class="hc-smalllabel"><?php echo esc_html( hatoba_college_t( 'fee_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-bar__price"} -->
<p class="hc-bar__price"><?php echo esc_html( hatoba_college_t( 'pf1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar hc-bar--fee sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar hc-bar--fee sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-bar__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__head"><!-- wp:heading {"level":3,"className":"hc-bar__title"} -->
<h3 class="wp-block-heading hc-bar__title"><?php echo esc_html( hatoba_college_t( 'pf2_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-chip"} -->
<p class="hc-chip"><?php echo esc_html( hatoba_college_t( 'pf2_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col"><!-- wp:paragraph {"className":"hc-bar__text"} -->
<p class="hc-bar__text"><?php echo esc_html( hatoba_college_t( 'pf2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col hc-bar__pricecol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col hc-bar__pricecol"><!-- wp:paragraph {"className":"hc-smalllabel"} -->
<p class="hc-smalllabel"><?php echo esc_html( hatoba_college_t( 'fee_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-bar__price"} -->
<p class="hc-bar__price"><?php echo esc_html( hatoba_college_t( 'pf2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar hc-bar--fee sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar hc-bar--fee sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-bar__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__head"><!-- wp:heading {"level":3,"className":"hc-bar__title"} -->
<h3 class="wp-block-heading hc-bar__title"><?php echo esc_html( hatoba_college_t( 'pf3_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-chip"} -->
<p class="hc-chip"><?php echo esc_html( hatoba_college_t( 'pf3_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col"><!-- wp:paragraph {"className":"hc-bar__text"} -->
<p class="hc-bar__text"><?php echo esc_html( hatoba_college_t( 'pf3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col hc-bar__pricecol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col hc-bar__pricecol"><!-- wp:paragraph {"className":"hc-smalllabel"} -->
<p class="hc-smalllabel"><?php echo esc_html( hatoba_college_t( 'fee_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-bar__price"} -->
<p class="hc-bar__price"><?php echo esc_html( hatoba_college_t( 'pf3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar hc-bar--fee sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar hc-bar--fee sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-bar__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__head"><!-- wp:heading {"level":3,"className":"hc-bar__title"} -->
<h3 class="wp-block-heading hc-bar__title"><?php echo esc_html( hatoba_college_t( 'pf4_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-chip"} -->
<p class="hc-chip"><?php echo esc_html( hatoba_college_t( 'pf4_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col"><!-- wp:paragraph {"className":"hc-bar__text"} -->
<p class="hc-bar__text"><?php echo esc_html( hatoba_college_t( 'pf4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col hc-bar__pricecol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col hc-bar__pricecol"><!-- wp:paragraph {"className":"hc-smalllabel"} -->
<p class="hc-smalllabel"><?php echo esc_html( hatoba_college_t( 'fee_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-bar__price"} -->
<p class="hc-bar__price"><?php echo esc_html( hatoba_college_t( 'pf4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar hc-bar--fee sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar hc-bar--fee sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-bar__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__head"><!-- wp:heading {"level":3,"className":"hc-bar__title"} -->
<h3 class="wp-block-heading hc-bar__title"><?php echo esc_html( hatoba_college_t( 'pf5_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-chip"} -->
<p class="hc-chip"><?php echo esc_html( hatoba_college_t( 'pf5_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col"><!-- wp:paragraph {"className":"hc-bar__text"} -->
<p class="hc-bar__text"><?php echo esc_html( hatoba_college_t( 'pf5_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col hc-bar__pricecol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col hc-bar__pricecol"><!-- wp:paragraph {"className":"hc-smalllabel"} -->
<p class="hc-smalllabel"><?php echo esc_html( hatoba_college_t( 'fee_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-bar__price"} -->
<p class="hc-bar__price"><?php echo esc_html( hatoba_college_t( 'pf5_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar hc-bar--fee sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar hc-bar--fee sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-bar__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__head"><!-- wp:heading {"level":3,"className":"hc-bar__title"} -->
<h3 class="wp-block-heading hc-bar__title"><?php echo esc_html( hatoba_college_t( 'pf6_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-chip"} -->
<p class="hc-chip"><?php echo esc_html( hatoba_college_t( 'pf6_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col"><!-- wp:paragraph {"className":"hc-bar__text"} -->
<p class="hc-bar__text"><?php echo esc_html( hatoba_college_t( 'pf6_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col hc-bar__pricecol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col hc-bar__pricecol"><!-- wp:paragraph {"className":"hc-smalllabel"} -->
<p class="hc-smalllabel"><?php echo esc_html( hatoba_college_t( 'fee_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-bar__price"} -->
<p class="hc-bar__price"><?php echo esc_html( hatoba_college_t( 'pf6_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar hc-bar--fee sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar hc-bar--fee sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-bar__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__head"><!-- wp:heading {"level":3,"className":"hc-bar__title"} -->
<h3 class="wp-block-heading hc-bar__title"><?php echo esc_html( hatoba_college_t( 'pf7_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-chip"} -->
<p class="hc-chip"><?php echo esc_html( hatoba_college_t( 'pf7_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col"><!-- wp:paragraph {"className":"hc-bar__text"} -->
<p class="hc-bar__text"><?php echo esc_html( hatoba_college_t( 'pf7_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-bar__col hc-bar__pricecol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar__col hc-bar__pricecol"><!-- wp:paragraph {"className":"hc-smalllabel"} -->
<p class="hc-smalllabel"><?php echo esc_html( hatoba_college_t( 'fee_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-bar__price"} -->
<p class="hc-bar__price"><?php echo esc_html( hatoba_college_t( 'pf7_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"included","className":"hc-sec hc-text","layout":{"type":"default"}} -->
<section id="included" class="wp-block-group alignfull hc-sec hc-text"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'pr_i_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'pr_i_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'pr_i_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'pr_i_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"instalments","className":"hc-sec hc-text","layout":{"type":"default"}} -->
<section id="instalments" class="wp-block-group alignfull hc-sec hc-text"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'pr_p_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'pr_p_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'pr_p_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'pr_p_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"bursary","className":"hc-sec hc-text","layout":{"type":"default"}} -->
<section id="bursary" class="wp-block-group alignfull hc-sec hc-text"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'pr_u_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'pr_u_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'pr_u_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'pr_u_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"deposit","className":"hc-sec hc-text","layout":{"type":"default"}} -->
<section id="deposit" class="wp-block-group alignfull hc-sec hc-text"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'pr_d_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'pr_d_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'pr_d_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'pr_d_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-link"} -->
<p class="hc-link"><a href="<?php echo hatoba_college_url( '/admissions/' ); ?>"><?php echo esc_html( hatoba_college_t( 'pr_apply' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
