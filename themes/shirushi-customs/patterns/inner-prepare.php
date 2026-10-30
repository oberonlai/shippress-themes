<?php
/**
 * Title: Page: prepare
 * Slug: shirushi-customs/inner-prepare
 * Categories: shirushi-customs
 * Inserter: no
 * Description: Inner page "prepare": T1 head, intro, six document rows with a photograph, send-to panel.
 */
$img = get_theme_file_uri( 'assets/images/' );
// phpcs:ignore WordPress.Security.EscapeOutput
echo sc_inner_head( 'prepare', 'p1.webp', array( 1 ), '50% 50%', false );
?>

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-intro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-intro"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter">( PREPARE )</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sc-intro__grid"><!-- wp:paragraph {"className":"sc-lead sc-intro__p sp-reveal sp-reveal--up"} -->
<p class="sc-lead sc-intro__p sp-reveal sp-reveal--up">Smooth customs clearance depends entirely on clear, consistent paperwork prepared before your cargo arrives at Port Ardale. Having accurate documents ready allows our brokers to classify your goods and lodge entries without delay.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-docsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-docsec"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter">( DOCUMENTS )</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-docs","layout":{"type":"default"}} -->
<div class="wp-block-group sc-docs"><!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-doc__t"} -->
<h2 class="wp-block-heading sc-doc__t">Commercial Invoice</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>The commercial invoice is the primary legal foundation of your customs entry. It must clearly identify the buyer and seller, issue date, invoice number, and agreed Incoterms such as FOB, CIF, or EXW. Each line item requires a precise commercial description in plain language, unit prices, total item values, currency, and country of origin. Vague terms like parts or samples should never be used, as customs systems flag ambiguous entries for manual inspection. Ensure discounts, tooling charges, or freight costs are separated into distinct rows.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-doc__t"} -->
<h2 class="wp-block-heading sc-doc__t">Packing List</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>A thorough packing list allows dock personnel and customs inspectors to verify physical cargo against declared manifests. Your packing list must state the gross weight, net weight, outer packaging type such as crates or pallets, carton dimensions, and total package counts. Crucially, it must detail the exact carton-by-carton breakdown showing which items and quantities reside in each numbered container. When carton marks match invoice lines perfectly, our desk can complete document cross-checking in under ten minutes.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-doc__t"} -->
<h2 class="wp-block-heading sc-doc__t">Bill of Lading or Air Waybill</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>The transport document serves as evidence of the contract of carriage and document of title for incoming freight. For ocean cargo arriving at Port Ardale, submit the clean rated ocean bill of lading, noting whether it is an original bill or express telex release. For air freight consignments, supply the air waybill containing master and house tracking numbers. These documents establish arrival vessel details, voyage numbers, container numbers, seal numbers, and discharge terminal references necessary to lodge your import entry.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-inline-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sc-inline-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-ph sc-ph--r32 sc-inline"} -->
<figure class="wp-block-image size-full sc-ph sc-ph--r32 sc-inline"><img src="<?php echo esc_url( $img . 'd2.webp' ); ?>" alt="Small parcels and padded envelopes sorted on a long white table"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-doc__t"} -->
<h2 class="wp-block-heading sc-doc__t">Certificate of Origin</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>A certificate of origin establishes where your components or goods were manufactured, which determines eligibility for preferential tariff treatment under international trade agreements. Depending on trade lanes, this may be an official chamber of commerce certificate, an exporter statement on the invoice, or a registered exporter declaration. Providing a valid origin certificate enables our brokers to claim reduced or zero duty rates legally. The certificate must match the commercial invoice in product descriptions, exporter details, and quantities exactly.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-doc__t"} -->
<h2 class="wp-block-heading sc-doc__t">Product Specification Sheets</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>For specialized materials, turned metal parts, chemicals, or machinery, customs classification requires technical substantiation beyond a basic commercial name. Specification sheets, technical data sheets, and material breakdown percentages allow broker Tomás Reyes to determine the correct Harmonized System tariff code under statutory General Interpretative Rules. Having engineering drawings, composition analyses, or manufacturing process summaries prepared prevents customs queries and eliminates classification delays before your shipment docks at North Quay.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-doc sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-doc__t"} -->
<h2 class="wp-block-heading sc-doc__t">Import Licences and Permits</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-doc__b","layout":{"type":"default"}} -->
<div class="wp-block-group sc-doc__b"><!-- wp:paragraph -->
<p>Certain commodities require pre-arrival authorization from governing authorities before customs entry can be finalized. This includes agricultural goods, chemicals, radio frequency equipment, dual-use industrial parts, and timber subject to phytosanitary or environmental controls. If your products fall under regulated categories, you must secure all relevant permits, certificates, and import licences prior to cargo dispatch. Our desk will cross-reference permit numbers against incoming bills to confirm complete compliance with domestic regulatory standards.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-notice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-notice"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter">( SEND )</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel sp-reveal sp-reveal--up"><!-- wp:group {"className":"sc-panel__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel__col"><!-- wp:paragraph {"className":"sc-panel__k"} -->
<p class="sc-panel__k">WHERE TO SEND</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Originals and samples go to the drop-off counter; scans go to the desk.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__big"} -->
<p class="sc-panel__big">Door 4</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__mid"} -->
<p class="sc-panel__mid">Mon–Fri 08:30–17:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__small"} -->
<p class="sc-panel__small">Closed on public holidays</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-panel__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel__col"><!-- wp:paragraph {"className":"sc-panel__k"} -->
<p class="sc-panel__k">SCANS AND QUESTIONS</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__small"} -->
<p class="sc-panel__small">We accept digital copies of all standard shipping documents by email at desk@shirushi-customs.example for immediate intake and classification review. Where original physical documents, paper certificates of origin, or material samples are mandated by customs authorities, please send them by courier or hand-deliver them directly to our drop-off counter at Door 4, Shed 11, North Quay, Port Ardale. Our counter is open Monday through Friday from 08:30 to 17:00, closed on public holidays.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__mid"} -->
<p class="sc-panel__mid"><a href="mailto:desk@shirushi-customs.example">desk@shirushi-customs.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-formpill"} -->
<p class="sc-formpill"><a href="/contact/">Open a file</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
