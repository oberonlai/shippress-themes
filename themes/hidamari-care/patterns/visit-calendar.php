<?php
/**
 * Title: Home: visiting calendar
 * Slug: hidamari-care/visit-calendar
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: The next two weeks of visiting slots as a plain date grid with a booking link.
 */
?>
<!-- wp:group {"tagName":"section","className":"hc-cal","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-cal"><!-- wp:group {"className":"hc-cal__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-cal__head"><!-- wp:paragraph {"className":"hc-eyebrow"} -->
<p class="hc-eyebrow"><?php echo esc_html( hidamari_care_t( 'vc_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hc-sec__title"} -->
<h2 class="wp-block-heading hc-sec__title"><?php echo esc_html( hidamari_care_t( 'vc_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-cal__lead"} -->
<p class="hc-cal__lead"><?php echo esc_html( hidamari_care_t( 'vc_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-cal__cta"} -->
<p class="hc-cal__cta"><a class="hc-day__link" href="/visit/"><?php echo esc_html( hidamari_care_t( 'vc_link' ) ); ?> <span aria-hidden="true">&rarr;</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<ul class="hc-cal__grid"><li class="hc-cal__wd"><?php echo esc_html( hidamari_care_t( 'wd1' ) ); ?></li><li class="hc-cal__wd"><?php echo esc_html( hidamari_care_t( 'wd2' ) ); ?></li><li class="hc-cal__wd"><?php echo esc_html( hidamari_care_t( 'wd3' ) ); ?></li><li class="hc-cal__wd"><?php echo esc_html( hidamari_care_t( 'wd4' ) ); ?></li><li class="hc-cal__wd"><?php echo esc_html( hidamari_care_t( 'wd5' ) ); ?></li><li class="hc-cal__wd"><?php echo esc_html( hidamari_care_t( 'wd6' ) ); ?></li><li class="hc-cal__wd"><?php echo esc_html( hidamari_care_t( 'wd7' ) ); ?></li><li class="hc-cal__d hc-cal__d--two"><span class="hc-cal__n">19</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_two' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--two"><span class="hc-cal__n">20</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_two' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--pm"><span class="hc-cal__n">21</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_pm' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--full"><span class="hc-cal__n">22</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_full' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--two"><span class="hc-cal__n">23</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_two' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--pm"><span class="hc-cal__n">24</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_pm' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--closed"><span class="hc-cal__n">25</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_closed' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--two"><span class="hc-cal__n">26</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_two' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--full"><span class="hc-cal__n">27</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_full' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--two"><span class="hc-cal__n">28</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_two' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--pm"><span class="hc-cal__n">29</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_pm' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--two"><span class="hc-cal__n">30</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_two' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--pm"><span class="hc-cal__n">31</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_pm' ) ); ?></span></li><li class="hc-cal__d hc-cal__d--closed"><span class="hc-cal__n">1</span><span class="hc-cal__s"><?php echo esc_html( hidamari_care_t( 'slot_closed' ) ); ?></span></li></ul>
<!-- /wp:html --></section>
<!-- /wp:group -->
