<?php
/**
 * Title: Home: who answers between visits
 * Slug: hisui-clinic/front-between
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: A 58/42 split: photograph of the nurse line on the left, the two nurses, hours and a plain text list of the seven people on the right.
 */
?>
<!-- wp:group {"className":"hc-sec hc-sec--between","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--between"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-between"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-between__pic"} -->
<figure class="wp-block-image size-full hc-between__pic"><img src="<?php echo hisui_clinic_img( 'N1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_N1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-between__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-between__t"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'bet_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'bet_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'bet_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="hc-people"><li><b><?php echo esc_html( hisui_clinic_t( 'ppl_1_n' ) ); ?></b> <span><?php echo esc_html( hisui_clinic_t( 'ppl_1_r' ) ); ?></span></li><li><b><?php echo esc_html( hisui_clinic_t( 'ppl_2_n' ) ); ?></b> <span><?php echo esc_html( hisui_clinic_t( 'ppl_2_r' ) ); ?></span></li><li><b><?php echo esc_html( hisui_clinic_t( 'ppl_3_n' ) ); ?></b> <span><?php echo esc_html( hisui_clinic_t( 'ppl_3_r' ) ); ?></span></li><li><b><?php echo esc_html( hisui_clinic_t( 'ppl_4_n' ) ); ?></b> <span><?php echo esc_html( hisui_clinic_t( 'ppl_4_r' ) ); ?></span></li><li><b><?php echo esc_html( hisui_clinic_t( 'ppl_5_n' ) ); ?></b> <span><?php echo esc_html( hisui_clinic_t( 'ppl_5_r' ) ); ?></span></li><li><b><?php echo esc_html( hisui_clinic_t( 'ppl_6_n' ) ); ?></b> <span><?php echo esc_html( hisui_clinic_t( 'ppl_6_r' ) ); ?></span></li><li><b><?php echo esc_html( hisui_clinic_t( 'ppl_7_n' ) ); ?></b> <span><?php echo esc_html( hisui_clinic_t( 'ppl_7_r' ) ); ?></span></li></ul>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'bet_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
