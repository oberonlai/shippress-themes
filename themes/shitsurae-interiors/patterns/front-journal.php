<?php
/**
 * Title: Home: journal
 * Slug: shitsurae-interiors/front-journal
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Three latest notes as text rows: month, category chip, title and an arrow box.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-journal","anchor":"journal","layout":{"type":"default"}} -->
<section id="journal" class="wp-block-group alignfull si-sec si-journal"><!-- wp:group {"className":"si-word sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_journal' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_journal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"si-jlist sp-reveal sp-reveal--up"} -->
<div class="wp-block-query si-jlist sp-reveal sp-reveal--up"><!-- wp:post-template -->
<!-- wp:group {"className":"si-jrow","layout":{"type":"default"}} -->
<div class="wp-block-group si-jrow"><!-- wp:post-date {"format":"M Y","className":"si-jrow__date"} /-->

<!-- wp:post-terms {"term":"category","className":"si-chip"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"si-jrow__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"si-goto"} -->
<p class="si-goto"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'go_journal' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->
