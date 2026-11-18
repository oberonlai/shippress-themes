<?php
/**
 * Title: Page: Contact
 * Slug: tabidachi-tours/page-contact
 * Categories: tabidachi-tours
 * Inserter: no
 * Viewport Width: 1440
 * Description: Inner page body: editorial lead with a rail, then the page's sections.
 */
?>
<!-- wp:group {"className":"tt-sec tt-iplain","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull tt-sec tt-iplain"><!-- wp:group {"className":"tt-wrap tt-iplain__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tt-wrap tt-iplain__grid"><!-- wp:group {"className":"tt-iplain__txt","layout":{"type":"default"}} -->
<div class="wp-block-group tt-iplain__txt"><!-- wp:html -->
<div class="tt-lead__chips"><span class="tt-chips"><span class="tt-chip tt-chip--box">Contact</span><span class="tt-chip tt-chip--pill">Ashby Vale</span></span></div>
<!-- /wp:html -->

<!-- wp:heading {"level":1,"className":"tt-page-h"} -->
<h1 class="wp-block-heading tt-page-h">Contact.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tt-standfirst"} -->
<p class="tt-standfirst">Get in touch with our team in Ashby Vale to discuss upcoming tours, ask logistical questions, or arrange a visit to our office. We support heads, teachers, and parents with clear, prompt answers.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-sec tt-isec","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull tt-sec tt-isec"><!-- wp:group {"className":"tt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tt-wrap"><!-- wp:group {"className":"tt-cols","layout":{"type":"default"}} -->
<div class="wp-block-group tt-cols"><!-- wp:group {"className":"tt-cols__main","layout":{"type":"default"}} -->
<div class="wp-block-group tt-cols__main"><!-- wp:html -->
<dl class="tt-dl"><div><dt>Office</dt><dd>18 Platform Lane, Ashby Vale</dd></div><div><dt>Hours</dt><dd>Monday to Friday, 08:30–17:30</dd></div><div><dt>Phone</dt><dd>+44 1632 960 418</dd></div><div><dt>Plan requests</dt><dd>plans@tabidachi-tours.example</dd></div><div><dt>General</dt><dd>hello@tabidachi-tours.example</dd></div><div><dt>Duty line on trips</dt><dd>+44 1632 960 499, open 24 h</dd></div><div><dt>Getting here</dt><dd>Ashby Vale station, 6 minutes on foot; visitor parking, 2 spaces</dd></div></dl>
<!-- /wp:html -->

<!-- wp:group {"className":"tt-brows","layout":{"type":"default"}} -->
<div class="wp-block-group tt-brows"><!-- wp:group {"className":"tt-brow tt-brow--stack","layout":{"type":"default"}} -->
<div class="wp-block-group tt-brow tt-brow--stack"><!-- wp:heading {"level":2,"className":"tt-brow__h"} -->
<h2 class="wp-block-heading tt-brow__h">Office location and opening hours</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tt-brow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tt-brow__b"><!-- wp:paragraph -->
<p>Our administrative office is located at eighteen Platform Lane, Ashby Vale. We are open Monday to Friday from eight thirty to seventeen thirty, and closed on weekends and public holidays.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Visitors arriving by train will find our building just a six-minute walk from Ashby Vale station, and two dedicated visitor parking spaces are available outside our entrance. You are welcome to arrange a meeting with our planners to review maps and itineraries in person.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-brow tt-brow--stack","layout":{"type":"default"}} -->
<div class="wp-block-group tt-brow tt-brow--stack"><!-- wp:heading {"level":2,"className":"tt-brow__h"} -->
<h2 class="wp-block-heading tt-brow__h">Telephone numbers and email addresses</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tt-brow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tt-brow__b"><!-- wp:paragraph -->
<p>For general enquiries, curriculum workshop questions, or parent liaison, call our main office line on plus forty-four one six three two nine six zero four one eight. For general correspondence, write to hello@tabidachi-tours.example.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If you are an educational visit coordinator requesting an itinerary quotation, email plans@tabidachi-tours.example. All plan requests receive a formal written response within three working days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-brow tt-brow--stack","layout":{"type":"default"}} -->
<div class="wp-block-group tt-brow tt-brow--stack"><!-- wp:heading {"level":2,"className":"tt-brow__h"} -->
<h2 class="wp-block-heading tt-brow__h">Twenty-four hour duty line during trips</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tt-brow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tt-brow__b"><!-- wp:paragraph -->
<p>When any school group is on the road, our dedicated duty line operates twenty-four hours a day without interruption. School leaders, travelling teachers, and parent coordinators can reach our duty officer directly at plus forty-four one six three two nine six zero four nine nine. This direct line bypasses standard switchboards, ensuring immediate access to senior operational staff who can coordinate local transport, healthcare providers, or emergency support.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-panel tt-panel--celadon","layout":{"type":"default"}} -->
<div class="wp-block-group tt-panel tt-panel--celadon"><!-- wp:heading {"level":2,"className":"tt-panel__h"} -->
<h2 class="wp-block-heading tt-panel__h">Write to us</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<?php
ob_start(); ?>
<div class="wp-block-buttons tt-bigbtn"><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@tabidachi-tours.example?subject=' . rawurlencode( tabidachi_tours_t( 'forms_contact_subject' ) ) ); ?>"><?php echo esc_html( tabidachi_tours_t( 'contact_email' ) ); ?></a></div></div>
<p class="tt-formhint"><?php echo esc_html( tabidachi_tours_t( 'forms_contact_hint' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
