<?php
/**
 * Title: Page: Fees and intakes
 * Slug: akiha-college/page-fees
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Description: Fees and intakes: the six-row fee table, both intakes with dates and the five-step route to apply.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-pageintro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-pageintro"><!-- wp:paragraph {"className":"ak-lede"} -->
<p class="ak-lede"><?php echo esc_html( akiha_college_t( 'fees_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-pagewin"} -->
<figure class="wp-block-image size-full ak-pagewin"><img src="<?php echo akiha_college_img( 'j2.webp' ); ?>" alt="<?php echo akiha_college_a( 'alt_post2' ); ?>" loading="eager" fetchpriority="high"/></figure>
<!-- /wp:image -->

<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-rail ak-rail--inner ak-rail--fees ak-rail--feespage","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-rail ak-rail--inner ak-rail--fees ak-rail--feespage"><!-- wp:group {"className":"ak-rail__side","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__side"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akiha_college_t( 'lbl_fees_page' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-rail__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__col"><!-- wp:group {"className":"ak-sects","layout":{"type":"default"}} -->
<div class="wp-block-group ak-sects"><!-- wp:group {"className":"ak-sect sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-sect sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ak-sect__h"} -->
<h2 class="wp-block-heading ak-sect__h"><?php echo esc_html( akiha_college_t( 'fees_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-body"} -->
<p class="ak-body"><?php echo esc_html( akiha_college_t( 'fees_s1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"ak-fees"} -->
<figure class="wp-block-table ak-fees"><table class="has-fixed-layout"><tbody><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee1_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee1_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee1_p' ) ); ?></td></tr><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee2_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee2_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee2_p' ) ); ?></td></tr><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee3_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee3_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee3_p' ) ); ?></td></tr><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee4_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee4_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee4_p' ) ); ?></td></tr><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee5_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee5_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee5_p' ) ); ?></td></tr><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee6_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee6_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"intakes","className":"ak-sect sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="intakes" class="wp-block-group ak-sect sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ak-sect__h"} -->
<h2 class="wp-block-heading ak-sect__h"><?php echo esc_html( akiha_college_t( 'fees_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-body"} -->
<p class="ak-body"><?php echo esc_html( akiha_college_t( 'fees_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ak-intakes","layout":{"type":"default"}} -->
<div class="wp-block-group ak-intakes"><!-- wp:paragraph {"className":"ak-intake"} -->
<p class="ak-intake"><?php echo esc_html( akiha_college_t( 'int1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-intake"} -->
<p class="ak-intake"><?php echo esc_html( akiha_college_t( 'int2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-intake"} -->
<p class="ak-intake"><?php echo esc_html( akiha_college_t( 'int3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-sect sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-sect sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ak-sect__h"} -->
<h2 class="wp-block-heading ak-sect__h"><?php echo esc_html( akiha_college_t( 'fees_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-body"} -->
<p class="ak-body"><?php echo esc_html( akiha_college_t( 'fees_s3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ak-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rows sp-stagger"><!-- wp:group {"className":"ak-row ak-row--plain sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-row ak-row--plain sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ak-mark"} -->
<p class="ak-mark">(01)</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ak-row__title"} -->
<h3 class="wp-block-heading ak-row__title"><?php echo esc_html( akiha_college_t( 'step1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-row__desc"} -->
<p class="ak-row__desc"><?php echo esc_html( akiha_college_t( 'step1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-row ak-row--plain sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-row ak-row--plain sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ak-mark"} -->
<p class="ak-mark">(02)</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ak-row__title"} -->
<h3 class="wp-block-heading ak-row__title"><?php echo esc_html( akiha_college_t( 'step2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-row__desc"} -->
<p class="ak-row__desc"><?php echo esc_html( akiha_college_t( 'step2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-row ak-row--plain sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-row ak-row--plain sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ak-mark"} -->
<p class="ak-mark">(03)</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ak-row__title"} -->
<h3 class="wp-block-heading ak-row__title"><?php echo esc_html( akiha_college_t( 'step3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-row__desc"} -->
<p class="ak-row__desc"><?php echo esc_html( akiha_college_t( 'step3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-row ak-row--plain sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-row ak-row--plain sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ak-mark"} -->
<p class="ak-mark">(04)</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ak-row__title"} -->
<h3 class="wp-block-heading ak-row__title"><?php echo esc_html( akiha_college_t( 'step4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-row__desc"} -->
<p class="ak-row__desc"><?php echo esc_html( akiha_college_t( 'step4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-row ak-row--plain sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-row ak-row--plain sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ak-mark"} -->
<p class="ak-mark">(05)</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ak-row__title"} -->
<h3 class="wp-block-heading ak-row__title"><?php echo esc_html( akiha_college_t( 'step5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-row__desc"} -->
<p class="ak-row__desc"><?php echo esc_html( akiha_college_t( 'step5_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-apply","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-apply"><!-- wp:group {"className":"ak-apply__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-apply__col"><!-- wp:heading {"level":2,"className":"ak-h2 ak-h2--xl sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ak-h2 ak-h2--xl sp-reveal sp-reveal--up"><?php echo esc_html( akiha_college_t( 'apply_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-body"} -->
<p class="ak-body"><?php echo esc_html( akiha_college_t( 'apply_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ak-apply__btns","layout":{"type":"default"}} -->
<div class="wp-block-group ak-apply__btns"><!-- wp:buttons {"className":"ak-btns"} -->
<div class="wp-block-buttons ak-btns"><!-- wp:button {"className":"ak-btn"} -->
<div class="wp-block-button ak-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo akiha_college_url( '/contact/' ); ?>"><?php echo esc_html( akiha_college_t( 'apply' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ak-textlink"} -->
<p class="ak-textlink"><a href="<?php echo akiha_college_url( '/open-board/' ); ?>"><?php echo esc_html( akiha_college_t( 'book_board' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
