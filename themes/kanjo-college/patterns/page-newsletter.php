<?php
/**
 * Title: Page: Newsletter
 * Slug: kanjo-college/page-newsletter
 * Categories: kanjo-college
 * Keywords: page, inner, newsletter
 * Viewport Width: 1440
 * Description: Newsletter page: a short note on the term email and an email field.
 */
$kc = '';
$kc .= kanjo_college_head( array( 'chip' => 'Newsletter', 'title' => 'Newsletter', 'lead' => 'One short email before each term with the timetable, the mock paper dates and any change to study room hours.', 'photo' => 12, 'alt' => 'A woman in her fifties at a library carrel with a laptop and a calculator.', 'cap' => 'Newsletter · Halden', 'idx' => '10' ) );
$kc .= kanjo_college_sec( kanjo_college_group( kanjo_college_group( kanjo_college_sechead( 'Term email', 'Know the dates before the term starts' ) . kanjo_college_p( esc_html( 'Three emails a year, each sent about two weeks before a term begins: Spring from 12 January, Summer from 20 April and Autumn from 14 September. Each one lists the day and evening timetables, the dates of the week 6 and week 9 mock papers and the study room hours. There is no marketing in it, and you can leave at any time.' ) ) . kanjo_college_link( 'Read the latest news →', '/news/' ), 'kc-contact__text' ) . kanjo_college_group( kanjo_college_html( '<form class="kc-form" action="mailto:office@kanjo-college.example" method="post" enctype="text/plain"><p><label for="kc-nl">Email</label><input id="kc-nl" name="email" type="email" autocomplete="email" required></p><p><button class="wp-block-button__link wp-element-button" type="submit">Send me the term email</button></p></form>' ), 'kc-contact__form' ), 'kc-contact' ), 'kc-fees kc-contact-form', '' );
?>
<?php echo $kc; // phpcs:ignore WordPress.Security.EscapeOutput ?>
