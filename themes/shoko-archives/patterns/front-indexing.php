<?php
/**
 * Title: Home: how a box is indexed
 * Slug: shoko-archives/front-indexing
 * Categories: shoko-archives
 * Viewport Width: 1440
 * Description: A ruled heading with a lead paragraph and three photo cards, each with a pale tab fused to the photo corner (Collect, Index, Shelve).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"indexing","className":"sa-sec","layout":{"type":"default"}} -->
<section id="indexing" class="wp-block-group alignfull sa-sec"><!-- wp:group {"className":"sa-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap"><!-- wp:heading {"className":"sa-h2"} -->
<h2 class="wp-block-heading sa-h2"><?php echo esc_html( shoko_archives_t( 'ix_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-intro sa-intro--wide"} -->
<p class="sa-intro sa-intro--wide"><?php echo esc_html( shoko_archives_t( 'ix_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sa-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sa-cards sp-stagger"><!-- wp:group {"className":"sa-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"sa-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card__media"><!-- wp:paragraph {"className":"sa-tab"} -->
<p class="sa-tab"><?php echo esc_html( shoko_archives_t( 'ix1_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sa-card__img"} -->
<figure class="wp-block-image size-full sa-card__img"><img src="<?php echo shoko_archives_img( 'card-collect' ); ?>" alt="<?php echo esc_attr( shoko_archives_t( 'alt_card-collect' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"sa-card__t"} -->
<h3 class="wp-block-heading sa-card__t"><?php echo esc_html( shoko_archives_t( 'ix1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-card__p"} -->
<p class="sa-card__p"><?php echo esc_html( shoko_archives_t( 'ix1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-more"} -->
<p class="sa-more"><a href="/indexing/"><?php echo esc_html( shoko_archives_t( 'read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"sa-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card__media"><!-- wp:paragraph {"className":"sa-tab"} -->
<p class="sa-tab"><?php echo esc_html( shoko_archives_t( 'ix2_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sa-card__img"} -->
<figure class="wp-block-image size-full sa-card__img"><img src="<?php echo shoko_archives_img( 'card-index' ); ?>" alt="<?php echo esc_attr( shoko_archives_t( 'alt_card-index' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"sa-card__t"} -->
<h3 class="wp-block-heading sa-card__t"><?php echo esc_html( shoko_archives_t( 'ix2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-card__p"} -->
<p class="sa-card__p"><?php echo esc_html( shoko_archives_t( 'ix2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-more"} -->
<p class="sa-more"><a href="/indexing/"><?php echo esc_html( shoko_archives_t( 'read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"sa-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card__media"><!-- wp:paragraph {"className":"sa-tab"} -->
<p class="sa-tab"><?php echo esc_html( shoko_archives_t( 'ix3_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sa-card__img"} -->
<figure class="wp-block-image size-full sa-card__img"><img src="<?php echo shoko_archives_img( 'card-shelve' ); ?>" alt="<?php echo esc_attr( shoko_archives_t( 'alt_card-shelve' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"sa-card__t"} -->
<h3 class="wp-block-heading sa-card__t"><?php echo esc_html( shoko_archives_t( 'ix3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-card__p"} -->
<p class="sa-card__p"><?php echo esc_html( shoko_archives_t( 'ix3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-more"} -->
<p class="sa-more"><a href="/indexing/"><?php echo esc_html( shoko_archives_t( 'read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
