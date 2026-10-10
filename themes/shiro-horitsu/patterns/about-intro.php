<?php
/**
 * Title: About — page head with the library
 * Slug: shiro-horitsu/about-intro
 * Categories: shiro-horitsu, header
 * Keywords: about, firm, introduction, page head, library
 * Viewport Width: 1440
 * Description: The about page opening: a section mark, a large serif title, a lead paragraph and a wide photograph of the office library.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sh-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sh-page-head"><!-- wp:group {"align":"wide","className":"sh-split sh-split--7-5 sh-split--end","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sh-split sh-split--7-5 sh-split--end"><!-- wp:group {"className":"sh-stack sh-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group sh-stack sh-stack--loose"><!-- wp:paragraph {"className":"is-style-section"} -->
<p class="is-style-section">About the firm</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">A small office, <em>by choice</em></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Shiro Law Office has four attorneys and no plans to grow much larger. Staying small means a partner reads every letter, and every client is known by name.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none","className":"sh-page-head__picture"} -->
<figure class="wp-block-image alignwide size-full sh-page-head__picture"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/library.jpg' ) ); ?>" alt="Wooden shelves of ivory and indigo bound volumes beside a bright window and a small reading table"/><figcaption class="wp-element-caption">The library: case reports, statutes and twenty years of our own notes.</figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
