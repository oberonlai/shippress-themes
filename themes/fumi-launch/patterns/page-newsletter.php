<?php
/**
 * Title: Page: newsletter
 * Slug: fumi-launch/page-newsletter
 * Categories: fumi-launch
 * Viewport Width: 1440
 * Description: Early-access sign-up form.
 */
?>
<!-- wp:group {"className":"fl-phead fl-phead--sm","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fl-phead fl-phead--sm">
<!-- wp:group {"className":"fl-frame fl-phead__frame","layout":{"type":"default"}} -->
<div class="wp-block-group fl-frame fl-phead__frame">
<!-- wp:paragraph {"className":"fl-phead__tag"} -->
<p class="fl-phead__tag"><?php echo wp_kses_post( fumi_launch_t( 'k02abc1f4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"fl-phead__window sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group fl-phead__window sp-parallax">
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"fl-ph"} -->
<figure class="wp-block-image size-full fl-ph"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/envelope-postcard.webp' ) ); ?>" alt="<?php echo esc_attr( fumi_launch_t( 'a1aac52c2' ) ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"fl-h fl-phead__title"} -->
<h1 class="wp-block-heading fl-h fl-phead__title"><?php echo wp_kses_post( fumi_launch_t( 'kffb7e666' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="fl-stamp fl-stamp--head" href="/editions/#order" aria-label="<?php echo esc_attr( fumi_launch_t( 'aae289b7f' ) ); ?>"><svg class="fl-stamp__ring" viewBox="0 0 200 200" aria-hidden="true" focusable="false"><defs><path id="fl-ring-newsle" d="M100,100 m-80,0 a80,80 0 1,1 160,0 a80,80 0 1,1 -160,0"/></defs><text><textPath href="#fl-ring-newsle" textLength="496" lengthAdjust="spacing">PRE-ORDER · SIGNED FIRST PRINTING · 18 MARCH 2027 · </textPath></text></svg><span class="fl-stamp__c"><span><?php echo wp_kses_post( fumi_launch_t( 'kde08ef55' ) ); ?></span><b>↗</b></span></a>
<!-- /wp:html -->

</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"fl-sec fl-sec--field fl-sec--inner ","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fl-sec fl-sec--field fl-sec--inner ">
<!-- wp:group {"className":"fl-frame fl-frame--wide","layout":{"type":"default"}} -->
<div class="wp-block-group fl-frame fl-frame--wide">
<!-- wp:columns {"className":"fl-cols fl-cols--wl"} -->
<div class="wp-block-columns fl-cols fl-cols--wl"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:paragraph {"className":"fl-label"} -->
<p class="fl-label"><?php echo wp_kses_post( fumi_launch_t( 'k02abc1f4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"fl-h fl-h--xl"} -->
<h2 class="wp-block-heading fl-h fl-h--xl"><?php echo wp_kses_post( fumi_launch_t( 'ka61f8ff9' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"fl-lead"} -->
<p class="fl-lead"><?php echo wp_kses_post( fumi_launch_t( 'k4efabd7f' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"fl-proc"} -->
<p class="fl-proc"><?php echo wp_kses_post( fumi_launch_t( 'k08bd4f53' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:html -->
<form class="fl-form fl-form--page" action="#" method="post"><p class="fl-field"><label for="fl-name"><?php echo wp_kses_post( fumi_launch_t( 'k49ee3087' ) ); ?></label><input id="fl-name" name="name" type="text" autocomplete="name"></p><p class="fl-field"><label for="fl-email"><?php echo wp_kses_post( fumi_launch_t( 'kb357b524' ) ); ?></label><input id="fl-email" name="email" type="email" autocomplete="email" required></p><p class="fl-field"><label for="fl-lang"><?php echo wp_kses_post( fumi_launch_t( 'ka5bed308' ) ); ?></label><select id="fl-lang" name="lang"><option><?php echo wp_kses_post( fumi_launch_t( 'k78463a38' ) ); ?></option><option><?php echo wp_kses_post( fumi_launch_t( 'k8f0langtc' ) ); ?></option></select></p><p class="fl-field fl-field--check"><label><input type="checkbox" name="consent" required> <?php echo wp_kses_post( fumi_launch_t( 'k4b096ab7' ) ); ?></label></p><p class="fl-field"><button type="submit"><?php echo wp_kses_post( fumi_launch_t( 'kec26c795' ) ); ?></button></p></form>
<!-- /wp:html --><!-- wp:paragraph {"className":"fl-label"} -->
<p class="fl-label"><?php echo wp_kses_post( fumi_launch_t( 'k2d52cd6d' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"fl-proc"} -->
<p class="fl-proc"><?php echo wp_kses_post( fumi_launch_t( 'ke6e424d8' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
