<?php
/**
 * Title: Page: Book a Table
 * Slug: kohaku-brasserie/page-book
 * Categories: kohaku-brasserie
 * Inserter: no
 * Description: Inner page: Book a Table.
 */
?>
<!-- wp:group {"tagName":"section","className":"kb-sec kb-page","layout":{"type":"default"}} -->
<section class="wp-block-group kb-sec kb-page"><!-- wp:group {"className":"kb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kb-wrap"><!-- wp:group {"className":"kb-page__head","layout":{"type":"default"}} -->
<div class="wp-block-group kb-page__head"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(book a table)</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kb-page__title"} -->
<h1 class="wp-block-heading kb-page__title">Book a Table</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kb-page__lead"} -->
<p class="kb-page__lead">One way to book: write to us with the date, the sitting and the party size.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kb-page__img"} -->
<figure class="wp-block-image size-full kb-page__img"><img src="<?php echo kohaku_brasserie_img( 'h11' ); ?>" alt="The restaurant entrance features an open reservation ledger beside a wooden coat stand."/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kb-page__cols","layout":{"type":"default"}} -->
<div class="wp-block-group kb-page__cols"><!-- wp:group {"className":"kb-page__col","layout":{"type":"default"}} -->
<div class="wp-block-group kb-page__col"><!-- wp:paragraph -->
<p>Reservations open up to sixty days ahead for lunch, dinner, the late sitting and the counter pass. We confirm by email within four hours during opening times and hold your table for fifteen minutes.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Parties of seven or more are hosted in the Lantern Room. No booking is needed for four or fewer in the quiet hours.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-page__col","layout":{"type":"default"}} -->
<div class="wp-block-group kb-page__col"><!-- wp:paragraph -->
<p>Tue–Sat 11:30–00:00<br>Sun 11:30–17:00<br>Mon closed</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="mailto:bookings@kohaku-brasserie.example">bookings@kohaku-brasserie.example</a><br>+00 20 7000 0414</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-page__form","layout":{"type":"default"}} -->
<div class="wp-block-group kb-page__form"><?php
ob_start();
?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kb-btn"} -->
<div class="wp-block-button kb-btn"><a class="wp-block-button__link wp-element-button" href="mailto:bookings@kohaku-brasserie.example"><?php echo esc_html( kohaku_brasserie_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
