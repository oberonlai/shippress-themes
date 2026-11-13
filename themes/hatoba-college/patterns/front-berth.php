<?php
/**
 * Title: Home: berth confirmed
 * Slug: hatoba-college/front-berth
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Description: A 4:5 photograph beside the brass Berth confirmed pill and three large date lines.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"berth","className":"hc-sec hc-berth","layout":{"type":"default"}} -->
<section id="berth" class="wp-block-group alignfull hc-sec hc-berth"><!-- wp:group {"className":"hc-wrap hc-berth__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-berth__grid"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hc-berth__photo"} -->
<figure class="wp-block-image size-large hc-berth__photo"><img src="<?php echo hatoba_college_img( 'p05-gangway.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-berth__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-berth__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hc-pill"} -->
<p class="hc-pill"><?php echo esc_html( hatoba_college_t( 'berth_pill' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-date"} -->
<p class="hc-date"><span class="hc-date__d"><?php echo esc_html( hatoba_college_t( 'berth_d1' ) ); ?></span> <em class="hc-date__e"><?php echo esc_html( hatoba_college_t( 'berth_e1' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-date"} -->
<p class="hc-date"><span class="hc-date__d"><?php echo esc_html( hatoba_college_t( 'berth_d2' ) ); ?></span> <em class="hc-date__e"><?php echo esc_html( hatoba_college_t( 'berth_e2' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-date"} -->
<p class="hc-date"><span class="hc-date__d"><?php echo esc_html( hatoba_college_t( 'berth_d3' ) ); ?></span> <em class="hc-date__e"><?php echo esc_html( hatoba_college_t( 'berth_e3' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'berth_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-link"} -->
<p class="hc-link"><a href="<?php echo hatoba_college_url( '/training-berths/' ); ?>"><?php echo esc_html( hatoba_college_t( 'berth_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
