<?php
/**
 * Title: Home: portrait index
 * Slug: asahi-gakuen/portrait-index
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Description: Eight people in a 4 x 2 index: four high-key cut-out portraits that break out of flat colour blocks (a collage) alternating with four quote tiles, each with a name, role or year and a link to the story.
 */
?>
<!-- wp:group {"tagName":"section","className":"ag-pi","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-pi">
<!-- wp:group {"className":"ag-sec__head","layout":{"type":"default"}} -->
<div class="wp-block-group ag-sec__head"><!-- wp:paragraph {"className":"ag-label"} -->
<p class="ag-label"><?php echo esc_html( asahi_gakuen_t( 'pi_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ag-sec__title"} -->
<h2 class="wp-block-heading ag-sec__title"><?php echo esc_html( asahi_gakuen_t( 'pi_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ag-pi__lead"} -->
<p class="ag-pi__lead"><?php echo esc_html( asahi_gakuen_t( 'pi_lead' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:html -->
<ul class="ag-pi__grid"><li class="ag-pi__c ag-pi__c--ph ag-pi__c--1"><a href="/about/"><div class="ag-pi__fig"><span class="ag-pi__block" aria-hidden="true"></span><img class="ag-pi__img" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/student-a-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( asahi_gakuen_t( 'alt_student_a' ) ); ?>" loading="lazy"/></div><p class="ag-pi__n"><?php echo esc_html( asahi_gakuen_t( 'pi1_n' ) ); ?></p><p class="ag-pi__r"><?php echo esc_html( asahi_gakuen_t( 'pi1_r' ) ); ?></p><span class="ag-pi__more"><?php echo esc_html( asahi_gakuen_t( 'pi_more' ) ); ?> <span aria-hidden="true">&rarr;</span></span></a></li><li class="ag-pi__c ag-pi__c--q ag-pi__c--2"><a href="/about/"><div class="ag-pi__fig"><blockquote class="ag-pi__q"><p><?php echo esc_html( asahi_gakuen_t( 'pi5_q' ) ); ?></p></blockquote></div><p class="ag-pi__n"><?php echo esc_html( asahi_gakuen_t( 'pi5_n' ) ); ?></p><p class="ag-pi__r"><?php echo esc_html( asahi_gakuen_t( 'pi5_r' ) ); ?></p><span class="ag-pi__more"><?php echo esc_html( asahi_gakuen_t( 'pi_more' ) ); ?> <span aria-hidden="true">&rarr;</span></span></a></li><li class="ag-pi__c ag-pi__c--ph ag-pi__c--3"><a href="/about/"><div class="ag-pi__fig"><span class="ag-pi__block" aria-hidden="true"></span><img class="ag-pi__img" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teacher-a-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( asahi_gakuen_t( 'alt_teacher_a' ) ); ?>" loading="lazy"/></div><p class="ag-pi__n"><?php echo esc_html( asahi_gakuen_t( 'pi2_n' ) ); ?></p><p class="ag-pi__r"><?php echo esc_html( asahi_gakuen_t( 'pi2_r' ) ); ?></p><span class="ag-pi__more"><?php echo esc_html( asahi_gakuen_t( 'pi_more' ) ); ?> <span aria-hidden="true">&rarr;</span></span></a></li><li class="ag-pi__c ag-pi__c--q ag-pi__c--4"><a href="/about/"><div class="ag-pi__fig"><blockquote class="ag-pi__q"><p><?php echo esc_html( asahi_gakuen_t( 'pi6_q' ) ); ?></p></blockquote></div><p class="ag-pi__n"><?php echo esc_html( asahi_gakuen_t( 'pi6_n' ) ); ?></p><p class="ag-pi__r"><?php echo esc_html( asahi_gakuen_t( 'pi6_r' ) ); ?></p><span class="ag-pi__more"><?php echo esc_html( asahi_gakuen_t( 'pi_more' ) ); ?> <span aria-hidden="true">&rarr;</span></span></a></li><li class="ag-pi__c ag-pi__c--q ag-pi__c--5"><a href="/about/"><div class="ag-pi__fig"><blockquote class="ag-pi__q"><p><?php echo esc_html( asahi_gakuen_t( 'pi7_q' ) ); ?></p></blockquote></div><p class="ag-pi__n"><?php echo esc_html( asahi_gakuen_t( 'pi7_n' ) ); ?></p><p class="ag-pi__r"><?php echo esc_html( asahi_gakuen_t( 'pi7_r' ) ); ?></p><span class="ag-pi__more"><?php echo esc_html( asahi_gakuen_t( 'pi_more' ) ); ?> <span aria-hidden="true">&rarr;</span></span></a></li><li class="ag-pi__c ag-pi__c--ph ag-pi__c--6"><a href="/about/"><div class="ag-pi__fig"><span class="ag-pi__block" aria-hidden="true"></span><img class="ag-pi__img" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/student-b-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( asahi_gakuen_t( 'alt_student_b' ) ); ?>" loading="lazy"/></div><p class="ag-pi__n"><?php echo esc_html( asahi_gakuen_t( 'pi3_n' ) ); ?></p><p class="ag-pi__r"><?php echo esc_html( asahi_gakuen_t( 'pi3_r' ) ); ?></p><span class="ag-pi__more"><?php echo esc_html( asahi_gakuen_t( 'pi_more' ) ); ?> <span aria-hidden="true">&rarr;</span></span></a></li><li class="ag-pi__c ag-pi__c--q ag-pi__c--7"><a href="/about/"><div class="ag-pi__fig"><blockquote class="ag-pi__q"><p><?php echo esc_html( asahi_gakuen_t( 'pi8_q' ) ); ?></p></blockquote></div><p class="ag-pi__n"><?php echo esc_html( asahi_gakuen_t( 'pi8_n' ) ); ?></p><p class="ag-pi__r"><?php echo esc_html( asahi_gakuen_t( 'pi8_r' ) ); ?></p><span class="ag-pi__more"><?php echo esc_html( asahi_gakuen_t( 'pi_more' ) ); ?> <span aria-hidden="true">&rarr;</span></span></a></li><li class="ag-pi__c ag-pi__c--ph ag-pi__c--8"><a href="/about/"><div class="ag-pi__fig"><span class="ag-pi__block" aria-hidden="true"></span><img class="ag-pi__img" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teacher-b-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( asahi_gakuen_t( 'alt_teacher_b' ) ); ?>" loading="lazy"/></div><p class="ag-pi__n"><?php echo esc_html( asahi_gakuen_t( 'pi4_n' ) ); ?></p><p class="ag-pi__r"><?php echo esc_html( asahi_gakuen_t( 'pi4_r' ) ); ?></p><span class="ag-pi__more"><?php echo esc_html( asahi_gakuen_t( 'pi_more' ) ); ?> <span aria-hidden="true">&rarr;</span></span></a></li></ul>
<!-- /wp:html --></section>
<!-- /wp:group -->
