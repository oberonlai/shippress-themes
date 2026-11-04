<?php
/**
 * Title: Home: how a term is paced
 * Slug: kanjo-college/front-pace
 * Categories: kanjo-college
 * Keywords: timeline, term, weeks
 * Viewport Width: 1440
 * Description: A horizontal row of twelve week chips grouped under the five route labels, three counted figures and a landscape photograph.
 */
$kc_chips = static function ( $from, $to, $mark = array() ) {
	$out = '';
	for ( $w = $from; $w <= $to; $w++ ) {
		$out .= '<b' . ( in_array( $w, $mark, true ) ? ' class="is-key"' : '' ) . '>' . $w . '</b>';
	}
	return $out;
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-pace","layout":{"type":"default"}} -->
<section id="pace" class="wp-block-group alignfull kc-sec kc-pace"><!-- wp:group {"className":"kc-in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-in"><!-- wp:group {"className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head"><!-- wp:paragraph {"className":"kc-chip sp-reveal sp-reveal--up"} -->
<p class="kc-chip sp-reveal sp-reveal--up">The twelve-week term</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up">How a term is paced</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kc-weeks sp-reveal sp-reveal--up" role="group" aria-label="The twelve weeks of a term">
	<div class="kc-weeks__scroll"><div class="kc-weeks__row">
		<div class="kc-wk kc-wk--node"><span class="kc-wk__br">Enrol</span><div class="kc-wk__chips"><i></i></div></div>
		<div class="kc-wk"><span class="kc-wk__br">Weeks 1–4</span><div class="kc-wk__chips"><?php echo $kc_chips( 1, 4 ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div></div>
		<div class="kc-wk"><span class="kc-wk__br">Mock paper</span><div class="kc-wk__chips"><?php echo $kc_chips( 5, 9, array( 6, 9 ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div></div>
		<div class="kc-wk"><span class="kc-wk__br">Exam week</span><div class="kc-wk__chips"><?php echo $kc_chips( 10, 12, array( 12 ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div></div>
		<div class="kc-wk kc-wk--node"><span class="kc-wk__br">Results</span><div class="kc-wk__chips"><i></i></div></div>
	</div></div>
</div>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-pace__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pace__grid"><!-- wp:group {"className":"kc-pace__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pace__text"><!-- wp:group {"className":"kc-counts","layout":{"type":"default"}} -->
<div class="wp-block-group kc-counts"><!-- wp:paragraph {"className":"kc-count sp-reveal sp-count"} -->
<p class="kc-count sp-reveal sp-count">12 <small>weeks</small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-count sp-reveal sp-count"} -->
<p class="kc-count sp-reveal sp-count">2 <small>evenings a week</small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-count sp-reveal sp-count"} -->
<p class="kc-count sp-reveal sp-count">2 <small>mock papers</small></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Every term follows the same rhythm, so you always know where you are. Teaching is 36 class hours per paper, as day classes on Mondays and Wednesdays (09:30–15:30) or evening classes on Tuesdays and Thursdays (18:30–21:00).</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Every cohort sits two invigilated mock papers: a practice paper in week 6 and a full mock in week 9, each marked and returned before exam week, which is week 12. Results follow six weeks later.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/term/">How a term runs →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-pace__img"} -->
<figure class="wp-block-image size-full kc-pace__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p07.webp' ) ); ?>" alt="Adult students seated at long classroom tables facing a whiteboard with a ruled grid."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
