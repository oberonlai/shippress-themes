<?php
/**
 * Title: Page: The Register
 * Slug: tabidachi-tours/page-the-register
 * Categories: tabidachi-tours
 * Inserter: no
 * Viewport Width: 1440
 * Description: Inner page body: editorial lead with a rail, then the page's sections.
 */
?>
<!-- wp:group {"className":"tt-sec tt-regsec","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull tt-sec tt-regsec"><!-- wp:group {"className":"tt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tt-wrap"><!-- wp:group {"className":"tt-regband tt-dark","layout":{"type":"default"}} -->
<div class="wp-block-group tt-regband tt-dark"><!-- wp:html -->
<div class="tt-lead__chips"><span class="tt-chips tt-chips--onphoto"><span class="tt-chip tt-chip--box">The Register</span><span class="tt-chip tt-chip--pill">Every half-term</span></span></div>
<!-- /wp:html -->

<!-- wp:heading {"level":1,"className":"tt-reg__h"} -->
<h1 class="wp-block-heading tt-reg__h">The Register.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tt-reg__p"} -->
<p class="tt-reg__p">The Register is our school travel newsletter, published once each half-term for headteachers, visit coordinators, and classroom leaders. It provides practical planning guidance, on-the-road field notes, and transparent logistical advice.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tt-reg__form","layout":{"type":"default"}} -->
<div class="wp-block-group tt-reg__form"><!-- wp:html -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@tabidachi-tours.example', 'label' => tabidachi_tours_t( 'forms_email' ), 'submit' => tabidachi_tours_t( 'forms_subscribe' ), 'notice' => tabidachi_tours_t( 'forms_mail_notice' ), 'subject' => tabidachi_tours_t( 'forms_mail_subject' ) ) ); ?>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-reg__cols","layout":{"type":"default"}} -->
<div class="wp-block-group tt-reg__cols"><!-- wp:group {"className":"tt-reg__col","layout":{"type":"default"}} -->
<div class="wp-block-group tt-reg__col"><!-- wp:heading {"level":2,"className":"tt-reg__t"} -->
<h2 class="wp-block-heading tt-reg__t">What each half-term issue contains</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Published six times each academic year, every edition of The Register is structured around three concise, practical components. First, we share a reflective field report from an active tour leader detailing how a specific journey was navigated on the ground. Second, we highlight essential planning dates and statutory deadlines for upcoming academic terms. Third, we include a parent note addressing common questions regarding payment schedules, packing requirements, or student welfare.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-reg__col","layout":{"type":"default"}} -->
<div class="wp-block-group tt-reg__col"><!-- wp:heading {"level":2,"className":"tt-reg__t"} -->
<h2 class="wp-block-heading tt-reg__t">Clear communications without advertising</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We respect the demanding workload of school teachers and administrative leaders. The Register contains no third-party advertisements, commercial promotions, or exaggerated marketing claims. Instead, our articles focus on practical advice, such as counting techniques on busy platforms, structuring governors approval dossiers, and organizing medical records for residential stays. Readers may unsubscribe at any time with a single click, or contact our team directly at hello@tabidachi-tours.example.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"tt-reg__t"} -->
<h2 class="wp-block-heading tt-reg__t">Recent subjects covered</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tt-reg__lede"} -->
<p class="tt-reg__lede">Recent articles from our editorial archive illustrate the direct focus of our publication. We examined how our leaders conduct an accurate coach headcount of forty-two students in under four minutes at ferry terminals. Another popular guide detailed how to draft a site-specific risk assessment that governors read and approve on first submission. Our third recent piece offered the definitive five-night residential packing checklist requested by travelling families, ensuring students bring suitable gear without overburdening transport holds.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="tt-letters"><li><time>5 Nov 2026</time><a href="/how-we-count-a-coach-of-42/">How we count a coach of 42 in under four minutes</a></li><li><time>22 Oct 2026</time><a href="/a-risk-assessment-governors-actually-read/">A risk assessment governors actually read</a></li><li><time>8 Oct 2026</time><a href="/packing-for-five-nights-the-list-parents-asked-for/">Packing for five nights: the list parents asked for</a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
