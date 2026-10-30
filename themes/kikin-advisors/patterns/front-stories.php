<?php
/**
 * Title: Home: stories
 * Slug: kikin-advisors/front-stories
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: Second notched hairline panel with a speech-bubble icon, three round-thumb story cards and an outline pill on the border.
 */
?>
<!-- wp:group {"align":"full","anchor":"stories","className":"kk-sec kk-stories","layout":{"type":"default"}} -->
<div id="stories" class="wp-block-group alignfull kk-sec kk-stories"><!-- wp:group {"align":"wide","className":"kk-panel","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kk-panel"><?php echo kikin_advisors_chip( 'speech' ); ?>

<!-- wp:heading {"className":"kk-panel__title"} -->
<h2 class="wp-block-heading kk-panel__title"><?php echo esc_html( kikin_advisors_t( 'stories_title' ) ); ?><small><?php echo esc_html( kikin_advisors_t( 'stories_sub' ) ); ?></small></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kk-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kk-cards sp-stagger"><?php
echo kikin_advisors_card( 'k11.webp', kikin_advisors_t( 'alt_k11' ), kikin_advisors_t( 'st_1_l' ), kikin_advisors_t( 'st_1_t' ), kikin_advisors_t( 'st_1_d' ), kikin_advisors_t( 'st_read' ) ) . "\n\n";
echo kikin_advisors_card( 'k12.webp', kikin_advisors_t( 'alt_k12' ), kikin_advisors_t( 'st_2_l' ), kikin_advisors_t( 'st_2_t' ), kikin_advisors_t( 'st_2_d' ), kikin_advisors_t( 'st_read' ) ) . "\n\n";
echo kikin_advisors_card( 'k13.webp', kikin_advisors_t( 'alt_k13' ), kikin_advisors_t( 'st_3_l' ), kikin_advisors_t( 'st_3_t' ), kikin_advisors_t( 'st_3_d' ), kikin_advisors_t( 'st_read' ) );
?></div>
<!-- /wp:group -->

<?php echo kikin_advisors_pill( kikin_advisors_t( 'stories_all' ), '/stories/', 'kk-pill--outline', 'kk-panel__pill' ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
