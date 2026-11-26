<?php
/**
 * Title: Template: 404
 * Slug: shirogane-college/tpl-404
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Not-found message with a link home.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-sec sg-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-sec sg-sec--page">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:heading {"level":1,"className":"sg-page__h"} -->
<h1 class="wp-block-heading sg-page__h"><?php echo esc_html( shirogane_college_t( 'nf_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"sg-btns"} -->
<div class="wp-block-buttons sg-btns"><!-- wp:button {"className":"sg-btn"} -->
<div class="wp-block-button sg-btn"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( shirogane_college_t( 'nf_back' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->