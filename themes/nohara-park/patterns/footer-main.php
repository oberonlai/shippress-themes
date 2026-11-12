<?php
/**
 * Title: Footer: park details, links and letters
 * Slug: nohara-park/footer-main
 * Categories: nohara-park
 * Inserter: no
 * Viewport Width: 1440
 * Description: White footer with a 1px ink top rule: wordmark and address, two link columns, reception hours, a compact newsletter row.
 */
?>
<!-- wp:group {"align":"full","className":"np-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull np-footer"><!-- wp:group {"className":"np-wrap np-footer__grid","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-footer__grid"><!-- wp:group {"className":"np-footer__col np-footer__col--brand","layout":{"type":"default"}} -->
<div class="wp-block-group np-footer__col np-footer__col--brand"><!-- wp:paragraph {"className":"np-footer__brand"} -->
<p class="np-footer__brand"><?php echo esc_html( nohara_park_t( 'ft_brand' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-footer__sub"} -->
<p class="np-footer__sub"><?php echo esc_html( nohara_park_t( 'ft_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-footer__t"} -->
<p class="np-footer__t"><?php echo esc_html( nohara_park_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group np-footer__col"><!-- wp:paragraph {"className":"np-footer__h"} -->
<p class="np-footer__h"><?php echo esc_html( nohara_park_t( 'ft_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="np-footer__list"><li><a href="<?php echo esc_url( home_url( '/stays/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_l1' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/pitches/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_l2' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/lodges/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_l3' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/prices/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_l4' ) ); ?></a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group np-footer__col"><!-- wp:paragraph {"className":"np-footer__h"} -->
<p class="np-footer__h"><?php echo esc_html( nohara_park_t( 'ft_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="np-footer__list"><li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_l5' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/wardens/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_l6' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/out-of-season/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_l7' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_l8' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_l9' ) ); ?></a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group np-footer__col"><!-- wp:paragraph {"className":"np-footer__h"} -->
<p class="np-footer__h"><?php echo esc_html( nohara_park_t( 'ft_h3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-footer__t"} -->
<p class="np-footer__t"><?php echo esc_html( nohara_park_t( 'ft_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-footer__t"} -->
<p class="np-footer__t"><a href="tel:+310061200841"><?php echo esc_html( nohara_park_t( 'bk_phone' ) ); ?></a><br/><a href="mailto:hello@nohara-park.example"><?php echo esc_html( nohara_park_t( 'bk_email' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-footer__t"} -->
<p class="np-footer__t"><?php echo esc_html( nohara_park_t( 'ft_rules' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-wrap np-footer__nl","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-footer__nl"><!-- wp:paragraph {"className":"np-footer__h"} -->
<p class="np-footer__h"><?php echo esc_html( nohara_park_t( 'ft_nl' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-letters__form np-letters__form--s","layout":{"type":"default"}} -->
<div class="wp-block-group np-letters__form np-letters__form--s"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@nohara-park.example', 'label' => nohara_park_t( 'forms_email' ), 'submit' => nohara_park_t( 'forms_subscribe' ), 'notice' => nohara_park_t( 'forms_mail_notice' ), 'subject' => nohara_park_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"np-footer__nl-link"} -->
<p class="np-footer__nl-link"><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_nl_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-wrap np-footer__legal","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-footer__legal"><!-- wp:paragraph {"className":"np-footer__copy"} -->
<p class="np-footer__copy"><?php echo esc_html( nohara_park_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
