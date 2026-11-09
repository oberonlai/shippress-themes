<?php
/**
 * Title: Header: wordmark, centred menu, red quick-link rail
 * Slug: kyukyu-college/head-bar
 * Categories: kyukyu-college
 * Keywords: header, navigation
 * Viewport Width: 1440
 * Inserter: no
 * Description: 90 px header on the cool ground with a red square and wordmark at the left, one centred menu, a small Apply pill on narrow screens and the fixed red rail (Apply, Fees, Visit, Contact) at the right edge on wide screens.
 */
$e = 'kyukyu_college_e';
$i = static function ( $n ) {
	$p = array(
		'apply'   => '<path d="M4 20l1-5L16 4l4 4L9 19z"/><path d="M13 7l4 4"/>',
		'fees'    => '<path d="M5 4h11a3 3 0 0 1 3 3v13H8a3 3 0 0 1-3-3z"/><path d="M5 17a3 3 0 0 1 3-3h11"/>',
		'visit'   => '<path d="M12 21s7-6.2 7-11.5A7 7 0 0 0 5 9.5C5 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.4"/>',
		'contact' => '<rect x="3" y="5" width="18" height="14" rx="1"/><path d="M3 7l9 7 9-7"/>',
	);
	return '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $p[ $n ] . '</svg>';
};
?>
<!-- wp:group {"align":"full","className":"kk-bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kk-bar"><!-- wp:group {"className":"kk-brand","layout":{"type":"default"}} -->
<div class="wp-block-group kk-brand"><!-- wp:html -->
<a class="kk-brand__mark" href="/" aria-hidden="true" tabindex="-1"></a>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"kk-brand__title"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"kk-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:buttons {"className":"kk-bar__apply"} -->
<div class="wp-block-buttons kk-bar__apply"><!-- wp:button {"className":"kk-apply"} -->
<div class="wp-block-button kk-apply"><a class="wp-block-button__link wp-element-button" href="/#entry"><?php echo $e( 'apply' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:html -->
<nav class="kk-rail" aria-label="Quick links"><a href="/#entry"><?php echo $i( 'apply' ); ?><span><?php echo $e( 'rail_apply' ); ?></span></a><a href="/#fees"><?php echo $i( 'fees' ); ?><span><?php echo $e( 'rail_fees' ); ?></span></a><a href="/#visit"><?php echo $i( 'visit' ); ?><span><?php echo $e( 'rail_visit' ); ?></span></a><a href="/contact/"><?php echo $i( 'contact' ); ?><span><?php echo $e( 'rail_contact' ); ?></span></a></nav><a class="kk-top" href="#top" aria-label="<?php echo kyukyu_college_a( 'top' ); ?>"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5M6 11l6-6 6 6"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group -->
