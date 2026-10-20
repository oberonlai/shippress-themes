<?php
/**
 * Title: Contact: company card, message form and photograph
 * Slug: tsumugi-trading/contact-main
 * Categories: tsumugi-trading
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced company details and a plain message form, then a photograph of the head office.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-section tt-section--flush tt-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-section--flush tt-section--last"><!-- wp:group {"align":"wide","className":"tt-split tt-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-split tt-split--top"><!-- wp:group {"className":"tt-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-split__text"><!-- wp:group {"className":"tt-card","layout":{"type":"default"}} -->
<div class="wp-block-group tt-card"><!-- wp:pattern {"slug":"tsumugi-trading/office"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-contact__photo"} -->
<figure class="wp-block-image size-large tt-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/head-office.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'contact_main_01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-split__text tt-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group tt-split__text tt-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tt-split__title"} -->
<h2 class="wp-block-heading tt-split__title"><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="tt-form" action="#" method="post"><p class="tt-field"><label for="tt-name"><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_05' ) ); ?></label><input id="tt-name" name="name" type="text" autocomplete="name"></p><p class="tt-field"><label for="tt-email"><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_06' ) ); ?></label><input id="tt-email" name="contact" type="text" autocomplete="email"></p><p class="tt-field"><label for="tt-course"><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_07' ) ); ?></label><select id="tt-course" name="course"><option><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_08' ) ); ?></option><option><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_09' ) ); ?></option><option><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_10' ) ); ?></option><option><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_11' ) ); ?></option><option><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_12' ) ); ?></option><option><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_13' ) ); ?></option></select></p><p class="tt-field"><label for="tt-note"><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_14' ) ); ?></label><textarea id="tt-note" name="note" rows="4"></textarea></p><p class="tt-field"><button type="submit"><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_15' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"tt-small"} -->
<p class="tt-small"><?php echo wp_kses_post( tsumugi_trading_t( 'contact_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
