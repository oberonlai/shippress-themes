<?php
/**
 * Title: Table: the breakfast
 * Slug: seseragi-house/table
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: The breakfast table: heading, a wide photograph, one paragraph and the slow strip of four small tray photographs that starts at the text column and runs off the right edge.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"breakfast","className":"sese-sec sese-table","layout":{"type":"default"}} -->
<section id="breakfast" class="wp-block-group sese-sec sese-table">
<!-- wp:group {"className":"sese-col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'table_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-ph sese-table__img"} -->
<figure class="wp-block-image size-full sese-ph sese-table__img"><img src="<?php echo esc_url( seseragi_house_img( 'breakfast-table-overhead.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p06' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'table_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-link"} -->
<p class="sese-link"><a href="/breakfast/"><?php echo esc_html( seseragi_house_t( 'table_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-strip sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group sese-strip sp-marquee">
<!-- wp:group {"className":"sese-strip__set","layout":{"type":"default"}} -->
<div class="wp-block-group sese-strip__set">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-strip__f"} -->
<figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-bread-board.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-strip__f"} -->
<figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-jam-jars.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-strip__f"} -->
<figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-coffee-sill.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-strip__f"} -->
<figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-eggs-yoghurt.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="sese-strip__set" aria-hidden="true"><figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-bread-board.webp' ) ); ?>" alt=""/></figure><figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-jam-jars.webp' ) ); ?>" alt=""/></figure><figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-coffee-sill.webp' ) ); ?>" alt=""/></figure><figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-eggs-yoghurt.webp' ) ); ?>" alt=""/></figure></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
