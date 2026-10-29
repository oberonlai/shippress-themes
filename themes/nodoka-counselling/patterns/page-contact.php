<?php
/**
 * Title: Page: contact
 * Slug: nodoka-counselling/page-contact
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Inner page contact (compact split hero, ruled openers, quiet rows).
 */
?>
<!-- wp:group {"className":"nc-hero nc-hero--page","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-hero nc-hero--page"><!-- wp:group {"className":"nc-hero__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__wrap"><!-- wp:group {"className":"nc-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__stage"><!-- wp:group {"className":"nc-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-hero__fig"} -->
<figure class="wp-block-image size-full nc-hero__fig"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-entrance.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-hero__pt","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__pt"><!-- wp:paragraph {"className":"nc-hero__eye"} -->
<p class="nc-hero__eye"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_163' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"nc-hero__title"} -->
<h1 class="wp-block-heading nc-hero__title"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_164' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:html -->
<nav class="nc-tabs" aria-label="Ways to begin"><a class="nc-tab" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab1' ) ); ?></a><a class="nc-tab" href="mailto:<?php echo esc_attr( nodoka_counselling_t( 'foot_email' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab2' ) ); ?></a><a class="nc-tab" href="<?php echo esc_url( home_url( '/online-sessions/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab3' ) ); ?></a></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<span class="nc-hero__rule" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-sec nc-in nc-in--first","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-sec nc-in nc-in--first"><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-open","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open"><!-- wp:group {"className":"nc-open__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"nc-open__title"} -->
<h2 class="wp-block-heading nc-open__title"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_165' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-open__sub"} -->
<p class="nc-open__sub"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_166' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"nc-open__lead sp-reveal sp-reveal--up"} -->
<p class="nc-open__lead sp-reveal sp-reveal--up"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_167' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-contact__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nc-contact__grid"><!-- wp:group {"className":"nc-contact__f","layout":{"type":"default"}} -->
<div class="wp-block-group nc-contact__f"><!-- wp:html -->
<form class="nc-form" method="post" enctype="text/plain" action="mailto:<?php echo esc_attr( nodoka_counselling_t( 'foot_email' ) ); ?>"><p class="nc-form__f"><label for="nc-f-name"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_168' ) ); ?></label><input id="nc-f-name" name="name" type="text" required></p><p class="nc-form__f"><label for="nc-f-email"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_169' ) ); ?></label><input id="nc-f-email" name="email" type="email" required></p><p class="nc-form__f"><label for="nc-f-contact"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_170' ) ); ?></label><input id="nc-f-contact" name="contact" type="text"></p><p class="nc-form__f"><label for="nc-f-times"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_171' ) ); ?></label><input id="nc-f-times" name="times" type="text"></p><p class="nc-form__f nc-form__f--wide"><label for="nc-f-msg"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_172' ) ); ?></label><textarea id="nc-f-msg" name="message" rows="5"></textarea></p><p class="nc-form__go"><button type="submit" class="nc-form__btn"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_173' ) ); ?></button></p></form>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-contact__side","layout":{"type":"default"}} -->
<div class="wp-block-group nc-contact__side"><!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_174' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-fee__t"} -->
<p class="nc-fee__t"><?php echo nodoka_counselling_lines( 'ip_contact_175' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_176' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-fee__t"} -->
<p class="nc-fee__t"><?php echo nodoka_counselling_lines( 'ip_contact_177' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_178' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-fee__t"} -->
<p class="nc-fee__t"><a href="mailto:<?php echo esc_attr( nodoka_counselling_t( 'foot_email' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'foot_email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-sec nc-in ","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-sec nc-in "><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group nc-rows"><!-- wp:group {"className":"nc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row sp-reveal sp-reveal--up"><!-- wp:group {"className":"nc-row__l","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row__l"><!-- wp:heading {"level":3,"className":"nc-row__h"} -->
<h3 class="wp-block-heading nc-row__h"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_179' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-row__r","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row__r"><!-- wp:paragraph {"className":"nc-row__p"} -->
<p class="nc-row__p"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_180' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row sp-reveal sp-reveal--up"><!-- wp:group {"className":"nc-row__l","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row__l"><!-- wp:heading {"level":3,"className":"nc-row__h"} -->
<h3 class="wp-block-heading nc-row__h"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_181' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-row__r","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row__r"><!-- wp:paragraph {"className":"nc-row__p"} -->
<p class="nc-row__p"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_182' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-sec nc-in ","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-sec nc-in "><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-alert","layout":{"type":"default"}} -->
<div class="wp-block-group nc-alert"><!-- wp:paragraph {"className":"nc-alert__t"} -->
<p class="nc-alert__t"><?php echo esc_html( nodoka_counselling_t( 'ip_contact_183' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->