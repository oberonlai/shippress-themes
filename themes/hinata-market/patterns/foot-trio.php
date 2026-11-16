<?php
/**
 * Title: Home: office, weekly list and notice board
 * Slug: hinata-market/foot-trio
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Description: Three ruled boxes: the market office, the weekly list sign-up and a hatched notice board.
 */
?>
<!-- wp:group {"className":"hm-sec","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hm-sec"><!-- wp:group {"className":"hm-dots hm-dots--cut","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots hm-dots--cut"></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"weekly","tagName":"section","className":"hm-cols hm-foottrio","layout":{"type":"default"},"align":"full"} -->
<section id="weekly" class="wp-block-group alignfull hm-cols hm-foottrio"><!-- wp:group {"className":"hm-col hm-col--left","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--left"><!-- wp:paragraph {"className":"hm-tab"} -->
<p class="hm-tab"><?php echo esc_html( hinata_market_t( 'office_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-kv","layout":{"type":"default"}} -->
<div class="wp-block-group hm-kv"><!-- wp:paragraph {"className":"hm-kv__k"} -->
<p class="hm-kv__k"><?php echo esc_html( hinata_market_t( 'of1_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-kv__v"} -->
<p class="hm-kv__v"><?php echo esc_html( hinata_market_t( 'of1_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-kv","layout":{"type":"default"}} -->
<div class="wp-block-group hm-kv"><!-- wp:paragraph {"className":"hm-kv__k"} -->
<p class="hm-kv__k"><?php echo esc_html( hinata_market_t( 'of2_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-kv__v"} -->
<p class="hm-kv__v"><?php echo esc_html( hinata_market_t( 'of2_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-kv","layout":{"type":"default"}} -->
<div class="wp-block-group hm-kv"><!-- wp:paragraph {"className":"hm-kv__k"} -->
<p class="hm-kv__k"><?php echo esc_html( hinata_market_t( 'of3_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-kv__v"} -->
<p class="hm-kv__v"><?php echo esc_html( hinata_market_t( 'of3_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-kv","layout":{"type":"default"}} -->
<div class="wp-block-group hm-kv"><!-- wp:paragraph {"className":"hm-kv__k"} -->
<p class="hm-kv__k"><?php echo esc_html( hinata_market_t( 'of4_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-kv__v"} -->
<p class="hm-kv__v"><?php echo esc_html( hinata_market_t( 'of4_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-kv","layout":{"type":"default"}} -->
<div class="wp-block-group hm-kv"><!-- wp:paragraph {"className":"hm-kv__k"} -->
<p class="hm-kv__k"><?php echo esc_html( hinata_market_t( 'of5_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-kv__v"} -->
<p class="hm-kv__v"><?php echo esc_html( hinata_market_t( 'of5_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'office_desk' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-pill hm-pill--fill"} -->
<p class="hm-pill hm-pill--fill"><a href="<?php echo hinata_market_url( '/visit/' ); ?>"><?php echo esc_html( hinata_market_t( 'office_map' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--mid"><!-- wp:group {"className":"hm-weekly","layout":{"type":"default"}} -->
<div class="wp-block-group hm-weekly"><!-- wp:paragraph {"className":"hm-weekly__head"} -->
<p class="hm-weekly__head"><?php echo esc_html( hinata_market_t( 'weekly_head' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-weekly__body","layout":{"type":"default"}} -->
<div class="wp-block-group hm-weekly__body"><!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'weekly_text' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@hinata-market.example',
	'label'   => hinata_market_t( 'forms_email' ),
	'submit'  => hinata_market_t( 'forms_subscribe' ),
	'notice'  => hinata_market_t( 'forms_mail_notice' ),
	'subject' => hinata_market_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--right","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--right"><!-- wp:group {"className":"hm-board","layout":{"type":"default"}} -->
<div class="wp-block-group hm-board"><!-- wp:paragraph {"className":"hm-board__head"} -->
<p class="hm-board__head"><span><?php echo esc_html( hinata_market_t( 'board_head' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'board_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group -->
