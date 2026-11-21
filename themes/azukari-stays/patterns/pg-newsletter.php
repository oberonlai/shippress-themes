<?php
/**
 * Title: Page: owner waiting list
 * Slug: azukari-stays/pg-newsletter
 * Categories: azukari-stays
 * Keywords: holiday let, property management, owners
 * Viewport Width: 1440
 * Description: Inner page: why there is a waiting list and the signup form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-ihero az-ihero--s0"} -->
<section class="wp-block-group alignfull az-ihero az-ihero--s0"><!-- wp:group {"className":"az-ihero__panel"} -->
<div class="wp-block-group az-ihero__panel"><!-- wp:paragraph {"className":"az-lab az-lab--dark"} -->
<p class="az-lab az-lab--dark"><?php echo esc_html( azukari_stays_t( 'ip_news_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"az-ihero__h1"} -->
<h1 class="wp-block-heading az-ihero__h1"><?php echo esc_html( azukari_stays_t( 'ip_news_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-ihero__sub"} -->
<p class="az-ihero__sub"><?php echo esc_html( azukari_stays_t( 'ip_news_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-ihero__photo"} -->
<div class="wp-block-group az-ihero__photo"><!-- wp:group {"className":"az-ihero__par sp-parallax"} -->
<div class="wp-block-group az-ihero__par sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( azukari_stays_img( 'p14-home-lake.webp' ) ); ?>" alt="<?php echo esc_attr( azukari_stays_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
<!-- wp:group {"className":"az-iintro sp-reveal sp-reveal--up"} -->
<div class="wp-block-group az-iintro sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"az-h2 az-iintro__t"} -->
<p class="az-h2 az-iintro__t"><?php echo esc_html( azukari_stays_t( 'ip_news_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"az-isec az-isec--form"} -->
<div class="wp-block-group az-isec az-isec--form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'owners@azukaristays.example', 'label' => azukari_stays_t( 'forms_email' ), 'submit' => azukari_stays_t( 'forms_subscribe' ), 'notice' => azukari_stays_t( 'forms_mail_notice' ), 'subject' => azukari_stays_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->
<!-- wp:group {"className":"az-irows"} -->
<div class="wp-block-group az-irows"><!-- wp:group {"className":"az-isec sp-reveal sp-reveal--up"} -->
<div class="wp-block-group az-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"az-h3 az-isec__h"} -->
<h2 class="wp-block-heading az-h3 az-isec__h"><?php echo esc_html( azukari_stays_t( 'ip_news_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-body az-isec__p"} -->
<p class="az-body az-isec__p"><?php echo esc_html( azukari_stays_t( 'ip_news_s1_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-isec sp-reveal sp-reveal--up"} -->
<div class="wp-block-group az-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"az-h3 az-isec__h"} -->
<h2 class="wp-block-heading az-h3 az-isec__h"><?php echo esc_html( azukari_stays_t( 'ip_news_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-body az-isec__p"} -->
<p class="az-body az-isec__p"><?php echo esc_html( azukari_stays_t( 'ip_news_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
