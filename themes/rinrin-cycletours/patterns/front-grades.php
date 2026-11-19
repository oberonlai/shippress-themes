<?php
/**
 * Title: Home: grade ledger
 * Slug: rinrin-cycletours/front-grades
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Sky-ground ledger: stepped heading and four ruled grade rows with distance, climbing, pace and who each grade suits; the rows stack on narrow screens.
 */
?>
<!-- wp:group {"className":"rc-grades","tagName":"section","anchor":"grades","align":"full","layout":{"type":"default"}} -->
<section id="grades" class="wp-block-group alignfull rc-grades"><!-- wp:group {"className":"rc-grades__intro","layout":{"type":"default"}} -->
<div class="wp-block-group rc-grades__intro"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'grades_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rc-grades__h"} -->
<h2 class="wp-block-heading rc-grades__h"><span class="rc-step rc-step--1"><?php echo esc_html( rinrin_cycletours_t( 'grades_h1' ) ); ?></span><span class="rc-step rc-step--2"><?php echo esc_html( rinrin_cycletours_t( 'grades_h2' ) ); ?></span><span class="rc-step rc-step--3"><?php echo esc_html( rinrin_cycletours_t( 'grades_h3' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-grades__p"} -->
<p class="rc-grades__p"><?php echo esc_html( rinrin_cycletours_t( 'grades_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-grades__table","layout":{"type":"default"}} -->
<div class="wp-block-group rc-grades__table"><!-- wp:html -->
<div class="rc-ledger-wrap"><div class="rc-ledger__cols" aria-hidden="true"><span><?php echo esc_html( rinrin_cycletours_t( 'col_grade' ) ); ?></span><span><?php echo esc_html( rinrin_cycletours_t( 'lab_km' ) ); ?></span><span><?php echo esc_html( rinrin_cycletours_t( 'lab_climb' ) ); ?></span><span><?php echo esc_html( rinrin_cycletours_t( 'lab_pace' ) ); ?></span><span><?php echo esc_html( rinrin_cycletours_t( 'lab_suits' ) ); ?></span></div><ul class="rc-ledger sp-stagger"><li class="rc-ledger__row sp-reveal sp-reveal--up"><span class="rc-ledger__g"><?php echo esc_html( rinrin_cycletours_t( 'grade_1_name' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_km' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_1_km' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_climb' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_1_climb' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_pace' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_1_pace' ) ); ?></span><span class="rc-ledger__c rc-ledger__suit"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_suits' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_1_suit' ) ); ?></span></li><li class="rc-ledger__row sp-reveal sp-reveal--up"><span class="rc-ledger__g"><?php echo esc_html( rinrin_cycletours_t( 'grade_2_name' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_km' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_2_km' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_climb' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_2_climb' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_pace' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_2_pace' ) ); ?></span><span class="rc-ledger__c rc-ledger__suit"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_suits' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_2_suit' ) ); ?></span></li><li class="rc-ledger__row sp-reveal sp-reveal--up"><span class="rc-ledger__g"><?php echo esc_html( rinrin_cycletours_t( 'grade_3_name' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_km' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_3_km' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_climb' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_3_climb' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_pace' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_3_pace' ) ); ?></span><span class="rc-ledger__c rc-ledger__suit"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_suits' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_3_suit' ) ); ?></span></li><li class="rc-ledger__row sp-reveal sp-reveal--up"><span class="rc-ledger__g"><?php echo esc_html( rinrin_cycletours_t( 'grade_4_name' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_km' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_4_km' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_climb' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_4_climb' ) ); ?></span><span class="rc-ledger__c"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_pace' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_4_pace' ) ); ?></span><span class="rc-ledger__c rc-ledger__suit"><span class="rc-lab"><?php echo esc_html( rinrin_cycletours_t( 'lab_suits' ) ); ?></span><?php echo esc_html( rinrin_cycletours_t( 'grade_4_suit' ) ); ?></span></li></ul></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
