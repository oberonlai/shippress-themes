<?php
/**
 * Title: Home: sentence-builder band
 * Slug: noki-surveyors/front-ask
 * Categories: noki-surveyors
 * Viewport Width: 1440
 * Description: Dark ink band: a fill-in sentence with a white and a grey disclosure box, and three photo cards for cracks, damp and the roof.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"ask","align":"full","className":"nk-sec nk-sec--ask","layout":{"type":"default"}} -->
<section id="ask" class="wp-block-group alignfull nk-sec nk-sec--ask">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:heading {"level":2,"className":"nk-question"} -->
<h2 class="wp-block-heading nk-question"><?php echo esc_html( noki_surveyors_t( 'ask_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="nk-sentence"><span class="nk-sentence__w"><?php echo esc_html( noki_surveyors_t( 's_1' ) ); ?></span><details class="nk-pick nk-pick--a"><summary><?php echo esc_html( noki_surveyors_t( 's_a' ) ); ?></summary><ul><li><a href="#price-1"><?php echo esc_html( noki_surveyors_t( 'pa_1' ) ); ?></a></li><li><a href="#price-2"><?php echo esc_html( noki_surveyors_t( 'pa_2' ) ); ?></a></li><li><a href="#price-3"><?php echo esc_html( noki_surveyors_t( 'pa_3' ) ); ?></a></li><li><a href="#price-4"><?php echo esc_html( noki_surveyors_t( 'pa_4' ) ); ?></a></li></ul></details><span class="nk-sentence__w"><?php echo esc_html( noki_surveyors_t( 's_2' ) ); ?></span><details class="nk-pick nk-pick--b"><summary><?php echo esc_html( noki_surveyors_t( 's_b' ) ); ?></summary><ul><li><a href="#ask-cracks"><?php echo esc_html( noki_surveyors_t( 'pb_1' ) ); ?></a></li><li><a href="#ask-damp"><?php echo esc_html( noki_surveyors_t( 'pb_2' ) ); ?></a></li><li><a href="#ask-roof"><?php echo esc_html( noki_surveyors_t( 'pb_3' ) ); ?></a></li></ul></details></div>
<!-- /wp:html -->
<!-- wp:group {"className":"nk-qcards","layout":{"type":"default"}} -->
<div class="wp-block-group nk-qcards">
<!-- wp:group {"anchor":"ask-cracks","className":"nk-qcard","layout":{"type":"default"}} -->
<div id="ask-cracks" class="wp-block-group nk-qcard">
<!-- wp:group {"className":"nk-qcard__img","layout":{"type":"default"}} -->
<div class="wp-block-group nk-qcard__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo noki_surveyors_img( 'ask-crack-gauge.webp' ); ?>" alt="<?php echo noki_surveyors_a( 'alt_q1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"nk-qcard__t"} -->
<h3 class="wp-block-heading nk-qcard__t"><?php echo esc_html( noki_surveyors_t( 'q1_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-qcard__p"} -->
<p class="nk-qcard__p"><?php echo esc_html( noki_surveyors_t( 'q1_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-qlink"} -->
<p class="nk-qlink"><a href="#report"><?php echo esc_html( noki_surveyors_t( 'q_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"ask-damp","className":"nk-qcard","layout":{"type":"default"}} -->
<div id="ask-damp" class="wp-block-group nk-qcard">
<!-- wp:group {"className":"nk-qcard__img","layout":{"type":"default"}} -->
<div class="wp-block-group nk-qcard__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo noki_surveyors_img( 'ask-floorboards.webp' ); ?>" alt="<?php echo noki_surveyors_a( 'alt_q2' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"nk-qcard__t"} -->
<h3 class="wp-block-heading nk-qcard__t"><?php echo esc_html( noki_surveyors_t( 'q2_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-qcard__p"} -->
<p class="nk-qcard__p"><?php echo esc_html( noki_surveyors_t( 'q2_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-qlink"} -->
<p class="nk-qlink"><a href="#report"><?php echo esc_html( noki_surveyors_t( 'q_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"ask-roof","className":"nk-qcard","layout":{"type":"default"}} -->
<div id="ask-roof" class="wp-block-group nk-qcard">
<!-- wp:group {"className":"nk-qcard__img","layout":{"type":"default"}} -->
<div class="wp-block-group nk-qcard__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo noki_surveyors_img( 'ask-pole-camera.webp' ); ?>" alt="<?php echo noki_surveyors_a( 'alt_q3' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"nk-qcard__t"} -->
<h3 class="wp-block-heading nk-qcard__t"><?php echo esc_html( noki_surveyors_t( 'q3_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-qcard__p"} -->
<p class="nk-qcard__p"><?php echo esc_html( noki_surveyors_t( 'q3_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-qlink"} -->
<p class="nk-qlink"><a href="#report"><?php echo esc_html( noki_surveyors_t( 'q_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
