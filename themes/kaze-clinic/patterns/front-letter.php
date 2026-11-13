<?php
/**
 * Title: Home: The Breathing Letter
 * Slug: kaze-clinic/front-letter
 * Categories: kaze-clinic
 * Keywords: newsletter
 * Viewport Width: 1440
 * Description: A mist band with a short description at the left and the newsletter form slot at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec kz-letter","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec kz-letter"><!-- wp:group {"className":"kz-wrap kz-wrap--lead kz-letter__in","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--lead kz-letter__in"><!-- wp:group {"className":"kz-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group kz-letter__text"><!-- wp:paragraph {"className":"kz-label"} -->
<p class="kz-label"><?php echo esc_html( kaze_clinic_t( 'le_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><?php echo esc_html( kaze_clinic_t( 'le_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-letter__p"} -->
<p class="kz-letter__p"><?php echo esc_html( kaze_clinic_t( 'le_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group kz-letter__form"><!-- wp:pattern {"slug":"kaze-clinic/news-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
