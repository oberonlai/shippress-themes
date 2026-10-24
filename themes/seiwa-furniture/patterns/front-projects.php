<?php
/**
 * Title: Home: featured project card and project register
 * Slug: seiwa-furniture/front-projects
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: A featured outlined card running to the right edge, then four hairline register rows.
 */
$sw_reg = sw_group( 'sw-reg__r sw-reg__r--h', sw_p( '', sw_t( 'reg_h_y' ) ) . sw_p( '', sw_t( 'reg_h_p' ) ) . sw_p( '', sw_t( 'reg_h_c' ) ) . sw_p( 'sw-reg__s', sw_t( 'reg_h_s' ) ) );
for ( $i = 1; $i <= 4; $i++ ) {
	$sw_reg .= sw_group( 'sw-reg__r', sw_p( 'sw-reg__y', sw_t( "reg{$i}_y" ) ) . sw_group( 'sw-reg__pj', sw_p( 'sw-reg__pt', sw_t( "reg{$i}_p" ) ) . sw_p( 'sw-reg__px', sw_t( "reg{$i}_x" ) ) ) . sw_p( 'sw-reg__c', sw_t( "reg{$i}_c" ) ) . sw_p( 'sw-reg__s', sw_t( "reg{$i}_s" ) ) );
}
$sw_card = sw_group( 'sw-card sp-reveal sp-reveal--up', sw_group( 'sw-card__tx', sw_p( 'sw-kick', sw_t( 'proj_k' ) ) . sw_h( 3, 'sw-card__t', sw_t( 'proj_t' ) ) . sw_p( 'sw-card__b', sw_t( 'proj_b' ) ) . sw_more( 'proj_cta', '/projects/' ) . sw_img( 'line-swatch-tape.svg', '', 'sw-card__ln' ) ) . sw_img( 'case-night-install.webp', sw_ta( 'alt_P13' ), 'sw-card__ph' ) );
echo sw_group( 'sw-sec sw-projects', // phpcs:ignore WordPress.Security.EscapeOutput
	sw_group( 'sw-wrap', sw_label( 'proj_label', 'proj_cap' ) ) . sw_group( 'sw-cards', $sw_card ) . sw_group( 'sw-wrap', sw_group( 'sw-reg', $sw_reg ) ),
'section' );
