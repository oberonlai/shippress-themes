<?php
/**
 * Title: Header: account link and buy button
 * Slug: kazu-data-course/head-cta
 * Categories: kazu-data-course
 * Inserter: false
 */
echo kz_p( 'kz-hlink', '<a href="/dashboard/">' . esc_html( kazu_t( 'hd_link' ) ) . '</a>' )
	. kz_btns( 'kz-hbtn', array( array( kazu_t( 'hd_buy' ), kazu_buy_url() ) ) );
