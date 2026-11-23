<?php
/**
 * Title: Home: the worries
 * Slug: soroe-clinic/front-worries
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: Paper cell: a tall photograph beside three narrative paragraphs, a vertical ghost word, and four worry cells below.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"worries","className":"so-cell so-worries","layout":{"type":"default"}} -->
<section id="worries" class="wp-block-group alignfull so-cell so-worries"><!-- wp:group {"className":"so-worries__grid","layout":{"type":"default"}} -->
<div class="wp-block-group so-worries__grid"><!-- wp:group {"className":"so-worries__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-worries__photo sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"so-photo"} -->
<figure class="wp-block-image size-full so-photo"><img src="<?php echo soroe_clinic_img( 'p02-worries-table.webp' ); ?>" alt="<?php echo soroe_clinic_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-worries__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-worries__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'w_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"so-h2"} -->
<h2 class="wp-block-heading so-h2"><?php echo soroe_clinic_lines( 'w_h' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:separator {"className":"so-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity so-rule"/>
<!-- /wp:separator -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'w_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'w_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'w_p3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-link"} -->
<p class="so-link"><a href="<?php echo esc_url( home_url( '/first-visit/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'w_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"so-ghost"} -->
<p class="so-ghost" aria-hidden="true"><?php echo esc_html( soroe_clinic_t( 'w_ghost' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-worries__cells sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group so-worries__cells sp-stagger"><!-- wp:group {"className":"so-qa sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-qa sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"so-qa__q"} -->
<h3 class="wp-block-heading so-qa__q"><?php echo esc_html( soroe_clinic_t( 'qa_q1' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-qa__a"} -->
<p class="so-qa__a"><?php echo esc_html( soroe_clinic_t( 'qa_a1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-qa sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-qa sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"so-qa__q"} -->
<h3 class="wp-block-heading so-qa__q"><?php echo esc_html( soroe_clinic_t( 'qa_q2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-qa__a"} -->
<p class="so-qa__a"><?php echo esc_html( soroe_clinic_t( 'qa_a2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-qa sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-qa sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"so-qa__q"} -->
<h3 class="wp-block-heading so-qa__q"><?php echo esc_html( soroe_clinic_t( 'qa_q3' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-qa__a"} -->
<p class="so-qa__a"><?php echo esc_html( soroe_clinic_t( 'qa_a3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-qa sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-qa sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"so-qa__q"} -->
<h3 class="wp-block-heading so-qa__q"><?php echo esc_html( soroe_clinic_t( 'qa_q4' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-qa__a"} -->
<p class="so-qa__a"><?php echo esc_html( soroe_clinic_t( 'qa_a4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
