<?php
/**
 * Title: Page: Page: Questions owners ask
 * Slug: ashiato-hotel/page-faq
 * Categories: ashiato-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: FAQ: all ten questions as accordions in four groups, with anchors.
 */
?>
<!-- wp:group {"className":"ah-inner","layout":{"type":"default"}} -->
<div class="wp-block-group ah-inner"><!-- wp:group {"className":"ah-window ah-window--inner sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ah-window ah-window--inner sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ah-inner__img"} -->
<figure class="wp-block-image size-full ah-inner__img"><img src="<?php echo ashiato_hotel_img( 'demo/car-arrival.webp' ); ?>" alt="<?php echo ashiato_hotel_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ah-scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ah-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ah-hero__copy"><!-- wp:heading {"level":1,"className":"ah-hero__h1 ah-hero__h1--inner"} -->
<h1 class="wp-block-heading ah-hero__h1 ah-hero__h1--inner"><?php echo esc_html( ashiato_hotel_t( 'p_faq_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ah-hero__sub"} -->
<p class="ah-hero__sub"><?php echo esc_html( ashiato_hotel_t( 'p_faq_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ah-paws ah-paws--inner" aria-hidden="true"><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ah-inner__intro","layout":{"type":"default"}} -->
<div class="wp-block-group ah-inner__intro"><!-- wp:paragraph {"className":"ah-lede ah-lede--inner"} -->
<p class="ah-lede ah-lede--inner"><?php echo esc_html( ashiato_hotel_t( 'p_faq_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-faqp","layout":{"type":"default"}} -->
<div class="wp-block-group ah-faqp"><!-- wp:group {"className":"ah-faqp__main sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-faqp__main sp-reveal sp-reveal--up"><!-- wp:group {"className":"ah-qgroup","layout":{"type":"default"}} -->
<div class="wp-block-group ah-qgroup"><!-- wp:heading {"level":2,"className":"ah-label ah-qgroup__h"} -->
<h2 class="wp-block-heading ah-label ah-qgroup__h"><?php echo esc_html( ashiato_hotel_t( 'faq_g1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:details {"anchor":"size","className":"ah-qa","showContent":true} -->
<details id="size" class="wp-block-details ah-qa" open><summary><?php echo esc_html( ashiato_hotel_t( 's_faq_1_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_faq_1_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"anchor":"two-dogs","className":"ah-qa"} -->
<details id="two-dogs" class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 's_faq_2_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_faq_2_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"anchor":"alone","className":"ah-qa"} -->
<details id="alone" class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 's_faq_3_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_faq_3_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"anchor":"night","className":"ah-qa"} -->
<details id="night" class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 's_faq_8_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_faq_8_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-qgroup","layout":{"type":"default"}} -->
<div class="wp-block-group ah-qgroup"><!-- wp:heading {"level":2,"className":"ah-label ah-qgroup__h"} -->
<h2 class="wp-block-heading ah-label ah-qgroup__h"><?php echo esc_html( ashiato_hotel_t( 'faq_g2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:details {"anchor":"breakfast","className":"ah-qa"} -->
<details id="breakfast" class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 's_faq_6_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_faq_6_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"anchor":"fee","className":"ah-qa"} -->
<details id="fee" class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 's_faq_7_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_faq_7_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-qgroup","layout":{"type":"default"}} -->
<div class="wp-block-group ah-qgroup"><!-- wp:heading {"level":2,"className":"ah-label ah-qgroup__h"} -->
<h2 class="wp-block-heading ah-label ah-qgroup__h"><?php echo esc_html( ashiato_hotel_t( 'faq_g3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:details {"anchor":"dog-run","className":"ah-qa"} -->
<details id="dog-run" class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 's_faq_4_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_faq_4_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-qgroup","layout":{"type":"default"}} -->
<div class="wp-block-group ah-qgroup"><!-- wp:heading {"level":2,"className":"ah-label ah-qgroup__h"} -->
<h2 class="wp-block-heading ah-label ah-qgroup__h"><?php echo esc_html( ashiato_hotel_t( 'faq_g4' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:details {"anchor":"bring","className":"ah-qa"} -->
<details id="bring" class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 's_faq_5_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_faq_5_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"anchor":"vet","className":"ah-qa"} -->
<details id="vet" class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 's_faq_9_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_faq_9_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"anchor":"book","className":"ah-qa"} -->
<details id="book" class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 's_faq_10_h' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_faq_10_b' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-faqp__side sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-faqp__side sp-reveal sp-reveal--up"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"ah-faq__img"} -->
<figure class="wp-block-image size-full ah-faq__img"><img src="<?php echo ashiato_hotel_img( 'paw-wash.webp' ); ?>" alt="<?php echo ashiato_hotel_a( 'alt_p12' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"ah-pill-wrap"} -->
<div class="wp-block-buttons ah-pill-wrap"><!-- wp:button {"className":"ah-pill"} -->
<div class="wp-block-button ah-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'book_room_arrow' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
