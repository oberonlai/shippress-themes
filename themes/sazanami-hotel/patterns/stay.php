<?php
/**
 * Title: Stay: opener, abutting photo pair, verse
 * Slug: sazanami-hotel/stay
 * Categories: sazanami-hotel
 * Viewport Width: 1440
 * Description: Chapter "stay": two 3:2 photographs stacked flush to the left edge with a 1 px hairline between them, and a narrow, widely tracked verse column with a grey note.
 */
?>
<!-- wp:group {"anchor":"stay","tagName":"section","className":"sz-ch sz-ch--mist","layout":{"type":"default"}} -->
<section id="stay" class="wp-block-group sz-ch sz-ch--mist"><!-- wp:group {"className":"sz-opener sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group sz-opener sp-reveal sp-reveal--up "><!-- wp:html -->
<span class="sz-wave-wrap" aria-hidden="true"><?php echo sazanami_hotel_icon( 'wave', 'sz-wave' ); ?></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sz-opener__w"} -->
<p class="sz-opener__w"><?php echo esc_html( sazanami_hotel_t( 'w_stay' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-pair-row","layout":{"type":"default"}} -->
<div class="wp-block-group sz-pair-row"><!-- wp:group {"className":"sz-pair","layout":{"type":"default"}} -->
<div class="wp-block-group sz-pair"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sz-pair__img sp-reveal"} -->
<figure class="wp-block-image size-full sz-pair__img sp-reveal"><img src="<?php echo sazanami_hotel_img( 'verse-mist-lake.webp' ); ?>" alt="<?php echo sazanami_hotel_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sz-pair__img sp-reveal"} -->
<figure class="wp-block-image size-full sz-pair__img sp-reveal"><img src="<?php echo sazanami_hotel_img( 'verse-timber-corridor.webp' ); ?>" alt="<?php echo sazanami_hotel_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-verse-col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-verse-col sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sz-verse"} -->
<p class="sz-verse"><?php echo sazanami_hotel_lines( 'stay_v1' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-verse"} -->
<p class="sz-verse"><?php echo sazanami_hotel_lines( 'stay_v2' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-verse"} -->
<p class="sz-verse"><?php echo sazanami_hotel_lines( 'stay_v3' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-note"} -->
<p class="sz-note"><?php echo esc_html( sazanami_hotel_t( 'stay_note' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

