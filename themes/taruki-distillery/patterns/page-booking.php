<?php
/**
 * Title: Page: book a visit
 * Slug: taruki-distillery/page-booking
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: Three booking steps, then an S3 block: the booking form slot (mailto fallback) over a frosted tasting-room photograph fading in from the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--pale td-phead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--pale td-phead"><!-- wp:group {"align":"wide","className":"td-phead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-phead__in"><!-- wp:paragraph {"className":"td-caps"} -->
<p class="td-caps"><?php echo esc_html( taruki_t( 'bk_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"td-h1 td-h1--page"} -->
<h1 class="wp-block-heading td-h1 td-h1--page"><?php echo esc_html( taruki_t( 'bk_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-phead__lede"} -->
<p class="td-phead__lede"><?php echo esc_html( taruki_t( 'bk_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--white td-steps","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--white td-steps"><!-- wp:group {"align":"wide","className":"td-steps__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-steps__grid"><!-- wp:group {"className":"td-steps__lead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-steps__lead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-caps"} -->
<p class="td-caps"><?php echo esc_html( taruki_t( 'bk_steps_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-lead"} -->
<p class="td-lead"><?php echo esc_html( taruki_t( 'bk_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-steps__list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group td-steps__list sp-stagger"><!-- wp:group {"className":"td-chap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-chap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-chap__n"} -->
<p class="td-chap__n">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"td-chap__t"} -->
<h3 class="wp-block-heading td-chap__t"><?php echo esc_html( taruki_t( 'bk_st1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-chap__b"} -->
<p class="td-chap__b"><?php echo esc_html( taruki_t( 'bk_st1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-chap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-chap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-chap__n"} -->
<p class="td-chap__n">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"td-chap__t"} -->
<h3 class="wp-block-heading td-chap__t"><?php echo esc_html( taruki_t( 'bk_st2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-chap__b"} -->
<p class="td-chap__b"><?php echo esc_html( taruki_t( 'bk_st2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-chap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-chap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-chap__n"} -->
<p class="td-chap__n">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"td-chap__t"} -->
<h3 class="wp-block-heading td-chap__t"><?php echo esc_html( taruki_t( 'bk_st3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-chap__b"} -->
<p class="td-chap__b"><?php echo esc_html( taruki_t( 'bk_st3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--pale td-bottle td-bottle--form","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--pale td-bottle td-bottle--form"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-bottle__ghost"} -->
<figure class="wp-block-image size-full td-bottle__ghost"><img src="<?php echo taruki_img( 'img-14.webp' ); ?>" alt="<?php echo taruki_a( 'alt_14' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"td-bookgrid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-bookgrid"><!-- wp:group {"className":"td-bookgrid__form","layout":{"type":"default"}} -->
<div class="wp-block-group td-bookgrid__form"><!-- wp:paragraph {"className":"td-caps"} -->
<p class="td-caps"><?php echo esc_html( taruki_t( 'bk_form_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"td-h2"} -->
<h2 class="wp-block-heading td-h2"><?php echo esc_html( taruki_t( 'bk_3_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-bottle__p"} -->
<p class="td-bottle__p"><?php echo esc_html( taruki_t( 'bk_3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"td-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group td-formbox"><!-- wp:pattern {"slug":"taruki-distillery/page-book"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-bookgrid__side sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-bookgrid__side sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"td-chap__t"} -->
<h3 class="wp-block-heading td-chap__t"><?php echo esc_html( taruki_t( 'bk_2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-bookgrid__p"} -->
<p class="td-bookgrid__p"><?php echo esc_html( taruki_t( 'bk_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
