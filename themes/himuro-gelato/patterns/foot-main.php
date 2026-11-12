<?php
/**
 * Title: Footer
 * Slug: himuro-gelato/foot-main
 * Categories: himuro-gelato
 * Inserter: no
 * Description: Grain-wave footer: links, address and hours, the newsletter slot and a small legal line.
 */
?>
<!-- wp:group {"className":"hg-foot","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hg-foot"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:group {"className":"hg-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hg-foot__grid"><!-- wp:group {"className":"hg-foot__col hg-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group hg-foot__col hg-foot__brand"><!-- wp:html -->
<svg class="hg-foot__rose" viewBox="0 0 24 24" width="30" height="30" aria-hidden="true" focusable="false"><g fill="none" stroke="currentColor" stroke-width="1.1" stroke-linecap="round"><path d="M12 2.5v19M3.8 7.2l16.4 9.6M3.8 16.8l16.4-9.6"/><path d="M10 4.2 12 6.4l2-2.2M10 19.8l2-2.2 2 2.2"/></g></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hg-foot__name"} -->
<p class="hg-foot__name"><?php echo esc_html( himuro_gelato_t( 'ft_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-foot__tag"} -->
<p class="hg-foot__tag"><?php echo esc_html( himuro_gelato_t( 'ft_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hg-foot__col"><!-- wp:paragraph {"className":"hg-foot__lab"} -->
<p class="hg-foot__lab"><?php echo esc_html( himuro_gelato_t( 'ft_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-foot__links"} -->
<p class="hg-foot__links"><a href="/flavours/"><?php echo esc_html( himuro_gelato_t( 'ft_a1' ) ); ?></a><br><a href="/batches/"><?php echo esc_html( himuro_gelato_t( 'ft_a2' ) ); ?></a><br><a href="/tubs/"><?php echo esc_html( himuro_gelato_t( 'ft_a3' ) ); ?></a><br><a href="/people/"><?php echo esc_html( himuro_gelato_t( 'ft_a4' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hg-foot__col"><!-- wp:paragraph {"className":"hg-foot__lab"} -->
<p class="hg-foot__lab"><?php echo esc_html( himuro_gelato_t( 'ft_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-foot__links"} -->
<p class="hg-foot__links"><a href="/about/"><?php echo esc_html( himuro_gelato_t( 'ft_b1' ) ); ?></a><br><a href="/visit/"><?php echo esc_html( himuro_gelato_t( 'ft_b2' ) ); ?></a><br><a href="/journal/"><?php echo esc_html( himuro_gelato_t( 'ft_b3' ) ); ?></a><br><a href="/contact/"><?php echo esc_html( himuro_gelato_t( 'ft_b4' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hg-foot__col"><!-- wp:paragraph {"className":"hg-foot__lab"} -->
<p class="hg-foot__lab"><?php echo esc_html( himuro_gelato_t( 'ft_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo himuro_gelato_lines( 'ft_addr' ); ?><br><?php echo esc_html( himuro_gelato_t( 'ft_hours' ) ); ?><br><a href="mailto:hello@himurogelato.example">hello@himurogelato.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-foot__sub","layout":{"type":"default"}} -->
<div class="wp-block-group hg-foot__sub"><!-- wp:paragraph {"className":"hg-foot__lab"} -->
<p class="hg-foot__lab"><?php echo esc_html( himuro_gelato_t( 'ft_nl' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@himurogelato.example', 'label' => himuro_gelato_t( 'forms_email' ), 'submit' => himuro_gelato_t( 'forms_subscribe' ), 'notice' => himuro_gelato_t( 'forms_mail_notice' ), 'subject' => himuro_gelato_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group hg-foot__base"><!-- wp:paragraph {"className":"hg-foot__legal"} -->
<p class="hg-foot__legal"><?php echo esc_html( himuro_gelato_t( 'ft_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
