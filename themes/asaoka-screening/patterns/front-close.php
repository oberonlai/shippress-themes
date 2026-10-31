<?php
/**
 * Title: Home: closing line and long pill
 * Slug: asaoka-screening/front-close
 * Categories: asaoka-screening
 * Keywords: health screening, medical, company
 * Viewport Width: 1440
 * Description: A round receptionist photograph beside one line, a long gradient pill and the address and hours.
 */
?>
<!-- wp:group {"className":"as-sec as-close","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull as-sec as-close">

<!-- wp:group {"className":"as-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group as-wrap">
<!-- wp:group {"className":"as-close__grid","layout":{"type":"default"}} -->
<div class="wp-block-group as-close__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"as-close__img sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full as-close__img sp-reveal sp-reveal--up"><img src="<?php echo asaoka_screening_img( 'p12-reception.webp' ); ?>" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P12' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"as-close__txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group as-close__txt sp-reveal sp-reveal--up">
<!-- wp:heading {"className":"as-h2"} -->
<h2 class="wp-block-heading as-h2"><?php echo esc_html( asaoka_screening_t( 'close_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( asaoka_screening_t( 'close_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="wp-block-buttons"><div class="wp-block-button as-longbtn"><a class="wp-block-button__link wp-element-button" href="/for-companies/"><span><?php echo esc_html( asaoka_screening_t( 'close_btn' ) ); ?></span><i class="as-disc" aria-hidden="true"><?php echo asaoka_screening_arrow(); ?></i></a></div></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"as-close__addr"} -->
<p class="as-close__addr"><?php echo esc_html( asaoka_screening_t( 'close_addr' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
