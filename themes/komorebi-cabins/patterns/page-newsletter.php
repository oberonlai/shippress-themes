<?php
/**
 * Title: Page: The Woodshed Letter
 * Slug: komorebi-cabins/page-newsletter
 * Categories: komorebi-cabins
 * Viewport Width: 1440
 * Description: Standalone subscription page: three example items and the newsletter slot on a forest-green panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-head kc-head--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-head kc-head--plain"><!-- wp:group {"className":"kc-head__gutter","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head__gutter"><!-- wp:paragraph {"className":"kc-head__kicker"} -->
<p class="kc-head__kicker">First Thursday of the month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"kc-head__h1"} -->
<h1 class="wp-block-heading kc-head__h1">The Woodshed Letter</h1>
<!-- /wp:heading --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-intro-in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-intro-in"><!-- wp:paragraph {"className":"kc-lead kc-pintro"} -->
<p class="kc-lead kc-pintro">The Woodshed Letter is our monthly dispatch sent directly from the forest office on the first Thursday of each month. It contains open dates, woodland observations, and simple recipes.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-list kc-letteritems","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-list kc-letteritems"><!-- wp:group {"className":"kc-list__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-list__in"><!-- wp:group {"className":"kc-titlebar","layout":{"type":"default"}} -->
<div class="wp-block-group kc-titlebar"><!-- wp:heading {"level":2,"className":"kc-title"} -->
<h2 class="wp-block-heading kc-title">In every letter</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-bracket"} -->
<p class="kc-bracket">[ three short items ]</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ruled kc-letteritems","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled kc-letteritems"><!-- wp:group {"className":"kc-ruled__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled__row"><!-- wp:paragraph {"className":"kc-ruled__k"} -->
<p class="kc-ruled__k">Open dates</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-ruled__v"} -->
<p class="kc-ruled__v">weekends and midweeks still free</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ruled__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled__row"><!-- wp:paragraph {"className":"kc-ruled__k"} -->
<p class="kc-ruled__k">The season in the woods</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-ruled__v"} -->
<p class="kc-ruled__v">a note from Ilse or Ruben</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ruled__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled__row"><!-- wp:paragraph {"className":"kc-ruled__k"} -->
<p class="kc-ruled__k">One recipe</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-ruled__v"} -->
<p class="kc-ruled__v">for the cabin stove</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"subscribe","className":"kc-letterwrap kc-section","layout":{"type":"default"}} -->
<section id="subscribe" class="wp-block-group alignfull kc-letterwrap kc-section"><!-- wp:group {"className":"kc-letter kc-dark","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter kc-dark"><!-- wp:heading {"level":2,"className":"kc-letter__h"} -->
<h2 class="wp-block-heading kc-letter__h">The Woodshed Letter</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-letter__p"} -->
<p class="kc-letter__p">One short note on the first Thursday of each month: the weekends still open, how the woods are changing, and one recipe for the cabin stove.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@komorebi-cabins.example', 'label' => komorebi_cabins_t( 'forms_email' ), 'submit' => komorebi_cabins_t( 'forms_subscribe' ), 'notice' => komorebi_cabins_t( 'forms_mail_notice' ), 'subject' => komorebi_cabins_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec"><!-- wp:group {"className":"kc-sec__in sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__in sp-stagger"><!-- wp:heading {"level":2,"className":"kc-sec__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-sec__h sp-reveal sp-reveal--up">What is included in each monthly letter?</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-sec__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__body"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up">We write The Woodshed Letter once a month, publishing on the first Thursday and emailing it directly to our subscribers. Each issue is short, practical, and grounded in the immediate rhythms of the thirty-eight hectares around us. First, we share an updated overview of open weekend and midweek dates across our twelve cabins, alerting readers to newly released slots or cancellations before they are filled. Second, we provide a calm dispatch from the woods written by Ilse Marten or Ruben Okafor, describing the changing canopy, tree health, wildlife sightings, and the progression of seasonal timber work. Third, we include one seasonal recipe specifically tailored for cooking on our cabin induction stoves or over the wood fire, using simple, hearty ingredients suited for forest living.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec"><!-- wp:group {"className":"kc-sec__in sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__in sp-stagger"><!-- wp:heading {"level":2,"className":"kc-sec__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-sec__h sp-reveal sp-reveal--up">How do you subscribe to the letter?</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-sec__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__body"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up">To receive our monthly dispatch, simply enter your email address in the field below or send a quick note to stay@komorebi-cabins.example with the subject line Subscribe to The Woodshed Letter. We respect your privacy and never share your email address with third parties or use it for promotional marketing beyond our own monthly correspondence. You will receive exactly one letter on the first Thursday of each month, without automated sales campaigns or unnecessary announcements. If you ever wish to cancel your subscription, every issue contains a one-click unsubscribe link at the bottom, or you can notify our woodshed office directly to be removed from the list immediately.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
