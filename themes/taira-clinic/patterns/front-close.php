<?php
/**
 * Title: Section: book your first assessment
 * Slug: taira-clinic/front-close
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Slate title bar, a 2 px rule, one line, and two equal flat steel-blue booking blocks with arrow squares.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"book","align":"full","className":"tc-sec tc-sec--close","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull tc-sec tc-sec--close">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:heading {"className":"tc-bar"} -->
<h2 class="wp-block-heading tc-bar"><?php echo esc_html( taira_clinic_t( 'cl_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-close__p"} -->
<p class="tc-close__p"><?php echo esc_html( taira_clinic_t( 'cl_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="tc-cta2"><a class="tc-blk" href="/contact/#book"><span class="tc-blk__t"><?php echo esc_html( taira_clinic_t( 'cl_b1' ) ); ?></span><span class="tc-blk__s"><?php echo esc_html( taira_clinic_t( 'blk_book_s' ) ); ?></span><span class="tc-blk__ar" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M2 8h11M9 4l4 4-4 4"/></svg></span></a><a class="tc-blk" href="tel:+15550142200"><span class="tc-blk__t"><?php echo esc_html( taira_clinic_t( 'blk_call' ) ); ?></span><span class="tc-blk__s"><?php echo esc_html( taira_clinic_t( 'hd_phone' ) ); ?></span><span class="tc-blk__ar" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M2 8h11M9 4l4 4-4 4"/></svg></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
