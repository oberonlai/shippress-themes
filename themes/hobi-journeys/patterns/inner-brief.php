<?php
/**
 * Title: Brief us: the single way to brief (form slot)
 * Slug: hobi-journeys/inner-brief
 * Categories: hobi-journeys
 * Viewport Width: 1440
 * Description: Navy title bar over a light-grey panel of four cells with the shared contact form slot (mailto fallback), then what happens next and a meeting photograph.
 */
?>
<!-- wp:group {"className":"hj-section hj-lines hj-briefsec hj-briefsec--page","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hj-section hj-lines hj-briefsec hj-briefsec--page"><!-- wp:group {"className":"hj-brief","layout":{"type":"default"}} -->
<div class="wp-block-group hj-brief"><!-- wp:group {"className":"hj-brief__bar","layout":{"type":"default"}} -->
<div class="wp-block-group hj-brief__bar"><!-- wp:heading {"level":2,"className":"hj-brief__h"} -->
<h2 class="wp-block-heading hj-brief__h">Brief us on your team.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-brief__panel","layout":{"type":"default"}} -->
<div class="wp-block-group hj-brief__panel"><!-- wp:group {"className":"hj-brief__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hj-brief__grid"><!-- wp:group {"className":"hj-bcell","layout":{"type":"default"}} -->
<div class="wp-block-group hj-bcell"><!-- wp:paragraph {"className":"hj-bcell__l"} -->
<p class="hj-bcell__l">Team size</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-bcell__v"} -->
<p class="hj-bcell__v">20 to 120 guests</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-bcell","layout":{"type":"default"}} -->
<div class="wp-block-group hj-bcell"><!-- wp:paragraph {"className":"hj-bcell__l"} -->
<p class="hj-bcell__l">When</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-bcell__v"} -->
<p class="hj-bcell__v">6 to 12 months ahead</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-bcell","layout":{"type":"default"}} -->
<div class="wp-block-group hj-bcell"><!-- wp:paragraph {"className":"hj-bcell__l"} -->
<p class="hj-bcell__l">Budget</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-bcell__v"} -->
<p class="hj-bcell__v">from €980 per guest</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-bcell","layout":{"type":"default"}} -->
<div class="wp-block-group hj-bcell"><!-- wp:paragraph {"className":"hj-bcell__l"} -->
<p class="hj-bcell__l">Reward rule</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-bcell__v"} -->
<p class="hj-bcell__v">yours; we cost three destinations</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-brief__form","layout":{"type":"default"}} -->
<div class="wp-block-group hj-brief__form"><?php
ob_start(); ?>
<!-- wp:buttons {"className":"hj-brief__btn"} -->
<div class="wp-block-buttons hj-brief__btn"><!-- wp:button {"className":"hj-btn hj-btn--brief"} -->
<div class="wp-block-button hj-btn hj-btn--brief"><a class="wp-block-button__link wp-element-button" href="mailto:brief@hobi-journeys.example?subject=<?php echo esc_attr( rawurlencode( hobi_journeys_t( 'forms_brief_subject' ) ) ); ?>"><?php echo esc_html( hobi_journeys_t( 'forms_brief_button' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"hj-form-hint"} -->
<p class="hj-form-hint"><?php echo esc_html( hobi_journeys_t( 'forms_brief_hint' ) ); ?></p>
<!-- /wp:paragraph -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hj-brief__line"} -->
<p class="hj-brief__line">Office Mon–Fri 08:30–18:00 · <a href="tel:+441632960418">+44 1632 960 418</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-section hj-lines hj-secs","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hj-section hj-lines hj-secs"><!-- wp:group {"className":"hj-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group hj-narrow"><!-- wp:group {"className":"hj-sec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hj-sec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"hj-sec__h"} -->
<h2 class="wp-block-heading hj-sec__h">What happens next</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hj-sec__b","layout":{"type":"default"}} -->
<div class="wp-block-group hj-sec__b"><!-- wp:paragraph -->
<p>Three steps, in this order.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-rows","layout":{"type":"default"}} -->
<div class="wp-block-group hj-rows"><!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">Within 2 working days</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">Hana Novak replies with first observations on your brief.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">A call with a planner</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">We clarify dates, dietary needs and meeting requirements.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">Within 3 weeks</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">A costed proposal of three destinations with confirmed hotels and a draft day-by-day schedule. The proposal costs €1,200, credited when you book.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","className":"hj-brief__photo"} -->
<figure class="wp-block-image size-full hj-brief__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/brief-meeting.webp' ) ); ?>" alt="A planner and a client sales director talking across a small meeting table with a notebook and a coffee."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
