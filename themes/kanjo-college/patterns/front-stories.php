<?php
/**
 * Title: Home: learner stories
 * Slug: kanjo-college/front-stories
 * Categories: kanjo-college
 * Keywords: stories, testimonials
 * Viewport Width: 1440
 * Description: Three portrait cards with name-and-route pills and a short story under each, separated by dotted dividers.
 */
$kc_stories = array(
	array( 'p10', 'Marta Ruiz', 'Evening route', 'Working full time as a bookkeeper, Marta chose our evening classes to move toward an assistant accountant role. The 36-hour syllabus and two mock papers gave her steady confidence in ledger reconciliation.', 'A woman in her thirties studying accounting notes at a kitchen table.' ),
	array( 'p11', 'Daniel Mensah', 'Day route', 'After years in retail management, Daniel joined the Monday and Wednesday day classes. Twelve-week terms let him learn management accounting while keeping his weekday responsibilities.', 'A man in his forties reading an accountancy workbook on a commuter train.' ),
	array( 'p12', 'Priya Nair', 'One paper per term', 'Returning to work after parental leave, Priya took one paper each term to refresh her skills. Classes of at most sixteen gave her the direct access to her lecturer that she needed.', 'A woman in her fifties working in a library carrel with a laptop and calculator.' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-stories","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull kc-sec kc-stories"><!-- wp:group {"className":"kc-in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-in"><!-- wp:group {"className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head"><!-- wp:paragraph {"className":"kc-chip sp-reveal sp-reveal--up"} -->
<p class="kc-chip sp-reveal sp-reveal--up">Learner stories</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up">Three ways in, in their words</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cards kc-cards--stories sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cards kc-cards--stories sp-stagger"><?php foreach ( $kc_stories as $i => $kc_s ) : ?>
<!-- wp:group {"className":"kc-card kc-card--<?php echo (int) ( $i + 1 ); ?> sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card kc-card--<?php echo (int) ( $i + 1 ); ?> sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-card__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__in"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__photo"} -->
<figure class="wp-block-image size-full kc-card__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $kc_s[0] . '.webp' ) ); ?>" alt="<?php echo esc_attr( $kc_s[4] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-pill","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pill"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $kc_s[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-pill__sub"} -->
<p class="kc-pill__sub"><?php echo esc_html( $kc_s[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-card__story"} -->
<p class="kc-card__story"><?php echo esc_html( $kc_s[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/stories/">Read all stories →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
