<?php
/**
 * Title: Template: page
 * Slug: tochi-academy/tpl-page
 * Categories: tochi-academy
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<?php
$ta_map = array( 'about' => 'P04', 'courses' => 'P05', 'calendar' => 'P08', 'instructors' => 'P12', 'fees' => 'P09', 'stories' => 'P13', 'open-evening' => 'P14', 'contact' => 'P15', 'newsletter' => 'P06', 'privacy' => 'P07' );
$ta_slug = (string) get_post_field( 'post_name', get_queried_object_id() );
$ta_img  = isset( $ta_map[ $ta_slug ] ) ? $ta_map[ $ta_slug ] : 'P03';
?>
<!-- wp:group {"tagName":"main","className":"ta-main ta-page","layout":{"type":"default"}} -->
<main class="wp-block-group ta-main ta-page"><!-- wp:group {"className":"ta-page__head","layout":{"type":"default"}} -->
<div class="wp-block-group ta-page__head"><!-- wp:group {"className":"ta-page__headtext","layout":{"type":"default"}} -->
<div class="wp-block-group ta-page__headtext"><!-- wp:post-title {"level":1,"className":"ta-page__title"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","className":"ta-page__img"} -->
<figure class="wp-block-image size-large ta-page__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $ta_img . '.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:post-content {"className":"ta-page__body","layout":{"type":"constrained"}} /--></main>
<!-- /wp:group -->
