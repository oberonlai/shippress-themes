<?php
/**
 * Title: Home: lecturers ledger
 * Slug: kanjo-college/front-lecturers
 * Categories: kanjo-college
 * Keywords: team, people, lecturers
 * Viewport Width: 1440
 * Description: A rounded photograph window with an outline sticker beside six lecturers set as ruled ledger rows.
 */
$kc_rows = array(
	array( 'Helena Marsh', 'Principal, Financial Accounting', 'Founded the college in 2009', 'Since 2009' ),
	array( 'Tomás Ferreira', 'Financial Accounting', 'Double entry and ledger balancing', '12 years' ),
	array( 'Grace Okonjo', 'Tax &amp; Payroll', 'Statutory returns and payroll practice', '9 years' ),
	array( 'Pieter van Dalen', 'Audit &amp; Assurance', 'Verification and controls testing', '14 years' ),
	array( 'Amira Haddad', 'Management Accounting', 'Budgeting and variance analysis', '8 years' ),
	array( 'Samuel Kwan', 'Exams office, mock papers', 'Runs the week 6 and week 9 sittings', '10 years' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-lect","layout":{"type":"default"}} -->
<section id="lecturers" class="wp-block-group alignfull kc-sec kc-lect"><!-- wp:group {"className":"kc-in kc-lect__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-in kc-lect__in"><!-- wp:group {"className":"kc-lect__win","layout":{"type":"default"}} -->
<div class="wp-block-group kc-lect__win"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-lect__img"} -->
<figure class="wp-block-image size-full kc-lect__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09.webp' ) ); ?>" alt="Two lecturers seated at a desk reviewing marked examination scripts together."/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<span class="kc-stk kc-stk--d" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-lect__list","layout":{"type":"default"}} -->
<div class="wp-block-group kc-lect__list"><!-- wp:paragraph {"className":"kc-chip sp-reveal sp-reveal--up"} -->
<p class="kc-chip sp-reveal sp-reveal--up">The lecturers</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up">Lecturers, ruled and named</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-ledger sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ledger sp-stagger"><?php foreach ( $kc_rows as $kc_r ) : ?>
<!-- wp:group {"className":"kc-lrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-lrow sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-lrow__name"} -->
<p class="kc-lrow__name"><?php echo esc_html( $kc_r[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-lrow__paper"} -->
<p class="kc-lrow__paper"><?php echo $kc_r[1]; // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-lrow__bg"} -->
<p class="kc-lrow__bg"><?php echo esc_html( $kc_r[2] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-lrow__yrs"} -->
<p class="kc-lrow__yrs"><?php echo esc_html( $kc_r[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/lecturers/">Meet the lecturers →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
