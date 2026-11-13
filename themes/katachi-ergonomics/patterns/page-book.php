<?php
/**
 * Title: Page: Book
 * Slug: katachi-ergonomics/page-book
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk, consultancy
 * Viewport Width: 1440
 * Description: Head with docked card, the brief, an offset row on what to say, the contact form slot with a mailto fallback in a framed white block, and where we are.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ke-head sp-parallax", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ke-head sp-parallax"><!-- wp:group {"className": "ke-head__layer sp-parallax__layer", "layout": {"type": "default"}} -->
<div class="wp-block-group ke-head__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ke-head__photo"} -->
<figure class="wp-block-image size-full ke-head__photo"><img src="<?php echo katachi_ergonomics_img( 'kit-bag.webp' ); ?>" alt="<?php echo esc_attr( katachi_ergonomics_t( 'alt_b01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ke-head__card", "layout": {"type": "default"}} -->
<div class="wp-block-group ke-head__card"><!-- wp:paragraph {"className":"ke-label"} -->
<p class="ke-label"><?php echo esc_html( katachi_ergonomics_t( 'book_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ke-h1 ke-h1--page"} -->
<h1 class="wp-block-heading ke-h1 ke-h1--page"><?php echo esc_html( katachi_ergonomics_t( 'book_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-head__lead"} -->
<p class="ke-head__lead"><?php echo esc_html( katachi_ergonomics_t( 'book_ld' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "ke-sec ke-sec--s", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ke-sec ke-sec--s"><!-- wp:group {"className": "ke-wrap ke-wrap--prose", "layout": {"type": "default"}} -->
<div class="wp-block-group ke-wrap ke-wrap--prose"><!-- wp:heading {"level":2,"className":"ke-h2"} -->
<h2 class="wp-block-heading ke-h2"><?php echo esc_html( katachi_ergonomics_t( 'book_0_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-body"} -->
<p class="ke-body"><?php echo esc_html( katachi_ergonomics_t( 'book_0_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "ke-sec ke-sec--flush", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ke-sec ke-sec--flush"><!-- wp:group {"className": "ke-offset ke-offset--b ke-offset--in", "layout": {"type": "default"}} -->
<div class="wp-block-group ke-offset ke-offset--b ke-offset--in"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ke-offset__photo sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full ke-offset__photo sp-reveal sp-reveal--zoom"><img src="<?php echo katachi_ergonomics_img( 'kv-desk.webp' ); ?>" alt="<?php echo esc_attr( katachi_ergonomics_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ke-offset__notch" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className": "ke-offset__card ke-offset__card--in sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group ke-offset__card ke-offset__card--in sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ke-label"} -->
<p class="ke-label"><?php echo esc_html( katachi_ergonomics_t( 'book_1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ke-offset__t"} -->
<h3 class="wp-block-heading ke-offset__t"><?php echo esc_html( katachi_ergonomics_t( 'book_1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-offset__p"} -->
<p class="ke-offset__p"><?php echo esc_html( katachi_ergonomics_t( 'book_1_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "anchor": "write", "className": "ke-sec ke-sec--s", "layout": {"type": "default"}} -->
<section id="write" class="wp-block-group alignfull ke-sec ke-sec--s"><!-- wp:group {"className": "ke-wrap", "layout": {"type": "default"}} -->
<div class="wp-block-group ke-wrap"><!-- wp:group {"className": "ke-formblock", "layout": {"type": "default"}} -->
<div class="wp-block-group ke-formblock"><!-- wp:heading {"level":2,"className":"ke-h2"} -->
<h2 class="wp-block-heading ke-h2"><?php echo esc_html( katachi_ergonomics_t( 'book_2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-body"} -->
<p class="ke-body"><?php echo esc_html( katachi_ergonomics_t( 'book_2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ke-formslot","layout":{"type":"default"}} -->
<div class="wp-block-group ke-formslot"><?php
ob_start(); ?>
<div class="wp-block-buttons ke-formbtn"><div class="wp-block-button ke-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@katachi-ergonomics.example?subject=<?php echo rawurlencode( katachi_ergonomics_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'contact_email' ) ); ?></a></div></div>
<p class="ke-formnote"><?php echo esc_html( katachi_ergonomics_t( 'forms_contact_note' ) ); ?></p>
<?php
$ke_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $ke_fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "ke-sec ke-sec--s", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ke-sec ke-sec--s"><!-- wp:group {"className": "ke-wrap ke-wrap--prose", "layout": {"type": "default"}} -->
<div class="wp-block-group ke-wrap ke-wrap--prose"><!-- wp:heading {"level":2,"className":"ke-h2"} -->
<h2 class="wp-block-heading ke-h2"><?php echo esc_html( katachi_ergonomics_t( 'book_3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-body"} -->
<p class="ke-body"><?php echo esc_html( katachi_ergonomics_t( 'book_3_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
