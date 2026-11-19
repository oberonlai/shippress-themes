<?php
/**
 * Title: Home: journal
 * Slug: rinrin-cycletours/front-journal
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Three latest posts with a 3:2 featured image, date, category and title.
 */
?>
<!-- wp:group {"className":"rc-journal","tagName":"section","anchor":"journal","align":"full","layout":{"type":"default"}} -->
<section id="journal" class="wp-block-group alignfull rc-journal"><!-- wp:group {"className":"rc-journal__head","layout":{"type":"default"}} -->
<div class="wp-block-group rc-journal__head"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'journal_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rc-journal__h"} -->
<h2 class="wp-block-heading rc-journal__h"><?php echo esc_html( rinrin_cycletours_t( 'journal_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"rc-jlist sp-reveal sp-reveal--up"} -->
<div class="wp-block-query rc-jlist sp-reveal sp-reveal--up"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"rc-jcard__img"} /-->

<!-- wp:group {"className":"rc-jcard__meta","layout":{"type":"default"}} -->
<div class="wp-block-group rc-jcard__meta"><!-- wp:post-date {"format":"j M Y","className":"rc-jcard__d"} /-->

<!-- wp:post-terms {"term":"category","className":"rc-jcard__c"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"rc-jcard__t"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"rc-goto"} -->
<p class="rc-goto"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'journal_all' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
