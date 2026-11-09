<?php
/**
 * Title: Home: notes
 * Slug: tabiji-clinic/front-notes
 * Categories: tabiji-clinic
 * Keywords: clinic, travel, vaccination
 * Viewport Width: 1440
 * Description: Four latest posts as dotted-rule rows: date, category pill, title.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"tc-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-notes"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tabiji_clinic_t( 'nt_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"tc-h2 tc-h2--left"} -->
<h2 class="wp-block-heading tc-h2 tc-h2--left"><?php echo esc_html( tabiji_clinic_t( 'nt_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"tc-notes__lead"} -->
<p class="tc-notes__lead"><?php echo esc_html( tabiji_clinic_t( 'nt_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:query {"queryId":2,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"tc-notes__q"} -->
<div class="wp-block-query tc-notes__q"><!-- wp:post-template -->
<!-- wp:group {"className":"tc-note","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tc-note"><!-- wp:post-date {"format":"M j, Y","className":"tc-note__date"} /-->
<!-- wp:post-terms {"term":"category","className":"tc-note__cat"} /-->
<!-- wp:post-title {"level":0,"isLink":true,"className":"tc-note__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --><!-- wp:paragraph {"className":"tc-link"} -->
<p class="tc-link"><a href="/notes/"><?php echo esc_html( tabiji_clinic_t( 'nt_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
