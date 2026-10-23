<?php
/**
 * Title: Home: how a prescription is talked through
 * Slug: megumi-pharmacy/front-process
 * Categories: megumi-pharmacy
 * Keywords: process, steps, details
 * Viewport Width: 1440
 * Description: Numbered rows 01 to 05 on a pale inset panel beside a 3:4 photograph whose neighbour peeks at the window edge.
 */
$u = function ( $f ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $f ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mp-panel","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mp-panel"><!-- wp:group {"className":"mp-wrap mp-panel__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mp-wrap mp-panel__grid"><!-- wp:group {"className":"mp-panel__text","layout":{"type":"default"}} -->
<div class="wp-block-group mp-panel__text"><!-- wp:group {"className":"sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker">Prescriptions</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mp-h2"} -->
<h2 class="wp-block-heading mp-h2">How a prescription<br>is talked through.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A prescription can arrive on paper, as an e-prescription from your doctor, or as a repeat request by email or phone. It is checked against your record, prepared, and talked through. A new one is usually ready in 20 minutes.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-rows sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-rows sp-reveal sp-reveal--up"><!-- wp:details {"showContent":true,"className":"mp-row"} -->
<details class="wp-block-details mp-row" open><summary>Hand it in</summary><!-- wp:paragraph -->
<p>Hand the prescription in at the counter, or send a repeat request by email to counter@megumipharmacy.example or by phone on (416) 555-0148. Paper, an e-prescription from your doctor, and a repeat are all accepted.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"mp-row"} -->
<details class="wp-block-details mp-row"><summary>We check it against your record</summary><!-- wp:paragraph -->
<p>We check the prescription against your record, including allergies and other medicines, before anything is prepared. The check takes about 10 minutes. If something does not match, we speak with you before going on.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"mp-row"} -->
<details class="wp-block-details mp-row"><summary>Prepared and double-checked</summary><!-- wp:paragraph -->
<p>A pharmacy technician prepares the item in the dispensary. A pharmacist then checks the label against the box, so two people have seen it before it reaches you. Weekly blister packs are prepared this way each week.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"mp-row"} -->
<details class="wp-block-details mp-row"><summary>Talked through at the counter</summary><!-- wp:paragraph -->
<p>Before the bag is handed over, a pharmacist talks the medicine through at the counter or in the consultation room. We cover what it is for, how to take it, and the questions you have.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"mp-row"} -->
<details class="wp-block-details mp-row"><summary>A call two weeks later</summary><!-- wp:paragraph -->
<p>For every new long-term medicine, we call two weeks later to ask how the first days have gone. The call is part of dispensing, not a sales call. You can say then if something feels wrong.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-panel__photos","layout":{"type":"default"}} -->
<div class="wp-block-group mp-panel__photos"><!-- wp:group {"className":"mp-panel__first","layout":{"type":"default"}} -->
<div class="wp-block-group mp-panel__first"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mp-shot"} -->
<figure class="wp-block-image size-full mp-shot"><img src="<?php echo $u( 'p07-inhaler.webp' ); ?>" alt="Pharmacist shows a teenage boy how to hold an inhaler with a spacer."/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-cap"} -->
<p class="mp-cap">Daniel Osei showing a new inhaler technique.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mp-shot mp-shot--peek"} -->
<figure class="wp-block-image size-full mp-shot mp-shot--peek"><img src="<?php echo $u( 'p08-label.webp' ); ?>" alt="Samuel Brandt double-checking a label."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
