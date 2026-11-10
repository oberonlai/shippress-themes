<?php
/**
 * Title: Footer: address, link columns, legal line
 * Slug: kantei-valuers/foot-main
 * Categories: kantei-valuers
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: White footer with the mark, address, hours and mail at the left, four link columns with accent dots at the right, a hairline and the legal line.
 */
$e = 'kantei_valuers_e';
$cols = array(
	'foot_c1' => array( array( '/about/', 'f_about' ) ),
	'foot_c2' => array( array( '/instructions/', 'f_instr' ), array( '/site-hour/', 'f_hour' ), array( '/report/', 'f_report' ), array( '/fees/', 'f_fees' ) ),
	'foot_c3' => array( array( '/news/', 'f_news' ), array( '/rent-notes/', 'f_notes' ) ),
	'foot_c4' => array( array( '/contact/', 'f_contact' ) ),
);
?>
<!-- wp:group {"align":"full","className":"kv-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kv-foot"><!-- wp:group {"className":"kv-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kv-foot__grid"><!-- wp:group {"className":"kv-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group kv-foot__brand"><!-- wp:html -->
<span class="kv-foot__mark"><svg width="40" height="40" viewBox="0 0 56 56" aria-hidden="true" focusable="false"><rect x="2" y="2" width="52" height="52" fill="#4E555C"/><path d="M12 38h32M16 38v-5M24 38v-3M32 38v-5M40 38v-3" stroke="#fff" stroke-width="2" fill="none"/><path d="M12 20h32" stroke="#EC6C00" stroke-width="3"/></svg><span><?php echo esc_html( kantei_valuers_t( 'site_title' ) ); ?></span></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kv-foot__addr"} -->
<p class="kv-foot__addr"><?php echo esc_html( kantei_valuers_t( 'foot_line' ) ); ?><br><?php echo esc_html( kantei_valuers_t( 'foot_hours' ) ); ?><br><a href="mailto:<?php echo esc_html( kantei_valuers_t( 'foot_mail' ) ); ?>"><?php echo esc_html( kantei_valuers_t( 'foot_mail' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group kv-foot__cols"><?php foreach ( $cols as $h => $links ) : ?><!-- wp:group {"className":"kv-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kv-foot__col"><!-- wp:paragraph {"className":"kv-foot__h"} -->
<p class="kv-foot__h"><?php echo $e( $h ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kv-foot__list"} -->
<ul class="wp-block-list kv-foot__list"><?php foreach ( $links as $lk ) : ?><!-- wp:list-item -->
<li><a href="<?php echo esc_attr( $lk[0] ); ?>"><?php echo $e( $lk[1] ); ?></a></li>
<!-- /wp:list-item -->

<?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group kv-foot__base"><!-- wp:paragraph {"className":"kv-foot__legal"} -->
<p class="kv-foot__legal"><?php echo esc_html( kantei_valuers_t( 'legal' ) ); ?> <a href="/privacy/"><?php echo esc_html( kantei_valuers_t( 'f_privacy' ) ); ?></a> · <a href="/terms/"><?php echo esc_html( kantei_valuers_t( 'f_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
