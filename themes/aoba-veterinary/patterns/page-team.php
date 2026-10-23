<?php
/**
 * Title: Page: Team
 * Slug: aoba-veterinary/page-team
 * Categories: aoba-veterinary
 * Keywords: page
 * Viewport Width: 1440
 * Description: Team: seven named people as ruled rows, then the three areas of the clinic.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-hero av-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-hero av-hero--page"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p16-team.webp' ); ?>","alt":"Three clinic staff talking in a bright corridor","dimRatio":0,"focalPoint":{"x":0.5,"y":0.45},"minHeight":360,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-hero__photo" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Three clinic staff talking in a bright corridor" src="<?php echo esc_url( $av . 'p16-team.webp' ); ?>" style="object-position:50% 45%" data-object-fit="cover" data-object-position="50% 45%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box","layout":{"type":"default"}} -->
<div class="wp-block-group av-box"><!-- wp:heading {"textAlign":"center","level":1,"className":"av-box__title"} -->
<h1 class="wp-block-heading has-text-align-center av-box__title">Team</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line">Seven people, by name</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-path","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-path"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>","alt":"Bright empty waiting area with an oak bench and green plants","dimRatio":60,"overlayColor":"ground","minHeight":600,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","align":"full","className":"av-path__band","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-center av-path__band" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-ground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Bright empty waiting area with an oak bench and green plants" src="<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","className":"av-label"} -->
<h2 class="wp-block-heading has-text-align-center av-label">Rooms · Surgery · Nursing</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","className":"av-path__cards sp-stagger","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide av-path__cards sp-stagger">
<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p07-director.webp' ); ?>","alt":"Dr. Elena Varga holding a grey cat and facing the camera","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Dr. Elena Varga holding a grey cat and facing the camera" src="<?php echo esc_url( $av . 'p07-director.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/services/">Consult rooms</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">Dr. Varga and colleagues, with time to listen.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p12-surgery-prep.webp' ); ?>","alt":"Clean surgery preparation room with covered instrument trays","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Clean surgery preparation room with covered instrument trays" src="<?php echo esc_url( $av . 'p12-surgery-prep.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/surgery-dental/">Surgery</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">Dr. Osei and Dr. Ribeiro, with monitored anaesthesia.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p11-recovery.webp' ); ?>","alt":"Dog resting on a soft blanket in a recovery kennel with the door open","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Dog resting on a soft blanket in a recovery kennel with the door open" src="<?php echo esc_url( $av . 'p11-recovery.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/stories/">Nursing &amp; recovery</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">Hannah and Malik look after the days after surgery.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-page"><!-- wp:paragraph {"className":"av-lead"} -->
<p class="av-lead">Dr. Elena Varga leads Aoba Veterinary Clinic with colleagues in surgery, feline medicine, dentistry, nursing, rehabilitation and reception.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small av-long--first"} -->
<h2 class="wp-block-heading av-long av-long--small av-long--first">Seven people, by name</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"av-people","layout":{"type":"default"}} -->
<div class="wp-block-group av-people"><!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name">Dr. Elena Varga</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role">Founder and clinic director</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text">Internal medicine. Founded the clinic in 2014 after twelve years in a city referral hospital.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name">Dr. Samuel Osei</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role">Surgery and orthopaedics</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text">Soft-tissue and joint surgery, including Biscuit’s cruciate repair.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name">Dr. Priya Nair</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role">Feline medicine</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text">Cats of every age, thyroid and long-term conditions, and the quiet cat room.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name">Dr. Tomás Ribeiro</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role">Dentistry and imaging</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text">Dental care, digital X-ray, ultrasound and endoscopy.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name">Hannah Lindqvist</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role">Head veterinary nurse</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text">Leads the nursing team, admissions and the discharge calls.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name">Malik Haddad</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role">Veterinary nurse, rehabilitation</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text">Writes home recovery and rehabilitation plans after surgery.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name">Clara Moreau</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role">Reception and care coordinator</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text">Books appointments, answers the phone and keeps owners informed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"av-long av-long--small av-long--first"} -->
<h2 class="wp-block-heading av-long av-long--small av-long--first">Doctors</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Dr. Elena Varga is founder and clinic director, and her field is internal medicine. She opened the clinic in 2014 after twelve years in a city referral hospital. Dr. Samuel Osei’s field is surgery and orthopaedics, and he performed Biscuit’s cruciate ligament repair. Dr. Priya Nair’s field is feline medicine, and she manages Juniper’s thyroid condition.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Dr. Tomás Ribeiro’s field is dentistry and imaging, and he removed Otto’s swallowed sock by endoscopy. The four of them share one caseload of dogs and cats at 214 Alder Street. A case moves between them when the problem asks for it, and the owner still has a written estimate before treatment and a named person to ask. First consultations are 30 minutes. The director’s standard is that the explanation should be understandable without a medical dictionary.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small">Nursing and reception</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Hannah Lindqvist is head veterinary nurse. She leads nursing through examinations, surgery days, recovery and the calls that follow a visit. Malik Haddad is a veterinary nurse in rehabilitation. He wrote the plan that took Biscuit from cruciate surgery to full walks in 10 weeks. Clara Moreau is reception and care coordinator. She books visits, meets you at the desk, and keeps the day in order for dogs and cats alike.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>A nurse calls within 48 hours of a visit. The discharge call after surgery sits with the same nursing team. Questions about fasting, carriers, medicines and bills can start with Clara, and she will bring in a nurse or a doctor when the question needs them. The desk phone is +1 555 0142 300. The email is hello@aobavet.example.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small">Consult rooms, surgery, and recovery</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Consult rooms are where examinations happen and where findings are shown. A stethoscope, an ear exam, a paw, a dental look: you are in the room for it, and the estimate is written from what that exam found. Surgery is the prep room, the anaesthetic and the procedure, whether that is a neuter, a dental scale and polish, or an orthopaedic repair. Instruments are prepared for that case.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>A nurse monitors heart rate, breathing and temperature throughout. Nursing and recovery are the kennel with a soft blanket, the notes you take home, the discharge call, and rehabilitation when a case needs it. You will not be handed from one unnamed department to another. The same seven people cover these rooms, and the person responsible for each part is one of the names above.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-arrow"} -->
<div class="wp-block-buttons av-arrow"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/book/">Book a visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
