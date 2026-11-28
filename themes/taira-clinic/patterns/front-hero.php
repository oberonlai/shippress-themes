<?php
/**
 * Title: Home: split hero with a docked finder box
 * Slug: taira-clinic/front-hero
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Photograph on the left that slowly crossfades between two moments of one session, a stepped four-line headline and two flat booking blocks on the right, a finder box docked on the photo corner and a four-figure stats row.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-hero">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hero__grid">
<!-- wp:group {"className":"tc-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hero__photo">
<!-- wp:group {"className":"tc-hero__imgs","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hero__imgs">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-hero__fig"} -->
<figure class="wp-block-image size-full tc-hero__fig"><img src="<?php echo taira_clinic_img( 'p01-steadied-on-pad.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<figure class="wp-block-image size-full tc-hero__fig tc-hero__alt" aria-hidden="true"><img src="<?php echo taira_clinic_img( 'p02-steady-on-pad.webp' ); ?>" alt="" loading="lazy" decoding="async"/></figure>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<nav class="tc-finder" aria-label="<?php echo taira_clinic_a( 'finder_label' ); ?>"><div class="tc-finder__in"><a class="tc-finder__row" href="/symptoms/"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><circle cx="8.5" cy="8.5" r="5.5"/><path d="M13 13l5 5"/></svg><span><?php echo esc_html( taira_clinic_t( 'finder_symptom' ) ); ?></span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M2 8h11M9 4l4 4-4 4"/></svg></a><a class="tc-finder__row" href="/assessment/"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><circle cx="8.5" cy="8.5" r="5.5"/><path d="M13 13l5 5"/></svg><span><?php echo esc_html( taira_clinic_t( 'finder_test' ) ); ?></span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M2 8h11M9 4l4 4-4 4"/></svg></a></div></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hero__text">
<!-- wp:paragraph {"className":"tc-eyebrow"} -->
<p class="tc-eyebrow"><?php echo esc_html( taira_clinic_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-h1"} -->
<h1 class="wp-block-heading tc-h1"><span class="tc-h1__1"><?php echo esc_html( taira_clinic_t( 'hero_h1' ) ); ?></span> <span class="tc-h1__2"><?php echo esc_html( taira_clinic_t( 'hero_h2' ) ); ?></span> <span class="tc-h1__3"><?php echo esc_html( taira_clinic_t( 'hero_h3' ) ); ?></span> <span class="tc-h1__4"><?php echo esc_html( taira_clinic_t( 'hero_h4' ) ); ?></span></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( taira_clinic_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="tc-cta2 tc-cta2--hero"><a class="tc-blk" href="/contact/#book"><span class="tc-blk__t"><?php echo esc_html( taira_clinic_t( 'blk_book' ) ); ?></span><span class="tc-blk__s"><?php echo esc_html( taira_clinic_t( 'blk_book_s' ) ); ?></span><span class="tc-blk__ar" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M2 8h11M9 4l4 4-4 4"/></svg></span></a><a class="tc-blk" href="tel:+15550142200"><span class="tc-blk__t"><?php echo esc_html( taira_clinic_t( 'blk_call' ) ); ?></span><span class="tc-blk__s"><?php echo esc_html( taira_clinic_t( 'hd_phone' ) ); ?></span><span class="tc-blk__ar" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M2 8h11M9 4l4 4-4 4"/></svg></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-stats","layout":{"type":"default"}} -->
<div class="wp-block-group tc-stats">
<!-- wp:group {"className":"tc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group tc-stat"><!-- wp:paragraph {"className":"tc-stat__n"} -->
<p class="tc-stat__n"><?php echo esc_html( taira_clinic_t( 'st1_n' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-stat__l"} -->
<p class="tc-stat__l"><?php echo esc_html( taira_clinic_t( 'st1_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group tc-stat"><!-- wp:paragraph {"className":"tc-stat__n"} -->
<p class="tc-stat__n"><?php echo esc_html( taira_clinic_t( 'st2_n' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-stat__l"} -->
<p class="tc-stat__l"><?php echo esc_html( taira_clinic_t( 'st2_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group tc-stat"><!-- wp:paragraph {"className":"tc-stat__n"} -->
<p class="tc-stat__n"><?php echo esc_html( taira_clinic_t( 'st3_n' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-stat__l"} -->
<p class="tc-stat__l"><?php echo esc_html( taira_clinic_t( 'st3_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group tc-stat"><!-- wp:paragraph {"className":"tc-stat__n"} -->
<p class="tc-stat__n"><?php echo esc_html( taira_clinic_t( 'st4_n' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-stat__l"} -->
<p class="tc-stat__l"><?php echo esc_html( taira_clinic_t( 'st4_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
