<?php
/**
 * Title: Home: intro with media
 * Slug: kataribe-partners/front-brief
 * Categories: kataribe-partners
 * Keywords: public relations, agency
 * Viewport Width: 1440
 * Description: Pale intro band: statement and paragraph at the left 5/12, a 16:9 photograph with a round white button at the right 7/12.
 */
$e = 'kataribe_partners_e';
$a = 'kataribe_partners_a';
$i = 'kataribe_partners_img';
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"brief","className":"kp-sec kp-brief","layout":{"type":"default"}} -->
<section id="brief" class="wp-block-group alignfull kp-sec kp-brief"><!-- wp:group {"className":"kp-split kp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kp-split kp-wrap"><!-- wp:group {"className":"kp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group kp-split__text"><!-- wp:paragraph {"className":"kp-lead"} -->
<p class="kp-lead"><?php echo kataribe_partners_lines( 'brief_lead' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kataribe_partners_t( 'brief_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-foot"} -->
<p class="kp-foot"><?php echo esc_html( kataribe_partners_t( 'brief_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kp-media sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kp-media__img"} -->
<figure class="wp-block-image size-full kp-media__img"><img src="<?php echo $i( 'h02-wall-board.webp' ); ?>" alt="<?php echo esc_attr( kataribe_partners_t( 'alt_brief' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kp-play"} -->
<p class="kp-play"><a href="#week" aria-label="<?php echo esc_attr( kataribe_partners_t( 'play_label' ) ); ?>"> </a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
