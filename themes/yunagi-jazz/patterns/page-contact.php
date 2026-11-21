<?php
/**
 * Title: Page: Contact
 * Slug: yunagi-jazz/page-contact
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: Contact: box office details, the contact form with a mailto fallback, festival grounds and press enquiries.
 */
?>
<!-- wp:group {"className":"yj-mat yj-mat--mini","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat yj-mat--mini">
<!-- wp:group {"className":"yj-mat__col yj-mat__col--1","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__col yj-mat__col--1">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-mat__img"} -->
<figure class="wp-block-image size-full yj-mat__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-sound-engineer.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__col yj-mat__col--2 sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__col yj-mat__col--2 sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-mat__img"} -->
<figure class="wp-block-image size-full yj-mat__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p17-sound-check.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p17' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__col yj-mat__col--3","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__col yj-mat__col--3">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-mat__img"} -->
<figure class="wp-block-image size-full yj-mat__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p18-kitchen-tent.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p18' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__grad","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__grad"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__title","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__title">
<!-- wp:paragraph {"className":"yj-eyebrow"} -->
<p class="yj-eyebrow"><span class="yj-eyebrow__d"><?php echo esc_html( yunagi_jazz_t( 'ft_dates' ) ); ?></span><span class="yj-eyebrow__m"><?php echo esc_html( yunagi_jazz_t( 'hero_eb_m' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yj-h1 yj-h1--mini"} -->
<h1 class="wp-block-heading yj-h1 yj-h1--mini"><?php echo esc_html( yunagi_jazz_t( 'contact_h1' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-sheet yj-sheet--text","layout":{"type":"default"},"tagName":"section","anchor":"box-office"} -->
<section id="box-office" class="wp-block-group yj-sheet yj-sheet--text">
<!-- wp:group {"className":"yj-sh","layout":{"type":"default"}} -->
<div class="wp-block-group yj-sh">
<!-- wp:heading {"level":2,"className":"yj-sh__t"} -->
<h2 class="wp-block-heading yj-sh__t"><?php echo esc_html( yunagi_jazz_t( 'contact_s0_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yj-sh__label"} -->
<p class="yj-sh__label"><?php echo esc_html( yunagi_jazz_t( 'contact_s0_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yj-lead"} -->
<p class="yj-lead"><?php echo esc_html( yunagi_jazz_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-prose"} -->
<p class="yj-prose"><?php echo esc_html( yunagi_jazz_t( 'contact_s0_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yj-lines yj-lines--kv sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yj-lines yj-lines--kv sp-stagger">
<!-- wp:paragraph {"className":"yj-line yj-line--kv sp-reveal sp-reveal--up"} -->
<p class="yj-line yj-line--kv sp-reveal sp-reveal--up"><span class="yj-line__k"><?php echo esc_html( yunagi_jazz_t( 'contact_k1' ) ); ?></span><span><a href="mailto:tickets@yunagijazz.example">tickets@yunagijazz.example</a></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-line yj-line--kv sp-reveal sp-reveal--up"} -->
<p class="yj-line yj-line--kv sp-reveal sp-reveal--up"><span class="yj-line__k"><?php echo esc_html( yunagi_jazz_t( 'contact_k2' ) ); ?></span><span><a href="mailto:hello@yunagijazz.example">hello@yunagijazz.example</a></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-line yj-line--kv sp-reveal sp-reveal--up"} -->
<p class="yj-line yj-line--kv sp-reveal sp-reveal--up"><span class="yj-line__k"><?php echo esc_html( yunagi_jazz_t( 'contact_k3' ) ); ?></span><span><?php echo esc_html( yunagi_jazz_t( 'contact_v3' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-line yj-line--kv sp-reveal sp-reveal--up"} -->
<p class="yj-line yj-line--kv sp-reveal sp-reveal--up"><span class="yj-line__k"><?php echo esc_html( yunagi_jazz_t( 'contact_k4' ) ); ?></span><span><?php echo esc_html( yunagi_jazz_t( 'contact_v4' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-sheet yj-sheet--text yj-sheet--form","layout":{"type":"default"},"tagName":"section","anchor":"write"} -->
<section id="write" class="wp-block-group yj-sheet yj-sheet--text yj-sheet--form">
<!-- wp:group {"className":"yj-sh","layout":{"type":"default"}} -->
<div class="wp-block-group yj-sh">
<!-- wp:heading {"level":2,"className":"yj-sh__t"} -->
<h2 class="wp-block-heading yj-sh__t"><?php echo esc_html( yunagi_jazz_t( 'contact_form_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yj-sh__label"} -->
<p class="yj-sh__label"><?php echo esc_html( yunagi_jazz_t( 'contact_form_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group yj-formwrap">
<?php
ob_start(); ?>
<!-- wp:buttons {"className":"yj-stubwrap"} -->
<div class="wp-block-buttons yj-stubwrap"><!-- wp:button {"className":"yj-stub"} -->
<div class="wp-block-button yj-stub"><a class="wp-block-button__link wp-element-button" href="mailto:hello@yunagijazz.example?subject=<?php echo esc_attr( rawurlencode( yunagi_jazz_t( 'contact_mail_subject' ) ) ); ?>"><?php echo esc_html( yunagi_jazz_t( 'contact_email_button' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>

<!-- wp:paragraph {"className":"yj-note"} -->
<p class="yj-note"><?php echo esc_html( yunagi_jazz_t( 'contact_hours' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-sheet yj-sheet--text","layout":{"type":"default"},"tagName":"section","anchor":"grounds"} -->
<section id="grounds" class="wp-block-group yj-sheet yj-sheet--text">
<!-- wp:group {"className":"yj-sh","layout":{"type":"default"}} -->
<div class="wp-block-group yj-sh">
<!-- wp:heading {"level":2,"className":"yj-sh__t"} -->
<h2 class="wp-block-heading yj-sh__t"><?php echo esc_html( yunagi_jazz_t( 'contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yj-sh__label"} -->
<p class="yj-sh__label"><?php echo esc_html( yunagi_jazz_t( 'contact_s1_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yj-prose"} -->
<p class="yj-prose"><?php echo esc_html( yunagi_jazz_t( 'contact_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yj-sh","layout":{"type":"default"}} -->
<div class="wp-block-group yj-sh">
<!-- wp:heading {"level":2,"className":"yj-sh__t"} -->
<h2 class="wp-block-heading yj-sh__t"><?php echo esc_html( yunagi_jazz_t( 'contact_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yj-sh__label"} -->
<p class="yj-sh__label"><?php echo esc_html( yunagi_jazz_t( 'contact_s2_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yj-prose"} -->
<p class="yj-prose"><?php echo esc_html( yunagi_jazz_t( 'contact_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
