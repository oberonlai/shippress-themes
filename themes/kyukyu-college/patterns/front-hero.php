<?php
/**
 * Title: Home: name lockup, framed photo with crossed polygons
 * Slug: kyukyu-college/front-hero
 * Categories: kyukyu-college
 * Keywords: front-hero
 * Viewport Width: 1440
 * Description: Three-line name lockup at the left overlapping a 1.3:1 photo flush to the right frame edge, crossed by three translucent polygons, a play disc, the lead line and a four-stop term line.
 */
?>
<!-- wp:group {"align": "full", "tagName": "section", "anchor": "top", "className": "kk-hero", "layout": {"type": "default"}} -->
<section id="top" class="wp-block-group alignfull kk-hero"><!-- wp:paragraph {"className": "kk-hero__lead"} -->
<p class="kk-hero__lead"><?php echo wp_kses_post( kyukyu_college_t( 'k41be54ea' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level": 1, "className": "kk-hero__name"} -->
<h1 class="wp-block-heading kk-hero__name"><?php echo wp_kses_post( kyukyu_college_t( 'kc3511b2a' ) ); ?><br><?php echo wp_kses_post( kyukyu_college_t( 'kc3511b2a' ) ); ?><br><span class="kk-l3"><?php echo wp_kses_post( kyukyu_college_t( 'kbbb52ccc' ) ); ?></span></h1>
<!-- /wp:heading -->
<!-- wp:group {"className": "kk-hero__photo sp-parallax", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-hero__photo sp-parallax"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kyukyu_college_img( 'p01-timing-compressions.webp' ); ?>" alt="<?php echo esc_attr( kyukyu_college_t( 'a8d95d77d' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="kk-disc" href="/#term" aria-label="<?php echo esc_attr( kyukyu_college_t( 'a2f08be57' ) ); ?>"><span class="kk-disc__btn"><svg viewBox="0 0 24 24" width="24" height="24" aria-hidden="true"><path fill="#fff" d="M9 6.5v11l9-5.5z"/></svg></span></a>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:html -->
<?php echo wp_kses_post( kyukyu_college_t( 'kb8fdd22e' ) ); ?>
<!-- /wp:html -->
<!-- wp:html -->
<ul class="kk-term"><li><strong><?php echo wp_kses_post( kyukyu_college_t( 'kf04aa701' ) ); ?></strong> <?php echo wp_kses_post( kyukyu_college_t( 'kce61e23b' ) ); ?></li><li><strong><?php echo wp_kses_post( kyukyu_college_t( 'kd207b4e0' ) ); ?></strong> <?php echo wp_kses_post( kyukyu_college_t( 'k5aab5973' ) ); ?></li><li><strong><?php echo wp_kses_post( kyukyu_college_t( 'k7ce6b228' ) ); ?></strong> <?php echo wp_kses_post( kyukyu_college_t( 'kd9f5674d' ) ); ?></li><li><strong><?php echo wp_kses_post( kyukyu_college_t( 'ka2866cd6' ) ); ?></strong> <?php echo wp_kses_post( kyukyu_college_t( 'k0ec14341' ) ); ?></li></ul>
<!-- /wp:html --></section>
<!-- /wp:group -->
