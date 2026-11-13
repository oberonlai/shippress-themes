<?php
/**
 * Title: Page: The Monday letter
 * Slug: kohaku-brasserie/page-newsletter
 * Categories: kohaku-brasserie
 * Inserter: no
 * Description: Inner page: The Monday letter.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kb-hero kb-phero sp-parallax kb-phero--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kb-hero kb-phero sp-parallax kb-phero--plain"><!-- wp:group {"className":"kb-hero__bg sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kb-hero__bg sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kb-phero__img"} -->
<figure class="wp-block-image size-full kb-phero__img"><img src="<?php echo kohaku_brasserie_img( 'h03' ); ?>" alt="A single coffee cup and an open book rest on an afternoon dining table."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-hero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group kb-hero__shade"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-hero__copy kb-phero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kb-hero__copy kb-phero__copy"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(the Monday letter)</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kb-hero__h1 kb-phero__h1"} -->
<h1 class="wp-block-heading kb-hero__h1 kb-phero__h1">The Monday letter</h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kb-sec kb-intro","layout":{"type":"default"}} -->
<section class="wp-block-group kb-sec kb-intro"><!-- wp:group {"className":"kb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kb-wrap"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(one email each Monday)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kb-intro__p sp-reveal sp-reveal--up"} -->
<p class="kb-intro__p sp-reveal sp-reveal--up">The Monday letter is a weekly note published every Monday morning. It provides our regulars with an unhurried look at upcoming seasonal plates, cellar additions, and music for the week ahead.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kb-sec kb-formsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kb-sec kb-formsec"><!-- wp:group {"className":"kb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kb-wrap"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(subscribe)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kb-formsec__lead"} -->
<p class="kb-formsec__lead">Leave your address and we will open an email to us with your request.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kb-page__form","layout":{"type":"default"}} -->
<div class="wp-block-group kb-page__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'bookings@kohaku-brasserie.example', 'label' => kohaku_brasserie_t( 'forms_email' ), 'submit' => kohaku_brasserie_t( 'forms_subscribe' ), 'notice' => kohaku_brasserie_t( 'forms_mail_notice' ), 'subject' => kohaku_brasserie_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kb-sec kb-rows","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kb-sec kb-rows"><!-- wp:group {"className":"kb-rows__in","layout":{"type":"default"}} -->
<div class="wp-block-group kb-rows__in"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(about the letter)</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kb-chap sp-reveal sp-reveal--up kb-chap--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap sp-reveal sp-reveal--up kb-chap--plain"><!-- wp:group {"className":"kb-chap__when","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__when"><!-- wp:heading {"level":2,"className":"kb-chap__h"} -->
<h2 class="wp-block-heading kb-chap__h">The Monday letter publication schedule</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-chap__text","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__text"><!-- wp:paragraph -->
<p>At Kohaku Brasserie, we believe communication should be as deliberate and thoughtful as our cooking. The Monday letter is sent once every Monday morning, directly to your inbox before our weekly service begins on Tuesday at 11:30. We never flood your inbox with daily promotions, marketing campaigns, or third-party announcements. Instead, it serves as a single quiet dispatch that shares what is inspiring our kitchen and dining room as the new week gets underway.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-chap sp-reveal sp-reveal--up kb-chap--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap sp-reveal sp-reveal--up kb-chap--plain"><!-- wp:group {"className":"kb-chap__when","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__when"><!-- wp:heading {"level":2,"className":"kb-chap__h"} -->
<h2 class="wp-block-heading kb-chap__h">What will you find inside each letter?</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-chap__text","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__text"><!-- wp:paragraph -->
<p>Each Monday letter previews next week's afternoon plates served during the quiet hours from 14:30 to 18:00 for €16, curated by Tomasz Lindqvist and Kenji Albrecht-Mori. You will also discover the musical selections chosen by Daniel Okafor for the late sitting between 22:00 and midnight, along with notes on newly uncorked wines by the glass starting from €7 selected by Lucía Ferreira. It offers an authentic window into our craft, helping you plan your next visit.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-chap sp-reveal sp-reveal--up kb-chap--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap sp-reveal sp-reveal--up kb-chap--plain"><!-- wp:group {"className":"kb-chap__when","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__when"><!-- wp:heading {"level":2,"className":"kb-chap__h"} -->
<h2 class="wp-block-heading kb-chap__h">How do you subscribe or manage your preferences?</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-chap__text","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chap__text"><!-- wp:paragraph -->
<p>To subscribe, simply enter your email address into the form below. When you submit your request, your email client will prepare a direct subscription note addressed to bookings@kohaku-brasserie.example. We handle your contact details with care and confidentiality, never sharing them with external services. Every issue includes a simple, immediate option to unsubscribe, or you can email Hana Novak at any time to remove your address from our mailing list.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
