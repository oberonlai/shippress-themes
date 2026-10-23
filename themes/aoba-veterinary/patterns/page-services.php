<?php
/**
 * Title: Page: Services
 * Slug: aoba-veterinary/page-services
 * Categories: aoba-veterinary
 * Keywords: page
 * Viewport Width: 1440
 * Description: Services: dogs, cats, surgery and dental cards, then consultations, vaccination, diagnostics, senior care and nutrition.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-hero av-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-hero av-hero--page"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p05-exam.webp' ); ?>","alt":"Nurse and vet examining a beagle on a low table with a stethoscope","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":360,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-hero__photo" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Nurse and vet examining a beagle on a low table with a stethoscope" src="<?php echo esc_url( $av . 'p05-exam.webp' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box","layout":{"type":"default"}} -->
<div class="wp-block-group av-box"><!-- wp:heading {"textAlign":"center","level":1,"className":"av-box__title"} -->
<h1 class="wp-block-heading has-text-align-center av-box__title">Services</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line">General practice · Surgery · Dentistry</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-path","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-path"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>","alt":"Bright empty waiting area with an oak bench and green plants","dimRatio":60,"overlayColor":"ground","minHeight":600,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","align":"full","className":"av-path__band","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-center av-path__band" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-ground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Bright empty waiting area with an oak bench and green plants" src="<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","className":"av-label"} -->
<h2 class="wp-block-heading has-text-align-center av-label">Dogs · Cats · Surgery</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","className":"av-path__cards sp-stagger","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide av-path__cards sp-stagger">
<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p09-paw.webp' ); ?>","alt":"Close-up of hands checking a dog’s paw in the clinic","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Close-up of hands checking a dog’s paw in the clinic" src="<?php echo esc_url( $av . 'p09-paw.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/services/">Dogs</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">Check-ups, vaccines and care for dogs of every age.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p10-listening.webp' ); ?>","alt":"Vet listening to a cat’s chest with a stethoscope as the owner holds it","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Vet listening to a cat’s chest with a stethoscope as the owner holds it" src="<?php echo esc_url( $av . 'p10-listening.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/cat-care/">Cats</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">Quiet appointments for cats, in a room of their own.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p12-surgery-prep.webp' ); ?>","alt":"Clean surgery preparation room with covered instrument trays","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Clean surgery preparation room with covered instrument trays" src="<?php echo esc_url( $av . 'p12-surgery-prep.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/surgery-dental/">Surgery &amp; dental</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">Planned operations and dental care, with a written estimate first.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-page"><!-- wp:paragraph {"className":"av-lead"} -->
<p class="av-lead">General practice, surgery and dentistry for dogs and cats, with published fees and a written estimate before any treatment.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small av-long--first"} -->
<h2 class="wp-block-heading av-long av-long--small av-long--first">Dogs, cats, surgery and dental</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Care at Aoba Veterinary Clinic is organised around dogs, cats, and surgery and dental work. Dogs are seen for everyday medicine, prevention and the injuries that need Dr. Samuel Osei, whose field is surgery and orthopaedics. Cats are seen with feline medicine led by Dr. Priya Nair, in a clinic that keeps a separate cat waiting room.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Surgery and dentistry cover planned procedures, from neutering to dental scale and polish under anaesthesia, with imaging led by Dr. Tomás Ribeiro. All of it sits in one building at 214 Alder Street, Fairhaven, opened in 2014. Each of these paths has its own page: cat care, surgery and dental, and the fee list. A written estimate comes before treatment on every one of them.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small">Consultations</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A consultation is the centre of general practice here. The first one lasts 30 minutes, includes a full examination, and costs $65. A follow-up lasts 15 minutes and costs $45. Dr. Elena Varga, clinic director, sees internal medicine cases and is responsible for the standard of that conversation: what we heard, what we found, and what we propose.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>You are shown the findings in the room. If medicine, a further test or a procedure is the next step, the fee is written down before anything starts. Many problems are settled at this level. Some move on to surgery, dentistry or a senior blood panel, and the consultation is where that decision is explained. Book by phone on +1 555 0142 300 or by email at hello@aobavet.example.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-arrow"} -->
<div class="wp-block-buttons av-arrow"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/fees/">Fees</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small">Vaccinations and prevention</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The annual vaccination includes the health check. For a dog the vaccine is DHPP. For a cat it is FVRCP. The fee is $58. We use that visit to look at weight, teeth, ears and the questions that have gathered since the last year, and to agree what can wait and what should be booked.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Microchip and registration, when an animal does not yet have a chip, is $49. Prevention here is these published items plus the examination that comes with them, not a bundle of unnamed extras. Anything beyond the vaccination and the check is written as its own estimate. Puppies, kittens and adult boosters are booked as consultations, so the check is a real  appointment rather than a stop at the door. Prices include tax.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small">Diagnostics</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A large part of diagnosis happens in the building. We run blood tests in-house, and we have digital X-ray and ultrasound. Dr. Tomás Ribeiro leads dentistry and imaging, so the pictures that guide a dental procedure or an internal case are read here, with the clinician who is looking after your animal.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Findings are explained in plain language before we talk about treatment. A senior blood panel, when it is the right test, is $110 and is listed with the other fees. Imaging and laboratory work that we advise are named on the written estimate, with the fee, before we proceed. The same standard holds for a limping dog, a cat losing weight, or a dental mouth we have only glanced at in the consult room.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-arrow"} -->
<div class="wp-block-buttons av-arrow"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/surgery-dental/">Surgery and dental</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small">Senior care</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Older dogs and cats are a steady part of the week. Dr. Elena Varga’s internal medicine work often means watching appetite, thirst, weight and energy, then deciding whether a senior blood panel will add something the examination cannot. The panel is $110.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>It can sit beside the annual vaccination visit, which remains $58 including the check, or it can be booked because something has changed. Drinking much more than usual, a coat that has dulled, or a cat hiding more than usual are reasons to come before the year is up. We would rather see an older animal while a change is still small. Follow-up consultations are 15 minutes at $45, and long-term conditions are reviewed on a schedule you can see in advance.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small">Nutrition</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Diet is discussed in the consultation, starting from the food you already feed. Bring the name of that food, or a photo of the bag, and mention anything else your dog or cat eats, including leftovers and treats. If a change is worth making, it is written into the plan in words you can shop with. We do not tie that advice to a single manufacturer.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nutrition comes up at vaccination visits, during senior care, and when an animal is losing or gaining weight. Juniper, a cat of 12, came because of weight loss, and the answer was a thyroid condition rather than a new bag of food. The food list still mattered, because it kept the history honest. Your first consultation is the right place to begin.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-arrow"} -->
<div class="wp-block-buttons av-arrow"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/first-visit/">Your first visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
