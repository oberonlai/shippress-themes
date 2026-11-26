<?php
/**
 * Title: Home: the survey plate
 * Slug: fuchi-glazing/front-survey
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: What a survey measures: a 4:5 photograph beside a ruled list of six readings and one paragraph.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"survey","align":"full","className":"fg-sec fg-sec--survey","layout":{"type":"default"}} -->
<section id="survey" class="wp-block-group alignfull fg-sec fg-sec--survey">
<!-- wp:group {"className":"fg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap">
<!-- wp:heading {"textAlign":"center","className":"fg-h2"} -->
<h2 class="wp-block-heading has-text-align-center fg-h2"><?php echo esc_html( fuchi_glazing_t( 'sv_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-lead"} -->
<p class="fg-lead"><?php echo esc_html( fuchi_glazing_t( 'sv_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-plate sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fg-plate sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"4/5","scale":"cover","className":"fg-plate__img"} -->
<figure class="wp-block-image size-full fg-plate__img"><img src="<?php echo fuchi_glazing_img( 'survey-laser.webp' ); ?>" alt="<?php echo fuchi_glazing_a( 'alt_p02' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"fg-plate__body","layout":{"type":"default"}} -->
<div class="wp-block-group fg-plate__body">
<!-- wp:html -->
<ul class="fg-readings"><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r1' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r1v' ) ); ?></span></li><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r2' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r2v' ) ); ?></span></li><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r3' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r3v' ) ); ?></span></li><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r4' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r4v' ) ); ?></span></li><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r5' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r5v' ) ); ?></span></li><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r6' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r6v' ) ); ?></span></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'sv_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
