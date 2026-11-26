<?php
/**
 * Title: Home: three complaints
 * Slug: teate-clinic/front-complaints
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Heading row, then three photo cards: the three things people arrive with.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"complaints","align":"full","className":"tc-sec tc-sec--complaints","layout":{"type":"default"}} -->
<section id="complaints" class="wp-block-group alignfull tc-sec tc-sec--complaints">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'comp_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hlabel"} -->
<p class="tc-hlabel"><?php echo esc_html( teate_clinic_t( 'comp_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-comps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group tc-comps sp-stagger">
<!-- wp:group {"className":"tc-comp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-comp sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-comp__img"} -->
<figure class="wp-block-image size-full tc-comp__img"><img src="<?php echo teate_clinic_img( 'complaint-neck.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-comp__n"} -->
<p class="tc-comp__n">01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"tc-h3"} -->
<h3 class="wp-block-heading tc-h3"><?php echo esc_html( teate_clinic_t( 'comp_neck_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-comp__p"} -->
<p class="tc-comp__p"><?php echo esc_html( teate_clinic_t( 'comp_neck_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-more"} -->
<p class="tc-more"><a href="/conditions/#neck"><?php echo esc_html( teate_clinic_t( 'comp_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-comp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-comp sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-comp__img"} -->
<figure class="wp-block-image size-full tc-comp__img"><img src="<?php echo teate_clinic_img( 'complaint-back.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-comp__n"} -->
<p class="tc-comp__n">02</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"tc-h3"} -->
<h3 class="wp-block-heading tc-h3"><?php echo esc_html( teate_clinic_t( 'comp_back_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-comp__p"} -->
<p class="tc-comp__p"><?php echo esc_html( teate_clinic_t( 'comp_back_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-more"} -->
<p class="tc-more"><a href="/conditions/#back"><?php echo esc_html( teate_clinic_t( 'comp_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-comp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-comp sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-comp__img"} -->
<figure class="wp-block-image size-full tc-comp__img"><img src="<?php echo teate_clinic_img( 'complaint-sport.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-comp__n"} -->
<p class="tc-comp__n">03</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"tc-h3"} -->
<h3 class="wp-block-heading tc-h3"><?php echo esc_html( teate_clinic_t( 'comp_sport_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-comp__p"} -->
<p class="tc-comp__p"><?php echo esc_html( teate_clinic_t( 'comp_sport_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-more"} -->
<p class="tc-more"><a href="/conditions/#sport"><?php echo esc_html( teate_clinic_t( 'comp_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
