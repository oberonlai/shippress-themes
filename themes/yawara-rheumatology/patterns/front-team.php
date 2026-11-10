<?php
/**
 * Title: Home: who stays with the case
 * Slug: yawara-rheumatology/front-team
 * Categories: yawara-rheumatology
 * Viewport Width: 1440
 * Description: Three abutting square photos with name tabs, then the third narrative paragraph from the 50% column.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yw-team"} -->
<section class="wp-block-group alignfull yw-team"><!-- wp:group {"align":"full","className":"yw-trio"} -->
<div class="wp-block-group alignfull yw-trio"><?php echo yawara_cell( 'p07-elbow.webp', __( 'A woman doctor gently examines a smiling patient\'s elbow near a sunlit window.', 'yawara-rheumatology' ), yawara_tab( 'Miriam Achterberg', __( 'LEAD RHEUMATOLOGIST', 'yawara-rheumatology' ), '/team/' ), 'yw-cell--sq' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo yawara_cell( 'p08-nurse.webp', __( 'A nurse specialist with a telephone headset writes notes at a bright desk.', 'yawara-rheumatology' ), yawara_tab( 'Ines Varga', __( 'NURSE SPECIALIST', 'yawara-rheumatology' ), '/team/' ), 'yw-cell--sq' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo yawara_cell( 'p09-putty.webp', __( 'A physiotherapist guides a patient\'s hand through finger exercises with soft therapy putty.', 'yawara-rheumatology' ), yawara_tab( 'Tomasz Rehn', __( 'PHYSIOTHERAPIST', 'yawara-rheumatology' ), '/team/' ), 'yw-cell--sq' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-sec yw-split yw-team__body"} -->
<div class="wp-block-group yw-sec yw-split yw-team__body"><!-- wp:group {"className":"yw-split__l"} -->
<div class="wp-block-group yw-split__l"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Who stays with the case', 'yawara-rheumatology' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-split__r"} -->
<div class="wp-block-group yw-split__r"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Continuity matters when a joint condition is managed over years. Your examination, ultrasound and follow-up are done by the same small team, so you never explain your history twice. Your named nurse answers the phone line, and the physiotherapist and occupational therapist work in the same building, adapting treatment as your daily routine changes. Dr. Miriam Achterberg leads, with Ines Varga and Tomasz Rehn beside her.', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-more"} -->
<p class="yw-more"><a href="/team/"><?php esc_html_e( 'Meet all seven', 'yawara-rheumatology' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
