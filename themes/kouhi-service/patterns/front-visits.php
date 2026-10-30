<?php
/**
 * Title: Home: tasting visit calendar
 * Slug: kouhi-service/front-visits
 * Categories: kouhi-service
 * Keywords: office coffee, coffee service, landing
 * Viewport Width: 1440
 * Description: Four pill tabs over eight ruled dated rows with small bordered chips; every row stays visible.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visits","className":"ks-sec ks-visits","layout":{"type":"default"}} -->
<section id="visits" class="wp-block-group alignfull ks-sec ks-visits"><!-- wp:group {"className":"ks-in","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo esc_html( kouhi_service_t( 'lbl_visits' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo esc_html( kouhi_service_t( 'cal_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<nav class="ks-tabs" aria-label="<?php echo esc_attr( kouhi_service_t( 'tabs_aria' ) ); ?>"><a class="ks-pilltab is-active" href="#visits" aria-current="true"><?php echo esc_html( kouhi_service_t( 'tab_0' ) ); ?></a><a class="ks-pilltab" href="#v-small"><?php echo esc_html( kouhi_service_t( 'tab_1' ) ); ?></a><a class="ks-pilltab" href="#v-mid"><?php echo esc_html( kouhi_service_t( 'tab_2' ) ); ?></a><a class="ks-pilltab" href="#v-clinic"><?php echo esc_html( kouhi_service_t( 'tab_3' ) ); ?></a></nav>
<!-- /wp:html -->

<!-- wp:html -->
<div class="ks-rows"><div class="ks-row" id="v-small"><p class="ks-row__date"><?php echo esc_html( kouhi_service_t( 'cal_0_date' ) ); ?></p><p class="ks-row__chips"><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_0_g' ) ); ?></span><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_0_r' ) ); ?></span></p><p class="ks-row__d"><?php echo esc_html( kouhi_service_t( 'cal_0_d' ) ); ?></p></div><div class="ks-row" id="v-mid"><p class="ks-row__date"><?php echo esc_html( kouhi_service_t( 'cal_1_date' ) ); ?></p><p class="ks-row__chips"><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_1_g' ) ); ?></span><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_1_r' ) ); ?></span></p><p class="ks-row__d"><?php echo esc_html( kouhi_service_t( 'cal_1_d' ) ); ?></p></div><div class="ks-row" id="v-clinic"><p class="ks-row__date"><?php echo esc_html( kouhi_service_t( 'cal_2_date' ) ); ?></p><p class="ks-row__chips"><span class="ks-chip ks-chip--brown"><?php echo esc_html( kouhi_service_t( 'cal_2_g' ) ); ?></span><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_2_r' ) ); ?></span></p><p class="ks-row__d"><?php echo esc_html( kouhi_service_t( 'cal_2_d' ) ); ?></p></div><div class="ks-row"><p class="ks-row__date"><?php echo esc_html( kouhi_service_t( 'cal_3_date' ) ); ?></p><p class="ks-row__chips"><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_3_g' ) ); ?></span><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_3_r' ) ); ?></span></p><p class="ks-row__d"><?php echo esc_html( kouhi_service_t( 'cal_3_d' ) ); ?></p></div><div class="ks-row"><p class="ks-row__date"><?php echo esc_html( kouhi_service_t( 'cal_4_date' ) ); ?></p><p class="ks-row__chips"><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_4_g' ) ); ?></span><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_4_r' ) ); ?></span></p><p class="ks-row__d"><?php echo esc_html( kouhi_service_t( 'cal_4_d' ) ); ?></p></div><div class="ks-row"><p class="ks-row__date"><?php echo esc_html( kouhi_service_t( 'cal_5_date' ) ); ?></p><p class="ks-row__chips"><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_5_g' ) ); ?></span><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_5_r' ) ); ?></span></p><p class="ks-row__d"><?php echo esc_html( kouhi_service_t( 'cal_5_d' ) ); ?></p></div><div class="ks-row"><p class="ks-row__date"><?php echo esc_html( kouhi_service_t( 'cal_6_date' ) ); ?></p><p class="ks-row__chips"><span class="ks-chip ks-chip--brown"><?php echo esc_html( kouhi_service_t( 'cal_6_g' ) ); ?></span><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_6_r' ) ); ?></span></p><p class="ks-row__d"><?php echo esc_html( kouhi_service_t( 'cal_6_d' ) ); ?></p></div><div class="ks-row"><p class="ks-row__date"><?php echo esc_html( kouhi_service_t( 'cal_7_date' ) ); ?></p><p class="ks-row__chips"><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_7_g' ) ); ?></span><span class="ks-chip"><?php echo esc_html( kouhi_service_t( 'cal_7_r' ) ); ?></span></p><p class="ks-row__d"><?php echo esc_html( kouhi_service_t( 'cal_7_d' ) ); ?></p></div></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
