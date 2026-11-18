<?php
/**
 * Title: Newsletter page
 * Slug: taruki-distillery/page-newsletter
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: Standalone subscribe page: heading and lede with the email slot in a solid box, over a frosted botanicals photograph fading in from the right; the details at the side.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--pale td-bottle td-bottle--form td-bottle--news","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--pale td-bottle td-bottle--form td-bottle--news"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-bottle__ghost"} -->
<figure class="wp-block-image size-full td-bottle__ghost"><img src="<?php echo taruki_img( 'img-07.webp' ); ?>" alt="<?php echo taruki_a( 'alt_07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"td-bookgrid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-bookgrid"><!-- wp:group {"className":"td-bookgrid__form","layout":{"type":"default"}} -->
<div class="wp-block-group td-bookgrid__form"><!-- wp:paragraph {"className":"td-caps"} -->
<p class="td-caps"><?php echo esc_html( taruki_t( 'nl_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"td-h1 td-h1--page"} -->
<h1 class="wp-block-heading td-h1 td-h1--page"><?php echo esc_html( taruki_t( 'nl_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-phead__lede"} -->
<p class="td-phead__lede"><?php echo esc_html( taruki_t( 'nl_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"td-formbox td-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group td-formbox td-letter__form"><?php
echo shippress_form_slot(
	array(
		'kind'    => 'newsletter',
		'email'   => 'hello@taruki-distillery.example',
		'label'   => taruki_t( 'forms_email' ),
		'submit'  => taruki_t( 'forms_subscribe' ),
		'notice'  => taruki_t( 'forms_mail_notice' ),
		'subject' => taruki_t( 'forms_mail_subject' ),
	)
);
?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-bookgrid__side sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-bookgrid__side sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"td-chap__t"} -->
<h3 class="wp-block-heading td-chap__t"><?php echo esc_html( taruki_t( 'nw_1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-bookgrid__p"} -->
<p class="td-bookgrid__p"><?php echo esc_html( taruki_t( 'nw_1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"td-chap__t"} -->
<h3 class="wp-block-heading td-chap__t"><?php echo esc_html( taruki_t( 'nw_2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-bookgrid__p"} -->
<p class="td-bookgrid__p"><?php echo esc_html( taruki_t( 'nw_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
