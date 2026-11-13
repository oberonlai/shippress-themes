<?php
/**
 * Title: Footer
 * Slug: akiha-college/foot-main
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Dark footer: wordmark and address, study and college links, hours, a newsletter row and the legal line.
 */
?>
<!-- wp:group {"align":"full","className":"ak-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ak-footer"><!-- wp:group {"className":"ak-fcols","layout":{"type":"default"}} -->
<div class="wp-block-group ak-fcols"><!-- wp:group {"className":"ak-fcol ak-fcol--brand","layout":{"type":"default"}} -->
<div class="wp-block-group ak-fcol ak-fcol--brand"><!-- wp:paragraph {"className":"ak-fmark"} -->
<p class="ak-fmark"><?php echo esc_html( akiha_college_t( 'site_title' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-fsub"} -->
<p class="ak-fsub"><?php echo esc_html( akiha_college_t( 'foot_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-faddr"} -->
<p class="ak-faddr"><?php echo esc_html( akiha_college_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group ak-fcol"><!-- wp:paragraph {"className":"ak-flabel"} -->
<p class="ak-flabel"><?php echo esc_html( akiha_college_t( 'f_study' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-flink"} -->
<p class="ak-flink"><a href="<?php echo akiha_college_url( '/apprenticeship/' ); ?>"><?php echo esc_html( akiha_college_t( 'nav_apprenticeship' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-flink"} -->
<p class="ak-flink"><a href="<?php echo akiha_college_url( '/how-we-judge/' ); ?>"><?php echo esc_html( akiha_college_t( 'nav_judge' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-flink"} -->
<p class="ak-flink"><a href="<?php echo akiha_college_url( '/fees/' ); ?>"><?php echo esc_html( akiha_college_t( 'nav_fees' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-flink"} -->
<p class="ak-flink"><a href="<?php echo akiha_college_url( '/open-board/' ); ?>"><?php echo esc_html( akiha_college_t( 'nav_open' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group ak-fcol"><!-- wp:paragraph {"className":"ak-flabel"} -->
<p class="ak-flabel"><?php echo esc_html( akiha_college_t( 'f_college' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-flink"} -->
<p class="ak-flink"><a href="<?php echo akiha_college_url( '/about/' ); ?>"><?php echo esc_html( akiha_college_t( 'nav_about' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-flink"} -->
<p class="ak-flink"><a href="<?php echo akiha_college_url( '/instructors/' ); ?>"><?php echo esc_html( akiha_college_t( 'nav_instructors' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-flink"} -->
<p class="ak-flink"><a href="<?php echo akiha_college_url( '/employers/' ); ?>"><?php echo esc_html( akiha_college_t( 'nav_employers' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-flink"} -->
<p class="ak-flink"><a href="<?php echo akiha_college_url( '/work/' ); ?>"><?php echo esc_html( akiha_college_t( 'nav_work' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-flink"} -->
<p class="ak-flink"><a href="<?php echo akiha_college_url( '/journal/' ); ?>"><?php echo esc_html( akiha_college_t( 'nav_journal' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group ak-fcol"><!-- wp:paragraph {"className":"ak-flabel"} -->
<p class="ak-flabel"><?php echo esc_html( akiha_college_t( 'f_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-fline"} -->
<p class="ak-fline"><?php echo esc_html( akiha_college_t( 'f_hours_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-fline"} -->
<p class="ak-fline"><?php echo esc_html( akiha_college_t( 'f_hours_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-fline"} -->
<p class="ak-fline"><?php echo esc_html( akiha_college_t( 'f_hours_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-fline"} -->
<p class="ak-fline"><?php echo esc_html( akiha_college_t( 'f_hours_l4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-fline"} -->
<p class="ak-fline"><?php echo esc_html( akiha_college_t( 'f_phone' ) ); ?><br><a href="mailto:hello@akiha-college.example">hello@akiha-college.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-fnews","layout":{"type":"default"}} -->
<div class="wp-block-group ak-fnews"><!-- wp:group {"className":"ak-newsletter__text","layout":{"type":"default"}} -->
<div class="wp-block-group ak-newsletter__text"><!-- wp:heading {"level":3,"className":"ak-newsletter__t"} -->
<h3 class="wp-block-heading ak-newsletter__t"><?php echo esc_html( akiha_college_t( 'news_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-newsletter__d"} -->
<p class="ak-newsletter__d"><?php echo esc_html( akiha_college_t( 'news_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-newsletter__form","layout":{"type":"default"}} -->
<div class="wp-block-group ak-newsletter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@akiha-college.example',
	'label'   => akiha_college_t( 'forms_email' ),
	'submit'  => akiha_college_t( 'forms_subscribe' ),
	'notice'  => akiha_college_t( 'forms_mail_notice' ),
	'subject' => akiha_college_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ak-legal"} -->
<p class="ak-legal"><?php echo esc_html( akiha_college_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->