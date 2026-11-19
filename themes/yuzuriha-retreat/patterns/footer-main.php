<?php
/**
 * Title: Footer: navigate rows, the lodge, others and the letter
 * Slug: yuzuriha-retreat/footer-main
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: White footer: parenthesised Navigate label with hairline link rows and chevrons, the lodge details, other links, the newsletter slot and a legal line.
 */
?>
<!-- wp:group {"className":"yr-foot","layout":{"type":"default"}} -->
<div class="wp-block-group yr-foot"><!-- wp:group {"className":"yr-foot__top","layout":{"type":"default"}} -->
<div class="wp-block-group yr-foot__top"><!-- wp:group {"className":"yr-foot__nav","layout":{"type":"default"}} -->
<div class="wp-block-group yr-foot__nav"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'foot_nav_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-rows","layout":{"type":"default"}} -->
<div class="wp-block-group yr-rows"><!-- wp:paragraph {"className":"yr-row yr-row--nav"} -->
<p class="yr-row yr-row--nav"><a href="<?php echo yuzuriha_retreat_url( '/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_home' ) ); ?></a><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-row yr-row--nav"} -->
<p class="yr-row yr-row--nav"><a href="<?php echo yuzuriha_retreat_url( '/about/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_about' ) ); ?></a><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-row yr-row--nav"} -->
<p class="yr-row yr-row--nav"><a href="<?php echo yuzuriha_retreat_url( '/calendar/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_calendar' ) ); ?></a><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-row yr-row--nav"} -->
<p class="yr-row yr-row--nav"><a href="<?php echo yuzuriha_retreat_url( '/retreat-day/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_day' ) ); ?></a><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-row yr-row--nav"} -->
<p class="yr-row yr-row--nav"><a href="<?php echo yuzuriha_retreat_url( '/rooms/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_rooms' ) ); ?></a><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-row yr-row--nav"} -->
<p class="yr-row yr-row--nav"><a href="<?php echo yuzuriha_retreat_url( '/kitchen/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_kitchen' ) ); ?></a><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-row yr-row--nav"} -->
<p class="yr-row yr-row--nav"><a href="<?php echo yuzuriha_retreat_url( '/teachers/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_teachers' ) ); ?></a><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group yr-foot__cols"><!-- wp:group {"className":"yr-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group yr-foot__col"><!-- wp:paragraph {"className":"yr-foot__h"} -->
<p class="yr-foot__h"><?php echo esc_html( yuzuriha_retreat_t( 'foot_lodge_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-foot__txt"} -->
<p class="yr-foot__txt"><?php echo yuzuriha_retreat_lines( 'foot_address' ); ?><br><a href="tel:+00445550186">+00 44 555 0186</a><br><a href="mailto:stay@yuzuriha.example">stay@yuzuriha.example</a><br><?php echo esc_html( yuzuriha_retreat_t( 'foot_desk' ) ); ?><br><?php echo esc_html( yuzuriha_retreat_t( 'foot_season' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group yr-foot__col"><!-- wp:paragraph {"className":"yr-foot__h"} -->
<p class="yr-foot__h"><?php echo esc_html( yuzuriha_retreat_t( 'foot_others_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-foot__txt yr-foot__links"} -->
<p class="yr-foot__txt yr-foot__links"><a href="<?php echo yuzuriha_retreat_url( '/prices/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_prices' ) ); ?></a><br><a href="<?php echo yuzuriha_retreat_url( '/getting-here/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_getting' ) ); ?></a><br><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_reserve' ) ); ?></a><br><a href="<?php echo yuzuriha_retreat_url( '/contact/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_contact' ) ); ?></a><br><a href="<?php echo yuzuriha_retreat_url( '/newsletter/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'nav_newsletter' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-foot__letter","layout":{"type":"default"}} -->
<div class="wp-block-group yr-foot__letter"><!-- wp:paragraph {"className":"yr-foot__lede"} -->
<p class="yr-foot__lede"><?php echo esc_html( yuzuriha_retreat_t( 'forms_footer_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@yuzuriha.example', 'label' => yuzuriha_retreat_t( 'forms_email' ), 'submit' => yuzuriha_retreat_t( 'forms_subscribe' ), 'notice' => yuzuriha_retreat_t( 'forms_mail_notice' ), 'subject' => yuzuriha_retreat_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yr-foot__legal"} -->
<p class="yr-foot__legal"><?php echo esc_html( yuzuriha_retreat_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
