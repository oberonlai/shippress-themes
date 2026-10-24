<?php
/**
 * Title: Home: about, scattered photographs round a centred text block
 * Slug: seiwa-furniture/front-about
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: Three masked photographs of different sizes at different heights round a centred text block, with a faint line plan bleeding off the left.
 */
echo sw_group( 'sw-sec sw-about', // phpcs:ignore WordPress.Security.EscapeOutput
	sw_group( 'sw-about__in sp-stagger',
		sw_img( 'line-office-plan.svg', '', 'sw-about__plan' ) .
		sw_group( 'sw-ph sw-ph--a sp-reveal sp-reveal--up', sw_img( 'intro-frame-bolt.webp', sw_ta( 'alt_P3' ) ) ) .
		sw_group( 'sw-ph sw-ph--b sp-reveal sp-reveal--up', sw_img( 'intro-foam-stretch.webp', sw_ta( 'alt_P4' ) ) . sw_img( 'line-castor.svg', '', 'sw-ph__ln' ) ) .
		sw_group( 'sw-about__tx', sw_label( 'about_label', 'about_cap' ) . sw_p( 'sw-lead', sw_t( 'about_lead' ) ) . sw_p( 'sw-about__p', sw_t( 'about_p1' ) ) . sw_p( 'sw-about__p', sw_t( 'about_p2' ) ) . sw_p( 'sw-about__p', sw_t( 'about_p3' ) ) . sw_more( 'about_cta', '/about/', 'sw-more--c' ) ) .
		sw_group( 'sw-ph sw-ph--c sp-reveal sp-reveal--up', sw_img( 'intro-plan-review.webp', sw_ta( 'alt_P5' ) ) )
	),
'section' );
