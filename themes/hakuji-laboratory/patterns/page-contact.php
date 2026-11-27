<?php
/**
 * Title: Page: open an account
 * Slug: hakuji-laboratory/page-contact
 * Categories: hakuji-laboratory
 * Inserter: no
 * Viewport Width: 1440
 * Description: Account request page: paired photo head with a slab, the account requirements, the contact form slot with a mailto fallback and the address and hours.
 */
?>
<!-- wp:group {"tagName":"section","className":"hk-phead","layout":{"type":"default"}} -->
<section class="wp-block-group hk-phead">
<!-- wp:group {"className":"hk-inner hk-phead__in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner hk-phead__in">
<!-- wp:group {"className":"hk-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-phead__text">
<!-- wp:group {"className":"hk-lock","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lock">
<!-- wp:paragraph {"className":"hk-lock__w"} -->
<p class="hk-lock__w"><?php echo esc_html( hakuji_laboratory_t( 'ct_lock_w' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-lock__l"} -->
<p class="hk-lock__l"><?php echo esc_html( hakuji_laboratory_t( 'ct_lock_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":1,"className":"hk-h2 hk-h2--page hk-phead__h"} -->
<h1 class="wp-block-heading hk-h2 hk-h2--page hk-phead__h"><?php echo esc_html( hakuji_laboratory_t( 'ct_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-phead__lede"} -->
<p class="hk-phead__lede"><?php echo esc_html( hakuji_laboratory_t( 'ct_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-phead__pair","layout":{"type":"default"}} -->
<div class="wp-block-group hk-phead__pair">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-ph hk-ph--l"} -->
<figure class="wp-block-image size-full hk-ph hk-ph--l"><img src="<?php echo hakuji_laboratory_img( 'img-15.webp' ); ?>" alt="<?php echo hakuji_laboratory_a( 'alt_img15' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-ph hk-ph--r"} -->
<figure class="wp-block-image size-full hk-ph hk-ph--r"><img src="<?php echo hakuji_laboratory_img( 'img-12.webp' ); ?>" alt="<?php echo hakuji_laboratory_a( 'alt_img12' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-phead__slab","layout":{"type":"default"}} -->
<div class="wp-block-group hk-phead__slab">
<!-- wp:paragraph {"className":"hk-subtag"} -->
<p class="hk-subtag"><?php echo esc_html( hakuji_laboratory_t( 'ct_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"hk-formsheet","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-formsheet">
<!-- wp:group {"className":"hk-inner","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner">
<!-- wp:group {"className":"hk-formgrid","layout":{"type":"default"}} -->
<div class="wp-block-group hk-formgrid">
<!-- wp:group {"className":"hk-formcol","layout":{"type":"default"}} -->
<div class="wp-block-group hk-formcol">
<!-- wp:heading {"level":2,"className":"hk-h2"} -->
<h2 class="wp-block-heading hk-h2"><?php echo esc_html( hakuji_laboratory_t( 'ct_ha' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'ct_a1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'ct_a2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'ct_a3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'ct_a4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hk-formslot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-formslot">
<?php
ob_start(); ?>
<!-- wp:buttons {"className":"hk-btn"} -->
<div class="wp-block-buttons hk-btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:<?php echo esc_attr( hakuji_laboratory_t( 'email' ) ); ?>?subject=<?php echo rawurlencode( hakuji_laboratory_t( 'contact_subject' ) ); ?>"><?php echo esc_html( hakuji_laboratory_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-formcol hk-formcol--side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-formcol hk-formcol--side">
<!-- wp:heading {"level":2,"className":"hk-h2"} -->
<h2 class="wp-block-heading hk-h2"><?php echo esc_html( hakuji_laboratory_t( 'ct_hb' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-panel__a"} -->
<p class="hk-panel__a"><?php echo esc_html( hakuji_laboratory_t( 'ct_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-panel__a"} -->
<p class="hk-panel__a"><?php echo esc_html( hakuji_laboratory_t( 'ct_pick' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<table class="hk-hours"><tbody><tr><th scope="row"><?php echo esc_html( hakuji_laboratory_t( 'hours_1_d' ) ); ?></th><td><?php echo esc_html( hakuji_laboratory_t( 'hours_1_t' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hakuji_laboratory_t( 'hours_2_d' ) ); ?></th><td><?php echo esc_html( hakuji_laboratory_t( 'hours_2_t' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hakuji_laboratory_t( 'hours_3_d' ) ); ?></th><td><?php echo esc_html( hakuji_laboratory_t( 'hours_3_t' ) ); ?></td></tr></tbody></table>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"hk-panel__a"} -->
<p class="hk-panel__a"><?php echo esc_html( hakuji_laboratory_t( 'ct_tel' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-panel__a"} -->
<p class="hk-panel__a"><a href="mailto:<?php echo esc_attr( hakuji_laboratory_t( 'email' ) ); ?>"><?php echo esc_html( hakuji_laboratory_t( 'email' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'ct_b1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'ct_b2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
