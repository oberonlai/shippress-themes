<?php
/**
 * Title: Home: lab and people
 * Slug: kensa-laboratory/front-lab
 * Categories: kensa-laboratory
 * Keywords: materials testing, laboratory, concrete
 * Viewport Width: 1440
 * Description: Two prose paragraphs, a wide bench photograph and six names as a two-column ruled list.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kl-sec kl-lab","layout":{"type":"constrained"},"anchor":"lab"} -->
<section id="lab" class="wp-block-group alignfull kl-sec kl-lab"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kensa_laboratory_t( 'lbl_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( kensa_laboratory_t( 'lab_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kl-prose-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-prose-wrap"><!-- wp:paragraph {"className":"kl-prose"} -->
<p class="kl-prose"><?php echo esc_html( kensa_laboratory_t( 'lab_p0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-prose"} -->
<p class="kl-prose"><?php echo esc_html( kensa_laboratory_t( 'lab_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-wide-photo"} -->
<figure class="wp-block-image size-full kl-wide-photo"><img src="<?php echo kensa_laboratory_img( 'people-team.webp' ); ?>" alt="<?php echo esc_attr( kensa_laboratory_t( 'alt_P10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kl-people","layout":{"type":"default"}} -->
<div class="wp-block-group kl-people"><!-- wp:paragraph {"className":"kl-person"} -->
<p class="kl-person"><strong><?php echo esc_html( kensa_laboratory_t( 'ppl_0_n' ) ); ?></strong> <span><?php echo esc_html( kensa_laboratory_t( 'ppl_0_r' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-person"} -->
<p class="kl-person"><strong><?php echo esc_html( kensa_laboratory_t( 'ppl_1_n' ) ); ?></strong> <span><?php echo esc_html( kensa_laboratory_t( 'ppl_1_r' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-person"} -->
<p class="kl-person"><strong><?php echo esc_html( kensa_laboratory_t( 'ppl_2_n' ) ); ?></strong> <span><?php echo esc_html( kensa_laboratory_t( 'ppl_2_r' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-person"} -->
<p class="kl-person"><strong><?php echo esc_html( kensa_laboratory_t( 'ppl_3_n' ) ); ?></strong> <span><?php echo esc_html( kensa_laboratory_t( 'ppl_3_r' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-person"} -->
<p class="kl-person"><strong><?php echo esc_html( kensa_laboratory_t( 'ppl_4_n' ) ); ?></strong> <span><?php echo esc_html( kensa_laboratory_t( 'ppl_4_r' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-person"} -->
<p class="kl-person"><strong><?php echo esc_html( kensa_laboratory_t( 'ppl_5_n' ) ); ?></strong> <span><?php echo esc_html( kensa_laboratory_t( 'ppl_5_r' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
