<?php
/**
 * Title: Home: from the lobby
 * Slug: zaseki-panel/front-pilots
 * Categories: zaseki-panel
 * Viewport Width: 1440
 * Description: Two columns with a hairline on top: pilot notes with thumbnails and dated workshop notes.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"pilots","className":"zp-sec zp-pilots","layout":{"type":"default"}} -->
<section id="pilots" class="wp-block-group zp-sec zp-pilots">
<!-- wp:group {"className":"zp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap">
<!-- wp:group {"className":"zp-pilots__cols","layout":{"type":"default"}} -->
<div class="wp-block-group zp-pilots__cols">
<!-- wp:group {"className":"zp-col","layout":{"type":"default"}} -->
<div class="wp-block-group zp-col">
<!-- wp:group {"className":"zp-col__head","layout":{"type":"default"}} -->
<div class="wp-block-group zp-col__head">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'pilots_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-arrow zp-arrow--r"} -->
<p class="zp-arrow zp-arrow--r"><a href="/pilots/"><?php echo esc_html( zaseki_panel_t( 'all' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group zp-list sp-stagger">
<!-- wp:group {"className":"zp-note-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-note-row sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-note-row__img","layout":{"type":"default"}} -->
<div class="wp-block-group zp-note-row__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-photo"} -->
<figure class="wp-block-image size-full zp-photo"><img src="<?php echo zaseki_panel_img( 'pilot-quayside.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_l1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-note-row__t","layout":{"type":"default"}} -->
<div class="wp-block-group zp-note-row__t">
<!-- wp:heading {"level":3,"className":"zp-note-row__h"} -->
<h3 class="wp-block-heading zp-note-row__h"><a href="/pilots/#quayside"><?php echo esc_html( zaseki_panel_t( 'pl1_n' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-note-row__q"} -->
<p class="zp-note-row__q"><?php echo esc_html( zaseki_panel_t( 'pl1_q' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-note-row__c"} -->
<p class="zp-note-row__c"><?php echo esc_html( zaseki_panel_t( 'pl1_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-note-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-note-row sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-note-row__img","layout":{"type":"default"}} -->
<div class="wp-block-group zp-note-row__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-photo"} -->
<figure class="wp-block-image size-full zp-photo"><img src="<?php echo zaseki_panel_img( 'pilot-lindenhof.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_l2' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-note-row__t","layout":{"type":"default"}} -->
<div class="wp-block-group zp-note-row__t">
<!-- wp:heading {"level":3,"className":"zp-note-row__h"} -->
<h3 class="wp-block-heading zp-note-row__h"><a href="/pilots/#lindenhof"><?php echo esc_html( zaseki_panel_t( 'pl2_n' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-note-row__q"} -->
<p class="zp-note-row__q"><?php echo esc_html( zaseki_panel_t( 'pl2_q' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-note-row__c"} -->
<p class="zp-note-row__c"><?php echo esc_html( zaseki_panel_t( 'pl2_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-note-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-note-row sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-note-row__img","layout":{"type":"default"}} -->
<div class="wp-block-group zp-note-row__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-photo"} -->
<figure class="wp-block-image size-full zp-photo"><img src="<?php echo zaseki_panel_img( 'pilot-oriel.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_l3' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-note-row__t","layout":{"type":"default"}} -->
<div class="wp-block-group zp-note-row__t">
<!-- wp:heading {"level":3,"className":"zp-note-row__h"} -->
<h3 class="wp-block-heading zp-note-row__h"><a href="/pilots/#oriel"><?php echo esc_html( zaseki_panel_t( 'pl3_n' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-note-row__q"} -->
<p class="zp-note-row__q"><?php echo esc_html( zaseki_panel_t( 'pl3_q' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-note-row__c"} -->
<p class="zp-note-row__c"><?php echo esc_html( zaseki_panel_t( 'pl3_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-col","layout":{"type":"default"}} -->
<div class="wp-block-group zp-col">
<!-- wp:group {"className":"zp-col__head","layout":{"type":"default"}} -->
<div class="wp-block-group zp-col__head">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'news_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-arrow zp-arrow--r"} -->
<p class="zp-arrow zp-arrow--r"><a href="/journal/"><?php echo esc_html( zaseki_panel_t( 'all2' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group zp-list sp-stagger">
<!-- wp:group {"className":"zp-news-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-news-row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"zp-news-row__d"} -->
<p class="zp-news-row__d"><?php echo esc_html( zaseki_panel_t( 'n1_d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-news-row__t"} -->
<p class="zp-news-row__t"><a href="/what-we-learned-in-the-quayside-lobby/"><?php echo esc_html( zaseki_panel_t( 'n1_t' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-news-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-news-row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"zp-news-row__d"} -->
<p class="zp-news-row__d"><?php echo esc_html( zaseki_panel_t( 'n2_d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-news-row__t"} -->
<p class="zp-news-row__t"><a href="/why-a-held-desk-lets-go-after-fifteen-minutes/"><?php echo esc_html( zaseki_panel_t( 'n2_t' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-news-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-news-row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"zp-news-row__d"} -->
<p class="zp-news-row__d"><?php echo esc_html( zaseki_panel_t( 'n3_d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-news-row__t"} -->
<p class="zp-news-row__t"><a href="/pricing/"><?php echo esc_html( zaseki_panel_t( 'n3_t' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
