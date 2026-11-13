<?php
/**
 * Title: Page: Visit
 * Slug: kohaku-brasserie/page-contact
 * Categories: kohaku-brasserie
 * Inserter: no
 * Description: Inner page: Visit.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kb-hero kb-phero sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kb-hero kb-phero sp-parallax"><!-- wp:group {"className":"kb-hero__bg sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kb-hero__bg sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kb-phero__img"} -->
<figure class="wp-block-image size-full kb-phero__img"><img src="<?php echo kohaku_brasserie_img( 'h17' ); ?>" alt="The brasserie street front at night, warm windows over a cobbled lane."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-hero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group kb-hero__shade"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-hero__copy kb-phero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kb-hero__copy kb-phero__copy"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(visit)</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kb-hero__h1 kb-phero__h1"} -->
<h1 class="wp-block-heading kb-hero__h1 kb-phero__h1">Visit</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-hero__line","layout":{"type":"default"}} -->
<div class="wp-block-group kb-hero__line"><!-- wp:paragraph {"className":"kb-stamp kb-at-12"} -->
<p class="kb-stamp kb-at-12">Mon <span class="kb-stamp__w">closed</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kb-stamp kb-at-50"} -->
<p class="kb-stamp kb-at-50">Tue–Sat</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kb-stamp kb-at-88"} -->
<p class="kb-stamp kb-at-88">Sun</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kb-phero__disc kb-at-50","layout":{"type":"default"}} -->
<div class="wp-block-group kb-phero__disc kb-at-50"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kb-sec kb-intro","layout":{"type":"default"}} -->
<section class="wp-block-group kb-sec kb-intro"><!-- wp:group {"className":"kb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kb-wrap"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(14 Arcade Row)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kb-intro__p sp-reveal sp-reveal--up"} -->
<p class="kb-intro__p sp-reveal sp-reveal--up">Kohaku Brasserie is located on the historic cobblestones of 14 Arcade Row in the Old Exchange Quarter of Lowmarket. We look forward to welcoming you for lunch, afternoon plates, or dinner.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kb-sec kb-ledgersec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kb-sec kb-ledgersec"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(opening hours)</p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"kb-ledger","hasFixedLayout":false} -->
<figure class="wp-block-table kb-ledger"><table><tbody><tr><td>Tue–Sat</td><td>Lunch, the quiet hours, dinner and the late sitting.</td><td>11:30–00:00</td></tr><tr><td>Sun</td><td>Lunch and the quiet hours.</td><td>11:30–17:00</td></tr><tr><td>Mon</td><td>The room rests.</td><td>Closed</td></tr></tbody></table></figure>
<!-- /wp:table --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kb-sec kb-mapsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kb-sec kb-mapsec"><!-- wp:group {"className":"kb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kb-wrap"><!-- wp:group {"className":"kb-map","layout":{"type":"default"}} -->
<div class="wp-block-group kb-map"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(map)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kb-map__addr"} -->
<p class="kb-map__addr">14 Arcade Row<br>Old Exchange Quarter, Lowmarket</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kb-sec kb-formsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kb-sec kb-formsec"><!-- wp:group {"className":"kb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kb-wrap"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(write to us)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kb-formsec__lead"} -->
<p class="kb-formsec__lead">Questions, tables and private events: write to bookings@kohaku-brasserie.example or call +00 20 7000 0414.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kb-page__form","layout":{"type":"default"}} -->
<div class="wp-block-group kb-page__form"><?php
ob_start();
?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kb-btn"} -->
<div class="wp-block-button kb-btn"><a class="wp-block-button__link wp-element-button" href="mailto:bookings@kohaku-brasserie.example"><?php echo esc_html( kohaku_brasserie_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kb-sec kb-rows","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kb-sec kb-rows"><!-- wp:group {"className":"kb-rows__in","layout":{"type":"default"}} -->
<div class="wp-block-group kb-rows__in"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(finding us)</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kb-chap sp-reveal sp-reveal--up kb-chap--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap sp-reveal sp-reveal--up kb-chap--plain"><!-- wp:group {"className":"kb-chap__when","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__when"><!-- wp:heading {"level":2,"className":"kb-chap__h"} -->
<h2 class="wp-block-heading kb-chap__h">Address and opening hours</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-chap__text","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__text"><!-- wp:paragraph -->
<p>Find us at 14 Arcade Row, Old Exchange Quarter, Lowmarket. Our dining room and bar operate Tuesday through Saturday from 11:30 to 00:00, and Sunday from 11:30 to 17:00. The brasserie is closed on Mondays. For reservations, general enquiries, or event planning, contact our team at bookings@kohaku-brasserie.example or telephone +00 20 7000 0414 during service hours. Whether dropping in for a glass of wine or attending a full dinner sitting, we are ready to assist you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-chap sp-reveal sp-reveal--up kb-chap--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap sp-reveal sp-reveal--up kb-chap--plain"><!-- wp:group {"className":"kb-chap__when","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__when"><!-- wp:heading {"level":2,"className":"kb-chap__h"} -->
<h2 class="wp-block-heading kb-chap__h">How to reach us by tram or bicycle</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-chap__text","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__text"><!-- wp:paragraph -->
<p>Arcade Row is a quiet pedestrian lane surfaced with heritage cobblestones. Guests traveling by public transit can arrive by tram, alighting at the central stop in the Old Exchange Quarter, which leaves you just a brief, pleasant walk from our front entrance. Dedicated bicycle stands are situated right along Arcade Row for cyclists. For guests arriving by car, several public parking garages are located within walking distance across the quarter, as Arcade Row itself remains closed to vehicular traffic.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-chap sp-reveal sp-reveal--up kb-chap--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap sp-reveal sp-reveal--up kb-chap--plain"><!-- wp:group {"className":"kb-chap__when","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__when"><!-- wp:heading {"level":2,"className":"kb-chap__h"} -->
<h2 class="wp-block-heading kb-chap__h">Is the dining room accessible for visitors with reduced mobility?</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-chap__text","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__text"><!-- wp:paragraph -->
<p>Our ground-floor dining room, bar area, and kitchen counter are completely step-free and fully accessible from the Arcade Row street entrance. Spacious spacing between our 64 main dining room seats ensures comfortable navigation for wheelchair users and guests with prams or mobility aids. An accessible, step-free restroom is located immediately adjacent to the main dining room on the ground level. If you require special seating arrangements or assistance upon arrival, please let our team know when booking.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
