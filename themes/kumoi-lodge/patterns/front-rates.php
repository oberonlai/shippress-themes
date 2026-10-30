<?php
/**
 * Title: Home: rates, half board
 * Slug: kumoi-lodge/front-rates
 * Categories: kumoi-lodge
 * Keywords: lodge, home
 * Viewport Width: 1440
 * Description: Rate table of seven lines on mint: item at the left, price at the right with hairline rules; the booking terms and an outline pill below.
 */
?>
<!-- wp:group {"className":"km-sec km-rates","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"rates"} -->
<section id="rates" class="wp-block-group alignfull km-sec km-rates"><!-- wp:group {"className":"km-col","layout":{"type":"default"}} -->
<div class="wp-block-group km-col"><!-- wp:heading {"level":2,"className":"km-title"} -->
<h2 class="wp-block-heading km-title"><?php kumoi_lodge_e( 'rates_label' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:table {"className":"km-rate-table"} -->
<figure class="wp-block-table km-rate-table"><table class="has-fixed-layout"><tbody><?php foreach ( kumoi_lodge_a( 'rates' ) as $row ) : ?><tr><td><?php echo esc_html( $row[0] ); ?></td><td><?php echo esc_html( $row[1] ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"km-lead km-rates__body"} -->
<p class="km-lead km-rates__body"><?php kumoi_lodge_e( 'rates_body' ); ?></p>
<!-- /wp:paragraph -->
<?php echo kumoi_lodge_pill( kumoi_lodge_t( 'rates_pill' ), '/rates-and-booking/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
