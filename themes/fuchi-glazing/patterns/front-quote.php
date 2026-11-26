<?php
/**
 * Title: Home: one way to ask for a quote
 * Slug: fuchi-glazing/front-quote
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Pale band with three plain columns separated by rules, the repeated request box and the email and phone line.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"quote","align":"full","className":"fg-sec fg-sec--quote","layout":{"type":"default"}} -->
<section id="quote" class="wp-block-group alignfull fg-sec fg-sec--quote">
<!-- wp:group {"className":"fg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap">
<!-- wp:heading {"textAlign":"center","className":"fg-h2"} -->
<h2 class="wp-block-heading has-text-align-center fg-h2"><?php echo esc_html( fuchi_glazing_t( 'qt_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-lead"} -->
<p class="fg-lead"><?php echo esc_html( fuchi_glazing_t( 'qt_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-ask sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fg-ask sp-reveal sp-reveal--up">
<!-- wp:group {"className":"fg-ask__col","layout":{"type":"default"}} -->
<div class="wp-block-group fg-ask__col">
<!-- wp:paragraph {"className":"fg-ask__n"} -->
<p class="fg-ask__n">1</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-ask__t"} -->
<p class="fg-ask__t"><?php echo esc_html( fuchi_glazing_t( 'qt_t1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-ask__x"} -->
<p class="fg-ask__x"><?php echo esc_html( fuchi_glazing_t( 'qt_x1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-ask__col","layout":{"type":"default"}} -->
<div class="wp-block-group fg-ask__col">
<!-- wp:paragraph {"className":"fg-ask__n"} -->
<p class="fg-ask__n">2</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-ask__t"} -->
<p class="fg-ask__t"><?php echo esc_html( fuchi_glazing_t( 'qt_t2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-ask__x"} -->
<p class="fg-ask__x"><?php echo esc_html( fuchi_glazing_t( 'qt_x2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-ask__col","layout":{"type":"default"}} -->
<div class="wp-block-group fg-ask__col">
<!-- wp:paragraph {"className":"fg-ask__n"} -->
<p class="fg-ask__n">3</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-ask__t"} -->
<p class="fg-ask__t"><?php echo esc_html( fuchi_glazing_t( 'qt_t3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-ask__x"} -->
<p class="fg-ask__x"><?php echo esc_html( fuchi_glazing_t( 'qt_x3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-center","layout":{"type":"default"}} -->
<div class="wp-block-group fg-center">
<!-- wp:html -->
<a class="fg-cta fg-cta--lg" href="/contact/"><span><?php echo esc_html( fuchi_glazing_t( 'cta_book' ) ); ?></span><svg class="fg-cta__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="7.4"/><path d="M4.8 8h6M8.6 5.6 11 8l-2.4 2.4"/></svg></a>
<!-- /wp:html -->
<!-- wp:html -->
<p class="fg-contactline"><a href="mailto:survey@fuchi-glazing.example"><?php echo wp_kses_post( fuchi_glazing_t( 'k0263709b' ) ); ?></a> <span aria-hidden="true">·</span> <a href="tel:+002079460412"><?php echo esc_html( fuchi_glazing_t( 'phone' ) ); ?></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
