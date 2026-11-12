<?php
/**
 * Title: Home: four patient stories
 * Slug: hisui-clinic/front-stories
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: A 2x2 grid of story cards with 1.74:1 photographs, first-name headings and short stories.
 */
?>
<!-- wp:group {"className":"hc-sec hc-sec--stories","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--stories"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'sto_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-stories sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hc-stories sp-stagger"><!-- wp:group {"className":"hc-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-story__pic"} -->
<figure class="wp-block-image size-full hc-story__pic"><img src="<?php echo hisui_clinic_img( 'S1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_S1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-story__who"} -->
<p class="hc-story__who"><?php echo esc_html( hisui_clinic_t( 'sto_1_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-story__p"} -->
<p class="hc-story__p"><?php echo esc_html( hisui_clinic_t( 'sto_1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'sto_1_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-story__pic"} -->
<figure class="wp-block-image size-full hc-story__pic"><img src="<?php echo hisui_clinic_img( 'S2' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_S2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-story__who"} -->
<p class="hc-story__who"><?php echo esc_html( hisui_clinic_t( 'sto_2_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-story__p"} -->
<p class="hc-story__p"><?php echo esc_html( hisui_clinic_t( 'sto_2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'sto_2_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-story__pic"} -->
<figure class="wp-block-image size-full hc-story__pic"><img src="<?php echo hisui_clinic_img( 'S3' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_S3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-story__who"} -->
<p class="hc-story__who"><?php echo esc_html( hisui_clinic_t( 'sto_3_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-story__p"} -->
<p class="hc-story__p"><?php echo esc_html( hisui_clinic_t( 'sto_3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'sto_3_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-story__pic"} -->
<figure class="wp-block-image size-full hc-story__pic"><img src="<?php echo hisui_clinic_img( 'S4' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_S4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-story__who"} -->
<p class="hc-story__who"><?php echo esc_html( hisui_clinic_t( 'sto_4_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-story__p"} -->
<p class="hc-story__p"><?php echo esc_html( hisui_clinic_t( 'sto_4_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'sto_4_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'sto_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
