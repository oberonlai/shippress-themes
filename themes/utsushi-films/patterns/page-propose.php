<?php
/**
 * Title: Page: Propose a film
 * Slug: utsushi-films/page-propose
 * Categories: utsushi-films
 * Viewport Width: 1440
 * Description: Contact page: what to send, the proposal form slot on a paper panel (mailto fallback), review timeline and contacts.
 */
?>
<!-- wp:group {"align":"full","className":"uf-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-head"><!-- wp:group {"className":"uf-head__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group uf-head__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/quay-night.webp' ) ); ?>" alt="<?php echo esc_attr( utsushi_films_t( 'a9e0a3581' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-head__line","layout":{"type":"default"}} -->
<div class="wp-block-group uf-head__line"><!-- wp:paragraph {"className":"uf-head__home"} -->
<p class="uf-head__home"><a href="/"><?php echo wp_kses_post( utsushi_films_t( 'k208a670f' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"uf-head__name"} -->
<p class="uf-head__name"><?php echo wp_kses_post( utsushi_films_t( 'k51fea28b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-head__text","layout":{"type":"default"}} -->
<div class="wp-block-group uf-head__text"><!-- wp:heading {"level":1,"className":"uf-head__title"} -->
<h1 class="wp-block-heading uf-head__title"><?php echo wp_kses_post( utsushi_films_t( 'k51fea28b' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"uf-head__meta"} -->
<p class="uf-head__meta"><?php echo wp_kses_post( utsushi_films_t( 'k98b4c9a9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-narrow uf-leadwrap","layout":{"type":"default"}} -->
<div class="wp-block-group uf-narrow uf-leadwrap"><!-- wp:paragraph {"className":"uf-lead"} -->
<p class="uf-lead"><?php echo wp_kses_post( utsushi_films_t( 'kc285b907' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"uf-section uf-textsecs","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-section uf-textsecs"><!-- wp:group {"className":"uf-narrow uf-text","layout":{"type":"default"}} -->
<div class="wp-block-group uf-narrow uf-text"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( utsushi_films_t( 'k0a63c420' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( utsushi_films_t( 'kfc559b7d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"uf-section uf-propose-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-section uf-propose-sec"><!-- wp:group {"align":"wide","className":"uf-panelwrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide uf-panelwrap"><!-- wp:group {"className":"uf-paper","layout":{"type":"default"}} -->
<div class="wp-block-group uf-paper"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( utsushi_films_t( 'kbb5fbee3' ) ); ?></h2>
<!-- /wp:heading -->

<?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:propose@utsushi-films.example?subject=<?php echo esc_attr( rawurlencode( utsushi_films_t( 'forms_contact_subject' ) ) ); ?>"><?php echo esc_html( utsushi_films_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"uf-formnote"} -->
<p class="uf-formnote"><?php echo esc_html( utsushi_films_t( 'forms_contact_note' ) ); ?></p>
<!-- /wp:paragraph -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"uf-section uf-textsecs","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-section uf-textsecs"><!-- wp:group {"className":"uf-narrow uf-text","layout":{"type":"default"}} -->
<div class="wp-block-group uf-narrow uf-text"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( utsushi_films_t( 'k098d7a3a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( utsushi_films_t( 'kd675b80d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-narrow uf-text","layout":{"type":"default"}} -->
<div class="wp-block-group uf-narrow uf-text"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( utsushi_films_t( 'k53e55fb2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( utsushi_films_t( 'k19abed78' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
