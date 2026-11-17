<?php
/**
 * Title: Page: Rates and booking
 * Slug: makiba-farmstay/page-book
 * Categories: makiba-farmstay
 * Viewport Width: 1440
 * Description: Rates and booking page: hero photo, the full rates table, the three-part way to book, the booking form slot with a mailto fallback and the terms.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mf-pagehero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-pagehero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mf-pagehero__img"} -->
<figure class="wp-block-image size-full mf-pagehero__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-evening-yard.webp' ) ); ?>" alt="<?php echo esc_attr( makiba_farmstay_t( 'a7459575a' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mf-pagehero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group mf-pagehero__shade"></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-pagehero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group mf-pagehero__copy"><!-- wp:paragraph {"className":"mf-crumb"} -->
<p class="mf-crumb"><?php echo wp_kses_post( makiba_farmstay_t( 'k479160fc' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"mf-h1"} -->
<h1 class="wp-block-heading mf-h1"><?php echo wp_kses_post( makiba_farmstay_t( 'k763664cb' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:html -->
<svg class="mf-pagehero__cut" viewBox="0 0 1440 60" preserveAspectRatio="none" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M0 60V34C120 14 260 6 400 14C560 24 700 52 880 42C1040 32 1160 8 1300 6C1360 6 1410 12 1440 20V60Z" fill="#F5F5F5"/></svg>
<!-- /wp:html --><!-- wp:html -->
<div class="mf-hero__ridge" role="group" aria-label="<?php echo esc_attr( makiba_farmstay_t( 'a8550d6d6' ) ); ?>"><svg class="mf-hero__ridgesvg" viewBox="0 0 1440 150" preserveAspectRatio="none" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="mf-gp-ph" width="160" height="160" patternUnits="userSpaceOnUse"><image href="<?php echo esc_url( get_theme_file_uri( 'assets/images/grain.png' ) ); ?>" width="160" height="160"/></pattern></defs><path d="M0 150V104C110 84 270 66 403 72C560 80 690 112 850 92C985 74 1052 14 1123 2C1220 -4 1340 20 1440 36V150Z" fill="#A1A46D"/><path d="M0 150V104C110 84 270 66 403 72C560 80 690 112 850 92C985 74 1052 14 1123 2C1220 -4 1340 20 1440 36V150Z" fill="url(#mf-gp-ph)"/><path d="M0 150V124C200 104 380 114 520 124C700 136 900 100 1080 80C1200 68 1330 76 1440 94V150Z" fill="#6B6F3A"/><path d="M0 150V124C200 104 380 114 520 124C700 136 900 100 1080 80C1200 68 1330 76 1440 94V150Z" fill="url(#mf-gp-ph)"/></svg><div class="mf-hero__times"><a href="/farm-day/#t-0530"><b>05:30</b></a><a href="/farm-day/#t-0700"><b>07:00</b></a><a href="/farm-day/#t-1000"><b>10:00</b></a><a href="/farm-day/#t-1300"><b>13:00</b></a><a href="/farm-day/#t-1830"><b>18:30</b></a></div></div>
<!-- /wp:html --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"mf-sec mf-grain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-sec mf-grain"><!-- wp:group {"className":"mf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mf-wrap"><!-- wp:group {"className":"mf-s1","layout":{"type":"default"}} -->
<div class="wp-block-group mf-s1"><!-- wp:heading {"level":2,"className":"mf-giant"} -->
<h2 class="wp-block-heading mf-giant"><?php echo wp_kses_post( makiba_farmstay_t( 'k89302eb6' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-sub"} -->
<p class="mf-sub"><?php echo wp_kses_post( makiba_farmstay_t( 'k06cf10b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mf-lead sp-reveal sp-reveal--up"} -->
<p class="mf-lead sp-reveal sp-reveal--up"><?php echo wp_kses_post( makiba_farmstay_t( 'k095f79e4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"mf-sub"} -->
<h2 class="wp-block-heading mf-sub"><?php echo wp_kses_post( makiba_farmstay_t( 'kc2f5ca3b' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:table {"className":"mf-rates"} -->
<figure class="wp-block-table mf-rates"><table><tbody><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'kbc47fc33' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'k76a4c40b' ) ); ?></td><td>€165</td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'k37a3a31d' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'k88b6adcc' ) ); ?></td><td>€185</td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'kd8addef2' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'k451a15a3' ) ); ?></td><td>€210</td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'kcc465208' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'ke10b96f1' ) ); ?></td><td>€245</td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'k8e903bde' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'ke8989221' ) ); ?></td><td>€22 / €11</td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'k992fac80' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'k04daac43' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'k984ceac1' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --><!-- wp:paragraph {"className":"mf-note"} -->
<p class="mf-note"><?php echo wp_kses_post( makiba_farmstay_t( 'k33d4802d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"mf-sec mf-sec--white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-sec mf-sec--white"><!-- wp:group {"className":"mf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mf-wrap"><!-- wp:heading {"level":2,"className":"mf-sub"} -->
<h2 class="wp-block-heading mf-sub"><?php echo wp_kses_post( makiba_farmstay_t( 'k7f45b585' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"mf-prows sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-prows sp-reveal sp-reveal--up"><!-- wp:group {"className":"mf-prow","layout":{"type":"default"}} -->
<div class="wp-block-group mf-prow"><!-- wp:heading {"level":3,"className":"mf-prow__h"} -->
<h3 class="wp-block-heading mf-prow__h"><?php echo wp_kses_post( makiba_farmstay_t( 'ka0b271a9' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-prow__t"} -->
<p class="mf-prow__t"><?php echo wp_kses_post( makiba_farmstay_t( 'k229ae1b3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-prow","layout":{"type":"default"}} -->
<div class="wp-block-group mf-prow"><!-- wp:heading {"level":3,"className":"mf-prow__h"} -->
<h3 class="wp-block-heading mf-prow__h"><?php echo wp_kses_post( makiba_farmstay_t( 'k70d9be9b' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-prow__t"} -->
<p class="mf-prow__t"><?php echo wp_kses_post( makiba_farmstay_t( 'ke088b114' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-prow","layout":{"type":"default"}} -->
<div class="wp-block-group mf-prow"><!-- wp:heading {"level":3,"className":"mf-prow__h"} -->
<h3 class="wp-block-heading mf-prow__h"><?php echo wp_kses_post( makiba_farmstay_t( 'ke7143c92' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-prow__t"} -->
<p class="mf-prow__t"><?php echo wp_kses_post( makiba_farmstay_t( 'k5a2513a1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mf-body mf-body--wide"} -->
<p class="mf-body mf-body--wide"><?php echo wp_kses_post( makiba_farmstay_t( 'k294629a6' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"mf-formwrap mf-formwrap--wide","layout":{"type":"default"}} -->
<div class="wp-block-group mf-formwrap mf-formwrap--wide"><?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mf-pill"} -->
<div class="wp-block-button mf-pill"><a class="wp-block-button__link wp-element-button" href="mailto:stay@makibafarm.example?subject=<?php echo rawurlencode( makiba_farmstay_t( 'book_subject' ) ); ?>"><?php echo esc_html( makiba_farmstay_t( 'book_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
