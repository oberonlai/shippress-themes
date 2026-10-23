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
<figure class="wp-block-image size-full mp-people__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-megumi.webp' ) ); ?>" alt="Pharmacist with short grey hair stands before light oak dispensary drawers, smiling."/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mp-people__text","layout":{"type":"default"}} -->
<div class="wp-block-group mp-people__text"><!-- wp:group {"className":"sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker">People</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mp-h2"} -->
<h2 class="wp-block-heading mp-h2">Six people,<br>one counter.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Megumi Ward opened this pharmacy in 2006, and she still explains a new medicine herself when she is on the counter. The same faces are here each week: Daniel Osei, Leila Haddad, Ana Kovač, Samuel Brandt, and Grace Liu, with Megumi. Names matter because a medicine is easier to ask about when the person who handed it over is here the following week. Nobody is asked to buy anything extra, and nobody is promised a result.</p>
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
<p class="mp-more"><a href="/people/">Meet the people</a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
