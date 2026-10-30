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
<p class="sc-gutter">( FEES )</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sc-intro__grid"><!-- wp:paragraph {"className":"sc-lead sc-intro__p sp-reveal sp-reveal--up"} -->
<p class="sc-lead sc-intro__p sp-reveal sp-reveal--up">Shirushi Customs publishes straightforward, predictable pricing designed specifically for small manufacturers and independent workshops. We maintain transparent rates with zero hidden surcharges or duty mark-ups.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-fees sc-fees--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-fees sc-fees--inner"><!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:table {"className":"sc-fees__table","hasFixedLayout":false} -->
<figure class="wp-block-table sc-fees__table"><table><thead><tr><th>No.</th><th>Service</th><th class="has-text-align-right">Price (USD)</th></tr></thead><tbody><tr><td class="sc-fees__no">( 01 )</td><td><strong>Import entry, up to 5 tariff lines</strong><br><span class="sc-fees__n">Formal entry, checked and lodged</span></td><td class="has-text-align-right sc-fees__price">$95</td></tr><tr><td class="sc-fees__no">( 02 )</td><td><strong>Each additional tariff line</strong><br><span class="sc-fees__n">On the same entry, per line</span></td><td class="has-text-align-right sc-fees__price">$6</td></tr><tr><td class="sc-fees__no">( 03 )</td><td><strong>Low-value consignment entry</strong><br><span class="sc-fees__n">Samples, spares and prototypes</span></td><td class="has-text-align-right sc-fees__price">$38</td></tr><tr><td class="sc-fees__no">( 04 )</td><td><strong>Temporary admission (samples, trade fairs)</strong><br><span class="sc-fees__n">Set-up and closing of the admission</span></td><td class="has-text-align-right sc-fees__price">$140</td></tr><tr><td class="sc-fees__no">( 05 )</td><td><strong>Tariff classification opinion, per product</strong><br><span class="sc-fees__n">In writing, with the reason</span></td><td class="has-text-align-right sc-fees__price">$120</td></tr><tr><td class="sc-fees__no">( 06 )</td><td><strong>Duty relief / inward processing application</strong><br><span class="sc-fees__n">Authorisation and record set-up</span></td><td class="has-text-align-right sc-fees__price">$280</td></tr><tr><td class="sc-fees__no">( 07 )</td><td><strong>Monthly desk account, up to 12 entries</strong><br><span class="sc-fees__n">One invoice, payment within 14 days</span></td><td class="has-text-align-right sc-fees__price">$890 / month</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sc-fees__note"} -->
<p class="sc-fees__note">Duties and import taxes are passed through at cost, without mark-up.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-notesec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-notesec"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter">( NOTES )</p>
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
<h3 class="wp-block-heading sc-doc__t">Standard Clearance Fees</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>Our core customs clearance fees reflect the actual administrative time required to audit, classify, and lodge entries with precision. Our standard import entry fee is $95, covering comprehensive clearance for shipments up to 5 tariff lines. For entries with extensive product manifests, each additional tariff line is billed at $6. For smaller courier and postal shipments, our low-value consignment entry is priced at $38. Every filing includes document validation, HS code review, electronic submission, and customs authority status tracking.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"sc-doc__t"} -->
<h3 class="wp-block-heading sc-doc__t">Specialized Customs Filings</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>For non-standard customs regimes, we provide fixed-price filings that protect workshop capital. Temporary admission entries for exhibition displays, demonstration models, or repair equipment are processed at $140 per consignment. When you need formal tariff classification opinions before ordering unfamiliar components, our brokers prepare a comprehensive tariff opinion for $120 per product. Applications for duty relief and inward processing authorizations, which allow duty-free component manufacturing for export, are handled at $280 per file including yield documentation.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"sc-doc__t"} -->
<h3 class="wp-block-heading sc-doc__t">Monthly Desk Accounts</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>Workshops with consistent import volumes can consolidate clearance operations under our monthly desk account at $890 per month. This package covers up to 12 formal customs entries every calendar month, offering predictable administrative budgeting for active manufacturers. Monthly account holders receive priority document review, dedicated liaison through Mei Lin Zhou, and unified billing that streamlines bookkeeping across recurring ocean and air freight shipments arriving through Port Ardale.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"sc-doc__t"} -->
<h3 class="wp-block-heading sc-doc__t">Disbursement and Billing Terms</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>All statutory customs duties, import tariffs, and national sales taxes are disbursed directly on your behalf and passed through strictly at cost. Shirushi Customs applies zero mark-up, handling fees, or financing percentages to government taxes. Our accounting desk, managed by Sofia Moreau, issues consolidated service invoices monthly. Standard payment terms are net 14 days from invoice date. We accept corporate bank transfers and cleared funds to maintain active customs bond facilities.</p>
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
<p class="sc-gutter">( DESK )</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel sp-reveal sp-reveal--up"><!-- wp:group {"className":"sc-panel__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel__col"><!-- wp:paragraph {"className":"sc-panel__k"} -->
<p class="sc-panel__k">FILING CUT-OFF</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Documents received by 14:00 are lodged the same working day.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__big"} -->
<p class="sc-panel__big">14:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__mid"} -->
<p class="sc-panel__mid">Mon–Fri 08:00–18:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__small"} -->
<p class="sc-panel__small">Invoices monthly, payment within 14 days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-panel__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel__col"><!-- wp:paragraph {"className":"sc-panel__k"} -->
<p class="sc-panel__k">DESK ENQUIRIES</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__small"} -->
<p class="sc-panel__small">Under our operating schedule, shipping documents received at our desk by 14:00 Monday through Friday are lodged on the same working day. Files submitted after 14:00 are processed for filing the following morning. For billing questions or to open an account, contact our team at desk@shirushi-customs.example or telephone +1 (555) 014-2300 during desk hours, Monday through Friday 08:00 to 18:00. Physical payment instruments or accounting records may be delivered to Door 4, Shed 11, North Quay.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__big"} -->
<p class="sc-panel__big"><a href="tel:+15550142300">+1 (555) 014-2300</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-formpill"} -->
<p class="sc-formpill"><a href="/contact/">Open a file</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
