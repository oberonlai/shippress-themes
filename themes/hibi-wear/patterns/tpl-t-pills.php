<?php
/**
 * Title: Shop category pills
 * Slug: hibi-wear/tpl-t-pills
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Inserter: no
 * Description: Category pills linking to the shop categories.
 */
?>
<?php
$hw_cats = array( 'tops', 'shirts', 'bottoms', 'knitwear', 'outerwear' );
$hw_keys = array( 'tops' => 'cat_tops', 'shirts' => 'cat_shirts', 'bottoms' => 'cat_bottoms', 'knitwear' => 'cat_knitwear', 'outerwear' => 'cat_outerwear' );
?>
<!-- wp:html -->
<nav class="hw-pills" aria-label="<?php echo esc_attr( hibi_wear_t( 'wc_cats' ) ); ?>"><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( hibi_wear_t( 'all_cats' ) ); ?></a><?php foreach ( $hw_cats as $hw_c ) : ?><a href="<?php echo esc_url( home_url( '/product-category/' . $hw_c . '/' ) ); ?>"><?php echo esc_html( hibi_wear_t( $hw_keys[ $hw_c ] ) ); ?></a><?php endforeach; ?></nav>
<!-- /wp:html -->
