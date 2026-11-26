<?php
/**
 * Title: Page: Book or Inquire
 * Slug: seimyaku-clinic/page-contact
 * Categories: seimyaku-clinic
 * Viewport Width: 1440
 * Description: Inner page: photograph band, the booking form (dynamic slot with mailto fallback) beside phone, email, hours and what happens next.
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-phead"><!-- wp:group {"className":"sz-phead__media sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__media sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo seimyaku_clinic_img( 'results-folder.webp' ); ?>" alt="<?php echo esc_attr( seimyaku_clinic_t( 'a6f67ee93' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sz-veil sz-veil--static","layout":{"type":"default"}} -->
<div class="wp-block-group sz-veil sz-veil--static"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__text"><!-- wp:paragraph {"className":"is-style-sz-meta sz-crumbs"} -->
<p class="is-style-sz-meta sz-crumbs"><span><a href="/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k8cf04a97' ) ); ?></a></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k69dabd78' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sz-phead__title"} -->
<h1 class="wp-block-heading sz-phead__title"><?php echo wp_kses_post( seimyaku_clinic_t( 'k69dabd78' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-lead"} -->
<p class="sz-lead"><?php echo wp_kses_post( seimyaku_clinic_t( 'kcb5a4d8b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sz-contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-contact"><!-- wp:group {"className":"sz-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__form"><!-- wp:paragraph {"className":"is-style-sz-chip"} -->
<p class="is-style-sz-chip"><?php echo wp_kses_post( seimyaku_clinic_t( 'k2b1f94ef' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'k43700e64' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seimyaku_clinic_t( 'k9e847bc5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"anchor":"write","className":"sz-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group sz-formwrap" id="write"><?php
ob_start();
?>
<a class="wp-element-button" href="mailto:care@seimyaku-clinic.example?subject=<?php echo rawurlencode( seimyaku_clinic_t( 'contact_subject' ) ); ?>"><?php echo esc_html( seimyaku_clinic_t( 'contact_email' ) ); ?></a>
<?php
$sz_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $sz_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sz-note"} -->
<p class="sz-note"><?php echo wp_kses_post( seimyaku_clinic_t( 'kc697cf4c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-contact__side","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__side"><!-- wp:group {"className":"sz-contact__box","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__box"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'ka950a8da' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>+00 31 555 0148</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="mailto:care@seimyaku-clinic.example"><?php echo wp_kses_post( seimyaku_clinic_t( 'kd21eb933' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-contact__box","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__box"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'k6a7e7316' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seimyaku_clinic_t( 'k7cd97521' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seimyaku_clinic_t( 'k9a642938' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-contact__box","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__box"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'ka273f1bc' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sz-next__row","layout":{"type":"default"}} -->
<div class="wp-block-group sz-next__row"><!-- wp:paragraph {"className":"sz-next__t"} -->
<p class="sz-next__t"><?php echo wp_kses_post( seimyaku_clinic_t( 'k5320cefd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-next__d"} -->
<p class="sz-next__d"><?php echo wp_kses_post( seimyaku_clinic_t( 'k5cab252f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-next__row","layout":{"type":"default"}} -->
<div class="wp-block-group sz-next__row"><!-- wp:paragraph {"className":"sz-next__t"} -->
<p class="sz-next__t"><?php echo wp_kses_post( seimyaku_clinic_t( 'k78ee9ef6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-next__d"} -->
<p class="sz-next__d"><?php echo wp_kses_post( seimyaku_clinic_t( 'k6befd2b4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-next__row","layout":{"type":"default"}} -->
<div class="wp-block-group sz-next__row"><!-- wp:paragraph {"className":"sz-next__t"} -->
<p class="sz-next__t"><?php echo wp_kses_post( seimyaku_clinic_t( 'k62d72836' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-next__d"} -->
<p class="sz-next__d"><?php echo wp_kses_post( seimyaku_clinic_t( 'kb7f4949f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
