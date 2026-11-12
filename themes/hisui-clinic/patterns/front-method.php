<?php
/**
 * Title: Home: how a regimen is agreed (ledger rows)
 * Slug: hisui-clinic/front-method
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: Five tinted accordion rows with large muted numerals and a deep edge on the open row.
 */
?>
<!-- wp:group {"className":"hc-sec hc-sec--method","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--method"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'met_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose hc-intro"} -->
<p class="hc-prose hc-intro"><?php echo esc_html( hisui_clinic_t( 'met_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-ledger","layout":{"type":"default"}} -->
<div class="wp-block-group hc-ledger"><!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">01</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'met_1_h' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'met_1_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row","showContent":true} -->
<details class="wp-block-details hc-row" open><summary><span class="hc-num">02</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'met_2_h' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'met_2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-row__pic"} -->
<figure class="wp-block-image size-full hc-row__pic"><img src="<?php echo hisui_clinic_img( 'M2' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_M2' ) ); ?>"/></figure>
<!-- /wp:image --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">03</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'met_3_h' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'met_3_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">04</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'met_4_h' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'met_4_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">05</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'met_5_h' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'met_5_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/your-plan/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'met_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
