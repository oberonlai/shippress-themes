<?php
/**
 * Title: Home: narrative column
 * Slug: hisui-clinic/front-narrative
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: A single 760px reading column with a two-tone ruled heading, three paragraphs and one wide inset photograph.
 */
?>
<!-- wp:group {"className":"hc-sec hc-sec--narr","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--narr"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-narr","layout":{"type":"default"}} -->
<div class="wp-block-group hc-narr"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'nar_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'nar_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'nar_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-inset"} -->
<figure class="wp-block-image size-full hc-inset"><img src="<?php echo hisui_clinic_img( 'D1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_D1' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( hisui_clinic_t( 'nar_cap' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'nar_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
