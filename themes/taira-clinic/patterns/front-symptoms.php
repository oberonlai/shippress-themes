<?php
/**
 * Title: Home: what brings people in
 * Slug: taira-clinic/front-symptoms
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: A pale band with a heading and a one-line intro, then a row of five plate cards (label plate fused to the top of each photograph) cut off at the right edge.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"symptoms","align":"full","className":"tc-sec tc-sec--symptoms tc-band","layout":{"type":"default"}} -->
<section id="symptoms" class="wp-block-group alignfull tc-sec tc-sec--symptoms tc-band">
<!-- wp:group {"className":"tc-wrap tc-secthead","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-secthead">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( taira_clinic_t( 'sy_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-secthead__p"} -->
<p class="tc-secthead__p"><?php echo esc_html( taira_clinic_t( 'sy_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-peek sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-peek sp-reveal sp-reveal--up">
<!-- wp:html -->
<div class="tc-peek__nav"><button type="button" class="tc-peek__btn" data-tc-peek="-1" aria-label="<?php echo taira_clinic_a( 'sy_prev' ); ?>"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false"><path d="M11 3 5 9l6 6"/></svg></button><button type="button" class="tc-peek__btn" data-tc-peek="1" aria-label="<?php echo taira_clinic_a( 'sy_next' ); ?>"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false"><path d="m7 3 6 6-6 6"/></svg></button></div>
<!-- /wp:html -->
<!-- wp:group {"className":"tc-peek__row","layout":{"type":"default"}} -->
<div class="wp-block-group tc-peek__row">
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sy1_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p03-edge-of-bed.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sy1_x' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__more"} -->
<p class="tc-card__more"><a href="/symptoms/"><?php echo esc_html( taira_clinic_t( 'sy_more' ) ); ?> &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sy2_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p04-station-concourse.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sy2_x' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__more"} -->
<p class="tc-card__more"><a href="/symptoms/"><?php echo esc_html( taira_clinic_t( 'sy_more' ) ); ?> &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sy3_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p05-cyclist-check.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sy3_x' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__more"} -->
<p class="tc-card__more"><a href="/symptoms/"><?php echo esc_html( taira_clinic_t( 'sy_more' ) ); ?> &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sy4_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p06-rising-with-stick.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sy4_x' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__more"} -->
<p class="tc-card__more"><a href="/symptoms/"><?php echo esc_html( taira_clinic_t( 'sy_more' ) ); ?> &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sy5_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p07-supermarket-aisle.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sy5_x' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__more"} -->
<p class="tc-card__more"><a href="/symptoms/"><?php echo esc_html( taira_clinic_t( 'sy_more' ) ); ?> &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
