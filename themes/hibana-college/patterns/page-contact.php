<?php
/**
 * Title: Page: Contact
 * Slug: hibana-college/page-contact
 * Categories: hibana-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"hc-pagehead","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hc-pagehead">
<!-- wp:html -->
<div class="hc-rings" aria-hidden="true"><div class="hc-rings__a"></div><div class="hc-rings__b"></div><div class="hc-rings__c"></div></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:heading {"level":1,"className":"hc-ph__title hc-head__title"} -->
<h1 class="wp-block-heading hc-ph__title hc-head__title"><?php echo wp_kses_post( hibana_college_t( 'contact_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"hc-hairline "} -->
<hr class="wp-block-separator has-alpha-channel-opacity hc-hairline"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"hc-pagehead__lead"} -->
<p class="hc-pagehead__lead"><?php echo wp_kses_post( hibana_college_t( 'contact_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-isecwrap","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hc-sec hc-isecwrap">
<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:group {"className":"hc-isec","layout":{"type":"default"}} -->
<div class="wp-block-group hc-isec">
<!-- wp:heading {"level":2,"className":"hc-sec__h"} -->
<h2 class="wp-block-heading hc-sec__h"><?php echo wp_kses_post( hibana_college_t( 'contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'contact_s1_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:group {"className":"hc-isec","layout":{"type":"default"}} -->
<div class="wp-block-group hc-isec">
<!-- wp:heading {"level":2,"className":"hc-sec__h"} -->
<h2 class="wp-block-heading hc-sec__h"><?php echo wp_kses_post( hibana_college_t( 'contact_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'contact_s2_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"","dimRatio":40,"overlayColor":"base","isUserOverlayColor":true,"minHeight":420,"minHeightUnit":"px","contentPosition":"bottom left","align":"full","className":"hc-floor hc-floor--band sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left hc-floor hc-floor--band sp-parallax" style="min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hibana_college_t( 'contact_cover_alt' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/f1.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"hc-floor__p"} -->
<p class="hc-floor__p"><?php echo wp_kses_post( hibana_college_t( 'contact_cover_p' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:group {"className":"hc-isec","layout":{"type":"default"}} -->
<div class="wp-block-group hc-isec">
<!-- wp:heading {"level":2,"className":"hc-sec__h"} -->
<h2 class="wp-block-heading hc-sec__h"><?php echo wp_kses_post( hibana_college_t( 'contact_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'contact_s3_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:html -->
<form class="hc-form" action="mailto:hello@hibanacollege.example" method="post" enctype="text/plain"><p class="hc-form__f"><label for="hc-f-name"><?php echo wp_kses_post( hibana_college_t( 'form_name' ) ); ?></label><input id="hc-f-name" name="name" type="text"/></p><p class="hc-form__f"><label for="hc-f-email"><?php echo wp_kses_post( hibana_college_t( 'form_email' ) ); ?></label><input id="hc-f-email" name="email" type="email"/></p><p class="hc-form__f"><label for="hc-f-start"><?php echo wp_kses_post( hibana_college_t( 'form_start' ) ); ?></label><select id="hc-f-start" name="start"><option><?php echo wp_kses_post( hibana_college_t( 'form_s1' ) ); ?></option><option><?php echo wp_kses_post( hibana_college_t( 'form_s2' ) ); ?></option><option><?php echo wp_kses_post( hibana_college_t( 'form_s3' ) ); ?></option><option><?php echo wp_kses_post( hibana_college_t( 'form_s4' ) ); ?></option></select></p><p class="hc-form__f"><label for="hc-f-message"><?php echo wp_kses_post( hibana_college_t( 'form_message' ) ); ?></label><textarea id="hc-f-message" name="message" rows="5"></textarea></p><p class="hc-form__f hc-form__go"><button type="submit"><?php echo wp_kses_post( hibana_college_t( 'form_send' ) ); ?></button></p></form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:paragraph {"className":"hc-arrow"} -->
<p class="hc-arrow"><a href="/"><?php echo wp_kses_post( hibana_college_t( 'contact_next' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
