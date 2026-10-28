<?php
/**
 * Title: Home: visit and news
 * Slug: nagi-imaging/front-visit
 * Categories: nagi-imaging
 * Keywords: imaging, clinic, radiology
 * Viewport Width: 1440
 * Description: Top and bottom halves: reception photograph with strips and the address, then three news rows on light grey.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nagi-sec nagi-visit__top","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nagi-sec nagi-visit__top">
<!-- wp:group {"className":"nagi-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-wrap">
<!-- wp:paragraph {"className":"nagi-label"} -->
<p class="nagi-label">Calder Quay, Dublin 2</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nagi-word"} -->
<h2 class="wp-block-heading nagi-word">Visit</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"nagi-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-visit__grid">
<!-- wp:group {"className":"nagi-visit__fig","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-visit__fig">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-p17 sp-parallax nagi-par-5"} -->
<figure class="wp-block-image size-large nagi-frame nagi-p17 sp-parallax nagi-par-5"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p17-reception.webp' ) ); ?>" alt="A receptionist greets a patient warmly across the softly illuminated reception desk in the evening."/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"nagi-strips nagi-strips--abs nagi-strips--visit"} -->
<p class="nagi-strips nagi-strips--abs nagi-strips--visit"><span class="nagi-strip">Weekdays 07:30–19:00,</span><span class="nagi-strip">Saturdays 08:00–13:00.</span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"nagi-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-visit__text">
<!-- wp:paragraph {"className":"nagi-addr"} -->
<p class="nagi-addr">14 Calder Quay, Grand Canal Dock, Dublin 2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-contact"} -->
<p class="nagi-contact">Phone <a href="tel:+35315550148">+353 1 555 0148</a><br>Referrals <a href="mailto:referrals@nagi-imaging.example">referrals@nagi-imaging.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-contact__note"} -->
<p class="nagi-contact__note">Step-free entrance from the quay; paid parking at Calder Quay car park. A four-minute walk from the tram stop. Referral phone line Mon–Fri 08:00–17:00; Sunday closed.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-arrowlink"} -->
<p class="nagi-arrowlink"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact &amp; visit<span class="nagi-circle" aria-hidden="true">→</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nagi-sec nagi-visit__news","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nagi-sec nagi-visit__news">
<!-- wp:group {"className":"nagi-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-wrap">
<!-- wp:paragraph {"className":"nagi-label"} -->
<p class="nagi-label">News</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nagi-newsrows","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-newsrows">
<!-- wp:group {"className":"nagi-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-newsrow">
<!-- wp:paragraph {"className":"nagi-newsrow__date"} -->
<p class="nagi-newsrow__date">28.10.2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__tag"} -->
<p class="nagi-newsrow__tag">Today</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__title"} -->
<p class="nagi-newsrow__title"><a href="<?php echo esc_url( home_url( '/ct-now-until-1900-on-weekdays/' ) ); ?>">CT now until 19:00 on weekdays</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__go"} -->
<p class="nagi-newsrow__go"><a class="nagi-circle" href="<?php echo esc_url( home_url( '/ct-now-until-1900-on-weekdays/' ) ); ?>" aria-label="CT now until 19:00 on weekdays">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"nagi-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-newsrow">
<!-- wp:paragraph {"className":"nagi-newsrow__date"} -->
<p class="nagi-newsrow__date">15.10.2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__tag"} -->
<p class="nagi-newsrow__tag">Studies</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__title"} -->
<p class="nagi-newsrow__title"><a href="<?php echo esc_url( home_url( '/saturday-mornings-ultrasound-and-x-ray/' ) ); ?>">Saturday mornings: ultrasound and X-ray</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__go"} -->
<p class="nagi-newsrow__go"><a class="nagi-circle" href="<?php echo esc_url( home_url( '/saturday-mornings-ultrasound-and-x-ray/' ) ); ?>" aria-label="Saturday mornings: ultrasound and X-ray">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"nagi-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-newsrow">
<!-- wp:paragraph {"className":"nagi-newsrow__date"} -->
<p class="nagi-newsrow__date">02.10.2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__tag"} -->
<p class="nagi-newsrow__tag">Studies</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__title"} -->
<p class="nagi-newsrow__title"><a href="<?php echo esc_url( home_url( '/dexa-and-mammography-in-one-visit/' ) ); ?>">DEXA and mammography in one visit</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__go"} -->
<p class="nagi-newsrow__go"><a class="nagi-circle" href="<?php echo esc_url( home_url( '/dexa-and-mammography-in-one-visit/' ) ); ?>" aria-label="DEXA and mammography in one visit">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
