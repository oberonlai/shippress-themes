<?php
/**
 * Title: Home: notice panel
 * Slug: shirushi-customs/front-notice
 * Categories: shirushi-customs
 * Keywords: customs, broker, home
 * Viewport Width: 1440
 * Description: A tinted panel in two columns split by a hairline: desk phone with a form pill, and the drop-off counter hours.
 */
$img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-notice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-notice"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter"><?php echo esc_html( sc_t( 'notice_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel sp-reveal sp-reveal--up"><!-- wp:group {"className":"sc-panel__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel__col"><!-- wp:paragraph {"className":"sc-panel__k"} -->
<p class="sc-panel__k"><?php echo esc_html( sc_t( 'notice_desk' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'notice_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__big"} -->
<p class="sc-panel__big"><a href="tel:+15550142300"><?php echo esc_html( sc_t( 'foot_phone' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__small"} -->
<p class="sc-panel__small"><?php echo esc_html( sc_t( 'notice_hours' ) ); ?> · <a href="mailto:desk@shirushi-customs.example"><?php echo esc_html( sc_t( 'foot_mail' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-formpill"} -->
<p class="sc-formpill"><a href="/contact/"><?php echo esc_html( sc_t( 'notice_open' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-panel__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-panel__col"><!-- wp:paragraph {"className":"sc-panel__k"} -->
<p class="sc-panel__k"><?php echo esc_html( sc_t( 'notice_drop' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'notice_r1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__big"} -->
<p class="sc-panel__big"><?php echo esc_html( sc_t( 'notice_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__mid"} -->
<p class="sc-panel__mid"><?php echo esc_html( sc_t( 'notice_days' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-panel__small"} -->
<p class="sc-panel__small"><?php echo esc_html( sc_t( 'notice_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
