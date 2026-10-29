<?php
/**
 * Title: Home: who sits with you
 * Slug: nodoka-counselling/front-who
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Ruled opener, a rounded 20px photo pair with the small portrait overlapping the large one, two short bios and a plain list of the rest of the team.
 */
?>
<!-- wp:group {"className":"nc-sec nc-who","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"people"} -->
<section id="people" class="wp-block-group alignfull nc-sec nc-who"><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-open","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open"><!-- wp:group {"className":"nc-open__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"nc-open__title"} -->
<h2 class="wp-block-heading nc-open__title"><?php echo esc_html( nodoka_counselling_t( 'who_title' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-open__sub"} -->
<p class="nc-open__sub"><?php echo esc_html( nodoka_counselling_t( 'who_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"nc-open__lead sp-reveal sp-reveal--up"} -->
<p class="nc-open__lead sp-reveal sp-reveal--up"><?php echo esc_html( nodoka_counselling_t( 'who_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-who__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nc-who__grid"><!-- wp:group {"className":"nc-pair sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-pair sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-pair__a"} -->
<figure class="wp-block-image size-full nc-pair__a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-practitioner-mira.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p06' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-pair__b"} -->
<figure class="wp-block-image size-full nc-pair__b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-practitioner-tomas.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p07' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-who__side sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nc-who__side sp-stagger"><!-- wp:group {"className":"nc-who__p sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-who__p sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"nc-who__name"} -->
<h3 class="wp-block-heading nc-who__name"><?php echo esc_html( nodoka_counselling_t( 'who_mira' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-who__role"} -->
<p class="nc-who__role"><?php echo esc_html( nodoka_counselling_t( 'who_mira_r' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-who__bio"} -->
<p class="nc-who__bio"><?php echo esc_html( nodoka_counselling_t( 'who_mira_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-who__p sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-who__p sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"nc-who__name"} -->
<h3 class="wp-block-heading nc-who__name"><?php echo esc_html( nodoka_counselling_t( 'who_tomas' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-who__role"} -->
<p class="nc-who__role"><?php echo esc_html( nodoka_counselling_t( 'who_tomas_r' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-who__bio"} -->
<p class="nc-who__bio"><?php echo esc_html( nodoka_counselling_t( 'who_tomas_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-who__rest sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-who__rest sp-reveal sp-reveal--up"><!-- wp:html -->
<ul class="nc-who__others"><li><span class="nc-who__on"><?php echo esc_html( nodoka_counselling_t( 'who_o1' ) ); ?></span><span class="nc-who__or"><?php echo esc_html( nodoka_counselling_t( 'who_o1r' ) ); ?></span></li><li><span class="nc-who__on"><?php echo esc_html( nodoka_counselling_t( 'who_o2' ) ); ?></span><span class="nc-who__or"><?php echo esc_html( nodoka_counselling_t( 'who_o2r' ) ); ?></span></li><li><span class="nc-who__on"><?php echo esc_html( nodoka_counselling_t( 'who_o3' ) ); ?></span><span class="nc-who__or"><?php echo esc_html( nodoka_counselling_t( 'who_o3r' ) ); ?></span></li><li><span class="nc-who__on"><?php echo esc_html( nodoka_counselling_t( 'who_o4' ) ); ?></span><span class="nc-who__or"><?php echo esc_html( nodoka_counselling_t( 'who_o4r' ) ); ?></span></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"nc-link"} -->
<p class="nc-link"><a href="<?php echo esc_url( home_url( '/practitioners/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'who_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->