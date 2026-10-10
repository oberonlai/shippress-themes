<?php
/**
 * Title: Contact — page head
 * Slug: hakuba-dental/contact-head
 * Categories: hakuba-dental
 * Keywords: contact, booking, phone, page head
 * Viewport Width: 1440
 * Description: The contact page head: the title, the telephone number and a short note, beside the waiting room photograph in a crown-shaped cell.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hd-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hd-page-head"><!-- wp:group {"align":"wide","className":"hd-bento","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hd-bento"><!-- wp:group {"className":"hd-cell hd-c-8 hd-page-head__intro","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-c-8 hd-page-head__intro"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Book or ask</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Book a visit, or just ask a question</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">The quickest way is to call us (the number is below). You can also send the form below and we will reply within a working day with two or three times to choose from.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-cell hd-cell--photo hd-cell--crown hd-c-4","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-cell--photo hd-cell--crown hd-c-4"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waiting.jpg' ) ); ?>" alt="A quiet waiting room with white chairs facing a tall window full of green trees"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
