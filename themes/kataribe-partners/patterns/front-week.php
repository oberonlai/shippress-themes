<?php
/**
 * Title: Home: five-day coverage strip
 * Slug: kataribe-partners/front-week
 * Categories: kataribe-partners
 * Keywords: public relations, agency
 * Viewport Width: 1440
 * Description: Heading and paragraph, then a horizontal strip of five day columns under a hairline with day pills and 4:3 photographs.
 */
$e = 'kataribe_partners_e';
$a = 'kataribe_partners_a';
$i = 'kataribe_partners_img';
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"week","className":"kp-sec kp-week","layout":{"type":"default"}} -->
<section id="week" class="wp-block-group alignfull kp-sec kp-week"><!-- wp:group {"className":"kp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kp-wrap"><!-- wp:group {"className":"kp-week__head","layout":{"type":"default"}} -->
<div class="wp-block-group kp-week__head"><!-- wp:heading {"className":"kp-h2"} -->
<h2 class="wp-block-heading kp-h2"><?php echo esc_html( kataribe_partners_t( 'week_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-subline"} -->
<p class="kp-subline"><?php echo esc_html( kataribe_partners_t( 'week_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kataribe_partners_t( 'week_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-strip sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kp-strip sp-stagger"><?php
$imgs = array( 1 => 'h04-monday-list.webp', 2 => 'h05-tuesday-draft.webp', 3 => 'h06-wednesday-call.webp', 4 => 'h07-thursday-interview.webp', 5 => 'h08-friday-debrief.webp' );
for ( $n = 1; $n <= 5; $n++ ) : ?><!-- wp:group {"className":"kp-day sp-reveal sp-reveal--up<?php echo 3 === $n ? ' is-active' : ''; ?>","layout":{"type":"default"}} -->
<div class="wp-block-group kp-day sp-reveal sp-reveal--up<?php echo 3 === $n ? ' is-active' : ''; ?>"><!-- wp:paragraph {"className":"kp-day__pill"} -->
<p class="kp-day__pill"><?php echo $e( 'day_' . $n ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kp-day__img"} -->
<figure class="wp-block-image size-full kp-day__img"><img src="<?php echo $i( $imgs[ $n ] ); ?>" alt="<?php echo $a( 'alt_day_' . $n ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"kp-day__title"} -->
<h3 class="wp-block-heading kp-day__title"><?php echo $e( 'day_' . $n . '_t' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-day__text"} -->
<p class="kp-day__text"><?php echo $e( 'day_' . $n . '_p' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endfor; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
