<?php
/**
 * Title: Page: process
 * Slug: shirushi-customs/inner-process
 * Categories: shirushi-customs
 * Inserter: no
 * Description: Inner page "process": T1 page head with the five ticks as anchors, sticky ink timeline, five stage dossiers, quay band.
 */
$img = get_theme_file_uri( 'assets/images/' );
// phpcs:ignore WordPress.Security.EscapeOutput
echo sc_inner_head( 'process', 'w1.webp', array( 1, 2, 3, 4, 5 ), '30% 50%', true );
?>

<!-- wp:group {"className":"sc-tl","layout":{"type":"default"}} -->
<div class="wp-block-group sc-tl"><!-- wp:group {"className":"sc-tl__in sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-tl__in sc-in"><!-- wp:paragraph {"className":"sc-tl__i"} -->
<p class="sc-tl__i"><a href="#stage-1"><span class="sc-n">01</span> <span class="sc-w">Documents</span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tl__i"} -->
<p class="sc-tl__i"><a href="#stage-2"><span class="sc-n">02</span> <span class="sc-w">Classification</span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tl__i"} -->
<p class="sc-tl__i"><a href="#stage-3"><span class="sc-n">03</span> <span class="sc-w">Declaration</span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tl__i"} -->
<p class="sc-tl__i"><a href="#stage-4"><span class="sc-n">04</span> <span class="sc-w">Duty</span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tl__i"} -->
<p class="sc-tl__i"><a href="#stage-5"><span class="sc-n">05</span> <span class="sc-w">Release</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-intro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-intro"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter">( PROCESS )</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sc-intro__grid"><!-- wp:paragraph {"className":"sc-lead sc-intro__p sp-reveal sp-reveal--up"} -->
<p class="sc-lead sc-intro__p sp-reveal sp-reveal--up">Every shipment handled by Shirushi Customs passes through five sequential stages designed to ensure total regulatory accuracy. We manage the entire progression from initial document intake to final carrier handover at North Quay.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-stages","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-stages"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter">( STAGES )</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-stages__list","layout":{"type":"default"}} -->
<div class="wp-block-group sc-stages__list"><!-- wp:group {"anchor":"stage-1","className":"sc-card sc-card--stage","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--stage" id="stage-1"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 's1.webp' ); ?>" alt="Hands laying a commercial invoice and a packing list side by side on a desk"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"className":"sc-h3"} -->
<h2 class="wp-block-heading sc-h3">Stage 01: Documents</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p">The clearance sequence begins when you forward shipment paperwork to our desk. What you do is provide commercial invoices, packing lists, transport bills, and arrival notices, emailing digital scans to desk@shirushi-customs.example or delivering originals to Door 4. What we do is examine every document for consistency, checking that carton counts, weights, currency designations, and supplier declarations match across all pages. Intake review typically takes one to two hours from receipt. Confirming that commercial paperwork is complete before touching the customs portal prevents costly amendment fees and procedural holds down the line.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 01 / 05 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"stage-2","className":"sc-card sc-card--stage","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--stage" id="stage-2"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 's2.webp' ); ?>" alt="A turned wooden part beside calipers and a thick closed reference book"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"className":"sc-h3"} -->
<h2 class="wp-block-heading sc-h3">Stage 02: Classification</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p">Once paperwork is validated, we establish the tariff classification for every item. What you do is supply technical product descriptions, material compositions, or engineering drawings if the goods are specialized or novel to your production. What we do is apply the Harmonized System General Interpretative Rules, section notes, and binding precedents under the direction of senior broker Tomás Reyes. Classification review typically takes two to four hours per product line. Correct classification ensures the lawful rate of duty is applied and prevents retroactive penalties during post-clearance audits.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 02 / 05 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"stage-3","className":"sc-card sc-card--stage","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--stage" id="stage-3"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 's3.webp' ); ?>" alt="A broker at a laptop with documents beside it, the screen angled away"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"className":"sc-h3"} -->
<h2 class="wp-block-heading sc-h3">Stage 03: Declaration</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p">With verified classifications and valuation figures established, our declarations lead Aisha Mensah compiles the electronic customs entry. What you do is confirm the final draft values and authorize the lodgement schedule. What we do is build the formal customs submission, entering commodity codes, statistical quantities, country of origin codes, and commercial terms into the customs portal. Preparation and submission typically take two to three hours. Files received by our 14:00 cut-off are transmitted the same working day, generating an official customs transaction number for border authority processing.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 03 / 05 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"stage-4","className":"sc-card sc-card--stage","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--stage" id="stage-4"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 's4.webp' ); ?>" alt="Two people opening a carton for examination on a steel table"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"className":"sc-h3"} -->
<h2 class="wp-block-heading sc-h3">Stage 04: Duty</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p">Following electronic entry submission, customs authorities issue a duty and tax assessment notice. What you do is review the assessment summary and disburse funds according to your agreed billing structure. What we do is audit the customs computation against our filing to confirm calculations are accurate, then process payment directly to border revenue accounts. Duty payment verification typically concludes within two hours of assessment generation. Shirushi Customs passes all statutory duties and import taxes through at cost, with zero mark-up or hidden handling percentages applied.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 04 / 05 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"stage-5","className":"sc-card sc-card--stage","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--stage" id="stage-5"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 's5.webp' ); ?>" alt="A loaded pallet being moved onto a small truck at a loading dock in morning light"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"className":"sc-h3"} -->
<h2 class="wp-block-heading sc-h3">Stage 05: Release at North Quay</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p">Upon duty settlement and border authority satisfaction, a formal customs release note is issued. What you do is instruct your inland hauler or freight forwarder to collect the released cargo from Port Ardale. What we do is coordinate terminal release codes with dock operators and arrange physical inspection attendance with dock liaison Ravi Patel if cargo is flagged for routine examination. Release processing typically completes within two to six hours after payment. Cargo is then handed across cleanly to your carrier at Shed 11, North Quay.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 05 / 05 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-quay sc-quay--inner sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-quay sc-quay--inner sp-parallax"><!-- wp:group {"className":"sc-quay__bg sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sc-quay__bg sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $img . 'q1.webp' ); ?>" alt="" role="presentation"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-quay__in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-quay__in"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-quay__inset sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full sc-quay__inset sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( $img . 'q1.webp' ); ?>" alt="A quiet morning quay with stacked containers and a gantry crane in haze"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-quay__text","layout":{"type":"default"}} -->
<div class="wp-block-group sc-quay__text"><!-- wp:heading {"className":"sc-h2 sc-h2--w"} -->
<h2 class="wp-block-heading sc-h2 sc-h2--w">HANDED TO YOUR CARRIER AT NORTH QUAY</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-quay__p"} -->
<p class="sc-quay__p">When the goods are released, the dock liaison arranges the handover to your carrier at North Quay. If goods are selected for examination, we are at the table and tell you what is found.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-pill sc-pill--w"} -->
<p class="sc-pill sc-pill--w"><a href="/contact/">Open a file</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="sc-map"><p class="sc-map__cap"><b>PORT ARDALE / NORTH QUAY</b><span>SHED 11 · DOOR 4</span><span>MON–FRI 08:00–18:00</span></p><svg class="sc-map__svg" viewBox="0 0 240 300" width="240" height="300" fill="none" stroke="#F1F3F2" stroke-width="1" stroke-linejoin="round" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M6 8 L52 14 L78 6 L112 22 L120 44 L104 62 L124 84 L150 88 L170 110 L162 132 L176 152 L206 160 L234 184 L226 214 L236 244 L208 262 L176 258 L150 276 L112 270 L84 288 L40 282 L22 258 L36 232 L14 204 L28 176 L8 150 L26 124 L10 96 L30 70 L6 44 Z"/><path d="M150 88 L176 80 L204 92 L214 118 L196 134 L170 110" opacity=".6"/><circle cx="128" cy="212" r="7" stroke-width="1.5"/><circle cx="128" cy="212" r="2" fill="#F1F3F2" stroke="none"/></svg></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
