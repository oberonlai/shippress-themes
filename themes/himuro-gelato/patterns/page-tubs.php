<?php
/**
 * Title: Page: Tubs and set-aside
 * Slug: himuro-gelato/page-tubs
 * Categories: himuro-gelato
 * Keywords: page-tubs
 * Viewport Width: 1440
 * Description: Inner page: Tubs and set-aside.
 */
?>
<!-- wp:group {"className":"hg-head","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-head"><!-- wp:cover {"url":"<?php echo himuro_gelato_img( 'v1' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.4},"minHeight":62,"minHeightUnit":"vh","className":"hg-head__stage sp-parallax"} -->
<div class="wp-block-cover hg-head__stage sp-parallax" style="min-height:62vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_v1' ) ); ?>" src="<?php echo himuro_gelato_img( 'v1' ); ?>" style="object-position:50% 40%" data-object-fit="cover" data-object-position="50% 40%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"hg-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group hg-head__in"><!-- wp:heading {"level":1,"className":"hg-head__title"} -->
<h1 class="wp-block-heading hg-head__title"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_t' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-prose hg-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-prose hg-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:paragraph {"className":"hg-label"} -->
<p class="hg-label"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-prose__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hg-prose__body sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pg_tubs_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hg-btn"} -->
<div class="wp-block-button hg-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@himurogelato.example?subject=<?php echo rawurlencode( himuro_gelato_t( 'tb_subject' ) ); ?>"><?php echo esc_html( himuro_gelato_t( 'tb_mail' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$hg_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $hg_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
