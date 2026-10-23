<?php
/**
 * Title: Page: Your first visit
 * Slug: aoba-veterinary/page-first-visit
 * Categories: aoba-veterinary
 * Keywords: page
 * Viewport Width: 1440
 * Description: Your first visit: book, arrive, exam and plan, what to bring and the opening hours.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-hero av-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-hero av-hero--page"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p10-listening.webp' ); ?>","alt":"Vet listening to a cat’s chest with a stethoscope as the owner holds it","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":360,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-hero__photo" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Vet listening to a cat’s chest with a stethoscope as the owner holds it" src="<?php echo esc_url( $av . 'p10-listening.webp' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box","layout":{"type":"default"}} -->
<div class="wp-block-group av-box"><!-- wp:heading {"textAlign":"center","level":1,"className":"av-box__title"} -->
<h1 class="wp-block-heading has-text-align-center av-box__title">Your first visit</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line">30 minutes, a full examination</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-path","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-path"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>","alt":"Bright empty waiting area with an oak bench and green plants","dimRatio":60,"overlayColor":"ground","minHeight":600,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","align":"full","className":"av-path__band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-center av-path__band sp-parallax" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-ground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Bright empty waiting area with an oak bench and green plants" src="<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","className":"av-label"} -->
<h2 class="wp-block-heading has-text-align-center av-label">Book · Arrive · Plan</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","className":"av-path__cards sp-stagger","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide av-path__cards sp-stagger">
<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p14-reception.webp' ); ?>","alt":"Owner with a cat carrier talking to a receptionist across an oak desk","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Owner with a cat carrier talking to a receptionist across an oak desk" src="<?php echo esc_url( $av . 'p14-reception.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/book/">Book</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">By email or phone, with the signs and how long they have lasted.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p15-cat-room.webp' ); ?>","alt":"Cat-only waiting room with carrier shelves and a cat looking out of a carrier","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Cat-only waiting room with carrier shelves and a cat looking out of a carrier" src="<?php echo esc_url( $av . 'p15-cat-room.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/cat-care/">Arrive</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">Cats wait in their own room, dogs in the main area.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p05-exam.webp' ); ?>","alt":"Nurse and vet examining a beagle on a low table with a stethoscope","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Nurse and vet examining a beagle on a low table with a stethoscope" src="<?php echo esc_url( $av . 'p05-exam.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/fees/">Exam &amp; plan</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">You see what we find and get a written estimate first.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-page"><!-- wp:paragraph {"className":"av-lead"} -->
<p class="av-lead">A first visit is a 30-minute consultation: you book, you arrive, and we examine, explain and write the plan before treatment.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small av-long--first"} -->
<h2 class="wp-block-heading av-long av-long--small av-long--first">What to bring</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bring the vaccination record if you have it. Bring a list of the food your dog or cat eats and a list of any medicines, including anything bought without a prescription. If the problem is something you can record, bring a photo or a short video of the symptom: a limp on a walk, a cough, scratching at an ear, or a cat hiding. The picture is often clearer than a description given an hour later in a strange room.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If a procedure has already been planned, follow the fasting times we gave you for that animal. For a first consultation there is usually no fast. If you are unsure, call before you leave home. A nurse will tell you whether it can wait, and whether to bring the carrier covered, the lead, or the morning dose of a medicine you already give.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small">Hours</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Open Monday to Friday, 9:00–12:30 and 15:30–19:00. Open Saturday, 9:00–12:30 and 15:30–17:00. Saturday afternoon is the shorter session. Closed Sunday and public holidays. The clinic is open in those two blocks, morning and afternoon. Urgent same-day slots are kept on weekdays inside those hours.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>When we are closed, an emergency belongs with the regional emergency hospital. Your first visit will be placed in one of the open blocks, and the confirmation will say which. If you need a senior blood panel, a vaccination or a dental consultation, the same hours apply. Phone +1 555 0142 300. Email hello@aobavet.example. The address is 214 Alder Street, Fairhaven, and the clinic has been here since 2014.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"aoba-veterinary/timetable"} /-->

<!-- wp:buttons {"className":"av-book"} -->
<div class="wp-block-buttons av-book"><!-- wp:button {"className":"av-book__btn"} -->
<div class="wp-block-button av-book__btn"><a class="wp-block-button__link wp-element-button" href="/book/">Book a visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
