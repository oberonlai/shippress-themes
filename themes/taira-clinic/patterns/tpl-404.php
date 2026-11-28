<?php
/**
 * Title: Template: not found
 * Slug: taira-clinic/tpl-404
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: 404 page: a heading, one line and a link home.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-sec--page">
<!-- wp:group {"className":"tc-wrap tc-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--narrow">
<!-- wp:heading {"level":1,"className":"tc-h1 tc-h1--inner"} -->
<h1 class="wp-block-heading tc-h1 tc-h1--inner"><?php echo esc_html( taira_clinic_t( 'e404_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'e404_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-link"} -->
<p class="tc-link"><a href="/"><?php echo esc_html( taira_clinic_t( 'e404_b' ) ); ?> &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
