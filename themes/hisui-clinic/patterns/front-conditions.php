<?php
/**
 * Title: Home: department band, tabs and three conditions
 * Slug: hisui-clinic/front-conditions
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: Flat celadon band with a white medallion, five ruled anchor tabs and three condition entries with two-tone heading rules and photographs.
 */
?>
<!-- wp:group {"className":"hc-band","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-band"><!-- wp:group {"className":"hc-wrap hc-wrap--mid hc-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid hc-band__in"><!-- wp:html -->
<span class="hc-medal"><?php echo hisui_clinic_icon( 'droplet' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:group {"className":"hc-band__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hc-band__txt"><!-- wp:paragraph {"className":"hc-band__label"} -->
<p class="hc-band__label"><?php echo esc_html( hisui_clinic_t( 'con_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hc-band__title"} -->
<h2 class="wp-block-heading hc-band__title"><?php echo esc_html( hisui_clinic_t( 'con_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--cond","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--cond"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:html -->
<ul class="hc-tabs"><li><a href="{{href:/diabetes/#type-2}}"><span><?php echo esc_html( hisui_clinic_t( 'con_tab1' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li><li><a href="{{href:/thyroid-pituitary/#thyroid}}"><span><?php echo esc_html( hisui_clinic_t( 'con_tab2' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li><li><a href="{{href:/thyroid-pituitary/#pituitary}}"><span><?php echo esc_html( hisui_clinic_t( 'con_tab3' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li><li><a href="{{href:/hormones/#menopause}}"><span><?php echo esc_html( hisui_clinic_t( 'con_tab4' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li><li><a href="{{href:/hormones/#bone}}"><span><?php echo esc_html( hisui_clinic_t( 'con_tab5' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li></ul>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hc-prose hc-intro"} -->
<p class="hc-prose hc-intro"><?php echo esc_html( hisui_clinic_t( 'con_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-conds sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hc-conds sp-stagger"><!-- wp:group {"className":"hc-cond sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-cond sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-cond__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-cond__t"><!-- wp:heading {"level":3,"className":"hc-h3 hc-rule"} -->
<h3 class="wp-block-heading hc-h3 hc-rule"><?php echo esc_html( hisui_clinic_t( 'con_1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-cond__p"} -->
<p class="hc-cond__p"><?php echo esc_html( hisui_clinic_t( 'con_1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-cond__often"} -->
<p class="hc-cond__often"><?php echo esc_html( hisui_clinic_t( 'con_1_often' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/diabetes/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'con_1_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-cond__pic"} -->
<figure class="wp-block-image size-full hc-cond__pic"><img src="<?php echo hisui_clinic_img( 'C1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_C1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-cond sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-cond sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-cond__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-cond__t"><!-- wp:heading {"level":3,"className":"hc-h3 hc-rule"} -->
<h3 class="wp-block-heading hc-h3 hc-rule"><?php echo esc_html( hisui_clinic_t( 'con_2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-cond__p"} -->
<p class="hc-cond__p"><?php echo esc_html( hisui_clinic_t( 'con_2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-cond__often"} -->
<p class="hc-cond__often"><?php echo esc_html( hisui_clinic_t( 'con_2_often' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/thyroid-pituitary/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'con_2_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-cond__pic"} -->
<figure class="wp-block-image size-full hc-cond__pic"><img src="<?php echo hisui_clinic_img( 'C2' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_C2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-cond sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-cond sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-cond__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-cond__t"><!-- wp:heading {"level":3,"className":"hc-h3 hc-rule"} -->
<h3 class="wp-block-heading hc-h3 hc-rule"><?php echo esc_html( hisui_clinic_t( 'con_3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-cond__p"} -->
<p class="hc-cond__p"><?php echo esc_html( hisui_clinic_t( 'con_3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-cond__often"} -->
<p class="hc-cond__often"><?php echo esc_html( hisui_clinic_t( 'con_3_often' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/hormones/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'con_3_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-cond__pic"} -->
<figure class="wp-block-image size-full hc-cond__pic"><img src="<?php echo hisui_clinic_img( 'C3' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_C3' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
