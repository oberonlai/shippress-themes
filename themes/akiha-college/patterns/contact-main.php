<?php
/**
 * Title: Contact page
 * Slug: akiha-college/contact-main
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Description: Write to admissions: the contact form slot with a mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-pagehead"><!-- wp:heading {"level":1,"className":"ak-h1 ak-h1--page"} -->
<h1 class="wp-block-heading ak-h1 ak-h1--page"><?php echo esc_html( akiha_college_t( 'contact_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ak-form-col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-form-col"><?php
ob_start(); ?>
<!-- wp:buttons {"className":"ak-btns"} -->
<div class="wp-block-buttons ak-btns"><!-- wp:button {"className":"ak-btn"} -->
<div class="wp-block-button ak-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@akiha-college.example?subject=<?php echo rawurlencode( akiha_college_t( 'contact_subject' ) ); ?>"><?php echo esc_html( akiha_college_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ak-small"} -->
<p class="ak-small"><?php echo esc_html( akiha_college_t( 'f_phone' ) ); ?> · <?php echo esc_html( akiha_college_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
