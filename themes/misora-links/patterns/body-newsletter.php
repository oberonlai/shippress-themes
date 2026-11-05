<?php
/**
 * Title: Page body: Club letter
 * Slug: misora-links/body-newsletter
 * Categories: misora-links
 * Viewport Width: 1440
 * Description: Newsletter signup.
 */
?>
<!-- wp:group {"className":"ml-band ml-band--stone ml-band--form","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-band ml-band--stone ml-band--form"><!-- wp:group {"className":"ml-body__in","layout":{"type":"default"}} -->
<div class="wp-block-group ml-body__in"><!-- wp:heading {"level":2,"className":"ml-sec__h2"} -->
<h2 class="wp-block-heading ml-sec__h2"><?php echo esc_html( misora_links_t( 'nl_h2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-body__p"} -->
<p class="ml-body__p"><?php echo esc_html( misora_links_t( 'nl_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-body__p"} -->
<p class="ml-body__p"><?php echo esc_html( misora_links_t( 'nl_p2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<form class="ml-form" method="post" action="mailto:office@misoralinks.example" enctype="text/plain"><label class="ml-form__f"><span><?php echo esc_html( misora_links_t( 'f_email' ) ); ?></span><input type="email" name="email"/></label><button type="submit" class="ml-form__btn"><?php echo esc_html( misora_links_t( 'nl_send' ) ); ?></button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
