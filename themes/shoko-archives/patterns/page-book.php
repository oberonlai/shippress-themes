<?php
/**
 * Title: Page: book a collection
 * Slug: shoko-archives/page-book
 * Categories: shoko-archives
 * Inserter: no
 * Viewport Width: 1440
 * Description: Booking page: a boxed headline, a short explanation and the contact form slot (the mailto button when no form plugin is active).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"sa-phead","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull sa-phead"><!-- wp:group {"className":"sa-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap"><!-- wp:heading {"level":1,"className":"sa-phead__h1"} -->
<h1 class="wp-block-heading sa-phead__h1"><?php echo esc_html( shoko_archives_t( 'bkp_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-sub"} -->
<p class="sa-sub"><?php echo esc_html( shoko_archives_t( 'bkp_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sa-sec sa-sec--end","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sa-sec sa-sec--end"><!-- wp:group {"className":"sa-wrap sa-wrap--page","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap sa-wrap--page"><!-- wp:heading {"className":"sa-h2"} -->
<h2 class="wp-block-heading sa-h2"><?php echo esc_html( shoko_archives_t( 'bkp_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-intro"} -->
<p class="sa-intro"><?php echo esc_html( shoko_archives_t( 'bkp_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-fine"} -->
<p class="sa-fine"><?php echo esc_html( shoko_archives_t( 'bkp_addr' ) ); ?><br><?php echo esc_html( shoko_archives_t( 'bkp_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sa-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group sa-formbox"><?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sa-btn"} -->
<div class="wp-block-button sa-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@shoko-archives.example?subject=<?php echo rawurlencode( shoko_archives_t( 'forms_booking_subject' ) ); ?>"><?php echo esc_html( shoko_archives_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
