<?php
/**
 * Title: Page: Book a stay
 * Slug: nagare-workation/page-book
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Two-pane page head, a summary price board, the four booking steps and the booking form slot with a mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-phead"><!-- wp:group {"className":"nw-phead__photo","layout":{"type":"default"}} -->
<div class="wp-block-group nw-phead__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p15-front-desk.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group nw-phead__text"><!-- wp:paragraph {"className":"nw-label nw-phead__label"} -->
<p class="nw-label nw-phead__label"><?php echo esc_html( nagare_workation_t( 'nav_book' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"nw-phead__h"} -->
<h1 class="wp-block-heading nw-phead__h"><?php echo esc_html( nagare_workation_t( 'bk2_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-phead__lede"} -->
<p class="nw-phead__lede"><?php echo esc_html( nagare_workation_t( 'bk2_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'bk2_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">01</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-sect__body","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect__body"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'bk2_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--board","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--board"><!-- wp:group {"className":"nw-board nw-board--sum","layout":{"type":"default"}} -->
<div class="wp-block-group nw-board nw-board--sum"><!-- wp:group {"className":"nw-row nw-row--sum","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--sum"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'sum_desk' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value nw-value--pair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value nw-value--pair"><!-- wp:group {"className":"nw-pair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-pair"><!-- wp:paragraph {"className":"nw-pair__l"} -->
<p class="nw-pair__l"><?php echo esc_html( nagare_workation_t( 'sum_week' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-pair__v"} -->
<p class="nw-pair__v"><?php echo esc_html( nagare_workation_t( 'sum_u_dw' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-pair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-pair"><!-- wp:paragraph {"className":"nw-pair__l"} -->
<p class="nw-pair__l"><?php echo esc_html( nagare_workation_t( 'sum_month' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-pair__v"} -->
<p class="nw-pair__v"><?php echo esc_html( nagare_workation_t( 'sum_u_dm' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-row nw-row--sum","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--sum"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'sum_win' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value nw-value--pair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value nw-value--pair"><!-- wp:group {"className":"nw-pair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-pair"><!-- wp:paragraph {"className":"nw-pair__l"} -->
<p class="nw-pair__l"><?php echo esc_html( nagare_workation_t( 'sum_week' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-pair__v"} -->
<p class="nw-pair__v"><?php echo esc_html( nagare_workation_t( 'sum_u_ww' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-pair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-pair"><!-- wp:paragraph {"className":"nw-pair__l"} -->
<p class="nw-pair__l"><?php echo esc_html( nagare_workation_t( 'sum_month' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-pair__v"} -->
<p class="nw-pair__v"><?php echo esc_html( nagare_workation_t( 'sum_u_wm' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-row nw-row--sum","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--sum"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'sum_add' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value nw-value--pair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value nw-value--pair"><!-- wp:group {"className":"nw-pair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-pair"><!-- wp:paragraph {"className":"nw-pair__l"} -->
<p class="nw-pair__l"><?php echo esc_html( nagare_workation_t( 'sum_dinners' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-pair__v"} -->
<p class="nw-pair__v"><?php echo esc_html( nagare_workation_t( 'sum_u_di' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-pair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-pair"><!-- wp:paragraph {"className":"nw-pair__l"} -->
<p class="nw-pair__l"><?php echo esc_html( nagare_workation_t( 'sum_second' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-pair__v"} -->
<p class="nw-pair__v"><?php echo esc_html( nagare_workation_t( 'sum_u_se' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'bk2_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">02</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-sect__body","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect__body"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'bk2_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-steps","layout":{"type":"default"}} -->
<div class="wp-block-group nw-steps"><!-- wp:group {"className":"nw-step","layout":{"type":"default"}} -->
<div class="wp-block-group nw-step"><!-- wp:paragraph {"className":"nw-step__n"} -->
<p class="nw-step__n">1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-step__t"} -->
<p class="nw-step__t"><?php echo esc_html( nagare_workation_t( 'bk_s1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-step","layout":{"type":"default"}} -->
<div class="wp-block-group nw-step"><!-- wp:paragraph {"className":"nw-step__n"} -->
<p class="nw-step__n">2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-step__t"} -->
<p class="nw-step__t"><?php echo esc_html( nagare_workation_t( 'bk_s2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-step","layout":{"type":"default"}} -->
<div class="wp-block-group nw-step"><!-- wp:paragraph {"className":"nw-step__n"} -->
<p class="nw-step__n">3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-step__t"} -->
<p class="nw-step__t"><?php echo esc_html( nagare_workation_t( 'bk_s3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-step","layout":{"type":"default"}} -->
<div class="wp-block-group nw-step"><!-- wp:paragraph {"className":"nw-step__n"} -->
<p class="nw-step__n">4</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-step__t"} -->
<p class="nw-step__t"><?php echo esc_html( nagare_workation_t( 'bk_s4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"dates","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section id="dates" class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap nw-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap nw-wrap--narrow"><!-- wp:group {"className":"nw-formcard","layout":{"type":"default"}} -->
<div class="wp-block-group nw-formcard"><!-- wp:heading {"level":2,"className":"nw-h2 nw-formcard__h"} -->
<h2 class="wp-block-heading nw-h2 nw-formcard__h"><?php echo esc_html( nagare_workation_t( 'bk2_form_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-formcard__p"} -->
<p class="nw-formcard__p"><?php echo esc_html( nagare_workation_t( 'bk2_form_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php
ob_start(); ?>
<a class="wp-element-button nw-mail" href="mailto:stay@nagare-hotel.example?subject=<?php echo esc_attr( rawurlencode( nagare_workation_t( 'book_mail_subject' ) ) ); ?>"><?php echo esc_html( nagare_workation_t( 'book_email_button' ) ); ?></a>
<p class="nw-mail__line"><?php echo esc_html( nagare_workation_t( 'forms_call_line' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'bk2_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">03</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-sect__body","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect__body"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'bk2_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
