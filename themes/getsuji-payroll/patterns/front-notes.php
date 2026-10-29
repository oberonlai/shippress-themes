<?php
/**
 * Title: Home: payroll notes
 * Slug: getsuji-payroll/front-notes
 * Categories: getsuji-payroll
 * Keywords: notes, blog, news
 * Viewport Width: 1440
 * Description: Three latest notes: 3:2 thumbnail, date with a boxed tag, title and a hairline.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"notes","className":"gp-notes gp-section","layout":{"type":"default"}} -->
<section id="notes" class="wp-block-group alignfull gp-notes gp-section"><!-- wp:group {"className":"gp-notes__inner","layout":{"type":"default"}} -->
<div class="wp-block-group gp-notes__inner"><!-- wp:heading {"className":"gp-pole sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading gp-pole sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'kb56600d0' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"gp-notes__query"} -->
<div class="wp-block-query gp-notes__query"><!-- wp:post-template {"className":"sp-stagger","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"gp-note sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gp-note sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"gp-note__img"} /-->

<!-- wp:group {"className":"gp-note__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group gp-note__meta"><!-- wp:post-date {"format":"Y-m-d","className":"gp-note__date"} /-->

<!-- wp:post-terms {"term":"category","className":"gp-tag"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"gp-note__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"gp-notes__all"} -->
<div class="wp-block-buttons gp-notes__all"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/notes/' ) ); ?>"><?php echo wp_kses_post( getsuji_payroll_t( 'k67bfaf2f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
