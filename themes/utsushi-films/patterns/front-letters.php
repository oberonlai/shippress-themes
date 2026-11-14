<?php
/**
 * Title: Home: propose a film and field letters
 * Slug: utsushi-films/front-letters
 * Categories: utsushi-films
 * Viewport Width: 1440
 * Description: Two columns: the one way to propose a film, and an indigo panel with the field letters newsletter form.
 */
?>
<!-- wp:group {"align":"full","className":"uf-section uf-letters","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-section uf-letters"><!-- wp:group {"align":"wide","className":"uf-letters__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide uf-letters__grid"><!-- wp:group {"className":"uf-letters__propose","layout":{"type":"default"}} -->
<div class="wp-block-group uf-letters__propose"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( utsushi_films_t( 'k51fea28b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( utsushi_films_t( 'kb997b4df' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"uf-propose uf-propose--inline"} -->
<p class="uf-propose uf-propose--inline"><a href="/propose/"><?php echo wp_kses_post( utsushi_films_t( 'kd6667fb0' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-letters__panel","layout":{"type":"default"}} -->
<div class="wp-block-group uf-letters__panel"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( utsushi_films_t( 'ka8f3e732' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( utsushi_films_t( 'kbb71039d' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'propose@utsushi-films.example',
	'label'   => utsushi_films_t( 'forms_email' ),
	'submit'  => utsushi_films_t( 'forms_subscribe' ),
	'notice'  => utsushi_films_t( 'forms_mail_notice' ),
	'subject' => utsushi_films_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
