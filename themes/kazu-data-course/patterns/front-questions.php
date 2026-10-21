<?php
/**
 * Title: Home: questions
 * Slug: kazu-data-course/front-questions
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: Five collapsible questions under a framed photo.
 */
?>
<!-- wp:group {"className":"kz-sec kz-questions","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull kz-sec kz-questions"><!-- wp:group {"className":"kz-col","layout":{"type":"default"}} -->
<div class="wp-block-group kz-col"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-photo kz-photo--32"} -->
<figure class="wp-block-image size-full kz-photo kz-photo--32"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-coffee.webp' ) ); ?>" alt="<?php echo esc_attr( kazu_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kz-eyebrow"} -->
<p class="kz-eyebrow"><?php echo esc_html( kazu_t( 'qa_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><?php echo esc_html( kazu_t( 'qa_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kz-faq","layout":{"type":"default"}} -->
<div class="wp-block-group kz-faq"><!-- wp:details -->
<details class="wp-block-details"><summary><?php echo esc_html( kazu_t( 'q1' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kazu_t( 'a1' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php echo esc_html( kazu_t( 'q2' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kazu_t( 'a2' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php echo esc_html( kazu_t( 'q3' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kazu_t( 'a3' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php echo esc_html( kazu_t( 'q4' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kazu_t( 'a4' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php echo esc_html( kazu_t( 'q5' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kazu_t( 'a5' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kz-more"} -->
<p class="kz-more"><a href="/faq/"><?php echo esc_html( kazu_t( 'qa_more' ) ); ?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
