<?php
/**
 * Title: Header: log in link and plan button
 * Slug: shikaku-academy/head-right
 * Categories: shikaku-academy
 * Inserter: false
 */
echo sa_p( 'sa-hlink', '<a href="/my-courses/">' . esc_html( sa_t( 'hd_login' ) ) . '</a>' )
	. sa_btns( 'sa-hbtn', array( array( sa_t( 'hd_cta' ), '/plans/' ) ) );
