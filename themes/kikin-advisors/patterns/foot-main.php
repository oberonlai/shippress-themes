<?php
/**
 * Title: Footer: details
 * Slug: kikin-advisors/foot-main
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: White footer with a hairline top rule: mark, address and hours, links to every page, the newsletter link, privacy and terms.
 */
?>
<!-- wp:group {"align":"full","className":"kk-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kk-foot"><!-- wp:group {"align":"wide","className":"kk-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kk-foot__grid"><!-- wp:group {"className":"kk-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kk-foot__col"><!-- wp:html -->
<a class="kk-logo kk-logo--foot" href="/"><svg class="kk-mark" viewBox="0 0 88 88" width="88" height="88" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><circle cx="44" cy="44" r="42"/><path d="M33 26v28M33 41l16-15M37 38l14 16" stroke-width="3"/><path d="M26 64q18 8 36 0" stroke-width="1.2"/></svg><span class="kk-logo__text"><span class="kk-logo__name">Kikin Advisors</span><span class="kk-logo__sub"><?php echo esc_html( kikin_advisors_t( 'brand_sub' ) ); ?></span></span></a>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kk-foot__p"} -->
<p class="kk-foot__p"><?php echo kikin_advisors_lines( 'ft_address' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kk-foot__p"} -->
<p class="kk-foot__p"><?php echo kikin_advisors_lines( 'ft_hours' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kk-foot__col"><!-- wp:paragraph {"className":"kk-foot__links"} -->
<p class="kk-foot__links"><?php
$kk_slugs = array( '/briefing/', '/who-its-for/', '/fees/', '/basics/', '/member-sessions/', '/advisers/', '/stories/', '/about/', '/request/', '/notes/' );
$kk_names = explode( '|', kikin_advisors_t( 'ft_pages' ) );
$kk_out   = array();
foreach ( $kk_slugs as $i => $kk_slug ) {
	$kk_out[] = '<a href="' . esc_url( $kk_slug ) . '">' . esc_html( $kk_names[ $i ] ) . '</a>';
}
echo implode( '<br>', $kk_out );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kk-foot__col"><!-- wp:paragraph {"className":"kk-foot__links"} -->
<p class="kk-foot__links"><a href="/newsletter/"><?php echo esc_html( kikin_advisors_t( 'ft_news' ) ); ?></a><br><a href="/privacy/"><?php echo esc_html( kikin_advisors_t( 'ft_privacy' ) ); ?></a><br><a href="/terms/"><?php echo esc_html( kikin_advisors_t( 'ft_terms' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kk-foot__p"} -->
<p class="kk-foot__p"><?php echo esc_html( kikin_advisors_t( 'ft_phone' ) ); ?><br><a href="mailto:briefings@kikin-advisors.example"><?php echo esc_html( kikin_advisors_t( 'ft_email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kk-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kk-foot__base"><!-- wp:paragraph {"className":"kk-foot__legal"} -->
<p class="kk-foot__legal"><?php echo esc_html( kikin_advisors_t( 'ft_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
