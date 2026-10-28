<?php
/**
 * Title: Home: hero
 * Slug: nagi-imaging/front-hero
 * Categories: nagi-imaging
 * Keywords: imaging, clinic, radiology
 * Viewport Width: 1440
 * Description: Scattered field of seven rounded low-key photographs drifting at different speeds, the headline on two white strips crossing the console photo, a light-grey bottom half with the lede and a ticker bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nagi-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nagi-hero">
<!-- wp:group {"className":"nagi-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-hero__stage">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f1 sp-parallax nagi-par-6"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f1 sp-parallax nagi-par-6"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-console.webp' ) ); ?>" alt="A radiographer sits at a dark console with soft monitor glow illuminating hands and face."/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f2 sp-parallax nagi-par-9"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f2 sp-parallax nagi-par-9"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-gantry.webp' ) ); ?>" alt="The curved edge of a CT gantry ring glows faintly above an empty patient table."/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f3 sp-parallax nagi-par-7"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f3 sp-parallax nagi-par-7"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3-monitor.webp' ) ); ?>" alt="Greyscale diagnostic monitor glowing on a wooden desk in a darkened clinical reading room."/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f4 sp-parallax nagi-par-5"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f4 sp-parallax nagi-par-5"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h4-corridor.webp' ) ); ?>" alt="A healthcare worker in dark scrubs walks down a dim clinical corridor toward a doorway."/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f5 sp-parallax nagi-par-8"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f5 sp-parallax nagi-par-8"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h5-keyboard.webp' ) ); ?>" alt="Hands typing on a computer keyboard beside a black dictation microphone under soft monitor light."/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f6 sp-parallax nagi-par-4"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f6 sp-parallax nagi-par-4"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h6-report.webp' ) ); ?>" alt="A hand places a printed paper medical report into a plain white envelope under lamplight."/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f7 sp-parallax nagi-par-10"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f7 sp-parallax nagi-par-10"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h7-chair.webp' ) ); ?>" alt="An empty cushioned chair stands beside a tall window at dusk near a potted plant."/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"className":"nagi-strips nagi-hero__title"} -->
<h1 class="wp-block-heading nagi-strips nagi-hero__title"><span class="nagi-strip">Scans from your clinic,</span><span class="nagi-strip">read and reported the same day.</span></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"nagi-hero__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-hero__bottom">
<!-- wp:paragraph {"className":"nagi-lede"} -->
<p class="nagi-lede">Nagi Imaging is a small outpatient imaging room on Calder Quay. Nearby clinics send their patients in the morning; two radiologists read every CT and MRI, and the written report reaches the referring doctor the same working day.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nagi-links","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-links">
<!-- wp:paragraph {"className":"nagi-arrowlink"} -->
<p class="nagi-arrowlink"><a href="<?php echo esc_url( home_url( '/referrers/' ) ); ?>">Refer a patient<span class="nagi-circle" aria-hidden="true">→</span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-arrowlink"} -->
<p class="nagi-arrowlink"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Book a scan<span class="nagi-circle" aria-hidden="true">→</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"nagi-ticker","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-ticker">
<!-- wp:paragraph {"className":"nagi-ticker__date"} -->
<p class="nagi-ticker__date">28.10.2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-ticker__tag"} -->
<p class="nagi-ticker__tag"><span class="nagi-dot" aria-hidden="true"></span>Today</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-ticker__line"} -->
<p class="nagi-ticker__line"><a href="<?php echo esc_url( home_url( '/studies/' ) ); ?>">CT, MRI, ultrasound, X-ray, DEXA and mammography accepted — scans before 15:00 reported by 18:00</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-ticker__arrows"} -->
<p class="nagi-ticker__arrows"><a class="nagi-circle" href="<?php echo esc_url( home_url( '/news/' ) ); ?>" aria-label="News">←</a><a class="nagi-circle" href="<?php echo esc_url( home_url( '/studies/' ) ); ?>" aria-label="Studies">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
