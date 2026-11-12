<?php
/**
 * Title: Page: Newsletter
 * Slug: gaku-frames/page-newsletter
 * Categories: gaku-frames
 * Inserter: no
 * Viewport Width: 1440
 * Description: Newsletter page: single-photo head and a text column with the newsletter form slot (email and submit work without any plugin).
 */
?>
<!-- wp:group {"align":"full","className":"gk-pagehead gk-mitre-field","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull gk-pagehead gk-mitre-field"><!-- wp:group {"className":"gk-split gk-split--head","layout":{"type":"default"}} -->
<div class="wp-block-group gk-split gk-split--head"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo wp_kses_post( gaku_frames_t( 'kbb085436' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gk-split__line2"} -->
<p class="gk-split__line2"><?php echo wp_kses_post( gaku_frames_t( 'k91b65fce' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-stage gk-headstage","layout":{"type":"default"}} -->
<div class="wp-block-group gk-stage gk-headstage"><!-- wp:group {"className":"gk-frame gk-frame--lg gk-headframe","layout":{"type":"default"}} -->
<div class="wp-block-group gk-frame gk-frame--lg gk-headframe"><!-- wp:group {"className":"gk-headcols gk-headcols--one sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group gk-headcols gk-headcols--one sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-measure.webp' ) ); ?>" alt="<?php echo esc_attr( gaku_frames_t( 'ab7b678b3' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-seam-label gk-seam-label--head","layout":{"type":"default"}} -->
<div class="wp-block-group gk-seam-label gk-seam-label--head"><!-- wp:paragraph {"className":"gk-seam-label__p"} -->
<p class="gk-seam-label__p"><?php echo wp_kses_post( gaku_frames_t( 'k2cfcf58f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-vrule","layout":{"type":"default"}} -->
<div class="wp-block-group gk-vrule"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gk-vcaption"} -->
<p class="gk-vcaption"><?php echo wp_kses_post( gaku_frames_t( 'k0aecab4f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gk-sec gk-sec--in gk-mitre-field","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull gk-sec gk-sec--in gk-mitre-field"><!-- wp:group {"className":"gk-textcol","layout":{"type":"default"}} -->
<div class="wp-block-group gk-textcol"><!-- wp:paragraph {"className":"gk-lead-in"} -->
<p class="gk-lead-in"><?php echo wp_kses_post( gaku_frames_t( 'k08fdfb88' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( gaku_frames_t( 'ka6060186' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( gaku_frames_t( 'k4d58fa86' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( gaku_frames_t( 'k6116a851' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( gaku_frames_t( 'kf0d4bd4a' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( gaku_frames_t( 'ke3168366' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( gaku_frames_t( 'k3d3297ea' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( gaku_frames_t( 'k31c9625a' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( gaku_frames_t( 'k6dd52635' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( gaku_frames_t( 'kd1891601' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gk-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group gk-formwrap"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'bench@gakuframes.example',
	'label'   => gaku_frames_t( 'forms_email' ),
	'submit'  => gaku_frames_t( 'forms_subscribe' ),
	'notice'  => gaku_frames_t( 'forms_mail_notice' ),
	'subject' => gaku_frames_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
