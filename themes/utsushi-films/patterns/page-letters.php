<?php
/**
 * Title: Page: Field letters
 * Slug: utsushi-films/page-letters
 * Categories: utsushi-films
 * Viewport Width: 1440
 * Description: Newsletter page: what arrives each month, the subscription form slot on an indigo panel, field notes and how to unsubscribe.
 */
?>
<!-- wp:group {"align":"full","className":"uf-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-head"><!-- wp:group {"className":"uf-head__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group uf-head__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/notebooks.webp' ) ); ?>" alt="<?php echo esc_attr( utsushi_films_t( 'a71f6a638' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-head__line","layout":{"type":"default"}} -->
<div class="wp-block-group uf-head__line"><!-- wp:paragraph {"className":"uf-head__home"} -->
<p class="uf-head__home"><a href="/"><?php echo wp_kses_post( utsushi_films_t( 'k208a670f' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"uf-head__name"} -->
<p class="uf-head__name"><?php echo wp_kses_post( utsushi_films_t( 'ka8f3e732' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-head__text","layout":{"type":"default"}} -->
<div class="wp-block-group uf-head__text"><!-- wp:heading {"level":1,"className":"uf-head__title"} -->
<h1 class="wp-block-heading uf-head__title"><?php echo wp_kses_post( utsushi_films_t( 'ka8f3e732' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"uf-head__meta"} -->
<p class="uf-head__meta"><?php echo wp_kses_post( utsushi_films_t( 'k2529d5e9' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"uf-propose uf-propose--flow"} -->
<p class="uf-propose uf-propose--flow"><a href="/propose/"><?php echo wp_kses_post( utsushi_films_t( 'kd6667fb0' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-narrow uf-leadwrap","layout":{"type":"default"}} -->
<div class="wp-block-group uf-narrow uf-leadwrap"><!-- wp:paragraph {"className":"uf-lead"} -->
<p class="uf-lead"><?php echo wp_kses_post( utsushi_films_t( 'k3f3e9348' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"uf-section uf-textsecs","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-section uf-textsecs"><!-- wp:group {"className":"uf-narrow uf-text","layout":{"type":"default"}} -->
<div class="wp-block-group uf-narrow uf-text"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( utsushi_films_t( 'ka550edc3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( utsushi_films_t( 'ke2d0dd8d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"uf-section uf-letters-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-section uf-letters-sec"><!-- wp:group {"align":"wide","className":"uf-panelwrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide uf-panelwrap"><!-- wp:group {"className":"uf-letters__panel uf-letters__panel--page","layout":{"type":"default"}} -->
<div class="wp-block-group uf-letters__panel uf-letters__panel--page"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( utsushi_films_t( 'k85948170' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( utsushi_films_t( 'k17e74ce8' ) ); ?></p>
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

<!-- wp:group {"align":"full","className":"uf-section uf-textsecs","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-section uf-textsecs"><!-- wp:group {"className":"uf-narrow uf-text","layout":{"type":"default"}} -->
<div class="wp-block-group uf-narrow uf-text"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( utsushi_films_t( 'kfd5a4431' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( utsushi_films_t( 'k865e5ff2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-narrow uf-text","layout":{"type":"default"}} -->
<div class="wp-block-group uf-narrow uf-text"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( utsushi_films_t( 'kbadfddff' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( utsushi_films_t( 'k7743eb7b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
