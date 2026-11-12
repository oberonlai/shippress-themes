<?php
/**
 * Title: Inner: for exhibitors
 * Slug: kikai-fair/inner-exhibitors
 * Categories: kikai-fair
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">For exhibitors</h1>
<!-- /wp:heading -->

<!-- wp:html -->
<span id="stand"></span>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p>A stand at Kikai Fair is a place to run your machine in front of the people who will buy it. Every stand has three-phase floor power, extraction connections and a white back wall, and the fair office handles freight into Hall 4 on Monday 8 March.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Stand sizes</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Stands start at 12 square metres. Machines that need an enclosure or a loading bay are placed along the north wall, close to the goods entrance.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">How to apply</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Email the fair office with your machine list and the floor power you need. We reply within three working days with a stand plan and a quote.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<?php
ob_start(); ?>
<a class="wp-element-button" href="mailto:hello@kikaifair.example"><?php echo esc_html( kikai_fair_t( 'contact_email' ) ); ?></a>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
<!-- /wp:html -->
