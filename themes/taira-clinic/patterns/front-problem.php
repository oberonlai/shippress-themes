<?php
/**
 * Title: Home: the problem
 * Slug: taira-clinic/front-problem
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Narrative section: three paragraphs on the left, a tall corridor photograph on the right that drifts slower than the page.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"problem","align":"full","className":"tc-sec tc-sec--problem","layout":{"type":"default"}} -->
<section id="problem" class="wp-block-group alignfull tc-sec tc-sec--problem">
<!-- wp:group {"className":"tc-wrap tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-split">
<!-- wp:group {"className":"tc-split__a sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__a sp-stagger">
<!-- wp:heading {"className":"tc-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading tc-h2 sp-reveal sp-reveal--up"><?php echo esc_html( taira_clinic_t( 'pb_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body sp-reveal sp-reveal--up"} -->
<p class="tc-body sp-reveal sp-reveal--up"><?php echo esc_html( taira_clinic_t( 'pb_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body sp-reveal sp-reveal--up"} -->
<p class="tc-body sp-reveal sp-reveal--up"><?php echo esc_html( taira_clinic_t( 'pb_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body sp-reveal sp-reveal--up"} -->
<p class="tc-body sp-reveal sp-reveal--up"><?php echo esc_html( taira_clinic_t( 'pb_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__b tc-par sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__b tc-par sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-par__ph"} -->
<figure class="wp-block-image size-full tc-par__ph"><img src="<?php echo taira_clinic_img( 'p08-corridor-handrail.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
