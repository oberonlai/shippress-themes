<?php
/**
 * Title: Home: four papers
 * Slug: kanjo-college/front-papers
 * Categories: kanjo-college
 * Keywords: cards, courses, papers
 * Viewport Width: 1440
 * Description: Four outlined portrait paper cards on a ledger line-art band, each with an overlapping cloud-pill label and dotted dividers.
 */
$kc_papers = array(
	array( 'p03', 'Financial Accounting', 'Paper 1 · 12 weeks', 'Double entry, trial balances and the primary statements.', 'A man in his thirties holding a ring binder against a plain wall.' ),
	array( 'p04', 'Management Accounting', 'Paper 2 · 12 weeks', 'Costing, budgets and variance analysis for decisions.', 'A woman in a cardigan with a pencil behind her ear.' ),
	array( 'p05', 'Tax &amp; Payroll', 'Paper 3 · 12 weeks', 'Tax computations, statutory deductions and payroll routines.', 'A young woman holding a printed accounting exercise sheet.' ),
	array( 'p06', 'Audit &amp; Assurance', 'Paper 4 · 12 weeks', 'Verification, controls and professional documentation.', 'A mature man in reading glasses holding a folder.' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-papers","layout":{"type":"default"}} -->
<section id="papers" class="wp-block-group alignfull kc-sec kc-papers"><!-- wp:group {"className":"kc-in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-in"><!-- wp:group {"className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head"><!-- wp:paragraph {"className":"kc-chip sp-reveal sp-reveal--up"} -->
<p class="kc-chip sp-reveal sp-reveal--up">The papers</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up">Four papers, one ruled line</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead">Each paper runs 36 class hours across a twelve-week term. Take one at a time and move to the next when you are ready.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cards sp-stagger"><?php foreach ( $kc_papers as $i => $kc_p ) : ?>
<!-- wp:group {"className":"kc-card kc-card--<?php echo (int) ( $i + 1 ); ?> sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card kc-card--<?php echo (int) ( $i + 1 ); ?> sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-card__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__in"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__photo"} -->
<figure class="wp-block-image size-full kc-card__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $kc_p[0] . '.webp' ) ); ?>" alt="<?php echo esc_attr( $kc_p[4] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-pill","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pill"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo $kc_p[1]; // phpcs:ignore WordPress.Security.EscapeOutput ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-pill__sub"} -->
<p class="kc-pill__sub"><?php echo esc_html( $kc_p[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-card__note"} -->
<p class="kc-card__note"><?php echo esc_html( $kc_p[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"kc-papers__more"} -->
<div class="wp-block-buttons kc-papers__more"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/papers/">See the four papers →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
