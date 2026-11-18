<?php
/**
 * Title: Page: contact
 * Slug: taruki-distillery/page-contact
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: Address, hours and enquiry copy with the contact form slot (mailto fallback) beside a tasting-room photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--pale td-phead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--pale td-phead"><!-- wp:group {"align":"wide","className":"td-phead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-phead__in"><!-- wp:paragraph {"className":"td-caps"} -->
<p class="td-caps"><?php echo esc_html( taruki_t( 'ct_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"td-h1 td-h1--page"} -->
<h1 class="wp-block-heading td-h1 td-h1--page"><?php echo esc_html( taruki_t( 'ct_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-phead__lede"} -->
<p class="td-phead__lede"><?php echo esc_html( taruki_t( 'ct_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--white td-contact","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--white td-contact"><!-- wp:group {"align":"wide","className":"td-contact__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-contact__grid"><!-- wp:group {"className":"td-contact__text","layout":{"type":"default"}} -->
<div class="wp-block-group td-contact__text"><!-- wp:group {"className":"sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"td-chap__t"} -->
<h3 class="wp-block-heading td-chap__t"><?php echo esc_html( taruki_t( 'ct_1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-col__b"} -->
<p class="td-col__b"><?php echo esc_html( taruki_t( 'ct_1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"td-chap__t"} -->
<h3 class="wp-block-heading td-chap__t"><?php echo esc_html( taruki_t( 'ct_2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-col__b"} -->
<p class="td-col__b"><?php echo esc_html( taruki_t( 'ct_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group td-formbox"><!-- wp:pattern {"slug":"taruki-distillery/page-book"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-contact__media","layout":{"type":"default"}} -->
<div class="wp-block-group td-contact__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-contact__img sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full td-contact__img sp-reveal sp-reveal--up"><img src="<?php echo taruki_img( 'img-14.webp' ); ?>" alt="<?php echo taruki_a( 'alt_14' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
