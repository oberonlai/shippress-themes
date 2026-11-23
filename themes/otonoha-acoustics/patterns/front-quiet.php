<?php
/**
 * Title: Home: a quiet room, parallax photograph band
 * Slug: otonoha-acoustics/front-quiet
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Description: A full-width low-key photograph of a small-hall ceiling that moves slower than the page, with one light sentence and a caps caption on top.
 */
?>
<!-- wp:cover {"url":"<?php echo otonoha_acoustics_img( 'p14-hall-ceiling.webp' ); ?>","dimRatio":40,"overlayColor":"ink","minHeight":560,"minHeightUnit":"px","align":"full","anchor":"quiet","className":"oto-quiet sp-parallax","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div id="quiet" class="wp-block-cover alignfull oto-quiet sp-parallax" style="padding-top:0;padding-bottom:0;min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo otonoha_acoustics_a( 'alt_p14' ); ?>" src="<?php echo otonoha_acoustics_img( 'p14-hall-ceiling.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"oto-wrap oto-quiet__in","layout":{"type":"default"}} -->
<div class="wp-block-group oto-wrap oto-quiet__in"><!-- wp:paragraph {"className":"oto-quiet__s"} -->
<p class="oto-quiet__s"><?php echo esc_html( otonoha_acoustics_t( 'q_sentence' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-quiet__c"} -->
<p class="oto-quiet__c"><?php echo esc_html( otonoha_acoustics_t( 'q_caption' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
