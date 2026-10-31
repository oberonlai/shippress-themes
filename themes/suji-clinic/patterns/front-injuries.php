<?php
/**
 * Title: Home: injuries grid
 * Slug: suji-clinic/front-injuries
 * Categories: suji-clinic
 * Keywords: clinic, injuries, grid
 * Viewport Width: 1440
 * Description: A giant thin heading across the white-to-paper boundary, then six photo cards with an offset line, a round arrow and a Latin sub-label.
 */
$photos = array( 1 => 'i1-ankle.webp', 2 => 'i2-knee.webp', 3 => 'i3-calf.webp', 4 => 'i4-hip.webp', 5 => 'i5-shoulder.webp', 6 => 'i6-back.webp' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-sec sj-inj","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sj-sec sj-inj"><!-- wp:group {"className":"sj-wrap sj-head","layout":{"type":"default"}} -->
<div class="wp-block-group sj-wrap sj-head"><!-- wp:paragraph {"className":"sj-giant"} -->
<p class="sj-giant"><span class="sj-giant__first">I</span>NJURIES</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-sublabel"} -->
<p class="sj-sublabel"><?php echo esc_html( suji_clinic_t( 'inj_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-wrap sj-grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sj-wrap sj-grid sp-stagger"><?php foreach ( $photos as $n => $file ) : ?>
<!-- wp:group {"className":"sj-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sj-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"sj-card__photo"} -->
<figure class="wp-block-image size-full sj-card__photo"><a href="<?php echo suji_clinic_url( 'injuries' ); ?>"><img src="<?php echo suji_clinic_img( $file ); ?>" alt="<?php echo esc_attr( suji_clinic_t( 'alt_i' . $n ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sj-card__row"} -->
<p class="sj-card__row"><a class="sj-card__title" href="<?php echo suji_clinic_url( 'injuries' ); ?>"><?php echo esc_html( suji_clinic_t( "inj_{$n}_t" ) ); ?></a><a class="sj-chip" href="<?php echo suji_clinic_url( 'injuries' ); ?>" aria-label="<?php echo esc_attr( suji_clinic_t( "inj_{$n}_t" ) ); ?>"></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-sublabel"} -->
<p class="sj-sublabel"><?php echo esc_html( suji_clinic_t( "inj_{$n}_l" ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-card__cap"} -->
<p class="sj-card__cap"><?php echo esc_html( suji_clinic_t( "inj_{$n}_c" ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sj-more"} -->
<p class="sj-more"><a href="<?php echo suji_clinic_url( 'injuries' ); ?>"><?php echo esc_html( suji_clinic_t( 'inj_all' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
