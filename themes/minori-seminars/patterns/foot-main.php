<?php
/**
 * Title: Footer: details
 * Slug: minori-seminars/foot-main
 * Categories: minori-seminars
 * Keywords: seminar, management, footer
 * Viewport Width: 1440
 * Description: White footer with a hairline top rule: mark, address and hours, links to every page, the waitlist link, privacy and terms, and the two-tone rule with the copyright line.
 */
?>
<!-- wp:group {"align":"full","className":"ms-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ms-foot"><!-- wp:group {"className":"ms-wrap ms-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap ms-foot__grid"><!-- wp:group {"className":"ms-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ms-foot__col"><!-- wp:html -->
<a class="ms-logo ms-logo--foot" href="/"><svg class="ms-mark" viewBox="0 0 40 40" width="40" height="40" aria-hidden="true" focusable="false"><circle cx="20" cy="20" r="19.25" fill="none" stroke="currentColor" stroke-width="1"/><text x="20" y="26.5" text-anchor="middle" font-family="Libre Baskerville, Georgia, serif" font-size="18" fill="currentColor">M</text></svg><span class="ms-logo__name"><?php echo minori_seminars_e( 'brand_name' ); ?></span></a>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ms-foot__p"} -->
<p class="ms-foot__p"><?php echo minori_seminars_lines( 'ft_address' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-foot__p"} -->
<p class="ms-foot__p"><?php echo minori_seminars_lines( 'ft_hours' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ms-foot__col"><!-- wp:paragraph {"className":"ms-foot__links"} -->
<p class="ms-foot__links"><?php
$ms_slugs = array( '/seminars/', '/the-day/', '/fees/', '/facilitators/', '/stories/', '/in-house/', '/about/', '/enrol/' );
$ms_names = explode( '|', minori_seminars_t( 'ft_pages' ) );
$ms_out   = array();
foreach ( $ms_slugs as $ms_i => $ms_slug ) {
	$ms_out[] = '<a href="' . esc_url( $ms_slug ) . '">' . esc_html( isset( $ms_names[ $ms_i ] ) ? $ms_names[ $ms_i ] : '' ) . '</a>';
}
echo implode( '<br>', $ms_out ); // phpcs:ignore WordPress.Security.EscapeOutput
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ms-foot__col"><!-- wp:paragraph {"className":"ms-foot__links"} -->
<p class="ms-foot__links"><a href="/newsletter/"><?php echo minori_seminars_e( 'ft_waitlist' ); ?></a><br><a href="/privacy/"><?php echo minori_seminars_e( 'ft_privacy' ); ?></a><br><a href="/terms/"><?php echo minori_seminars_e( 'ft_terms' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-wrap ms-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap ms-foot__base"><!-- wp:paragraph {"className":"ms-label ms-label--small"} -->
<p class="ms-label ms-label--small"><?php echo minori_seminars_e( 'ft_copy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
