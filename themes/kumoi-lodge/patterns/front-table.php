<?php
/**
 * Title: Home: what the table serves
 * Slug: kumoi-lodge/front-table
 * Categories: kumoi-lodge
 * Keywords: lodge, home
 * Viewport Width: 1440
 * Description: Two 1:1 rounded squares (supper and breakfast) with a title, a few lines and a five-item list; a lead paragraph and an outline pill below.
 */
?>
<!-- wp:group {"className":"km-sec km-table","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"table"} -->
<section id="table" class="wp-block-group alignfull km-sec km-table"><!-- wp:group {"className":"km-col","layout":{"type":"default"}} -->
<div class="wp-block-group km-col"><!-- wp:heading {"level":2,"className":"km-title"} -->
<h2 class="wp-block-heading km-title"><?php echo esc_html( kumoi_lodge_t( 'table_label' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"km-duo sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group km-duo sp-stagger"><?php foreach ( array( 1 => 'kl-t1', 2 => 'kl-t2' ) as $n => $img ) : ?><!-- wp:group {"className":"km-sq sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-sq sp-reveal sp-reveal--up"><!-- wp:group {"className":"km-photo km-photo--sq sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group km-photo km-photo--sq sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kumoi_lodge_img( $img ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( kumoi_lodge_t( 'alt_t' . $n ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"km-card-title"} -->
<h3 class="wp-block-heading km-card-title"><?php kumoi_lodge_e( 'tb' . $n . '_h' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php kumoi_lodge_e( 'tb' . $n . '_p' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"km-meta km-meta--head"} -->
<p class="km-meta km-meta--head"><?php kumoi_lodge_e( 'tb' . $n . '_ml' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"km-ruled"} -->
<ul class="wp-block-list km-ruled"><?php foreach ( kumoi_lodge_a( 'tb' . $n . '_li' ) as $li ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $li ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"km-lead km-table__body"} -->
<p class="km-lead km-table__body"><?php echo esc_html( kumoi_lodge_t( 'table_body' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo kumoi_lodge_pill( kumoi_lodge_t( 'table_pill' ), '/the-table/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
