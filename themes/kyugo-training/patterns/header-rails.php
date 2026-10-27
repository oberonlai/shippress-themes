<?php
/**
 * Title: Header: side rails
 * Slug: kyugo-training/header-rails
 * Categories: kyugo-training
 * Keywords: first aid, training, workplace
 * Viewport Width: 1440
 * Inserter: no
 * Description: Fixed white rails left and right (from 1100px).
 */
?>
<!-- wp:html -->
<div class="kt-rail kt-rail--left"><a class="kt-mark" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a><p class="kt-rail__name"><?php echo kyugo_training_lines( 'rail_name' ); // phpcs:ignore ?></p><p class="kt-rail__copy"><?php echo esc_html( kyugo_training_t( 'rail_copy' ) ); ?></p></div>
<div class="kt-rail kt-rail--right"><a class="kt-rail__menu" href="#kt-nav"><span class="kt-rail__lines"></span><span class="kt-rail__menu-l"><?php echo esc_html( kyugo_training_t( 'rail_menu' ) ); ?></span></a><a class="kt-rail__find" href="/contact/"><span class="kt-rail__pin"></span><span class="kt-rail__find-l"><?php echo esc_html( kyugo_training_t( 'rail_find' ) ); ?></span></a><a class="kt-rail__tile" href="/book-a-group/"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="#fff" stroke-width="1.5" aria-hidden="true"><rect x="3.5" y="5.5" width="21" height="18"/><path d="M3.5 11.5h21M9 3v5M19 3v5"/></svg><span><?php echo kyugo_training_lines( 'rail_book' ); // phpcs:ignore ?></span></a><a class="kt-rail__call" href="tel:+31305550142"><span class="kt-rail__call-l"><?php echo esc_html( kyugo_training_t( 'rail_call' ) ); ?></span><span class="kt-rail__call-n">+31 30 555 0142</span></a></div>
<!-- /wp:html -->
