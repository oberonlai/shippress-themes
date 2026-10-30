<?php
/**
 * Title: Page: fees
 * Slug: shirushi-customs/inner-fees
 * Categories: shirushi-customs
 * Inserter: no
 * Description: Inner page "fees": T1 head, intro, full fee table, notes beside a photograph, desk panel.
 */
$img = get_theme_file_uri( 'assets/images/' );
// phpcs:ignore WordPress.Security.EscapeOutput
echo sc_inner_head( 'fees', 's4.webp', array( 4 ), '50% 50%', false );
?>

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-intro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-intro"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter"><?php echo esc_html( sc_t( 'fee_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sc-intro__grid"><!-- wp:paragraph {"className":"sc-lead sc-intro__p sp-reveal sp-reveal--up"} -->
<p class="sc-lead sc-intro__p sp-reveal sp-reveal--up"><?php echo esc_html( sc_t( 'fees_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-fees sc-fees--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-fees sc-fees--inner"><!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:table {"className":"sc-fees__table","hasFixedLayout":false} -->
<figure class="wp-block-table sc-fees__table"><table><thead><tr><th>No.</th><th><?php echo esc_html( sc_t( 'fee_col_svc' ) ); ?></th><th class="has-text-align-right" data-align="right"><?php echo esc_html( sc_t( 'fee_col_price' ) ); ?></th></tr></thead><tbody><?php for ( $i = 1; $i <= 7; $i++ ) : ?><tr><td>( 0<?php echo (int) $i; ?> )</td><td><strong><?php echo esc_html( sc_t( 'fee' . $i . '_t' ) ); ?></strong><br><span class="sc-fees__n"><?php echo esc_html( sc_t( 'fee' . $i . '_n' ) ); ?></span></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( sc_t( 'fee' . $i . '_p' ) ); ?></td></tr><?php endfor; ?></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sc-fees__note"} -->
<p class="sc-fees__note"><?php echo esc_html( sc_t( 'fee_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-notesec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-notesec"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter"><?php echo esc_html( sc_t( 'fn_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-side sc-side--left","layout":{"type":"default"}} -->
<div class="wp-block-group sc-side sc-side--left"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-ph sc-ph--r32 sc-side__photo"} -->
<figure class="wp-block-image size-full sc-ph sc-ph--r32 sc-side__photo"><img src="<?php echo esc_url( $img . 'a1.webp' ); ?>" alt="The drop-off counter with a hatch window and a trolley of cartons at Door 4"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-side__list sc-side__list--b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-side__list sc-side__list--b"><!-- wp:group {"className":"sc-docs","layout":{"type":"default"}} -->
<div class="wp-block-group sc-docs"><!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"sc-doc__t"} -->
<h3 class="wp-block-heading sc-doc__t"><?php echo esc_html( sc_t( 'fn1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'fn1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"sc-doc__t"} -->
<h3 class="wp-block-heading sc-doc__t"><?php echo esc_html( sc_t( 'fn2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'fn2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"sc-doc__t"} -->
<h3 class="wp-block-heading sc-doc__t"><?php echo esc_html( sc_t( 'fn3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'fn3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"sc-doc__t"} -->
<h3 class="wp-block-heading sc-doc__t"><?php echo esc_html( sc_t( 'fn4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'fn4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-notice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-notice"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter"><?php echo esc_html( sc_t( 'fp_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel sp-reveal sp-reveal--up"><!-- wp:group {"className":"sc-panel__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel__col"><!-- wp:paragraph {"className":"sc-panel__k"} -->
<p class="sc-panel__k"><?php echo esc_html( sc_t( 'fp_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'fp_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__big"} -->
<p class="sc-panel__big">14:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__mid"} -->
<p class="sc-panel__mid"><?php echo esc_html( sc_t( 'fp_mid' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__small"} -->
<p class="sc-panel__small"><?php echo esc_html( sc_t( 'fp_small1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-panel__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel__col"><!-- wp:paragraph {"className":"sc-panel__k"} -->
<p class="sc-panel__k"><?php echo esc_html( sc_t( 'fp_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__small"} -->
<p class="sc-panel__small"><?php echo esc_html( sc_t( 'fp_small2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__big"} -->
<p class="sc-panel__big"><a href="tel:+15550142300">+1 (555) 014-2300</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-formpill"} -->
<p class="sc-formpill"><a href="/contact/"><?php echo esc_html( sc_t( 'notice_open' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
