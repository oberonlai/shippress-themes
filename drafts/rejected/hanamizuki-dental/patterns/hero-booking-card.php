<?php
/**
 * Title: Home: booking card first screen
 * Slug: hanamizuki-dental/hero-booking-card
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Description: First screen split 50/50: a two-line headline, one sentence and three trust marks on the left; on a full-height jade field on the right, a white booking card with a 7-day date strip, time-slot chips and a treatment select over two stacked high-key photographs, with a cut-out instrument tray breaking over its corner.
 */
?>
<!-- wp:group {"tagName":"section","className":"hd-bk","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-bk">
<!-- wp:group {"className":"hd-bk__text","layout":{"type":"default"}} -->
<div class="wp-block-group hd-bk__text"><!-- wp:heading {"level":1,"className":"hd-bk__h"} -->
<h1 class="wp-block-heading hd-bk__h"><?php echo esc_html( hanamizuki_dental_t( 'bk_h1' ) ); ?><br/><?php echo esc_html( hanamizuki_dental_t( 'bk_h2' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hd-bk__lead"} -->
<p class="hd-bk__lead"><?php echo esc_html( hanamizuki_dental_t( 'bk_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="hd-bk__marks"><li><?php echo esc_html( hanamizuki_dental_t( 'bk_m1' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'bk_m2' ) ); ?></li><li><?php echo esc_html( hanamizuki_dental_t( 'bk_m3' ) ); ?></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-bk__field","layout":{"type":"default"}} -->
<div class="wp-block-group hd-bk__field"><!-- wp:html -->
<div class="hd-bk__stage"><figure class="hd-bk__ph hd-bk__ph--a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waiting.webp' ) ); ?>" alt="<?php echo esc_attr( hanamizuki_dental_t( 'alt_waiting' ) ); ?>"/></figure><figure class="hd-bk__ph hd-bk__ph--b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/treatment.webp' ) ); ?>" alt="<?php echo esc_attr( hanamizuki_dental_t( 'alt_treatment' ) ); ?>"/></figure><div class="hd-bk__card"><img class="hd-bk__tray" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tray-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hanamizuki_dental_t( 'alt_tray' ) ); ?>"/><p class="hd-bk__ct"><?php echo esc_html( hanamizuki_dental_t( 'bk_card' ) ); ?></p><p class="hd-bk__wk"><?php echo esc_html( hanamizuki_dental_t( 'bk_week' ) ); ?></p><div class="hd-bk__days"><span class="hd-bk__day is-off" aria-disabled="true"><span>Mon</span><strong>19</strong></span><input class="hd-bk__r" type="radio" name="hd-day" id="hd-d20" checked/><label class="hd-bk__day" for="hd-d20"><span>Tue</span><strong>20</strong></label><input class="hd-bk__r" type="radio" name="hd-day" id="hd-d21"/><label class="hd-bk__day" for="hd-d21"><span>Wed</span><strong>21</strong></label><input class="hd-bk__r" type="radio" name="hd-day" id="hd-d22"/><label class="hd-bk__day" for="hd-d22"><span>Thu</span><strong>22</strong></label><input class="hd-bk__r" type="radio" name="hd-day" id="hd-d23"/><label class="hd-bk__day" for="hd-d23"><span>Fri</span><strong>23</strong></label><input class="hd-bk__r" type="radio" name="hd-day" id="hd-d24"/><label class="hd-bk__day" for="hd-d24"><span>Sat</span><strong>24</strong></label><span class="hd-bk__day is-off" aria-disabled="true"><span>Sun</span><strong>25</strong></span></div><p class="hd-bk__sl"><?php echo esc_html( hanamizuki_dental_t( 'bk_slots' ) ); ?></p><div class="hd-bk__slots hd-bk__slots--20"><input class="hd-bk__r" type="radio" name="hd-slot-20" id="hd-s20-0"/><label class="hd-bk__slot" for="hd-s20-0">9:30</label><input class="hd-bk__r" type="radio" name="hd-slot-20" id="hd-s20-1" checked/><label class="hd-bk__slot" for="hd-s20-1">11:00</label><input class="hd-bk__r" type="radio" name="hd-slot-20" id="hd-s20-2"/><label class="hd-bk__slot" for="hd-s20-2">14:30</label><input class="hd-bk__r" type="radio" name="hd-slot-20" id="hd-s20-3"/><label class="hd-bk__slot" for="hd-s20-3">18:30</label></div><div class="hd-bk__slots hd-bk__slots--21"><input class="hd-bk__r" type="radio" name="hd-slot-21" id="hd-s21-0"/><label class="hd-bk__slot" for="hd-s21-0">10:00</label><input class="hd-bk__r" type="radio" name="hd-slot-21" id="hd-s21-1" checked/><label class="hd-bk__slot" for="hd-s21-1">13:30</label><input class="hd-bk__r" type="radio" name="hd-slot-21" id="hd-s21-2"/><label class="hd-bk__slot" for="hd-s21-2">16:00</label><input class="hd-bk__r" type="radio" name="hd-slot-21" id="hd-s21-3"/><label class="hd-bk__slot" for="hd-s21-3">19:00</label></div><div class="hd-bk__slots hd-bk__slots--22"><input class="hd-bk__r" type="radio" name="hd-slot-22" id="hd-s22-0"/><label class="hd-bk__slot" for="hd-s22-0">9:00</label><input class="hd-bk__r" type="radio" name="hd-slot-22" id="hd-s22-1" checked/><label class="hd-bk__slot" for="hd-s22-1">12:00</label><input class="hd-bk__r" type="radio" name="hd-slot-22" id="hd-s22-2"/><label class="hd-bk__slot" for="hd-s22-2">17:30</label></div><div class="hd-bk__slots hd-bk__slots--23"><input class="hd-bk__r" type="radio" name="hd-slot-23" id="hd-s23-0"/><label class="hd-bk__slot" for="hd-s23-0">11:30</label><input class="hd-bk__r" type="radio" name="hd-slot-23" id="hd-s23-1" checked/><label class="hd-bk__slot" for="hd-s23-1">15:00</label><input class="hd-bk__r" type="radio" name="hd-slot-23" id="hd-s23-2"/><label class="hd-bk__slot" for="hd-s23-2">18:00</label><input class="hd-bk__r" type="radio" name="hd-slot-23" id="hd-s23-3"/><label class="hd-bk__slot" for="hd-s23-3">19:30</label></div><div class="hd-bk__slots hd-bk__slots--24"><input class="hd-bk__r" type="radio" name="hd-slot-24" id="hd-s24-0"/><label class="hd-bk__slot" for="hd-s24-0">9:30</label><input class="hd-bk__r" type="radio" name="hd-slot-24" id="hd-s24-1" checked/><label class="hd-bk__slot" for="hd-s24-1">10:30</label><input class="hd-bk__r" type="radio" name="hd-slot-24" id="hd-s24-2"/><label class="hd-bk__slot" for="hd-s24-2">12:30</label></div><label class="hd-bk__tr"><span><?php echo esc_html( hanamizuki_dental_t( 'bk_tr' ) ); ?></span><select name="treatment"><option><?php echo esc_html( hanamizuki_dental_t( 'bk_o1' ) ); ?></option><option><?php echo esc_html( hanamizuki_dental_t( 'bk_o2' ) ); ?></option><option><?php echo esc_html( hanamizuki_dental_t( 'bk_o3' ) ); ?></option><option><?php echo esc_html( hanamizuki_dental_t( 'bk_o4' ) ); ?></option></select></label><a class="hd-bk__btn" href="/contact/"><?php echo esc_html( hanamizuki_dental_t( 'bk_btn' ) ); ?> <span aria-hidden="true">&rarr;</span></a><p class="hd-bk__note"><?php echo esc_html( hanamizuki_dental_t( 'bk_note' ) ); ?></p></div></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
