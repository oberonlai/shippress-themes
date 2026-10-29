<?php
/**
 * Title: Home: how a first conversation is arranged
 * Slug: nodoka-counselling/front-arrange
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Ruled opener, then three columns separated by vertical hairlines (Before, During, After), a short note and a notebook-and-tea photograph.
 */
?>
<!-- wp:group {"className":"nc-sec nc-arr","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"arrange"} -->
<section id="arrange" class="wp-block-group alignfull nc-sec nc-arr"><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-open","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open"><!-- wp:group {"className":"nc-open__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"nc-open__title"} -->
<h2 class="wp-block-heading nc-open__title"><?php echo esc_html( nodoka_counselling_t( 'arr_title' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-open__sub"} -->
<p class="nc-open__sub"><?php echo esc_html( nodoka_counselling_t( 'arr_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"nc-open__lead sp-reveal sp-reveal--up"} -->
<p class="nc-open__lead sp-reveal sp-reveal--up"><?php echo esc_html( nodoka_counselling_t( 'arr_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-cols sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nc-cols sp-stagger"><!-- wp:group {"className":"nc-cols__c sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-cols__c sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"nc-cols__l"} -->
<p class="nc-cols__l"><?php echo esc_html( nodoka_counselling_t( 'arr_b_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"nc-cols__h"} -->
<h3 class="wp-block-heading nc-cols__h"><?php echo esc_html( nodoka_counselling_t( 'arr_b_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-cols__p"} -->
<p class="nc-cols__p"><?php echo esc_html( nodoka_counselling_t( 'arr_b_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-cols__c sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-cols__c sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"nc-cols__l"} -->
<p class="nc-cols__l"><?php echo esc_html( nodoka_counselling_t( 'arr_d_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"nc-cols__h"} -->
<h3 class="wp-block-heading nc-cols__h"><?php echo esc_html( nodoka_counselling_t( 'arr_d_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-cols__p"} -->
<p class="nc-cols__p"><?php echo esc_html( nodoka_counselling_t( 'arr_d_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-cols__c sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-cols__c sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"nc-cols__l"} -->
<p class="nc-cols__l"><?php echo esc_html( nodoka_counselling_t( 'arr_a_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"nc-cols__h"} -->
<h3 class="wp-block-heading nc-cols__h"><?php echo esc_html( nodoka_counselling_t( 'arr_a_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-cols__p"} -->
<p class="nc-cols__p"><?php echo esc_html( nodoka_counselling_t( 'arr_a_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-arr__foot","layout":{"type":"default"}} -->
<div class="wp-block-group nc-arr__foot"><!-- wp:group {"className":"nc-arr__note sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-arr__note sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"nc-arr__q"} -->
<p class="nc-arr__q"><?php echo nodoka_counselling_lines( 'arr_note' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-link"} -->
<p class="nc-link"><a href="<?php echo esc_url( home_url( '/first-conversation/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'arr_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-arr__photo sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full nc-arr__photo sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-notebook-tea.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->