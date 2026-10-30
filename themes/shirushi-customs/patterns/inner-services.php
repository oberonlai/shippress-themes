<?php
/**
 * Title: Page: services
 * Slug: shirushi-customs/inner-services
 * Categories: shirushi-customs
 * Inserter: no
 * Description: Inner page "services": T1 page head, intro, dossier strip, extra rows, cut-off panel.
 */
$img = get_theme_file_uri( 'assets/images/' );
// phpcs:ignore WordPress.Security.EscapeOutput
echo sc_inner_head( 'services', 'w3.webp', array( 3 ), '50% 50%', false );
?>

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-intro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-intro"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter">( DECLARATIONS )</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sc-intro__grid"><!-- wp:paragraph {"className":"sc-lead sc-intro__p sp-reveal sp-reveal--up"} -->
<p class="sc-lead sc-intro__p sp-reveal sp-reveal--up">Shirushi Customs prepares and lodges customs declarations for small manufacturers, workshops, and specialized importers moving freight through Port Ardale. Every entry is reviewed line by line at our North Quay desk before submission to border authorities.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-band sc-handover sc-handover--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-band sc-handover sc-handover--inner"><!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-head","layout":{"type":"default"}} -->
<div class="wp-block-group sc-head"><!-- wp:heading {"className":"sc-h2"} -->
<h2 class="wp-block-heading sc-h2">DECLARATIONS WE HANDLE</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-lead"} -->
<p class="sc-lead">Four kinds of declaration cover almost everything a small manufacturer brings in. The desk chooses the one that fits the goods and tells you why, before anything is lodged.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-strip-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-strip-wrap sp-reveal sp-reveal--up"><!-- wp:group {"className":"sc-strip","layout":{"type":"default"}} -->
<div class="wp-block-group sc-strip"><!-- wp:group {"className":"sc-card sc-card--long","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--long"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 'd1.webp' ); ?>" alt="Shrink-wrapped pallets of cartons at an open dock door with a hand pallet truck"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"level":3,"className":"sc-h3"} -->
<h3 class="wp-block-heading sc-h3">Formal Import Entry</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p">Formal import declarations represent the core of our daily work at Shed 11. When containerized freight or consolidated cargo arrives at Port Ardale, our brokers review the commercial invoice, packing list, and bill of lading to build an accurate customs entry. We verify tariff codes, valuation methods, currency conversions, and applicable origin rules for up to five tariff lines under our standard filing, adding individual lines where manifests require deeper itemization. Every entry undergoes cross-checking against supplier documentation to ensure that declared values and product descriptions reflect the physical cargo exactly before electronic transmission to customs authorities.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 01 / 04 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-card sc-card--long","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--long"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 'd2.webp' ); ?>" alt="Small parcels and padded envelopes sorted on a long white table"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"level":3,"className":"sc-h3"} -->
<h3 class="wp-block-heading sc-h3">Low-Value Consignments</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p">Small manufacturing operations frequently receive urgent component batches, prototype parts, and tooling samples through air express carriers or postal streams. While these consignments fall below formal commercial thresholds, they still demand precise tariff allocation and duty assessment to prevent transit holds. We process low-value entries at an accessible rate of $38, providing workshops with prompt clearance documentation and duty accounting. By clearing these smaller shipments systematically, makers avoid carrier demurrage and maintain predictable supply schedules for workshop production without the administrative burden of filing entries themselves.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 02 / 04 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-card sc-card--long","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--long"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 'd3.webp' ); ?>" alt="Open aluminium flight cases with product samples being checked against a list"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"level":3,"className":"sc-h3"} -->
<h3 class="wp-block-heading sc-h3">Temporary Admission</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p">When exhibition goods, demonstration equipment, or tools for repair enter the country temporarily, paying outright import duty and VAT creates unnecessary cash-flow friction. We prepare temporary admission declarations for trade fairs, client trials, and repair consignments at a flat fee of $140. Our team establishes the required security documentation, tracks statutory time limits, and ensures that condition reports and serial numbers are properly recorded upon entry. When the goods depart or are transferred to another customs status, we close the file cleanly to secure the release of any pledged securities.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 03 / 04 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-card sc-card--long","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--long"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 'd4.webp' ); ?>" alt="Wooden crates of machine components and bicycle tubing in a small workshop"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"level":3,"className":"sc-h3"} -->
<h3 class="wp-block-heading sc-h3">Duty Relief and Inward Processing</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p">Manufacturers who import raw materials or specialized parts for assembly and subsequent export can substantially lower overhead through inward processing authorizations. We compile and submit applications for duty relief and inward processing at $280 per file, establishing the required throughput records, bills of materials, and yield calculations. Lukas Brandt oversees these files, working directly with production managers to document how imported metals, electronics, or timber are transformed within the workshop. Proper duty relief maintains export competitiveness while keeping workshop accounting fully aligned with national customs regulations.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 04 / 04 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="sc-ctl"><button type="button" class="sc-ctl__btn sc-ctl__btn--prev" aria-label="Previous card"></button><span class="sc-ctl__line" aria-hidden="true"><span class="sc-ctl__fill"></span></span><button type="button" class="sc-ctl__btn sc-ctl__btn--next" aria-label="Next card"></button></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-docsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-docsec"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter">( ALSO )</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-docs","layout":{"type":"default"}} -->
<div class="wp-block-group sc-docs"><!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-doc__t"} -->
<h2 class="wp-block-heading sc-doc__t">Also at the desk</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>Beyond standard import entries, our desk provides specialized customs support services tailored to manufacturing logistics.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-doc__t"} -->
<h2 class="wp-block-heading sc-doc__t">Tariff classification opinions</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>We issue formal tariff classification opinions at $120 per product, verifying General Interpretative Rules and chapter notes before purchase orders are placed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-doc__t"} -->
<h2 class="wp-block-heading sc-doc__t">Origin checks</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>We also conduct preferential rules of origin assessments to ensure your goods qualify for reduced tariff rates under applicable trade agreements.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-doc__t"} -->
<h2 class="wp-block-heading sc-doc__t">Returns and licence checks</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>Additionally, our brokers prepare export declarations for warranty returns and defective stock, and examine licensing requirements for dual-use components, machinery, and regulated materials before cargo arrives at Port Ardale.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-notice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-notice"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter">( CUT-OFF )</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel sp-reveal sp-reveal--up"><!-- wp:group {"className":"sc-panel__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel__col"><!-- wp:paragraph {"className":"sc-panel__k"} -->
<p class="sc-panel__k">CUT-OFF</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Documents received by 14:00 are lodged the same working day.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__big"} -->
<p class="sc-panel__big">14:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__mid"} -->
<p class="sc-panel__mid">Mon–Fri (closed public holidays)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__small"} -->
<p class="sc-panel__small">A working rule for lodging, not a promise of release time.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-panel__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel__col"><!-- wp:paragraph {"className":"sc-panel__k"} -->
<p class="sc-panel__k">LODGING DEADLINES</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__small"} -->
<p class="sc-panel__small">To ensure thorough compliance and prevent rushed entries, Shirushi Customs operates a clear daily filing schedule. Documents received at our desk by 14:00 Monday through Friday are audited, classified, and lodged with customs authorities on the same working day. Files received after 14:00 are queued for lodgement first thing the following morning. While clearance release times remain subject to border authority inspection schedules and system queues, maintaining our strict 14:00 lodgement cut-off ensures that every declaration receives meticulous line-by-line review without compromising transit timelines.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-formpill"} -->
<p class="sc-formpill"><a href="/contact/">Open a file</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
