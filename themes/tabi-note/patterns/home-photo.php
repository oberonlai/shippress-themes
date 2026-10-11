<?php
/**
 * Title: Home: wide photograph with a note
 * Slug: tabi-note/home-photo
 * Categories: tabi-note
 * Keywords: photo
 * Description: A wide photograph of a misty harbour path with a short handwritten-style note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tn-band"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tn-band__photo"} -->
<figure class="wp-block-image size-large tn-band__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-coast.jpg' ) ); ?>" alt="A stone path along a still bay at dawn, two wooden boats moored below pine trees"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tn-note"} -->
<p class="tn-note">Day four of Island Hours: the harbour path at six in the morning, before the first ferry.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
