<?php
/**
 * Title: Page: Visit & Contact
 * Slug: shizuka-hearing/page-contact
 * Categories: shizuka-hearing
 * Viewport Width: 1440
 * Description: Inner page contact: scattered tile head with title strips, then the page content.
 */
?>
<!-- wp:group {"align":"full","className":"sh-phead sp-parallax sh-phead--t2","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-phead sp-parallax sh-phead--t2"><!-- wp:group {"className":"sh-ptiles sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sh-ptiles sp-parallax__layer"><?php echo shizuka_hearing_img( 'h15', 'sh-tile sh-pt sh-pt--a' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h06', 'sh-tile sh-pt sh-pt--b' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-phead__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sh-phead__copy"><!-- wp:group {"className":"sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group sh-head"><!-- wp:paragraph {"className":"sh-eyebrow"} -->
<p class="sh-eyebrow">VISIT &amp; CONTACT</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-sub"} -->
<p class="sh-sub">18 Harbour Lane, Northgate</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sh-pword","ariaHidden":true} -->
<p class="sh-pword" aria-hidden="true"><span class="sh-strip__in">VISIT</span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sh-strip sh-phead__h1"} -->
<h1 class="wp-block-heading sh-strip sh-phead__h1"><span class="sh-strip__in">Visit and contact</span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-lead"} -->
<p class="sh-lead">We welcome visitors to our quiet, accessible clinic in Northgate. Whether you wish to book a hearing check or attend our free monthly listening evening, our team is here to assist you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sh-prose sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-prose sp-stagger"><!-- wp:group {"className":"sh-prose__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__item sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"sh-prose__h"} -->
<h2 class="wp-block-heading sh-prose__h">Clinic Location and Transport</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sh-prose__b","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__b"><!-- wp:paragraph -->
<p>Shizuka Hearing is located on the second floor at 18 Harbour Lane, Northgate. The clinic is easily accessible by public transport, situated just a three-minute walk from the &quot;Harbour Lane&quot; tram stop. For visitors arriving on foot or by car, step-free access is provided via a spacious elevator directly to our second-floor entrance. Our consulting rooms and sound booth are designed with wide doorways to accommodate wheelchairs and walking aids. If you require any additional assistance upon arrival, Priya Nair at our reception desk is always ready to assist you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-prose__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__item sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"sh-prose__h"} -->
<h2 class="wp-block-heading sh-prose__h">Opening Hours and Listening Evenings</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sh-prose__b","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__b"><!-- wp:paragraph -->
<p>Our clinic is open Monday through Friday from 9:00 to 18:00, with extended evening hours on Thursdays until 20:00 to accommodate working schedules. On Saturdays, Claire Dubois hosts our weekend clinic from 9:00 to 13:00. We are closed on Sundays and public holidays. On the third Thursday of every month at 18:30, we host our free open listening evening. These informal, monthly gatherings provide a relaxed opportunity to meet our audiologists, ask general questions about hearing care, explore acoustic technology, and learn practical strategies for managing conversation in noisy settings.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sh-book","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-book"><!-- wp:group {"className":"sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group sh-head"><!-- wp:paragraph {"className":"sh-eyebrow"} -->
<p class="sh-eyebrow">BOOK</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-sub"} -->
<p class="sh-sub">Call, write, or send a request</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-inner sh-book__in","layout":{"type":"default"}} -->
<div class="wp-block-group sh-inner sh-book__in"><!-- wp:heading {"level":2,"className":"sh-prose__h"} -->
<h2 class="wp-block-heading sh-prose__h">Booking an Appointment</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>To schedule a consultation, you can call our reception team directly at +00 555 0184 or email hello@shizuka-hearing.example. You may also complete our online booking request form by providing your name, email address, telephone number, preferred appointment day, and a brief message regarding your hearing concerns. Priya Nair will contact you promptly to confirm your appointment time and provide preparation details. We remind patients that we request at least 24 hours of advance notice for any appointment cancellations or schedule changes. We look forward to welcoming you to Harbour Lane.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="sh-form" action="mailto:hello@shizuka-hearing.example" method="post" enctype="text/plain"><p><label for="sh-n">Name</label><input id="sh-n" name="name" type="text" required></p><p><label for="sh-e">Email</label><input id="sh-e" name="email" type="email" required></p><p><label for="sh-d">Preferred day</label><input id="sh-d" name="day" type="text"></p><p><label for="sh-m">Message</label><textarea id="sh-m" name="message" rows="5"></textarea></p><p><button type="submit" class="sh-formbtn">Send booking request</button></p></form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
