<?php
/**
 * Title: Home: notices
 * Slug: ushio-line/front-notices
 * Categories: ushio-line
 * Keywords: ferry, harbour
 * Viewport Width: 1440
 * Description: Service notices: the label and a line about weather, three dated rows from a query loop and a link to all notices.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ul-sec ul-notices","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ul-sec ul-notices"><!-- wp:group {"className":"ul-wrap ul-notices__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ul-wrap ul-notices__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ul-label"} -->
<p class="ul-label"><?php echo esc_html( ushio_line_t( 'nt_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ul-h"} -->
<h2 class="wp-block-heading ul-h"><?php echo esc_html( ushio_line_t( 'nt_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ushio_line_t( 'nt_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ul-wrap ul-notices__list","layout":{"type":"default"}} -->
<div class="wp-block-query ul-wrap ul-notices__list"><!-- wp:post-template {"className":"ul-notices__rows"} -->
<!-- wp:group {"className":"ul-notice","layout":{"type":"default"}} -->
<div class="wp-block-group ul-notice"><!-- wp:post-date {"format":"j M Y","className":"ul-notice__date"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"ul-notice__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"className":"ul-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ul-wrap"><?php echo ushio_line_go( ushio_line_t( 'nt_go' ), '/notices/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
