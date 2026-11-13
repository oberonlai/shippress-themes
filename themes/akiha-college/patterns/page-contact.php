<?php
/**
 * Title: Page: Contact
 * Slug: akiha-college/page-contact
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Description: Contact: the contact form slot first, then the location, hours and six questions as ruled rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-pageintro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-pageintro"><!-- wp:paragraph {"className":"ak-lede"} -->
<p class="ak-lede"><?php echo esc_html( akiha_college_t( 'contact_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-pagewin"} -->
<figure class="wp-block-image size-full ak-pagewin"><img src="<?php echo akiha_college_img( 'k1.webp' ); ?>" alt="<?php echo akiha_college_a( 'alt_k1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-rail ak-rail--inner ak-rail--contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-rail ak-rail--inner ak-rail--contact"><!-- wp:group {"className":"ak-rail__side","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__side"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akiha_college_t( 'lbl_contact_page' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-rail__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__col"><!-- wp:group {"anchor":"write","className":"ak-sect sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="write" class="wp-block-group ak-sect sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ak-sect__h"} -->
<h2 class="wp-block-heading ak-sect__h"><?php echo esc_html( akiha_college_t( 'contact_h' ) ); ?></h2>
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

<!-- wp:paragraph {"className":"ak-small ak-formnote"} -->
<p class="ak-small ak-formnote"><?php echo esc_html( akiha_college_t( 'f_phone' ) ); ?> · <?php echo esc_html( akiha_college_t( 'foot_addr' ) ); ?> · <?php echo esc_html( akiha_college_t( 'f_hours_l2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-rail ak-rail--inner ak-rail--contact2","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-rail ak-rail--inner ak-rail--contact2"><!-- wp:group {"className":"ak-rail__side","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__side"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akiha_college_t( 'lbl_find' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-rail__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__col"><!-- wp:group {"className":"ak-sects","layout":{"type":"default"}} -->
<div class="wp-block-group ak-sects"><!-- wp:group {"className":"ak-sect sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-sect sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ak-sect__h"} -->
<h2 class="wp-block-heading ak-sect__h"><?php echo esc_html( akiha_college_t( 'contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-body"} -->
<p class="ak-body"><?php echo esc_html( akiha_college_t( 'contact_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ak-sect__h ak-sect__h--rows"} -->
<h2 class="wp-block-heading ak-sect__h ak-sect__h--rows"><?php echo esc_html( akiha_college_t( 'faq_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ak-faqs","layout":{"type":"default"}} -->
<div class="wp-block-group ak-faqs"><!-- wp:details {"className":"ak-faq"} -->
<details class="wp-block-details ak-faq"><summary><?php echo esc_html( akiha_college_t( 'contact_s2_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( akiha_college_t( 'contact_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ak-faq"} -->
<details class="wp-block-details ak-faq"><summary><?php echo esc_html( akiha_college_t( 'contact_s3_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( akiha_college_t( 'contact_s3_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ak-faq"} -->
<details class="wp-block-details ak-faq"><summary><?php echo esc_html( akiha_college_t( 'contact_s4_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( akiha_college_t( 'contact_s4_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ak-faq"} -->
<details class="wp-block-details ak-faq"><summary><?php echo esc_html( akiha_college_t( 'contact_s5_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( akiha_college_t( 'contact_s5_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ak-faq"} -->
<details class="wp-block-details ak-faq"><summary><?php echo esc_html( akiha_college_t( 'contact_s6_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( akiha_college_t( 'contact_s6_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ak-faq"} -->
<details class="wp-block-details ak-faq"><summary><?php echo esc_html( akiha_college_t( 'contact_s7_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( akiha_college_t( 'contact_s7_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
