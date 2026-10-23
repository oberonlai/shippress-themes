<?php
/**
 * Title: Home: six people
 * Slug: megumi-pharmacy/front-people
 * Categories: megumi-pharmacy
 * Keywords: people, team, portrait
 * Viewport Width: 1440
 * Description: One 3:4 portrait of the founder beside a hairline list of the six people at the counter.
 */
$people = array(
	array( 'megumi-ward', 'Megumi Ward', 'founder & pharmacist' ),
	array( 'daniel-osei', 'Daniel Osei', 'pharmacist manager' ),
	array( 'leila-haddad', 'Leila Haddad', 'pharmacist, medicine reviews' ),
	array( 'ana-kovac', 'Ana Kovač', 'pharmacist, vaccinations & travel' ),
	array( 'samuel-brandt', 'Samuel Brandt', 'pharmacy technician' ),
	array( 'grace-liu', 'Grace Liu', 'pharmacy assistant' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mp-sec mp-people","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mp-sec mp-people"><!-- wp:group {"className":"mp-wrap mp-people__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mp-wrap mp-people__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mp-people__photo"} -->
<figure class="wp-block-image size-full mp-people__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-megumi.webp' ) ); ?>" alt="<?php echo esc_attr( megumi_pharmacy_t( 'a9481bd76' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mp-people__text","layout":{"type":"default"}} -->
<div class="wp-block-group mp-people__text"><!-- wp:group {"className":"sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker"><?php echo wp_kses_post( megumi_pharmacy_t( 'k78386ec8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mp-h2"} -->
<h2 class="wp-block-heading mp-h2"><?php echo wp_kses_post( megumi_pharmacy_t( 'k06db9b93' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( megumi_pharmacy_t( 'k0d3c22a3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-list sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-list sp-reveal sp-reveal--up"><?php foreach ( $people as $p ) : ?>
<!-- wp:paragraph {"className":"mp-person"} -->
<p class="mp-person"><a href="/people/#<?php echo esc_attr( $p[0] ); ?>"><span class="mp-person__name"><?php echo esc_html( $p[1] ); ?></span><span class="mp-person__role"><?php echo esc_html( $p[2] ); ?></span><span class="mp-pill mp-pill--line" aria-hidden="true"></span></a></p>
<!-- /wp:paragraph -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-more"} -->
<p class="mp-more"><a href="/people/"><?php echo wp_kses_post( megumi_pharmacy_t( 'k6b542441' ) ); ?></a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
