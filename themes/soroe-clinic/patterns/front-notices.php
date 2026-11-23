<?php
/**
 * Title: Home: notices
 * Slug: soroe-clinic/front-notices
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: White cell: a label and heading at the left, the three latest notices on hairline rows with a round plus pill, an all-notices link at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"notices","className":"so-cell so-notices","layout":{"type":"default"}} -->
<section id="notices" class="wp-block-group alignfull so-cell so-notices"><!-- wp:group {"className":"so-notices__grid","layout":{"type":"default"}} -->
<div class="wp-block-group so-notices__grid"><!-- wp:group {"className":"sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up"><!-- wp:group {"className":"so-notices__head","layout":{"type":"default"}} -->
<div class="wp-block-group so-notices__head"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'n_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"so-h2s"} -->
<h2 class="wp-block-heading so-h2s"><?php echo esc_html( soroe_clinic_t( 'n_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"so-notices__list sp-reveal sp-reveal--up"} -->
<div class="wp-block-query so-notices__list sp-reveal sp-reveal--up"><!-- wp:post-template {"className":"so-notices__rows"} -->
<!-- wp:group {"className":"so-notice","layout":{"type":"default"}} -->
<div class="wp-block-group so-notice"><!-- wp:post-date {"format":"j M Y","className":"so-notice__d"} /-->

<!-- wp:group {"className":"so-notice__main","layout":{"type":"default"}} -->
<div class="wp-block-group so-notice__main"><!-- wp:post-title {"level":3,"isLink":true,"className":"so-notice__t"} /-->

<!-- wp:post-terms {"term":"category","className":"so-notice__c"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"so-plus"} -->
<p class="so-plus" aria-hidden="true">+</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
<!-- wp:group {"className":"so-notices__more","layout":{"type":"default"}} -->
<div class="wp-block-group so-notices__more"><!-- wp:paragraph {"className":"so-link"} -->
<p class="so-link"><a href="<?php echo esc_url( home_url( '/notices/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'n_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
