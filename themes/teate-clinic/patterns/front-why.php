<?php
/**
 * Title: Home: why hands, not machines
 * Slug: teate-clinic/front-why
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Heading row, three narrative paragraphs in two text columns, then a full-width 3:1 photograph of hands at work.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"why","align":"full","className":"tc-sec tc-sec--why","layout":{"type":"default"}} -->
<section id="why" class="wp-block-group alignfull tc-sec tc-sec--why">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'why_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hlabel"} -->
<p class="tc-hlabel"><?php echo esc_html( teate_clinic_t( 'why_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prose sp-reveal sp-reveal--up">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'why_1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'why_2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'why_3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-figure","layout":{"type":"default"}} -->
<div class="wp-block-group tc-figure">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-figure__img"} -->
<figure class="wp-block-image size-full tc-figure__img"><img src="<?php echo teate_clinic_img( 'why-hands.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-caption"} -->
<p class="tc-caption"><?php echo esc_html( teate_clinic_t( 'why_cap' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
