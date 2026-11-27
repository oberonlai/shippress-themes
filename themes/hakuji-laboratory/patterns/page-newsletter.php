<?php
/**
 * Title: Page: early access
 * Slug: hakuji-laboratory/page-newsletter
 * Categories: hakuji-laboratory
 * Inserter: no
 * Viewport Width: 1440
 * Description: Case portal early access: slab head, parallax photo band and a sheet with the shared newsletter slot (mailto fallback, no success claim).
 */
?>
<!-- wp:group {"tagName":"section","className":"hk-phead hk-phead--slab","layout":{"type":"default"}} -->
<section class="wp-block-group hk-phead hk-phead--slab">
<!-- wp:group {"className":"hk-inner hk-phead__in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner hk-phead__in">
<!-- wp:group {"className":"hk-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-phead__text">
<!-- wp:group {"className":"hk-lock","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lock">
<!-- wp:paragraph {"className":"hk-lock__w"} -->
<p class="hk-lock__w"><?php echo esc_html( hakuji_laboratory_t( 'nl_lock_w' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-lock__l"} -->
<p class="hk-lock__l"><?php echo esc_html( hakuji_laboratory_t( 'nl_lock_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":1,"className":"hk-h2 hk-h2--page hk-phead__h"} -->
<h1 class="wp-block-heading hk-h2 hk-h2--page hk-phead__h"><?php echo esc_html( hakuji_laboratory_t( 'nl_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-phead__lede"} -->
<p class="hk-phead__lede"><?php echo esc_html( hakuji_laboratory_t( 'nl_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-phead__slab","layout":{"type":"default"}} -->
<div class="wp-block-group hk-phead__slab">
<!-- wp:paragraph {"className":"hk-subtag"} -->
<p class="hk-subtag"><?php echo esc_html( hakuji_laboratory_t( 'nl_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:cover {"url":"<?php echo hakuji_laboratory_img( 'img-16.webp' ); ?>","dimRatio":30,"overlayColor":"contrast","align":"full","className":"hk-band hk-band--in hk-band--short sp-parallax"} -->
<div class="wp-block-cover alignfull hk-band hk-band--in hk-band--short sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo hakuji_laboratory_a( 'alt_img16' ); ?>" src="<?php echo hakuji_laboratory_img( 'img-16.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"hk-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-band__in">
<!-- wp:heading {"level":2,"className":"hk-ghost hk-ghost--band"} -->
<h2 class="wp-block-heading hk-ghost hk-ghost--band"><?php echo esc_html( hakuji_laboratory_t( 'nl_ghost' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-band__label"} -->
<p class="hk-band__label"><?php echo esc_html( hakuji_laboratory_t( 'nl_blabel' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
<!-- wp:group {"tagName":"section","align":"full","className":"hk-formsheet hk-formsheet--over","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-formsheet hk-formsheet--over">
<!-- wp:group {"className":"hk-inner","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner">
<!-- wp:group {"className":"hk-formgrid","layout":{"type":"default"}} -->
<div class="wp-block-group hk-formgrid">
<!-- wp:group {"className":"hk-formcol","layout":{"type":"default"}} -->
<div class="wp-block-group hk-formcol">
<!-- wp:heading {"level":2,"className":"hk-h2"} -->
<h2 class="wp-block-heading hk-h2"><?php echo esc_html( hakuji_laboratory_t( 'nl_ha' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'nl_a1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'nl_a2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'nl_a3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-formcol hk-formcol--side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-formcol hk-formcol--side">
<!-- wp:heading {"level":2,"className":"hk-h2"} -->
<h2 class="wp-block-heading hk-h2"><?php echo esc_html( hakuji_laboratory_t( 'nl_hb' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"hk-formslot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-formslot">
<!-- wp:html -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => hakuji_laboratory_t( 'email' ), 'label' => hakuji_laboratory_t( 'forms_email' ), 'submit' => hakuji_laboratory_t( 'forms_subscribe' ), 'notice' => hakuji_laboratory_t( 'forms_mail_notice' ), 'subject' => hakuji_laboratory_t( 'forms_mail_subject' ) ) ); ?>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'nl_b1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'nl_b2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'nl_b3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo esc_html( hakuji_laboratory_t( 'nl_b4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
